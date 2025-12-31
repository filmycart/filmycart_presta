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

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_1746f6bc71775cf1604ac6105e579076 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        // line 25
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25), "urls", [], "any", false, false, false, 25)) >= 1)) {
            // line 26
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 26, $this->source); })()), "attributes", [], "any", false, false, false, 26), "urls", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                yield "    ";
                if (CoreExtension::inFilter($context["module_action"], ["disable", "uninstall", "reset"])) {
                    // line 28
                    yield "      <div id=\"module-modal-confirm-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                    yield "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 34
                    if (($context["module_action"] == "disable")) {
                        // line 35
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 37
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 38
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 40
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 41
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 43
                    yield "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
                    // line 50
                    if (($context["module_action"] == "disable")) {
                        // line 51
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to disable %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 51, $this->source); })()), "attributes", [], "any", false, false, false, 51), "displayName", [], "any", false, false, false, 51)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                ";
                    }
                    // line 56
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 57
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 57, $this->source); })()), "attributes", [], "any", false, false, false, 57), "displayName", [], "any", false, false, false, 57)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  ";
                        // line 59
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 59, $this->source); })()), "attributes", [], "any", false, false, false, 59), "confirmUninstall", [], "any", false, false, false, 59), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 65, $this->source); })()), "attributes", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                        yield "\">
                    ";
                        // line 66
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                  </label>
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 73
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 74
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You're about to reset %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "displayName", [], "any", false, false, false, 74)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 83
                    yield "              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    yield "\"/>
              ";
                    // line 87
                    if (($context["module_action"] == "disable")) {
                        // line 88
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 89, $this->source); })()), "attributes", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
                        yield "\">
                  ";
                        // line 90
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 93
                    yield "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 94
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 95, $this->source); })()), "attributes", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                        yield "\">
                  ";
                        // line 96
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 99
                    yield "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 100
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 101, $this->source); })()), "attributes", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
                        yield "\">
                  ";
                        // line 102
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 105
                    yield "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 110
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['module_action'], $context['module_url'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
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
        return array (  254 => 110,  247 => 105,  241 => 102,  237 => 101,  230 => 100,  227 => 99,  221 => 96,  217 => 95,  210 => 94,  207 => 93,  201 => 90,  197 => 89,  190 => 88,  188 => 87,  184 => 86,  179 => 83,  173 => 80,  167 => 77,  160 => 74,  157 => 73,  151 => 70,  144 => 66,  140 => 65,  134 => 62,  128 => 59,  122 => 57,  119 => 56,  114 => 54,  107 => 51,  105 => 50,  96 => 43,  90 => 41,  87 => 40,  81 => 38,  78 => 37,  72 => 35,  70 => 34,  58 => 28,  55 => 27,  50 => 26,  48 => 25,);
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
{% if module.attributes.urls|length >= 1 %}
  {% for module_action, module_url in module.attributes.urls %}
    {% if module_action in ['disable', 'uninstall', 'reset'] %}
      <div id=\"module-modal-confirm-{{ module.attributes.name }}-{{ module_action }}\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                {% if module_action == 'disable' %}
                  {{ 'Disable module?'|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ 'Uninstall module?'|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ 'Reset module?'|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                {% if module_action == 'disable' %}
                  {{ 'You are about to disable %moduleName% module.'|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  <br>
                  {{ 'Your current settings will be saved, but the module will no longer be active.'|trans({}, 'Admin.Modules.Notification') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ 'You are about to uninstall %moduleName% module.'|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  {{ module.attributes.confirmUninstall }}
                  <br>
                  <br>
                  {{ 'This will disable the module and delete all its files. For good.'|trans({}, 'Admin.Modules.Notification') }}
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"{{ module.attributes.name }}\">
                    {{ 'Optional: delete module folder after uninstall.'|trans({}, 'Admin.Modules.Feature') }}
                  </label>
                  <br>
                  <span class=\"italic red\">
                    {{ 'This action cannot be undone.'|trans({}, 'Admin.Modules.Notification') }}
                  </span>
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ \"You're about to reset %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  <br>
                  {{ 'This will restore the defaults settings.'|trans({}, 'Admin.Modules.Notification') }}
                  <br>
                  <span class=\"italic red\">
                    {{ 'This action cannot be undone.'|trans({}, 'Admin.Modules.Notification') }}
                  </span>
                {% endif %}
              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"/>
              {% if module_action == 'disable' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ 'Yes, disable it'|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'uninstall' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ 'Yes, uninstall it'|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'reset' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ 'Yes, reset it'|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %}
  {% endfor %}
{% endif %}
", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm.html.twig");
    }
}
