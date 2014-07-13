<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar:admin_forum.html.twig */
class __TwigTemplate_d5e4cb44e30a21873c6ae4c2ca56632671c9e12de9d19322e91c1c30a5fe8b39 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 8
            if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_list") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_create")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_edit")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_delete"))) {
                // line 13
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 14
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            } else {
                // line 17
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            }
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-forums.index", array(), "CCDNForumForumBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</li>";
        }
        // line 26
        if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_list") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_create")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_edit")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_delete"))) {
            // line 31
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 35
            echo "<li>
\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-categories.index", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</li>";
        // line 43
        if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_list") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_create")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_edit")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_delete"))) {
            // line 48
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 52
            echo "<li>
\t\t\t\t<a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-boards.index", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</li>

\t<ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar:admin_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  76 => 48,  77 => 29,  100 => 33,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  114 => 39,  84 => 52,  81 => 47,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 57,  113 => 55,  90 => 46,  65 => 37,  58 => 21,  34 => 10,  23 => 5,  127 => 34,  124 => 62,  110 => 44,  104 => 51,  97 => 52,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 32,  71 => 41,  67 => 15,  63 => 23,  59 => 30,  87 => 53,  38 => 12,  93 => 47,  88 => 6,  78 => 27,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 35,  91 => 37,  62 => 24,  49 => 24,  94 => 38,  89 => 36,  85 => 42,  75 => 28,  68 => 27,  56 => 32,  27 => 8,  21 => 3,  44 => 13,  31 => 7,  25 => 7,  46 => 13,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 49,  72 => 16,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 56,  145 => 61,  139 => 45,  131 => 61,  123 => 50,  120 => 57,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 39,  96 => 46,  83 => 34,  74 => 43,  66 => 24,  55 => 17,  52 => 26,  50 => 17,  43 => 12,  41 => 13,  35 => 14,  32 => 14,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 54,  125 => 59,  122 => 43,  116 => 48,  112 => 56,  109 => 34,  106 => 43,  103 => 42,  99 => 35,  95 => 57,  92 => 56,  86 => 49,  82 => 39,  80 => 38,  73 => 23,  64 => 36,  60 => 23,  57 => 19,  54 => 27,  51 => 26,  48 => 7,  45 => 21,  42 => 18,  39 => 7,  36 => 11,  33 => 8,  30 => 5,);
    }
}
