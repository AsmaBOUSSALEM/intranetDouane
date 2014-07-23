<?php

/* CCDNForumForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig */
class __TwigTemplate_f66b4863d662999334c24d3de612c32cd51676fe4b8b967d5ca503849ecd8137 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 5
        echo "<div class=\"btn-group btn-block\" id=\"settings-accessor\">";
        // line 6
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 8
        echo "<button class=\"btn btn-default btn-block dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">";
        // line 9
        if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 16) == "ccdn_forum_admin")) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
        }
        // line 13
        if (((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 15) == "ccdn_forum_user") || (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 20) == "ccdn_forum_moderator"))) {
            // line 14
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
            } else {
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index", array(), "CCDNForumForumBundle"), "html", null, true);
            }
        }
        // line 21
        echo "<span class=\"caret\"></span>
\t\t</button>

\t\t<ul class=\"dropdown-menu section-indicator\" role=\"menu\">";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "<li";
            // line 28
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 16) == "ccdn_forum_admin")) {
                echo " class=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
            echo "\" rel=\"nofollow\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 31
            echo "</a>
\t\t\t\t</li>";
        }
        // line 35
        echo "<li";
        // line 36
        if ((((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 15) == "ccdn_forum_user") && (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) != "ccdn_forum_user_subscription")) || (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 20) == "ccdn_forum_moderator"))) {
            echo " class=\"selected\"";
        }
        echo ">
\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index");
        echo "\" rel=\"nofollow\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 39
        echo "</a>
\t\t\t</li>";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "<li";
            // line 44
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                echo " class=\"selected\"";
            }
            echo ">";
            // line 45
            if ((array_key_exists("forum", $context) && (!(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))))) {
                // line 46
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"))), "html", null, true);
                echo "\" rel=\"nofollow\">";
            } else {
                // line 48
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => "default"));
                echo "\" rel=\"nofollow\">";
            }
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 52
            echo "</a>
\t\t\t\t</li>";
        }
        // line 56
        echo "</ul>

\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 80,  172 => 70,  153 => 78,  114 => 39,  110 => 46,  97 => 52,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 77,  113 => 55,  81 => 47,  211 => 83,  194 => 88,  188 => 88,  180 => 103,  175 => 89,  160 => 91,  155 => 75,  150 => 49,  129 => 64,  126 => 63,  104 => 51,  90 => 46,  20 => 1,  146 => 81,  137 => 65,  127 => 62,  70 => 24,  58 => 32,  53 => 30,  84 => 48,  76 => 34,  77 => 37,  65 => 31,  34 => 13,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 84,  159 => 89,  143 => 64,  135 => 20,  119 => 77,  102 => 40,  71 => 36,  67 => 32,  63 => 30,  59 => 18,  87 => 43,  38 => 15,  93 => 47,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 79,  163 => 78,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 61,  117 => 57,  105 => 35,  91 => 29,  62 => 19,  49 => 15,  94 => 45,  89 => 44,  85 => 42,  75 => 43,  68 => 36,  56 => 35,  27 => 8,  21 => 3,  44 => 26,  31 => 10,  25 => 6,  46 => 13,  26 => 12,  28 => 20,  24 => 4,  19 => 1,  79 => 25,  72 => 36,  69 => 35,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 77,  131 => 61,  123 => 58,  120 => 57,  115 => 59,  111 => 53,  108 => 52,  101 => 48,  98 => 46,  96 => 46,  83 => 44,  74 => 39,  66 => 39,  55 => 17,  52 => 27,  50 => 26,  43 => 12,  41 => 17,  35 => 8,  32 => 7,  29 => 9,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 90,  144 => 80,  141 => 70,  133 => 74,  130 => 10,  125 => 59,  122 => 68,  116 => 56,  112 => 56,  109 => 52,  106 => 51,  103 => 34,  99 => 39,  95 => 37,  92 => 49,  86 => 27,  82 => 39,  80 => 38,  73 => 23,  64 => 38,  60 => 29,  57 => 25,  54 => 28,  51 => 33,  48 => 7,  45 => 21,  42 => 29,  39 => 7,  36 => 14,  33 => 5,  30 => 21,);
    }
}
