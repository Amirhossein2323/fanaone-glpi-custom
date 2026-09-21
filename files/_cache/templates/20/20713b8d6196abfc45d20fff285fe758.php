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

/* pages/login.html.twig */
class __TwigTemplate_b72ee6829282f931afaa2ae5f61abaae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    
    <div class=\"login-form-container\">
        <div class=\"form-box\">
            <div class=\"text-center mb-5\">
                
                <h4 class=\"mt-4\">ورود به سامانه</h4>
                <p class=\"text-muted small\">لطفاً نام کاربری و رمز عبور خود را وارد کنید</p>
            </div>

            <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
                
                <div class=\"input-group-custom\">
                    <label class=\"form-label small\">نام کاربری</label>
                    <i class=\"ti ti-user\"></i>
                    <input type=\"text\" name=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" id=\"login_name\" placeholder=\"نام کاربری خود را وارد کنید\">
                </div>

                <div class=\"input-group-custom\">
                    <label class=\"form-label small\">رمز عبور</label>
                    <i class=\"ti ti-lock\"></i>
                    <input type=\"password\" name=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"رمز عبور خود را وارد کنید\">
                </div>

                <div class=\"text-start mb-4\">
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
        echo "\" style=\"color: #0084ff; text-decoration: none; font-size: 0.8rem;\">رمز عبور خود را فراموش کرده‌اید؟</a>
                </div>

                <button type=\"submit\" name=\"submit\" class=\"btn-login\">ورود</button>

                <div style=\"text-align: center; margin: 20px 0; color: #ccc;\">یا</div>

                <button type=\"button\" class=\"btn-sso\">
                    <i class=\"ti ti-shield-check\" style=\"color: #0084ff;\"></i>
                    ورود با حساب سازمانی
                </button>
            </form>

            <div class=\"text-center mt-5\">
                <img src=\"https://itsm.fanava.com/pics/logos/Logo.png\" width=\"30\" alt=\"F\" style=\"opacity:0.5\">
                <p class=\"text-muted mt-2\" style=\"font-size: 0.7rem;\">۱۴۰۳ گروه فناوا. تمامی حقوق محفوظ است.</p>
            </div>
        </div>
    </div>


";
    }

    // line 57
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  116 => 57,  90 => 30,  83 => 26,  74 => 20,  66 => 15,  62 => 14,  51 => 5,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "/var/www/html/glpi/templates/pages/login.html.twig");
    }
}
