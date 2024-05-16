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

/* message/outbox.html.twig */
class __TwigTemplate_2ca9a02471fb3b8fb1dc80a5c35b0294 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/outbox.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/outbox.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Outbox";
        
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
        /* Custom styles for the outbox template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .recipient-profile-picture {
            width: 30px; /* Set width for recipient profile pictures */
            height: 30px; /* Set height for recipient profile pictures */
            border-radius: 50%; /* Create a circular border for recipient profile pictures */
            margin-right: 5px; /* Add margin for spacing */
        }

        .current-user-profile-picture {
            max-width: 300px; /* Set maximum width for current user's profile picture */
            max-height: 300px; /* Set maximum height for current user's profile picture */
            border: 1px solid #ccc; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-bottom: 20px; /* Add margin for spacing */
        }

        .message-image {
            max-width: 100%; /* Ensure the image fits within its container */
            height: auto; /* Maintain aspect ratio */
            border: 1px solid #ddd; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-top: 10px; /* Add margin for spacing */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h1>Outbox</h1>

            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 43)) {
            // line 44
            echo "                <img class=\"current-user-profile-picture img-fluid rounded mb-4\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "getProfilePictureFilename", [], "method", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"Profile Picture\">
            ";
        } else {
            // line 46
            echo "                <div class=\"alert alert-warning\" role=\"alert\">
                    No profile picture uploaded.
                </div>
            ";
        }
        // line 50
        echo "
            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"btn btn-secondary mt-3 d-block\">Back to Profile</a>
        </div>
        <div class=\"col-md-8\">
            ";
        // line 54
        if (twig_test_empty((isset($context["sentMessages"]) || array_key_exists("sentMessages", $context) ? $context["sentMessages"] : (function () { throw new RuntimeError('Variable "sentMessages" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "                <p>No messages sent yet.</p>
            ";
        } else {
            // line 57
            echo "                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Recipients</th>
                            <th>Subject</th>
                            <th>Sent At</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["sentMessages"]) || array_key_exists("sentMessages", $context) ? $context["sentMessages"] : (function () { throw new RuntimeError('Variable "sentMessages" does not exist.', 67, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 67, $this->source); })()), "sentAt", [], "any", false, false, false, 67) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 67, $this->source); })()), "sentAt", [], "any", false, false, false, 67)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 68
                echo "                            <tr>
                                <td>
                                    ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "recipients", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                    // line 71
                    echo "                                        <div class=\"d-flex align-items-center\">
                                            <img class=\"recipient-profile-picture\" src=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/profile_pictures/" . twig_get_attribute($this->env, $this->source, $context["recipient"], "profilePictureFilename", [], "any", false, false, false, 72))), "html", null, true);
                    echo "\" alt=\"Recipient Profile Picture\">
                                            <span>";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipient"], "username", [], "any", false, false, false, 73), "html", null, true);
                    echo "</span>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                                </td>
                                <td>
                                    <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_show", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "getId", [], "method", false, false, false, 78)]), "html", null, true);
                echo "\">
                                        ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "subject", [], "any", false, false, false, 79), "html", null, true);
                echo "
                                    </a>
                                </td>
                                <td>";
                // line 82
                ((twig_get_attribute($this->env, $this->source, $context["message"], "sentAt", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sentAt", [], "any", false, false, false, 82), "Y-m-d H:i:s"), "html", null, true))) : (print ("N/A")));
                echo "</td>
                                <td>
                                    ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["message"], "viewed", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                                        <span class=\"text-success font-weight-bold\">Read</span>
                                    ";
                } else {
                    // line 87
                    echo "                                        <span class=\"text-danger font-weight-bold\">Unread</span>
                                    ";
                }
                // line 89
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </tbody>
                </table>
            ";
        }
        // line 95
        echo "        </div>
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
        return "message/outbox.html.twig";
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
        return array (  235 => 95,  230 => 92,  222 => 89,  218 => 87,  214 => 85,  212 => 84,  207 => 82,  201 => 79,  197 => 78,  193 => 76,  184 => 73,  180 => 72,  177 => 71,  173 => 70,  169 => 68,  165 => 67,  153 => 57,  149 => 55,  147 => 54,  141 => 51,  138 => 50,  132 => 46,  126 => 44,  124 => 43,  117 => 38,  110 => 37,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Outbox{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom styles for the outbox template */
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .recipient-profile-picture {
            width: 30px; /* Set width for recipient profile pictures */
            height: 30px; /* Set height for recipient profile pictures */
            border-radius: 50%; /* Create a circular border for recipient profile pictures */
            margin-right: 5px; /* Add margin for spacing */
        }

        .current-user-profile-picture {
            max-width: 300px; /* Set maximum width for current user's profile picture */
            max-height: 300px; /* Set maximum height for current user's profile picture */
            border: 1px solid #ccc; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-bottom: 20px; /* Add margin for spacing */
        }

        .message-image {
            max-width: 100%; /* Ensure the image fits within its container */
            height: auto; /* Maintain aspect ratio */
            border: 1px solid #ddd; /* Optional: Add border for clarity */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
            margin-top: 10px; /* Add margin for spacing */
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h1>Outbox</h1>

            {% if user.getProfilePictureFilename() %}
                <img class=\"current-user-profile-picture img-fluid rounded mb-4\" src=\"{{ asset('uploads/profile_pictures/' ~ user.getProfilePictureFilename()) }}\" alt=\"Profile Picture\">
            {% else %}
                <div class=\"alert alert-warning\" role=\"alert\">
                    No profile picture uploaded.
                </div>
            {% endif %}

            <a href=\"{{ path('app_profile') }}\" class=\"btn btn-secondary mt-3 d-block\">Back to Profile</a>
        </div>
        <div class=\"col-md-8\">
            {% if sentMessages is empty %}
                <p>No messages sent yet.</p>
            {% else %}
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Recipients</th>
                            <th>Subject</th>
                            <th>Sent At</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for message in sentMessages|sort((a, b) => a.sentAt <=> b.sentAt) %}
                            <tr>
                                <td>
                                    {% for recipient in message.recipients %}
                                        <div class=\"d-flex align-items-center\">
                                            <img class=\"recipient-profile-picture\" src=\"{{ asset('uploads/profile_pictures/' ~ recipient.profilePictureFilename) }}\" alt=\"Recipient Profile Picture\">
                                            <span>{{ recipient.username }}</span>
                                        </div>
                                    {% endfor %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_message_show', { 'id': message.getId() }) }}\">
                                        {{ message.subject }}
                                    </a>
                                </td>
                                <td>{{ message.sentAt ? message.sentAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
                                <td>
                                    {% if message.viewed %}
                                        <span class=\"text-success font-weight-bold\">Read</span>
                                    {% else %}
                                        <span class=\"text-danger font-weight-bold\">Unread</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "message/outbox.html.twig", "C:\\Users\\amine\\Desktop\\SymfonyMessagingAppProject\\symfonyMessagingApp\\templates\\message\\outbox.html.twig");
    }
}
