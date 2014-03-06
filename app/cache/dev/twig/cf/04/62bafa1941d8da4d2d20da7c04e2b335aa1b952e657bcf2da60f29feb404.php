<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_cf0462bafa1941d8da4d2d20da7c04e2b335aa1b952e657bcf2da60f29feb404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<h3>Les derniers articles</h3>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  27 => 5,  23 => 4,  19 => 2,  79 => 18,  72 => 16,  64 => 13,  60 => 12,  54 => 11,  51 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
