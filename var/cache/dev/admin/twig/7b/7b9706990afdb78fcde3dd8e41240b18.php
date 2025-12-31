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

/* @PrestaShop/Admin/Layout/stylesheets.html.twig */
class __TwigTemplate_c8d2dd8339f4a0fd199edead3e476be0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/stylesheets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/stylesheets.html.twig"));

        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 25, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 25)) {
            // line 26
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme_rtl.css"), "html", null, true);
            yield "\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/rtl.css"), "html", null, true);
            yield "\" media=\"all\">
";
        } else {
            // line 29
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
            yield "\" media=\"all\">
";
        }
        // line 31
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/plugins/fancybox/jquery.fancybox.css", "front_js"), "html", null, true);
        yield "\" media=\"all\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/plugins/chosen/jquery.chosen.css", "front_js"), "html", null, true);
        yield "\" media=\"all\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/create_product_default_theme.css"), "html", null, true);
        yield "\" media=\"all\">
";
        // line 34
        if ((isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/light_theme.css"), "html", null, true);
            yield "\" media=\"all\">
";
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
        return "@PrestaShop/Admin/Layout/stylesheets.html.twig";
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
        return array (  81 => 35,  79 => 34,  75 => 33,  71 => 32,  66 => 31,  60 => 29,  55 => 27,  50 => 26,  48 => 25,);
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
{% if ps.isRtlLanguage %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme_rtl.css') }}\" media=\"all\">
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/rtl.css') }}\" media=\"all\">
{% else %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme.css') }}\" media=\"all\">
{% endif %}
<link rel=\"stylesheet\" href=\"{{ asset('jquery/plugins/fancybox/jquery.fancybox.css', 'front_js') }}\" media=\"all\">
<link rel=\"stylesheet\" href=\"{{ asset('jquery/plugins/chosen/jquery.chosen.css', 'front_js') }}\" media=\"all\">
<link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/create_product_default_theme.css') }}\" media=\"all\">
{% if lightDisplay %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/light_theme.css') }}\" media=\"all\">
{% endif %}
", "@PrestaShop/Admin/Layout/stylesheets.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Layout/stylesheets.html.twig");
    }
}
