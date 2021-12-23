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

/* registration/register.html.twig */
class __TwigTemplate_41f61f8b7152877f10ea092bf4ab6d7d54b0d0084aea74d911c21d655226ac7f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!doctype html>
<html >
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>E-commerce</title>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stylepersonaliser/inscription.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/525icons/2.6.0/525icons.min.css\">
    <!--intl-tel-input plugin-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js\"></script>
    <!--Bootstrap css-->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\" >
     <!--google font css-->
     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
     <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap\" rel=\"stylesheet\">
    <!--Bootstrap js-->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" ></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js\"></script>

</head>
<body>


 <div class=\"container\">
       <div class=\"title\"> SIGN UP </div>
             ";
        // line 31
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), 'errors')) {
            // line 32
            echo "                <div class=\"alert alert-secondary\">

                  ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'errors');
            echo "
                </div>
            
            ";
        }
        // line 38
        echo "

        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                   ";
        // line 43
        echo " 
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => "Username"]]);
        echo "
                </div>
                <div class=\"form-group col-md-6\">
                   ";
        // line 47
        echo " 
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "lastname", [], "any", false, false, false, 48), 'widget', ["attr" => ["placeholder" => "Lastname"]]);
        echo "

                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    ";
        // line 55
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'widget', ["attr" => ["placeholder" => "address"]]);
        echo "

                    
                </div>
                <div class=\"form-group col-md-6\">
                    ";
        // line 61
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["placeholder" => "Email"]]);
        echo "

                </div>
                   

            </div>
            <div class=\"form-row\"> 
                <div class=\"form-group col-md-6\" name=\"user-pw\">
                    ";
        // line 70
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "password", [], "any", false, false, false, 70), 'widget', ["attr" => ["placeholder" => "Password", "id" => "registration_password"]]);
        echo "

                </div>
              <div class=\"form-group col-md-6\">
                   ";
        // line 75
        echo "                      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "confirm_password", [], "any", false, false, false, 75), 'widget', ["attr" => ["placeholder" => "Confirm Password"]]);
        echo "


                </div>
            </div>
            <div class=\"form-row\">
                    <div class=\"form-group col-md-6\">
                        ";
        // line 83
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'widget', ["attr" => ["placeholder" => "Phone number"]]);
        echo "
                       
                    </div>
            </div>
           
            <div class=\"form-check\">
                   ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "agreeTerms", [], "any", false, false, false, 89), 'widget', ["attr" => ["placeholder" => "Agree Terms"]]);
        echo "
            </div>
            <br>
            <div class=\"center\">
                    <button class=\"btn-hover color-7\" type=\"submit\">Sign up</button>
            </div>
            <div>
                <div class=\"compte\">
                    <label> Vous avez déjà un compte? </label><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"link\" title=\"identifier\">  S'identifier </a>
                 </div>
            </div>
            ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), 'form_end');
        echo "

   
    </div>
   </div>
 
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 100,  183 => 97,  172 => 89,  162 => 83,  151 => 75,  143 => 70,  131 => 61,  122 => 55,  113 => 48,  110 => 47,  104 => 44,  101 => 43,  95 => 40,  91 => 38,  84 => 34,  80 => 32,  78 => 31,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html >
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>E-commerce</title>
        <link rel=\"stylesheet\" href=\"{{asset('stylepersonaliser/inscription.css')}}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/525icons/2.6.0/525icons.min.css\">
    <!--intl-tel-input plugin-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js\"></script>
    <!--Bootstrap css-->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\" >
     <!--google font css-->
     <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
     <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap\" rel=\"stylesheet\">
    <!--Bootstrap js-->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" ></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js\"></script>

</head>
<body>


 <div class=\"container\">
       <div class=\"title\"> SIGN UP </div>
             {% if form_errors(registrationForm.password) %}
                <div class=\"alert alert-secondary\">

                  {{ form_errors(registrationForm.password) }}
                </div>
            
            {% endif %}


        {{ form_start(registrationForm)}}
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                   {#<input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" autofocus required>#} 
                    {{form_widget(registrationForm.username, {'attr':{'placeholder': 'Username'}})}}
                </div>
                <div class=\"form-group col-md-6\">
                   {#<input type=\"text\" class=\"form-control\" placeholder=\"Nom\" required>#} 
                        {{form_widget(registrationForm.lastname, {'attr':{'placeholder': 'Lastname'}})}}

                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"form-group col-md-6\">
                    {#<input  id=\"address\" type=\"text\" class=\"adr form-control\" placeholder=\"address\" required><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>#}
                            {{form_widget(registrationForm.address, {'attr':{'placeholder': 'address'}})}}

                    
                </div>
                <div class=\"form-group col-md-6\">
                    {#<input type=\"email\" class=\"form-control\" placeholder=\"address e-mail\" required>#}
                    {{form_widget(registrationForm.email, {'attr':{'placeholder': 'Email'}})}}

                </div>
                   

            </div>
            <div class=\"form-row\"> 
                <div class=\"form-group col-md-6\" name=\"user-pw\">
                    {#<input type=\"password\" class=\"form-control\" name=\"user-pw\" id=\"user-pw\" placeholder=\"Mot de passe\" required>#}
                        {{form_widget(registrationForm.password, {'attr':{'placeholder': 'Password', 'id': 'registration_password' }}  )}}

                </div>
              <div class=\"form-group col-md-6\">
                   {#<input type=\"password\" class=\"form-control\" placeholder=\"Confirmer votre mot de passe\" required>#}
                      {{form_widget(registrationForm.confirm_password, {'attr':{'placeholder': 'Confirm Password'}})}}


                </div>
            </div>
            <div class=\"form-row\">
                    <div class=\"form-group col-md-6\">
                        {#<input id=\"phone\" type=\"tel\" name=\"phone\" class=\"form-control\" placeholder=\"Numéro de télèphone\"  required ><img src=\"tn-flag.png\">#}
                        {{form_widget(registrationForm.phone, {'attr':{'placeholder': 'Phone number'}})}}
                       
                    </div>
            </div>
           
            <div class=\"form-check\">
                   {{form_widget(registrationForm.agreeTerms, {'attr':{'placeholder': 'Agree Terms'}})}}
            </div>
            <br>
            <div class=\"center\">
                    <button class=\"btn-hover color-7\" type=\"submit\">Sign up</button>
            </div>
            <div>
                <div class=\"compte\">
                    <label> Vous avez déjà un compte? </label><a href=\"{{path('app_login')}}\" class=\"link\" title=\"identifier\">  S'identifier </a>
                 </div>
            </div>
            {{ form_end(registrationForm) }}

   
    </div>
   </div>
 
</body>
</html>", "registration/register.html.twig", "C:\\Users\\Fayna\\Downloads\\e-commerce-master\\e-commerce-master\\templates\\registration\\register.html.twig");
    }
}
