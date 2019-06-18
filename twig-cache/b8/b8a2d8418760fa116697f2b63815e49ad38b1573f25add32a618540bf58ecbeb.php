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
    <div class=\"options\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/slatkisi/add\">Dodaj novi slatkiš</a>
    </div>

    <table class=\"admin-slatkisi table table-hover\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slatkisi"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slatkis"]) {
            // line 11
            echo "                <tr class=\"admin-slatkis\">
                    <td>
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["slika"], "is_primarna", [], "any", false, false, false, 13) && (twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, $context["slika"], "slatkis_id", [], "any", false, false, false, 13)))) {
                    // line 14
                    echo "                        <img class=\"admin-slatkis-image\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                    echo "assets/img/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 14), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 14), "html", null, true);
                    echo " slika\" />
                        ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 16
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 16), "html", null, true);
                echo " slika\"/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </td>
                    <td>
                        ";
            // line 20
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "naziv", [], "any", false, false, false, 20))), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/slatkisi/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">Izmeni</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/slatkisi/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slatkis"], "slatkis_id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">Izbriši</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slatkis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return array (  126 => 30,  114 => 26,  106 => 23,  100 => 20,  96 => 18,  87 => 16,  72 => 14,  66 => 13,  62 => 11,  58 => 10,  51 => 6,  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminSlatkisManagement/slatkisi.html", "C:\\xampp\\htdocs\\slatkisi\\views\\AdminSlatkisManagement\\slatkisi.html");
    }
}
