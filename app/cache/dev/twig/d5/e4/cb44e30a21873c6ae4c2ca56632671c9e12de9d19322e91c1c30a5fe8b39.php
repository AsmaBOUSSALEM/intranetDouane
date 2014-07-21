<?php

/* CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig */
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
        return "CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 56,  87 => 53,  84 => 52,  76 => 48,  74 => 43,  69 => 39,  61 => 35,  53 => 31,  45 => 21,  40 => 18,  37 => 17,  29 => 13,  25 => 7,  23 => 5,  21 => 3,  19 => 1,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  305 => 124,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  269 => 109,  266 => 106,  264 => 105,  261 => 104,  256 => 103,  254 => 102,  252 => 100,  250 => 99,  247 => 98,  243 => 97,  238 => 95,  234 => 94,  230 => 93,  227 => 92,  210 => 91,  203 => 86,  199 => 85,  195 => 84,  184 => 75,  178 => 73,  176 => 72,  174 => 71,  172 => 70,  163 => 68,  160 => 66,  157 => 64,  155 => 63,  153 => 62,  149 => 61,  147 => 60,  145 => 59,  139 => 57,  135 => 56,  131 => 54,  129 => 53,  122 => 47,  116 => 45,  114 => 44,  112 => 43,  110 => 42,  104 => 40,  97 => 39,  93 => 38,  91 => 37,  89 => 36,  83 => 34,  79 => 49,  75 => 31,  73 => 30,  64 => 36,  62 => 21,  59 => 20,  56 => 32,  54 => 17,  51 => 26,  46 => 12,  44 => 11,  42 => 10,  39 => 9,  35 => 6,  32 => 14,  27 => 8,);
    }
}
