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

/* @PrestaShop/Admin/Module/Includes/card_list.html.twig */
class __TwigTemplate_e86adf676e4cca23f5062cff16a56c10 extends Template
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
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
            'addon_additional_description' => [$this, 'block_addon_additional_description'],
            'module_actions' => [$this, 'block_module_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        // line 25
        $context["isModuleActive"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 25), "active", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "database", [], "any", false, false, false, 25), "active", [], "any", false, false, false, 25), "0")) : ("0"));
        // line 26
        yield "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 28
        if ((((isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 28, $this->source); })()) == "manage") && ((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 28, $this->source); })()) == "0"))) {
            yield "module-item-list-isNotActive";
        }
        yield "\"
  data-id=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\"
  data-name=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 30, $this->source); })()), "attributes", [], "any", false, false, false, 30), "displayName", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
  data-scoring=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31), "avgRate", [], "any", false, false, false, 31), "html", null, true);
        yield "\"
  data-logo=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "img", [], "any", false, false, false, 32), "html", null, true);
        yield "\"
  data-author=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "author", [], "any", false, false, false, 33), "html", null, true);
        yield "\"
  data-version=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34), "html", null, true);
        yield "\"
  data-description=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 35, $this->source); })()), "attributes", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
        yield "\"
  data-tech-name=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 36, $this->source); })()), "attributes", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "\"
  data-child-categories=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 37, $this->source); })()), "attributes", [], "any", false, false, false, 37), "categoryName", [], "any", false, false, false, 37), "html", null, true);
        yield "\"
  data-categories=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\"
  data-type=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "productType", [], "any", false, false, false, 39), "html", null, true);
        yield "\"
  data-price=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 40, $this->source); })()), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "raw", [], "any", false, false, false, 40), "html", null, true);
        yield "\"
  data-active=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\"
  data-installed=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 42), "installed", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 42, $this->source); })()), "database", [], "any", false, false, false, 42), "installed", [], "any", false, false, false, 42), "0")) : ("0")), "html", null, true);
        yield "\"
  data-last-access=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 43, $this->source); })()), "database", [], "any", false, false, false, 43), "last_access_date", [], "any", false, false, false, 43), "html", null, true);
        yield "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 49, $this->source); })()), "attributes", [], "any", false, false, false, 49), "img", [], "any", false, false, false, 49), "html", null, true);
        yield "\" class=\"text-md-center\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 49, $this->source); })()), "attributes", [], "any", false, false, false, 49), "displayName", [], "any", false, false, false, 49), "html", null, true);
        yield "\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 58
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 58, $this->source); })()), "attributes", [], "any", false, false, false, 58), "displayName", [], "any", false, false, false, 58);
        yield "\"
          >
            ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 60, $this->source); })()), "attributes", [], "any", false, false, false, 60), "displayName", [], "any", false, false, false, 60)) {
            // line 61
            yield "              ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 61, $this->source); })()), "attributes", [], "any", false, false, false, 61), "displayName", [], "any", false, false, false, 61);
            yield "

            ";
        } else {
            // line 64
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 64, $this->source); })()), "attributes", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            yield "
            ";
        }
        // line 66
        yield "          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            ";
        // line 70
        yield from $this->unwrap()->yieldBlock('addon_version', $context, $blocks);
        // line 77
        yield "          </div>
          <div>
            ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 79), "urls", [], "any", false, true, false, 79), "upgrade", [], "any", true, true, false, 79)) {
            // line 80
            yield "                <span class=\"badge badge-success my-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade available", [], "Admin.Modules.Feature"), "html", null, true);
            yield "</span>
            ";
        }
        // line 82
        yield "          </div>
        </div>
        <div class=\"col-md-8 col-lg-7 scroll-300\">
          ";
        // line 85
        yield from $this->unwrap()->yieldBlock('addon_description', $context, $blocks);
        // line 91
        yield "          ";
        yield from $this->unwrap()->yieldBlock('addon_additional_description', $context, $blocks);
        // line 96
        yield "        </div>
        <div class=\"col-lg-3 text-md-right\">
          ";
        // line 98
        yield from $this->unwrap()->yieldBlock('module_actions', $context, $blocks);
        // line 109
        yield "        </div>
        ";
        // line 110
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 110, $this->source); })())]);
        yield "
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_version(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        // line 71
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 71, $this->source); })()), "attributes", [], "any", false, false, false, 71), "productType", [], "any", false, false, false, 71) == "service")) {
            // line 72
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 72, $this->source); })()), "attributes", [], "any", false, false, false, 72), "author", [], "any", false, false, false, 72)) . "</b>")], "Admin.Modules.Feature");
            yield "
              ";
        } else {
            // line 74
            yield "                ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "version", [], "any", false, false, false, 74), "%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "author", [], "any", false, false, false, 74)) . "</b>")], "Admin.Modules.Feature");
            yield "
              ";
        }
        // line 76
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        // line 86
        yield "            ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 86, $this->source); })()), "attributes", [], "any", false, false, false, 86), "description", [], "any", false, false, false, 86);
        yield "
            ";
        // line 87
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) < Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "fullDescription", [], "any", false, false, false, 87))))) {
            // line 88
            yield "              ...
            ";
        }
        // line 90
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_additional_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        // line 92
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 92), "additional_description", [], "any", true, true, false, 92)) {
            // line 93
            yield "              ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 93, $this->source); })()), "attributes", [], "any", false, false, false, 93), "additional_description", [], "any", false, false, false, 93);
            yield "
            ";
        }
        // line 95
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_module_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        // line 99
        yield "            ";
        if ((array_key_exists("requireBulkActions", $context) && ((isset($context["requireBulkActions"]) || array_key_exists("requireBulkActions", $context) ? $context["requireBulkActions"] : (function () { throw new RuntimeError('Variable "requireBulkActions" does not exist.', 99, $this->source); })()) == true))) {
            // line 100
            yield "              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 102, $this->source); })()), "attributes", [], "any", false, false, false, 102), "displayName", [], "any", false, false, false, 102), "html", null, true);
            yield "\" data-tech-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 102, $this->source); })()), "attributes", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
            yield "\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        }
        // line 107
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 107, $this->source); })())]);
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
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
        return array (  356 => 107,  346 => 102,  342 => 100,  339 => 99,  326 => 98,  315 => 95,  309 => 93,  306 => 92,  293 => 91,  282 => 90,  278 => 88,  276 => 87,  271 => 86,  258 => 85,  247 => 76,  241 => 74,  235 => 72,  232 => 71,  219 => 70,  202 => 110,  199 => 109,  197 => 98,  193 => 96,  190 => 91,  188 => 85,  183 => 82,  177 => 80,  175 => 79,  171 => 77,  169 => 70,  163 => 66,  157 => 64,  150 => 61,  148 => 60,  143 => 58,  129 => 49,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  68 => 30,  64 => 29,  58 => 28,  54 => 26,  52 => 25,);
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
{% set isModuleActive = module.database.active|default('0') %}

