<?php

/* SdzBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_3ae407a95d4c8fa07e8d74d0d289a9358ea60c30f4ca672f730439bd2bde215d extends Twig_Template
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
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 7
        echo "  <h2>Modifier un article</h2>
  ";
        // line 8
        $this->env->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 9
        echo "  <p>
    Vous éditez un article déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
  <p>
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
