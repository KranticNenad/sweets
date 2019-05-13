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

/* _global/index.html */
class __TwigTemplate_9aacea70a7e2034ec04142999f3097aa96572b8a6f865700ed7fe8f9305e45b8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    
    <body>
        <header>
            <div class=\"banners\">
                <a href=\"/\" class=\"banner\">
                    <img src=\"/assets/img/banner-1.jpg\" alt=\"Banner 1\"/>
                </a>
            </div>
            <nav id=\"main-menu\">
                <ul>
                    <li><a href=\"/\">Početna</a>
                    <li><a href=\"/slatkisi\">Slatkiši</a>
                    <li><a href=\"/profil\">profil</a>
                    <li><a href=\"/kontakt\">kontakt</a>
                    <li><a href=\"/odjava\">odjava</a>
                </ul>
            </nav>
        </header>
        <main>
            ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "        </main>
        <footer>
            &copy; 2019 Nenad Krantić
        </footer>
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo " Početna ";
    }

    // line 28
    public function block_main($context, array $blocks = [])
    {
        // line 29
        echo "            ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 28,  80 => 7,  71 => 30,  69 => 28,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "D:\\xampp\\htdocs\\views\\_global\\index.html");
    }
}
