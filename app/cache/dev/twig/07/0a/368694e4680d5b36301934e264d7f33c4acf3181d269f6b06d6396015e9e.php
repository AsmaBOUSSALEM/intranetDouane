<?php

/* CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig */
class __TwigTemplate_070a368694e4680d5b36301934e264d7f33c4acf3181d269f6b06d6396015e9e extends Twig_Template
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
        echo "<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount"), "html", null, true);
        echo "\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.reply-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount"), "html", null, true);
        // line 11
        echo "</span>

\t\t\t&nbsp;

\t\t\t<span class=\"label label-default\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount"), "html", null, true);
        echo "\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.view-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount"), "html", null, true);
        // line 18
        echo "</span>";
        // line 20
        if (array_key_exists("subscription_count", $context)) {
            // line 21
            echo "&nbsp;
\t\t        <span class=\"label label-default\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.subscription-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 24
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            // line 25
            echo "</span>";
        }
        // line 27
        echo "</div>
\t</header>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  67 => 25,  65 => 24,  57 => 21,  55 => 20,  53 => 18,  40 => 11,  38 => 10,  36 => 9,  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 95,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 86,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 77,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 68,  120 => 67,  116 => 63,  114 => 62,  110 => 60,  107 => 59,  105 => 58,  101 => 54,  99 => 53,  95 => 51,  92 => 50,  86 => 45,  84 => 44,  80 => 41,  78 => 40,  75 => 36,  68 => 33,  63 => 23,  61 => 28,  49 => 16,  45 => 18,  37 => 14,  33 => 8,  30 => 11,  28 => 10,  25 => 5,  23 => 5,  21 => 3,  19 => 1,  106 => 37,  104 => 35,  90 => 49,  73 => 35,  71 => 31,  69 => 29,  66 => 32,  64 => 25,  62 => 23,  60 => 22,  58 => 20,  56 => 26,  54 => 25,  51 => 17,  46 => 15,  44 => 11,  42 => 17,  39 => 15,  35 => 6,  32 => 5,  27 => 3,);
    }
}
