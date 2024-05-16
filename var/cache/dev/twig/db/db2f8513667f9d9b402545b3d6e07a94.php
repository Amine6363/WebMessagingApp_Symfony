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

/* message/send.html.twig */
class __TwigTemplate_a6e1316f71a7b8bee253e44b42dbc6c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/send.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/send.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Send Message
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 8
        $context["successFlash"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8);
        // line 9
        echo "\t\t";
        if ( !twig_test_empty((isset($context["successFlash"]) || array_key_exists("successFlash", $context) ? $context["successFlash"] : (function () { throw new RuntimeError('Variable "successFlash" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["successFlash"]) || array_key_exists("successFlash", $context) ? $context["successFlash"] : (function () { throw new RuntimeError('Variable "successFlash" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 14
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 20))), "html", null, true);
            echo "\" class=\"img-fluid mb-3\" alt=\"Profile Picture\">
\t\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\tNo profile picture uploaded.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t<h4 class=\"card-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"card-title\">Compose Message</h2>
\t\t\t\t\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipients\">Recipients</label>
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "recipients", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control select2", "multiple" => "multiple", "style" => "margin-bottom: 10px; height: auto;"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"subject\">Subject</label>
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "subject", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter subject..."]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"body\">Message Body</label>
\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "body", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Enter your message..."]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"attachment\">Attachment</label>
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "attachment", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control-file"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary mt-3\">Back to Profile</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "message/send.html.twig";
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
        return array (  161 => 53,  157 => 52,  151 => 49,  144 => 45,  137 => 41,  130 => 37,  124 => 34,  112 => 26,  106 => 22,  100 => 20,  98 => 19,  91 => 14,  85 => 11,  82 => 10,  79 => 9,  77 => 8,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Send Message
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% set successFlash = app.flashes('success') %}
\t\t{% if successFlash is not empty %}
\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t{{ successFlash[0] }}
\t\t\t</div>
\t\t{% endif %}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t{% if user.getProfilePictureFilename() %}
\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"{{ asset('uploads/profile_pictures/' ~ user.getProfilePictureFilename()) }}\" class=\"img-fluid mb-3\" alt=\"Profile Picture\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t\t\tNo profile picture uploaded.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<h4 class=\"card-title\">{{ app.user.username }}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h2 class=\"card-title\">Compose Message</h2>
\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipients\">Recipients</label>
\t\t\t\t\t\t\t{{ form_widget(form.recipients, { 'attr': {'class': 'form-control select2', 'multiple': 'multiple', 'style': 'margin-bottom: 10px; height: auto;'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"subject\">Subject</label>
\t\t\t\t\t\t\t{{ form_widget(form.subject, { 'attr': {'class': 'form-control', 'placeholder': 'Enter subject...'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"body\">Message Body</label>
\t\t\t\t\t\t\t{{ form_widget(form.body, { 'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Enter your message...'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"attachment\">Attachment</label>
\t\t\t\t\t\t\t{{ form_widget(form.attachment, { 'attr': {'class': 'form-control-file'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Send</button>
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t<a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary mt-3\">Back to Profile</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "message/send.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\message\\send.html.twig");
    }
}
