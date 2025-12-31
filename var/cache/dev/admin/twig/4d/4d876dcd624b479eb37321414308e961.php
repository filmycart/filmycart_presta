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

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_a9d95d39320ca4a68bc387ebedba4c0b extends Template
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
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdvancedParameters/memcache_servers.html.twig"));

        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('perfs_memcache_servers', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_memcache_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_memcache_servers"));

        // line 28
        yield "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'widget');
        yield "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</span></th>
                <th><span class=\"title_box\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 63
            yield "                <tr id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                    <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                    <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                    <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                    <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "weight", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 69
            $context["removeMsg"] = json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 69), "%serverPort%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 69)], "Admin.Advparameters.Notification"));
            // line 70
            yield "                        <a class=\"btn btn-default\" href=\"\"
                           onclick=\"app.removeServer(";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 71), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["removeMsg"]) || array_key_exists("removeMsg", $context) ? $context["removeMsg"] : (function () { throw new RuntimeError('Variable "removeMsg" does not exist.', 71, $this->source); })()), "html", null, true);
            yield ");\">
                          <i class=\"material-icons\">remove_circle</i> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
            yield "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  183 => 77,  172 => 72,  166 => 71,  163 => 70,  161 => 69,  156 => 67,  152 => 66,  148 => 65,  144 => 64,  139 => 63,  135 => 62,  127 => 57,  123 => 56,  119 => 55,  115 => 54,  102 => 44,  98 => 43,  91 => 39,  84 => 35,  75 => 28,  52 => 27,  49 => 26,);
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
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% block perfs_memcache_servers %}
<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> {{ 'Add server'|trans }}</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    {{ form_widget(form) }}

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">{{ 'Add Server'|trans }}</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">{{ 'Test Server'|trans }}</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'ID'|trans({}, 'Admin.Global') }}</span></th>
                <th><span class=\"title_box\">{{ 'IP Address'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Port'|trans }}</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">{{ 'Weight'|trans }}</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for server in servers %}
                <tr id=\"row_{{ server.id_memcached_server }}\">
                    <td>{{ server.id_memcached_server }}</td>
                    <td>{{ server.ip }}</td>
                    <td>{{ server.port }}</td>
                    <td>{{ server.weight }}</td>
                    <td>
                        {% set removeMsg = 'Do you really want to remove the server %serverIp%:%serverPort% ?'|trans({'%serverIp%': server.ip, '%serverPort%': server.port}, 'Admin.Advparameters.Notification')|json_encode|raw %}
                        <a class=\"btn btn-default\" href=\"\"
                           onclick=\"app.removeServer({{ server.id_memcached_server }}, {{ removeMsg }});\">
                          <i class=\"material-icons\">remove_circle</i> {{ 'Remove'|trans({}, 'Admin.Actions') }}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "@AdvancedParameters/memcache_servers.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/memcache_servers.html.twig");
    }
}
