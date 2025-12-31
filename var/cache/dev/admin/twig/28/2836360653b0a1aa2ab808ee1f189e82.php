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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9083ed0bfc27bf2ce866d2977bfd7033 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        // line 26
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add_circle_outline"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
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

        // line 40
        yield "  <div id=\"themes-logo-page\">

    ";
        // line 42
        if ( !(isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 42, $this->source); })())) {
            // line 43
            yield "      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            yield "
        </p>
      </div>
    ";
        }
        // line 49
        yield "
    ";
        // line 50
        if ((isset($context["isInstalledRtlLanguage"]) || array_key_exists("isInstalledRtlLanguage", $context) ? $context["isInstalledRtlLanguage"] : (function () { throw new RuntimeError('Variable "isInstalledRtlLanguage" does not exist.', 50, $this->source); })())) {
            // line 51
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig");
            yield "
    ";
        }
        // line 53
        yield "
    ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 54, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_upload_logos")]);
        yield "
    ";
        // line 55
        if ((( !(isset($context["isInstalledRtlLanguage"]) || array_key_exists("isInstalledRtlLanguage", $context) ? $context["isInstalledRtlLanguage"] : (function () { throw new RuntimeError('Variable "isInstalledRtlLanguage" does not exist.', 55, $this->source); })()) && (isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 55, $this->source); })())) && (isset($context["isMultiShopFeatureUsed"]) || array_key_exists("isMultiShopFeatureUsed", $context) ? $context["isMultiShopFeatureUsed"] : (function () { throw new RuntimeError('Variable "isMultiShopFeatureUsed" does not exist.', 55, $this->source); })()))) {
            // line 56
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig");
            yield "
    ";
        }
        // line 58
        yield "    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo", [], "Admin.Global"), "html", null, true);
        yield "
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
        yield "
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 72, $this->source); })()), 'rest');
        yield "
    ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 73, $this->source); })()), 'form_end');
        yield "

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My theme for %name% shop", ["%name%" => (isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 77, $this->source); })())], "Admin.Design.Feature"), "html", null, true);
        yield "
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          ";
        // line 81
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 81, "1052910395")->unwrap()->yield(CoreExtension::merge($context, ["themeName" => CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 82, $this->source); })()), "get", ["name"], "method", false, false, false, 82), "themeDisplayName" => CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 83, $this->source); })()), "get", ["display_name"], "method", false, false, false, 83), "themeVersion" => CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 84, $this->source); })()), "get", ["version"], "method", false, false, false, 84), "themeAuthor" => CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 85, $this->source); })()), "get", ["author.name"], "method", false, false, false, 85), "themeAuthorUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 86, $this->source); })()), "get", ["author.url"], "method", false, false, false, 86), "themeFramework" => CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 87, $this->source); })()), "get", ["meta.compatibility.framework"], "method", false, false, false, 87), "isActive" => true]));
        // line 100
        yield "
          ";
        // line 101
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["notUsedThemes"]) || array_key_exists("notUsedThemes", $context) ? $context["notUsedThemes"] : (function () { throw new RuntimeError('Variable "notUsedThemes" does not exist.', 101, $this->source); })()))) {
            // line 102
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notUsedThemes"]) || array_key_exists("notUsedThemes", $context) ? $context["notUsedThemes"] : (function () { throw new RuntimeError('Variable "notUsedThemes" does not exist.', 102, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 103
                yield "              ";
                yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 103, "1105852869")->unwrap()->yield(CoreExtension::merge($context, ["themeName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["theme"], "get", ["name"], "method", false, false, false, 104), "themeDisplayName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 105
$context["theme"], "get", ["display_name"], "method", false, false, false, 105), "themeVersion" => CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["theme"], "get", ["version"], "method", false, false, false, 106), "themeAuthor" => CoreExtension::getAttribute($this->env, $this->source,                 // line 107
$context["theme"], "get", ["author.name"], "method", false, false, false, 107), "themeAuthorUrl" => CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["theme"], "get", ["author.url"], "method", false, false, false, 108), "themeFramework" => CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["theme"], "get", ["meta.compatibility.framework"], "method", false, false, false, 109), "isActive" => false]));
                // line 135
                yield "            ";
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
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "          </div>

          ";
            // line 138
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig");
            yield "
          ";
            // line 139
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig");
            yield "
        ";
        }
        // line 141
        yield "
        ";
        // line 142
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminThemesListAfter", ["current_theme_name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 142, $this->source); })()), "get", ["name"], "method", false, false, false, 142)]);
        yield "

        ";
        // line 144
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig");
        yield "
      </div>
    </div>

  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

  <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
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
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  277 => 154,  271 => 152,  258 => 151,  241 => 144,  236 => 142,  233 => 141,  228 => 139,  224 => 138,  220 => 136,  206 => 135,  204 => 109,  203 => 108,  202 => 107,  201 => 106,  200 => 105,  199 => 104,  197 => 103,  179 => 102,  177 => 101,  174 => 100,  172 => 87,  171 => 86,  170 => 85,  169 => 84,  168 => 83,  167 => 82,  166 => 81,  159 => 77,  152 => 73,  148 => 72,  140 => 67,  133 => 63,  127 => 60,  123 => 58,  117 => 56,  115 => 55,  111 => 54,  108 => 53,  102 => 51,  100 => 50,  97 => 49,  90 => 45,  86 => 43,  84 => 42,  80 => 40,  67 => 39,  56 => 25,  54 => 26,  41 => 25,);
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
{% set layoutHeaderToolbarBtn = {
  add: {
    href: path('admin_themes_import'),
    desc: 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'add_circle_outline'
  },
  export: {
    href: path('admin_themes_export_current'),
    desc: 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">

    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig') }}
    {% endif %}

    {{ form_start(shopLogosForm, {action: path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig') }}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig') }}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            themeName: theme.get('name'),
            themeDisplayName: theme.get('display_name'),
            themeVersion: currentlyUsedTheme.get('version'),
            themeAuthor: currentlyUsedTheme.get('author.name'),
            themeAuthorUrl: theme.get('author.url'),
            themeFramework: theme.get('meta.compatibility.framework'),
            isActive: true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                themeName: theme.get('name'),
                themeDisplayName: theme.get('display_name'),
                themeVersion: theme.get('version'),
                themeAuthor: theme.get('author.name'),
                themeAuthorUrl: theme.get('author.url'),
                themeFramework: theme.get('meta.compatibility.framework'),
                isActive: false
              } %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig') }}
          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig') }}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', {current_theme_name: currentlyUsedTheme.get('name')}) }}

        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig') }}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9083ed0bfc27bf2ce866d2977bfd7033___1052910395 extends Template
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
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 81
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 81);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 91
        yield "              <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 91, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 91, $this->source); })()), "get", ["preview"], "method", false, false, false, 91), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentlyUsedTheme"]) || array_key_exists("currentlyUsedTheme", $context) ? $context["currentlyUsedTheme"] : (function () { throw new RuntimeError('Variable "currentlyUsedTheme" does not exist.', 91, $this->source); })()), "get", ["display_name"], "method", false, false, false, 91), "html", null, true);
        yield "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 94
        yield "              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        yield "
              </button>
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
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  569 => 96,  565 => 94,  552 => 93,  535 => 91,  522 => 90,  499 => 81,  277 => 154,  271 => 152,  258 => 151,  241 => 144,  236 => 142,  233 => 141,  228 => 139,  224 => 138,  220 => 136,  206 => 135,  204 => 109,  203 => 108,  202 => 107,  201 => 106,  200 => 105,  199 => 104,  197 => 103,  179 => 102,  177 => 101,  174 => 100,  172 => 87,  171 => 86,  170 => 85,  169 => 84,  168 => 83,  167 => 82,  166 => 81,  159 => 77,  152 => 73,  148 => 72,  140 => 67,  133 => 63,  127 => 60,  123 => 58,  117 => 56,  115 => 55,  111 => 54,  108 => 53,  102 => 51,  100 => 50,  97 => 49,  90 => 45,  86 => 43,  84 => 42,  80 => 40,  67 => 39,  56 => 25,  54 => 26,  41 => 25,);
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
{% set layoutHeaderToolbarBtn = {
  add: {
    href: path('admin_themes_import'),
    desc: 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'add_circle_outline'
  },
  export: {
    href: path('admin_themes_export_current'),
    desc: 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">

    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig') }}
    {% endif %}

    {{ form_start(shopLogosForm, {action: path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig') }}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig') }}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            themeName: theme.get('name'),
            themeDisplayName: theme.get('display_name'),
            themeVersion: currentlyUsedTheme.get('version'),
            themeAuthor: currentlyUsedTheme.get('author.name'),
            themeAuthorUrl: theme.get('author.url'),
            themeFramework: theme.get('meta.compatibility.framework'),
            isActive: true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                themeName: theme.get('name'),
                themeDisplayName: theme.get('display_name'),
                themeVersion: theme.get('version'),
                themeAuthor: theme.get('author.name'),
                themeAuthorUrl: theme.get('author.url'),
                themeFramework: theme.get('meta.compatibility.framework'),
                isActive: false
              } %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig') }}
          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig') }}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', {current_theme_name: currentlyUsedTheme.get('name')}) }}

        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig') }}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_9083ed0bfc27bf2ce866d2977bfd7033___1105852869 extends Template
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
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 103
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 103);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 113
        yield "                  <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 113, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 113, $this->source); })()), "get", ["preview"], "method", false, false, false, 113), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 113, $this->source); })()), "get", ["display_name"], "method", false, false, false, 113), "html", null, true);
        yield "\">
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_container"));

        // line 116
        yield "                  <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        yield "\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 118
        yield (((!(isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 118, $this->source); })()))) ? ("disabled") : (""));
        yield ">
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        yield "</span>
                    </button>
                  </form>
                  <form action=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 125, $this->source); })()), "name", [], "any", false, false, false, 125)]), "html", null, true);
        yield "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        yield "\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
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
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
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
        return array (  884 => 126,  880 => 125,  874 => 122,  867 => 118,  863 => 117,  858 => 116,  845 => 115,  828 => 113,  815 => 112,  792 => 103,  569 => 96,  565 => 94,  552 => 93,  535 => 91,  522 => 90,  499 => 81,  277 => 154,  271 => 152,  258 => 151,  241 => 144,  236 => 142,  233 => 141,  228 => 139,  224 => 138,  220 => 136,  206 => 135,  204 => 109,  203 => 108,  202 => 107,  201 => 106,  200 => 105,  199 => 104,  197 => 103,  179 => 102,  177 => 101,  174 => 100,  172 => 87,  171 => 86,  170 => 85,  169 => 84,  168 => 83,  167 => 82,  166 => 81,  159 => 77,  152 => 73,  148 => 72,  140 => 67,  133 => 63,  127 => 60,  123 => 58,  117 => 56,  115 => 55,  111 => 54,  108 => 53,  102 => 51,  100 => 50,  97 => 49,  90 => 45,  86 => 43,  84 => 42,  80 => 40,  67 => 39,  56 => 25,  54 => 26,  41 => 25,);
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
{% set layoutHeaderToolbarBtn = {
  add: {
    href: path('admin_themes_import'),
    desc: 'Add new theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'add_circle_outline'
  },
  export: {
    href: path('admin_themes_export_current'),
    desc: 'Export current theme'|trans({}, 'Admin.Design.Feature'),
    icon: 'cloud_download'
  }
  } %}

