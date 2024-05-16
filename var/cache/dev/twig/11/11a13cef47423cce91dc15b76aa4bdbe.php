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

/* home/profile.html.twig */
class __TwigTemplate_72966e56758624c9ad74c2b442bd636e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 11)) {
            // line 12
            echo "                        <img id=\"profile-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 12))), "html", null, true);
            echo "\" class=\"img-fluid mb-3\" alt=\"Profile Picture\">
                    ";
        } else {
            // line 14
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            No profile picture uploaded.
                        </div>
                    ";
        }
        // line 18
        echo "                    <h4 class=\"card-title\">Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "getUsername", [], "method", false, false, false, 18), "html", null, true);
        echo "!</h4>
                </div>
            </div>
            
            <div class=\"mt-3\">
                <h5>Upload Profile Picture</h5>
                <form method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <input type=\"file\" id=\"profile_picture\" name=\"profile_picture\" class=\"form-control-file\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
                </form>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Profile Actions</h2>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message");
        echo "\" class=\"list-group-item list-group-item-action list-group-item-info\">Send a Message</a>
                        <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inbox");
        echo "\" class=\"list-group-item list-group-item-action list-group-item-success\">Inbox</a>
                        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_outbox");
        echo "\" class=\"list-group-item list-group-item-action list-group-item-warning\">Outbox</a>
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"list-group-item list-group-item-action list-group-item-danger\">Logout</a>
                        ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\" class=\"list-group-item list-group-item-action list-group-item-primary\">Admin Dashboard</a>
                        ";
        }
        // line 44
        echo "                    </div>
                </div>
            </div>
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
        return "home/profile.html.twig";
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
        return array (  141 => 44,  135 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  94 => 18,  88 => 14,  82 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    {% if user.getProfilePictureFilename() %}
                        <img id=\"profile-picture\" src=\"{{ asset('uploads/profile_pictures/' ~ user.getProfilePictureFilename()) }}\" class=\"img-fluid mb-3\" alt=\"Profile Picture\">
                    {% else %}
                        <div class=\"alert alert-warning\" role=\"alert\">
                            No profile picture uploaded.
                        </div>
                    {% endif %}
                    <h4 class=\"card-title\">Hello {{ user.getUsername() }}!</h4>
                </div>
            </div>
            
            <div class=\"mt-3\">
                <h5>Upload Profile Picture</h5>
                <form method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <input type=\"file\" id=\"profile_picture\" name=\"profile_picture\" class=\"form-control-file\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
                </form>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Profile Actions</h2>
                    <div class=\"list-group\">
                        <a href=\"{{ path('app_message') }}\" class=\"list-group-item list-group-item-action list-group-item-info\">Send a Message</a>
                        <a href=\"{{ path('app_inbox') }}\" class=\"list-group-item list-group-item-action list-group-item-success\">Inbox</a>
                        <a href=\"{{ path('app_outbox') }}\" class=\"list-group-item list-group-item-action list-group-item-warning\">Outbox</a>
                        <a href=\"{{ path('app_logout') }}\" class=\"list-group-item list-group-item-action list-group-item-danger\">Logout</a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_admin') }}\" class=\"list-group-item list-group-item-action list-group-item-primary\">Admin Dashboard</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/profile.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\home\\profile.html.twig");
    }
}
