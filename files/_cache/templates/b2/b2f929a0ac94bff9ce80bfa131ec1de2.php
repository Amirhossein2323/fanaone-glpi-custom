<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/parts/user_header.html.twig */
class __TwigTemplate_7bcb6c8c606dfec496b4d651c1d3188c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["rand_header"] = twig_random($this->env);
        // line 35
        echo "
<div class=\"btn-group\">
   ";
        // line 37
        if (($context["is_debug_active"] ?? null)) {
            // line 38
            echo "      <button class=\"btn btn-outline-danger d-none d-md-block see_debug\" role=\"button\">
         <i class=\"ti ti-bug fa-lg mt-1\" title=\" ";
            // line 39
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 40
            echo twig_escape_filter($this->env, __("Display GLPI debug informations"), "html", null, true);
            echo "</span>
         </i>
      </button>
   ";
        }
        // line 44
        echo "
   ";
        // line 45
        if ( !(null === ($context["user"] ?? null))) {
            // line 46
            echo "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 48
            if (($context["is_debug_active"] ?? null)) {
                echo "bg-red-lt";
            }
            echo "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
               ";
            // line 50
            if ( !($context["anonymous"] ?? null)) {
                // line 51
                echo "
                  ";
                // line 52
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,                 // line 53
($context["user"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 56
                echo "


                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 60) &&  !(null === (($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)))) ? ((($__internal_compile_2 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null)) : ("")))), "truncate", [0 => 35, 1 => "..."], "method", false, false, false, 60), "html", null, true);
                echo "</div>
                     ";
                // line 61
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name"));
                // line 62
                echo "                     <div class=\"mt-1 small text-muted\" title=\"";
                echo twig_escape_filter($this->env, ($context["entity_completename"] ?? null), "html", null, true);
                echo "\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                echo "
                     </div>
                  </div>

               ";
            }
            // line 69
            echo "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            echo "</h6>
              <div class=\"dropdown-menu-background\">

               ";
            // line 74
            if ( !($context["anonymous"] ?? null)) {
                // line 75
                echo "                  ";
                echo twig_include($this->env, $context, "layout/parts/profile_selector.html.twig");
                echo "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 79
                if ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", twig_constant("UPDATE"))) {
                    // line 80
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    echo "\"
                        class=\"dropdown-item ";
                    // line 81
                    if (($context["is_debug_active"] ?? null)) {
                        echo "bg-red-lt";
                    }
                    echo "\"
                        title=\"";
                    // line 82
                    echo twig_escape_filter($this->env, __("Change mode"), "html", null, true);
                    echo "\">
                        <i class=\"ti fa-fw ti-bug debug\"></i>
                        ";
                    // line 84
                    echo twig_escape_filter($this->env, ((($context["is_debug_active"] ?? null)) ? (__("Debug mode enabled")) : (__("Debug mode disabled"))), "html", null, true);
                    echo "
                     </a>
                  ";
                }
                // line 87
                echo "               ";
            }
            // line 88
            echo "
               ";
            // line 90
            echo "
               <div class=\"dropdown-item\">
                  <i class=\"ti fa-fw ti-language\"></i>
                  ";
            // line 93
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["help_url"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-help\"></i>
                  ";
            // line 100
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "
               </a>

               <a href=\"#\" class=\"dropdown-item\" title=\"";
            // line 103
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "\"
                  id=\"show_about_modal_";
            // line 104
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-info-circle\"></i>
                  ";
            // line 106
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "
                  ";
            // line 107
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 108
                echo "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
            }
            // line 112
            echo "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-adjustments-alt\"></i>
                  ";
            // line 118
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "
               </a>
               <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) ? ("?noAUTO=1") : ("")))), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-logout\"></i>
                  ";
            // line 122
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "
               </a>
              </div>
                          </div>
         </div>
      </div>

      <div class=\"modal fade\" id=\"about_modal_";
            // line 129
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
            // line 133
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 134
            echo twig_escape_filter($this->env, __("Close"), "html", null, true);
            echo "\"></button>
               </div>
               <div class=\"modal-body\">
                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
            // line 138
            echo twig_escape_filter($this->env, twig_constant("GLPI_VERSION"), "html", null, true);
            echo "
                     Copyright (C) 2015-";
            // line 139
            echo twig_escape_filter($this->env, twig_constant("GLPI_YEAR"), "html", null, true);
            echo " Teclib' and contributors
                  </a></p>
                  ";
            // line 141
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 142
                echo "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                // line 144
                echo twig_escape_filter($this->env, __("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                echo "\">
                           ";
                // line 145
                echo twig_escape_filter($this->env, twig_sprintf(__("A new version is available: %s."), ($context["founded_new_version"] ?? null)), "html", null, true);
                echo "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
            }
            // line 152
            echo "               </div>
            </div>
         </div>
      </div>

   ";
        } elseif (twig_constant("GLPI_DEMO_MODE")) {
            // line 158
            echo "      <div class=\"dropdown-item\">
         <i class=\"fas fa-fw fa-language\"></i>
         ";
            // line 160
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
      </div>

   ";
        }
        // line 164
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 168
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 170
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").remove().modal(\"show\");
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/user_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 170,  316 => 168,  310 => 164,  303 => 160,  299 => 158,  291 => 152,  281 => 145,  277 => 144,  273 => 142,  271 => 141,  266 => 139,  262 => 138,  255 => 134,  251 => 133,  244 => 129,  234 => 122,  227 => 120,  222 => 118,  215 => 116,  209 => 112,  203 => 108,  201 => 107,  197 => 106,  192 => 104,  188 => 103,  182 => 100,  175 => 98,  167 => 93,  162 => 90,  159 => 88,  156 => 87,  150 => 84,  145 => 82,  139 => 81,  134 => 80,  132 => 79,  124 => 75,  122 => 74,  116 => 71,  112 => 69,  104 => 64,  98 => 62,  96 => 61,  92 => 60,  86 => 56,  84 => 53,  83 => 52,  80 => 51,  78 => 50,  71 => 48,  67 => 46,  65 => 45,  62 => 44,  55 => 40,  51 => 39,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/user_header.html.twig", "/var/www/html/glpi/templates/layout/parts/user_header.html.twig");
    }
}
