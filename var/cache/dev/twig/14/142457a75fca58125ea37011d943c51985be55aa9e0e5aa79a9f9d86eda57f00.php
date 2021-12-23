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

/* security/login.html.twig */
class __TwigTemplate_3572e9cc1b14dfda6d3be7024528e137c3162ac9acad0080158988f48df0966b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Login</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->\t
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->\t
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->\t
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/util.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
</head>
<body>
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\" style=\"background-image: url('login/images/bg-01.jpg');\">
\t\t\t<div class=\"wrap-login100\">

                <form class=\"login100-form validate-form\" method=\"post\">
                    <span class=\"login100-form-logo\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-landscape\"></i>
\t\t\t\t\t</span>

\t\t\t\t\t<span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t\t\tLog in
\t\t\t\t\t</span>
                    ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 46
        echo "
                    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 52
        echo "
                    ";
        // line 54
        echo "                   <div class=\"wrap-input100 validate-input\" data-validate = \"Enter username\">
\t\t\t\t\t\t<input class=\"input100\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"&#xf207;\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate=\"Enter password\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"&#xf191;\"></span>
\t\t\t\t\t</div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                    >

                    

                    <div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\t Sign in
\t\t\t\t\t\t</button>
\t\t\t\t\t</div
                </form>
            </div>
\t\t</div>
\t</div>

<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 97,  217 => 95,  212 => 93,  208 => 92,  203 => 90,  198 => 88,  194 => 87,  189 => 85,  184 => 83,  163 => 65,  150 => 55,  147 => 54,  144 => 52,  136 => 49,  133 => 48,  131 => 47,  128 => 46,  122 => 44,  120 => 43,  101 => 27,  97 => 26,  92 => 24,  87 => 22,  82 => 20,  77 => 18,  72 => 16,  67 => 14,  62 => 12,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>Login</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->\t
        <link rel=\"icon\" type=\"image/png\" href=\"{{asset('images/icons/favicon.ico')}}\"/>
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/animate/animate.css')}}\">
    <!--===============================================================================================-->\t
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/animsition/css/animsition.min.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/select2/select2.min.css')}}\">
    <!--===============================================================================================-->\t
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('login/vendor/daterangepicker/daterangepicker.css')}}\">
    <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/util.css')}}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/main.css')}}\">
    <!--===============================================================================================-->
</head>
<body>
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\" style=\"background-image: url('login/images/bg-01.jpg');\">
\t\t\t<div class=\"wrap-login100\">

                <form class=\"login100-form validate-form\" method=\"post\">
                    <span class=\"login100-form-logo\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-landscape\"></i>
\t\t\t\t\t</span>

\t\t\t\t\t<span class=\"login100-form-title p-b-34 p-t-27\">
\t\t\t\t\t\tLog in
\t\t\t\t\t</span>
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}

                    {# <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1> #}
                   <div class=\"wrap-input100 validate-input\" data-validate = \"Enter username\">
\t\t\t\t\t\t<input class=\"input100\" type=\"email\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" value=\"{{ last_username }}\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"&#xf207;\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate=\"Enter password\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"&#xf191;\"></span>
\t\t\t\t\t</div>

                    <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                    >

                    

                    <div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\t Sign in
\t\t\t\t\t\t</button>
\t\t\t\t\t</div
                </form>
            </div>
\t\t</div>
\t</div>

<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/animsition/js/animsition.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/bootstrap/js/popper.js')}}\"></script>
\t<script src=\"{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/select2/select2.min.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/daterangepicker/moment.min.js')}}\"></script>
\t<script src=\"{{asset('login/vendor/daterangepicker/daterangepicker.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/vendor/countdowntime/countdowntime.js')}}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{asset('login/js/main.js')}}\"></script>

</body>
</html>
", "security/login.html.twig", "C:\\Users\\Fayna\\Downloads\\e-commerce-master\\e-commerce-master\\templates\\security\\login.html.twig");
    }
}
