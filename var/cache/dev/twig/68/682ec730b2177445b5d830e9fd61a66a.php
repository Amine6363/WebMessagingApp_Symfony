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

/* home/home.html.twig */
class __TwigTemplate_19c137617230fecd150d49dd9abf1bef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Messaging App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        // line 7
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #ffeac7; /* Very light orange color */
        }

        .custom-image {
            height: 500px;
            width: 600px;
             /* Adjust this value as needed */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <div class=\"min-h-screen flex items-center justify-center\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-bold mb-4\">Welcome to Our Messaging App</h1>
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("home.png"), "html", null, true);
        echo "\" alt=\"Welcome Image\" class=\"max-w-full mb-8 rounded-md shadow-md custom-image\">

            <div class=\"flex flex-col items-center\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"bg-blue-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-blue-600\">Login</a>
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"bg-green-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-green-600\">Register</a>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-blue-500 hover:underline\">Forgot your password?</a>
            </div>
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
        return "home/home.html.twig";
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
        return array (  121 => 30,  117 => 29,  113 => 28,  107 => 25,  102 => 22,  95 => 21,  76 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Messaging App{% endblock %}

{% block stylesheets %}
    {# Additional stylesheets specific to index.html.twig #}
    <link href=\"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #ffeac7; /* Very light orange color */
        }

        .custom-image {
            height: 500px;
            width: 600px;
             /* Adjust this value as needed */
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen flex items-center justify-center\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-bold mb-4\">Welcome to Our Messaging App</h1>
            <img src=\"{{ asset('home.png') }}\" alt=\"Welcome Image\" class=\"max-w-full mb-8 rounded-md shadow-md custom-image\">

            <div class=\"flex flex-col items-center\">
                <a href=\"{{ path('app_login') }}\" class=\"bg-blue-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-blue-600\">Login</a>
                <a href=\"{{ path('app_register') }}\" class=\"bg-green-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-green-600\">Register</a>
                <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-blue-500 hover:underline\">Forgot your password?</a>
            </div>
        </div>
    </div>
{% endblock %}
", "home/home.html.twig", "C:\\Users\\amine\\Documents\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\home\\home.html.twig");
    }
}
