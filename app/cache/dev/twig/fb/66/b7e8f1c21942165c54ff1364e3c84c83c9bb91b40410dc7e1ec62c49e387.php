<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig */
class __TwigTemplate_fb66b7e8f1c21942165c54ff1364e3c84c83c9bb91b40410dc7e1ec62c49e387 extends Twig_Template
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
        $context["sidebar_categories"] = $this->env->getExtension('boardList')->boardList((isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")));
        // line 5
        if (twig_length_filter($this->env, (isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")))) {
            // line 6
            echo "<li>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["sidebar_category"]) {
                // line 9
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "boards"))) {
                    // line 10
                    if ((array_key_exists("category", $context) && ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_user_category_show"))) {
                        // line 11
                        if (($this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "id") == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))) {
                            // line 12
                            echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 13
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 14
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        } else {
                            // line 17
                            echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 19
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        }
                    } else {
                        // line 23
                        echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "name"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                    }
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "name"), "html", null, true);
                    // line 29
                    echo "</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
                    // line 34
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "boards"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sidebar_board"]) {
                        // line 35
                        if (array_key_exists("board", $context)) {
                            // line 36
                            if (($this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id") == $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"))) {
                                // line 37
                                echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 38
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 39
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                            } else {
                                // line 42
                                echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 43
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 44
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                            }
                        } else {
                            // line 48
                            echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                            // line 50
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                        }
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                        // line 54
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_board'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "</ul>
\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</ul>
\t\t</li>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  76 => 44,  77 => 29,  100 => 33,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  114 => 39,  84 => 48,  81 => 47,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 57,  113 => 55,  90 => 46,  65 => 37,  58 => 21,  34 => 10,  23 => 5,  127 => 34,  124 => 62,  110 => 44,  104 => 51,  97 => 52,  53 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 32,  71 => 41,  67 => 15,  63 => 23,  59 => 30,  87 => 35,  38 => 12,  93 => 47,  88 => 6,  78 => 27,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 35,  91 => 37,  62 => 24,  49 => 24,  94 => 38,  89 => 36,  85 => 42,  75 => 28,  68 => 27,  56 => 28,  27 => 8,  21 => 3,  44 => 13,  31 => 7,  25 => 6,  46 => 13,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 45,  72 => 16,  69 => 41,  47 => 23,  40 => 17,  37 => 15,  22 => 3,  246 => 90,  157 => 56,  145 => 61,  139 => 45,  131 => 61,  123 => 50,  120 => 57,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 39,  96 => 46,  83 => 34,  74 => 39,  66 => 24,  55 => 17,  52 => 26,  50 => 17,  43 => 12,  41 => 13,  35 => 14,  32 => 9,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 54,  125 => 59,  122 => 43,  116 => 48,  112 => 56,  109 => 34,  106 => 43,  103 => 42,  99 => 35,  95 => 57,  92 => 21,  86 => 49,  82 => 39,  80 => 38,  73 => 23,  64 => 25,  60 => 23,  57 => 19,  54 => 27,  51 => 25,  48 => 7,  45 => 14,  42 => 18,  39 => 7,  36 => 11,  33 => 8,  30 => 5,);
    }
}
