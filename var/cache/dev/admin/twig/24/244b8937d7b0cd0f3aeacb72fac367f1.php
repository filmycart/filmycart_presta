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

/* @PrestaShop/Admin/Improve/Design/Theme/import.html.twig */
class __TwigTemplate_b91c389e2c6488af0912804d7ba8dc37 extends Template
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
            'import_theme_form_rest' => [$this, 'block_import_theme_form_rest'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig"));

        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 26, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
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

        // line 29
        yield "
  ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
  ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 31, $this->source); })()), 'errors');
        yield "
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from your computer", [], "Admin.Design.Feature"), "html", null, true);
        yield "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 41, $this->source); })()), "import_from_computer", [], "any", false, false, false, 41), 'row');
        yield "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"computer-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from the web", [], "Admin.Design.Feature"), "html", null, true);
        yield "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 63, $this->source); })()), "import_from_web", [], "any", false, false, false, 63), 'row');
        yield "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"web-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import from FTP", [], "Admin.Design.Feature"), "html", null, true);
        yield "
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 85, $this->source); })()), "import_from_ftp", [], "any", false, false, false, 85), 'row');
        yield "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"ftp-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 100
        yield from $this->unwrap()->yieldBlock('import_theme_form_rest', $context, $blocks);
        // line 103
        yield "
  ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 104, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_import_theme_form_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_theme_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_theme_form_rest"));

        // line 101
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["importThemeForm"]) || array_key_exists("importThemeForm", $context) ? $context["importThemeForm"] : (function () { throw new RuntimeError('Variable "importThemeForm" does not exist.', 101, $this->source); })()), 'rest');
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
        return "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig";
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
        return array (  218 => 101,  205 => 100,  191 => 104,  188 => 103,  186 => 100,  175 => 92,  165 => 85,  158 => 81,  144 => 70,  134 => 63,  127 => 59,  113 => 48,  103 => 41,  96 => 37,  87 => 31,  83 => 30,  80 => 29,  67 => 28,  56 => 25,  54 => 26,  41 => 25,);
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
{% form_theme importThemeForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block content %}

  {{ form_start(importThemeForm) }}
  {{ form_errors(importThemeForm) }}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          {{ 'Import from your computer'|trans({}, 'Admin.Design.Feature') }}
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            {{ form_row(importThemeForm.import_from_computer) }}
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"computer-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              {{ 'Save'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          {{ 'Import from the web'|trans({}, 'Admin.Design.Feature') }}
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            {{ form_row(importThemeForm.import_from_web) }}
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"web-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              {{ 'Save'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">file_copy</i>
          {{ 'Import from FTP'|trans({}, 'Admin.Design.Feature') }}
        </h3>
        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            {{ form_row(importThemeForm.import_from_ftp) }}
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" data-role=\"ftp-import-button\">
              <i class=\"material-icons\">cloud_upload</i>
              {{ 'Save'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  {% block import_theme_form_rest %}
    {{ form_rest(importThemeForm) }}
  {% endblock %}

  {{ form_end(importThemeForm) }}

{% endblock %}
", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/import.html.twig");
    }
}
