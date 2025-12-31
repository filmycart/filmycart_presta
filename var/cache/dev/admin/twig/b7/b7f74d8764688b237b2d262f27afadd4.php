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

/* @PrestaShop/Admin/Component/Layout/toolbar.html.twig */
class __TwigTemplate_39671ba47a3ae1feed1dc9eaf60798bf extends Template
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
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
            'pageSubTitle' => [$this, 'block_pageSubTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig"));

        // line 25
        yield "<div class=\"header-toolbar d-print-none\">
  ";
        // line 26
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreHeader");
        yield "
  <div class=\"container-fluid\">

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 50
        yield "
    ";
        // line 51
        $context["persistent_help_btn"] = ((array_key_exists("help_link", $context) &&  !((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 51, $this->source); })()) === false)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 51, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 51)));
        // line 52
        yield "    <div class=\"title-row ";
        if ((isset($context["persistent_help_btn"]) || array_key_exists("persistent_help_btn", $context) ? $context["persistent_help_btn"] : (function () { throw new RuntimeError('Variable "persistent_help_btn" does not exist.', 52, $this->source); })())) {
            yield "flex-nowrap flex-md-wrap";
        }
        yield "\">
      ";
        // line 53
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 58
        yield "      ";
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 138
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 145
        yield "    </div>
  </div>

  ";
        // line 148
        if ((array_key_exists("headerTabContent", $context) && (isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context) ? $context["headerTabContent"] : (function () { throw new RuntimeError('Variable "headerTabContent" does not exist.', 148, $this->source); })()))) {
            // line 149
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context) ? $context["headerTabContent"] : (function () { throw new RuntimeError('Variable "headerTabContent" does not exist.', 150, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tabContent"]) {
                // line 151
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tabContent"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tabContent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "    </div>
  ";
        }
        // line 155
        yield "
  ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 156, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 156) >= 3)) {
            // line 157
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 159, $this->source); })()), "navigationTabs", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 160
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 160), "active", [], "any", false, false, false, 160)) {
                    // line 161
                    yield "            <li class=\"nav-item\">
              <a href=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 162), "html", null, true);
                    yield "\" id=\"subtab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 162), "class_name", [], "any", false, false, false, 162), "html", null, true);
                    yield "\"
                 class=\"nav-link tab ";
                    // line 163
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 163), "current", [], "any", false, false, false, 163)) {
                        yield "active current";
                    }
                    yield "\"
                 data-submenu=\"";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 164), "id_tab", [], "any", false, false, false, 164), "html", null, true);
                    yield "\">
                ";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 165), "html", null, true);
                    yield "
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          ";
                }
                // line 172
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "      </ul>
    </div>
  ";
        }
        // line 176
        yield "
  ";
        // line 177
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", true, true, false, 177) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 177, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 177)))) {
            // line 178
            yield "    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          ";
            // line 185
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
            yield "

          ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 187, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 187));
            foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
                // line 188
                yield "            ";
                if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                    // line 189
                    yield "              <a
                class=\"btn btn-floating-item ";
                    // line 190
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", true, true, false, 190) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 190))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 190));
                    }
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 190) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 190))) {
                        yield " _blank";
                    }
                    yield " pointer\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 190)) {
                        // line 191
                        yield "                id=\"page-header-desc-floating-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 191, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
                        yield "-";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 191)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 191));
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        }
                        yield "\"
              href=\"";
                        // line 192
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 192));
                        yield "\"";
                    }
                    // line 193
                    yield "                title=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 193)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 193), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 193));
                    }
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 193) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 193))) {
                        // line 194
                        yield "              onclick=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 194), "html", null, true);
                        yield "\"";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 194) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 194))) {
                        // line 195
                        yield "                data-target=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 195), "html", null, true);
                        yield "\"
                data-toggle=\"modal\"";
                    }
                    // line 196
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 196)) {
                        // line 197
                        yield "                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"";
                    }
                    // line 199
                    yield "              >
                ";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 200));
                    yield "
                ";
                    // line 201
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 201) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 201)))) {
                        yield "<i class=\"material-icons\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 201), "html", null, true);
                        yield "</i>";
                    }
                    // line 202
                    yield "              </a>
            ";
                }
                // line 204
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "
          ";
            // line 206
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 206, $this->source); })()), "helpLink", [], "any", false, false, false, 206))) {
                // line 207
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 207, $this->source); })()), "sidebarEnabled", [], "any", false, false, false, 207)) {
                    // line 208
                    yield "              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 212, $this->source); })()), "helpLink", [], "any", false, false, false, 212));
                    yield "\"
              >
                ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                } else {
                    // line 217
                    yield "              <a class=\"btn btn-floating-item btn-help\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 217, $this->source); })()), "helpLink", [], "any", false, false, false, 217));
                    yield "\"
                 title=\"";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\">
                ";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                }
                // line 222
                yield "          ";
            }
            // line 223
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 227
        yield "  ";
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        // line 30
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "container", [], "any", true, true, false, 30) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "tab", [], "any", true, true, false, 30))) {
            // line 31
            yield "        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 33), "container", [], "any", true, true, false, 33) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) != ""))) {
                // line 34
                yield "              <li class=\"breadcrumb-item\">
                ";
                // line 35
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "icon", [], "any", false, false, false, 35))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "icon", [], "any", false, false, false, 35), "html", null, true);
                    yield "</i>";
                }
                // line 36
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 36, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36));
                yield "
              </li>
            ";
            }
            // line 39
            yield "
            ";
            // line 40
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 40), "container", [], "any", true, true, false, 40) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 40), "tab", [], "any", true, true, false, 40)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40) != "")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "href", [], "any", false, false, false, 40) != ""))) {
                // line 41
                yield "              <li class=\"breadcrumb-item active\">
                ";
                // line 42
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "icon", [], "any", false, false, false, 42))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "icon", [], "any", false, false, false, 42), "html", null, true);
                    yield "</i>";
                }
                // line 43
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "href", [], "any", false, false, false, 43));
                yield "\" aria-current=\"page\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43));
                yield "</a>
              </li>
            ";
            }
            // line 46
            yield "          </ol>
        </nav>
      ";
        }
        // line 49
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 54
        yield "          <h1 class=\"title\">
            ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55));
        yield "
          </h1>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        // line 59
        yield "        <div class=\"toolbar-icons";
        if ((isset($context["persistent_help_btn"]) || array_key_exists("persistent_help_btn", $context) ? $context["persistent_help_btn"] : (function () { throw new RuntimeError('Variable "persistent_help_btn" does not exist.', 59, $this->source); })())) {
            yield " toolbar-icons--persistent";
        }
        yield "\">
          <div class=\"wrapper\">
            ";
        // line 61
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 62, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 63
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 64
                yield "                ";
                // line 65
                yield "                <a
                  id=\"page-header-desc-";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 66)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 66));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                  class=\"btn ";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 67))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 67));
                } else {
                    yield "btn-primary";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 67))) {
                    yield " _blank";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", false, false, false, 67))) {
                    yield " disabled auto-pointer-events";
                }
                yield " pointer\"
                  ";
                // line 68
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 68)) {
                    // line 69
                    yield "                    href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 69));
                    yield "\"
                  ";
                }
                // line 71
                yield "                  title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 71)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 71), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 71));
                }
                yield "\"
                  ";
                // line 72
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 72) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 72))) {
                    yield "onclick=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 72), "html", null, true);
                    yield "\" ";
                }
                // line 73
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 73) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 73))) {
                    // line 74
                    yield "                    data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 74), "html", null, true);
                    yield "\"
                    data-toggle=\"modal\"
                  ";
                }
                // line 77
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 77)) {
                    // line 78
                    yield "                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  ";
                }
                // line 81
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", true, true, false, 81) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 81))) {
                    // line 82
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                        // line 83
                        yield "                      data-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html", null, true);
                        yield "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    yield "                  ";
                }
                // line 86
                yield "                >
                  ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 87) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 87)))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 87), "html", null, true);
                    yield "</i>";
                }
                // line 88
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 88));
                yield "
                </a>
              ";
            }
            // line 91
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 92), "modules-list", [], "array", true, true, false, 92)) {
            // line 93
            yield "              ";
            // line 94
            yield "              <a
                class=\"btn btn-outline-secondary ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 95), "modules-list", [], "array", false, true, false, 95), "target", [], "any", true, true, false, 95) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 95, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 95), "modules-list", [], "array", false, false, false, 95), "target", [], "any", false, false, false, 95))) {
                yield " _blank";
            }
            yield "\"
                id=\"page-header-desc-";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 96, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
            yield "-";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 96), "modules-list", [], "array", false, true, false, 96), "imgclass", [], "any", true, true, false, 96)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 96, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 96), "modules-list", [], "array", false, false, false, 96), "imgclass", [], "any", false, false, false, 96), "html", null, true);
            } else {
                yield "modules-list";
            }
            yield "\"
                ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 97), "modules-list", [], "array", false, true, false, 97), "href", [], "any", true, true, false, 97)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 97, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 97), "modules-list", [], "array", false, false, false, 97), "href", [], "any", false, false, false, 97), "html", null, true);
                yield "\"";
            }
            // line 98
            yield "                title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 98, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 98), "modules-list", [], "array", false, false, false, 98), "desc", [], "any", false, false, false, 98), "html", null, true);
            yield "\"
                ";
            // line 99
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 99), "modules-list", [], "array", false, true, false, 99), "js", [], "any", true, true, false, 99) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 99, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 99), "modules-list", [], "array", false, false, false, 99), "js", [], "any", false, false, false, 99))) {
                yield "onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 99, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 99), "modules-list", [], "array", false, false, false, 99), "js", [], "any", false, false, false, 99), "html", null, true);
                yield "\"";
            }
            // line 100
            yield "              >
                ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 101, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 101), "modules-list", [], "array", false, false, false, 101), "desc", [], "any", false, false, false, 101), "html", null, true);
            yield "
              </a>
            ";
        }
        // line 104
        yield "
            ";
        // line 105
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 105, $this->source); })()), "helpLink", [], "any", false, false, false, 105))) {
            // line 106
            yield "              ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 106, $this->source); })()), "sidebarEnabled", [], "any", false, false, false, 106)) {
                // line 107
                yield "                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 111, $this->source); })()), "helpLink", [], "any", false, false, false, 111));
                yield "\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 120, $this->source); })()), "helpLink", [], "any", false, false, false, 120));
                yield "\"
                   id=\"product_form_open_help\"
                >
                  ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            } else {
                // line 126
                yield "                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 126, $this->source); })()), "helpLink", [], "any", false, false, false, 126));
                yield "\"
                   title=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 130, $this->source); })()), "helpLink", [], "any", false, false, false, 130));
                yield "\"
                   title=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            }
            // line 134
            yield "            ";
        }
        // line 135
        yield "          </div>
        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        // line 139
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 139, $this->source); })()), "subTitle", [], "any", false, false, false, 139))) {
            // line 140
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 141, $this->source); })()), "subTitle", [], "any", false, false, false, 141), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 144
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/toolbar.html.twig";
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
        return array (  748 => 144,  742 => 141,  739 => 140,  736 => 139,  723 => 138,  710 => 135,  707 => 134,  699 => 131,  695 => 130,  689 => 127,  684 => 126,  678 => 123,  672 => 120,  666 => 117,  657 => 111,  651 => 108,  648 => 107,  645 => 106,  643 => 105,  640 => 104,  634 => 101,  631 => 100,  625 => 99,  620 => 98,  614 => 97,  604 => 96,  598 => 95,  595 => 94,  593 => 93,  590 => 92,  584 => 91,  577 => 88,  571 => 87,  568 => 86,  565 => 85,  554 => 83,  549 => 82,  546 => 81,  541 => 78,  538 => 77,  531 => 74,  528 => 73,  522 => 72,  513 => 71,  507 => 69,  505 => 68,  491 => 67,  481 => 66,  478 => 65,  476 => 64,  473 => 63,  469 => 62,  465 => 61,  457 => 59,  444 => 58,  430 => 55,  427 => 54,  414 => 53,  403 => 49,  398 => 46,  389 => 43,  383 => 42,  380 => 41,  378 => 40,  375 => 39,  368 => 36,  362 => 35,  359 => 34,  357 => 33,  353 => 31,  350 => 30,  337 => 29,  322 => 227,  316 => 223,  313 => 222,  307 => 219,  303 => 218,  298 => 217,  292 => 214,  287 => 212,  281 => 209,  278 => 208,  275 => 207,  273 => 206,  270 => 205,  264 => 204,  260 => 202,  254 => 201,  250 => 200,  247 => 199,  243 => 197,  241 => 196,  235 => 195,  229 => 194,  220 => 193,  216 => 192,  205 => 191,  195 => 190,  192 => 189,  189 => 188,  185 => 187,  180 => 185,  171 => 178,  169 => 177,  166 => 176,  161 => 173,  155 => 172,  145 => 165,  141 => 164,  135 => 163,  129 => 162,  126 => 161,  123 => 160,  119 => 159,  115 => 157,  113 => 156,  110 => 155,  106 => 153,  97 => 151,  93 => 150,  90 => 149,  88 => 148,  83 => 145,  80 => 138,  77 => 58,  75 => 53,  68 => 52,  66 => 51,  63 => 50,  61 => 29,  55 => 26,  52 => 25,);
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
<div class=\"header-toolbar d-print-none\">
  {{ component('MultistoreHeader') }}
  <div class=\"container-fluid\">

    {% block pageBreadcrumb %}
      {% if this.breadcrumbs.container is defined or this.breadcrumbs.tab is defined %}
        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            {% if this.breadcrumbs.container is defined and this.breadcrumbs.container.name != '' %}
              <li class=\"breadcrumb-item\">
                {% if this.breadcrumbs.container.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.container.icon }}</i>{% endif %}
                {{ this.breadcrumbs.container.name|escape }}
              </li>
            {% endif %}

            {% if this.breadcrumbs.container is defined and this.breadcrumbs.tab is defined and this.breadcrumbs.tab.name != '' and this.breadcrumbs.container.name != this.breadcrumbs.tab.name and this.breadcrumbs.tab.href != '' %}
              <li class=\"breadcrumb-item active\">
                {% if this.breadcrumbs.tab.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.tab.icon }}</i>{% endif %}
                <a href=\"{{ this.breadcrumbs.tab.href|escape }}\" aria-current=\"page\">{{ this.breadcrumbs.tab.name|escape }}</a>
              </li>
            {% endif %}
          </ol>
        </nav>
      {% endif %}
    {% endblock %}

    {% set persistent_help_btn = help_link is defined and help_link is not same as (false) and this.layoutHeaderToolbarBtn is empty %}
    <div class=\"title-row {% if persistent_help_btn %}flex-nowrap flex-md-wrap{% endif %}\">
      {% block pageTitle %}
          <h1 class=\"title\">
            {{ this.title|e }}
          </h1>
      {% endblock %}
      {% block toolbarBox %}
        <div class=\"toolbar-icons{% if persistent_help_btn %} toolbar-icons--persistent{% endif %}\">
          <div class=\"wrapper\">
            {{ renderhook('displayDashboardToolbarTopMenu') }}
            {% for k, btn in this.layoutHeaderToolbarBtn %}
              {% if k != 'back' and k != 'modules-list' %}
                {# TODO: REFACTOR ALL THIS THINGS #}
                <a
                  id=\"page-header-desc-{{ table|default('configuration') }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
                  class=\"btn {% if btn.class is defined and btn.class %}{{ btn.class|escape }}{% else %}btn-primary{% endif %}{% if btn.target is defined and btn.target %} _blank{% endif %}{% if btn.disabled is defined and btn.disabled %} disabled auto-pointer-events{% endif %} pointer\"
                  {% if btn.href is defined %}
                    href=\"{{ btn.href|escape }}\"
                  {% endif %}
                  title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"
                  {% if btn.js is defined and btn.js %}onclick=\"{{ btn.js }}\" {% endif %}
                  {% if btn.modal_target is defined and btn.modal_target %}
                    data-target=\"{{ btn.modal_target }}\"
                    data-toggle=\"modal\"
                  {% endif %}
                  {% if btn.help is defined %}
                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  {% endif %}
                  {% if btn.data_attributes is defined and btn.data_attributes %}
                    {% for attribute_name, attribute_value in btn.data_attributes %}
                      data-{{ attribute_name }}=\"{{ attribute_value }}\"
                    {% endfor %}
                  {% endif %}
                >
                  {% if btn.icon is defined and btn.icon is not empty %}<i class=\"material-icons\">{{ btn.icon }}</i>{% endif %}
                  {{ btn.desc|escape }}
                </a>
              {% endif %}
            {% endfor %}
            {% if this.layoutHeaderToolbarBtn['modules-list'] is defined %}
              {# TODO: REFACTOR ALL THIS THINGS #}
              <a
                class=\"btn btn-outline-secondary {% if this.layoutHeaderToolbarBtn['modules-list'].target is defined and this.layoutHeaderToolbarBtn['modules-list'].target %} _blank{% endif %}\"
                id=\"page-header-desc-{{ table|default('configuration') }}-{% if this.layoutHeaderToolbarBtn['modules-list'].imgclass is defined %}{{ this.layoutHeaderToolbarBtn['modules-list'].imgclass }}{% else %}modules-list{% endif %}\"
                {% if this.layoutHeaderToolbarBtn['modules-list'].href is defined %}href=\"{{ this.layoutHeaderToolbarBtn['modules-list'].href }}\"{% endif %}
                title=\"{{ this.layoutHeaderToolbarBtn['modules-list'].desc }}\"
                {% if this.layoutHeaderToolbarBtn['modules-list'].js is defined and this.layoutHeaderToolbarBtn['modules-list'].js %}onclick=\"{{ this.layoutHeaderToolbarBtn['modules-list'].js }}\"{% endif %}
              >
                {{ this.layoutHeaderToolbarBtn['modules-list'].desc }}
              </a>
            {% endif %}

            {% if this.helpLink is not empty %}
              {% if this.sidebarEnabled %}
                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"{{ this.helpLink|escape }}\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"{{ this.helpLink|escape }}\"
                   id=\"product_form_open_help\"
                >
                  {{ 'Help'|trans({}, 'Admin.Global') }}
                </a>
              {% else %}
                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"{{ this.helpLink|escape }}\"
                   title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"{{ this.helpLink|escape }}\"
                   title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\">{{ 'Help'|trans({}, 'Admin.Global') }}
                </a>
              {% endif %}
            {% endif %}
          </div>
        </div>
      {% endblock %}
      {% block pageSubTitle %}
        {% if this.subTitle is not empty %}
          <h4 class=\"page-subtitle\">
            {{ this.subTitle }}
          </h4>
        {% endif %}
      {% endblock %}
    </div>
  </div>

  {% if headerTabContent is defined and headerTabContent %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      {% for tabContent in headerTabContent %}
        {{ tabContent }}
      {% endfor %}
    </div>
  {% endif %}

  {% if this.currentTabLevel >= 3 %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        {% for tab in this.navigationTabs %}
          {% if tab.attributes.active %}
            <li class=\"nav-item\">
              <a href=\"{{ tab.href }}\" id=\"subtab-{{ tab.attributes.class_name }}\"
                 class=\"nav-link tab {% if tab.attributes.current %}active current{% endif %}\"
                 data-submenu=\"{{ tab.attributes.id_tab }}\">
                {{ tab.name }}
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
  {% endif %}

  {% if this.layoutHeaderToolbarBtn is defined and this.layoutHeaderToolbarBtn is not empty %}
    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          {{ renderhook('displayDashboardToolbarTopMenu') }}

          {% for k, btn in this.layoutHeaderToolbarBtn %}
            {% if k != 'back' and k != 'modules-list' %}
              <a
                class=\"btn btn-floating-item {% if btn.floating_class is defined and btn.floating_class %}{{ btn.floating_class|escape }}{% endif %} {% if btn.target is defined and btn.target %} _blank{% endif %} pointer\"{% if btn.href is defined %}
                id=\"page-header-desc-floating-{{ table|default('configuration') }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
              href=\"{{ btn.href|escape }}\"{% endif %}
                title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"{% if btn.js is defined and btn.js %}
              onclick=\"{{ btn.js }}\"{% endif %}{% if btn.modal_target is defined and btn.modal_target %}
                data-target=\"{{ btn.modal_target }}\"
                data-toggle=\"modal\"{% endif %}{% if btn.help is defined %}
                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"{% endif %}
              >
                {{ btn.desc|escape }}
                {% if btn.icon is defined and btn.icon is not empty %}<i class=\"material-icons\">{{ btn.icon }}</i>{% endif %}
              </a>
            {% endif %}
          {% endfor %}

          {% if this.helpLink is not empty %}
            {% if this.sidebarEnabled %}
              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"{{ this.helpLink|escape }}\"
              >
                {{ 'Help'|trans({}, 'Admin.Global') }}
              </a>
            {% else %}
              <a class=\"btn btn-floating-item btn-help\" href=\"{{ this.helpLink|escape }}\"
                 title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\">
                {{ 'Help'|trans({}, 'Admin.Global') }}
              </a>
            {% endif %}
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}
  {{ renderhook('displayDashboardTop') }}
</div>
", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/toolbar.html.twig");
    }
}
