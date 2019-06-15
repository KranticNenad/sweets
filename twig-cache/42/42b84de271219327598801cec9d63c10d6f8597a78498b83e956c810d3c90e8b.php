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
<html lang>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link href=\"/assets/fontawesome-free-5.9.0-web/css/all.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"/assets/css/main.css\">
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    
    <body>
        <div class=\"main-wrapper\">
            <header class=\"site-header\">
                <div class=\"banners\">
                    <a href=\"/\" class=\"banner\">
                        <img src=\"/assets/img/banner-1.png\" alt=\"Banner 1\"/>
                    </a>
                </div>
                <div class=\"social-icons\">
                    <a href=\"http://www.linkedin.com\" id=\"linkedin-icon\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"http://www.facebook.com\" id=\"facebook-icon\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"http://www.twitter.com\" id=\"twitter-icon\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"http://plus.google.com\" id=\"googleplus-icon\"><i class=\"fab fa-google-plus-g\"></i></a>
                    <a href=\"http://www.youtube.com\" id=\"youtube-icon\"><i class=\"fab fa-youtube\"></i></a>
                </div>
                <nav id=\"main-menu\">
                    <ul>
                        <li><a href=\"/\">Početna</a>
                        <li><a href=\"/onama\">O nama</a>
                        <li><a href=\"/kontakt\">Kontakt</a>
                        <li><a href=\"/korpa\">Korpa</a>
                        <li><a href=\"/slatkis/add\">Dodaj</a>
                    </ul>
                </nav>
            </header>
            <main>
                ";
        // line 42
        $this->displayBlock('main', $context, $blocks);
        // line 44
        echo "            </main>
            <footer class=\"site-footer\">
                &copy; 2019 Nenad Krantić
            </footer>
        </div>
    </body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        echo " Početna ";
    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        // line 43
        echo "                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  101 => 42,  95 => 13,  85 => 44,  83 => 42,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "D:\\xampp\\htdocs\\views\\_global\\index.html");
    }
}
