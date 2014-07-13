<?php

/* CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig */
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
        return "CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  103 => 42,  98 => 39,  83 => 34,  70 => 25,  53 => 18,  28 => 8,  95 => 57,  86 => 49,  84 => 48,  79 => 45,  76 => 44,  64 => 37,  40 => 17,  33 => 13,  30 => 5,  106 => 43,  101 => 48,  96 => 46,  89 => 36,  80 => 38,  71 => 41,  69 => 35,  65 => 31,  63 => 23,  60 => 29,  45 => 14,  41 => 13,  38 => 12,  34 => 10,  31 => 10,  25 => 6,  23 => 5,  21 => 3,  19 => 1,  187 => 85,  182 => 47,  177 => 41,  169 => 33,  166 => 30,  163 => 28,  161 => 27,  110 => 44,  82 => 39,  66 => 24,  61 => 43,  59 => 30,  52 => 26,  49 => 17,  47 => 15,  37 => 15,  29 => 9,  26 => 1,  156 => 76,  154 => 21,  151 => 20,  146 => 10,  141 => 7,  139 => 70,  137 => 57,  135 => 113,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 56,  108 => 52,  105 => 30,  94 => 38,  92 => 37,  85 => 42,  77 => 29,  75 => 28,  72 => 21,  68 => 40,  62 => 15,  57 => 19,  50 => 17,  36 => 11,  93 => 26,  91 => 37,  87 => 35,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 12,  44 => 19,  42 => 18,  39 => 6,  35 => 14,  32 => 9,  27 => 8,);
    }
}
