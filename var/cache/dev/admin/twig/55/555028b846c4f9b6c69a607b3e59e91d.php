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

/* @PrestaShop/Admin/Component/Layout/quick_access.html.twig */
class __TwigTemplate_68087d1993485b2bfcfcb0be71f2bb22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig"));

        // line 25
        yield "<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
    </button>
    <div class=\"dropdown-menu\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "quickAccesses", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 32
            yield "        <a class=\"dropdown-item quick-row-link
          ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 33)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 33), "html", null, true);
            }
            // line 34
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                yield "active";
            }
            yield "\"
        href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 35), "html", null, true);
            yield "\"
        ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                yield " target=\"_blank\"";
            }
            // line 37
            yield "        data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
        >";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "      <div class=\"dropdown-divider\"></div>
      ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 41)) {
            // line 42
            yield "        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 46, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 46), "id_quick_access", [], "any", false, false, false, 46), "html", null, true);
            yield "\"
           data-rand=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-icon=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 48, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 48), "html", null, true);
            yield "\"
           data-url=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 49, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 49), "link", [], "any", false, false, false, 49), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 50
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 52, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">remove_circle_outline</i>
          ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      ";
        } else {
            // line 58
            yield "        <a id=\"quick-add-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-rand=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-method=\"add\"
           data-icon=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 63, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 63), "html", null, true);
            yield "\"
           data-url=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 64, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 64), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 65
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 67, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 67), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      ";
        }
        // line 73
        yield "      <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </a>
    </div>
  </div>
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
        return "@PrestaShop/Admin/Component/Layout/quick_access.html.twig";
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
        return array (  189 => 75,  183 => 73,  177 => 70,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  150 => 61,  145 => 58,  139 => 55,  133 => 52,  129 => 51,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  109 => 46,  103 => 42,  101 => 41,  98 => 40,  90 => 38,  85 => 37,  81 => 36,  77 => 35,  70 => 34,  66 => 33,  63 => 32,  59 => 31,  53 => 28,  48 => 25,);
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
<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      {{ 'Quick Access'|trans({}, 'Admin.Navigation.Header') }}
    </button>
    <div class=\"dropdown-menu\">
      {% for quickAccess in this.quickAccesses %}
        <a class=\"dropdown-item quick-row-link
          {% if quickAccess.class is defined %}{{ quickAccess.class }}{% endif %}
          {% if quickAccess.active %}active{% endif %}\"
        href=\"{{ quickAccess.link }}\"
        {% if quickAccess.new_window %} target=\"_blank\"{% endif %}
        data-item=\"{{ quickAccess.name }}\"
        >{{ quickAccess.name }}</a>
      {% endfor %}
      <div class=\"dropdown-divider\"></div>
      {% if this.activeQuickAccess %}
        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\"
           data-rand=\"{{ random(1, 200) }}\"
           data-icon=\"{{ this.currentPageIcon }}\"
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
  </div>
</div>
", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/quick_access.html.twig");
    }
}
