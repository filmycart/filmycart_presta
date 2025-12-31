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

/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_7eee342c8720b2674170076eb04322db extends Template
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
            'header' => [$this, 'block_header'],
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 26, $this->source); })()), "setupSmarty", [(((array_key_exists("layoutTitle", $context) &&  !(null === $context["layoutTitle"]))) ? ($context["layoutTitle"]) : ("")), (isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 26, $this->source); })()), (isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 26, $this->source); })())], "method", false, false, false, 26), "html", null, true);
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 28, $this->source); })()), "isoUser", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
  <head>
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 40
        yield "  </head>

  <body class=\"lang-";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "isoUser", [], "any", false, false, false, 42), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 42)) {
            yield " lang-rtl";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "controllerName", [], "any", false, false, false, 42))), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 42)) {
            yield " page-sidebar-closed";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "multiShop", [], "any", false, false, false, 42), false)) : (false))) {
            yield " multishop-enabled";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 42, $this->source); })()), "debugMode", [], "any", false, false, false, 42), false)) : (false))) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
    ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 43), "base_url", [], "any", true, true, false, 43))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 43, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 43), "base_url", [], "any", false, false, false, 43), "html", null, true);
            yield "\"";
        }
        // line 44
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 44) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 44), "token", [], "any", true, true, false, 44))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 44, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 44), "token", [], "any", false, false, false, 44), "html", null, true);
            yield "\"";
        }
        // line 45
        yield "  >
";
        // line 47
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 138
        yield "
";
        // line 140
        if ((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 140, $this->source); })())) {
            // line 141
            yield "  ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((            // line 142
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 142, $this->source); })()))) : ("")), "layoutSubTitle" => ((            // line 143
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 143, $this->source); })()))) : ("")), "helpLink" => ((            // line 144
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 144, $this->source); })()), "")) : ("")), "enableSidebar" => ((            // line 145
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 145, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 146
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 146, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((            // line 147
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 147, $this->source); })()), [])) : ([]))]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((                // line 142
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 142, $this->source); })()))) : ("")), "layoutSubTitle" => ((                // line 143
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 143, $this->source); })()))) : ("")), "helpLink" => ((                // line 144
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 144, $this->source); })()), "")) : ("")), "enableSidebar" => ((                // line 145
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 145, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((                // line 146
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 146, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((                // line 147
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 147, $this->source); })()), [])) : ([]))]), $context, "@PrestaShop/Admin/Layout/default_layout.html.twig", 29266608351);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29266608351);
                $this->loadTemplate("@PrestaShop/Admin/Layout/default_layout.html.twig", "@PrestaShop/Admin/Layout/default_layout.html.twig", 141, "29266608351")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
        }
        // line 152
        yield "
<div id=\"main-div\">
  <div
    class=\"content-div";
        // line 155
        if (((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 155, $this->source); })()) === false)) {
            yield " -notoolbar";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 155, $this->source); })()), "displayedWithTabs", [], "any", false, false, false, 155)) {
            yield " with-tabs";
        }
        yield "\">
    ";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 156, $this->source); })()), "installDirExists", [], "any", false, false, false, 156)) {
            // line 157
            yield "      <div class=\"alert alert-warning\">
        ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            yield "
      </div>
    ";
        } else {
            // line 161
            yield "      ";
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            yield "

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      ";
            // line 167
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
            // line 168
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 169
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 170
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_right', $context, $blocks);
            // line 171
            yield "
      ";
            // line 172
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            yield "
    ";
        }
        // line 174
        yield "  </div>
