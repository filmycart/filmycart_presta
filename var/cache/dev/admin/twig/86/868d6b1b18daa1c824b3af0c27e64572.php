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

/* @PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig */
class __TwigTemplate_68beeff1b9e39aca6195b454996963ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig"));

        // line 25
        yield "<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</p>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 27, $this->source); })()), "quickAccesses", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 28
            yield "    <a class=\"dropdown-item quick-row-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 28)) {
                yield " active";
            }
            yield "\"
      href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
      ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 30)) {
                yield " target=\"_blank\"";
            }
            // line 31
            yield "      data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
      >
      ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "  <div class=\"dropdown-divider\"></div>
  ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 37, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 37)) {
            // line 38
            yield "    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 42), "id_quick_access", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
       data-rand=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 44), "link", [], "any", false, false, false, 44), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 45
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 47, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
    </a>
  ";
        } else {
            // line 53
            yield "    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-method=\"add\"
       data-icon=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 58, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 58), "html", null, true);
            yield "\"
       data-url=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 59, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 60
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 62, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">add_circle</i>
      ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        // line 68
        yield "  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
  <i class=\"material-icons\">settings</i>
    ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
  </a>
</div>
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
        return "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig";
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
        return array (  176 => 70,  170 => 68,  164 => 65,  158 => 62,  154 => 61,  150 => 60,  146 => 59,  142 => 58,  137 => 56,  132 => 53,  126 => 50,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  94 => 38,  92 => 37,  89 => 36,  80 => 33,  74 => 31,  70 => 30,  66 => 29,  59 => 28,  55 => 27,  51 => 26,  48 => 25,);
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
<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">{{ 'Quick Access'|trans({}, 'Admin.Navigation.Header') }}</p>
  {% for quickAccess in this.quickAccesses %}
    <a class=\"dropdown-item quick-row-link{% if quickAccess.active %} active{% endif %}\"
      href=\"{{ quickAccess.link }}\"
      {% if quickAccess.new_window %} target=\"_blank\"{% endif %}
      data-item=\"{{ quickAccess.name }}\"
      >
      {{ quickAccess.name }}
  </a>
  {% endfor %}
  <div class=\"dropdown-divider\"></div>
  {% if this.activeQuickAccess %}
    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\"
       data-rand=\"{{ random(1, 200) }}\"
       data-url=\"{{ this.activeQuickAccess.link }}\"
       data-post-link=\"{{ legacy_path('AdminQuickAccesses') }}\"
       data-prompt-text=\"{{ 'Please name this shortcut:'|trans({}, 'Admin.Navigation.Header') }}\"
       data-link=\"{{ this.activeQuickAccess.name }}\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      {{ 'Remove from Quick Access'|trans({}, 'Admin.Navigation.Header') }}
    </a>
  {% else %}
    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"{{ random(1, 200) }}\"
       data-method=\"add\"
       data-icon=\"{{ this.currentPageIcon }}\"
       data-url=\"{{ this.currentPageQuickAccessLink }}\"
       data-post-link=\"{{ legacy_path('AdminQuickAccesses') }}\"
       data-prompt-text=\"{{ 'Please name this shortcut:'|trans({}, 'Admin.Navigation.Header') }}\"
       data-link=\"{{ this.currentPageTitle }}\"
    >
      <i class=\"material-icons\">add_circle</i>
      {{ 'Add current page to Quick Access'|trans({}, 'Admin.Actions') }}
    </a>
  {% endif %}
  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"{{ legacy_path('AdminQuickAccesses') }}\">
  <i class=\"material-icons\">settings</i>
    {{ 'Manage your quick accesses'|trans({}, 'Admin.Navigation.Header') }}
  </a>
</div>
", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/mobile_quick_access.html.twig");
    }
}
