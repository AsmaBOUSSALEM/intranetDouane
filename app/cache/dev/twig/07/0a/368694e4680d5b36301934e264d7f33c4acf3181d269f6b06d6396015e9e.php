<?php

/* CCDNForumForumBundle:User/Topic/Partial:stat_vitals.html.twig */
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
        return "CCDNForumForumBundle:User/Topic/Partial:stat_vitals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 94,  167 => 95,  152 => 86,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 108,  185 => 105,  161 => 90,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 62,  110 => 60,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 96,  113 => 43,  81 => 13,  211 => 83,  194 => 88,  188 => 20,  180 => 103,  175 => 89,  160 => 91,  155 => 87,  150 => 85,  129 => 71,  126 => 63,  104 => 53,  90 => 49,  20 => 1,  146 => 81,  137 => 77,  127 => 62,  70 => 27,  58 => 17,  53 => 18,  84 => 44,  76 => 10,  77 => 35,  65 => 24,  34 => 14,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 78,  132 => 66,  128 => 72,  107 => 59,  61 => 28,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 76,  119 => 47,  102 => 55,  71 => 26,  67 => 25,  63 => 23,  59 => 21,  87 => 47,  38 => 10,  93 => 52,  88 => 46,  78 => 40,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 58,  91 => 40,  62 => 20,  49 => 16,  94 => 48,  89 => 19,  85 => 16,  75 => 36,  68 => 33,  56 => 26,  27 => 3,  21 => 3,  44 => 13,  31 => 10,  25 => 5,  46 => 15,  26 => 4,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 25,  47 => 37,  40 => 11,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 72,  123 => 58,  120 => 67,  115 => 59,  111 => 42,  108 => 58,  101 => 54,  98 => 54,  96 => 49,  83 => 45,  74 => 9,  66 => 32,  55 => 20,  52 => 18,  50 => 23,  43 => 14,  41 => 33,  35 => 11,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 104,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 69,  122 => 68,  116 => 63,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 53,  95 => 51,  92 => 50,  86 => 45,  82 => 41,  80 => 41,  73 => 35,  64 => 25,  60 => 22,  57 => 21,  54 => 25,  51 => 17,  48 => 22,  45 => 18,  42 => 17,  39 => 15,  36 => 9,  33 => 8,  30 => 11,);
    }
}
