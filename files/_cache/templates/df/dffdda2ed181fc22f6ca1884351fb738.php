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

/* layout/parts/head.html.twig */
class __TwigTemplate_b563c2240604ca1409c5476bc88a5809 extends Template
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
        // line 34
        echo "
<!DOCTYPE html>
<html lang=\"fa\" dir=\"rtl\" >

<head>
   <title>";
        // line 39
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " - FANAVA</title>

   <meta charset=\"utf-8\" />

   ";
        // line 44
        echo "   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   ";
        // line 47
        echo "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   ";
        // line 50
        echo "   <meta name=\"robots\" content=\"noindex, nofollow\" />

   <meta property=\"glpi:csrf_token\" content=\"";
        // line 52
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(true), "html", null, true);
        echo "\" />

   ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["css_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 55
            echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->cssPath(twig_get_attribute($this->env, $this->source, $context["css_file"], "path", [], "any", false, false, false, 55), (((twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 55)) : ([]))), "html", null, true);
            echo "\" />
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
   ";
        // line 58
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->customCss();
        echo "

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->assetPath("/pics/favicon.ico"), "html", null, true);
        echo "\" />

   ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 63
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 63), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 63)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 63)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
   ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 67
            echo "      <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 67), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 67)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "<link href=\"../../../css_compiled/IranSansFont.css\" rel=\"stylesheet\" type=\"text/css\" />


<script type=\"text/javascript\" src=\"/public/lib/jdp/jalalidatepicker.min.js\"></script>

<script type=\"text/javascript\" src=\"/public/lib/jalali-moment.browser.js\"></script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/lib/jdp/jalalidatepicker.min.css\">
   ";
        // line 77
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->localesJs();
        echo "

<script>
document.addEventListener(\"DOMContentLoaded\", function () {

   /* ==========================
      1. فعال‌سازی Jalali Datepicker
   ========================== */
   jalaliDatepicker.startWatch({
      time: true,              // اگر datetime هست
      format: \"yyyy/mm/dd HH:mm:ss\"
   });

   /* ==========================
      2. مقدار اولیه میلادی → شمسی
   ========================== */
   document.querySelectorAll('[data-jalali-datepicker=\"true\"]').forEach(function(input){

      const hidden = input.closest('.input-group').querySelector('input[type=\"hidden\"]');
      if(!hidden || !hidden.value) return;

      const hasTime = input.dataset.time === \"1\";

      // تبدیل میلادی hidden → شمسی input
      input.value = moment(hidden.value, hasTime ? \"YYYY-MM-DD HH:mm:ss\" : \"YYYY-MM-DD\")
                    .format(hasTime ? \"jYYYY/jMM/jDD HH:mm:ss\" : \"jYYYY/jMM/jDD\");

      // ⚡ حتماً Jalali فعال شود تا سال شمسی نمایش داده شود
      input.setAttribute('data-jalali', 'true');

   });

   /* ==========================
      3. کلیک روی input → باز کردن دیت‌پیکر
   ========================== */
   document.addEventListener(\"click\", function(e){
      const input = e.target.closest('[data-jalali-datepicker=\"true\"]');
      if(!input) return;
      jalaliDatepicker.show(input);
   });

   /* ==========================
      4. تغییر شمسی → sync به hidden میلادی
   ========================== */
   document.addEventListener(\"change\", function(e){
      const input = e.target.closest('[data-jalali-datepicker=\"true\"]');
      if(!input) return;

      const hidden = input.closest('.input-group').querySelector('input[type=\"hidden\"]');
      if(!hidden) return;

      const hasTime = input.dataset.time === \"1\";

      if(input.value){
         hidden.value = moment(input.value, hasTime ? \"jYYYY/jMM/jDD HH:mm:ss\" : \"jYYYY/jMM/jDD\")
                          .format(hasTime ? \"YYYY-MM-DD HH:mm:ss\" : \"YYYY-MM-DD\");
      } else {
         hidden.value = \"\";
      }
   });

});
</script>
</head>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  123 => 69,  114 => 67,  110 => 66,  107 => 65,  98 => 63,  94 => 62,  89 => 60,  84 => 58,  81 => 57,  72 => 55,  68 => 54,  63 => 52,  59 => 50,  55 => 47,  51 => 44,  44 => 39,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/head.html.twig", "/var/www/html/glpi/templates/layout/parts/head.html.twig");
    }
}
