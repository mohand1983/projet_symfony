<?php

/* ::layout.html.twig */
class __TwigTemplate_c9155b565427ee209eda726cc43511be5f387a891087d0efb3908bfed359dc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "  </head>
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
          Lire le tutoriel »
        </a></p>
      </div>
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>
                    
          ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        </div>
      </div>
      <hr>
      <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
      </footer>
    </div>
  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "          ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        // line 42
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  114 => 42,  112 => 41,  109 => 40,  105 => 32,  102 => 31,  95 => 8,  92 => 7,  86 => 6,  80 => 45,  78 => 40,  69 => 33,  67 => 31,  61 => 28,  55 => 25,  51 => 24,  35 => 10,  29 => 6,  23 => 2,  56 => 12,  49 => 11,  45 => 8,  43 => 7,  40 => 6,  33 => 7,  30 => 3,);
    }
}
