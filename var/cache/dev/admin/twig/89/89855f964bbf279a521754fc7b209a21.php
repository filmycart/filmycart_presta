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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_906a0bf0160c9f96d1dc790c4e417515 extends Template
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
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
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

        // line 28
        yield "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 31
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig");
        yield "
      ";
        // line 33
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_import.html.twig", ["level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 33, $this->source); })()), "errorMessage" => (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 33, $this->source); })())]);
        yield "
      ";
        // line 35
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", ["topMenuData" => (isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 35, $this->source); })()), "bulkActions" => (isset($context["bulkActions"]) || array_key_exists("bulkActions", $context) ? $context["bulkActions"] : (function () { throw new RuntimeError('Variable "bulkActions" does not exist.', 35, $this->source); })())]);
        yield "

      ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", ["display_type" => "list", "origin" => "manage"]);
        yield "

      ";
        // line 39
        yield from $this->unwrap()->yieldBlock('catalog_categories_listing', $context, $blocks);
        // line 51
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalog_categories_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        // line 40
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()), "subMenu", [], "any", false, false, false, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            yield "          ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 41))) {
                // line 42
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]);
                yield "
          ";
            } else {
                // line 44
                yield "            <div class=\"module-short-list\">
              <span id=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 45), "html", null, true);
                yield "_modules\" class=\"module-search-result-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), [], "Admin.Modules.Feature"), "html", null, true);
                yield "</span>
              ";
                // line 46
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", ["modules" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 46), "display_type" => "list", "origin" => "manage", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 46)]);
                yield "
            </div>
          ";
            }
            // line 49
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
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
        return array (  186 => 50,  172 => 49,  166 => 46,  160 => 45,  157 => 44,  151 => 42,  148 => 41,  130 => 40,  117 => 39,  104 => 51,  102 => 39,  97 => 37,  91 => 35,  86 => 33,  81 => 31,  77 => 28,  64 => 27,  41 => 25,);
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
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      {# Bulk Action confirm modal #}
      {{ include('@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig') }}
      {# Contains toolbar-nav for module page with level authorization #}
      {{ include('@PrestaShop/Admin/Module/Includes/modal_import.html.twig', {level: level, errorMessage: errorMessage}) }}
      {# Contains menu with Selection/Categories/Popular and Tag Search #}
      {{ include('@PrestaShop/Admin/Module/Includes/menu_top.html.twig', {topMenuData: topMenuData, bulkActions: bulkActions}) }}

      {{ include('@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig', {display_type: 'list', origin: 'manage'}) }}

      {% block catalog_categories_listing %}
        {% for category in categories.subMenu %}
          {% if category.modules is empty %}
            {{ include('@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig', {category: category, display_type: 'list', origin: 'manage'}) }}
          {% else %}
            <div class=\"module-short-list\">
              <span id=\"{{ category.refMenu }}_modules\" class=\"module-search-result-title\">{{ category.name|trans({}, 'Admin.Modules.Feature') }}</span>
              {{ include('@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig', {modules: category.modules, display_type: 'list', origin: 'manage', id: category.refMenu}) }}
            </div>
          {% endif %}
        {% endfor %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Module/manage.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
