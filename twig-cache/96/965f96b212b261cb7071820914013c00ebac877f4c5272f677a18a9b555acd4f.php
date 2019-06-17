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

/* AdminSlatkisManagement/getEdit.html */
class __TwigTemplate_6473721ee67e818bdec87d447763647130f5c1429763187e731ecd079edab1c0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "AdminSlatkisManagement/getEdit.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 3)), "html", null, true);
        echo " - Izmeni";
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
                    <input type=\"text\" id=\"naziv\" name=\"naziv\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 11));
        echo "\"/>
            </div>
            <div>
                    <label for=\"cena\">Cena: </label>
                    <input type=\"number\" id=\"cena\" min=\"1\" step=\"0.01\" name=\"cena\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "cena", [], "any", false, false, false, 15));
        echo "\"/>
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
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "vrsta_id", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 21))) {
                // line 22
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 22));
                echo "</option>
                            ";
            } else {
                // line 24
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 24));
                echo "</option>
                            ";
            }
            // line 26
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </select>
            </div>
            <div>
                    <label for=\"drzava_id\">Drzava: </label>
                    <select name=\"drzava_id\" id=\"drzava_id\">
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drzave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["drzava"]) {
            // line 33
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "drzava_id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 33))) {
                // line 34
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 34));
                echo "</option>
                            ";
            } else {
                // line 36
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 36));
                echo "</option>
                            ";
            }
            // line 38
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drzava'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
            </div>
            <div>
                    <label for=\"boja_id\">Boja: </label>
                    <select name=\"boja_id\" id=\"boja_id\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            // line 45
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "boja_id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 45))) {
                // line 46
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 46), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 46));
                echo "</option>
                            ";
            } else {
                // line 48
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 48), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 48));
                echo "</option>
                            ";
            }
            // line 50
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </select>
            </div>
            <div>
                    <label for=\"jedinica_mere\">Jedinica mere: </label>
                    <select name=\"jedinica_mere\" id=\"jedinica_mere\">
                            ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "jedinica_mere", [], "any", false, false, false, 56) == "gram")) {
            // line 57
            echo "                            <option selected value=\"gram\">gram</option>
                            <option value=\"komad\">komad</option>
                            ";
        } else {
            // line 60
            echo "                            <option value=\"gram\">gram</option>
                            <option selected value=\"komad\">komad</option>
                            ";
        }
        // line 63
        echo "                    </select>
            </div>
            <div>
                <button type=\"submit\">
                    Izmeni slatkis
                </button>
            </div>
        </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminSlatkisManagement/getEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 63,  192 => 60,  187 => 57,  185 => 56,  178 => 51,  172 => 50,  164 => 48,  156 => 46,  153 => 45,  149 => 44,  142 => 39,  136 => 38,  128 => 36,  120 => 34,  117 => 33,  113 => 32,  106 => 27,  100 => 26,  92 => 24,  84 => 22,  81 => 21,  77 => 20,  69 => 15,  62 => 11,  55 => 6,  52 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/getEdit.html", "D:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\getEdit.html");
    }
}
