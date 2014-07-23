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
        return array (  76 => 48,  74 => 43,  69 => 39,  61 => 35,  53 => 31,  45 => 21,  40 => 18,  37 => 17,  29 => 13,  23 => 5,  21 => 3,  19 => 1,  225 => 91,  220 => 78,  215 => 72,  210 => 62,  205 => 10,  200 => 7,  194 => 119,  169 => 94,  167 => 91,  164 => 90,  160 => 89,  149 => 80,  147 => 78,  142 => 74,  140 => 72,  133 => 62,  120 => 52,  113 => 48,  106 => 44,  90 => 36,  84 => 52,  78 => 30,  64 => 36,  55 => 19,  49 => 15,  41 => 9,  28 => 2,  25 => 7,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 68,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 37,  108 => 31,  105 => 30,  94 => 42,  92 => 56,  85 => 30,  77 => 24,  72 => 27,  68 => 26,  62 => 23,  57 => 14,  50 => 8,  36 => 7,  98 => 40,  96 => 39,  93 => 43,  89 => 41,  87 => 53,  83 => 37,  81 => 35,  79 => 49,  75 => 22,  73 => 28,  65 => 22,  60 => 21,  58 => 20,  56 => 32,  54 => 13,  51 => 26,  46 => 12,  44 => 10,  42 => 10,  39 => 6,  35 => 6,  32 => 14,  27 => 8,);
    }
}
