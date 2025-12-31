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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_2ea62c4b79dc060a92fb6f0a7a6461c1 extends Template
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

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"application/javascript\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_error_templating_url"]) || array_key_exists("cdc_error_templating_url", $context) ? $context["cdc_error_templating_url"] : (function () { throw new RuntimeError('Variable "cdc_error_templating_url" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\"></script>

    ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && ((isset($context["cdc_script_not_found"]) || array_key_exists("cdc_script_not_found", $context) ? $context["cdc_script_not_found"] : (function () { throw new RuntimeError('Variable "cdc_script_not_found" does not exist.', 25, $this->source); })()) === true))) {
            // line 26
            yield "      <script type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_error_url"]) || array_key_exists("cdc_error_url", $context) ? $context["cdc_error_url"] : (function () { throw new RuntimeError('Variable "cdc_error_url" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "\"></script>
    ";
        } else {
            // line 28
            yield "      <script type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_url"]) || array_key_exists("cdc_url", $context) ? $context["cdc_url"] : (function () { throw new RuntimeError('Variable "cdc_url" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "\"></script>
    ";
        }
        // line 30
        yield "
    <script>
      var psAccountLoaded = false;
    </script>
    ";
        // line 34
        if ((array_key_exists("urlAccountsCdn", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["urlAccountsCdn"]) || array_key_exists("urlAccountsCdn", $context) ? $context["urlAccountsCdn"] : (function () { throw new RuntimeError('Variable "urlAccountsCdn" does not exist.', 34, $this->source); })())))) {
            // line 35
            yield "      ";
            // line 36
            yield "      <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["urlAccountsCdn"]) || array_key_exists("urlAccountsCdn", $context) ? $context["urlAccountsCdn"] : (function () { throw new RuntimeError('Variable "urlAccountsCdn" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\" rel=preload></script>
      <script>
        if (window?.psaccountsVue) {
          window?.psaccountsVue?.init();
          psAccountLoaded = true;
        }
      </script>
      <script async type=\"application/javascript\" src=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upload"]) || array_key_exists("upload", $context) ? $context["upload"] : (function () { throw new RuntimeError('Variable "upload" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "\"></script>
    ";
        }
        // line 45
        yield "
    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 56
        yield json_encode((isset($context["shop_context"]) || array_key_exists("shop_context", $context) ? $context["shop_context"] : (function () { throw new RuntimeError('Variable "shop_context" does not exist.', 56, $this->source); })()));
        yield ";

        if (psAccountLoaded) {
          context.accounts_component_loaded = true;
        }

        renderModules(context, '#cdc-container')
      }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 68
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_error_templating_css"]) || array_key_exists("cdc_error_templating_css", $context) ? $context["cdc_error_templating_css"] : (function () { throw new RuntimeError('Variable "cdc_error_templating_css" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        yield "\"></div>

    ";
        // line 77
        yield from $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 77)->unwrap()->yield(CoreExtension::merge($context, ["level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 77, $this->source); })()), "errorMessage" => (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 77, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
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
        return array (  215 => 77,  210 => 75,  206 => 73,  193 => 72,  180 => 69,  175 => 68,  162 => 67,  141 => 56,  128 => 45,  123 => 43,  112 => 36,  110 => 35,  108 => 34,  102 => 30,  96 => 28,  90 => 26,  88 => 25,  83 => 23,  78 => 22,  65 => 21,  42 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"application/javascript\" src=\"{{ cdc_error_templating_url }}\"></script>

    {% if cdc_script_not_found is defined and cdc_script_not_found is same as(true) %}
      <script type=\"application/javascript\" src=\"{{ cdc_error_url }}\"></script>
    {% else %}
      <script type=\"application/javascript\" src=\"{{ cdc_url }}\"></script>
    {% endif %}

    <script>
      var psAccountLoaded = false;
    </script>
    {% if urlAccountsCdn is defined and urlAccountsCdn is not empty %}
      {# PrestaShop Account #}
      <script src=\"{{ urlAccountsCdn }}\" rel=preload></script>
      <script>
        if (window?.psaccountsVue) {
          window?.psaccountsVue?.init();
          psAccountLoaded = true;
        }
      </script>
      <script async type=\"application/javascript\" src=\"{{ upload }}\"></script>
    {% endif %}

    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = {{ shop_context|json_encode()|raw }};

        if (psAccountLoaded) {
          context.accounts_component_loaded = true;
        }

        renderModules(context, '#cdc-container')
      }
    </script>
{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ cdc_error_templating_css }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block content %}
  <prestashop-accounts style=\"display: none;\"></prestashop-accounts>

  <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"{{ path('admin_mbo_module_cdc_error') }}\"></div>

    {% include '@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
{% endblock %}
", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "/var/www/html/filmycart_presta/modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig");
    }
}
