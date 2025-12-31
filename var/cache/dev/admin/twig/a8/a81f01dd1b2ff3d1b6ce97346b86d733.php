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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig */
class __TwigTemplate_111ec6665454a6cfa4b341cac0108bb6 extends Template
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
            'layouts_configuration' => [$this, 'block_layouts_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig"));

        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('layouts_configuration', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layouts_configuration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layouts_configuration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layouts_configuration"));

        // line 27
        yield "  <div class=\"col-12 layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/pages/themes/icon_layouts.png"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure your page layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "</span>
          <p class=\"mb-0 description\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Each page can use a different layout, choose it among the layouts bundled in your theme.", [], "Admin.Design.Feature"), "html", null, true);
        yield "</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_theme_customize_layouts");
        yield "\"
          class=\"btn btn-tertiary choose-layouts-button\"
        >
          ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose layouts", [], "Admin.Design.Feature"), "html", null, true);
        yield "
        </a>

        ";
        // line 45
        if ((isset($context["isDevModeOn"]) || array_key_exists("isDevModeOn", $context) ? $context["isDevModeOn"] : (function () { throw new RuntimeError('Variable "isDevModeOn" does not exist.', 45, $this->source); })())) {
            // line 46
            yield "          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
            type=\"button\"
            data-submit-url=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_reset_layouts", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\"
            data-csrf-token=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reset-theme-layouts"), "html", null, true);
            yield "\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>
            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset to defaults", [], "Admin.Design.Feature"), "html", null, true);
            yield "
          </button>
        ";
        }
        // line 55
        yield "      </div>
      <div class=\"clearfix\"></div>
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 55,  128 => 52,  122 => 49,  118 => 48,  114 => 46,  112 => 45,  106 => 42,  100 => 39,  93 => 35,  89 => 34,  81 => 31,  75 => 27,  52 => 26,  49 => 25,);
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

{% block layouts_configuration %}
  <div class=\"col-12 layout-configuration\">
    <div class=\"inner-content\">
      <div class=\"float-left\">
        <div class=\"d-inline-block layout-logo\">
          <img src=\"{{ asset('themes/new-theme/public/pages/themes/icon_layouts.png') }}\" alt=\"{{ 'Configure your page layouts'|trans({}, 'Admin.Design.Feature') }}\">
        </div>
        <div class=\"d-inline-block\">
          <span class=\"title\">{{ 'Configure your page layouts'|trans({}, 'Admin.Design.Feature') }}</span>
          <p class=\"mb-0 description\">{{ 'Each page can use a different layout, choose it among the layouts bundled in your theme.'|trans({}, 'Admin.Design.Feature') }}</p>
        </div>
      </div>
      <div class=\"float-right\">
        <a href=\"{{ path('admin_theme_customize_layouts') }}\"
          class=\"btn btn-tertiary choose-layouts-button\"
        >
          {{ 'Choose layouts'|trans({}, 'Admin.Design.Feature') }}
        </a>

        {% if isDevModeOn %}
          <button class=\"btn btn-tertiary-outline js-reset-theme-layouts-btn\"
            type=\"button\"
            data-submit-url=\"{{ path('admin_themes_reset_layouts', {themeName: currentlyUsedTheme.name}) }}\"
            data-csrf-token=\"{{ csrf_token('reset-theme-layouts') }}\"
          >
            <i class=\"material-icons\">settings_backup_restore</i>
            {{ 'Reset to defaults'|trans({}, 'Admin.Design.Feature') }}
          </button>
        {% endif %}
      </div>
      <div class=\"clearfix\"></div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig");
    }
}
