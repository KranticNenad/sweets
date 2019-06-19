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
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/slatkisi\" class=\"btn btn-info\">Nazad</a><br>
        <form class=\"slatkis-form form-group\" method=\"POST\">
                <table>
                        <tr>
                                <td>
                                        <label for=\"naziv\">Naziv: </label>
                                </td>
                                <td>
                                        <input class=\"form-control\" type=\"text\" id=\"naziv\" name=\"naziv\" value=\"\"
                                                minlength=\"5\" maxlength=\"50\"
                                                pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" required
                                                title=\"Naziv mora da se sastoji samo od slova i belina, minimalne dužine 5, maksimalne dužine 50. Ne sme biti prazan\" />
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"cena\">Cena: </label>
                                </td>
                                <td>
                                        <input class=\"form-control\" type=\"text\" id=\"cena\" name=\"cena\" value=\"1\"
                                                pattern=\"|^[1-9][0-9]{0,4}(\\.[0-9]{1,2})?\$|\" required
                                                title=\"cena mora da ima 5 brojeva pre decimalne tačke i 2 broja posle, ne sme biti nula\" />
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"vrsta_id\">Vrsta: </label>
                                </td>
                                <td>
                                        <select class=\"form-control\" name=\"vrsta_id\" id=\"vrsta_id\">
                                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vrste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vrsta"]) {
            // line 39
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 39));
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"drzava_id\">Drzava: </label>
                                </td>
                                <td>
                                        <select class=\"form-control\" name=\"drzava_id\" id=\"drzava_id\">
                                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drzave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["drzava"]) {
            // line 51
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 51));
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drzava'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"boja_id\">Boja: </label>
                                </td>
                                <td>
                                        <select class=\"form-control\" name=\"boja_id\" id=\"boja_id\">
                                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            // line 63
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 63));
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"jedinica_mere\">Jedinica mere: </label>
                                </td>
                                <td>
                                        <select class=\"form-control\" name=\"jedinica_mere\" id=jedinica_mere>
                                                <option selected value=\"gram\">gram</option>
                                                <option value=\"komad\">komad</option>
                                        </select>
                                </td>
                        </tr>
                </table>
                <button type=\"submit\" class=\"btn btn-primary\">
                        Dodaj slatkis
                </button>
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
        return array (  158 => 65,  147 => 63,  143 => 62,  132 => 53,  121 => 51,  117 => 50,  106 => 41,  95 => 39,  91 => 38,  58 => 8,  54 => 6,  51 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/getAdd.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\getAdd.html");
    }
}
