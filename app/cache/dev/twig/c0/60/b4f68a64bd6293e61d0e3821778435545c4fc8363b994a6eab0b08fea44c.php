<?php

/* CCDNForumForumBundle:Common:Layout/flashes.html.twig */
class __TwigTemplate_c060b4f68a64bd6293e61d0e3821778435545c4fc8363b994a6eab0b08fea44c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "<div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                // line 7
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  76 => 48,  74 => 43,  69 => 39,  61 => 35,  53 => 31,  45 => 21,  40 => 18,  37 => 17,  29 => 4,  23 => 5,  21 => 2,  19 => 1,  225 => 91,  220 => 78,  215 => 72,  210 => 62,  205 => 10,  200 => 7,  194 => 119,  169 => 94,  167 => 91,  164 => 90,  160 => 89,  149 => 80,  147 => 78,  142 => 74,  140 => 72,  133 => 62,  120 => 52,  113 => 48,  106 => 44,  90 => 36,  84 => 52,  78 => 30,  64 => 36,  55 => 19,  49 => 15,  41 => 9,  28 => 2,  25 => 3,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 68,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 37,  108 => 31,  105 => 30,  94 => 42,  92 => 56,  85 => 30,  77 => 24,  72 => 27,  68 => 26,  62 => 23,  57 => 14,  50 => 8,  36 => 7,  98 => 40,  96 => 39,  93 => 43,  89 => 41,  87 => 53,  83 => 37,  81 => 35,  79 => 49,  75 => 22,  73 => 28,  65 => 22,  60 => 21,  58 => 20,  56 => 32,  54 => 13,  51 => 26,  46 => 12,  44 => 10,  42 => 10,  39 => 6,  35 => 6,  32 => 14,  27 => 8,);
    }
}
