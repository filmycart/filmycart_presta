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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_c4bd8a338fc266bf0c2a1353f0a5cb58 extends Template
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
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_modules' => [$this, 'block_perfs_form_modules'],
            'perfs_form_modules_form' => [$this, 'block_perfs_form_modules_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig"));

        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 27, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 28, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 29, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 30
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 30, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 31, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 32
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 32, $this->source); })()), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
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

        // line 35
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_smarty_save")]);
        yield "
  ";
        // line 36
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 56
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 56, $this->source); })()), 'form_end');
        yield "

  ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_debug_mode_save")]);
        yield "
  ";
        // line 59
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode', $context, $blocks);
        // line 79
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 79, $this->source); })()), 'form_end');
        yield "

  ";
        // line 81
        yield from $this->unwrap()->yieldBlock('perfs_form_modules', $context, $blocks);
        // line 124
        yield "
  ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 125, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_optional_features_save")]);
        yield "
  ";
        // line 126
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features', $context, $blocks);
        // line 155
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 155, $this->source); })()), 'form_end');
        yield "

  ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 157, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_combine_compress_cache_save")]);
        yield "
  ";
        // line 158
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc', $context, $blocks);
        // line 187
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 187, $this->source); })()), 'form_end');
        yield "

  ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 189, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_media_servers_save")]);
        yield "
  ";
        // line 190
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers', $context, $blocks);
        // line 219
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 219, $this->source); })()), 'form_end');
        yield "

  ";
        // line 221
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 221, $this->source); })()), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_caching_save")]);
        yield "
  ";
        // line 222
        yield from $this->unwrap()->yieldBlock('perfs_form_caching', $context, $blocks);
        // line 244
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 244, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        // line 37
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 44
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 47
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache_form"));

        // line 45
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["smartyForm"]) || array_key_exists("smartyForm", $context) ? $context["smartyForm"] : (function () { throw new RuntimeError('Variable "smartyForm" does not exist.', 45, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        // line 60
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 67
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 70
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_debug_mode_form"));

        // line 68
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["debugModeForm"]) || array_key_exists("debugModeForm", $context) ? $context["debugModeForm"] : (function () { throw new RuntimeError('Variable "debugModeForm" does not exist.', 68, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules"));

        // line 82
        yield "    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.", [], "Admin.Advparameters.Help"), "html_attr");
        yield "\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 100
        yield from $this->unwrap()->yieldBlock('perfs_form_modules_form', $context, $blocks);
        // line 120
        yield "        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_modules_form"));

        // line 101
        yield "            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable non built-in modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
              </label>

              <div class=\"col-sm input-container\">
                <a
                  class=\"btn btn-primary pointer\"
                  href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_module_disable_non_builtin");
        yield "\"
                  id=\"disableNonBuiltInModulesBtn\"
                  data-confirm-title=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable all non-built-in modules?", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
                  data-confirm-button-label=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "\"
                  data-close-button-label=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
                >
                  ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "
                </a>
              </div>
            </div>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        // line 127
        yield "    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 143
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 146
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_optional_features_form"));

        // line 144
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["optionalFeaturesForm"]) || array_key_exists("optionalFeaturesForm", $context) ? $context["optionalFeaturesForm"] : (function () { throw new RuntimeError('Variable "optionalFeaturesForm" does not exist.', 144, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        // line 159
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 175
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc_form', $context, $blocks);
        // line 178
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_ccc_form"));

        // line 176
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["combineCompressCacheForm"]) || array_key_exists("combineCompressCacheForm", $context) ? $context["combineCompressCacheForm"] : (function () { throw new RuntimeError('Variable "combineCompressCacheForm" does not exist.', 176, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        // line 191
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 207
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 210
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_media_servers_form"));

        // line 208
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["mediaServersForm"]) || array_key_exists("mediaServersForm", $context) ? $context["mediaServersForm"] : (function () { throw new RuntimeError('Variable "mediaServersForm" does not exist.', 208, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        // line 223
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 230
        yield from $this->unwrap()->yieldBlock('perfs_form_caching_form', $context, $blocks);
        // line 233
        yield "
          ";
        // line 234
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => (isset($context["memcacheForm"]) || array_key_exists("memcacheForm", $context) ? $context["memcacheForm"] : (function () { throw new RuntimeError('Variable "memcacheForm" does not exist.', 234, $this->source); })())]);
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "perfs_form_caching_form"));

        // line 231
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cachingForm"]) || array_key_exists("cachingForm", $context) ? $context["cachingForm"] : (function () { throw new RuntimeError('Variable "cachingForm" does not exist.', 231, $this->source); })()), 'widget');
        yield "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 247
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

        // line 248
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/performance_preferences.bundle.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        yield "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_add"), "js"), "html", null, true);
        yield "',
      'removeServerUrl': '";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_delete"), "js"), "html", null, true);
        yield "',
      'testServerUrl': '";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_test"), "js"), "html", null, true);
        yield "'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        yield "\"></script>
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
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
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
        return array (  861 => 275,  838 => 255,  834 => 254,  830 => 253,  824 => 250,  820 => 249,  815 => 248,  802 => 247,  788 => 231,  775 => 230,  759 => 239,  751 => 234,  748 => 233,  746 => 230,  739 => 226,  734 => 223,  721 => 222,  707 => 208,  694 => 207,  678 => 214,  672 => 210,  670 => 207,  661 => 201,  651 => 194,  646 => 191,  633 => 190,  619 => 176,  606 => 175,  590 => 182,  584 => 178,  582 => 175,  573 => 169,  563 => 162,  558 => 159,  545 => 158,  531 => 144,  518 => 143,  502 => 150,  496 => 146,  494 => 143,  485 => 137,  475 => 130,  470 => 127,  457 => 126,  441 => 115,  436 => 113,  432 => 112,  428 => 111,  423 => 109,  414 => 103,  410 => 101,  397 => 100,  383 => 120,  381 => 100,  371 => 93,  360 => 85,  355 => 82,  342 => 81,  328 => 68,  315 => 67,  299 => 74,  293 => 70,  291 => 67,  284 => 63,  279 => 60,  266 => 59,  252 => 45,  239 => 44,  223 => 51,  217 => 47,  215 => 44,  208 => 40,  203 => 37,  190 => 36,  176 => 244,  174 => 222,  170 => 221,  164 => 219,  162 => 190,  158 => 189,  152 => 187,  150 => 158,  146 => 157,  140 => 155,  138 => 126,  134 => 125,  131 => 124,  129 => 81,  123 => 79,  121 => 59,  117 => 58,  111 => 56,  109 => 36,  104 => 35,  91 => 34,  80 => 25,  78 => 32,  76 => 31,  74 => 30,  72 => 29,  70 => 28,  68 => 27,  55 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain 'Admin.Advparameters.Feature' %}
{% form_theme smartyForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme debugModeForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme optionalFeaturesForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme combineCompressCacheForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme mediaServersForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% form_theme cachingForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block content %}
  {{ form_start(smartyForm, {attr: {class: 'form'}, action: path('admin_performance_smarty_save')}) }}
  {% block perfs_form_smarty_cache %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        {{ 'Smarty'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_smarty_cache_form %}
            {{ form_widget(smartyForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(smartyForm) }}

  {{ form_start(debugModeForm, {attr: {class: 'form'}, action: path('admin_performance_debug_mode_save')}) }}
  {% block perfs_form_debug_mode %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        {{ 'Debug mode'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_debug_mode_form %}
            {{ form_widget(debugModeForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(debugModeForm) }}

  {% block perfs_form_modules %}
    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        {{ 'Modules'|trans }}

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"{{ 'This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.'|trans({}, 'Admin.Advparameters.Help')|escape('html_attr') }}\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_modules_form %}
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                {{ 'Disable non built-in modules'|trans({}, 'Admin.Advparameters.Feature') }}
              </label>

              <div class=\"col-sm input-container\">
                <a
                  class=\"btn btn-primary pointer\"
                  href=\"{{ path('admin_performance_module_disable_non_builtin') }}\"
                  id=\"disableNonBuiltInModulesBtn\"
                  data-confirm-title=\"{{ 'Disable all non-built-in modules?'|trans({}, 'Admin.Advparameters.Feature') }}\"
                  data-confirm-button-label=\"{{ 'Disable'|trans({}, 'Admin.Actions') }}\"
                  data-close-button-label=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"
                >
                  {{ 'Disable'|trans({}, 'Admin.Actions') }}
                </a>
              </div>
            </div>
          {% endblock %}
        </div>
      </div>
    </div>
  {% endblock %}

  {{ form_start(optionalFeaturesForm, {attr: {class: 'form'}, action: path('admin_performance_optional_features_save')}) }}
  {% block perfs_form_optional_features %}
    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        {{ 'Optional features'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'Some features can be disabled in order to improve performance.'|trans({}, 'Admin.Advparameters.Help') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_optional_features_form %}
            {{ form_widget(optionalFeaturesForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(optionalFeaturesForm) }}

  {{ form_start(combineCompressCacheForm, {attr: {class: 'form'}, action: path('admin_performance_combine_compress_cache_save')}) }}
  {% block perfs_form_ccc %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        {{ 'CCC (Combine, Compress and Cache)'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.'|trans({}, 'Admin.Advparameters.Help') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_ccc_form %}
            {{ form_widget(combineCompressCacheForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(combineCompressCacheForm) }}

  {{ form_start(mediaServersForm, {attr: {class: 'form'}, action: path('admin_performance_media_servers_save')}) }}
  {% block perfs_form_media_servers %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        {{ 'Media servers (use only with CCC)'|trans }}

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"{{ 'You must enter another domain, or subdomain, in order to use cookieless static content.'|trans({}, 'Admin.Advparameters.Feature') }}\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_media_servers_form %}
            {{ form_widget(mediaServersForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(mediaServersForm) }}

  {{ form_start(cachingForm, {attr: {class: 'form'}, action: path('admin_performance_caching_save')}) }}
  {% block perfs_form_caching %}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        {{ 'Caching'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {% block perfs_form_caching_form %}
            {{ form_widget(cachingForm) }}
          {% endblock %}

          {{ include('@AdvancedParameters/memcache_servers.html.twig', {form: memcacheForm}) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  {% endblock %}
  {{ form_end(cachingForm) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/new-theme/public/performance_preferences.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePage.js') }}\"></script>
  <script>
    var configuration = {
      'addServerUrl': '{{ url('admin_servers_add')|e('js') }}',
      'removeServerUrl': '{{ url('admin_servers_delete')|e('js') }}',
      'testServerUrl': '{{ url('admin_servers_test')|e('js') }}'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePageUI.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
