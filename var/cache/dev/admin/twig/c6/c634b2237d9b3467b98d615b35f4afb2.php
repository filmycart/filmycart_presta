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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig */
class __TwigTemplate_eeab543791fb781fb77ec9decbac6a61 extends Template
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
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 25);
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
        yield "  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay ";
        // line 29
        yield (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 29, $this->source); })())) ? ("active") : (""));
        yield "\"></div>

    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('image', $context, $blocks);
        // line 33
        yield "
    <div class=\"actions-container ";
        // line 34
        yield (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 34, $this->source); })())) ? ("active") : (""));
        yield "\">
      ";
        // line 35
        yield from $this->unwrap()->yieldBlock('button_container', $context, $blocks);
        // line 37
        yield "    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["themeDisplayName"]) || array_key_exists("themeDisplayName", $context) ? $context["themeDisplayName"] : (function () { throw new RuntimeError('Variable "themeDisplayName" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "
    </b>
    <span class=\"theme-version\">
      ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "Admin.Global"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["themeVersion"]) || array_key_exists("themeVersion", $context) ? $context["themeVersion"] : (function () { throw new RuntimeError('Variable "themeVersion" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "
    </span>
    <div class=\"theme-author\">
      <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["themeAuthorUrl"]) || array_key_exists("themeAuthorUrl", $context) ? $context["themeAuthorUrl"] : (function () { throw new RuntimeError('Variable "themeAuthorUrl" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Designed by %s", ["%s" => (isset($context["themeAuthor"]) || array_key_exists("themeAuthor", $context) ? $context["themeAuthor"] : (function () { throw new RuntimeError('Variable "themeAuthor" does not exist.', 48, $this->source); })())], "Admin.Design.Feature"), "html", null, true);
        yield "</a>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
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
        return array (  172 => 36,  159 => 35,  148 => 32,  135 => 31,  118 => 48,  110 => 45,  104 => 42,  97 => 37,  95 => 35,  91 => 34,  88 => 33,  86 => 31,  81 => 29,  78 => 28,  65 => 27,  42 => 25,);
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
{% extends '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig' %}

{% block content %}
  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay {{ isActive ? 'active' : '' }}\"></div>

    {% block image %}
    {% endblock %}

    <div class=\"actions-container {{ isActive ? 'active' : '' }}\">
      {% block button_container %}
      {% endblock %}
    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      {{ themeDisplayName }}
    </b>
    <span class=\"theme-version\">
      {{ 'Version'|trans({}, 'Admin.Global') }} {{ themeVersion }}
    </span>
    <div class=\"theme-author\">
      <a href=\"{{ themeAuthorUrl }}\" target=\"_blank\">{{ 'Designed by %s'|trans({'%s': themeAuthor}, 'Admin.Design.Feature') }}</a>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig");
    }
}
