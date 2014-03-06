<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_459e9e232c57b65572ebf1f4c8d6ce6b8a31e7d1c1109824606f8eaa6af47dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        // line 8
        echo "  <h1>Blog</h1>
  <hr>
  ";
        // line 11
        echo "  ";
        $this->displayBlock('sdzblog_body', $context, $blocks);
    }

    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 11,  45 => 8,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
