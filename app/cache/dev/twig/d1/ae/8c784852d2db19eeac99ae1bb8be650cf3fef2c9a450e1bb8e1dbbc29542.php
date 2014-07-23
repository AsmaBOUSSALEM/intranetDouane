<?php

/* douaneintraBundle:Common/Layout/SubTitle:sub_title_default.html.twig */
class __TwigTemplate_d1ae8c784852d2db19eeac99ae1bb8be650cf3fef2c9a450e1bb8e1dbbc29542 extends Twig_Template
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
        return "douaneintraBundle:Common/Layout/SubTitle:sub_title_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  65 => 31,  34 => 13,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 36,  67 => 15,  63 => 30,  59 => 14,  87 => 43,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 45,  89 => 44,  85 => 42,  75 => 17,  68 => 14,  56 => 9,  27 => 8,  21 => 3,  44 => 12,  31 => 10,  25 => 6,  46 => 7,  26 => 6,  28 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 35,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 27,  50 => 26,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 39,  80 => 38,  73 => 19,  64 => 14,  60 => 29,  57 => 11,  54 => 28,  51 => 14,  48 => 8,  45 => 21,  42 => 7,  39 => 9,  36 => 14,  33 => 4,  30 => 7,);
    }
}
