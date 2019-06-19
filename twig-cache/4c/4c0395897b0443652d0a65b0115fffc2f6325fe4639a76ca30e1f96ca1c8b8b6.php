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

/* AdminPorudzbinaManagement/porudzbine.html */
class __TwigTemplate_4169e5a28d001710a3e21a13ae71bf8a9eb9dcbdbd847a648b260cc0d91984ac extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "AdminPorudzbinaManagement/porudzbine.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Porudžbine";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "<div>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/profile\" class=\"btn btn-info\">Nazad</a>
    <table class=\"admin-porudzbine table table-hover\">
        <tr class=\"admin-porudzbina-header\">
            <th>
                id porudžbine
            </th>
            <th>
                status
            </th>
            <th>
                datum
            </th>
            <th>
                plaćeno
            </th>
            <th>
                id kupca
            </th>
            <th>
                ukupno
            </th>
        </tr>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["porudzbine"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["porudzbina"]) {
            // line 30
            echo "            <tr class=\"admin-porudzbina\" onclick=\"window.location='";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/porudzbine/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "porudzbina_id", [], "any", false, false, false, 30), "html", null, true);
            echo "';\">
                <td>
                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "porudzbina_id", [], "any", false, false, false, 32))), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "status", [], "any", false, false, false, 35))), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "datum", [], "any", false, false, false, 38));
            echo "
                </td>
                <td>
                    ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["porudzbina"], "is_placeno", [], "any", false, false, false, 41) == 0)) {
                // line 42
                echo "                    Ne
                    ";
            } else {
                // line 44
                echo "                    Da
                    ";
            }
            // line 46
            echo "                </td>
                <td>
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "kupac_id", [], "any", false, false, false, 48))), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["porudzbina"], "ukupno", [], "any", false, false, false, 51))), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['porudzbina'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminPorudzbinaManagement/porudzbine.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  132 => 51,  126 => 48,  122 => 46,  118 => 44,  114 => 42,  112 => 41,  106 => 38,  100 => 35,  94 => 32,  86 => 30,  82 => 29,  57 => 7,  54 => 6,  51 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPorudzbinaManagement/porudzbine.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminPorudzbinaManagement\\porudzbine.html");
    }
}
