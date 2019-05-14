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
        <link rel=\"stylesheet\" href=\"/assets/css/main.css\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    
    <body>
        <header class=\"site-header\">
            <div class=\"banners\">
                <a href=\"/\" class=\"banner\">
                    <img src=\"/assets/img/banner-1.jpg\" alt=\"Banner 1\"/>
                </a>
            </div>
            <div class=\"social-icons\">
                <a href=\"#\"><img src=\"/assets/img/social/linkedin.png\" alt=\"Li\"/></a>
                <a href=\"#\"><img src=\"/assets/img/social/facebook.png\" alt=\"Fb\"/></a>
                <a href=\"#\"><img src=\"/assets/img/social/twitter.png\" alt=\"Tw\"/></a>
                <a href=\"#\"><img src=\"/assets/img/social/google-plus.png\" alt=\"Gp\"/></a>
                <a href=\"#\"><img src=\"/assets/img/social/youtube.png\" alt=\"YT\"/></a>
            </div>
            <nav id=\"main-menu\">
                <ul>
                    <li><a href=\"/\">Početna</a>
                    <li><a href=\"/onama\">O nama</a>
                    <li><a href=\"/kontakt\">Kontakt</a>
                    <li><a href=\"/korpa\">Korpa</a>
                </ul>
            </nav>
        </header>
        <main>
            ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 37
        echo "        </main>
        <footer class=\"site-footer\">
            &copy; 2019 Nenad Krantić
        </footer>
    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        echo " Početna ";
    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  93 => 35,  87 => 8,  78 => 37,  76 => 35,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\views\\_global\\index.html");
    }
}
