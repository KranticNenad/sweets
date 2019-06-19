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
class __TwigTemplate_7205709dd8b54ea7c71f3bab938b9693b9a789137543a87cbc9e367a5b582c6c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Porudzbina/korpa.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Korpa";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "<h1>Korpa</h1>
<form class=\"form-group\" method=\"POST\">
    <table class=\"table table-hover\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
            // line 10
            echo "            <tr class=\"admin-slatkis\">
                <td>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["slika"], "is_primarna", [], "any", false, false, false, 12) && (twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 12) == twig_get_attribute($this->env, $this->source, $context["slika"], "slatkis_id", [], "any", false, false, false, 12)))) {
                    // line 13
                    echo "                    <img class=\"admin-slatkis-image\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                    echo "assets/img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 13), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 13), "html", null, true);
                    echo " slika\" />
                    ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 15
                echo "                    <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 15), "html", null, true);
                echo " slika\"/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </td>
                <td>
                    ";
            // line 19
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 19))), "html", null, true);
            echo "<input value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" name=\"slatkis_id[]\" type=\"text\" hidden/>
                </td>
                <td>
                    <input class=\"form-control\" onkeyup=\"calculateSum()\" onchange=\"calculateSum()\" name=\"amount[]\" type=\"number\" value=\"1\" min=\"1\" step=\"0.01\" max=\"10000\" title=\"Količina mora biti izmedju 1 i 10000\" required/>
                </td>
                <td>
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "cena", [], "any", false, false, false, 25));
            echo " RSD po ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "jedinica_mere", [], "any", false, false, false, 25));
            echo "u
                    <input type=\"number\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "cena", [], "any", false, false, false, 26), "html", null, true);
            echo "\" name=\"price[]\" hidden>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>  
    <table class=\"table-borderless w-50\">
        <tr>
            <td><label for=\"sum\">Ukupna Cena:</label></td>
            <td><input class=\"form-control w-50\" type=\"text\" name=\"sum\" id=\"sum\" disabled/><input id=\"sumPost\" name=\"sumPost\" type=\"text\" hidden/></td>
            <script>
                    function calculateSum(){
                        var amounts = document.getElementsByName(\"amount[]\");
                        var prices = document.getElementsByName(\"price[]\");
                        var sum = 0.0;
                        for (var i=0; i < amounts.length; i++){
                            sum += parseFloat(amounts[i].value) * parseFloat(prices[i].value);
                        }
                        document.getElementById(\"sum\").value = sum.toFixed(2);
                        document.getElementById(\"sumPost\").value = sum.toFixed(2);
                    }
                    calculateSum();
            </script>
        </tr>
        <tr>
            <td colspan=\"2\"><span>Molimo Vas unesite Vaše podatke ispod:</span></td>
        </tr>
        <tr>
            <td>
                <label for=\"ime\">Ime: </label>
            </td>
            <td>
                <input class=\"form-control\" id=\"ime\" name=\"ime\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" title=\"Ime mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"prezime\">Prezime: </label>
            </td>
            <td>
                <input class=\"form-control\" id=\"prezime\" name=\"prezime\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ]+ ?[a-zA-ZšŠđĐčČćĆžŽ]+)+\$|\" title=\"Prezime mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"adresa\">Adresa: </label>
            </td>
            <td>
                <input class=\"form-control\" id=\"adresa\" name=\"adresa\" minlength=\"2\" maxlength=\"255\" required pattern=\"|^([a-zA-ZšŠđĐčČćĆžŽ0-9]+ ?[a-zA-ZšŠđĐčČćĆžŽ0-9]+)+\$|\" title=\"Adresa mora biti izmedju 2 i 255 slova. Ne sme biti prazno\"/>
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
        return array (  128 => 30,  118 => 26,  112 => 25,  101 => 19,  97 => 17,  88 => 15,  73 => 13,  67 => 12,  63 => 10,  59 => 9,  54 => 6,  51 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Porudzbina/korpa.html", "C:\\xampp\\htdocs\\slatkisi\\views\\Porudzbina\\korpa.html");
    }
}
