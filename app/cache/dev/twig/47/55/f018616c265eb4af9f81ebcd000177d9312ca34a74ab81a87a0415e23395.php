<?php

/* CCDNForumForumBundle:Admin/Board:list.html.twig */
class __TwigTemplate_4755f018616c265eb4af9f81ebcd000177d9312ca34a74ab81a87a0415e23395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "admin"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.board.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"col-md-12 row clearfix\">
\t\t\t<div class=\"col-md-4 row\">
\t\t\t\t<div class=\"col-md-6 row\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.forums", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 31
        echo "</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
        echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 34
        if (((null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) || ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 37
        echo "</a>";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 39
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
            // line 40
            if (((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "getCategories")), "html", null, true);
            // line 43
            echo "</span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            // line 45
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 row\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.categories", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 54
        echo "</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 57
        if (((null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter"))) || ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 60
        echo "</a>";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 62
            echo "<a href=\"";
            // line 63
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "forum")) {
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "forum"), "id"), "category_filter" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            } else {
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("category_filter" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            }
            // line 68
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "\" class=\"list-group-item ellipsis";
            if (((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getBoards")), "html", null, true);
            // line 71
            echo "</span>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            // line 73
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-8 row\">
\t\t\t\t<table class=\"table table-bordered\" id=\"admin-boards-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : $this->getContext($context, "boards")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["board_index"] => $context["board"]) {
            // line 92
            echo "<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "topics")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_edit", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t id=\"update_board[";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
            echo "]\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 100
            echo "</a>";
            // line 102
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 103
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_delete", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t id=\"delete_board[";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                echo "]\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 106
                echo "</a>";
            }
            // line 109
            if (((!(null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))) && ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) != ""))) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > 1)) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_up", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_up_board[";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                    echo "]\">";
                    // line 114
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 115
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 117
                        echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
                    }
                    // line 119
                    echo "</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_down", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_down_board[";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
                    echo "]\">";
                    // line 123
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                        // line 124
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 126
                        echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
                    }
                    // line 128
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                }
            }
            // line 132
            echo "</td>
\t\t\t\t\t\t\t</tr>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['board_index'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Board:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 84,  184 => 75,  178 => 73,  172 => 70,  153 => 62,  114 => 44,  110 => 42,  97 => 39,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 91,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  197 => 74,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 64,  113 => 43,  81 => 35,  211 => 83,  194 => 88,  188 => 70,  180 => 103,  175 => 89,  160 => 66,  155 => 63,  150 => 49,  129 => 53,  126 => 63,  104 => 40,  90 => 36,  20 => 1,  146 => 61,  137 => 54,  127 => 49,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 30,  65 => 22,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 83,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 56,  119 => 47,  102 => 51,  71 => 41,  67 => 32,  63 => 36,  59 => 20,  87 => 40,  38 => 15,  93 => 38,  88 => 36,  78 => 32,  201 => 28,  196 => 90,  183 => 68,  171 => 81,  166 => 63,  163 => 68,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 46,  105 => 35,  91 => 37,  62 => 21,  49 => 24,  94 => 45,  89 => 36,  85 => 42,  75 => 31,  68 => 27,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 7,  25 => 7,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 54,  123 => 58,  120 => 57,  115 => 44,  111 => 42,  108 => 42,  101 => 48,  98 => 45,  96 => 44,  83 => 34,  74 => 30,  66 => 26,  55 => 17,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 6,  32 => 5,  29 => 13,  209 => 82,  203 => 86,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 72,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 61,  147 => 60,  144 => 80,  141 => 70,  133 => 74,  130 => 51,  125 => 48,  122 => 47,  116 => 45,  112 => 43,  109 => 41,  106 => 51,  103 => 40,  99 => 39,  95 => 38,  92 => 37,  86 => 38,  82 => 33,  80 => 38,  73 => 30,  64 => 22,  60 => 21,  57 => 21,  54 => 17,  51 => 16,  48 => 17,  45 => 21,  42 => 10,  39 => 9,  36 => 9,  33 => 8,  30 => 5,);
    }
}
