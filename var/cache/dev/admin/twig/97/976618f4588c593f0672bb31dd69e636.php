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

/* @PrestaShop/Admin/Component/Layout/head_tag.html.twig */
class __TwigTemplate_d2b23543132c4ac69ab65a9b14f3dee7 extends Template
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
            'headJavascripts' => [$this, 'block_headJavascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/head_tag.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/head_tag.html.twig"));

        // line 25
        yield "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        yield "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "imgDir", [], "any", false, false, false, 31), "html", null, true);
        yield "app_icon.png\" />

<title>";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "metaTitle", [], "any", false, false, false, 33)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "metaTitle", [], "any", false, false, false, 33), "html", null, true);
            yield " • ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "shopName", [], "any", false, false, false, 33), "html", null, true);
        yield "</title>

<script type=\"text/javascript\">
  var help_class_name = '";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 36, $this->source); })()), "controllerName", [], "any", false, false, false, 36), "html", null, true);
        yield "';
  var iso_user = '";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 37, $this->source); })()), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        yield "';
  var lang_is_rtl = '";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 38, $this->source); })()), "langIsRtl", [], "any", false, false, false, 38)), "html", null, true);
        yield "';
  var full_language_code = '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "fullLanguageCode", [], "any", false, false, false, 39), "html", null, true);
        yield "';
  var full_cldr_language_code = '";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "fullCldrLanguageCode", [], "any", false, false, false, 40), "html", null, true);
        yield "';
  var country_iso_code = '";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "countryIsoCode", [], "any", false, false, false, 41), "html", null, true);
        yield "';
  var _PS_VERSION_ = '";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "psVersion", [], "any", false, false, false, 42), "html", null, true);
        yield "';
  var roundMode = ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "roundMode", [], "any", false, false, false, 43)), "html", null, true);
        yield ";
  var youEditFieldFor = '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "editForLabel", [], "any", false, false, false, 44), "html", null, true);
        yield "';
  var new_order_msg = '";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new order has been placed on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var order_number_msg = '";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order number:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ';
  var total_msg = '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total:", [], "Admin.Global"), "html", null, true);
        yield " ';
  var from_msg = '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Global"), "html", null, true);
        yield " ';
  var see_order_msg = '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "';
  var new_customer_msg = '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new customer registered on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var customer_name_msg = '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registered on:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ';
  var new_msg = '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new message was posted on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var see_msg = '";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read this message", [], "Admin.Navigation.Header"), "html", null, true);
        yield "';
  var token = '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 54, $this->source); })()), "legacyToken", [], "any", false, false, false, 54), "html", null, true);
        yield "';
  var currentIndex = '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 55, $this->source); })()), "currentIndex", [], "any", false, false, false, 55), "html", null, true);
        yield "';
  var employee_token = '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 56, $this->source); })()), "employeeToken", [], "any", false, false, false, 56), "html", null, true);
        yield "';
  var choose_language_translate = '";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose language:", [], "Admin.Actions"), "html", null, true);
        yield "';
  var default_language = '";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 58, $this->source); })()), "defaultLanguage", [], "any", false, false, false, 58)), "html", null, true);
        yield "';
  var admin_modules_link = '";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage");
        yield "';
  var admin_notification_get_link = '";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications");
        yield "';
  var admin_notification_push_link = adminNotificationPushLink = '";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications_ack");
        yield "';
  var update_success_msg = '";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update successful", [], "Admin.Notifications.Success"), "html", null, true);
        yield "';
  var search_product_msg = '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "';
</script>

";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdminNewTheme/public/preload.html.twig");
        yield "

";
        // line 73
        $context["displayBackOfficeHeaderRendered"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeHeader");
        // line 74
        yield "
";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 75, $this->source); })()), "cssFiles", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 76
            yield "  <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_uri"], "html", null, true);
            yield "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_media"], "html", null, true);
            yield "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['css_uri'], $context['css_media'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "
";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "jsDef", [], "any", false, false, false, 79)) {
            // line 80
            yield "  <script type=\"text/javascript\">
    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 81, $this->source); })()), "jsDef", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 82
                yield "    var ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield " = ";
                yield json_encode($context["def"]);
                yield ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['def'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "  </script>
";
        }
        // line 86
        yield "
";
        // line 87
        yield from $this->unwrap()->yieldBlock('headJavascripts', $context, $blocks);
        // line 88
        yield "
