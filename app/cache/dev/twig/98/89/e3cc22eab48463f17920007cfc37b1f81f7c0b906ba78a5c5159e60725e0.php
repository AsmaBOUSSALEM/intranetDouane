<?php

/* douaneintraBundle:Common/Layout/Sidebar:admin_forum.html.twig */
class __TwigTemplate_9889e3cc22eab48463f17920007cfc37b1f81f7c0b906ba78a5c5159e60725e0 extends Twig_Template
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
        return "douaneintraBundle:Common/Layout/Sidebar:admin_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  58 => 21,  53 => 31,  84 => 52,  76 => 48,  77 => 29,  65 => 37,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 53,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 36,  62 => 24,  49 => 24,  94 => 45,  89 => 52,  85 => 42,  75 => 17,  68 => 27,  56 => 32,  27 => 8,  21 => 3,  44 => 13,  31 => 7,  25 => 7,  46 => 7,  26 => 6,  28 => 8,  24 => 3,  19 => 1,  79 => 49,  72 => 16,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 43,  66 => 26,  55 => 15,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 14,  32 => 14,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 56,  86 => 49,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 22,  57 => 21,  54 => 27,  51 => 26,  48 => 17,  45 => 21,  42 => 18,  39 => 9,  36 => 9,  33 => 8,  30 => 5,);
    }
}
