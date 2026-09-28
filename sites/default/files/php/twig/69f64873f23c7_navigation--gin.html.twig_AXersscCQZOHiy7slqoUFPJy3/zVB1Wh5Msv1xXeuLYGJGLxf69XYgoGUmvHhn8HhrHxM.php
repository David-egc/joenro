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

/* themes/contrib/gin/templates/navigation/navigation--gin.html.twig */
class __TwigTemplate_7e77390f44b51b5c3c023a24ba14cfd6 extends Template
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
        yield "<aside class=\"admin-toolbar\" id=\"admin-toolbar\" data-drupal-admin-styles>
  ";
        // line 3
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  ";
        // line 5
        $context["title_menu"] = "admin-toolbar-title";
        // line 6
        yield "
  ";
        // line 8
        yield "  <nav id=\"menu-builder\" class=\"admin-toolbar__content\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_menu"] ?? null), "html", null, true);
        yield "\">
    <h3 id=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_menu"] ?? null), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar content"));
        yield "</h3>

    <div class=\"admin-toolbar__header\">
      <div class=\"navigation-menu-wrapper menu--logo admin-toolbar__logo\">
        <ul class=\"toolbar-menu\" data-once=\"toolbar-menu\" aria-labelledby=\"menu--logo\">
          <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
            ";
        // line 15
        if ((($tmp = ($context["icon_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "              <a class=\"toolbar-link\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\">
                <img alt=\"";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["icon_path"] ?? null)), "html", null, true);
            yield "\" loading=\"eager\" />
              </a>
            ";
        } else {
            // line 20
            yield "              <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--gin-home\">
                <span>";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "</span>
              </a>
            ";
        }
        // line 24
        yield "          </li>
        </ul>
      </div>
    </div>

    ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_middle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 31
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["section"], "html", null, true);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  </nav>

  ";
        // line 36
        yield "  <div class=\"admin-toolbar__sticky-section\">
    ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_bottom"] ?? null), "html", null, true);
        yield "
  </div>
</aside>
<script>
  if (localStorage.getItem('Drupal.navigation.sidebarExpanded') !== 'false') {
    document.documentElement.classList.add('admin-toolbar-expanded');
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_path", "menu_top", "menu_middle", "menu_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/navigation/navigation--gin.html.twig";
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
        return array (  129 => 37,  126 => 36,  122 => 33,  113 => 31,  109 => 30,  105 => 29,  98 => 24,  92 => 21,  87 => 20,  79 => 17,  74 => 16,  72 => 15,  61 => 9,  56 => 8,  53 => 6,  51 => 5,  47 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/gin/templates/navigation/navigation--gin.html.twig", "/var/www/html/pw_joenro/themes/contrib/gin/templates/navigation/navigation--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 5, "if" => 15, "for" => 30];
        static $filters = ["escape" => 8, "t" => 9];
        static $functions = ["path" => 16, "file_url" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 't'],
                ['path', 'file_url'],
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
