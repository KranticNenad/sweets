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

/* Main/onama.html */
class __TwigTemplate_3d2ed6baa6108219dd69fdfd52669f86f1dd100d30b2b61c114ad480ab159567 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/onama.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<h1>O Nama</h1>
<p>Etiam ultricies lobortis tellus ac ornare. Mauris ultrices quam ac odio tincidunt, ut porttitor dui vehicula. Vestibulum efficitur est ipsum, scelerisque pulvinar purus sagittis ac. Ut sed tincidunt ipsum, laoreet iaculis risus. Sed viverra, velit eget ultricies ultricies, neque enim pellentesque odio, vitae malesuada purus elit eu mauris. Sed at urna efficitur, aliquam turpis vitae, pharetra risus. Mauris mattis erat neque, in pulvinar metus venenatis vel. Nullam fermentum varius tortor vitae sollicitudin. Vivamus fermentum feugiat vehicula. Sed et mi vel justo congue consectetur at quis dolor.</p>
";
    }

    public function getTemplateName()
    {
        return "Main/onama.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  44 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/onama.html", "C:\\xampp\\htdocs\\slatkisi\\views\\Main\\onama.html");
    }
}
