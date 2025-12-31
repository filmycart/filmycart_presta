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

/* @PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig */
class __TwigTemplate_6e1d3deb722c83f09caf7b32beb4914a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig"));

        // line 25
        yield "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            yield "    ";
            $context["refMenu"] = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "refMenu", [], "any", false, false, false, 27);
            // line 28
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\">
      <a class=\"dropdown-item module-category-reset\">
        ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </a>

      <a
        class=\"dropdown-item module-category-menu module-category-recently-used\"
        data-category-ref=\"recently-used\"
        data-category-display-name=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            yield "\"
      >
        ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </a>

      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "subMenu", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 49
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 49))) {
                    // line 50
                    yield "          <a
            class=\"dropdown-item module-category-menu\"
            ";
                    // line 52
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 52)) {
                        yield "data-category-tab=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 52), "html", null, true);
                        yield "\"";
                    }
                    // line 53
                    yield "            data-category-ref=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "refMenu", [], "any", false, false, false, 53), "html", null, true);
                    yield "\"
            data-category-display-name=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 54), [], "Admin.Modules.Feature"), "html", null, true);
                    yield "\"
          >
            ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 56), [], "Admin.Modules.Feature"), "html", null, true);
                    yield "<span class=\"float-right\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 56)), "html", null, true);
                    yield "</span>
          </a>
        ";
                }
                // line 59
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subMenu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "</div>
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
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig";
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
        return array (  145 => 62,  138 => 60,  132 => 59,  124 => 56,  119 => 54,  114 => 53,  108 => 52,  104 => 50,  101 => 49,  97 => 48,  91 => 45,  86 => 43,  77 => 37,  72 => 35,  64 => 30,  58 => 28,  55 => 27,  51 => 26,  48 => 25,);
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
<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  {% for menu in topMenuData %}
    {% set refMenu = menu.refMenu %}
    <div id=\"{{ refMenu }}\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        {{ 'All categories'|trans({}, 'Admin.Modules.Feature') }}
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"{{ refMenu }}\">
      <a class=\"dropdown-item module-category-reset\">
        {{ 'All categories'|trans({}, 'Admin.Modules.Feature') }}
      </a>

      <a
        class=\"dropdown-item module-category-menu module-category-recently-used\"
        data-category-ref=\"recently-used\"
        data-category-display-name=\"{{ 'Recently used'|trans({}, 'Admin.Modules.Feature') }}\"
      >
        {{ 'Recently used'|trans({}, 'Admin.Modules.Feature') }}
      </a>

      {% for subMenu in menu.subMenu %}
        {% if subMenu.modules is not empty %}
          <a
            class=\"dropdown-item module-category-menu\"
            {% if subMenu.tab %}data-category-tab=\"{{ subMenu.tab }}\"{% endif %}
            data-category-ref=\"{{ subMenu.refMenu }}\"
            data-category-display-name=\"{{ subMenu.name|trans({}, 'Admin.Modules.Feature') }}\"
          >
            {{ subMenu.name|trans({}, 'Admin.Modules.Feature') }}<span class=\"float-right\">{{ subMenu.modules|length }}</span>
          </a>
        {% endif %}
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories.html.twig");
    }
}
