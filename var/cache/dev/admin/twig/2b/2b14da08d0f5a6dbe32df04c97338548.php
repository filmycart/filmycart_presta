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

/* @PrestaShop/Admin/Component/Layout/multistore_header.html.twig */
class __TwigTemplate_89bf2800715148cbf4dbf5a0283f8c63 extends Template
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
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig"));

        // line 25
        yield from $this->unwrap()->yieldBlock('multistore_header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multistore_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        // line 26
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 26, $this->source); })()), "isMultistoreUsed", [], "any", false, false, false, 26) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26)))) {
            // line 27
            yield "    <div
      id=\"header-multishop\"
      class=\"header-multishop";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 29, $this->source); })()), "isAllShopContext", [], "any", false, false, false, 29)) {
                yield " header-multishop-allshops";
            } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 29, $this->source); })()), "contextColor", [], "any", false, false, false, 29))) {
                yield " header-multishop-default";
            }
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 29, $this->source); })()), "isTitleDark", [], "any", false, false, false, 29)) {
                yield " header-multishop-dark";
            } else {
                yield " header-multishop-bright";
            }
            yield "\"
      ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "contextShopId", [], "any", false, false, false, 30)) {
                yield "data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "contextShopId", [], "any", false, false, false, 30), "html", null, true);
                yield "\"";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 30)) {
                yield "data-group-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 30, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 30), "html", null, true);
                yield "\"";
            } else {
                yield "data-all-shops=\"1\"";
            }
            // line 31
            yield "      ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "colorConfigLink", [], "any", false, false, false, 31))) {
                yield "data-header-color-notification=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "colorConfigLink", [], "any", false, false, false, 31)) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                yield "\"";
            }
            // line 32
            yield "      data-checkbox-notification=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            yield "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 34
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "contextColor", [], "any", false, false, false, 34))) {
                yield " style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "contextColor", [], "any", false, false, false, 34), "html", null, true);
                yield ";\"";
            }
            yield ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 36, $this->source); })()), "contextShopId", [], "any", false, false, false, 36)) {
                // line 37
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 37, $this->source); })()), "isTitleDark", [], "any", false, false, false, 37)]);
                yield "
          ";
            } else {
                // line 39
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "isTitleDark", [], "any", false, false, false, 39)]);
                yield "
          ";
            }
            // line 41
            yield "
          <h2 class=\"header-multishop-title\">
            ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 43)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                yield " ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "contextName", [], "any", false, false, false, 43), "html", null, true);
            yield "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 52, $this->source); })()), "contextShopId", [], "any", false, false, false, 52)) {
                // line 53
                yield "        <div class=\"header-multishop-right\">
          ";
                // line 54
                yield from $this->unwrap()->yieldBlock('multishop_header_right', $context, $blocks);
                // line 57
                yield "        </div>
      ";
            }
            // line 59
            yield "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 63
            yield from $this->unwrap()->yieldBlock('search_shops', $context, $blocks);
            // line 71
            yield "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              ";
            // line 73
            yield from $this->unwrap()->yieldBlock('all_shops_item', $context, $blocks);
            // line 87
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 87, $this->source); })()), "groupList", [], "any", false, false, false, 87));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 88
                yield "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 88)) {
                    yield " first-group-item";
                }
                yield "\">
                  ";
                // line 89
                yield from $this->unwrap()->yieldBlock('shop_group_item', $context, $blocks);
                // line 96
                yield "                </li>

                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 98));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 99
                    yield "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 100
                    yield from $this->unwrap()->yieldBlock('shop_item', $context, $blocks);
                    // line 114
                    yield "                  </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            yield "\"></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multishop_header_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        // line 55
        yield "            <a class=\"header-multishop-view-action\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 55, $this->source); })()), "link", [], "any", false, false, false, 55), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 55, $this->source); })()), "contextShopId", [], "any", false, false, false, 55)], "method", false, false, false, 55), "html", null, true);
        yield "\" target=\"_blank\" rel=\"nofollow\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">visibility</i></a>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        // line 64
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 64, $this->source); })()), "isLockedToAllShopContext", [], "any", false, false, false, 64) == false)) {
            // line 65
            yield "                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\" data-no-results=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            yield "\" data-searching=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            yield "\">
                </div>
              ";
        }
        // line 70
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_shops_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        // line 74
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 74, $this->source); })()), "allShopsAllowed", [], "any", false, false, false, 74)) {
            // line 75
            yield "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 76, $this->source); })()), "isAllShopContext", [], "any", false, false, false, 76)) {
                // line 77
                yield "                    <i class=\"material-icons\">check</i>
                  ";
            } else {
                // line 79
                yield "                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  ";
            }
            // line 81
            yield "                  <a class=\"multishop-modal-all-name\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
            yield "\">
                    <span>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All stores", [], "Admin.Global"), "html", null, true);
            yield "</span>
                  </a>
                </li>
                ";
        }
        // line 86
        yield "              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_group_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        // line 90
        yield "                    <span class=\"multishop-modal-color-container";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 90, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 90, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 90) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"";
        // line 92
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 92, $this->source); })()), "color", [], "any", false, false, false, 92))) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 92, $this->source); })()), "color", [], "any", false, false, false, 92), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92), "updateshop_group" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 94, $this->source); })())), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94)), "html", null, true);
        yield "</a>
                  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        // line 101
        yield "                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 102, $this->source); })()), "contextShopId", [], "any", false, false, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 102, $this->source); })()), "contextShopId", [], "any", false, false, false, 102) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 104
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 104, $this->source); })()), "color", [], "any", false, false, false, 104))) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 104, $this->source); })()), "color", [], "any", false, false, false, 104), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "updateshop" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name";
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 106, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 106) == false)) {
            yield " multishop-modal-no-url\"";
        } else {
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl((isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 106, $this->source); })())), "html", null, true);
            yield "\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), "html", null, true);
        yield "</a>
                      </div>
                      ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 108, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 108)) {
            // line 109
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 109, $this->source); })()), "link", [], "any", false, false, false, 109), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)], "method", false, false, false, 109), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        } else {
            // line 111
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111), "addshop_url" => 1]), "html", null, true);
            yield "\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        }
        // line 113
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  532 => 113,  524 => 111,  516 => 109,  514 => 108,  501 => 106,  488 => 104,  481 => 102,  478 => 101,  465 => 100,  450 => 94,  437 => 92,  429 => 90,  416 => 89,  405 => 86,  398 => 82,  393 => 81,  389 => 79,  385 => 77,  383 => 76,  380 => 75,  377 => 74,  364 => 73,  353 => 70,  343 => 67,  339 => 65,  336 => 64,  323 => 63,  307 => 55,  294 => 54,  280 => 123,  272 => 117,  258 => 116,  243 => 114,  241 => 100,  238 => 99,  221 => 98,  217 => 96,  215 => 89,  208 => 88,  190 => 87,  188 => 73,  184 => 71,  182 => 63,  176 => 59,  172 => 57,  170 => 54,  167 => 53,  165 => 52,  149 => 43,  145 => 41,  139 => 39,  133 => 37,  131 => 36,  122 => 34,  116 => 32,  109 => 31,  97 => 30,  84 => 29,  80 => 27,  77 => 26,  54 => 25,);
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
{% block multistore_header %}
  {% if this.isMultistoreUsed and app.request is not null %}
    <div
      id=\"header-multishop\"
      class=\"header-multishop{% if this.isAllShopContext %} header-multishop-allshops{% elseif this.contextColor is empty %} header-multishop-default{% endif %}{% if this.isTitleDark %} header-multishop-dark{% else %} header-multishop-bright{% endif %}\"
      {% if this.contextShopId %}data-shop-id=\"{{ this.contextShopId }}\"{% elseif this.contextShopGroupId %}data-group-id=\"{{ this.contextShopGroupId }}\"{% else %}data-all-shops=\"1\"{% endif %}
      {% if this.colorConfigLink is not empty %}data-header-color-notification=\"{{ 'Customize your multistore header, [1]pick a color[/1] for this store context.'|trans({'[1]': '<a href=\"' ~ this.colorConfigLink ~ '\">', '[/1]': '</a>'}, 'Admin.Navigation.Header') }}\"{% endif %}
      data-checkbox-notification=\"{{ 'To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.'|trans({}, 'Admin.Navigation.Header') ~ ' ' }}\"
    >
      <div class=\"header-multishop-top-bar\"{% if this.contextColor is not empty %} style=\"background-color: {{ this.contextColor }};\"{% endif %}>
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          {% if this.contextShopId %}
            {{ include('@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig', {isTitleDark: this.isTitleDark}) }}
          {% else %}
            {{ include('@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig', {isTitleDark: this.isTitleDark}) }}
          {% endif %}

          <h2 class=\"header-multishop-title\">
            {% if this.contextShopGroupId %}{{ 'Group'|trans({}, 'Admin.Global') ~ ' ' }} {% endif %}{{ this.contextName }}
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      {% if this.contextShopId %}
        <div class=\"header-multishop-right\">
          {% block multishop_header_right %}
            <a class=\"header-multishop-view-action\" href=\"{{ this.link.getBaseLink(this.contextShopId) }}\" target=\"_blank\" rel=\"nofollow\">{{ 'View my store'|trans({}, 'Admin.Navigation.Header') }} <i class=\"material-icons\">visibility</i></a>
          {% endblock %}
        </div>
      {% endif %}

      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            {% block search_shops %}
              {% if this.isLockedToAllShopContext == false %}
                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"{{ 'Search store name'|trans({}, 'Admin.Navigation.Header') }}\" data-no-results=\"{{ 'No results found for'|trans({}, 'Admin.Global') }}\" data-searching=\"{{ 'Searching for'|trans({}, 'Admin.Global') }}\">
                </div>
              {% endif %}
            {% endblock %}

            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              {% block all_shops_item %}
                {% if this.allShopsAllowed %}
                <li class=\"multishop-modal-all multishop-modal-item\">
                  {% if this.isAllShopContext %}
                    <i class=\"material-icons\">check</i>
                  {% else %}
                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  {% endif %}
                  <a class=\"multishop-modal-all-name\" href=\"{{ multistore_url() }}\">
                    <span>{{ 'All stores'|trans({}, 'Admin.Global') }}</span>
                  </a>
                </li>
                {% endif %}
              {% endblock %}
              {% for group in this.groupList %}
                <li class=\"multishop-modal-group-item multishop-modal-item{% if loop.first %} first-group-item{% endif %}\">
                  {% block shop_group_item %}
                    <span class=\"multishop-modal-color-container{% if this.contextShopGroupId and this.contextShopGroupId == group.id %} multishop-modal-color-check{% endif %}\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"{% if group.color is not empty %} style=\"background-color: {{ group.color }};\"{% endif %} href=\"{{ getAdminLink('AdminShopGroup', true, {id_shop_group: group.id, updateshop_group: true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ 'Edit color'|trans({}, 'Admin.Global') }}\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"{{ multistore_group_url(group) }}\">{{ 'Group'|trans({}, 'Admin.Global') ~ ' ' ~ group.name }}</a>
                  {% endblock %}
                </li>

                {% for shop in group.shops %}
                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    {% block shop_item %}
                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container{% if this.contextShopId and this.contextShopId == shop.id %} multishop-modal-color-check{% endif %}\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"{% if shop.color is not empty %} style=\"background-color: {{ shop.color }};\"{% endif %} href=\"{{ getAdminLink('AdminShop', true, {shop_id: shop.id, updateshop: true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ 'Edit color'|trans({}, 'Admin.Global') }}\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name{% if shop.hasMainUrl() == false %} multishop-modal-no-url\"{% else %}\" href=\"{{ multistore_shop_url(shop) }}\"{% endif %}>{{ shop.name }}</a>
                      </div>
                      {% if shop.hasMainUrl() %}
                        <a class=\"multishop-modal-shop-view\" href=\"{{ this.link.getBaseLink(shop.id) }}\" target=\"_blank\" rel=\"noreferrer\">{{ 'View my store'|trans({}, 'Admin.Navigation.Header') }} <i class=\"material-icons\">visibility</i></a>
                      {% else %}
                        <a class=\"multishop-modal-shop-view\" href=\"{{ getAdminLink('AdminShopUrl', true, {shop_id: shop.id, addshop_url: 1}) }}\" rel=\"noreferrer\">{{ 'Configure URL'|trans({}, 'Admin.Actions') }} <i class=\"material-icons\">visibility</i></a>
                      {% endif %}
                    {% endblock %}
                  </li>
                {% endfor %}
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"{{ asset('themes/new-theme/public/multistore_header.bundle.js') }}\"></script>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig", "/var/www/html/filmycart_presta/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/multistore_header.html.twig");
    }
}
