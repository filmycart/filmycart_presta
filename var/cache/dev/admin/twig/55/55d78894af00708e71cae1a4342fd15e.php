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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_80fdf75b7800b02c626aba19bfe94f92 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 30
        return $this->loadTemplate((((isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 30, $this->source); })())) ? ("@PrestaShop/Admin/Layout/light_layout.html.twig") : ("@PrestaShop/Admin/Layout/default_layout.html.twig")), "@PrestaShop/Admin/layout.html.twig", 30);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        // line 25
        $context["lightDisplay"] = ((array_key_exists("lightDisplay", $context)) ? ((isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 25, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["liteDisplaying", false], "method", false, false, false, 25)));
        // line 26
        $context["showContentHeader"] = ((array_key_exists("showContentHeader", $context)) ? ((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 26, $this->source); })())) : (true));
        // line 27
        $context["layoutHeaderToolbarBtn"] = ((array_key_exists("layoutHeaderToolbarBtn", $context)) ? ((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 27, $this->source); })())) : ([]));
        // line 28
        $context["metaTitle"] = ((array_key_exists("meta_title", $context)) ? ((isset($context["meta_title"]) || array_key_exists("meta_title", $context) ? $context["meta_title"] : (function () { throw new RuntimeError('Variable "meta_title" does not exist.', 28, $this->source); })())) : (((array_key_exists("layoutTitle", $context)) ? ((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 28, $this->source); })())) : (""))));
        // line 30
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
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

        // line 33
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "  <script>
    var translate_javascripts = ";
        // line 40
        yield json_encode((isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 40, $this->source); })()));
        yield ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        yield ";
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        // line 50
        yield "  ";
        // line 70
        yield "  ";
        $macros["layout"] = $this;
        // line 71
        yield "
  ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "session", [], "any", false, false, false, 72), "flashbag", [], "any", false, false, false, 72), "peek", ["error"], "method", false, false, false, 72)) > 0)) {
            // line 73
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 73, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "flashbag", [], "any", false, false, false, 73), "get", ["error"], "method", false, false, false, 73)]);
            yield "
  ";
        }
        // line 75
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "flashbag", [], "any", false, false, false, 75), "peek", ["failure"], "method", false, false, false, 75)) > 0)) {
            // line 76
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 76, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "session", [], "any", false, false, false, 76), "flashbag", [], "any", false, false, false, 76), "get", ["failure"], "method", false, false, false, 76)]);
            yield "
  ";
        }
        // line 78
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "session", [], "any", false, false, false, 78), "flashbag", [], "any", false, false, false, 78), "peek", ["success"], "method", false, false, false, 78)) > 0)) {
            // line 79
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 79, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), "flashbag", [], "any", false, false, false, 79), "get", ["success"], "method", false, false, false, 79)]);
            yield "
  ";
        }
        // line 81
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "peek", ["warning"], "method", false, false, false, 81)) > 0)) {
            // line 82
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 82, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "get", ["warning"], "method", false, false, false, 82)]);
            yield "
  ";
        }
        // line 84
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "session", [], "any", false, false, false, 84), "flashbag", [], "any", false, false, false, 84), "peek", ["info"], "method", false, false, false, 84)) > 0)) {
            // line 85
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 85, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", ["info"], "method", false, false, false, 85)]);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        yield "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        yield "\"
    />
  </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    public function macro_alert($type = null, $flashbagContent = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "flashbagContent" => $flashbagContent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 51
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 51, $this->source); })()), "html", null, true);
            yield " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 55, $this->source); })())) > 1)) {
                // line 56
                yield "        <ul class=\"alert-text\">
          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 58
                    yield "            <li>";
                    yield $context["flashMessage"];
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "        </ul>
      ";
            } else {
                // line 62
                yield "        <div class=\"alert-text\">
          ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 63, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 64
                    yield "            <p>";
                    yield $context["flashMessage"];
                    yield "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "        </div>
      ";
            }
            // line 68
            yield "    </div>
  ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/layout.html.twig";
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
        return array (  354 => 68,  350 => 66,  341 => 64,  337 => 63,  334 => 62,  330 => 60,  321 => 58,  317 => 57,  314 => 56,  312 => 55,  304 => 51,  285 => 50,  270 => 97,  266 => 96,  258 => 90,  245 => 89,  230 => 85,  227 => 84,  221 => 82,  218 => 81,  212 => 79,  209 => 78,  203 => 76,  200 => 75,  194 => 73,  192 => 72,  189 => 71,  186 => 70,  184 => 50,  171 => 49,  157 => 46,  144 => 45,  130 => 41,  126 => 40,  123 => 39,  110 => 38,  97 => 35,  93 => 34,  88 => 33,  75 => 32,  65 => 30,  63 => 28,  61 => 27,  59 => 26,  57 => 25,  44 => 30,);
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
{% set lightDisplay = lightDisplay is defined ? lightDisplay : app.request.query.get('liteDisplaying', false) %}
{% set showContentHeader = showContentHeader is defined ? showContentHeader : true %}
{% set layoutHeaderToolbarBtn = layoutHeaderToolbarBtn is defined ? layoutHeaderToolbarBtn : [] %}
{% set metaTitle = meta_title is defined ? meta_title : (layoutTitle is defined ? layoutTitle : '') %}

{% extends (lightDisplay ? '@PrestaShop/Admin/Layout/light_layout.html.twig' : '@PrestaShop/Admin/Layout/default_layout.html.twig') %}

{% block javascripts %}
  <script src=\"{{ asset('themes/default/js/bundle/default.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/right-sidebar.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/form_popover_error.bundle.js') }}\"></script>
{% endblock %}

{% block translate_javascripts %}
  <script>
    var translate_javascripts = {{ js_translatable|json_encode()|raw }};
    var PS_ALLOW_ACCENTED_CHARS_URL = {{ configuration('PS_ALLOW_ACCENTED_CHARS_URL')|intCast }};
  </script>
{% endblock %}

{% block content_header %}
  {{ block('session_alert') }}
{% endblock %}

{% block session_alert %}
  {% macro alert(type, flashbagContent) %}
    <div class=\"alert alert-{{ type }} d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      {% if flashbagContent|length > 1 %}
        <ul class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <li>{{ flashMessage|raw }}</li>
          {% endfor %}
        </ul>
      {% else %}
        <div class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <p>{{ flashMessage|raw }}</p>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endmacro %}
  {% import _self as layout %}

  {% if app.session.flashbag.peek('error')|length() > 0 %}
    {{ layout.alert('danger', app.session.flashbag.get('error')) }}
  {% endif %}
  {% if app.session.flashbag.peek('failure')|length() > 0 %}
    {{ layout.alert('danger', app.session.flashbag.get('failure')) }}
  {% endif %}
  {% if app.session.flashbag.peek('success')|length() > 0 %}
    {{ layout.alert('success', app.session.flashbag.get('success')) }}
  {% endif %}
  {% if app.session.flashbag.peek('warning')|length() > 0 %}
    {{ layout.alert('warning', app.session.flashbag.get('warning')) }}
  {% endif %}
  {% if app.session.flashbag.peek('info')|length() > 0 %}
    {{ layout.alert('info', app.session.flashbag.get('info')) }}
  {% endif %}
{% endblock %}

{% block sidebar_right %}
  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"{{ asset('themes/default/img/bundle/dashboard_loading.gif') }}\"
      style=\"margin-top: 10em;\" alt=\"{{ 'Loading...'|trans({}, 'Admin.Global') }}\"
    />
  </nav>
{% endblock %}
", "@PrestaShop/Admin/layout.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