</div>

  <div class=\"mobile-layer\"></div>

  ";
        // line 179
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Footer");
        yield "

  ";
        // line 182
        yield "  ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 183
        yield "  ";
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 184
        yield "  ";
        yield from $this->unwrap()->yieldBlock('translate_javascripts', $context, $blocks);
        // line 185
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 31
        yield "      ";
        yield from $this->unwrap()->yieldBlock('core_javascript', $context, $blocks);
        // line 34
        yield "      ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("HeadTag", ["metaTitle" => (isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 34, $this->source); })())]);
        yield "
      ";
        // line 35
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 38
        yield "      ";
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 39
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_core_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core_javascript"));

        // line 32
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/core_javascript.html.twig");
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/stylesheets.html.twig");
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 48
        yield "  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      ";
        // line 53
        yield "      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 54, $this->source); })()), "defaultTabLink", [], "any", false, false, false, 54), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 55, $this->source); })()), "version", [], "any", false, false, false, 55), "html", null, true);
        yield "</span>

      ";
        // line 57
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("QuickAccess");
        yield "

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("SearchForm");
        yield "
            <button class=\"component-search-cancel d-none\">
              ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
          ";
        // line 67
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MobileQuickAccess");
        yield "
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      ";
        // line 72
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 72, $this->source); })()), "debugMode", [], "any", false, false, false, 72), false)) : (false))) {
            // line 73
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 80
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 87
        yield "
      ";
        // line 88
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 88, $this->source); })()), "isMaintenanceEnabled", [], "any", false, false, false, 88), false)) : (false))) {
            // line 89
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 90
                yield "          <p class=\"text-left text-nowrap\">
            <strong>
              ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 101
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 101, $this->source); })()), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 101), false)) : (false))) {
                    // line 102
                    yield "            <p class=\"text-left\">
              ";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 106
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maintenanceTitle"]) || array_key_exists("maintenanceTitle", $context) ? $context["maintenanceTitle"] : (function () { throw new RuntimeError('Variable "maintenanceTitle" does not exist.', 113, $this->source); })()), "html");
            yield "\"
             href=\"";
            // line 114
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 121
        yield "
      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 124, $this->source); })()), "baseUrl", [], "any", false, false, false, 124), "html", null, true);
        yield "\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span>
          </a>
        </div>
        ";
        // line 129
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NotificationsCenter");
        yield "
        ";
        // line 130
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("EmployeeDropdown");
        yield "
        ";
        // line 131
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
      </div>
    </nav>
  </header>

  ";
        // line 136
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NavBar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 168
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 182
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  680 => 184,  658 => 183,  636 => 182,  614 => 170,  592 => 169,  570 => 168,  548 => 167,  535 => 136,  527 => 131,  523 => 130,  519 => 129,  513 => 126,  508 => 124,  503 => 121,  496 => 117,  490 => 114,  486 => 113,  478 => 107,  474 => 106,  468 => 103,  465 => 102,  463 => 101,  458 => 99,  452 => 96,  445 => 92,  441 => 90,  438 => 89,  436 => 88,  433 => 87,  426 => 83,  420 => 80,  414 => 79,  406 => 73,  404 => 72,  396 => 67,  390 => 64,  385 => 62,  377 => 57,  372 => 55,  368 => 54,  365 => 53,  359 => 48,  346 => 47,  324 => 38,  310 => 36,  297 => 35,  283 => 32,  270 => 31,  259 => 39,  256 => 38,  254 => 35,  249 => 34,  246 => 31,  233 => 30,  220 => 185,  217 => 184,  214 => 183,  211 => 182,  206 => 179,  199 => 174,  194 => 172,  191 => 171,  188 => 170,  185 => 169,  182 => 168,  179 => 167,  170 => 161,  164 => 158,  161 => 157,  159 => 156,  150 => 155,  145 => 152,  135 => 147,  134 => 146,  133 => 145,  132 => 144,  131 => 143,  130 => 142,  125 => 147,  124 => 146,  123 => 145,  122 => 144,  121 => 143,  120 => 142,  117 => 141,  115 => 140,  112 => 138,  110 => 47,  107 => 45,  100 => 44,  94 => 43,  76 => 42,  72 => 40,  70 => 30,  65 => 28,  60 => 26,);
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
{# TODO: To be removed when we find a better time to fill the smarty variables. #}
{{ ps.setupSmarty(layoutTitle ?? '', metaTitle, lightDisplay) }}
<!DOCTYPE html>
<html lang=\"{{ ps.isoUser }}\">
  <head>
    {% block header %}
      {% block core_javascript %}
        {{ include('@PrestaShop/Admin/Layout/core_javascript.html.twig') }}
      {% endblock %}
      {{ component('HeadTag', {metaTitle: metaTitle}) }}
      {% block stylesheets %}
        {{ include('@PrestaShop/Admin/Layout/stylesheets.html.twig') }}
      {% endblock %}
      {% block extra_stylesheets %}{% endblock %}
    {% endblock %}
  </head>

  <body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
  >
{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      {# Logo #}
      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ ps.defaultTabLink }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component('QuickAccess') }}

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            {{ component('SearchForm') }}
            <button class=\"component-search-cancel d-none\">
              {{ 'Cancel'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
          {{ component('MobileQuickAccess') }}
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>{{ 'Your shop is in debug mode.'|trans({}, 'Admin.Navigation.Notification') }}</strong></p><p class=&quot;text-left&quot;>{{ 'All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.'|trans({'[1]': '<strong>', '[/1]': '</strong>'}, 'Admin.Navigation.Notification') }}</p>\"
             href=\"{{ url('admin_performance') }}\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>{{ 'Debug mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}

      {% if ps.isMaintenanceEnabled|default(false) %}
        {% set maintenanceTitle %}
          <p class=\"text-left text-nowrap\">
            <strong>
              {{ 'Your store is in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
            </strong>
          </p>
          <p class=\"text-left\">
            {{ 'Your visitors and customers cannot access your store while in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          <p class=\"text-left\">
            {{ 'To manage the maintenance settings, go to Shop Parameters > Maintenance tab.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          {% if ps.frontOfficeAccessibleForAdmins|default(false) %}
            <p class=\"text-left\">
              {{ 'Admins can access the store front office without storing their IP.'|trans({}, 'Admin.Navigation.Notification') }}
            </p>
          {% endif %}
        {% endset %}
        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"{{ maintenanceTitle|e('html') }}\"
             href=\"{{ url('admin_maintenance') }}\"
          >
            <i class=\"material-icons\">build</i>
            <span>{{ 'Maintenance mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}

      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"{{ ps.baseUrl }}\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>{{ 'View my store'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
        {{ component('NotificationsCenter') }}
        {{ component('EmployeeDropdown') }}
        {{ renderhook('displayBackOfficeTop') }}
      </div>
    </nav>
  </header>

  {{ component('NavBar') }}
{% endblock %}

{# Page header toolbar #}
{% if showContentHeader %}
  {% component Toolbar with {
    layoutTitle: layoutTitle|default,
    layoutSubTitle: layoutSubTitle|default,
    helpLink: help_link|default(''),
    enableSidebar: enableSidebar|default(false),
    layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
    breadcrumbLinks: breadcrumbLinks|default([]),
  } %}
    {% block pageTitle %}{{ block(outerBlocks.pageTitle) ?: parent() }}{% endblock %}
  {% endcomponent %}
{% endif %}

<div id=\"main-div\">
  <div
    class=\"content-div{% if showContentHeader is same as(false) %} -notoolbar{% endif %}{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
    {% if ps.installDirExists %}
      <div class=\"alert alert-warning\">
        {{ 'For security reasons, you must also delete the /install folder.'|trans({}, 'Admin.Login.Notification') }}
      </div>
    {% else %}
      {{ renderhook('displayAdminAfterHeader', {}) }}

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      {# Page content blocks #}
      {% block content_header %}{% endblock %}
      {% block content %}{% endblock %}
      {% block content_footer %}{% endblock %}
      {% block sidebar_right %}{% endblock %}

      {{ renderhook('displayAdminEndContent', {}) }}
    {% endif %}
  </div>
</div>

  <div class=\"mobile-layer\"></div>

  {{ component('Footer') }}

  {# Javascript blocks #}
  {% block javascripts %}{% endblock %}
  {% block extra_javascripts %}{% endblock %}
  {% block translate_javascripts %}{% endblock %}
</body>
</html>
", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}


/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_7eee342c8720b2674170076eb04322db___29266608351 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'pageTitle' => [$this, 'block_pageTitle'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 141
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 141, $this->source); })()), "@PrestaShop/Admin/Layout/default_layout.html.twig", 141);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
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

        yield ((        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["outerBlocks"]) || array_key_exists("outerBlocks", $context) ? $context["outerBlocks"] : (function () { throw new RuntimeError('Variable "outerBlocks" does not exist.', 149, $this->source); })()), "pageTitle", [], "any", false, false, false, 149), $context, $blocks)) ? (        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["outerBlocks"]) || array_key_exists("outerBlocks", $context) ? $context["outerBlocks"] : (function () { throw new RuntimeError('Variable "outerBlocks" does not exist.', 149, $this->source); })()), "pageTitle", [], "any", false, false, false, 149), $context, $blocks)) : ($this->renderParentBlock("pageTitle", $context, $blocks)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  985 => 149,  942 => 141,  680 => 184,  658 => 183,  636 => 182,  614 => 170,  592 => 169,  570 => 168,  548 => 167,  535 => 136,  527 => 131,  523 => 130,  519 => 129,  513 => 126,  508 => 124,  503 => 121,  496 => 117,  490 => 114,  486 => 113,  478 => 107,  474 => 106,  468 => 103,  465 => 102,  463 => 101,  458 => 99,  452 => 96,  445 => 92,  441 => 90,  438 => 89,  436 => 88,  433 => 87,  426 => 83,  420 => 80,  414 => 79,  406 => 73,  404 => 72,  396 => 67,  390 => 64,  385 => 62,  377 => 57,  372 => 55,  368 => 54,  365 => 53,  359 => 48,  346 => 47,  324 => 38,  310 => 36,  297 => 35,  283 => 32,  270 => 31,  259 => 39,  256 => 38,  254 => 35,  249 => 34,  246 => 31,  233 => 30,  220 => 185,  217 => 184,  214 => 183,  211 => 182,  206 => 179,  199 => 174,  194 => 172,  191 => 171,  188 => 170,  185 => 169,  182 => 168,  179 => 167,  170 => 161,  164 => 158,  161 => 157,  159 => 156,  150 => 155,  145 => 152,  135 => 147,  134 => 146,  133 => 145,  132 => 144,  131 => 143,  130 => 142,  125 => 147,  124 => 146,  123 => 145,  122 => 144,  121 => 143,  120 => 142,  117 => 141,  115 => 140,  112 => 138,  110 => 47,  107 => 45,  100 => 44,  94 => 43,  76 => 42,  72 => 40,  70 => 30,  65 => 28,  60 => 26,);
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
{# TODO: To be removed when we find a better time to fill the smarty variables. #}
{{ ps.setupSmarty(layoutTitle ?? '', metaTitle, lightDisplay) }}
<!DOCTYPE html>
<html lang=\"{{ ps.isoUser }}\">
  <head>
    {% block header %}
      {% block core_javascript %}
        {{ include('@PrestaShop/Admin/Layout/core_javascript.html.twig') }}
      {% endblock %}
      {{ component('HeadTag', {metaTitle: metaTitle}) }}
      {% block stylesheets %}
        {{ include('@PrestaShop/Admin/Layout/stylesheets.html.twig') }}
      {% endblock %}
      {% block extra_stylesheets %}{% endblock %}
    {% endblock %}
  </head>

  <body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
  >
{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      {# Logo #}
      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ ps.defaultTabLink }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component('QuickAccess') }}

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            {{ component('SearchForm') }}
            <button class=\"component-search-cancel d-none\">
              {{ 'Cancel'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
          {{ component('MobileQuickAccess') }}
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>{{ 'Your shop is in debug mode.'|trans({}, 'Admin.Navigation.Notification') }}</strong></p><p class=&quot;text-left&quot;>{{ 'All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.'|trans({'[1]': '<strong>', '[/1]': '</strong>'}, 'Admin.Navigation.Notification') }}</p>\"
             href=\"{{ url('admin_performance') }}\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>{{ 'Debug mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}

      {% if ps.isMaintenanceEnabled|default(false) %}
        {% set maintenanceTitle %}
          <p class=\"text-left text-nowrap\">
            <strong>
              {{ 'Your store is in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
            </strong>
          </p>
          <p class=\"text-left\">
            {{ 'Your visitors and customers cannot access your store while in maintenance mode.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          <p class=\"text-left\">
            {{ 'To manage the maintenance settings, go to Shop Parameters > Maintenance tab.'|trans({}, 'Admin.Navigation.Notification') }}
          </p>
          {% if ps.frontOfficeAccessibleForAdmins|default(false) %}
            <p class=\"text-left\">
              {{ 'Admins can access the store front office without storing their IP.'|trans({}, 'Admin.Navigation.Notification') }}
            </p>
          {% endif %}
        {% endset %}
        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"{{ maintenanceTitle|e('html') }}\"
             href=\"{{ url('admin_maintenance') }}\"
          >
            <i class=\"material-icons\">build</i>
            <span>{{ 'Maintenance mode'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
      {% endif %}

      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"{{ ps.baseUrl }}\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>{{ 'View my store'|trans({}, 'Admin.Navigation.Header') }}</span>
          </a>
        </div>
        {{ component('NotificationsCenter') }}
        {{ component('EmployeeDropdown') }}
        {{ renderhook('displayBackOfficeTop') }}
      </div>
    </nav>
  </header>

  {{ component('NavBar') }}
{% endblock %}

{# Page header toolbar #}
{% if showContentHeader %}
  {% component Toolbar with {
    layoutTitle: layoutTitle|default,
    layoutSubTitle: layoutSubTitle|default,
    helpLink: help_link|default(''),
    enableSidebar: enableSidebar|default(false),
    layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
    breadcrumbLinks: breadcrumbLinks|default([]),
  } %}
    {% block pageTitle %}{{ block(outerBlocks.pageTitle) ?: parent() }}{% endblock %}
  {% endcomponent %}
{% endif %}

<div id=\"main-div\">
  <div
    class=\"content-div{% if showContentHeader is same as(false) %} -notoolbar{% endif %}{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
    {% if ps.installDirExists %}
      <div class=\"alert alert-warning\">
        {{ 'For security reasons, you must also delete the /install folder.'|trans({}, 'Admin.Login.Notification') }}
      </div>
    {% else %}
      {{ renderhook('displayAdminAfterHeader', {}) }}

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      {# Page content blocks #}
      {% block content_header %}{% endblock %}
      {% block content %}{% endblock %}
      {% block content_footer %}{% endblock %}
      {% block sidebar_right %}{% endblock %}

      {{ renderhook('displayAdminEndContent', {}) }}
    {% endif %}
  </div>
</div>

  <div class=\"mobile-layer\"></div>

  {{ component('Footer') }}

  {# Javascript blocks #}
  {% block javascripts %}{% endblock %}
  {% block extra_javascripts %}{% endblock %}
  {% block translate_javascripts %}{% endblock %}
</body>
</html>
", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}
