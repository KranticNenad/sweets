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

/* Slatkis/postAdd.html */
class __TwigTemplate_66065d882a5c7dbf16f9a33baca6456161630ea51a35adb810a193168ebbd8be extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Slatkis/postAdd.html", 1);
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
                    <input type=\"text\" id=\"naziv\" name=\"naziv\" value=\"\"/>
            </div>
            <div>
                    <label for=\"cena\">Cena: </label>
                    <input type=\"number\" id=\"cena\" min=\"1\" step=\"0.01\" name=\"cena\" value=\"\"/>
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
                    <select name=\"drzava_id\">
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
                    <select name=\"boja_id\">
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
                    <select name=\"jedinica_mere\">
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
        return "Slatkis/postAdd.html";
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
        return new Source("", "Slatkis/postAdd.html", "D:\\xampp\\htdocs\\views\\Slatkis\\postAdd.html");
    }
}
