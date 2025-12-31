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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_a2ba5cceca2fa88e040ea51fade1d634 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 25
        yield "
<div class=\"card-group\">
  ";
        // line 27
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 27, "616454503")->unwrap()->yield($context);
        // line 49
        yield "
  ";
        // line 50
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 50, "589857883")->unwrap()->yield($context);
        // line 123
        yield "
  ";
        // line 124
        yield from $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124, "825500909")->unwrap()->yield($context);
        // line 151
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  64 => 151,  62 => 124,  59 => 123,  57 => 50,  54 => 49,  52 => 27,  48 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {help: headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : ''}) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {help: headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : ''}) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_a2ba5cceca2fa88e040ea51fade1d634___616454503 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 27
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 28
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 28)->unwrap();
        // line 27
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 27);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 30
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 30, $this->source); })()), "header_logo_is_restricted_to_shop", [], "any", false, false, false, 30), 'widget');
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 33
        yield "      <p class=\"logo-card-description\">
        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.", ["%height%" => "40px", "%width%" => "200px"], "Admin.Design.Help"), "html", null, true);
        yield "
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerLogoPath"]) || array_key_exists("headerLogoPath", $context) ? $context["headerLogoPath"] : (function () { throw new RuntimeError('Variable "headerLogoPath" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "\"
          alt=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
          title=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
        >
      </div>

      ";
        // line 46
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 46, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 46, $this->source); })()), "header_logo", [], "any", false, false, false, 46)]);
        yield "
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  376 => 46,  369 => 42,  365 => 41,  361 => 40,  352 => 34,  349 => 33,  336 => 32,  320 => 30,  307 => 29,  296 => 27,  294 => 28,  281 => 27,  64 => 151,  62 => 124,  59 => 123,  57 => 50,  54 => 49,  52 => 27,  48 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {help: headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : ''}) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {help: headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : ''}) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_a2ba5cceca2fa88e040ea51fade1d634___589857883 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 50
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 51
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 51)->unwrap();
        // line 50
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 50);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 53
        yield "      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 55, $this->source); })()), "mail_logo_is_restricted_to_shop", [], "any", false, false, false, 55), 'widget');
        yield "
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
          </a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 69, $this->source); })()), "invoice_logo_is_restricted_to_shop", [], "any", false, false, false, 69), 'widget');
        yield "
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "
          </a>
        </li>
      </ul>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 85
        yield "      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on email headers. If undefined, the header logo will be used.", [], "Admin.Design.Help"), "html", null, true);
        yield "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mailLogoPath"]) || array_key_exists("mailLogoPath", $context) ? $context["mailLogoPath"] : (function () { throw new RuntimeError('Variable "mailLogoPath" does not exist.', 94, $this->source); })()), "html", null, true);
        yield "\"
              alt=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
              title=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 100
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 100, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 100, $this->source); })()), "mail_logo", [], "any", false, false, false, 100), [], ["help" => ((((isset($context["headerLogoPath"]) || array_key_exists("headerLogoPath", $context) ? $context["headerLogoPath"] : (function () { throw new RuntimeError('Variable "headerLogoPath" does not exist.', 100, $this->source); })()) == (isset($context["mailLogoPath"]) || array_key_exists("mailLogoPath", $context) ? $context["mailLogoPath"] : (function () { throw new RuntimeError('Variable "mailLogoPath" does not exist.', 100, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: if no email logo is available, the main logo will be used instead.", [], "Admin.Design.Notification")) : (""))]]);
        yield "
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will appear on invoice headers.", [], "Admin.Design.Help"), "html", null, true);
        yield "
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["invoiceLogoPath"]) || array_key_exists("invoiceLogoPath", $context) ? $context["invoiceLogoPath"] : (function () { throw new RuntimeError('Variable "invoiceLogoPath" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "\"
              alt=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
              title=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice logo", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            >
          </div>
          <div class=\"input-in-tab\">
            ";
        // line 117
        yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 117, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 117, $this->source); })()), "invoice_logo", [], "any", false, false, false, 117), [], ["help" => ((((isset($context["headerLogoPath"]) || array_key_exists("headerLogoPath", $context) ? $context["headerLogoPath"] : (function () { throw new RuntimeError('Variable "headerLogoPath" does not exist.', 117, $this->source); })()) == (isset($context["invoiceLogoPath"]) || array_key_exists("invoiceLogoPath", $context) ? $context["invoiceLogoPath"] : (function () { throw new RuntimeError('Variable "invoiceLogoPath" does not exist.', 117, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: if no invoice logo is available, the main logo will be used instead.", [], "Admin.Design.Help")) : (""))]]);
        yield "
          </div>
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  760 => 117,  753 => 113,  749 => 112,  745 => 111,  736 => 105,  728 => 100,  721 => 96,  717 => 95,  713 => 94,  704 => 88,  699 => 85,  686 => 84,  670 => 79,  657 => 69,  650 => 65,  637 => 55,  633 => 53,  620 => 52,  609 => 50,  607 => 51,  594 => 50,  376 => 46,  369 => 42,  365 => 41,  361 => 40,  352 => 34,  349 => 33,  336 => 32,  320 => 30,  307 => 29,  296 => 27,  294 => 28,  281 => 27,  64 => 151,  62 => 124,  59 => 123,  57 => 50,  54 => 49,  52 => 27,  48 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {help: headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : ''}) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {help: headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : ''}) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig */
class __TwigTemplate_a2ba5cceca2fa88e040ea51fade1d634___825500909 extends Template
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
            'card_title' => [$this, 'block_card_title'],
            'card_content' => [$this, 'block_card_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 124
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig"));

        // line 125
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 125)->unwrap();
        // line 124
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", 124);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_title"));

        // line 127
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 127, $this->source); })()), "favicon_is_restricted_to_shop", [], "any", false, false, false, 127), 'widget');
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon", [], "Admin.Design.Feature"), "html", null, true);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_content"));

        // line 130
        yield "      <p class=\"logo-card-description\">
        ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It is the small icon that appears in browser tabs, next to the title.", [], "Admin.Design.Help"), "html", null, true);
        yield "
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["faviconPath"]) || array_key_exists("faviconPath", $context) ? $context["faviconPath"] : (function () { throw new RuntimeError('Variable "faviconPath" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "\"
            alt=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
            title=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Favicon image", [], "Admin.Design.Feature"), "html", null, true);
        yield "\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          ";
        // line 145
        yield $macros["ps"]->getTemplateForMacro("macro_form_widget_with_error", $context, 145, $this->getSourceContext())->macro_form_widget_with_error(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 145, $this->source); })()), "favicon", [], "any", false, false, false, 145)]);
        yield "
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
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig";
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
        return array (  1078 => 145,  1069 => 139,  1065 => 138,  1061 => 137,  1052 => 131,  1049 => 130,  1036 => 129,  1020 => 127,  1007 => 126,  996 => 124,  994 => 125,  981 => 124,  760 => 117,  753 => 113,  749 => 112,  745 => 111,  736 => 105,  728 => 100,  721 => 96,  717 => 95,  713 => 94,  704 => 88,  699 => 85,  686 => 84,  670 => 79,  657 => 69,  650 => 65,  637 => 55,  633 => 53,  620 => 52,  609 => 50,  607 => 51,  594 => 50,  376 => 46,  369 => 42,  365 => 41,  361 => 40,  352 => 34,  349 => 33,  336 => 32,  320 => 30,  307 => 29,  296 => 27,  294 => 28,  281 => 27,  64 => 151,  62 => 124,  59 => 123,  57 => 50,  54 => 49,  52 => 27,  48 => 25,);
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

