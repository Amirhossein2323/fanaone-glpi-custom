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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_29457c28ecf1a4069beda3484596b6d1 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 86
        echo "

";
        // line 107
        echo "

";
        // line 129
        echo "

";
        // line 158
        echo "

";
        // line 183
        echo "

";
        // line 198
        echo "

";
        // line 279
        echo "
";
        // line 313
        echo "
";
        // line 346
        echo "
";
        // line 380
        echo "

";
        // line 409
        echo "
";
        // line 448
        echo "
";
        // line 453
        echo "
";
        // line 475
        echo "
";
        // line 500
        echo "
";
        // line 528
        echo "
";
        // line 545
        echo "
";
        // line 568
        echo "
";
        // line 592
        echo "
";
        // line 615
        echo "
";
        // line 637
        echo "
";
        // line 662
        echo "
";
        // line 673
        echo "
";
        // line 695
        echo "
";
        // line 718
        echo "
";
        // line 752
        echo "
";
        // line 763
        echo "
";
        // line 798
        echo "
";
        // line 809
        echo "
";
        // line 819
        echo "

";
        // line 837
        echo "

";
        // line 896
        echo "

";
        // line 927
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 77), ($context["name"] ?? null), [], "array", true, true, false, 77) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 78
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (($context["withtemplate"] ?? null) == 2), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 78), 4 => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null)]);
                // line 79
                echo "   ";
            } else {
                // line 80
                echo "      ";
                $context["value"] = null;
                // line 81
                echo "   ";
            }
            // line 82
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 83
            echo "
   ";
            // line 84
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 84, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 89
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 90
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 90), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 90)) {
                // line 91
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 92
                echo "   ";
            }
            // line 93
            echo "
   ";
            // line 94
            ob_start(function () { return ''; });
            // line 95
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 95), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 96), "html", null, true);
            echo "\"
             name=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 98
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, ("maxlength=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 99
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 99)) ? ("readonly") : (""));
            echo "
             ";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 100)) ? ("disabled") : (""));
            echo "
             ";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 101)) ? ("multiple") : (""));
            echo " ";
            // line 102
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 102)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            echo "
   ";
            // line 105
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 105, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 110
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 110), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 110)) {
                // line 111
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 112
                echo "   ";
            }
            // line 113
            echo "
   ";
            // line 114
            $context["options"] = twig_array_merge(["center" => true],             // line 116
($context["options"] ?? null));
            // line 117
            echo "
   ";
            // line 118
            ob_start(function () { return ''; });
            // line 119
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 121
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 122
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 122)) ? ("readonly") : (""));
            echo "
             ";
            // line 123
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 123)) ? ("required") : (""));
            echo "
             ";
            // line 124
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 124)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "
   ";
            // line 127
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 127, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 132
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 132), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true],                 // line 135
($context["options"] ?? null));
                // line 136
                echo "   ";
            }
            // line 137
            echo "   ";
            $context["options"] = twig_array_merge(["no_value" => 0, "yes_value" => 1],             // line 140
($context["options"] ?? null));
            // line 141
            echo "
   ";
            // line 142
            ob_start(function () { return ''; });
            // line 143
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 144), "html", null, true);
            echo "\" />
         <input type=\"checkbox\" name=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 145), "html", null, true);
            echo "\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 146
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 147
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 147)) ? ("readonly") : (""));
            echo "
                ";
            // line 148
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 148)) ? ("required") : (""));
            echo "
                ";
            // line 149
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 149)) ? ("disabled") : (""));
            echo " />
         ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 150)) {
                // line 151
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 151), "html", null, true);
                echo "</span>
         ";
            }
            // line 153
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo "
   ";
            // line 156
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 156, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 161
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161)))) {
                // line 162
                echo "      ";
                // line 163
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 164
                echo "   ";
            }
            // line 165
            echo "
   ";
            // line 166
            if ((($context["value"] ?? null) == "")) {
                // line 167
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 167)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 167)) : (0));
                // line 168
                echo "   ";
            }
            // line 169
            echo "
   ";
            // line 170
            ob_start(function () { return ''; });
            // line 171
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 172), "html", null, true);
            echo "\"
             name=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 174
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 174)) ? ("readonly") : (""));
            echo "
         ";
            // line 175
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 175)) ? ("disabled") : (""));
            echo "
         ";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 176)) ? ("required") : (""));
            echo "
         ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 177)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 177), "html", null, true);
                echo "\"";
            }
            // line 178
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 178)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 178), "html", null, true);
                echo "\"";
            }
            // line 179
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 179)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 179), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 181, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 185
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 186
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 187
            echo "   ";
            ob_start(function () { return ''; });
            // line 188
            echo "      <span class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 188), "html", null, true);
            echo "\" readonly>
         ";
            // line 189
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 190
                echo "            &nbsp;
         ";
            } else {
                // line 192
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 194
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 196
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 196, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 209
($context["options"] ?? null));
            // line 210
            echo "
   ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 211), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 211)) {
                // line 212
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 213
                echo "   ";
            }
            // line 214
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 214))));
            // line 215
            echo "
   ";
            // line 216
            ob_start(function () { return ''; });
            // line 217
            echo "      ";
            // line 218
            echo "      <textarea class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 218), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 220
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 220)) ? ("disabled") : (""));
            echo "
                ";
            // line 221
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 221)) ? ("readonly") : (""));
            echo "
                ";
            // line 222
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 222)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 224
            echo "
   ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 225)) {
                // line 226
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 227
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 228
($context["options"] ?? null), "rand", [], "any", false, false, false, 228), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 230
($context["options"] ?? null), "disabled", [], "any", true, true, false, 230)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 230), false)) : (false))]);
                // line 232
                echo "   ";
            }
            // line 233
            echo "
   ";
            // line 234
            $context["add_html"] = "";
            // line 235
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 235) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 235))) {
                // line 236
                echo "      ";
                ob_start(function () { return ''; });
                // line 237
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 238
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 240
($context["options"] ?? null), "uploads", [], "any", false, false, false, 240), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 241
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 241), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 241)]]);
                // line 243
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 244
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 244) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 244)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 244)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 244))) {
                // line 245
                echo "      ";
                ob_start(function () { return ''; });
                // line 246
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 247
($context["id"] ?? null), "name" =>                 // line 248
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 250
($context["options"] ?? null), "uploads", [], "any", false, false, false, 250), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 251
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 251), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 251)]]);
                // line 253
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 254
                echo "   ";
            }
            // line 255
            echo "
   ";
            // line 256
            if ((($context["add_html"] ?? null) != "")) {
                // line 257
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 257)) {
                    // line 258
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 258));
                    // line 259
                    echo "      ";
                }
                // line 260
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 261
                echo "   ";
            }
            // line 262
            echo "
   ";
            // line 263
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 263, $context, $this->getSourceContext());
            echo "
   ";
            // line 264
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 264) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 265
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 269
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 270), "html", null, true);
                echo ",
                  '";
                // line 271
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 271)]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 280
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 281
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 281), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 281)) {
                // line 282
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 283
                echo "   ";
            }
            // line 284
            echo "
   ";
            // line 285
            if ((($context["value"] ?? null) == "NULL")) {
                // line 286
                echo "      ";
                $context["value"] = null;
                // line 287
                echo "   ";
            }
            // line 288
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 288)) {
                // line 289
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 290
                    echo "         ";
                    $context["class"] = "warn";
                    // line 291
                    echo "      ";
                }
                // line 292
                echo "   ";
            } else {
                // line 293
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 293)) {
                    // line 294
                    echo "         ";
                    $context["class"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 294);
                    // line 295
                    echo "      ";
                } else {
                    // line 296
                    echo "         ";
                    $context["class"] = "";
                    // line 297
                    echo "      ";
                }
                // line 298
                echo "   ";
            }
            // line 299
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 300), "html", null, true);
            echo "\">
      ";
            // line 302
            echo "      ";
            // line 303
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 303), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 304
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 305
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 305)) ? ("required") : (""));
            echo "
             ";
            // line 306
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 306)) ? ("readonly") : (""));
            echo "
             ";
            // line 307
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 307)) ? ("disabled") : (""));
            echo " />
      ";
            // line 308
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 308)) {
                // line 309
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 311
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 314
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 315
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 316
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 316))], ($context["options"] ?? null));
            // line 317
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 318
            echo "
   ";
            // line 319
            ob_start(function () { return ''; });
            // line 320
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 320, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 326
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 330
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 330)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 331
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 331)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 332
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 343
            echo "
   ";
            // line 344
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 344, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 347
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 348
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 349
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 349))], ($context["options"] ?? null));
            // line 350
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 351
            echo "
   ";
            // line 352
            ob_start(function () { return ''; });
            // line 353
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 353, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 356), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 364
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 364)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 365
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 365)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 366
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["locale"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 377
            echo "
   ";
            // line 378
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 378, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 382
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 383
            echo "   ";
            ob_start(function () { return ''; });
            // line 384
            echo "      <input id=\"%id%\"
             class=\"form-control ";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 385), "html", null, true);
            echo "\"
             name=\"";
            // line 386
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 387
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 387)) ? ("readonly") : (""));
            echo "
         ";
            // line 388
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 388)) ? ("disabled") : (""));
            echo "
         ";
            // line 389
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 389)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 407
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 407, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 410
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 411
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password", "is_disclosable" => false, "rand" => (((twig_get_attribute($this->env, $this->source,             // line 414
($context["options"] ?? null), "rand", [], "any", true, true, false, 414) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 414)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 414)) : (twig_random($this->env)))],             // line 415
($context["options"] ?? null));
            // line 416
            echo "   ";
            $context["options"] = twig_array_merge(["id" => ((twig_get_attribute($this->env, $this->source,             // line 417
($context["options"] ?? null), "id", [], "any", true, true, false, 417)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 417)) : ((($context["name"] ?? null) . twig_random($this->env)))), "clearable" => ((twig_get_attribute($this->env, $this->source,             // line 418
($context["options"] ?? null), "clearable", [], "any", true, true, false, 418)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 418)) : ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 418)))],             // line 419
($context["options"] ?? null));
            // line 420
            echo "
   ";
            // line 421
            ob_start(function () { return ''; });
            // line 422
            echo "      <input type=\"password\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 422), "html", null, true);
            echo "\"
             class=\"form-control ";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 423), "html", null, true);
            echo "\"
             name=\"";
            // line 424
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
             value=\"";
            // line 425
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 425)) ? (print (twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
         ";
            // line 426
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 426)) ? ("readonly") : (""));
            echo "
         ";
            // line 427
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 427)) ? ("disabled") : (""));
            echo "
         ";
            // line 428
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 428)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 430
            echo "   ";
            ob_start(function () { return ''; });
            // line 431
            echo "      &nbsp;<i class=\"far fa-eye pointer disclose\" onmousedown=\"showDisclosablePasswordField('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 431), "html", null, true);
            echo "')\"
               onmouseup=\"hideDisclosablePasswordField('";
            // line 432
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 432), "html", null, true);
            echo "')\"
               onmouseout=\"hideDisclosablePasswordField('";
            // line 433
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 433), "html", null, true);
            echo "')\"></i>
      &nbsp;<i class=\"fa fa-paste pointer disclose\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
            // line 434
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 434), "html", null, true);
            echo "')\"></i>
   ";
            $context["btn_group"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 436
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 436)) {
                // line 437
                echo "      ";
                $context["label"] = (($context["label"] ?? null) . ($context["btn_group"] ?? null));
                // line 438
                echo "   ";
            }
            // line 439
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 439)) {
                // line 440
                echo "      ";
                ob_start(function () { return ''; });
                // line 441
                echo "         <input type=\"checkbox\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">&nbsp;<label for=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __("Clear"), "html", null, true);
                echo "</label>
      ";
                $context["clear_chk"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 443
                echo "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["clear_chk"] ?? null));
                // line 444
                echo "   ";
            }
            // line 445
            echo "
   ";
            // line 446
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 446, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 449
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 450
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 451
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 451, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 454
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 455
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 457
($context["name"] ?? null), "simple" => false],             // line 459
($context["options"] ?? null));
            // line 460
            echo "   ";
            ob_start(function () { return ''; });
            // line 461
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 461)) {
                // line 462
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control ";
                // line 463
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 463), "html", null, true);
                echo "\"
               name=\"";
                // line 464
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 465
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mulitple", [], "any", false, false, false, 465)) ? ("multiple") : (""));
                echo "
               ";
                // line 466
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 466)) ? ("readonly") : (""));
                echo "
               ";
                // line 467
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 467)) ? ("disabled") : (""));
                echo "
               ";
                // line 468
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 468)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 470
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
                // line 471
                echo "      ";
            }
            // line 472
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 473
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 473, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 476
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 477
            echo "   ";
            ob_start(function () { return ''; });
            // line 478
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 479
            $context["clearable"] = (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["clearable"] ?? null) : null);
            // line 480
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 480) &&  !(null === (($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["url"] ?? null) : null)) : (null));
            // line 481
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 482
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 483
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]);
                echo ">
         ";
            }
            // line 485
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]);
            echo " />
         ";
            // line 486
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 487
                echo "            </a>
         ";
            }
            // line 489
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 490
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 491
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 492
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 496
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 498
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 498, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 501
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 502
            echo "   ";
            ob_start(function () { return ''; });
            // line 503
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 505
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 506
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_11 =                 // line 509
($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["clearable"] ?? null) : null), "no_label" => true]], 506, $context, $this->getSourceContext());
                // line 511
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            echo "      </div>
      ";
            // line 515
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 515, $context, $this->getSourceContext());
            // line 518
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 520
            echo "
   ";
            // line 521
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 521)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 521)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 521))));
            // line 522
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 522, $context, $this->getSourceContext());
            echo "
   ";
            // line 523
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 523, $context, $this->getSourceContext());
            // line 526
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 529
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 530
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 530)) {
                // line 531
                echo "      ";
                $context["options"] = twig_array_merge(["mb" => "mb-0"],                 // line 533
($context["options"] ?? null));
                // line 534
                echo "   ";
            }
            // line 535
            echo "   ";
            ob_start(function () { return ''; });
            // line 536
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control ";
            // line 537
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 537), "html", null, true);
            echo "\"
             name=\"";
            // line 538
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 539
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 539)) ? ("readonly") : (""));
            echo "
         ";
            // line 540
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 540)) ? ("disabled") : (""));
            echo "
         ";
            // line 541
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 541)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 543
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 543, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 546
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 547
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 550
($context["options"] ?? null));
            // line 551
            echo "
   ";
            // line 552
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 552)) {
                // line 553
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 554
                echo "   ";
            }
            // line 555
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 555), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 555)) {
                // line 556
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 557
                echo "   ";
            }
            // line 558
            echo "
   ";
            // line 559
            ob_start(function () { return ''; });
            // line 560
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 561
($context["value"] ?? null), "rand" =>             // line 562
($context["rand"] ?? null)],             // line 563
($context["options"] ?? null))]);
            // line 564
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 565
            echo "
   ";
            // line 566
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 566))])], 566, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 569
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 570
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 573
($context["options"] ?? null));
            // line 574
            echo "
   ";
            // line 575
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 575)) {
                // line 576
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 577
                echo "   ";
            }
            // line 578
            echo "
   ";
            // line 579
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 579), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 579)) {
                // line 580
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 581
                echo "   ";
            }
            // line 582
            echo "
   ";
            // line 583
            ob_start(function () { return ''; });
            // line 584
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 585
($context["value"] ?? null)), "rand" =>             // line 586
($context["rand"] ?? null)],             // line 587
($context["options"] ?? null))]);
            // line 588
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 589
            echo "
   ";
            // line 590
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 590))])], 590, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 593
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 594
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 597
($context["options"] ?? null));
            // line 598
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 598), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 598)) {
                // line 599
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 600
                echo "   ";
            }
            // line 601
            echo "
   ";
            // line 602
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 602)) {
                // line 603
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 604
                echo "   ";
            }
            // line 605
            echo "
   ";
            // line 606
            ob_start(function () { return ''; });
            // line 607
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 608
($context["value"] ?? null), "rand" =>             // line 609
($context["rand"] ?? null)],             // line 610
($context["options"] ?? null))]);
            // line 611
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 612
            echo "
   ";
            // line 613
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 613))])], 613, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 616
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 617
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 620
($context["options"] ?? null));
            // line 621
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 621), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 621)) {
                // line 622
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 623
                echo "   ";
            }
            // line 624
            echo "
   ";
            // line 625
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 625)) {
                // line 626
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 627
                echo "   ";
            }
            // line 628
            echo "
   ";
            // line 629
            ob_start(function () { return ''; });
            // line 630
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 631
($context["rand"] ?? null)],             // line 632
($context["options"] ?? null))]);
            // line 633
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 634
            echo "
   ";
            // line 635
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 635))])], 635, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 638
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 639
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 642
($context["options"] ?? null));
            // line 643
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 643), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 643)) {
                // line 644
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 645
                echo "   ";
            }
            // line 646
            echo "
   ";
            // line 647
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 647)) {
                // line 648
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 649
                echo "   ";
            }
            // line 650
            echo "
   ";
            // line 651
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 651)) ? (_twig_default_filter((($__internal_compile_12 = ($context["options"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["types"] ?? null) : null), [])) : ([]));
            // line 652
            echo "
   ";
            // line 653
            ob_start(function () { return ''; });
            // line 654
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 655
($context["rand"] ?? null), "value" =>             // line 656
($context["value"] ?? null)],             // line 657
($context["options"] ?? null))]);
            // line 658
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 659
            echo "
   ";
            // line 660
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 660))])], 660, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 663
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 664
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 666
($context["options"] ?? null));
            // line 667
            echo "
   ";
            // line 668
            ob_start(function () { return ''; });
            // line 669
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 670
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 671
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 671))])], 671, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 674
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 675
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 678
($context["options"] ?? null));
            // line 679
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 679), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 679)) {
                // line 680
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 681
                echo "   ";
            }
            // line 682
            echo "
   ";
            // line 683
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 683)) {
                // line 684
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 685
                echo "   ";
            }
            // line 686
            echo "
   ";
            // line 687
            ob_start(function () { return ''; });
            // line 688
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 689
($context["rand"] ?? null)],             // line 690
($context["options"] ?? null))]);
            // line 691
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 692
            echo "
   ";
            // line 693
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 693))])], 693, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 696
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 697
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 700
($context["options"] ?? null));
            // line 701
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 701), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 701)) {
                // line 702
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 703
                echo "   ";
            }
            // line 704
            echo "
   ";
            // line 705
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 705)) {
                // line 706
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 707
                echo "   ";
            }
            // line 708
            echo "
   ";
            // line 709
            ob_start(function () { return ''; });
            // line 710
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 711
($context["rand"] ?? null), "value" =>             // line 712
($context["value"] ?? null)],             // line 713
($context["options"] ?? null))]);
            // line 714
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 715
            echo "
   ";
            // line 716
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 716))])], 716, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 719
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 720
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 720)) {
                // line 721
                echo "      ";
                // line 722
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 723
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 726
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 727
                echo "   ";
            }
            // line 728
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 731
($context["options"] ?? null));
            // line 732
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 732), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 732)) {
                // line 733
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 734
                echo "   ";
            }
            // line 735
            echo "
   ";
            // line 736
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 736)) {
                // line 737
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 738
                echo "   ";
            }
            // line 739
            echo "
   ";
            // line 740
            ob_start(function () { return ''; });
            // line 741
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 742
($context["name"] ?? null), "value" =>             // line 743
($context["value"] ?? null), "rand" =>             // line 744
($context["rand"] ?? null)],             // line 745
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 747
            echo "
   ";
            // line 748
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 749
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 749))])], 749, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 753
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 754
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 755
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 756
                echo "   ";
            }
            // line 757
            echo "
   ";
            // line 758
            ob_start(function () { return ''; });
            // line 759
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 761
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 761, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 764
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 765
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 772
($context["options"] ?? null));
            // line 773
            echo "
   ";
            // line 774
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 774), ($context["name"] ?? null), [], "array", true, true, false, 774)) {
                // line 775
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 775)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["name"] ?? null)] ?? null) : null)]);
                // line 776
                echo "   ";
            } elseif (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 776))) {
                // line 777
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 778
                echo "   ";
            }
            // line 779
            echo "
   ";
            // line 780
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 780)) {
                // line 781
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 783
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 783)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 783)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 783))));
                // line 784
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 785
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 785)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 785)) : (""));
                // line 786
                echo "
      ";
                // line 787
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 787) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 787), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 787))) {
                    // line 788
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 788)) {
                        // line 789
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 789, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 790
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 790)) {
                        // line 791
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 791, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 793
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 793, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 795
                    echo "      ";
                }
                // line 796
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 799
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 800
            echo "   ";
            ob_start(function () { return ''; });
            // line 801
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 802
            if ( !(null === ($context["value"] ?? null))) {
                // line 803
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 805
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 807
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 807))])], 807, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 810
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 811
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 812
            echo "
   ";
            // line 813
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 813)) {
                // line 814
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 814, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 816
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 816, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 821
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 822
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 825
($context["options"] ?? null));
            // line 826
            echo "
   ";
            // line 827
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 827) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 827)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 827)) : ("col-12 col-sm-6"));
            // line 828
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 828)) {
                // line 829
                echo "      ";
                $context["class"] = "col-12";
                // line 830
                echo "   ";
            }
            // line 831
            echo "
   <div class=\"";
            // line 832
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 832), "html", null, true);
            echo "\">
      ";
            // line 833
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 834
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 839
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 840
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 851
($context["options"] ?? null));
            // line 852
            echo "
   ";
            // line 853
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 853)) {
                // line 854
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 857
                echo "
      ";
                // line 858
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 858)) {
                    // line 859
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 863
                    echo "      ";
                }
                // line 864
                echo "   ";
            }
            // line 865
            echo "
   ";
            // line 866
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 866)) {
                // line 867
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 871
                echo "   ";
            }
            // line 872
            echo "
   ";
            // line 873
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 873)) {
                // line 874
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 875
($context["options"] ?? null), "label_class", [], "any", false, false, false, 875) . " text-xxl-end")]);
                // line 877
                echo "   ";
            }
            // line 878
            echo "
   ";
            // line 879
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 879))) {
                // line 880
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 880)]);
                // line 881
                echo "   ";
            } else {
                // line 882
                echo "      ";
                $context["extra_attribs"] = "";
                // line 883
                echo "   ";
            }
            // line 884
            echo "
   <div class=\"form-field row ";
            // line 885
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 885), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 885), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 885), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 886
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 886))], 886, $context, $this->getSourceContext());
            echo "
      ";
            // line 887
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 887)) {
                // line 888
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 889
                echo "      ";
            }
            // line 890
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 890), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 891
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 892
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 898
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 899
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 905
($context["options"] ?? null));
            // line 906
            echo "
   ";
            // line 907
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 907)) {
                // line 908
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 911
                echo "   ";
            }
            // line 912
            echo "
   ";
            // line 913
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 913))) {
                // line 914
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 914)]);
                // line 915
                echo "   ";
            } else {
                // line 916
                echo "      ";
                $context["extra_attribs"] = "";
                // line 917
                echo "   ";
            }
            // line 918
            echo "
   <div class=\"form-field ";
            // line 919
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 919), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 919), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 919), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 920
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 920))], 920, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 921
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 921), "html", null, true);
            echo " field-container\">
         ";
            // line 922
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 924
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 929
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 930
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false, "locked_value" => null],             // line 933
($context["options"] ?? null));
            // line 934
            echo "
   ";
            // line 935
            $context["required_mark"] = "";
            // line 936
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 936), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 936)], "method", false, false, false, 936) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 936))) {
                // line 937
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 938
                echo "   ";
            }
            // line 939
            echo "
   ";
            // line 940
            $context["helper"] = "";
            // line 941
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 941)) {
                // line 942
                echo "      ";
                ob_start(function () { return ''; });
                // line 943
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 944
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 944), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 948
                echo "   ";
            }
            // line 949
            echo "
   ";
            // line 950
            $context["locked_mark"] = "";
            // line 951
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 951)) {
                // line 952
                echo "      ";
                ob_start(function () { return ''; });
                // line 953
                echo "        ";
                ob_start(function () { return ''; });
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 954
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 954))) {
                    // line 955
                    echo "            ";
                    ob_start(function () { return ''; });
                    echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, ((__("Last inventory value was:") . " ") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 955)), "html", null, true);
                    $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 956
                    echo "        ";
                }
                // line 957
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 958
                echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 961
                echo "   ";
            }
            // line 962
            echo "
   <label class=\"";
            // line 963
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 964
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 965
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 966
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 967
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3015 => 967,  3011 => 966,  3007 => 965,  3003 => 964,  2997 => 963,  2994 => 962,  2991 => 961,  2985 => 958,  2982 => 957,  2979 => 956,  2972 => 955,  2969 => 954,  2964 => 953,  2961 => 952,  2958 => 951,  2956 => 950,  2953 => 949,  2950 => 948,  2943 => 944,  2940 => 943,  2937 => 942,  2934 => 941,  2932 => 940,  2929 => 939,  2926 => 938,  2923 => 937,  2920 => 936,  2918 => 935,  2915 => 934,  2913 => 933,  2911 => 930,  2895 => 929,  2883 => 924,  2878 => 922,  2874 => 921,  2870 => 920,  2860 => 919,  2857 => 918,  2854 => 917,  2851 => 916,  2848 => 915,  2845 => 914,  2843 => 913,  2840 => 912,  2837 => 911,  2834 => 908,  2832 => 907,  2829 => 906,  2827 => 905,  2825 => 899,  2808 => 898,  2795 => 892,  2791 => 891,  2784 => 890,  2781 => 889,  2778 => 888,  2776 => 887,  2772 => 886,  2762 => 885,  2759 => 884,  2756 => 883,  2753 => 882,  2750 => 881,  2747 => 880,  2745 => 879,  2742 => 878,  2739 => 877,  2737 => 875,  2735 => 874,  2733 => 873,  2730 => 872,  2727 => 871,  2724 => 867,  2722 => 866,  2719 => 865,  2716 => 864,  2713 => 863,  2710 => 859,  2708 => 858,  2705 => 857,  2702 => 854,  2700 => 853,  2697 => 852,  2695 => 851,  2693 => 840,  2676 => 839,  2664 => 834,  2660 => 833,  2654 => 832,  2651 => 831,  2648 => 830,  2645 => 829,  2642 => 828,  2640 => 827,  2637 => 826,  2635 => 825,  2633 => 822,  2617 => 821,  2604 => 816,  2598 => 814,  2596 => 813,  2593 => 812,  2590 => 811,  2577 => 810,  2565 => 807,  2561 => 805,  2555 => 803,  2553 => 802,  2548 => 801,  2545 => 800,  2529 => 799,  2519 => 796,  2516 => 795,  2510 => 793,  2504 => 791,  2502 => 790,  2497 => 789,  2494 => 788,  2492 => 787,  2489 => 786,  2486 => 785,  2483 => 784,  2480 => 783,  2474 => 781,  2472 => 780,  2469 => 779,  2466 => 778,  2463 => 777,  2460 => 776,  2457 => 775,  2455 => 774,  2452 => 773,  2450 => 772,  2448 => 765,  2432 => 764,  2420 => 761,  2414 => 759,  2412 => 758,  2409 => 757,  2406 => 756,  2403 => 755,  2400 => 754,  2384 => 753,  2371 => 749,  2369 => 748,  2366 => 747,  2361 => 745,  2360 => 744,  2359 => 743,  2358 => 742,  2356 => 741,  2354 => 740,  2351 => 739,  2348 => 738,  2345 => 737,  2343 => 736,  2340 => 735,  2337 => 734,  2334 => 733,  2331 => 732,  2329 => 731,  2327 => 728,  2324 => 727,  2321 => 726,  2315 => 723,  2312 => 722,  2310 => 721,  2307 => 720,  2290 => 719,  2279 => 716,  2276 => 715,  2273 => 714,  2271 => 713,  2270 => 712,  2269 => 711,  2267 => 710,  2265 => 709,  2262 => 708,  2259 => 707,  2256 => 706,  2254 => 705,  2251 => 704,  2248 => 703,  2245 => 702,  2242 => 701,  2240 => 700,  2238 => 697,  2222 => 696,  2211 => 693,  2208 => 692,  2205 => 691,  2203 => 690,  2202 => 689,  2200 => 688,  2198 => 687,  2195 => 686,  2192 => 685,  2189 => 684,  2187 => 683,  2184 => 682,  2181 => 681,  2178 => 680,  2175 => 679,  2173 => 678,  2171 => 675,  2155 => 674,  2143 => 671,  2140 => 670,  2137 => 669,  2135 => 668,  2132 => 667,  2130 => 666,  2128 => 664,  2113 => 663,  2102 => 660,  2099 => 659,  2096 => 658,  2094 => 657,  2093 => 656,  2092 => 655,  2090 => 654,  2088 => 653,  2085 => 652,  2083 => 651,  2080 => 650,  2077 => 649,  2074 => 648,  2072 => 647,  2069 => 646,  2066 => 645,  2063 => 644,  2060 => 643,  2058 => 642,  2056 => 639,  2040 => 638,  2029 => 635,  2026 => 634,  2023 => 633,  2021 => 632,  2020 => 631,  2018 => 630,  2016 => 629,  2013 => 628,  2010 => 627,  2007 => 626,  2005 => 625,  2002 => 624,  1999 => 623,  1996 => 622,  1993 => 621,  1991 => 620,  1989 => 617,  1973 => 616,  1962 => 613,  1959 => 612,  1956 => 611,  1954 => 610,  1953 => 609,  1952 => 608,  1950 => 607,  1948 => 606,  1945 => 605,  1942 => 604,  1939 => 603,  1937 => 602,  1934 => 601,  1931 => 600,  1928 => 599,  1925 => 598,  1923 => 597,  1921 => 594,  1905 => 593,  1894 => 590,  1891 => 589,  1888 => 588,  1886 => 587,  1885 => 586,  1884 => 585,  1882 => 584,  1880 => 583,  1877 => 582,  1874 => 581,  1871 => 580,  1869 => 579,  1866 => 578,  1863 => 577,  1860 => 576,  1858 => 575,  1855 => 574,  1853 => 573,  1851 => 570,  1834 => 569,  1823 => 566,  1820 => 565,  1817 => 564,  1815 => 563,  1814 => 562,  1813 => 561,  1811 => 560,  1809 => 559,  1806 => 558,  1803 => 557,  1800 => 556,  1797 => 555,  1794 => 554,  1791 => 553,  1789 => 552,  1786 => 551,  1784 => 550,  1782 => 547,  1766 => 546,  1754 => 543,  1749 => 541,  1745 => 540,  1741 => 539,  1735 => 538,  1731 => 537,  1728 => 536,  1725 => 535,  1722 => 534,  1720 => 533,  1718 => 531,  1715 => 530,  1699 => 529,  1689 => 526,  1687 => 523,  1682 => 522,  1680 => 521,  1677 => 520,  1673 => 518,  1671 => 515,  1668 => 514,  1660 => 511,  1658 => 509,  1657 => 506,  1654 => 505,  1650 => 504,  1647 => 503,  1644 => 502,  1628 => 501,  1616 => 498,  1612 => 496,  1605 => 492,  1601 => 491,  1596 => 490,  1593 => 489,  1589 => 487,  1587 => 486,  1580 => 485,  1572 => 483,  1569 => 482,  1566 => 481,  1563 => 480,  1561 => 479,  1558 => 478,  1555 => 477,  1538 => 476,  1526 => 473,  1523 => 472,  1520 => 471,  1517 => 470,  1512 => 468,  1508 => 467,  1504 => 466,  1500 => 465,  1496 => 464,  1492 => 463,  1489 => 462,  1486 => 461,  1483 => 460,  1481 => 459,  1480 => 457,  1478 => 455,  1462 => 454,  1450 => 451,  1447 => 450,  1431 => 449,  1420 => 446,  1417 => 445,  1414 => 444,  1411 => 443,  1399 => 441,  1396 => 440,  1393 => 439,  1390 => 438,  1387 => 437,  1384 => 436,  1379 => 434,  1375 => 433,  1371 => 432,  1366 => 431,  1363 => 430,  1358 => 428,  1354 => 427,  1350 => 426,  1346 => 425,  1342 => 424,  1338 => 423,  1333 => 422,  1331 => 421,  1328 => 420,  1326 => 419,  1325 => 418,  1324 => 417,  1322 => 416,  1320 => 415,  1319 => 414,  1317 => 411,  1301 => 410,  1289 => 407,  1268 => 389,  1264 => 388,  1260 => 387,  1254 => 386,  1250 => 385,  1247 => 384,  1244 => 383,  1228 => 382,  1217 => 378,  1214 => 377,  1198 => 366,  1194 => 365,  1190 => 364,  1182 => 359,  1176 => 356,  1169 => 353,  1167 => 352,  1164 => 351,  1161 => 350,  1158 => 349,  1155 => 348,  1139 => 347,  1128 => 344,  1125 => 343,  1109 => 332,  1105 => 331,  1101 => 330,  1094 => 326,  1088 => 323,  1081 => 320,  1079 => 319,  1076 => 318,  1073 => 317,  1070 => 316,  1067 => 315,  1051 => 314,  1041 => 311,  1037 => 309,  1035 => 308,  1031 => 307,  1027 => 306,  1023 => 305,  1017 => 304,  1010 => 303,  1008 => 302,  1004 => 300,  1001 => 299,  998 => 298,  995 => 297,  992 => 296,  989 => 295,  986 => 294,  983 => 293,  980 => 292,  977 => 291,  974 => 290,  971 => 289,  968 => 288,  965 => 287,  962 => 286,  960 => 285,  957 => 284,  954 => 283,  951 => 282,  948 => 281,  932 => 280,  915 => 271,  911 => 270,  907 => 269,  901 => 265,  899 => 264,  895 => 263,  892 => 262,  889 => 261,  886 => 260,  883 => 259,  880 => 258,  877 => 257,  875 => 256,  872 => 255,  869 => 254,  866 => 253,  864 => 251,  863 => 250,  862 => 248,  861 => 247,  859 => 246,  856 => 245,  853 => 244,  850 => 243,  848 => 241,  847 => 240,  846 => 238,  844 => 237,  841 => 236,  838 => 235,  836 => 234,  833 => 233,  830 => 232,  828 => 230,  827 => 228,  826 => 227,  824 => 226,  822 => 225,  819 => 224,  812 => 222,  808 => 221,  804 => 220,  794 => 218,  792 => 217,  790 => 216,  787 => 215,  784 => 214,  781 => 213,  778 => 212,  776 => 211,  773 => 210,  771 => 209,  769 => 201,  753 => 200,  741 => 196,  737 => 194,  731 => 192,  727 => 190,  725 => 189,  720 => 188,  717 => 187,  714 => 186,  698 => 185,  686 => 181,  676 => 179,  669 => 178,  663 => 177,  659 => 176,  655 => 175,  651 => 174,  645 => 173,  641 => 172,  638 => 171,  636 => 170,  633 => 169,  630 => 168,  627 => 167,  625 => 166,  622 => 165,  619 => 164,  616 => 163,  614 => 162,  611 => 161,  595 => 160,  584 => 156,  581 => 155,  577 => 153,  571 => 151,  569 => 150,  565 => 149,  561 => 148,  557 => 147,  553 => 146,  547 => 145,  541 => 144,  538 => 143,  536 => 142,  533 => 141,  531 => 140,  529 => 137,  526 => 136,  524 => 135,  522 => 133,  519 => 132,  503 => 131,  492 => 127,  489 => 126,  484 => 124,  480 => 123,  476 => 122,  472 => 121,  468 => 120,  463 => 119,  461 => 118,  458 => 117,  456 => 116,  455 => 114,  452 => 113,  449 => 112,  446 => 111,  443 => 110,  427 => 109,  416 => 105,  413 => 104,  407 => 102,  404 => 101,  400 => 100,  396 => 99,  392 => 98,  386 => 97,  382 => 96,  377 => 95,  375 => 94,  372 => 93,  369 => 92,  366 => 91,  363 => 90,  360 => 89,  344 => 88,  333 => 84,  330 => 83,  327 => 82,  324 => 81,  321 => 80,  318 => 79,  315 => 78,  312 => 77,  309 => 76,  306 => 75,  302 => 74,  299 => 73,  296 => 72,  279 => 71,  264 => 65,  258 => 62,  255 => 61,  253 => 60,  249 => 59,  244 => 57,  241 => 56,  238 => 55,  224 => 54,  209 => 48,  203 => 45,  200 => 44,  198 => 43,  194 => 42,  189 => 40,  186 => 39,  183 => 38,  180 => 37,  177 => 36,  174 => 35,  159 => 34,  153 => 927,  149 => 896,  145 => 837,  141 => 819,  138 => 809,  135 => 798,  132 => 763,  129 => 752,  126 => 718,  123 => 695,  120 => 673,  117 => 662,  114 => 637,  111 => 615,  108 => 592,  105 => 568,  102 => 545,  99 => 528,  96 => 500,  93 => 475,  90 => 453,  87 => 448,  84 => 409,  80 => 380,  77 => 346,  74 => 313,  71 => 279,  67 => 198,  63 => 183,  59 => 158,  55 => 129,  51 => 107,  47 => 86,  44 => 70,  41 => 53,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
