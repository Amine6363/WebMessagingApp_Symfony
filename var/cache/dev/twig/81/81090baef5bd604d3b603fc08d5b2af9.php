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

/* message/inbox_show.html.twig */
class __TwigTemplate_73db07d66afb827f5539bdec01439102 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/inbox_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/inbox_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "View Message";
        
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
        echo "    <style>
        /* Custom styles for the message view template */
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .sender-info {
            display: flex;
            align-items: center;
        }
        .sender-name {
            margin-right: 10px;
        }
        .sender-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        .attachment-image {
            max-width: 300px;
            max-height: 300px;
            width: auto;
            height: auto;
            margin-top: 10px;
        }
        .reply-form {
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "<h1> Inbox </h1>
<div class=\"container\">
    ";
        // line 45
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    <div class=\"card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 53, $this->source); })()), "subject", [], "any", false, false, false, 53), "html", null, true);
        echo "</h1>
            <div class=\"sender-info\">
                <div>
                    <strong>From:</strong>
                    <span class=\"sender-name\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 57, $this->source); })()), "sender", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true);
        echo "</span>
                </div>
                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), "sender", [], "any", false, false, false, 59), "profilePictureFilename", [], "any", false, false, false, 59)) {
            // line 60
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 60, $this->source); })()), "sender", [], "any", false, false, false, 60), "profilePictureFilename", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" alt=\"Sender Avatar\" class=\"sender-avatar\">
                ";
        }
        // line 62
        echo "            </div>
        </div>
        <div class=\"card-body\">
            <p class=\"card-text\"><strong>Content:</strong> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 65, $this->source); })()), "body", [], "any", false, false, false, 65), "html", null, true);
        echo "</p>
            ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 66, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 66)) {
            // line 67
            echo "                ";
            $context["attachmentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/attachments/" . twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 67, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 67)));
            // line 68
            echo "                ";
            $context["imageExtensions"] = ["jpg", "jpeg", "png", "gif"];
            // line 69
            echo "                ";
            $context["attachmentExtension"] = twig_lower_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 69, $this->source); })()), "attachmentFilename", [], "any", false, false, false, 69), ".")));
            // line 70
            echo "                ";
            if (twig_in_filter((isset($context["attachmentExtension"]) || array_key_exists("attachmentExtension", $context) ? $context["attachmentExtension"] : (function () { throw new RuntimeError('Variable "attachmentExtension" does not exist.', 70, $this->source); })()), (isset($context["imageExtensions"]) || array_key_exists("imageExtensions", $context) ? $context["imageExtensions"] : (function () { throw new RuntimeError('Variable "imageExtensions" does not exist.', 70, $this->source); })()))) {
                // line 71
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["attachmentPath"]) || array_key_exists("attachmentPath", $context) ? $context["attachmentPath"] : (function () { throw new RuntimeError('Variable "attachmentPath" does not exist.', 71, $this->source); })()), "html", null, true);
                echo "\" alt=\"Attachment Image\" class=\"attachment-image\">
                ";
            } else {
                // line 73
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["attachmentPath"]) || array_key_exists("attachmentPath", $context) ? $context["attachmentPath"] : (function () { throw new RuntimeError('Variable "attachmentPath" does not exist.', 73, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-primary\" download>Download Attachment</a>
                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "        </div>
    </div>

    <div class=\"reply-form\">
        <h2>Reply</h2>
        <form method=\"post\" action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_reply", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\">
            <div class=\"form-group\">
                <label for=\"reply_content\">Reply Content:</label>
                <textarea class=\"form-control\" id=\"reply_content\" name=\"reply_content\" rows=\"4\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Send Reply</button>
        </form>
    </div>

    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary back-to-profile-btn\">Back to Profile</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "message/inbox_show.html.twig";
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
        return array (  225 => 90,  213 => 81,  206 => 76,  203 => 75,  197 => 73,  191 => 71,  188 => 70,  185 => 69,  182 => 68,  179 => 67,  177 => 66,  173 => 65,  168 => 62,  162 => 60,  160 => 59,  155 => 57,  148 => 53,  143 => 50,  134 => 47,  131 => 46,  126 => 45,  122 => 42,  115 => 41,  76 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}View Message{% endblock %}

{% block stylesheets %}
    {# Your existing stylesheets #}
    <style>
        /* Custom styles for the message view template */
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .sender-info {
            display: flex;
            align-items: center;
        }
        .sender-name {
            margin-right: 10px;
        }
        .sender-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        .attachment-image {
            max-width: 300px;
            max-height: 300px;
            width: auto;
            height: auto;
            margin-top: 10px;
        }
        .reply-form {
            margin-top: 20px;
        }
    </style>
{% endblock %}

{% block body %}
<h1> Inbox </h1>
<div class=\"container\">
    {# Display flash messages if they exist #}
    {% for flash_message in app.flashes('success') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ flash_message }}
        </div>
    {% endfor %}

    <div class=\"card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">{{ message.subject }}</h1>
            <div class=\"sender-info\">
                <div>
                    <strong>From:</strong>
                    <span class=\"sender-name\">{{ message.sender.username }}</span>
                </div>
                {% if message.sender.profilePictureFilename %}
                    <img src=\"{{ asset('uploads/profile_pictures/' ~ message.sender.profilePictureFilename) }}\" alt=\"Sender Avatar\" class=\"sender-avatar\">
                {% endif %}
            </div>
        </div>
        <div class=\"card-body\">
            <p class=\"card-text\"><strong>Content:</strong> {{ message.body }}</p>
            {% if message.attachmentFilename %}
                {% set attachmentPath = asset('uploads/attachments/' ~ message.attachmentFilename) %}
                {% set imageExtensions = ['jpg', 'jpeg', 'png', 'gif'] %}
                {% set attachmentExtension = message.attachmentFilename|split('.')|last|lower %}
                {% if attachmentExtension in imageExtensions %}
                    <img src=\"{{ attachmentPath }}\" alt=\"Attachment Image\" class=\"attachment-image\">
                {% else %}
                    <a href=\"{{ attachmentPath }}\" class=\"btn btn-primary\" download>Download Attachment</a>
                {% endif %}
            {% endif %}
        </div>
    </div>

    <div class=\"reply-form\">
        <h2>Reply</h2>
        <form method=\"post\" action=\"{{ path('app_message_reply', {'id': message.id}) }}\">
            <div class=\"form-group\">
                <label for=\"reply_content\">Reply Content:</label>
                <textarea class=\"form-control\" id=\"reply_content\" name=\"reply_content\" rows=\"4\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Send Reply</button>
        </form>
    </div>

    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary back-to-profile-btn\">Back to Profile</a>
</div>
{% endblock %}
", "message/inbox_show.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\message\\inbox_show.html.twig");
    }
}
