<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_subscriptions.html.twig */
class __TwigTemplate_2d4bbccc281471d6f5b8d6537ea29033ea5bc53b92ae411fb4c37f69a6308521 extends Twig_Template
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
        echo "<li>
\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscribed_forums"]) ? $context["subscribed_forums"] : $this->getContext($context, "subscribed_forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["subscribed_forum"]) {
            // line 6
            if ((!(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum"))))) {
                // line 7
                if (((isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")) == $this->getAttribute($this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "forum", array(), "array"), "name"))) {
                    // line 8
                    echo "<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "forum", array(), "array"), "name"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                } else {
                    // line 12
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "forum", array(), "array"), "name"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                }
            } else {
                // line 17
                echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "forum", array(), "array"), "name"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
            }
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "forum", array(), "array"), "name"), "html", null, true);
            // line 23
            echo "<span class=\"badge\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "count_unread", array(), "array"), "html", null, true);
            // line 25
            echo "&nbsp;/&nbsp;";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscribed_forum"]) ? $context["subscribed_forum"] : $this->getContext($context, "subscribed_forum")), "count_total", array(), "array"), "html", null, true);
            // line 27
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribed_forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</ul>
\t</li>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 44,  77 => 31,  100 => 33,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  114 => 39,  84 => 48,  81 => 47,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 65,  90 => 46,  65 => 37,  58 => 21,  34 => 6,  126 => 63,  118 => 10,  113 => 55,  23 => 5,  127 => 34,  124 => 62,  110 => 41,  104 => 51,  97 => 52,  53 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 60,  143 => 56,  135 => 28,  119 => 42,  102 => 32,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 43,  38 => 15,  93 => 47,  88 => 6,  78 => 27,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 35,  91 => 53,  62 => 24,  49 => 24,  94 => 45,  89 => 52,  85 => 42,  75 => 43,  68 => 27,  56 => 28,  27 => 8,  21 => 3,  44 => 13,  31 => 7,  25 => 5,  46 => 13,  26 => 12,  28 => 20,  24 => 4,  19 => 1,  79 => 45,  72 => 16,  69 => 41,  47 => 23,  40 => 17,  37 => 15,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 61,  123 => 58,  120 => 57,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 44,  74 => 39,  66 => 26,  55 => 17,  52 => 26,  50 => 17,  43 => 12,  41 => 12,  35 => 14,  32 => 7,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 27,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 34,  99 => 35,  95 => 57,  92 => 21,  86 => 49,  82 => 39,  80 => 38,  73 => 23,  64 => 25,  60 => 23,  57 => 29,  54 => 27,  51 => 25,  48 => 7,  45 => 21,  42 => 18,  39 => 7,  36 => 9,  33 => 8,  30 => 5,);
    }
}
