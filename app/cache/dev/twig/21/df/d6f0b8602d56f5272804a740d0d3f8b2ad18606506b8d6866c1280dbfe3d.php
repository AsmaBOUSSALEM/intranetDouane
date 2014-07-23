<?php

/* douaneintraBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig */
class __TwigTemplate_21dfd6f0b8602d56f5272804a740d0d3f8b2ad18606506b8d6866c1280dbfe3d extends Twig_Template
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
                    // line 11
                    echo "<li>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
                    // line 13
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "boards"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sidebar_board"]) {
                        // line 14
                        if (array_key_exists("board", $context)) {
                            // line 15
                            if (($this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id") == $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"))) {
                                // line 16
                                echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 17
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 18
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                            } else {
                                // line 21
                                echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 22
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 23
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                            }
                        } else {
                            // line 27
                            echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 28
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                            // line 29
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                        }
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                        // line 33
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_board'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "</ul>
\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</ul>
\t\t</li>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  58 => 21,  53 => 18,  84 => 33,  76 => 44,  77 => 29,  65 => 37,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 43,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 36,  62 => 24,  49 => 24,  94 => 45,  89 => 52,  85 => 42,  75 => 17,  68 => 27,  56 => 28,  27 => 8,  21 => 3,  44 => 13,  31 => 7,  25 => 6,  46 => 7,  26 => 6,  28 => 8,  24 => 3,  19 => 1,  79 => 45,  72 => 16,  69 => 41,  47 => 23,  40 => 17,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 26,  55 => 15,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 14,  32 => 9,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 21,  86 => 49,  82 => 32,  80 => 38,  73 => 28,  64 => 23,  60 => 22,  57 => 21,  54 => 27,  51 => 25,  48 => 17,  45 => 16,  42 => 18,  39 => 9,  36 => 9,  33 => 8,  30 => 5,);
    }
}
