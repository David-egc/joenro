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

/* themes/contrib/gin/templates/navigation/menu-region--middle.html.twig */
class __TwigTemplate_30c3a39e1996dd7cd43ecc6cad4f27ae extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "<div class=\"admin-toolbar__item toolbar-block\">
  ";
        // line 3
        $context["menu_heading_id"] = ("menu--" . ($context["menu_name"] ?? null));
        // line 4
        yield "  <h2 id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_heading_id"] ?? null), "html", null, true);
        yield "\" class=\"toolbar-block__title visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
  <ul class=\"toolbar-menu toolbar-menu toolbar-block__content toolbar-block__content--";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_name"] ?? null), "html", null, true);
        yield "\" aria-toolbar-link__labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_heading_id"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_items", $context, 6, $this->getSourceContext())->macro_menu_items(...[($context["items"] ?? null), ($context["attribute"] ?? null)]));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "menu_name", "title", "items", "attribute", "item_id"]);        yield from [];
    }

    // line 10
    public function macro_menu_items($items = null, $attributes = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 12
                yield "    ";
                $context["item_class"] = ("toolbar-link--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, true, 12)));
                // line 13
                yield "    <li id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_id"] ?? null), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                yield " toolbar-menu__item toolbar-menu__item--level-1\" data-url=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), "html", null, true);
                yield "\">
      ";
                // line 14
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 14))) {
                    // line 15
                    yield "        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 16
                        yield "          <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), "html", null, true);
                        yield "\" class=\"toolbar-link toolbar-link--has-icon ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_class"] ?? null), "html", null, true);
                        yield "\">
            <span>";
                        // line 17
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), "html", null, true);
                        yield "</span>
          </a>
        ";
                    } else {
                        // line 20
                        yield "          <button class=\"toolbar-link toolbar-link--has-icon ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_class"] ?? null), "html", null, true);
                        yield "\">
            <span>";
                        // line 21
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 21), "html", null, true);
                        yield "</span>
          </button>
        ";
                    }
                    // line 24
                    yield "      ";
                }
                // line 25
                yield "    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "      <button class=\"toolbar-link toolbar-link--has-icon ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_class"] ?? null), "html", null, true);
                    yield "\">
        <span class=\"toolbar-link__action\">";
                    // line 27
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    yield "</span>
        <span class=\"toolbar-link__label\">";
                    // line 28
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), "html", null, true);
                    yield "</span>
      </button>
      <div class=\"toolbar-menu__submenu\">
        <div class=\"toolbar-menu__arrow-ref\"></div>
        <ul class=\"toolbar-menu\">
          <li class=\"toolbar-menu__item toolbar-menu__item--to-title\">
            <a class=\"toolbar-link toolbar-link--has-icon ";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_class"] ?? null), "html", null, true);
                    yield "\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), "html", null, true);
                    yield "\" data-url=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), "html", null, true);
                    yield "\">
              <span class=\"toolbar-link__action\">";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    yield "</span>
              <span class=\"toolbar-link__label\">";
                    // line 36
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), "html", null, true);
                    yield "</span>
            </a>
          </li>
          ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        yield "            <li class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                        yield " toolbar-menu__item toolbar-menu__item--level-2\">
              ";
                        // line 41
                        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 41))) {
                            // line 42
                            yield "                <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "html", null, true);
                            yield "\" class=\"toolbar-link\">
                <span>";
                            // line 43
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), "html", null, true);
                            yield "</span>
              </a>
              ";
                        }
                        // line 46
                        yield "              ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 47
                            yield "                <button class=\"toolbar-link\" aria-expanded=\"false\" data-url=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), "html", null, true);
                            yield "\">
                  <span class=\"toolbar-link__action\">";
                            // line 48
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                            yield "</span>
                  <span class=\"toolbar-link__label\">";
                            // line 49
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), "html", null, true);
                            yield "</span>
                </button>
                <ul class=\"toolbar-menu\">
                  ";
                            // line 52
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 53
                                yield "                    <li class=\"toolbar-menu__item toolbar-menu__item--level-3\">
                      <a href=\"";
                                // line 54
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), "html", null, true);
                                yield "\" class=\"toolbar-link\">
                        <span class=\"toolbar-link__label\">";
                                // line 55
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), "html", null, true);
                                yield "</span>
                      </a>
                    </li>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            yield "                </ul>
              ";
                        }
                        // line 61
                        yield "            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    yield "        </ul>
      </div>
    ";
                }
                // line 66
                yield "  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/navigation/menu-region--middle.html.twig";
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
        return array (  253 => 66,  248 => 63,  241 => 61,  237 => 59,  227 => 55,  223 => 54,  220 => 53,  216 => 52,  210 => 49,  206 => 48,  201 => 47,  198 => 46,  192 => 43,  187 => 42,  185 => 41,  180 => 40,  176 => 39,  170 => 36,  166 => 35,  158 => 34,  149 => 28,  145 => 27,  140 => 26,  137 => 25,  134 => 24,  128 => 21,  123 => 20,  117 => 17,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  93 => 12,  88 => 11,  75 => 10,  64 => 6,  58 => 5,  51 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/gin/templates/navigation/menu-region--middle.html.twig", "/var/www/html/pw_joenro/themes/contrib/gin/templates/navigation/menu-region--middle.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "set" => 3, "macro" => 10, "for" => 11, "if" => 14];
        static $filters = ["escape" => 4, "clean_class" => 12, "t" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'for', 'if'],
                ['escape', 'clean_class', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
