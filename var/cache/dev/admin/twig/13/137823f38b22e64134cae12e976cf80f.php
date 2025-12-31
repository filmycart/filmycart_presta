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

/* @PrestaShop/Admin/Component/Layout/search_form.html.twig */
class __TwigTemplate_7869b2b701c9e1594ff348947dc030b2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/search_form.html.twig"));

        // line 25
        yield "<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"";
        // line 28
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 31
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 34
        yield "  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["boQuery"]) || array_key_exists("boQuery", $context) ? $context["boQuery"] : (function () { throw new RuntimeError('Variable "boQuery" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search (e.g.: product reference, customer name…)", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searchbar", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" href=\"#\" data-value=\"0\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"1\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, reference, etc.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name"), "html", null, true);
        yield "\" href=\"#\" data-value=\"2\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield " </a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by ip address"), "html", null, true);
        yield "\" href=\"#\" data-value=\"6\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"3\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"4\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"5\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"7\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "</a>
      </div>
      <button class=\"btn btn-secondary\" type=\"submit\"><span class=\"d-none\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEARCH", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    ";
        // line 58
        if ((array_key_exists("searchType", $context) && (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "      \$('.search-option a[data-value=' + ";
            yield (((isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 59, $this->source); })())) ? (1) : (0));
            yield " + ']').click();
    ";
        }
        // line 61
        yield "      \$('#bo_query').one('click', function() {
        \$(this).closest('form').removeClass('collapsed');
      });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/search_form.html.twig";
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
        return array (  176 => 61,  170 => 59,  168 => 58,  158 => 51,  149 => 49,  141 => 48,  133 => 47,  125 => 46,  113 => 45,  101 => 44,  93 => 43,  84 => 41,  78 => 38,  68 => 35,  65 => 34,  61 => 32,  59 => 31,  53 => 28,  48 => 25,);
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
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"{{ legacy_path('AdminSearch') }}\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  {% if showClearBtn is defined and showClearBtn %}
    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  {% endif %}
  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"{{ boQuery }}\" placeholder=\"{{ 'Search (e.g.: product reference, customer name…)'|trans({}, 'Admin.Navigation.Header') }}\" aria-label=\"{{ 'Searchbar'|trans({}, 'Admin.Navigation.Header') }}\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        {{ 'Everywhere'|trans({}, 'Admin.Navigation.Header') }}
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"{{ 'Everywhere'|trans({}, 'Admin.Navigation.Header') }}\" href=\"#\" data-value=\"0\" data-placeholder=\"{{ 'What are you looking for?'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> {{ 'Everywhere'|trans({}, 'Admin.Navigation.Header') }}</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"{{ 'Catalog'|trans({}, 'Admin.Global') }}\" href=\"#\" data-value=\"1\" data-placeholder=\"{{ 'Product name, reference, etc.'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> {{ 'Catalog'|trans({}, 'Admin.Global') }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Customers'|trans({}, 'Admin.Navigation.Header') }} {{ 'by name'|trans }}\" href=\"#\" data-value=\"2\" data-placeholder=\"{{ 'Name'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> {{ 'Customers'|trans({}, 'Admin.Navigation.Header') }} {{ 'by name'|trans({}, 'Admin.Navigation.Header') }} </a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Customers'|trans({}, 'Admin.Navigation.Header') }} {{ 'by ip address'|trans }}\" href=\"#\" data-value=\"6\" data-placeholder=\"{{ '123.45.67.89'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>{{ 'Customers'|trans({}, 'Admin.Navigation.Header') }} {{ 'by IP address'|trans({}, 'Admin.Navigation.Header') }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Orders'|trans({}, 'Admin.Global') }}\" href=\"#\" data-value=\"3\" data-placeholder=\"{{ 'Order ID'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> {{ 'Orders'|trans({}, 'Admin.Global') }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Invoices'|trans({}, 'Admin.Global') }}\" href=\"#\" data-value=\"4\" data-placeholder=\"{{ 'Invoice number'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> {{ 'Invoices'|trans({}, 'Admin.Global') }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Carts'|trans({}, 'Admin.Global') }}\" href=\"#\" data-value=\"5\" data-placeholder=\"{{ 'Cart ID'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> {{ 'Carts'|trans({}, 'Admin.Global') }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ 'Modules'|trans({}, 'Admin.Global') }}\" href=\"#\" data-value=\"7\" data-placeholder=\"{{ 'Module name'|trans({}, 'Admin.Navigation.Header') }}\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> {{ 'Modules'|trans({}, 'Admin.Global') }}</a>
      </div>
      <button class=\"btn btn-secondary\" type=\"submit\"><span class=\"d-none\">{{ 'SEARCH'|trans({}, 'Admin.Navigation.Header') }}</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    {% if searchType is defined and searchType %}
      \$('.search-option a[data-value=' + {{ searchType ? 1 : 0 }} + ']').click();
    {% endif %}
      \$('#bo_query').one('click', function() {
        \$(this).closest('form').removeClass('collapsed');
      });
    });
</script>
", "@PrestaShop/Admin/Component/Layout/search_form.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/search_form.html.twig");
    }
}
