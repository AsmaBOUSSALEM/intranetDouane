<?php

/* CCDNForumForumBundle:User:Post/Partial/body_content.html.twig */
class __TwigTemplate_b9b357db012dc31a2f026e197a2554abee1c41e500758b5036c5720e3babe340 extends Twig_Template
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
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Post/Partial/body_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  104 => 53,  100 => 52,  96 => 49,  94 => 48,  90 => 47,  88 => 46,  86 => 44,  82 => 41,  80 => 40,  75 => 39,  72 => 38,  70 => 37,  67 => 34,  65 => 33,  62 => 32,  58 => 30,  56 => 28,  54 => 27,  50 => 23,  48 => 22,  42 => 16,  40 => 15,  37 => 14,  33 => 12,  31 => 10,  29 => 9,  25 => 5,  23 => 4,  21 => 3,  19 => 1,);
    }
}
