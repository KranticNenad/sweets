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
class __TwigTemplate_b35bc432e137f8b73a5fde33033add9abde940f9f84b6e0ce6bdc89dc85f9c9f extends \Twig\Template
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
                                        <input class=\"form-control\" type=\"text\" id=\"naziv\" name=\"naziv\"
                                                value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 17));
        echo "\" minlength=\"5\" maxlength=\"50\"
                                                pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" required
                                                title=\"Naziv mora da se sastoji samo od slova i belina, minimalne dužine 5, maksimalne dužine 50. Ne sme biti prazan\" />
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"cena\">Cena: </label>
                                </td>
                                <td>
                                        <input class=\"form-control\" type=\"text\" id=\"cena\" name=\"cena\"
                                                value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "cena", [], "any", false, false, false, 28));
        echo "\"
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vrste"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vrsta"]) {
            // line 40
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "vrsta_id", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 40))) {
                // line 41
                echo "                                                <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 41), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 41));
                echo "
                                                </option>
                                                ";
            } else {
                // line 44
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "vrsta_id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vrsta"], "naziv", [], "any", false, false, false, 44));
                echo "</option>
                                                ";
            }
            // line 46
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vrsta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drzave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["drzava"]) {
            // line 57
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "drzava_id", [], "any", false, false, false, 57) == twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 57))) {
                // line 58
                echo "                                                <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 58), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 58));
                echo "
                                                </option>
                                                ";
            } else {
                // line 61
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "drzava_id", [], "any", false, false, false, 61), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drzava"], "naziv", [], "any", false, false, false, 61));
                echo "</option>
                                                ";
            }
            // line 63
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drzava'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["boja"]) {
            // line 74
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "boja_id", [], "any", false, false, false, 74) == twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 74))) {
                // line 75
                echo "                                                <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 75), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 75));
                echo "
                                                </option>
                                                ";
            } else {
                // line 78
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "boja_id", [], "any", false, false, false, 78), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boja"], "naziv", [], "any", false, false, false, 78));
                echo "</option>
                                                ";
            }
            // line 80
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for=\"jedinica_mere\">Jedinica mere: </label>
                                </td>
                                <td>
                                        <select class=\"form-control\" name=\"jedinica_mere\" id=\"jedinica_mere\">
                                                ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "jedinica_mere", [], "any", false, false, false, 90) == "gram")) {
            // line 91
            echo "                                                <option selected value=\"gram\">gram</option>
                                                <option value=\"komad\">komad</option>
                                                ";
        } else {
            // line 94
            echo "                                                <option value=\"gram\">gram</option>
                                                <option selected value=\"komad\">komad</option>
                                                ";
        }
        // line 97
        echo "                                        </select>
                                </td>
                        </tr>

                </table>
                <button type=\"submit\" class=\"btn btn-primary\">
                        Izmeni slatkis
                </button>
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
        return array (  234 => 97,  229 => 94,  224 => 91,  222 => 90,  211 => 81,  205 => 80,  197 => 78,  188 => 75,  185 => 74,  181 => 73,  170 => 64,  164 => 63,  156 => 61,  147 => 58,  144 => 57,  140 => 56,  129 => 47,  123 => 46,  115 => 44,  106 => 41,  103 => 40,  99 => 39,  85 => 28,  71 => 17,  59 => 8,  55 => 6,  52 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/getEdit.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\getEdit.html");
    }
}
