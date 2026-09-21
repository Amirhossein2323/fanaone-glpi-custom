<?php

function plugin_fanaonesms_install()
{
    Config::setConfigurationValues('plugin:fanaonesms', PluginFanaonesmsConfig::defaults());
    return true;
}

function plugin_fanaonesms_uninstall()
{
    Config::deleteConfigurationValues('plugin:fanaonesms', array_keys(PluginFanaonesmsConfig::defaults()));
    return true;
}

function plugin_fanaonesms_item_add(CommonDBTM $item)
{
    if ($item instanceof Ticket) {
        PluginFanaonesmsSender::notify('ticket_new', $item);
        return;
    }

    if ($item instanceof ITILFollowup && ($item->fields['itemtype'] ?? '') === Ticket::class) {
        $ticket = new Ticket();
        if ($ticket->getFromDB((int) ($item->fields['items_id'] ?? 0))) {
            PluginFanaonesmsSender::notify('followup_add', $ticket);
        }
        return;
    }

    if ($item instanceof TicketTask) {
        $ticket = new Ticket();
        if ($ticket->getFromDB((int) ($item->fields['tickets_id'] ?? 0))) {
            PluginFanaonesmsSender::notify('task_add', $ticket);
        }
    }
}

function plugin_fanaonesms_item_update(CommonDBTM $item)
{
    if (!($item instanceof Ticket)) {
        return;
    }

    $event = 'ticket_update';
    if (in_array('status', $item->updates ?? [], true)) {
        $status = (int) ($item->fields['status'] ?? 0);
        if ($status === CommonITILObject::SOLVED) {
            $event = 'ticket_solved';
        } elseif ($status === CommonITILObject::CLOSED) {
            $event = 'ticket_closed';
        }
    }
    PluginFanaonesmsSender::notify($event, $item);
}
