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

/* AdminSlatkisManagement/getAdd.html */
class __TwigTemplate_b15f4db86ef76685b46298ba03538aa3c7fb61b91e0b030f112f2e18dda279ba extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "AdminSlatkisManagement/getAdd.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Slatkiš - Dodaj";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
<div>
        <form class=\"slatkis-form\" method=\"POST\">
            <div>
                    <label for=\"naziv\">Naziv: </label>
                    <input type=\"text\" id=\"naziv\" name=\"naziv\" value=\"\" minlength=\"5\" maxlength=\"50\" pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" required title=\"Naziv mora da se sastoji samo od slova i belina, minimalne dužine 5, maksimalne dužine 50. Ne sme biti prazan\"/>
            </div>
            <div>
                    <label for=\"cena\">Cena: </label>
                    <input type=\"text\" id=\"cena\" name=\"cena\" value=\"1\" pattern=\"|^[1-9][0-9]{0,4}(\\.[0-9]{1,2})?\$|\" required title=\"cena mora da ima 5 brojeva pre decimalne tačke i 2 broja posle, ne sme biti nula\"/>
            </div>
            <div>
                    <label for=\"vrsta_id\">Vrsta: </label>
                    <select name=\"vrsta_id\" id=\"vrsta_id\">
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vrste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vrsta"]) {
            // line 21
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 21));
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </select>
            </div>
            <div>
                    <label for=\"drzava_id\">Drzava: </label>
                    <select name=\"drzava_id\" id=\"drzava_id\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drzave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["drzava"]) {
            // line 29
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 29));
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drzava'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
            </div>
            <div>
                    <label for=\"boja_id\">Boja: </label>
                    <select name=\"boja_id\" id=\"boja_id\">
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            // line 37
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 37));
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
            </div>
            <div>
                    <label for=\"jedinica_mere\">Jedinica mere: </label>
                    <select name=\"jedinica_mere\" id=jedinica_mere>
                            <option selected value=\"gram\">gram</option>
                            <option value=\"komad\">komad</option>
                    </select>
            </div>
            <div>
                <button type=\"submit\">
                    Dodaj slatkis
                </button>
            </div>
        </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminSlatkisManagement/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  118 => 37,  114 => 36,  107 => 31,  96 => 29,  92 => 28,  85 => 23,  74 => 21,  70 => 20,  54 => 6,  51 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/getAdd.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\getAdd.html");
    }
}
