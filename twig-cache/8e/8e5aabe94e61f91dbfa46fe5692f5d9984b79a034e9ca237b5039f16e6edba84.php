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

/* Main/kontakt.html */
class __TwigTemplate_4d5d59323ba80382ba1a1a55e31e80210f683a14e9792903ec175849e2b1f087 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/kontakt.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "<h1>Kontakt</h1>
<p>Maecenas mauris tellus, euismod at vulputate ac, ultricies quis eros. Sed vitae posuere lacus. Pellentesque molestie euismod viverra. Sed vitae finibus nisi, nec scelerisque risus. Quisque rutrum, libero sit amet maximus egestas, sapien massa feugiat orci, ut ornare elit velit quis quam. Aliquam mollis vitae ante id porta.</p>
";
    }

    public function getTemplateName()
    {
        return "Main/kontakt.html";
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
        return new Source("", "Main/kontakt.html", "C:\\xampp\\htdocs\\slatkisi\\views\\Main\\kontakt.html");
    }
}
