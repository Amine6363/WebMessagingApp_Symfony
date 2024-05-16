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

/* message/outbox_show.html.twig */
class __TwigTemplate_9c57d70af3fea786bee225584b80f8d9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/outbox_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/outbox_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Outbox Message";
        
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
        /* Custom styles for the outbox message template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .container {
            margin-top: 30px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 15px;
        }

        .message-image {
            max-width: 100%; /* Ensure the image fits within its container */
            height: auto; /* Maintain aspect ratio */
            border: 1px solid #ddd; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-top: 10px; /* Add margin for spacing */
        }

        .btn-secondary {
            margin-top: 20px;
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
    <h1>Outbox Message</h1>

    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Subject: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 58, $this->source); })()), "subject", [], "any", false, false, false, 58), "html", null, true);
        echo "</h5>
            <p class=\"card-text\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), "body", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
            
            ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 61, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 61)) {
            // line 62
            echo "                ";
            $context["fileExtension"] = twig_lower_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 62, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 62), ".")));
            // line 63
            echo "                ";
            if (twig_in_filter((isset($context["fileExtension"]) || array_key_exists("fileExtension", $context) ? $context["fileExtension"] : (function () { throw new RuntimeError('Variable "fileExtension" does not exist.', 63, $this->source); })()), ["jpg", "jpeg", "png", "gif"])) {
                // line 64
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attachments/" . twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 64, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 64))), "html", null, true);
                echo "\" class=\"message-image\">
                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </div>
    </div>

    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary\">Back to Profile</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "message/outbox_show.html.twig";
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
        return array (  170 => 70,  165 => 67,  162 => 66,  156 => 64,  153 => 63,  150 => 62,  148 => 61,  143 => 59,  139 => 58,  132 => 53,  125 => 52,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Outbox Message{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom styles for the outbox message template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .container {
            margin-top: 30px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 15px;
        }

        .message-image {
            max-width: 100%; /* Ensure the image fits within its container */
            height: auto; /* Maintain aspect ratio */
            border: 1px solid #ddd; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-top: 10px; /* Add margin for spacing */
        }

        .btn-secondary {
            margin-top: 20px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Outbox Message</h1>

    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Subject: {{ message.subject }}</h5>
            <p class=\"card-text\">{{ message.body }}</p>
            
            {% if message.attachmentFilename %}
                {% set fileExtension = message.attachmentFilename|split('.')|last|lower %}
                {% if fileExtension in ['jpg', 'jpeg', 'png', 'gif'] %}
                    <img src=\"{{ asset('uploads/attachments/' ~ message.attachmentFilename) }}\" class=\"message-image\">
                {% endif %}
            {% endif %}
        </div>
    </div>

    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary\">Back to Profile</a>
</div>
{% endblock %}
", "message/outbox_show.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\message\\outbox_show.html.twig");
    }
}
