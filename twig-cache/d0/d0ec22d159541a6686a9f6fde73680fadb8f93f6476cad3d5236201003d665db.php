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

/* AdminPorudzbinaManagement/show.html */
class __TwigTemplate_f9f2b45684484642b0902e3fcb462a0ed6bdda594b12f4e3432bc60b41fa7332 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "AdminPorudzbinaManagement/show.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Porudžbina ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["porudzbina"] ?? null), "porudzbina_id", [], "any", false, false, false, 3)), "html", null, true);
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/porudzbine\" class=\"btn btn-info\">Nazad</a>
    <table class=\"table-bordered w-25\">
        <tr>
            <td colspan=\"2\">
                <span>Kupac:</span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Ime: </span>
            </td>
            <td>
                <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["kupac"] ?? null), "ime", [], "any", false, false, false, 18)), "html", null, true);
        echo "</span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Prezime: </span>
            </td>
            <td>
                <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["kupac"] ?? null), "prezime", [], "any", false, false, false, 26)), "html", null, true);
        echo "</span>
            </td>
        </tr>
        <tr>
            <td>
                <span>Adresa: </span>
            </td>
            <td>
                <span>";
        // line 34
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["kupac"] ?? null), "adresa", [], "any", false, false, false, 34)), "html", null, true);
        echo "</span>
            </td>
        </tr>
    </table>
    <br>
    <table class=\"table-bordered w-50\">
        <tr>
            <td colspan=\"3\">
                Stavke:
            </td>
        </tr>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stavke"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stavka"]) {
            // line 46
            echo "        <tr>
            <td>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
                // line 49
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["stavka"], "slatkis_id", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 50), "html", null, true);
                    echo "
                    ";
                }
                // line 52
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </td>
            <td>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
                // line 56
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["stavka"], "slatkis_id", [], "any", false, false, false, 56) == twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stavka"], "kolicina", [], "any", false, false, false, 57), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "jedinica_mere", [], "any", false, false, false, 57), "html", null, true);
                    echo "(a)
                    ";
                }
                // line 59
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </td>
            <td>
                ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stavka"], "cena", [], "any", false, false, false, 62), "html", null, true);
            echo " RSD
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stavka'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        <tr>
            <td>
                <span>Ukupno </span>
            </td>
            <td colspan=\"2\">
                <span>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["porudzbina"] ?? null), "ukupno", [], "any", false, false, false, 71), "html", null, true);
        echo " RSD</span>
            </td>
        </tr>
    </table>
    
    <form class=\"form-group\" method=\"POST\">
        <input name=\"porudzbina_id\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["porudzbina"] ?? null), "porudzbina_id", [], "any", false, false, false, 77), "html", null, true);
        echo "\" hidden/>
        <table class=\"table-borderless w-25\">
            <tr>
                <td>
                    Status:
                </td>
                <td>
                    <select name=\"status\" class=\"form-control\">
                        ";
        // line 85
        $context["statuses"] = [0 => "realizovana", 1 => "u obradi", 2 => "odbijena"];
        // line 86
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 87
            echo "                            ";
            if (($context["status"] == twig_get_attribute($this->env, $this->source, ($context["porudzbina"] ?? null), "status", [], "any", false, false, false, 87))) {
                // line 88
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 90
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo "</option>
                            ";
            }
            // line 92
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Plaćeno:
                </td>
                <td>
                    <select name=\"is_placeno\" class=\"form-control\">
                        ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["porudzbina"] ?? null), "is_placeno", [], "any", false, false, false, 102) == 0)) {
            // line 103
            echo "                            <option value=\"0\" selected>Nije Plaćeno</option>
                            <option value=\"1\">Plaćeno</option>
                        ";
        } else {
            // line 106
            echo "                            <option value=\"0\">Nije Plaćeno</option>
                            <option value=\"1\" selected>Plaćeno</option>
                        ";
        }
        // line 109
        echo "                    </select>
                </td>
            </tr>
        </table>
        <button type=\"submit\" class=\"btn btn-primary\">Izmeni</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AdminPorudzbinaManagement/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 109,  250 => 106,  245 => 103,  243 => 102,  232 => 93,  226 => 92,  218 => 90,  210 => 88,  207 => 87,  202 => 86,  200 => 85,  189 => 77,  180 => 71,  173 => 66,  163 => 62,  159 => 60,  153 => 59,  145 => 57,  142 => 56,  138 => 55,  134 => 53,  128 => 52,  122 => 50,  119 => 49,  115 => 48,  111 => 46,  107 => 45,  93 => 34,  82 => 26,  71 => 18,  55 => 6,  52 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPorudzbinaManagement/show.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminPorudzbinaManagement\\show.html");
    }
}
