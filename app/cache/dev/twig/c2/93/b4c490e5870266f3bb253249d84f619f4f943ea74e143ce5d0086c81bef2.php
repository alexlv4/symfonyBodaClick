<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_c293b4c490e5870266f3bb253249d84f619f4f943ea74e143ce5d0086c81bef2 extends Twig_Template
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
        // line 1
        echo "El resultado es: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "invertida"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
