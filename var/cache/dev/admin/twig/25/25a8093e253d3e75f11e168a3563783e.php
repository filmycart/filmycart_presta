<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Helpers/bootstrap_popup.html.twig */
class __TwigTemplate_475f7024e717b28f2e103f06e92dba74 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig"));

        // line 25
        yield "<div class=\"modal fade\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\" tabindex=\"-1\">
    <div class=\"modal-dialog ";
        // line 26
        if (array_key_exists("class", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })()), "html", null, true);
        }
        yield "\">
        <div class=\"modal-content\">
            ";
        // line 28
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 36
        yield "
            ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 39
        yield "
            ";
        // line 40
        if (array_key_exists("progressbar", $context)) {
            // line 41
            yield "                <div class=\"modal-body\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                    <div class=\"float-right progress-details-text\" default-value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 42, $this->source); })()), "label", [], "any", false, false, false, 42), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "\">
                        ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 43, $this->source); })()), "label", [], "any", false, false, false, 43), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "
                    </div>
                    <div class=\"progress\" style=\"width: 100%\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 52
        yield "
            ";
        // line 53
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 77
        yield "        </div>
    </div>
</div>
<script>
    \$(function() {
        var closable = ";
        // line 82
        if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 82, $this->source); })()) == true))) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
        \$('#";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()), "html", null, true);
        yield "').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 29
        yield "                ";
        if (array_key_exists("title", $context)) {
            // line 30
            yield "                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "</h4>
                        ";
            // line 32
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 32, $this->source); })()) == true))) {
                yield "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
            }
            // line 33
            yield "                    </div>
                ";
        }
        // line 35
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        yield "                ";
        if (array_key_exists("actions", $context)) {
            // line 55
            yield "                    <div class=\"modal-footer\">
                        ";
            // line 56
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 56, $this->source); })()) == true))) {
                // line 57
                yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">
                              ";
                // line 58
                if (array_key_exists("closeLabel", $context)) {
                    // line 59
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["closeLabel"]) || array_key_exists("closeLabel", $context) ? $context["closeLabel"] : (function () { throw new RuntimeError('Variable "closeLabel" does not exist.', 59, $this->source); })()), "html", null, true);
                    yield "
                              ";
                } else {
                    // line 61
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
                    yield "
                              ";
                }
                // line 63
                yield "                            </button>
                        ";
            }
            // line 65
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 65, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 66
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", true, true, false, 66) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 66) == "link"))) {
                    // line 67
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 67), "#")) : ("#")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 67), "btn")) : ("btn")), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 67), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "</a>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["action"], "type", [], "any", true, true, false, 68) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 68) == "button"))) {
                    // line 69
                    yield "                                <button type=\"button\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", false, false, false, 69), "")) : ("")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 69), "btn")) : ("btn")), "html", null, true);
                    yield "\">
                                    ";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 70), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "
                                </button>
                            ";
                }
                // line 73
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                    </div>
                ";
        }
        // line 76
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  286 => 76,  282 => 74,  276 => 73,  270 => 70,  263 => 69,  261 => 68,  252 => 67,  249 => 66,  244 => 65,  240 => 63,  234 => 61,  228 => 59,  226 => 58,  223 => 57,  221 => 56,  218 => 55,  215 => 54,  202 => 53,  191 => 38,  178 => 37,  167 => 35,  163 => 33,  159 => 32,  155 => 31,  152 => 30,  149 => 29,  136 => 28,  116 => 83,  108 => 82,  101 => 77,  99 => 53,  96 => 52,  84 => 43,  80 => 42,  75 => 41,  73 => 40,  70 => 39,  68 => 37,  65 => 36,  63 => 28,  56 => 26,  51 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# **
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * #}
<div class=\"modal fade\" id=\"{{ id }}\" tabindex=\"-1\">
    <div class=\"modal-dialog {% if class is defined %}{{ class }}{% endif %}\">
        <div class=\"modal-content\">
            {% block header %}
                {% if title is defined %}
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">{{ title }}</h4>
                        {% if closable is defined and closable == true %}<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>{% endif %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% if progressbar is defined %}
                <div class=\"modal-body\" id=\"{{ progressbar.id }}\">
                    <div class=\"float-right progress-details-text\" default-value=\"{{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}\">
                        {{ progressbar.label|default('Processing...'|trans({}, 'Admin.Global')) }}
                    </div>
                    <div class=\"progress\" style=\"width: 100%\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% block footer %}
                {% if actions is defined %}
                    <div class=\"modal-footer\">
                        {% if closable is defined and closable == true %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">
                              {% if closeLabel is defined %}
                                {{ closeLabel }}
                              {% else %}
                                {{ 'Close'|trans({}, 'Admin.Actions') }}
                              {% endif %}
                            </button>
                        {% endif %}
                        {% for action in actions %}
                            {% if action.type is defined and action.type == 'link' %}
                                <a href=\"{{ action.href|default('#') }}\" class=\"{{ action.class|default('btn') }}\">{{ action.label|default('Label is missing') }}</a>
                            {% elseif action.type is defined and action.type == 'button' %}
                                <button type=\"button\" value=\"{{ action.value|default('') }}\" class=\"{{ action.class|default('btn') }}\">
                                    {{ action.label|default('Label is missing') }}
                                </button>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    </div>
</div>
<script>
    \$(function() {
        var closable = {% if closable is defined and closable == true %}true{% else %}false{% endif %};
        \$('#{{ id }}').modal({
            backdrop: (closable ? true : 'static'),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Helpers/bootstrap_popup.html.twig");
    }
}
