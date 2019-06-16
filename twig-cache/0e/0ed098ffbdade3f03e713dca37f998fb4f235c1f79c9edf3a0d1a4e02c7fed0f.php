<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Slatkis/show.html */
class __TwigTemplate_61473f7c8be69ab71304d159d150d0df4a303ecda48ec6598f685e4291e47701 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("_global/index.html", "Slatkis/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 3)), "html", null, true);
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"slatkis-show\">
        <div id=\"carousel-slatkisi\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
            // line 11
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                // line 12
                echo "                        <div class=\"carousel-item active\">
                    ";
            } else {
                // line 14
                echo "                        <div class=\"carousel-item\">
                    ";
            }
            // line 16
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "slatkis_id", [], "any", false, false, false, 16), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"slatkis\" />
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>

            <a class=\"carousel-control-prev\" href=\"#carousel-slatkisi\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>

            <a class=\"carousel-control-next\" href=\"#carousel-slatkisi\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
        <div>
            Naziv: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 32));
        echo "
        </div>
        <div>
            Cena po ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "jedinica_mere", [], "any", false, false, false, 35));
        echo "u: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "cena", [], "any", false, false, false, 35));
        echo " RSD
        </div>
        <div>
            Vrsta: 
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vrste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vrsta"]) {
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "vrsta_id", [], "any", false, false, false, 39) == twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 39))) {
                // line 40
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 40));
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
        <div>
            Država: 
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drzave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["drzava"]) {
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "drzava_id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 45))) {
                // line 46
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 46));
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drzava'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
        <div>
            Boja: 
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "boja_id", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 51))) {
                // line 52
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 52));
                echo "
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </div>
        <div>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "slatkis_id", [], "any", false, false, false, 56), "html", null, true);
        echo "/edit\">Izmeni</a>
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "slatkis_id", [], "any", false, false, false, 57), "html", null, true);
        echo "/delete\">Izbrisi</a>
            <a href=\"#\" onclick=\"addItem(";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "slatkis_id", [], "any", false, false, false, 58), "html", null, true);
        echo ");\">Dodaj u korpu</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Slatkis/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 58,  203 => 57,  199 => 56,  195 => 54,  185 => 52,  180 => 51,  175 => 48,  165 => 46,  160 => 45,  155 => 42,  145 => 40,  140 => 39,  131 => 35,  125 => 32,  110 => 19,  88 => 16,  84 => 14,  80 => 12,  77 => 11,  60 => 10,  54 => 6,  51 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Slatkis/show.html", "D:\\xampp\\htdocs\\slatkisi\\views\\Slatkis\\show.html");
    }
}
