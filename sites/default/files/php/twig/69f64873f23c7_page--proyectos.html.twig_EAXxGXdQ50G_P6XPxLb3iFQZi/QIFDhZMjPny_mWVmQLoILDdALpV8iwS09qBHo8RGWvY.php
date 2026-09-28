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

/* themes/custom/joenro/templates/page--proyectos.html.twig */
class __TwigTemplate_366ae3032183c9e5ef7f9b5ff7a2fe6d extends Template
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
        // line 46
        yield "<div class=\"layout-container\">

    <header role=\"banner\" class=\"encabezado\">

        ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 50), "html", null, true);
        yield "
       
    </header>
    ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carrusel", [], "any", false, false, true, 53), "html", null, true);
        yield "

    ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nosotros", [], "any", false, false, true, 55), "html", null, true);
        yield "

 ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenido_secundario", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "    <div class=\"container\">
        <div class=\"row align-items-start\">

            <div class=\"contenido-principal col-12 col-xl-8 pt-custom-60 pb-2 px-0\">
                ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), "html", null, true);
            yield "
            </div>
            <div class=\"contenido_secundario col-12 col-xl-4 pt-custom-60\">
                ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenido_secundario", [], "any", false, false, true, 65), "html", null, true);
            yield "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 70
            yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <main class=\"contenido-principal col-12 pt-custom-60 pb-2 px-0\">
                ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), "html", null, true);
            yield "
            </main>
        </div>
    </div>
    ";
        }
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "estadisticas", [], "any", false, false, true, 78), "html", null, true);
        yield "
    ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "clientes", [], "any", false, false, true, 79), "html", null, true);
        yield "   
    ";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "casos_exito", [], "any", false, false, true, 80), "html", null, true);
        yield "
    ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "testimonios", [], "any", false, false, true, 81), "html", null, true);
        yield "
  
   ";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blog", [], "any", false, false, true, 83), "html", null, true);
        yield "
 ";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contacto", [], "any", false, false, true, 84), "html", null, true);
        yield "
    <footer class=\"site-footer\">
        <div class=\"container \">
            <div class=\"row justify-content-center\">

                <div class=\"col-12 col-md-6 col-lg-4 \">
                    ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 90), "html", null, true);
        yield "
                </div>
                <div class=\"col-12 col-md-3 col-lg-2 offset-md-1\">
                    ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 93), "html", null, true);
        yield "
                </div>
                <div class=\"col-12 col-md-3 col-lg-2\">
                    ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 96), "html", null, true);
        yield "
                </div>
                <div class=\"col-12  col-lg-3\">
                    ";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 99), "html", null, true);
        yield "
                </div>

            </div>
        </div>
        <div class=\"container-fluid linea-footer\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer5", [], "any", false, false, true, 107), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </footer>

   
<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
  <div class=\"offcanvas-header\">
    <h5 class=\"offcanvas-title\" id=\"offcanvasRightLabel\"></h5>
    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
  </div>
  <div class=\"offcanvas-body\">
    ";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu_responsive", [], "any", false, false, true, 120), "html", null, true);
        yield "
  </div>
</div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/joenro/templates/page--proyectos.html.twig";
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
        return array (  176 => 120,  160 => 107,  149 => 99,  143 => 96,  137 => 93,  131 => 90,  122 => 84,  118 => 83,  113 => 81,  109 => 80,  105 => 79,  101 => 78,  93 => 73,  88 => 70,  80 => 65,  74 => 62,  68 => 58,  66 => 57,  61 => 55,  56 => 53,  50 => 50,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/joenro/templates/page--proyectos.html.twig", "/var/www/html/pw_joenro/themes/custom/joenro/templates/page--proyectos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 57];
        static $filters = ["escape" => 50];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
