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
class __TwigTemplate_e37c8fe95dbad470bef20b94f96e7333 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        /* Custom styles for the registration form */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .registration-form {
            max-width: 400px;
            margin: 100px auto; /* Adjust top margin for positioning */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .registration-form h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-form .form-group {
            margin-bottom: 20px;
        }

        .registration-form label {
            font-weight: bold;
        }

        .registration-form .btn {
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "<div class=\"container\">
    <div class=\"registration-form\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 49
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "flashBag", [], "any", false, false, false, 52), "has", ["success"], "method", false, false, false, 52)) {
            // line 53
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "flashBag", [], "any", false, false, false, 54), "get", ["success"], "method", false, false, false, 54), 0, [], "array", false, false, false, 54), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 57
        echo "
        <h1>Register</h1>

        <form method=\"post\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'errors');
        echo "

            ";
        // line 64
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "_token", [], "any", false, false, false, 64), 'row');
        echo "

            <div class=\"form-group\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter username"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter email"]]);
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "plainPassword", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter password"]]);
        echo "
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Register</button>
        </form>

        <p style=\"text-align: center; margin-top: 20px;\">
            Already have an account? <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a>
        </p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  198 => 82,  188 => 75,  181 => 71,  174 => 67,  167 => 64,  162 => 61,  156 => 57,  150 => 54,  147 => 53,  145 => 52,  142 => 51,  133 => 49,  129 => 48,  125 => 46,  118 => 45,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom styles for the registration form */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .registration-form {
            max-width: 400px;
            margin: 100px auto; /* Adjust top margin for positioning */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .registration-form h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-form .form-group {
            margin-bottom: 20px;
        }

        .registration-form label {
            font-weight: bold;
        }

        .registration-form .btn {
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"registration-form\">
        {% for flash_error in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
        {% endfor %}

        {% if app.session.flashBag.has('success') %}
            <div class=\"alert alert-success\" role=\"alert\">
                {{ app.session.flashBag.get('success')[0] }}
            </div>
        {% endif %}

        <h1>Register</h1>

        <form method=\"post\">
            {{ form_errors(registrationForm) }}

            {# Include the CSRF token field explicitly #}
            {{ form_row(registrationForm._token) }}

            <div class=\"form-group\">
                {{ form_row(registrationForm.username, { 'attr': {'class': 'form-control', 'placeholder': 'Enter username'} }) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(registrationForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'Enter email'} }) }}
            </div>

            <div class=\"form-group\">
                {{ form_row(registrationForm.plainPassword, { 'attr': {'class': 'form-control', 'placeholder': 'Enter password'} }) }}
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Register</button>
        </form>

        <p style=\"text-align: center; margin-top: 20px;\">
            Already have an account? <a href=\"{{ path('app_login') }}\">Login</a>
        </p>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\registration\\register.html.twig");
    }
}
