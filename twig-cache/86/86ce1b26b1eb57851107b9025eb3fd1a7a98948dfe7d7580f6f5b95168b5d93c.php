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

/* Slatkis/delete.html */
class __TwigTemplate_7732a95b3804b439e74fd4290b81b2f552d2ffe00fc9951404becc31bfbdbfa0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Slatkis/delete.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 3)), "html", null, true);
        echo " - Delete";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
<div>
    <div>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slike"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slika"]) {
            // line 10
            echo "        <img src=\"/assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "slatkis_id", [], "any", false, false, false, 10), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slika"], "naziv", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
            alt=\"slatkis\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slika'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
    <div>
        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "naziv", [], "any", false, false, false, 15));
        echo "
    </div>
    <div>
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["slatkis"] ?? null), "vrsta", [], "any", false, false, false, 18));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Slatkis/delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 13,  64 => 10,  60 => 9,  55 => 6,  52 => 5,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Slatkis/delete.html", "D:\\xampp\\htdocs\\views\\Slatkis\\delete.html");
    }
}
