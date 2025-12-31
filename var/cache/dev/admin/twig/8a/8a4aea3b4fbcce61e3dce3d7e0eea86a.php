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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig */
class __TwigTemplate_242925610c2883639966bea5c95b2e95 extends Template
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

        // line 37
        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 37);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 37, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 38
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 38);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 38, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"));

        // line 25
        yield "
";
        // line 36
        yield "
";
        // line 39
        yield "
";
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 46
        yield "
";
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 65
        yield "
";
        // line 67
        yield "
";
        // line 68
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 135
        yield "
";
        // line 136
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 139
        yield "
";
        // line 140
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 43
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-horizontal"))]);
        // line 44
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 50
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 51
            yield "    ";
            if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })()) === null)) {
                // line 52
                yield "      <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
    ";
            } elseif ((            // line 53
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 53, $this->source); })()) === false)) {
                // line 54
                yield "      ";
                // line 55
                yield "    ";
            } else {
                // line 56
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 56, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 56, $this->source); })()), "class", [], "any", false, false, false, 56), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 57
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 59
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 63
        yield "form-control-label";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 63), "attr", [], "any", false, true, false, 63), "disabled", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "attr", [], "any", false, false, false, 63), "disabled", [], "any", false, false, false, 63)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 63), "disabled", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "disabled", [], "any", false, false, false, 63)))) {
            yield " disabled";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 69
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 70
            yield "    ";
            // line 71
            yield "    ";
            if (array_key_exists("label_tag_name", $context)) {
                // line 72
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'label');
                yield "
    ";
            }
            // line 74
            yield "
    ";
            // line 75
            $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 75)->unwrap();
            // line 76
            yield "    ";
            $context["disabledField"] = false;
            // line 77
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "attr", [], "any", false, true, false, 77), "disabled", [], "any", true, true, false, 77) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "attr", [], "any", false, false, false, 77), "disabled", [], "any", false, false, false, 77))) {
                // line 78
                yield "      ";
                $context["disabledField"] = true;
                // line 79
                yield "    ";
            }
            // line 80
            yield "
    ";
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 81), "external_link", [], "any", true, true, false, 81)) {
                // line 82
                yield "        ";
                $context["externalLink"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "external_link", [], "any", false, false, false, 82);
                // line 83
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["externalLink"] ?? null), "position", [], "any", true, true, false, 83)) {
                    // line 84
                    yield "            ";
                    $context["position"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["externalLink"]) || array_key_exists("externalLink", $context) ? $context["externalLink"] : (function () { throw new RuntimeError('Variable "externalLink" does not exist.', 84, $this->source); })()), "position", [], "any", false, false, false, 84);
                    // line 85
                    yield "        ";
                } else {
                    // line 86
                    yield "            ";
                    $context["position"] = "append";
                    // line 87
                    yield "        ";
                }
                // line 88
                yield "    ";
            } else {
                // line 89
                yield "        ";
                $context["position"] = "append";
                // line 90
                yield "    ";
            }
            // line 91
            yield "
    <div class=\"";
            // line 92
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield from             $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 92, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 92, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 92, $this->source); })()))) {
                yield " has-error";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", true, true, false, 92) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 92, $this->source); })()), "visible", [], "any", false, false, false, 92))) {
                yield " d-none";
            }
            yield "\">
      ";
            // line 93
            $context["multistoreCheckboxName"] = ((isset($context["multistore_field_prefix"]) || array_key_exists("multistore_field_prefix", $context) ? $context["multistore_field_prefix"] : (function () { throw new RuntimeError('Variable "multistore_field_prefix" does not exist.', 93, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93));
            // line 94
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 94), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 94, $this->source); })()), [], "any", true, true, false, 94)) {
                // line 95
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "parent", [], "any", false, false, false, 95), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 95, $this->source); })()), [], "any", false, false, false, 95), 'errors');
                yield "
        ";
                // line 96
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "parent", [], "any", false, false, false, 96), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 96, $this->source); })()), [], "any", false, false, false, 96), 'widget');
                yield "
      ";
            }
            // line 98
            yield "
      ";
            // line 99
            if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 99, $this->source); })()) == "prepend")) {
                // line 100
                yield "        ";
                if ( !array_key_exists("label_tag_name", $context)) {
                    // line 101
                    yield "        <div class=\"form-control-label flex flex-col items-end\">
            ";
                    // line 102
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'label');
                    // line 103
                    yield from                     $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
                    // line 104
                    yield "</div>
        ";
                }
                // line 106
                yield "      ";
            } else {
                // line 107
                yield "        ";
                if ( !array_key_exists("label_tag_name", $context)) {
                    // line 108
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'label');
                    yield "
        ";
                }
                // line 110
                yield "      ";
            }
            // line 111
            yield "
      <div class=\"";
            // line 112
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            if ((isset($context["disabledField"]) || array_key_exists("disabledField", $context) ? $context["disabledField"] : (function () { throw new RuntimeError('Variable "disabledField" does not exist.', 112, $this->source); })())) {
                yield " disabled";
            }
            yield "\">";
            // line 113
            yield from             $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'widget');
            yield "
        ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'errors', ["attr" => ["fieldError" => true]]);
            // line 116
            yield from             $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
            // line 117
            if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 117, $this->source); })()) == "below")) {
                // line 118
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 120
            yield "      </div>
      ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 121), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), [], "any", true, true, false, 121) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "parent", [], "any", false, false, false, 121), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "multistore_dropdown", [], "any", false, false, false, 121) != false))) {
                // line 122
                yield "        ";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "parent", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "multistore_dropdown", [], "any", false, false, false, 122);
                yield "
      ";
            }
            // line 124
            yield "
      ";
            // line 125
            if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 125, $this->source); })()) == "append")) {
                // line 126
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 128
            yield "    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        // line 130
        yield "
  ";
        // line 131
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 131, $this->source); })())) {
            // line 132
            yield "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 137
        yield "col-sm input-container";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 141
        yield "form-group row";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 141)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 141, $this->source); })()), "class", [], "any", false, false, false, 141), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  477 => 141,  464 => 140,  453 => 137,  440 => 136,  427 => 132,  425 => 131,  422 => 130,  420 => 69,  415 => 128,  412 => 126,  410 => 125,  407 => 124,  401 => 122,  399 => 121,  396 => 120,  393 => 118,  391 => 117,  389 => 116,  387 => 115,  383 => 114,  381 => 113,  375 => 112,  372 => 111,  369 => 110,  363 => 108,  360 => 107,  357 => 106,  353 => 104,  351 => 103,  349 => 102,  346 => 101,  343 => 100,  341 => 99,  338 => 98,  333 => 96,  328 => 95,  325 => 94,  323 => 93,  312 => 92,  309 => 91,  306 => 90,  303 => 89,  300 => 88,  297 => 87,  294 => 86,  291 => 85,  288 => 84,  285 => 83,  282 => 82,  280 => 81,  277 => 80,  274 => 79,  271 => 78,  268 => 77,  265 => 76,  263 => 75,  260 => 74,  254 => 72,  251 => 71,  249 => 70,  247 => 69,  234 => 68,  220 => 63,  207 => 62,  196 => 50,  192 => 59,  189 => 57,  186 => 56,  183 => 55,  181 => 54,  179 => 53,  174 => 52,  171 => 51,  169 => 50,  156 => 49,  145 => 44,  143 => 43,  130 => 42,  119 => 140,  116 => 139,  114 => 136,  111 => 135,  109 => 68,  106 => 67,  103 => 65,  101 => 62,  98 => 61,  96 => 49,  93 => 48,  90 => 46,  88 => 42,  85 => 41,  82 => 39,  79 => 36,  76 => 25,  42 => 38,  35 => 37,);
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

