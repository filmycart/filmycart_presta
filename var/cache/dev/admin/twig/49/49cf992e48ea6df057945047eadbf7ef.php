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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_4cd3a33b342c3be03c29cc53fcb6eb98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        // line 25
        yield "
 <div class=\"btn-group module-actions\">
  ";
        // line 27
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "urls", [], "any", false, false, false, 27))) {
            // line 28
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_button.html.twig", ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-secondary", "url" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 32
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "urls", [], "any", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "url_active", [], "any", false, false, false, 32), [], "array", false, false, false, 32), "action" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 33
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "url_active", [], "any", false, false, false, 33), "label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 34
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "urls_labels", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "url_active", [], "any", false, false, false, 34), [], "array", false, false, false, 34)]);
            // line 35
            yield "
    ";
            // line 36
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 36, $this->source); })()), "attributes", [], "any", false, false, false, 36), "urls", [], "any", false, false, false, 36)) > 1)) {
                // line 37
                yield "        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                yield "</span>
        <div class=\"dropdown-menu\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 43, $this->source); })()), "attributes", [], "any", false, false, false, 43), "urls", [], "any", false, false, false, 43));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 44
                    yield "            ";
                    if (($context["module_action"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 44, $this->source); })()), "attributes", [], "any", false, false, false, 44), "url_active", [], "any", false, false, false, 44))) {
                        // line 45
                        yield "                <li>
                  ";
                        // line 46
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_button.html.twig", ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 47
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 47, $this->source); })()), "attributes", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "classes" => "dropdown-item", "url" =>                         // line 49
$context["module_url"], "action" =>                         // line 50
$context["module_action"], "label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 51
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 51, $this->source); })()), "attributes", [], "any", false, false, false, 51), "urls_labels", [], "any", false, false, false, 51), $context["module_action"], [], "array", false, false, false, 51)]);
                        // line 52
                        yield "
                </li>
            ";
                    }
                    // line 55
                    yield "          ";
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
                unset($context['_seq'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "        </div>
    ";
            }
            // line 58
            yield "  ";
        }
        // line 59
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
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
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
        return array (  132 => 59,  129 => 58,  125 => 56,  111 => 55,  106 => 52,  104 => 51,  103 => 50,  102 => 49,  101 => 47,  100 => 46,  97 => 45,  94 => 44,  77 => 43,  72 => 41,  66 => 37,  64 => 36,  61 => 35,  59 => 34,  58 => 33,  57 => 32,  56 => 29,  54 => 28,  52 => 27,  48 => 25,);
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

 <div class=\"btn-group module-actions\">
  {% if module.attributes.urls|length %}
    {{ include('@PrestaShop/Admin/Module/Includes/action_button.html.twig', {
        name: module.attributes.name,
        classes_form: 'btn-group form-action-button',
        classes: 'btn btn-primary-reverse btn-outline-secondary',
        url: module.attributes.urls[module.attributes.url_active],
        action: module.attributes.url_active,
        label: module.attributes.urls_labels[module.attributes.url_active]}
    ) }}
    {% if (module.attributes.urls|length > 1) %}
        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">{{ 'Toggle dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
        <div class=\"dropdown-menu\">
          {% for module_action, module_url in module.attributes.urls %}
            {% if module_action != module.attributes.url_active %}
                <li>
                  {{ include('@PrestaShop/Admin/Module/Includes/action_button.html.twig', {
                      name: module.attributes.name,
                      classes: 'dropdown-item',
                      url: module_url,
                      action: module_action,
                      label: module.attributes.urls_labels[module_action]}
                  ) }}
                </li>
            {% endif %}
          {% endfor %}
        </div>
    {% endif %}
  {% endif %}
</div>
", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