<div
  class=\"module-item module-item-list col-md-12 {% if origin == 'manage' and isModuleActive == '0' %}module-item-list-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ category }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
  data-installed=\"{{ module.database.installed|default('0') }}\"
  data-last-access=\"{{ module.database.last_access_date }}\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"{{ module.attributes.img }}\" class=\"text-md-center\" alt=\"{{ module.attributes.displayName }}\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"{{ module.attributes.displayName|raw }}\"
          >
            {% if module.attributes.displayName %}
              {{ module.attributes.displayName|raw }}

            {% else %}
              {{ module.attributes.name }}
            {% endif %}
          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            {% block addon_version %}
              {% if module.attributes.productType == 'service' %}
                {{ 'Service by %author%'|trans({'%author%': '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
              {% else %}
                {{ 'v%version% - by %author%'|trans({'%version%': module.attributes.version, '%author%': '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
              {% endif %}
            {% endblock %}
          </div>
          <div>
            {% if module.attributes.urls.upgrade is defined %}
                <span class=\"badge badge-success my-1\">{{ 'Upgrade available'|trans({}, 'Admin.Modules.Feature') }}</span>
            {% endif %}
          </div>
        </div>
        <div class=\"col-md-8 col-lg-7 scroll-300\">
          {% block addon_description %}
            {{ module.attributes.description|raw }}
            {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
              ...
            {% endif %}
          {% endblock %}
          {% block addon_additional_description %}
            {% if module.attributes.additional_description is defined %}
              {{ module.attributes.additional_description|raw }}
            {% endif %}
          {% endblock %}
        </div>
        <div class=\"col-lg-3 text-md-right\">
          {% block module_actions %}
            {% if requireBulkActions is defined and requireBulkActions == true %}
              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{ module.attributes.name }}\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            {% endif %}
            {{ include('@PrestaShop/Admin/Module/Includes/action_menu.html.twig', {module: module}) }}
          {% endblock %}
        </div>
        {{ include('@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig', {module: module}) }}
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_list.html.twig");
    }
}
