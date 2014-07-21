<?php

/* CCDNForumForumBundle:Common:Layout/crumbs.html.twig */
class __TwigTemplate_07dcf1efcbeee8c8736c52160438a5b392c15e4fe860a7bb5eb0c38833ce7ba9 extends Twig_Template
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
        // line 2
        echo "<ol class=\"breadcrumb\">";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["crumbs"]) ? $context["crumbs"] : $this->getContext($context, "crumbs")), "getTrail"));
        foreach ($context['_seq'] as $context["key"] => $context["crumb"]) {
            // line 4
            echo "<li>
\t\t\t\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "label"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "label");
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ol>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/crumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  106 => 51,  101 => 48,  96 => 46,  82 => 39,  71 => 36,  69 => 35,  65 => 31,  63 => 30,  60 => 29,  45 => 21,  41 => 17,  38 => 15,  34 => 13,  31 => 10,  25 => 6,  23 => 3,  21 => 2,  19 => 1,  130 => 47,  114 => 30,  111 => 28,  109 => 27,  102 => 21,  99 => 20,  89 => 44,  83 => 65,  80 => 38,  66 => 47,  61 => 43,  59 => 41,  52 => 27,  49 => 17,  47 => 15,  37 => 7,  29 => 9,  26 => 1,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 60,  132 => 65,  127 => 58,  125 => 41,  122 => 55,  117 => 33,  115 => 38,  112 => 56,  108 => 52,  105 => 30,  94 => 45,  92 => 37,  85 => 42,  77 => 37,  75 => 22,  72 => 21,  68 => 49,  62 => 15,  57 => 14,  50 => 26,  36 => 14,  93 => 26,  91 => 25,  87 => 43,  74 => 20,  56 => 19,  54 => 28,  51 => 16,  46 => 12,  44 => 12,  42 => 8,  39 => 6,  35 => 6,  32 => 5,  27 => 4,);
    }
}
