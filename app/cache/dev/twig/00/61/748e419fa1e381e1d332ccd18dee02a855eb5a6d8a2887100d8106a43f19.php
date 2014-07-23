<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar:user_subscriptions.html.twig */
class __TwigTemplate_0061748e419fa1e381e1d332ccd18dee02a855eb5a6d8a2887100d8106a43f19 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills nav-stacked\">";
        // line 5
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 7
        if ((!array_key_exists("topic", $context))) {
            // line 8
            if (array_key_exists("post", $context)) {
                // line 9
                $context["topic"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic");
            }
        }
        // line 13
        if ((!array_key_exists("board", $context))) {
            // line 14
            if (array_key_exists("topic", $context)) {
                // line 15
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
            } else {
                // line 17
                if (array_key_exists("post", $context)) {
                    // line 18
                    $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
                }
            }
        }
        // line 23
        if ((!array_key_exists("category", $context))) {
            // line 24
            if (array_key_exists("board", $context)) {
                // line 25
                $context["category"] = $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCategory");
            } else {
                // line 27
                if (array_key_exists("topic", $context)) {
                    // line 28
                    $context["category"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
                }
            }
        }
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                // line 37
                $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_subscriptions.html.twig")->display($context);
            }
        }
        // line 41
        echo "</ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar:user_subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 80,  172 => 70,  153 => 78,  114 => 39,  110 => 46,  97 => 52,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 77,  113 => 55,  81 => 47,  211 => 83,  194 => 88,  188 => 88,  180 => 103,  175 => 89,  160 => 91,  155 => 75,  150 => 49,  129 => 64,  126 => 63,  104 => 51,  90 => 46,  20 => 1,  146 => 81,  137 => 65,  127 => 62,  70 => 24,  58 => 32,  53 => 30,  84 => 48,  76 => 44,  77 => 37,  65 => 37,  34 => 6,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 84,  159 => 89,  143 => 64,  135 => 20,  119 => 77,  102 => 40,  71 => 41,  67 => 32,  63 => 36,  59 => 30,  87 => 43,  38 => 15,  93 => 47,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 79,  163 => 78,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 61,  117 => 57,  105 => 35,  91 => 53,  62 => 19,  49 => 24,  94 => 45,  89 => 52,  85 => 42,  75 => 43,  68 => 40,  56 => 28,  27 => 8,  21 => 3,  44 => 19,  31 => 10,  25 => 7,  46 => 13,  26 => 12,  28 => 20,  24 => 4,  19 => 1,  79 => 45,  72 => 36,  69 => 41,  47 => 23,  40 => 17,  37 => 15,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 77,  131 => 61,  123 => 58,  120 => 57,  115 => 59,  111 => 53,  108 => 52,  101 => 48,  98 => 46,  96 => 46,  83 => 44,  74 => 39,  66 => 38,  55 => 17,  52 => 26,  50 => 25,  43 => 12,  41 => 17,  35 => 14,  32 => 7,  29 => 9,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 90,  144 => 80,  141 => 70,  133 => 74,  130 => 10,  125 => 59,  122 => 68,  116 => 56,  112 => 56,  109 => 52,  106 => 51,  103 => 34,  99 => 39,  95 => 57,  92 => 49,  86 => 49,  82 => 39,  80 => 38,  73 => 23,  64 => 37,  60 => 29,  57 => 29,  54 => 27,  51 => 25,  48 => 7,  45 => 21,  42 => 18,  39 => 7,  36 => 7,  33 => 13,  30 => 5,);
    }
}