";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "jsFiles", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 90
            yield "  <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_uri"], "html", null, true);
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_uri'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
";
        // line 94
        yield (isset($context["displayBackOfficeHeaderRendered"]) || array_key_exists("displayBackOfficeHeaderRendered", $context) ? $context["displayBackOfficeHeaderRendered"] : (function () { throw new RuntimeError('Variable "displayBackOfficeHeaderRendered" does not exist.', 94, $this->source); })());
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headJavascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headJavascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headJavascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/head_tag.html.twig";
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
        return array (  278 => 87,  265 => 94,  262 => 92,  253 => 90,  249 => 89,  246 => 88,  244 => 87,  241 => 86,  237 => 84,  226 => 82,  222 => 81,  219 => 80,  217 => 79,  214 => 78,  203 => 76,  199 => 75,  196 => 74,  194 => 73,  189 => 66,  183 => 63,  179 => 62,  175 => 61,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  123 => 48,  119 => 47,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  87 => 39,  83 => 38,  79 => 37,  75 => 36,  65 => 33,  60 => 31,  56 => 30,  49 => 25,);
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
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ this.imgDir }}favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"{{ this.imgDir }}app_icon.png\" />

<title>{% if this.metaTitle %}{{ this.metaTitle }} • {% endif %}{{ this.shopName }}</title>

<script type=\"text/javascript\">
  var help_class_name = '{{ this.controllerName }}';
  var iso_user = '{{ this.isoUser }}';
  var lang_is_rtl = '{{ this.langIsRtl|intCast }}';
  var full_language_code = '{{ this.fullLanguageCode }}';
  var full_cldr_language_code = '{{ this.fullCldrLanguageCode }}';
  var country_iso_code = '{{ this.countryIsoCode }}';
  var _PS_VERSION_ = '{{ this.psVersion }}';
  var roundMode = {{ this.roundMode|intCast }};
  var youEditFieldFor = '{{ this.editForLabel }}';
  var new_order_msg = '{{ 'A new order has been placed on your store.'|trans({}, 'Admin.Navigation.Header') }}';
  var order_number_msg = '{{ 'Order number:'|trans({}, 'Admin.Navigation.Header') }} ';
  var total_msg = '{{ 'Total:'|trans({}, 'Admin.Global') }} ';
  var from_msg = '{{ 'From:'|trans({}, 'Admin.Global') }} ';
  var see_order_msg = '{{ 'View this order'|trans({}, 'Admin.Orderscustomers.Feature') }}';
  var new_customer_msg = '{{ 'A new customer registered on your store.'|trans({}, 'Admin.Navigation.Header') }}';
  var customer_name_msg = '{{ 'Registered on:'|trans({}, 'Admin.Navigation.Header') }} ';
  var new_msg = '{{ 'A new message was posted on your store.'|trans({}, 'Admin.Navigation.Header') }}';
  var see_msg = '{{ 'Read this message'|trans({}, 'Admin.Navigation.Header') }}';
  var token = '{{ this.legacyToken }}';
  var currentIndex = '{{ this.currentIndex }}';
  var employee_token = '{{ this.employeeToken }}';
  var choose_language_translate = '{{ 'Choose language:'|trans({}, 'Admin.Actions') }}';
  var default_language = '{{ this.defaultLanguage|intCast }}';
  var admin_modules_link = '{{ path('admin_module_manage') }}';
  var admin_notification_get_link = '{{ path('admin_common_notifications') }}';
  var admin_notification_push_link = adminNotificationPushLink = '{{ path('admin_common_notifications_ack') }}';
  var update_success_msg = '{{ 'Update successful'|trans({}, 'Admin.Notifications.Success') }}';
  var search_product_msg = '{{ 'Search for a product'|trans({}, 'Admin.Orderscustomers.Feature') }}';
</script>

{{ include('@AdminNewTheme/public/preload.html.twig') }}

{# Many modules register on this hook to add their assets, they use addCss and/or addJs methods to do that
(even if this is supposed to be a display hook). These methods must be executed before we loop through the
list of assets which is why it must be executed before the loop, its content is temporarily stored to be
then correctly appended in the output (after the loops). This little hack is necessary to avoid a breaking change
and keep backward compatibility for this use case even if it's not very clean. #}
{% set displayBackOfficeHeaderRendered = renderhook('displayBackOfficeHeader') %}

{% for css_uri, css_media in this.cssFiles %}
  <link href=\"{{ css_uri }}\" rel=\"stylesheet\" type=\"text/css\" media=\"{{ css_media }}\"/>
{% endfor %}

{% if this.jsDef %}
  <script type=\"text/javascript\">
    {% for k, def in this.jsDef %}
    var {{ k }} = {{ def|json_encode|raw }};
    {% endfor %}
  </script>
{% endif %}

{% block headJavascripts %}{% endblock %}

{% for js_uri in this.jsFiles %}
  <script type=\"text/javascript\" src=\"{{ js_uri }}\"></script>
{% endfor %}

{# After some CSS/JS files inclusion (that can be added in 'displayBackOfficeHeader' hook), we need to display the html compiled that are returned for this hook. #}
{{ displayBackOfficeHeaderRendered|raw }}
", "@PrestaShop/Admin/Component/Layout/head_tag.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/head_tag.html.twig");
    }
}