{% block content %}
  <div id=\"themes-logo-page\">

    {% if not isSingleShopContext %}
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'You must select a shop from the above list if you wish to choose a theme.'|trans({}, 'Admin.Design.Help') }}
        </p>
      </div>
    {% endif %}

    {% if isInstalledRtlLanguage %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig') }}
    {% endif %}

    {{ form_start(shopLogosForm, {action: path('admin_themes_upload_logos')}) }}
    {% if not isInstalledRtlLanguage and isSingleShopContext and isMultiShopFeatureUsed %}
      {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig') }}
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\">
        {{ 'Logo'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig') }}
      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    {{ form_rest(shopLogosForm) }}
    {{ form_end(shopLogosForm) }}

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        {{ 'My theme for %name% shop'|trans({'%name%': shopName}, 'Admin.Design.Feature') }}
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
            themeName: theme.get('name'),
            themeDisplayName: theme.get('display_name'),
            themeVersion: currentlyUsedTheme.get('version'),
            themeAuthor: currentlyUsedTheme.get('author.name'),
            themeAuthorUrl: theme.get('author.url'),
            themeFramework: theme.get('meta.compatibility.framework'),
            isActive: true
          } %}
            {% block image %}
              <img src=\"{{ baseShopUrl }}{{ currentlyUsedTheme.get('preview') }}\" alt=\"{{ currentlyUsedTheme.get('display_name') }}\">
            {% endblock %}
            {% block button_container %}
              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                {{ 'My current theme'|trans({}, 'Admin.Design.Feature') }}
              </button>
            {% endblock %}
          {% endembed %}

          {% if notUsedThemes is not empty %}
            {% for theme in notUsedThemes %}
              {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig' with {
                themeName: theme.get('name'),
                themeDisplayName: theme.get('display_name'),
                themeVersion: theme.get('version'),
                themeAuthor: theme.get('author.name'),
                themeAuthorUrl: theme.get('author.url'),
                themeFramework: theme.get('meta.compatibility.framework'),
                isActive: false
              } %}
                {% block image %}
                  <img src=\"{{ baseShopUrl }}{{ theme.get('preview') }}\" alt=\"{{ theme.get('display_name') }}\">
                {% endblock %}
                {% block button_container %}
                  <form action=\"{{ path('admin_themes_enable', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('enable-theme') }}\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" {{ (not isSingleShopContext) ? 'disabled' : '' }}>
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>{{ 'Use this theme'|trans({}, 'Admin.Design.Feature') }}</span>
                    </button>
                  </form>
                  <form action=\"{{ path('admin_themes_delete', {themeName: theme.name}) }}\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-theme') }}\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                {% endblock %}
              {% endembed %}
            {% endfor %}
          </div>

          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig') }}
          {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig') }}
        {% endif %}

        {{ renderhook('displayAdminThemesListAfter', {current_theme_name: currentlyUsedTheme.get('name')}) }}

        {{ include('@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig') }}
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/themes.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig");
    }
}
