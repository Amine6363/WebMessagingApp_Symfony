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

/* message/inbox.html.twig */
class __TwigTemplate_aeedad1b2bf03f7d27c441830b88608f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/inbox.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/inbox.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inbox";
        
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
        /* Custom styles for the inbox template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .unread-status {
            font-weight: bold; /* Bold font for unread status */
            color: #dc3545; /* Red color for unread status */
        }

        .read-status {
            color: #28a745; /* Green color for read status */
        }

        .back-to-profile-btn {
            margin-top: 20px;
        }

        .sender-profile-picture {
            width: 30px; /* Set width for sender profile pictures */
            height: 30px; /* Set height for sender profile pictures */
            border-radius: 50%; /* Create a circular border for sender profile pictures */
            margin-right: 5px; /* Add margin for spacing */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "<div class=\"container\">
    ";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["success"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 38
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    <h1>Inbox</h1>
    
    ";
        // line 45
        if (twig_test_empty((isset($context["receivedMessages"]) || array_key_exists("receivedMessages", $context) ? $context["receivedMessages"] : (function () { throw new RuntimeError('Variable "receivedMessages" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "        <p>Your inbox is empty.</p>
    ";
        } else {
            // line 48
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date Sent</th>  ";
            // line 55
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["receivedMessages"]) || array_key_exists("receivedMessages", $context) ? $context["receivedMessages"] : (function () { throw new RuntimeError('Variable "receivedMessages" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                echo "                    <tr>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getSender", [], "method", false, false, false, 62), "getProfilePictureFilename", [], "method", false, false, false, 62)) {
                    // line 63
                    echo "                                    <img class=\"sender-profile-picture\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getSender", [], "method", false, false, false, 63), "getProfilePictureFilename", [], "method", false, false, false, 63))), "html", null, true);
                    echo "\" alt=\"Sender Profile Picture\">
                                ";
                } else {
                    // line 65
                    echo "                                    <div class=\"sender-profile-picture bg-secondary\"></div>
                                ";
                }
                // line 67
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "getSender", [], "method", false, false, false, 67), "getUsername", [], "method", false, false, false, 67), "html", null, true);
                echo "
                            </div>
                        </td>
                        <td>
                            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_view", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "getId", [], "method", false, false, false, 71)]), "html", null, true);
                echo "\">
                                ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getSubject", [], "method", false, false, false, 72), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td class=\"";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["message"], "isViewed", [], "method", false, false, false, 75)) {
                    echo "read-status";
                } else {
                    echo "unread-status";
                }
                echo "\">
                            ";
                // line 76
                echo ((twig_get_attribute($this->env, $this->source, $context["message"], "isViewed", [], "method", false, false, false, 76)) ? ("Read") : ("Unread"));
                echo "
                        </td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getSentAt", [], "method", false, false, false, 78), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>  ";
                // line 79
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            </tbody>
        </table>
    ";
        }
        // line 84
        echo "
    <a href=\"";
        // line 85
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
        return "message/inbox.html.twig";
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
        return array (  228 => 85,  225 => 84,  220 => 81,  213 => 79,  210 => 78,  205 => 76,  197 => 75,  191 => 72,  187 => 71,  179 => 67,  175 => 65,  169 => 63,  167 => 62,  162 => 59,  158 => 58,  153 => 55,  145 => 48,  141 => 46,  139 => 45,  134 => 42,  125 => 39,  122 => 38,  117 => 37,  114 => 35,  107 => 34,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inbox{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom styles for the inbox template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .unread-status {
            font-weight: bold; /* Bold font for unread status */
            color: #dc3545; /* Red color for unread status */
        }

        .read-status {
            color: #28a745; /* Green color for read status */
        }

        .back-to-profile-btn {
            margin-top: 20px;
        }

        .sender-profile-picture {
            width: 30px; /* Set width for sender profile pictures */
            height: 30px; /* Set height for sender profile pictures */
            border-radius: 50%; /* Create a circular border for sender profile pictures */
            margin-right: 5px; /* Add margin for spacing */
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    {# Display success flash message if it exists #}
    {% for flash_message in app.flashes('success') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ flash_message }}
        </div>
    {% endfor %}

    <h1>Inbox</h1>
    
    {% if receivedMessages is empty %}
        <p>Your inbox is empty.</p>
    {% else %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date Sent</th>  {# New column for Date Sent #}
                </tr>
            </thead>
            <tbody>
                {% for message in receivedMessages %}
                    <tr>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                {% if message.getSender().getProfilePictureFilename() %}
                                    <img class=\"sender-profile-picture\" src=\"{{ asset('uploads/profile_pictures/' ~ message.getSender().getProfilePictureFilename()) }}\" alt=\"Sender Profile Picture\">
                                {% else %}
                                    <div class=\"sender-profile-picture bg-secondary\"></div>
                                {% endif %}
                                {{ message.getSender().getUsername() }}
                            </div>
                        </td>
                        <td>
                            <a href=\"{{ path('app_message_view', { 'id': message.getId() }) }}\">
                                {{ message.getSubject() }}
                            </a>
                        </td>
                        <td class=\"{% if message.isViewed() %}read-status{% else %}unread-status{% endif %}\">
                            {{ message.isViewed() ? 'Read' : 'Unread' }}
                        </td>
                        <td>{{ message.getSentAt()|date('Y-m-d H:i:s') }}</td>  {# Display Date Sent using message's created_at property #}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary back-to-profile-btn\">Back to Profile</a>
</div>
{% endblock %}
", "message/inbox.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\message\\inbox.html.twig");
    }
}
