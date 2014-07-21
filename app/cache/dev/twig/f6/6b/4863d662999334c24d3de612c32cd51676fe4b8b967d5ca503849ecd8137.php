<?php

/* CCDNForumForumBundle:Common:Layout/SubTitle/sub_title_default.html.twig */
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
        return "CCDNForumForumBundle:Common:Layout/SubTitle/sub_title_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  101 => 48,  96 => 46,  82 => 39,  71 => 36,  69 => 35,  65 => 31,  63 => 30,  60 => 29,  45 => 21,  41 => 17,  38 => 15,  34 => 13,  31 => 10,  25 => 6,  23 => 5,  21 => 3,  19 => 1,  130 => 47,  114 => 30,  111 => 28,  109 => 27,  102 => 21,  99 => 20,  89 => 44,  83 => 65,  80 => 38,  66 => 47,  61 => 43,  59 => 41,  52 => 27,  49 => 17,  47 => 15,  37 => 7,  29 => 9,  26 => 1,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 60,  132 => 65,  127 => 58,  125 => 41,  122 => 55,  117 => 33,  115 => 38,  112 => 56,  108 => 52,  105 => 30,  94 => 45,  92 => 37,  85 => 42,  77 => 37,  75 => 22,  72 => 21,  68 => 49,  62 => 15,  57 => 14,  50 => 26,  36 => 14,  93 => 26,  91 => 25,  87 => 43,  74 => 20,  56 => 19,  54 => 28,  51 => 16,  46 => 12,  44 => 12,  42 => 10,  39 => 6,  35 => 6,  32 => 5,  27 => 8,);
    }
}
