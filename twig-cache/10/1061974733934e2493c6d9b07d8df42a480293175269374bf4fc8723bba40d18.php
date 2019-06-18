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

/* Porudzbina/korpa.html */
class __TwigTemplate_e5baff861b51dce90964ef7608920b1fe4a58a8917df50248bf91865db7b9794 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Porudzbina/korpa.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<h1>Korpa</h1>
<form class=\"form-group\">
    <table class=\"table table-hover\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
            // line 8
            echo "            <tr class=\"admin-slatkis\">
                <td>
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["slika"], "is_primarna", [], "any", false, false, false, 10) && (twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 10) == twig_get_attribute($this->env, $this->source, $context["slika"], "slatkis_id", [], "any", false, false, false, 10)))) {
                    // line 11
                    echo "                    <img class=\"admin-slatkis-image\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                    echo "assets/img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 11), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 11), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 11), "html", null, true);
                    echo " slika\" />
                    ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 13
                echo "                    <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 13), "html", null, true);
                echo " slika\"/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </td>
                <td>
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 17))), "html", null, true);
            echo "
                </td>
                <td>
                    <input class=\"form-control\" onkeyup=\"calculateSum()\" onchange=\"calculateSum()\" name=\"amount[]\" type=\"number\" value=\"1\" min=\"1\" step=\"0.01\" max=\"10000\" title=\"Količina mora biti izmedju 1 i 10000\" required/>
                </td>
                <td>
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "cena", [], "any", false, false, false, 23));
            echo " RSD po ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "jedinica_mere", [], "any", false, false, false, 23));
            echo "u
                    <input value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "cena", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"price[]\" hidden disabled>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </table>
    <div>
        Ukupna Cena = <input type=\"text\" name=\"sum\" id=\"sum\" disabled/>
        <script>
            function calculateSum(){
                var amounts = document.getElementsByName(\"amount[]\");
                var prices = document.getElementsByName(\"price[]\");
                var sum = 0.0;
                for (var i=0; i < amounts.length; i++){
                    sum += parseFloat(amounts[i].value) * parseFloat(prices[i].value);
                }
                document.getElementById(\"sum\").value = sum;
            }
        </script>
    </div>
    <span>Molimo Vas unesite Vaše podatke ispod:</span>
    <table>
        <tr>
            <td>
                <label for=\"ime\">Ime: </label>
            </td>
            <td>
                <input id=\"ime\" name=\"ime\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" title=\"Ime mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"prezime\">Prezime: </label>
            </td>
            <td>
                <input id=\"prezime\" name=\"prezime\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" title=\"Prezime mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"adresa\">Adresa: </label>
            </td>
            <td>
                <input id=\"adresa\" name=\"adresa\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" title=\"Adresa mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
            </td> 
        </tr>
    </table>
    <button type=\"submit\" class=\"btn btn-primary\">Poruči</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "Porudzbina/korpa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  109 => 24,  103 => 23,  94 => 17,  90 => 15,  81 => 13,  66 => 11,  60 => 10,  56 => 8,  52 => 7,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Porudzbina/korpa.html", "D:\\xampp\\htdocs\\slatkisi\\views\\Porudzbina\\korpa.html");
    }
}
