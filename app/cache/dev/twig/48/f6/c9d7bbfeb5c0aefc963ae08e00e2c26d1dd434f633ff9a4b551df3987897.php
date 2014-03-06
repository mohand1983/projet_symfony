<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_48f6c9d7bbfeb5c0aefc963ae08e00e2c26d1dd434f633ff9a4b551df3987897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 7
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
  <div class=\"well\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
  </div>
  <p>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_modifier", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer l'article
    </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  67 => 17,  60 => 13,  54 => 10,  47 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
