<?php

/* CCDNForumForumBundle:Common:Layout/footer.html.twig */
class __TwigTemplate_bd60edfdebf8cb221ed036a6cc6daa843ed15b794106599b17572372ae914f6d extends Twig_Template
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
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
