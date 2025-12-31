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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_e50188790932f40225a02a644359ab12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        // line 28
        yield "
";
        // line 32
        yield "
";
        // line 38
        yield "
";
        // line 50
        yield "
";
        // line 58
        yield "
";
        // line 71
        yield "
";
        // line 88
        yield "
";
        // line 96
        yield "
";
        // line 126
        yield "
";
        // line 240
        yield "
 ";
        // line 287
        yield "
";
        // line 306
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    public function macro_form_label_tooltip($name = null, $tooltip = null, $placement = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "tooltip" => $tooltip,
            "placement" => $placement,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 26, $this->source); })()), 'label', ["label_attr" => ["tooltip" => (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 26, $this->source); })()), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 26, $this->source); })()), "top")) : ("top"))]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function macro_check($variable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "variable" => $variable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            yield "  ";
            yield (((array_key_exists("variable", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 30, $this->source); })())) > 0))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 30, $this->source); })()), "html", null, true)) : (false));
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function macro_tooltip($text = null, $icon = null, $position = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "icon" => $icon,
            "position" => $position,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            yield "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" data-html=\"true\" data-placement=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 34, $this->source); })()), "top")) : ("top")), "html", null, true);
            yield "\">
    <i class=\"material-icons\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "</i>
  </span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function macro_infotip($text = null, $use_raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "use_raw" => $use_raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            yield "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            if ((isset($context["use_raw"]) || array_key_exists("use_raw", $context) ? $context["use_raw"] : (function () { throw new RuntimeError('Variable "use_raw" does not exist.', 42, $this->source); })())) {
                // line 43
                yield "      ";
                yield (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 43, $this->source); })());
                yield "
    ";
            } else {
                // line 45
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 45, $this->source); })()), "html", null, true);
                yield "
    ";
            }
            // line 47
            yield "  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_warningtip($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 52
            yield "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "
  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function macro_label_with_help($label = null, $help = null, $class = "", $for = "", $isRequired = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "help" => $help,
            "class" => $class,
            "for" => $for,
            "isRequired" => $isRequired,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 60
            yield "<label";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 60, $this->source); })()))) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-control-label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "\">
  ";
            // line 61
            if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 61, $this->source); })())) {
                // line 62
                yield "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 64
            yield "
  ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "
  ";
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 66, $this->source); })())]);
            yield "
</label>

<p class=\"sr-only\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 69, $this->source); })()), "html", null, true);
            yield "</p>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function macro_sortable_column_header($title = null, $sortColumnName = null, $orderBy = null, $sortOrder = null, $prefix = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "sortColumnName" => $sortColumnName,
            "orderBy" => $orderBy,
            "sortOrder" => $sortOrder,
            "prefix" => $prefix,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 74
            yield "  ";
            [$context["sortOrder"], $context["orderBy"], $context["prefix"]] =             [((array_key_exists("sortOrder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 74, $this->source); })()), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 74, $this->source); })()))) : ("")), ((array_key_exists("prefix", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 74, $this->source); })()), "")) : (""))];
            // line 75
            yield "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 77, $this->source); })()), "html", null, true);
            yield "\"
      data-sort-prefix=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 78, $this->source); })()), "html", null, true);
            yield "\"
      ";
            // line 79
            if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 79, $this->source); })()) == (isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 79, $this->source); })()))) {
                // line 80
                yield "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 81
                yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 81, $this->source); })()) == "desc")) ? ("desc") : ("asc"));
                yield "\"
      ";
            }
            // line 83
            yield "    >
      <span role=\"columnheader\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 84, $this->source); })()), "html", null, true);
            yield "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            yield "\"></span>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 90
    public function macro_import_file_sample($label = null, $filename = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "filename" => $filename,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 91
            yield "    <a id=\"download-sample-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_sample_download", ["sampleName" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 92, $this->source); })())]), "html", null, true);
            yield "\">
        ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 93, $this->source); })()), [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 106
    public function macro_form_widget_with_error($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            // line 107
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 107)->unwrap();
            // line 108
            yield "
  ";
            // line 109
            $context["vars"] = ((array_key_exists("vars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 109, $this->source); })()), [])) : ([]));
            // line 110
            yield "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 110, $this->source); })()), [])) : ([]));
            // line 111
            yield "  ";
            $context["attr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 111, $this->source); })()), "attr", [], "any", false, false, false, 111), [])) : ([]));
            // line 112
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), "class", [], "any", false, false, false, 112)) : (""))]);
            // line 113
            yield "  ";
            $context["vars"] = Twig\Extension\CoreExtension::merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 113, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 113, $this->source); })())]);
            // line 114
            yield "
  ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 115, $this->source); })()));
            yield "

  ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 117) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 117, $this->source); })()), "help", [], "any", false, false, false, 117))) {
                // line 118
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 118, $this->source); })()), "help", [], "any", false, false, false, 118), "html", null, true);
                yield "</small>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["form"] ?? null), "vars", [], "any", false, true, false, 119), "help", [], "any", true, true, false, 119) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "help", [], "any", false, false, false, 119))) {
                // line 120
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "help", [], "any", false, false, false, 120), "html", null, true);
                yield "</small>
  ";
            }
            // line 122
            yield "
  ";
            // line 123
            yield $macros["self"]->getTemplateForMacro("macro_form_error_with_popover", $context, 123, $this->getSourceContext())->macro_form_error_with_popover(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })())]);
            yield "

