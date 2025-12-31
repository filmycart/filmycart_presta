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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig */
class __TwigTemplate_d528801ee6adf52640c995f462de9387 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig"));

        // line 19
        yield "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a module", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        yield "</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 28
        if (((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 28, $this->source); })()) <= Twig\Extension\CoreExtension::constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 29
            yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 39
            yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        ";
            // line 45
            yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop your module archive here or [1]select file[/1]", [], "Modules.Mbo.Modulescatalog"), ["[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"]);
            yield "
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your module will be installed right after that.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installing module...", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <p class=module-import-processing-footer-text>
                                        ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will close as soon as the module is installed. It won't be long!", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module installed!", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            yield "</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... Upload failed.", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What happened?", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            yield "</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
            yield "</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                ";
        }
        // line 79
        yield "            </div>
            <div class=\"modal-footer\">
            </div>
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
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig";
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
        return array (  151 => 79,  140 => 71,  135 => 69,  131 => 68,  124 => 64,  119 => 62,  111 => 57,  106 => 55,  97 => 49,  93 => 48,  87 => 45,  79 => 39,  70 => 33,  64 => 29,  62 => 28,  55 => 24,  48 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">{{ 'Upload a module'|trans({}, 'Modules.Mbo.Modulescatalog') }}</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                {% if level <= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') %}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    {{ errorMessage }}
                                </p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        {{ 'Drop your module archive here or [1]select file[/1]'|trans({}, 'Modules.Mbo.Modulescatalog')|replace({'[1]' : '<a href=\"#\" class=\"module-import-start-select-manual\">', '[/1]' : '</a>'})|raw }}
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        {{ 'Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).'|trans({}, 'Modules.Mbo.Modulescatalog') }}
                                        {{ 'Your module will be installed right after that.'|trans({}, 'Modules.Mbo.Modulescatalog') }}
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>{{ 'Installing module...'|trans({}, 'Modules.Mbo.Modulescatalog') }}</p>
                                    <p class=module-import-processing-footer-text>
                                        {{ \"It will close as soon as the module is installed. It won't be long!\"|trans({}, 'Modules.Mbo.Modulescatalog') }}
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>{{ 'Module installed!'|trans({}, 'Modules.Mbo.Modulescatalog') }}</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>{{ 'Configure'|trans({}, 'Admin.Actions') }}</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>{{ 'Oops... Upload failed.'|trans({}, 'Modules.Mbo.Modulescatalog') }}</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">{{ 'What happened?'|trans({}, 'Modules.Mbo.Modulescatalog') }}</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>{{ 'Try again'|trans({}, 'Admin.Actions') }}</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"modal-footer\">
            </div>
        </div>
    </div>
</div>
", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "/var/www/html/filmycart_presta/modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig");
    }
}
