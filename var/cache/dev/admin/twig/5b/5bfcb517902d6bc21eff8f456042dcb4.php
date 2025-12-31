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

/* @PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig */
class __TwigTemplate_b7e9f85496b23854a17dc15043b1abef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig"));

        // line 25
        yield "<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "employee", [], "any", false, false, false, 34), "imageUrl", [], "any", false, false, false, 34), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "employee", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
        yield "\" />
            </span>
            <span class=\"employee_profile\">
              ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 37, $this->source); })()), "employee", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37)], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "employee", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
            <i class=\"material-icons\">edit</i>
            <span>
              ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["displayBackOfficeEmployeeMenu"]) || array_key_exists("displayBackOfficeEmployeeMenu", $context) ? $context["displayBackOfficeEmployeeMenu"] : (function () { throw new RuntimeError('Variable "displayBackOfficeEmployeeMenu" does not exist.', 51, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 52
            yield "          ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 52);
            // line 53
            yield "          <a class=\"dropdown-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 53), "html", null, true);
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 53, $this->source); })()), "link", [], "any", false, false, false, 53), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 53, $this->source); })()), "isExternalLink", [], "any", false, false, false, 53)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 54)) {
                // line 55
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 55, $this->source); })()), "icon", [], "any", false, false, false, 55), "html", null, true);
                yield "</i>
            ";
            }
            // line 57
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 57), "html", null, true);
            yield "
          </a>
          ";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 59)) {
                // line 60
                yield "            <p class=\"divider\"></p>
          ";
            }
            // line 62
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
          </span>
        </a>
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
        return "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig";
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
        return array (  164 => 67,  158 => 64,  155 => 63,  141 => 62,  137 => 60,  135 => 59,  129 => 57,  123 => 55,  121 => 54,  110 => 53,  107 => 52,  90 => 51,  80 => 44,  74 => 41,  67 => 37,  59 => 34,  48 => 25,);
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
<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"{{ this.employee.imageUrl }}\" alt=\"{{ this.employee.firstName }}\" />
            </span>
            <span class=\"employee_profile\">
              {{ 'Welcome back %name%'|trans({'%name%': this.employee.firstName}, 'Admin.Navigation.Header') }}
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"{{ path('admin_employees_edit', {employeeId: this.employee.id}) }}\">
            <i class=\"material-icons\">edit</i>
            <span>
              {{ 'Your profile'|trans({}, 'Admin.Navigation.Header') }}
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        {% for menuItem in displayBackOfficeEmployeeMenu %}
          {% set menuItemProperties = menuItem.getProperties %}
          <a class=\"dropdown-item {{ menuItem.getClass }}\" href=\"{{ menuItemProperties.link }}\" {% if menuItemProperties.isExternalLink %} target=\"_blank\"{% endif %} rel=\"noopener noreferrer nofollow\">
            {% if menuItemProperties.icon is defined %}
              <i class=\"material-icons\">{{ menuItemProperties.icon }}</i>
            {% endif %}
            {{ menuItem.getContent }}
          </a>
          {% if loop.last %}
            <p class=\"divider\"></p>
          {% endif %}
        {% endfor %}

        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"{{ path('admin_logout') }}\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            {{ 'Sign out'|trans({}, 'Admin.Navigation.Header') }}
          </span>
        </a>
      </div>
  </div>
</div>
", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/employee_dropdown.html.twig");
    }
}