";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function macro_form_error_with_popover($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            // line 137
            yield "  ";
            $context["errors"] = [];
            // line 138
            yield "
  ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 139), "valid", [], "any", true, true, false, 139) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "valid", [], "any", false, false, false, 139))) {
                // line 140
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "vars", [], "any", false, false, false, 140), "errors", [], "any", false, false, false, 140));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 141
                    yield "      ";
                    $context["errors"] = Twig\Extension\CoreExtension::merge((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 141, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["parentError"], "message", [], "any", false, false, false, 141)]);
                    // line 142
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['parentError'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                yield "
    ";
                // line 145
                yield "  ";
            }
            // line 146
            yield "
  ";
            // line 147
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 147, $this->source); })())) > 0)) {
                // line 148
                yield "    ";
                // line 149
                yield "    ";
                $context["errorPopover"] = null;
                // line 150
                yield "
    ";
                // line 151
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 151, $this->source); })())) > 1)) {
                    // line 152
                    yield "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "vars", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152));
                    // line 153
                    yield "      <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 153, $this->source); })()), "html", null, true);
                    yield "\"></div>

      ";
                    // line 155
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 155), "errors_by_locale", [], "any", true, true, false, 155)) {
                        // line 156
                        yield "          ";
                        $context["popoverErrors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "vars", [], "any", false, false, false, 156), "errors_by_locale", [], "any", false, false, false, 156);
                        // line 157
                        yield "
          ";
                        // line 159
                        yield "          ";
                        $context["translatableErrors"] = [];
                        // line 160
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 160, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 161
                            yield "            ";
                            $context["translatableErrors"] = Twig\Extension\CoreExtension::merge((isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 161, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["translatableError"], "error_message", [], "any", false, false, false, 161)]);
                            // line 162
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['translatableError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 163
                        yield "
          ";
                        // line 165
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 165, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 166
                            yield "            ";
                            if (!CoreExtension::inFilter($context["error"], (isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 166, $this->source); })()))) {
                                // line 167
                                yield "              ";
                                $context["popoverErrors"] = Twig\Extension\CoreExtension::merge((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 167, $this->source); })()), [$context["error"]]);
                                // line 168
                                yield "            ";
                            }
                            // line 169
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        yield "
        ";
                    } else {
                        // line 172
                        yield "          ";
                        $context["popoverErrors"] = (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 172, $this->source); })());
                        // line 173
                        yield "      ";
                    }
                    // line 174
                    yield "
      ";
                    // line 175
                    $context["errorMessages"] = [];
                    // line 176
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 176, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 177
                        yield "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 178
                        yield "
        ";
                        // line 179
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", true, true, false, 179) && CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", true, true, false, 179))) {
                            // line 180
                            yield "          ";
                            $context["errorMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", false, false, false, 180), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", false, false, false, 180)], "Admin.Notifications.Error");
                            // line 181
                            yield "        ";
                        }
                        // line 182
                        yield "
        ";
                        // line 183
                        $context["errorMessages"] = Twig\Extension\CoreExtension::merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 183, $this->source); })()), [(isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 183, $this->source); })())]);
                        // line 184
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    yield "
      ";
                    // line 186
                    $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 187
                        yield "        <div class=\"popover-error-list\">
          <ul>
            ";
                        // line 189
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 189, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                            // line 190
                            yield "              <li class=\"text-danger\">
                ";
                            // line 191
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["popoverError"], "html", null, true);
                            yield "
              </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 194
                        yield "          </ul>
        </div>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 197
                    yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "vars", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198), "html", null, true);
                    yield "\">
        ";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 199, $this->source); })()), "html", null, true);
                    yield "
      </template>

      ";
                    // line 202
                    $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 203
                        yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                        // line 205
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "vars", [], "any", false, false, false, 205), "id", [], "any", false, false, false, 205), "html", null, true);
                        yield "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                        // line 209
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 209, $this->source); })()), "html", null, true);
                        yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 211, $this->source); })()))], "Admin.Global"), "html", null, true);
                        yield "</u>
        </span>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 214
                    yield "
    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 215