{#
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_horizontal_layout meaning the form labels/inputs are displayed
# are displayed horizontally in a column way.
#
# Unlike our prestashop_ui_kit_base.html.twig theme which is the parent of this theme and is based on bootstrap_4_layout
# where labels/inputs are displayed one under the other.
#}

{% use 'bootstrap_4_horizontal_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{# overrides from bootstrap_4_horizontal_layout #}

{% block form_start -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
  {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
  {% apply spaceless %}
    {% if label is same as(null) %}
      <div class=\"{{ block('form_label_class') }}\"></div>
    {% elseif label is same as(false) %}
      {# Use false as label is you don't want an empty column #}
    {% else %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
      {{- parent() -}}
    {% endif %}
  {% endapply %}
{%- endblock form_label %}

{% block form_label_class -%}
  form-control-label{% if (form.vars.attr.disabled is defined and form.vars.attr.disabled) or (form.vars.disabled is defined and form.vars.disabled) %} disabled{% endif %}
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
  {% apply spaceless %}
    {# In horizontal theme when using a title for label it needs to be outside of the row div #}
    {% if label_tag_name is defined %}
      {{ form_label(form) }}
    {% endif %}

    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% set disabledField = false %}
    {% if form.vars.attr.disabled is defined and form.vars.attr.disabled %}
      {% set disabledField = true %}
    {% endif %}

    {% if form.vars.external_link is defined %}
        {% set externalLink = form.vars.external_link %}
        {% if externalLink.position is defined %}
            {% set position = externalLink.position %}
        {% else %}
            {% set position = 'append' %}
        {% endif %}
    {% else %}
        {% set position = 'append' %}
    {% endif %}

    <div class=\"{{ block('form_row_class') }}{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if (attr.visible is defined and not attr.visible) %} d-none{% endif %}\">
      {% set multistoreCheckboxName = multistore_field_prefix ~ form.vars.name %}
      {% if attribute(form.parent, multistoreCheckboxName) is defined %}
        {{ form_errors(attribute(form.parent, multistoreCheckboxName)) }}
        {{ form_widget(attribute(form.parent, multistoreCheckboxName)) }}
      {% endif %}

      {% if position == 'prepend' %}
        {% if label_tag_name is not defined %}
        <div class=\"form-control-label flex flex-col items-end\">
            {{ form_label(form) }}
            {{- block('form_external_link') -}}
        </div>
        {% endif %}
      {% else %}
        {% if label_tag_name is not defined %}
          {{ form_label(form) }}
        {% endif %}
      {% endif %}

      <div class=\"{{ block('form_group_class') }}{% if disabledField %} disabled{% endif %}\">
        {{- block('form_prepend_alert') -}}
        {{ form_widget(form) }}
        {{ form_errors(form, {attr: {fieldError: true}}) }}
        {{- block('form_append_alert') -}}
        {% if position == 'below' %}
          {{- block('form_external_link') -}}
        {% endif %}
      </div>
      {% if attribute(form.parent, form.vars.name) is defined and attribute(form.parent, form.vars.name).vars.multistore_dropdown != false %}
        {{ attribute(form.parent, form.vars.name).vars.multistore_dropdown|raw }}
      {% endif %}

      {% if position == 'append' %}
        {{- block('form_external_link') -}}
      {% endif %}
    </div>
  {% endapply %}

  {% if column_breaker %}
    <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{% block form_group_class -%}
  col-sm input-container
{%- endblock form_group_class %}

{% block form_row_class -%}
  form-group row{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}
{%- endblock form_row_class %}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
