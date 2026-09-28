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

/* themes/custom/joenro/templates/views/slide-testimonios/views-view-fields--testimonios.html.twig */
class __TwigTemplate_3b95bb7ca8aa3bd7b384ee228d1b75e4 extends Template
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
        // line 32
        yield "<div class=\"item-testimonio\">

    <div class=\"contenido\">
        <div class=\"descripcion\">
            ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 36), "separator", [], "any", false, false, true, 36), "html", null, true);
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 37), "wrapper_element", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 38), "wrapper_element", [], "any", false, false, true, 38), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 39), "wrapper_attributes", [], "any", false, false, true, 39), "html", null, true);
            yield ">";
        }
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 41), "label", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 42), "label_element", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 43), "label_element", [], "any", false, false, true, 43), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 44
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 44), "label_attributes", [], "any", false, false, true, 44), "html", null, true);
                yield "
            >";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 45), "label", [], "any", false, false, true, 45), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 46
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 46), "label_suffix", [], "any", false, false, true, 46), "html", null, true);
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 47), "label_element", [], "any", false, false, true, 47), "html", null, true);
                yield ">";
            } else {
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 49), "label", [], "any", false, false, true, 49), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 50
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 50), "label_suffix", [], "any", false, false, true, 50), "html", null, true);
            }
        }
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 53), "element_type", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 54), "element_type", [], "any", false, false, true, 54), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 55
($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 55), "element_attributes", [], "any", false, false, true, 55), "html", null, true);
            yield "
            >";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 56), "content", [], "any", false, false, true, 56), "html", null, true);
            yield "
            </";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 57), "element_type", [], "any", false, false, true, 57), "html", null, true);
            yield ">";
        } else {
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 59), "content", [], "any", false, false, true, 59), "html", null, true);
        }
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 61), "wrapper_element", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_descripcion", [], "any", false, false, true, 62), "wrapper_element", [], "any", false, false, true, 62), "html", null, true);
            yield ">";
        }
        // line 64
        yield "        </div>
        <div class=\"titulo d-flex\">
                  ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 66), "separator", [], "any", false, false, true, 66), "html", null, true);
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 67), "wrapper_element", [], "any", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 68), "wrapper_element", [], "any", false, false, true, 68), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 69), "wrapper_attributes", [], "any", false, false, true, 69), "html", null, true);
            yield ">";
        }
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 71), "label", [], "any", false, false, true, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 72), "label_element", [], "any", false, false, true, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 73), "label_element", [], "any", false, false, true, 73), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 74
($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 74), "label_attributes", [], "any", false, false, true, 74), "html", null, true);
                yield "
            >";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 75), "label", [], "any", false, false, true, 75), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 75), "label_suffix", [], "any", false, false, true, 75), "html", null, true);
                // line 76
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 76), "label_element", [], "any", false, false, true, 76), "html", null, true);
                yield ">";
            } else {
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 78), "label", [], "any", false, false, true, 78), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 78), "label_suffix", [], "any", false, false, true, 78), "html", null, true);
            }
        }
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 81), "element_type", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 82), "element_type", [], "any", false, false, true, 82), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 83
($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 83), "element_attributes", [], "any", false, false, true, 83), "html", null, true);
            yield "
            >";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 84), "content", [], "any", false, false, true, 84), "html", null, true);
            yield "
            </";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 85), "element_type", [], "any", false, false, true, 85), "html", null, true);
            yield ">";
        } else {
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 87), "content", [], "any", false, false, true, 87), "html", null, true);
        }
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 89), "wrapper_element", [], "any", false, false, true, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitulo", [], "any", false, false, true, 90), "wrapper_element", [], "any", false, false, true, 90), "html", null, true);
            yield ">";
        }
        // line 92
        yield "            
            ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 93), "separator", [], "any", false, false, true, 93), "html", null, true);
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 94), "wrapper_element", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 95), "wrapper_element", [], "any", false, false, true, 95), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["fields"] ?? null), "title", [], "any", false, false, true, 96), "wrapper_attributes", [], "any", false, false, true, 96), "html", null, true);
            yield ">";
        }
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 98), "label", [], "any", false, false, true, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 99), "label_element", [], "any", false, false, true, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 100), "label_element", [], "any", false, false, true, 100), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 100), "label_attributes", [], "any", false, false, true, 100), "html", null, true);
                yield "
            >";
                // line 101
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 101), "label", [], "any", false, false, true, 101), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 101), "label_suffix", [], "any", false, false, true, 101), "html", null, true);
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 102
($context["fields"] ?? null), "title", [], "any", false, false, true, 102), "label_element", [], "any", false, false, true, 102), "html", null, true);
                yield ">";
            } else {
                // line 104
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 104), "label", [], "any", false, false, true, 104), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 104), "label_suffix", [], "any", false, false, true, 104), "html", null, true);
            }
        }
        // line 107
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 107), "element_type", [], "any", false, false, true, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 108), "element_type", [], "any", false, false, true, 108), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 108), "element_attributes", [], "any", false, false, true, 108), "html", null, true);
            // line 109
            yield "
            >";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 110), "content", [], "any", false, false, true, 110), "html", null, true);
            yield "
            </";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 111), "element_type", [], "any", false, false, true, 111), "html", null, true);
            yield ">";
        } else {
            // line 113
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 113), "content", [], "any", false, false, true, 113), "html", null, true);
        }
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 115), "wrapper_element", [], "any", false, false, true, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 116), "wrapper_element", [], "any", false, false, true, 116), "html", null, true);
            yield ">";
        }
        // line 118
        yield "        </div>

      
  
       

    </div>

    <div class=\"imagen\">
        ";
        // line 127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 127), "separator", [], "any", false, false, true, 127), "html", null, true);
        // line 128
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 128), "wrapper_element", [], "any", false, false, true, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 129), "wrapper_element", [], "any", false, false, true, 129), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 130
($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 130), "wrapper_attributes", [], "any", false, false, true, 130), "html", null, true);
            yield ">";
        }
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 132), "label", [], "any", false, false, true, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 133), "label_element", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 134
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 134), "label_element", [], "any", false, false, true, 134), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 135
($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 135), "label_attributes", [], "any", false, false, true, 135), "html", null, true);
                yield "
        >";
                // line 136
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 136), "label", [], "any", false, false, true, 136), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 136), "label_suffix", [], "any", false, false, true, 136), "html", null, true);
                // line 137
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 137), "label_element", [], "any", false, false, true, 137), "html", null, true);
                yield ">";
            } else {
                // line 139
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 139), "label", [], "any", false, false, true, 139), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 139), "label_suffix", [], "any", false, false, true, 139), "html", null, true);
            }
        }
        // line 142
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 142), "element_type", [], "any", false, false, true, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 143
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 143), "element_type", [], "any", false, false, true, 143), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 144
($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 144), "element_attributes", [], "any", false, false, true, 144), "html", null, true);
            yield "
        >";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 145), "content", [], "any", false, false, true, 145), "html", null, true);
            yield "
        </";
            // line 146
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 146), "element_type", [], "any", false, false, true, 146), "html", null, true);
            yield ">";
        } else {
            // line 148
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 148), "content", [], "any", false, false, true, 148), "html", null, true);
        }
        // line 150
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 150), "wrapper_element", [], "any", false, false, true, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_imagen", [], "any", false, false, true, 151), "wrapper_element", [], "any", false, false, true, 151), "html", null, true);
            yield ">";
        }
        // line 153
        yield "    </div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/joenro/templates/views/slide-testimonios/views-view-fields--testimonios.html.twig";
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
        return array (  317 => 153,  312 => 151,  310 => 150,  307 => 148,  303 => 146,  299 => 145,  295 => 144,  292 => 143,  290 => 142,  285 => 139,  280 => 137,  277 => 136,  273 => 135,  270 => 134,  268 => 133,  266 => 132,  262 => 130,  259 => 129,  257 => 128,  255 => 127,  244 => 118,  239 => 116,  237 => 115,  234 => 113,  230 => 111,  226 => 110,  223 => 109,  219 => 108,  217 => 107,  212 => 104,  208 => 102,  204 => 101,  198 => 100,  196 => 99,  194 => 98,  190 => 96,  187 => 95,  185 => 94,  183 => 93,  180 => 92,  175 => 90,  173 => 89,  170 => 87,  166 => 85,  162 => 84,  158 => 83,  155 => 82,  153 => 81,  148 => 78,  143 => 76,  140 => 75,  136 => 74,  133 => 73,  131 => 72,  129 => 71,  125 => 69,  122 => 68,  120 => 67,  118 => 66,  114 => 64,  109 => 62,  107 => 61,  104 => 59,  100 => 57,  96 => 56,  92 => 55,  89 => 54,  87 => 53,  83 => 50,  81 => 49,  77 => 47,  74 => 46,  72 => 45,  68 => 44,  65 => 43,  63 => 42,  61 => 41,  57 => 39,  54 => 38,  52 => 37,  50 => 36,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/joenro/templates/views/slide-testimonios/views-view-fields--testimonios.html.twig", "/var/www/html/pw_joenro/themes/custom/joenro/templates/views/slide-testimonios/views-view-fields--testimonios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 37];
        static $filters = ["escape" => 36];
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