($context["form"] ?? null), "vars", [], "any", false, true, false, 215), "error_by_locale", [], "any", true, true, false, 215)) {
                    // line 216
                    yield "      ";
                    $context["errorByLocale"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "vars", [], "any", false, false, false, 216), "error_by_locale", [], "any", false, false, false, 216), "error_message", [], "any", false, false, false, 216), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "vars", [], "any", false, false, false, 216), "error_by_locale", [], "any", false, false, false, 216), "locale_name", [], "any", false, false, false, 216)], "Admin.Notifications.Error");
                    // line 217
                    yield "      ";
                    $context["errors"] = [(isset($context["errorByLocale"]) || array_key_exists("errorByLocale", $context) ? $context["errorByLocale"] : (function () { throw new RuntimeError('Variable "errorByLocale" does not exist.', 217, $this->source); })())];
                    // line 218
                    yield "    ";
                }
                // line 219
                yield "
    <div class=\"invalid-feedback-container\">
      ";
                // line 221
                if ( !(null === (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 221, $this->source); })()))) {
                    // line 222
                    yield "        <div class=\"text-danger\">
          ";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 223, $this->source); })()), "html", null, true);
                    yield "
        </div>
      ";
                } else {
                    // line 226
                    yield "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 230, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 231
                        yield "            <div class=\"text-danger\">
              ";
                        // line 232
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                        yield "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    yield "        </div>
      ";
                }
                // line 237
                yield "    </div>
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 247
    public function macro_form_group_row($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            // line 248
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 248)->unwrap();
            // line 249
            yield "
  ";
            // line 250
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 250, $this->source); })()), "class", [], "any", false, false, false, 250), "")) : (""));
            // line 251
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 251), "block_prefixes", [], "any", false, true, false, 251), 1, [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "vars", [], "any", false, false, false, 251), "block_prefixes", [], "any", false, false, false, 251), 1, [], "any", false, false, false, 251), "text")) : ("text"));
            // line 252
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 252, $this->source); })()), "row_attr", [], "any", false, false, false, 252), [])) : ([]));
            // line 253
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 253, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 253, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 253, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    ";
            // line 254
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 254, $this->source); })()), [])) : ([]));
            // line 255
            yield "
    ";
            // line 257
            yield "    ";
            $context["labelOnTop"] = false;
            // line 258
            yield "
    ";
            // line 259
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 259)) {
                // line 260
                yield "      ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 260, $this->source); })()), "label_on_top", [], "any", false, false, false, 260);
                // line 261
                yield "    ";
            }
            // line 262
            yield "
    ";
            // line 263
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 263)) {
                // line 264
                yield "      ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 264), "required", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "vars", [], "any", false, false, false, 264), "required", [], "any", false, false, false, 264), false)) : (false));
                // line 265
                yield "
      ";
                // line 266
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 266)) {
                    // line 267
                    yield "        ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 267, $this->source); })()), "required", [], "any", false, false, false, 267);
                    // line 268
                    yield "      ";
                }
                // line 269
                yield "
      <label for=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "vars", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 270, $this->source); })())) ? ("label-on-top col-12") : (""));
                yield "\">
        ";
                // line 271
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 271, $this->source); })())) {
                    // line 272
                    yield "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 274
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 274, $this->source); })()), "label", [], "any", false, false, false, 274), "html", null, true);
                yield "

        ";
                // line 276
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 276), "label_attr", [], "any", true, true, false, 276) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "vars", [], "any", false, false, false, 276), "label_attr", [], "any", false, false, false, 276)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 276), "label_attr", [], "any", false, true, false, 276), "popover", [], "array", true, true, false, 276))) {
                    // line 277
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "vars", [], "any", false, false, false, 277), "label_attr", [], "any", false, false, false, 277), "popover", [], "array", false, false, false, 277)]);
                    yield "
        ";
                }
                // line 279
                yield "      </label>
    ";
            }
            // line 281
            yield "
    <div class=\"";
            // line 282
            yield (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 282, $this->source); })())) ? ("col-12") : ("col-sm"));
            yield "\">
      ";
            // line 283
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 283, $this->getSourceContext())->macro_form_widget_with_error(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 283, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 283, $this->source); })())]);
            yield "
    </div>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function macro_multistore_switch($form = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            // line 289
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 289)->unwrap();
            // line 290
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true, false, 290)) {
                // line 291
                yield "    ";
                $context["defaultLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 292
                    yield "      <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    yield "</strong> <br>
      ";
                    // line 293
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                    yield " <br>
      ";
                    // line 294
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                    yield "
    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 296
                yield "
    ";
                // line 297
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 297)) {
                    // line 298
                    yield "      ";
                    $context["extraVars"] = Twig\Extension\CoreExtension::merge((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 298, $this->source); })()), ["help" => (isset($context["defaultLabel"]) || array_key_exists("defaultLabel", $context) ? $context["defaultLabel"] : (function () { throw new RuntimeError('Variable "defaultLabel" does not exist.', 298, $this->source); })())]);
                    // line 299
                    yield "    ";
                }
                // line 300
                yield "
    ";
                // line 301
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 302
                yield "
    ";
                // line 303
                yield $macros["self"]->getTemplateForMacro("macro_form_group_row", $context, 303, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "shop_restriction_switch", [], "any", false, false, false, 303), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 303, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 303, $this->source); })())]);
                yield "
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function macro_language_dependant_select($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            // line 308
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 308)->unwrap();
            // line 309
            yield "
  ";
            // line 310
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 310, $this->source); })()), "class", [], "any", false, false, false, 310), "")) : (""));
            // line 311
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 311), "block_prefixes", [], "any", false, true, false, 311), 1, [], "any", true, true, false, 311)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "vars", [], "any", false, false, false, 311), "block_prefixes", [], "any", false, false, false, 311), 1, [], "any", false, false, false, 311), "text")) : ("text"));
            // line 312
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 312)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 312, $this->source); })()), "row_attr", [], "any", false, false, false, 312), [])) : ([]));
            // line 313
            yield "  ";
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "vars", [], "any", false, false, false, 313), "attr", [], "any", false, false, false, 313);
            // line 314
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 314, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 314, $this->source); })()), "class", [], "any", false, false, false, 314), "")) : ("")) . " language_dependant_select"))]);
            // line 315
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 315, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 315, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 315, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
  ";
            // line 316
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 316, $this->source); })()), [])) : ([]));
            // line 317
            yield "
  ";
            // line 319
            yield "  ";
            $context["labelOnTop"] = false;
            // line 320
            yield "
  ";
            // line 321
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 321)) {
                // line 322
                yield "    ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 322, $this->source); })()), "label_on_top", [], "any", false, false, false, 322);
                // line 323
                yield "  ";
            }
            // line 324
            yield "
  ";
            // line 325
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 325)) {
                // line 326
                yield "    ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 326), "required", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "vars", [], "any", false, false, false, 326), "required", [], "any", false, false, false, 326), false)) : (false));
                // line 327
                yield "
    ";
                // line 328
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 328)) {
                    // line 329
                    yield "      ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 329, $this->source); })()), "required", [], "any", false, false, false, 329);
                    // line 330
                    yield "    ";
                }
                // line 331
                yield "
    <label for=\"";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 332, $this->source); })())) ? ("label-on-top col-12") : (""));
                yield "\">
      ";
                // line 333
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 333, $this->source); })())) {
                    // line 334
                    yield "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 336
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 336, $this->source); })()), "label", [], "any", false, false, false, 336), "html", null, true);
                yield "
    </label>
  ";
            }
            // line 339
            yield "
  <div class=\"";
            // line 340
            yield "col-sm-5";
            yield "\">
    ";
            // line 341
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 341, $this->getSourceContext())->macro_form_widget_with_error(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 341, $this->source); })())], (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 341, $this->source); })())]);
            yield "
  </div>
  ";
            // line 343
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", true, true, false, 343) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 343, $this->source); })()), "languages", [], "any", false, false, false, 343)))) {
                // line 344
                yield "  <div class=\"";
                yield "col-sm-3";
                yield "\">
    <select name=\"";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "vars", [], "any", false, false, false, 345), "id", [], "any", false, false, false, 345) . "_language"), "html", null, true);
                yield "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 346
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 346, $this->source); })()), "languages", [], "any", false, false, false, 346))) {
                    // line 347
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 347, $this->source); })()), "languages", [], "any", false, false, false, 347));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 348
                        yield "        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 348), "html", null, true);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 348);
                        yield "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 350
                    yield "    ";
                }
                // line 351
                yield "    </select>
  </div>
  ";
            }
            // line 354
            yield "  </div>
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
        return "@PrestaShop/Admin/macros.html.twig";
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
        return array (  1246 => 354,  1241 => 351,  1238 => 350,  1227 => 348,  1222 => 347,  1220 => 346,  1216 => 345,  1211 => 344,  1209 => 343,  1204 => 341,  1200 => 340,  1197 => 339,  1190 => 336,  1186 => 334,  1184 => 333,  1178 => 332,  1175 => 331,  1172 => 330,  1169 => 329,  1167 => 328,  1164 => 327,  1161 => 326,  1159 => 325,  1156 => 324,  1153 => 323,  1150 => 322,  1148 => 321,  1145 => 320,  1142 => 319,  1139 => 317,  1137 => 316,  1117 => 315,  1114 => 314,  1111 => 313,  1108 => 312,  1105 => 311,  1103 => 310,  1100 => 309,  1097 => 308,  1077 => 307,  1062 => 303,  1059 => 302,  1057 => 301,  1054 => 300,  1051 => 299,  1048 => 298,  1046 => 297,  1043 => 296,  1037 => 294,  1033 => 293,  1028 => 292,  1025 => 291,  1022 => 290,  1019 => 289,  1000 => 288,  984 => 283,  980 => 282,  977 => 281,  973 => 279,  967 => 277,  965 => 276,  959 => 274,  955 => 272,  953 => 271,  947 => 270,  944 => 269,  941 => 268,  938 => 267,  936 => 266,  933 => 265,  930 => 264,  928 => 263,  925 => 262,  922 => 261,  919 => 260,  917 => 259,  914 => 258,  911 => 257,  908 => 255,  906 => 254,  886 => 253,  883 => 252,  880 => 251,  878 => 250,  875 => 249,  872 => 248,  852 => 247,  838 => 237,  834 => 235,  825 => 232,  822 => 231,  818 => 230,  812 => 226,  806 => 223,  803 => 222,  801 => 221,  797 => 219,  794 => 218,  791 => 217,  788 => 216,  786 => 215,  783 => 214,  776 => 211,  771 => 209,  764 => 205,  760 => 203,  758 => 202,  752 => 199,  748 => 198,  745 => 197,  739 => 194,  730 => 191,  727 => 190,  723 => 189,  719 => 187,  717 => 186,  714 => 185,  708 => 184,  706 => 183,  703 => 182,  700 => 181,  697 => 180,  695 => 179,  692 => 178,  689 => 177,  684 => 176,  682 => 175,  679 => 174,  676 => 173,  673 => 172,  669 => 170,  663 => 169,  660 => 168,  657 => 167,  654 => 166,  649 => 165,  646 => 163,  640 => 162,  637 => 161,  632 => 160,  629 => 159,  626 => 157,  623 => 156,  621 => 155,  615 => 153,  612 => 152,  610 => 151,  607 => 150,  604 => 149,  602 => 148,  600 => 147,  597 => 146,  594 => 145,  591 => 143,  585 => 142,  582 => 141,  577 => 140,  575 => 139,  572 => 138,  569 => 137,  551 => 136,  536 => 123,  533 => 122,  527 => 120,  525 => 119,  520 => 118,  518 => 117,  513 => 115,  510 => 114,  507 => 113,  504 => 112,  501 => 111,  498 => 110,  496 => 109,  493 => 108,  490 => 107,  470 => 106,  455 => 93,  451 => 92,  446 => 91,  427 => 90,  412 => 85,  408 => 84,  405 => 83,  400 => 81,  397 => 80,  395 => 79,  391 => 78,  387 => 77,  383 => 75,  380 => 74,  358 => 73,  344 => 69,  338 => 66,  334 => 65,  331 => 64,  327 => 62,  325 => 61,  314 => 60,  292 => 59,  276 => 54,  272 => 52,  254 => 51,  240 => 47,  234 => 45,  228 => 43,  226 => 42,  222 => 40,  203 => 39,  188 => 35,  181 => 34,  161 => 33,  146 => 30,  128 => 29,  113 => 26,  93 => 25,  81 => 306,  78 => 287,  75 => 240,  72 => 126,  69 => 96,  66 => 88,  63 => 71,  60 => 58,  57 => 50,  54 => 38,  51 => 32,  48 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {label_attr: {tooltip: tooltip, tooltip_placement: placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text, use_raw = false) %}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {% if use_raw %}
      {{ text|raw }}
    {% else %}
      {{ text }}
    {% endif %}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text) %}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '', for = '', isRequired = false) %}
