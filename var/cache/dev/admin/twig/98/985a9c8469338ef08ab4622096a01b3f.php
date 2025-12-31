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

/* @PrestaShop/Admin/Component/Layout/notifications_center.html.twig */
class __TwigTemplate_d25d859f99226bb4cef70335d1523d5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig"));

        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewOrders", [], "any", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 25)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewMessages", [], "any", false, false, false, 25))) {
            // line 26
            yield "  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            ";
            // line 35
            $context["active"] = "active";
            // line 36
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 36, $this->source); })()), "showNewOrders", [], "any", false, false, false, 36)) {
                // line 37
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 39, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 46
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification");
                yield "
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              ";
                // line 50
                $context["active"] = "";
                // line 51
                yield "            ";
            }
            // line 52
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 52, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 52)) {
                // line 53
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              ";
                // line 66
                $context["active"] = "";
                // line 67
                yield "            ";
            }
            // line 68
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 68, $this->source); })()), "showNewMessages", [], "any", false, false, false, 68)) {
                // line 69
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 71, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              ";
                // line 82
                $context["active"] = "";
                // line 83
                yield "            ";
            }
            // line 84
            yield "          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            ";
            // line 88
            $context["active"] = "active";
            // line 89
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "showNewOrders", [], "any", false, false, false, 89)) {
                // line 90
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 90, $this->source); })()), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 93, $this->source); })()), "noOrderTip", [], "any", false, false, false, 93);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 97
                $context["active"] = "";
                // line 98
                yield "            ";
            }
            // line 99
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 99, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 99)) {
                // line 100
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 100, $this->source); })()), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 103, $this->source); })()), "noCustomerTip", [], "any", false, false, false, 103), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 107
                $context["active"] = "";
                // line 108
                yield "            ";
            }
            // line 109
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 109, $this->source); })()), "showNewMessages", [], "any", false, false, false, 109)) {
                // line 110
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 110, $this->source); })()), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 113, $this->source); })()), "noCustomerMessageTip", [], "any", false, false, false, 113), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 117
                $context["active"] = "";
                // line 118
                yield "            ";
            }
            // line 119
            yield "          </div>
        </div>
      </div>
    </div>

    ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 124, $this->source); })()), "showNewOrders", [], "any", false, false, false, 124)) {
                // line 125
                yield "      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href=\"order_url\">
          <span class=\"notif__id\">#_id_order_</span>
          <span class=\"notif__customer\">
           - ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_customer_name_</strong> <span class=\"notif__iso\">(_iso_code_)</span>
          </span>
          <span class=\"notif__order-info\">
           <span class=\"notif__carrier\"> _carrier_ -</span> <strong class=\"notif__total\">_total_paid_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 137
            yield "
    ";
            // line 138
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 138, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 138)) {
                // line 139
                yield "      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href='customer_url'>
          <span class=\"notif__id\">#_id_customer_</span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__registered-date\">
            ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registered on:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_date_add_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 151
            yield "
    ";
            // line 152
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 152, $this->source); })()), "showNewMessages", [], "any", false, false, false, 152)) {
                // line 153
                yield "      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href='message_url'>
          <span class=\"notif__status _status_\">
            <i class=\"material-icons\">fiber_manual_record</i> _status_
          </span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__date\">
            <i class=\"material-icons\">access_time</i> _date_add_
          </span>
        </a>
      </script>
    ";
            }
            // line 167
            yield "  </div>
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
        return "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig";
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
        return array (  302 => 167,  286 => 153,  284 => 152,  281 => 151,  273 => 146,  264 => 139,  262 => 138,  259 => 137,  248 => 129,  242 => 125,  240 => 124,  233 => 119,  230 => 118,  228 => 117,  221 => 113,  217 => 112,  211 => 110,  208 => 109,  205 => 108,  203 => 107,  196 => 103,  192 => 102,  186 => 100,  183 => 99,  180 => 98,  178 => 97,  171 => 93,  167 => 92,  161 => 90,  158 => 89,  156 => 88,  150 => 84,  147 => 83,  145 => 82,  138 => 78,  128 => 71,  124 => 69,  121 => 68,  118 => 67,  116 => 66,  109 => 62,  99 => 55,  95 => 53,  92 => 52,  89 => 51,  87 => 50,  80 => 46,  70 => 39,  66 => 37,  63 => 36,  61 => 35,  50 => 26,  48 => 25,);
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
{% if this.showNewOrders or this.showNewCustomers or this.showNewMessages %}
  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            {% set active = 'active' %}
            {% if this.showNewOrders %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  {{ 'Orders[1][/1]'|trans({'[1]': '', '[/1]': ''}, 'Admin.Navigation.Notification')|raw }}
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              {% set active = '' %}
            {% endif %}
            {% if this.showNewCustomers %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  {{ 'Customers[1][/1]'|trans({'[1]': '', '[/1]': ''}, 'Admin.Navigation.Notification') }}
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              {% set active = '' %}
            {% endif %}
            {% if this.showNewMessages %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  {{ 'Messages[1][/1]'|trans({'[1]': '', '[/1]': ''}, 'Admin.Navigation.Notification') }}
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              {% set active = '' %}
            {% endif %}
          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            {% set active = 'active' %}
            {% if this.showNewOrders %}
              <div class=\"tab-pane {{ active }} empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  {{ 'No new order for now :('|trans({}, 'Admin.Navigation.Notification') }}<br>
                  {{ this.noOrderTip|raw }}
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              {% set active = '' %}
            {% endif %}
            {% if this.showNewCustomers %}
              <div class=\"tab-pane {{ active }} empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  {{ 'No new customer for now :('|trans({}, 'Admin.Navigation.Notification') }}<br>
                  {{ this.noCustomerTip }}
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              {% set active = '' %}
            {% endif %}
            {% if this.showNewMessages %}
              <div class=\"tab-pane {{ active }} empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  {{ 'No new message for now.'|trans({}, 'Admin.Navigation.Notification') }}<br>
                  {{ this.noCustomerMessageTip }}
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              {% set active = '' %}
            {% endif %}
          </div>
        </div>
      </div>
    </div>

    {% if this.showNewOrders %}
      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href=\"order_url\">
          <span class=\"notif__id\">#_id_order_</span>
          <span class=\"notif__customer\">
           - {{ 'From:'|trans({}, 'Admin.Navigation.Notification') }} <strong>_customer_name_</strong> <span class=\"notif__iso\">(_iso_code_)</span>
          </span>
          <span class=\"notif__order-info\">
           <span class=\"notif__carrier\"> _carrier_ -</span> <strong class=\"notif__total\">_total_paid_</strong>
          </span>
        </a>
      </script>
    {% endif %}

    {% if this.showNewCustomers %}
      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href='customer_url'>
          <span class=\"notif__id\">#_id_customer_</span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__registered-date\">
            {{ 'Registered on:'|trans({}, 'Admin.Navigation.Notification') }} <strong>_date_add_</strong>
          </span>
        </a>
      </script>
    {% endif %}

    {% if this.showNewMessages %}
      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href='message_url'>
          <span class=\"notif__status _status_\">
            <i class=\"material-icons\">fiber_manual_record</i> _status_
          </span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__date\">
            <i class=\"material-icons\">access_time</i> _date_add_
          </span>
        </a>
      </script>
    {% endif %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/notifications_center.html.twig");
    }
}
