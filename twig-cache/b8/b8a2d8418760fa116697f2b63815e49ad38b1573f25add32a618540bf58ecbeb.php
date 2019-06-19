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

/* AdminSlatkisManagement/slatkisi.html */
class __TwigTemplate_6f06d46fcd375c86bee7b60e8908b48710845bb9f1a7086b8f865b8bc62a47fd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "AdminSlatkisManagement/slatkisi.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<div>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/profile\" class=\"btn btn-info\">Nazad</a><br>
    <div class=\"options\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/slatkisi/add\" class=\"btn btn-success\">Dodaj novi slatkiš</a>
    </div>

    <table class=\"admin-slatkisi table table-hover\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
            // line 12
            echo "                <tr class=\"admin-slatkis\">
                    <td>
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["slika"], "is_primarna", [], "any", false, false, false, 14) && (twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, $context["slika"], "slatkis_id", [], "any", false, false, false, 14)))) {
                    // line 15
                    echo "                        <img class=\"admin-slatkis-image\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                    echo "assets/img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 15), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 15), "html", null, true);
                    echo " slika\" />
                        ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 17
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 17), "html", null, true);
                echo " slika\"/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </td>
                    <td>
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 21))), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/slatkisi/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-primary\">Izmeni</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/slatkisi/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-danger\">Izbriši</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdminSlatkisManagement/slatkisi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  118 => 27,  110 => 24,  104 => 21,  100 => 19,  91 => 17,  76 => 15,  70 => 14,  66 => 12,  62 => 11,  55 => 7,  50 => 5,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/slatkisi.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\slatkisi.html");
    }
}
