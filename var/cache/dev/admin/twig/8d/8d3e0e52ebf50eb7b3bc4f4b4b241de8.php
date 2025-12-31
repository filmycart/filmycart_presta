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

/* @PrestaShop/Admin/Module/Includes/modal_import.html.twig */
class __TwigTemplate_de0f4d5399a35279b80c43bf6fea69e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig"));

        // line 25
        yield "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a module", [], "Admin.Modules.Feature"), "html", null, true);
        yield "</h4>
        <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 34
        if (((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 34, $this->source); })()) <= Twig\Extension\CoreExtension::constant("PrestaShop\\PrestaShop\\Core\\Security\\Permission::LEVEL_UPDATE"))) {
            // line 35
            yield "          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "
            </p>
          </div>
        ";
        } else {
            // line 41
            yield "          <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
            <div class=\"module-import-start\">
              <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
              <p class=\"module-import-start-main-text\">
                ";
            // line 45
            yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop your module archive here or [1]select file[/1]", [], "Admin.Modules.Feature"), ["[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"]);
            yield "
              </p>
              <p class=\"module-import-start-footer-text\">
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", [], "Admin.Modules.Help"), "html", null, true);
            yield "
                ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your module will be installed right after that.", [], "Admin.Modules.Help"), "html", null, true);
            yield "
              </p>
            </div>
            <div
              class=\"module-import-processing\">
              <!-- Loader -->
              <div class=\"spinner\"></div>
              <p class=\"module-import-processing-main-text\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installing module...", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <p class=\"module-import-processing-footer-text\">
                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will close as soon as the module is installed. It won't be long!", [], "Admin.Modules.Notification"), "html", null, true);
            yield "
              </p>
            </div>
            <div class=\"module-import-success\">
              <i class=\"module-import-success-icon material-icons\">done</i><br/>
              <p class=\"module-import-success-msg\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module installed!", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <p class=\"module-import-success-details\"></p>
              <a class=\"module-import-success-configure btn btn-primary\" href=\"#\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            yield "</a>
            </div>
            <div class=\"module-import-failure\">
              <i class=\"module-import-failure-icon material-icons\">error</i><br/>
              <p class=\"module-import-failure-msg\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... Upload failed.", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What happened?", [], "Admin.Modules.Help"), "html", null, true);
            yield "</a>
              <div class=\"module-import-failure-details\"></div>
              <a class=\"module-import-failure-retry btn btn-secondary\" href=\"#\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
            yield "</a>
            </div>
            <div class=\"module-import-confirm\"></div>
          </form>
        ";
        }
        // line 77
        yield "      </div>
      <div class=\"modal-footer\"></div>
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
        return "@PrestaShop/Admin/Module/Includes/modal_import.html.twig";
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
        return array (  143 => 77,  135 => 72,  130 => 70,  126 => 69,  119 => 65,  114 => 63,  106 => 58,  101 => 56,  91 => 49,  87 => 48,  81 => 45,  75 => 41,  68 => 37,  64 => 35,  62 => 34,  55 => 30,  48 => 25,);
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
<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">{{ 'Upload a module'|trans({}, 'Admin.Modules.Feature') }}</h4>
        <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
      </div>
      <div class=\"modal-body\">
        {% if level <= constant('PrestaShop\\\\PrestaShop\\\\Core\\\\Security\\\\Permission::LEVEL_UPDATE') %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              {{ errorMessage }}
            </p>
          </div>
        {% else %}
          <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
            <div class=\"module-import-start\">
              <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
              <p class=\"module-import-start-main-text\">
                {{ 'Drop your module archive here or [1]select file[/1]'|trans({}, 'Admin.Modules.Feature')|replace({'[1]': '<a href=\"#\" class=\"module-import-start-select-manual\">', '[/1]': '</a>'})|raw }}
              </p>
              <p class=\"module-import-start-footer-text\">
                {{ 'Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).'|trans({}, 'Admin.Modules.Help') }}
                {{ 'Your module will be installed right after that.'|trans({}, 'Admin.Modules.Help') }}
              </p>
            </div>
            <div
              class=\"module-import-processing\">
              <!-- Loader -->
              <div class=\"spinner\"></div>
              <p class=\"module-import-processing-main-text\">{{ 'Installing module...'|trans({}, 'Admin.Modules.Notification') }}</p>
              <p class=\"module-import-processing-footer-text\">
                {{ \"It will close as soon as the module is installed. It won't be long!\"|trans({}, 'Admin.Modules.Notification') }}
              </p>
            </div>
            <div class=\"module-import-success\">
              <i class=\"module-import-success-icon material-icons\">done</i><br/>
              <p class=\"module-import-success-msg\">{{ 'Module installed!'|trans({}, 'Admin.Modules.Notification') }}</p>
              <p class=\"module-import-success-details\"></p>
              <a class=\"module-import-success-configure btn btn-primary\" href=\"#\">{{ 'Configure'|trans({}, 'Admin.Actions') }}</a>
            </div>
            <div class=\"module-import-failure\">
              <i class=\"module-import-failure-icon material-icons\">error</i><br/>
              <p class=\"module-import-failure-msg\">{{ 'Oops... Upload failed.'|trans({}, 'Admin.Modules.Notification') }}</p>
              <a href=\"#\" class=\"module-import-failure-details-action\">{{ 'What happened?'|trans({}, 'Admin.Modules.Help') }}</a>
              <div class=\"module-import-failure-details\"></div>
              <a class=\"module-import-failure-retry btn btn-secondary\" href=\"#\">{{ 'Try again'|trans({}, 'Admin.Actions') }}</a>
            </div>
            <div class=\"module-import-confirm\"></div>
          </form>
        {% endif %}
      </div>
      <div class=\"modal-footer\"></div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_import.html.twig");
    }
}
