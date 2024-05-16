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

/* reset_password/request.html.twig */
class __TwigTemplate_9846ae61cc2116b98cb5576fc7c8e6b6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reset your password";
        
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
        /* Custom styles for the password reset form */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .reset-password-form {
            max-width: 400px;
            margin: 100px auto; /* Adjust top margin for positioning */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .reset-password-form h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .reset-password-form .form-group {
            margin-bottom: 20px;
        }

        .reset-password-form label {
            font-weight: bold;
        }

        .reset-password-form small {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .reset-password-form .btn {
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "<div class=\"container\">
    <div class=\"reset-password-form\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 56
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        <h1>Reset your password</h1>

        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 60, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter your email"]]);
        echo "
            </div>
            <div>
                <small>
                    Enter your email address, and we will send you a link to reset your password.
                </small>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Send password reset email</button>
        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
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
        return "reset_password/request.html.twig";
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
        return array (  170 => 71,  158 => 62,  153 => 60,  149 => 58,  140 => 56,  136 => 55,  132 => 53,  125 => 52,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom styles for the password reset form */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .reset-password-form {
            max-width: 400px;
            margin: 100px auto; /* Adjust top margin for positioning */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .reset-password-form h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .reset-password-form .form-group {
            margin-bottom: 20px;
        }

        .reset-password-form label {
            font-weight: bold;
        }

        .reset-password-form small {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .reset-password-form .btn {
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"reset-password-form\">
        {% for flash_error in app.flashes('reset_password_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
        {% endfor %}
        <h1>Reset your password</h1>

        {{ form_start(requestForm) }}
            <div class=\"form-group\">
                {{ form_row(requestForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your email'} }) }}
            </div>
            <div>
                <small>
                    Enter your email address, and we will send you a link to reset your password.
                </small>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Send password reset email</button>
        {{ form_end(requestForm) }}
    </div>
</div>
{% endblock %}
", "reset_password/request.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\reset_password\\request.html.twig");
    }
}