<div class=\"card-group\">
  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.header_logo_is_restricted_to_shop) }} {{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'Will appear on your main page. Recommended size for the default theme: height %height% and width %width%.'|trans({'%height%': '40px', '%width%': '200px'}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
        <img
          class=\"header-logo\"
          src=\"{{ headerLogoPath }}\"
          alt=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
          title=\"{{ 'Header logo'|trans({}, 'Admin.Design.Feature') }}\"
        >
      </div>

      {{ ps.form_group_row(shopLogosForm.header_logo) }}
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      <ul class=\"nav nav-pills\" role=\"tablist\">
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.mail_logo_is_restricted_to_shop) }}
          <a class=\"nav-link active show d-inline-block\"
             id=\"mail-tab\"
             data-toggle=\"tab\"
             href=\"#email-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
            {{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
        <li class=\"nav-item\">
          {{ form_widget(shopLogosForm.invoice_logo_is_restricted_to_shop) }}
          <a class=\"nav-link d-inline-block\"
             id=\"invoice-tab\"
             data-toggle=\"tab\"
             href=\"#invoice-configuration\"
             role=\"tab\"
             aria-controls=\"home\"
             aria-expanded=\"true\"
             aria-selected=\"true\"
          >
             {{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}
          </a>
        </li>
      </ul>
    {% endblock %}
    {% block card_content %}
      <div class=\"tab-content\">
        <div class=\"tab-pane active show\" id=\"email-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on email headers. If undefined, the header logo will be used.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"email-logo\"
              src=\"{{ mailLogoPath }}\"
              alt=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Mail logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.mail_logo, {}, {help: headerLogoPath == mailLogoPath ? 'Warning: if no email logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Notification') : ''}) }}
          </div>
        </div>
        <div class=\"tab-pane\" id=\"invoice-configuration\" role=\"tabpanel\" aria-labelledby=\"logo-tab\">
          <p class=\"logo-card-description description-in-tab\">
            {{ 'Will appear on invoice headers.'|trans({}, 'Admin.Design.Help') }}
          </p>

          <div class=\"text-center logo-image-container\">
            <img
              class=\"invoice-logo\"
              src=\"{{ invoiceLogoPath }}\"
              alt=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
              title=\"{{ 'Invoice logo'|trans({}, 'Admin.Design.Feature') }}\"
            >
          </div>
          <div class=\"input-in-tab\">
            {{ ps.form_group_row(shopLogosForm.invoice_logo, {}, {help: headerLogoPath == invoiceLogoPath ? 'Warning: if no invoice logo is available, the main logo will be used instead.'|trans({}, 'Admin.Design.Help') : ''}) }}
          </div>
        </div>
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/logo_card.html.twig' %}
    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% block card_title %}
      {{ form_widget(shopLogosForm.favicon_is_restricted_to_shop) }} {{ 'Favicon'|trans({}, 'Admin.Design.Feature') }}
    {% endblock %}
    {% block card_content %}
      <p class=\"logo-card-description\">
        {{ 'It is the small icon that appears in browser tabs, next to the title.'|trans({}, 'Admin.Design.Help') }}
      </p>

      <div class=\"text-center logo-image-container\">
          <img
            class=\"rounded-circle img-thumbnail favicon-logo\"
            src=\"{{ faviconPath }}\"
            alt=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
            title=\"{{ 'Favicon image'|trans({}, 'Admin.Design.Feature') }}\"
          >
      </div>

      <div class=\"form-group row\">
        <div class=\"col-sm\">
          {{ ps.form_widget_with_error(shopLogosForm.favicon) }}
        </div>
      </div>

    {% endblock %}
  {% endembed %}
</div>
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig");
    }
}
