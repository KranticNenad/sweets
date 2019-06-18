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

/* Slatkis/filter.html */
class __TwigTemplate_d5805a78af4f9e77b27cf927003f78eee611e219eb819ea15f70e636efbe3a68 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("_global/index.html", "Slatkis/filter.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"filters form-group\">
        <form method=\"POST\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "filter\">
                <input class=\"form-control\" type=\"number\" value=\"0\" min=\"0\" max=\"99999.99\" step=\"0.01\" name=\"min-price\" placeholder=\"Cena od\" title=\"Cena ne sme biti veca od 99999.99\"/>
                <input class=\"form-control\" type=\"number\" value=\"1000\" min=\"0\" max=\"99999.99\" step=\"0.01\" name=\"max-price\" placeholder=\"Cena do\" title=\"Cena ne sme biti veca od 99999.99\"/>
            <select name=\"vrsta\" class=\"form-control\">
                <option selected value=\"0\">Vrsta</option>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vrste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vrsta"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 11), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
            <select name=\"boja\" class=\"form-control\">
                    <option selected value=\"0\">Boja</option>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            // line 17
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </select>
            <select name=\"sastojak\" class=\"form-control\">
                    <option selected value=\"0\">Sastojak</option>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sastojci"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sastojak"]) {
            // line 23
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sastojak"], "sastojak_id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sastojak"], "naziv", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sastojak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </select>
            <button type=\"submit\" class=\"btn btn-primary\">Pretraži</button>
        </form>
</div>
<div class=\"slatkisi\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
            // line 31
            echo "    <div class=\"slatkis\">
        <a href=\"#\" class=\"cart-link\" onclick=\"addItem(";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 32), "html", null, true);
            echo ");\"><i class=\"fas fa-cart-plus\"></i></a>
        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "slatkis/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
        <div>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["slika"], "is_primarna", [], "any", false, false, false, 35) && (twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["slika"], "slatkis_id", [], "any", false, false, false, 35)))) {
                    // line 36
                    echo "            <img class=\"slatkis-image\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                    echo "assets/img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 36), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 36), "html", null, true);
                    echo " slika\" />
            ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 38
                echo "            <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 38), "html", null, true);
                echo " slika\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </div>
        <div>
            ";
            // line 42
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 42))), "html", null, true);
            echo "
        </div>
        <div>
            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "cena", [], "any", false, false, false, 45));
            echo " RSD po ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "jedinica_mere", [], "any", false, false, false, 45));
            echo "u
        </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "Slatkis/filter.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  178 => 45,  172 => 42,  168 => 40,  159 => 38,  144 => 36,  138 => 35,  131 => 33,  127 => 32,  124 => 31,  120 => 30,  113 => 25,  102 => 23,  98 => 22,  93 => 19,  82 => 17,  78 => 16,  73 => 13,  62 => 11,  58 => 10,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Slatkis/filter.html", "C:\\xampp\\htdocs\\slatkisi\\views\\Slatkis\\filter.html");
    }
}