<label{% if for is not empty %} for=\"{{ for }}\"{% endif %} class=\"form-control-label {{ class }}\">
  {% if isRequired %}
    <span class=\"text-danger\">*</span>
  {% endif %}

  {{ label }}
  {{ include('@Common/HelpBox/helpbox.html.twig', {content: help}) }}
</label>

<p class=\"sr-only\">{{ help }}</p>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder, prefix) %}
  {% set sortOrder, orderBy, prefix = sortOrder|default(''), orderBy|default, prefix|default('') %}
  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      data-sort-prefix=\"{{ prefix }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
  </div>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a id=\"download-sample-{{ filename }}-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"{{ path('admin_import_sample_download', {sampleName: filename}) }}\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}

{#
  Show form widget with errors rendered below it. It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_widget_with_error(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set vars = vars|default({}) %}
  {% set extraVars = extraVars|default({}) %}
  {% set attr = vars.attr|default({}) %}
  {% set attr = attr|merge({class: (attr.class is defined ? attr.class : '')}) %}
  {% set vars = vars|merge({attr: attr}) %}

  {{ form_widget(form, vars) }}

  {% if extraVars.help is defined and extraVars.help %}
      <small class=\"form-text\">{{ extraVars.help }}</small>
    {% elseif form.vars.help is defined and form.vars.help %}
      <small class=\"form-text\">{{ form.vars.help }}</small>
  {% endif %}

  {{ self.form_error_with_popover(form) }}

{% endmacro %}

{#
  It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_error_with_popover(form) %}
  {% set errors = [] %}

  {% if form.vars.valid is defined and not form.vars.valid %}
    {% for parentError in form.vars.errors %}
      {% set errors = errors|merge([parentError.message]) %}
    {% endfor %}

    {# iterating over child errors because errors can be nested #}
  {% endif %}

  {% if errors|length > 0 %}
    {# for form types which has locales and there are more then 1 error , additional errors are displaying inside popover #}
    {% set errorPopover = null %}

    {% if errors|length > 1 %}
      {% set popoverContainer = 'popover-error-container-' ~ form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% if form.vars.errors_by_locale is defined %}
          {% set popoverErrors = form.vars.errors_by_locale %}

          {# collecting translatable errors - the ones which has locale name attached #}
          {% set translatableErrors = [] %}
          {% for translatableError in popoverErrors %}
            {% set translatableErrors = translatableErrors|merge([translatableError.error_message]) %}
          {% endfor %}

          {# if an error found which does not exist in translatable errors array - it adds it to the popover error container #}
          {% for error in errors %}
            {% if error not in translatableErrors %}
              {% set popoverErrors = popoverErrors|merge([error]) %}
            {% endif %}
          {% endfor %}

        {% else %}
          {% set popoverErrors = errors %}
      {% endif %}

      {% set errorMessages = [] %}
      {% for popoverError in popoverErrors %}
        {% set errorMessage = popoverError %}

        {% if popoverError.error_message is defined and popoverError.locale_name is defined %}
          {% set errorMessage = '%error_message% - Language: %language_name%'|trans({'%error_message%': popoverError.error_message, '%language_name%': popoverError.locale_name}, 'Admin.Notifications.Error') %}
        {% endif %}

        {% set errorMessages = errorMessages|merge([errorMessage]) %}
      {% endfor %}

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {% for popoverError in errorMessages %}
              <li class=\"text-danger\">
                {{ popoverError }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>{{ '%count% errors'|trans({'%count%': popoverErrors|length}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

    {% elseif form.vars.error_by_locale is defined %}
      {% set errorByLocale = '%error_message% - Language: %language_name%'|trans({'%error_message%': form.vars.error_by_locale.error_message, '%language_name%': form.vars.error_by_locale.locale_name}, 'Admin.Notifications.Error') %}
      {% set errors = [errorByLocale] %}
    {% endif %}

    <div class=\"invalid-feedback-container\">
      {% if errorPopover is not null %}
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      {% else %}
        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          {% for error in errors %}
            <div class=\"text-danger\">
              {{ error }}
            </div>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endif %}
{% endmacro %}

 {#
  Helper function to render most common structure for single input
  @param form - form view to render
  @param vars - custom vars that are passed to form_widget
  @param extraVars - parameters that are not related to form_widget, but are needed for input (label, help text & etc.)
 #}
{% macro form_group_row(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
    {% set extraVars = extraVars|default({}) %}

    {# renders label above the form field if set to true #}
    {% set labelOnTop = false %}

    {% if extraVars.label_on_top is defined %}
      {% set labelOnTop = extraVars.label_on_top %}
    {% endif %}

    {% if extraVars.label is defined %}
      {% set isRequired = form.vars.required|default(false) %}

      {% if extraVars.required is defined %}
        {% set isRequired = extraVars.required %}
      {% endif %}

      <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
        {% if isRequired %}
          <span class=\"text-danger\">*</span>
        {% endif %}
        {{ extraVars.label }}

        {% if form.vars.label_attr is defined and form.vars.label_attr and form.vars.label_attr['popover'] is defined %}
          {{ include('@Common/HelpBox/helpbox.html.twig', {content: form.vars.label_attr['popover']}) }}
        {% endif %}
      </label>
    {% endif %}

    <div class=\"{{ labelOnTop ? 'col-12' : 'col-sm' }}\">
      {{ self.form_widget_with_error(form, vars, extraVars) }}
    </div>
  </div>
{% endmacro %}

{% macro multistore_switch(form, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}
  {% if form.shop_restriction_switch is defined %}
    {% set defaultLabel %}
      <strong>{{ 'Check / Uncheck all'|trans({}, 'Admin.Actions') }}</strong> <br>
      {{ 'You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.'|trans({'%yes_label%': 'Yes'|trans({}, 'Admin.Global'), '%no_label%': 'No'|trans({}, 'Admin.Global')}, 'Admin.Design.Help') }} <br>
      {{ 'If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.'|trans({}, 'Admin.Design.Help') }}
    {% endset %}

    {% if extraVars.help is not defined %}
      {% set extraVars = extraVars|merge({help: defaultLabel}) %}
    {% endif %}

    {% set vars = {attr: {class: 'js-multi-store-restriction-switch'}} %}

    {{ self.form_group_row(form.shop_restriction_switch, vars, extraVars) }}
  {% endif %}
{% endmacro %}

{% macro language_dependant_select(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' language_dependant_select')|trim}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# renders label above the form field if set to true #}
  {% set labelOnTop = false %}

  {% if extraVars.label_on_top is defined %}
    {% set labelOnTop = extraVars.label_on_top %}
  {% endif %}

  {% if extraVars.label is defined %}
    {% set isRequired = form.vars.required|default(false) %}

    {% if extraVars.required is defined %}
      {% set isRequired = extraVars.required %}
    {% endif %}

    <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
      {% if isRequired %}
        <span class=\"text-danger\">*</span>
      {% endif %}
      {{ extraVars.label }}
    </label>
  {% endif %}

  <div class=\"{{ 'col-sm-5' }}\">
    {{ self.form_widget_with_error(form, {attr: attr}, extraVars) }}
  </div>
  {% if extraVars.languages is defined and extraVars.languages is not empty %}
  <div class=\"{{ 'col-sm-3' }}\">
    <select name=\"{{ form.vars.id ~ '_language' }}\" class=\"custom-select language_dependant_select_language\">
    {% if extraVars.languages is iterable %}
      {% for language in extraVars.languages %}
        <option value=\"{{ language.id }}\">{{ language.value|raw }}</option>
      {% endfor %}
    {% endif %}
    </select>
  </div>
  {% endif %}
  </div>
{% endmacro %}
", "@PrestaShop/Admin/macros.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
