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

/* @PrestaShop/Admin/Module/common.html.twig */
class __TwigTemplate_6d2f73e11de85223b9f776d1e359d3c8 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        // line 54
        $context["js_translatable"] = Twig\Extension\CoreExtension::merge(["Bulk Action - One module minimum" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to select at least one module to use the bulk action.", [], "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action \"[1]\" is not available, impossible to perform your request.", [], "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action [1] is not available for module [2]. Skipped.", [], "Admin.Modules.Notification"), "An action is already in progress. Please wait for it to finish." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An action is already in progress. Please wait for it to finish.", [], "Admin.Modules.Notification")],         // line 59
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 59, $this->source); })()));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Module/common.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
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

        // line 28
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    var moduleURLs = {
      'configurationPage': '";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_configure_action", ["module_name" => ":number:"]), "js"), "html", null, true);
        yield "',
      'moduleImport': '";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_import"), "js"), "html", null, true);
        yield "',
      'notificationsCount': '";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_notification_count"), "js"), "html", null, true);
        yield "',
      'maintenancePage': '";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance"), "js"), "html", null, true);
        yield "',
    };

    var moduleTranslations = {
      'singleModuleModalUpdateTitle': '";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to update this module?", [], "Admin.Modules.Notification"), "html", null, true);
        yield "',
      'multipleModuleModalUpdateTitle': '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to update these modules?", [], "Admin.Modules.Notification"), "html", null, true);
        yield "',
      'moduleModalUpdateCancel': '";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "',
      'moduleModalUpdateMaintenance': '";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go to maintenance page", [], "Admin.Actions"), "html", null, true);
        yield "',
      'moduleModalUpdateUpgrade': '";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade", [], "Admin.Actions"), "html", null, true);
        yield "',
      'upgradeAnywayButtonText': '";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update anyway", [], "Admin.Actions"), "html", null, true);
        yield "',
      'moduleModalUpdateConfirmMessage': '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We strongly advise you to update the modules on maintenance mode to avoid any cache issues.", [], "Admin.Modules.Notification"), "html", null, true);
        yield "',
    };

    // Need to come from the backend
    var isShopMaintenance = !";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_SHOP_ENABLE")), "html", null, true);
        yield ";
  </script>
  <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/module.bundle.js"), "html", null, true);
        yield "\"></script>
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
        return "@PrestaShop/Admin/Module/common.html.twig";
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
        return array (  146 => 51,  142 => 50,  137 => 48,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  80 => 28,  67 => 27,  56 => 25,  54 => 59,  53 => 54,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script>
    var moduleURLs = {
      'configurationPage': '{{ path('admin_module_configure_action', {module_name: ':number:'})|e('js') }}',
      'moduleImport': '{{ path('admin_module_import')|e('js') }}',
      'notificationsCount': '{{ path('admin_module_notification_count')|e('js') }}',
      'maintenancePage': '{{ path('admin_maintenance')|e('js') }}',
    };

    var moduleTranslations = {
      'singleModuleModalUpdateTitle': '{{ 'Are you sure you want to update this module?'|trans({}, 'Admin.Modules.Notification') }}',
      'multipleModuleModalUpdateTitle': '{{ 'Are you sure you want to update these modules?'|trans({}, 'Admin.Modules.Notification') }}',
      'moduleModalUpdateCancel': '{{ 'Cancel'|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateMaintenance': '{{ 'Go to maintenance page'|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateUpgrade': '{{ 'Upgrade'|trans({}, 'Admin.Actions') }}',
      'upgradeAnywayButtonText': '{{ 'Update anyway'|trans({}, 'Admin.Actions') }}',
      'moduleModalUpdateConfirmMessage': '{{ 'We strongly advise you to update the modules on maintenance mode to avoid any cache issues.'|trans({}, 'Admin.Modules.Notification') }}',
    };

    // Need to come from the backend
    var isShopMaintenance = !{{ 'PS_SHOP_ENABLE'|configuration|intCast }};
  </script>
  <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/module.bundle.js') }}\"></script>
{% endblock %}

{% set js_translatable = {
  'Bulk Action - One module minimum': 'You need to select at least one module to use the bulk action.'|trans({}, 'Admin.Modules.Notification'),
  'Bulk Action - Request not found': 'The action \"[1]\" is not available, impossible to perform your request.'|trans({}, 'Admin.Modules.Notification'),
  'Bulk Action - Request not available for module': 'The action [1] is not available for module [2]. Skipped.'|trans({}, 'Admin.Modules.Notification'),
  'An action is already in progress. Please wait for it to finish.': 'An action is already in progress. Please wait for it to finish.'|trans({}, 'Admin.Modules.Notification'),
}|merge(js_translatable)
%}
", "@PrestaShop/Admin/Module/common.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/common.html.twig");
    }
}
