<?php

/* CCDNForumForumBundle:Admin/Category:list.html.twig */
class __TwigTemplate_e8870fbe93596a690e9d16ae09ae42b9d44ffc36b3950aaf0a0158c3055b8dc9 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "admin"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-categories.index", array(), "CCDNForumForumBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_create", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.category.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"col-md-12 row clearfix\">
\t\t\t<div class=\"col-md-3 row\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading clearfix\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.forums", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 30
        echo "</div>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
        echo "\"
\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 33
        if (((null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) || ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 36
        echo "</a>";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list", array("forum_filter" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
            // line 39
            if (((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "getCategories")), "html", null, true);
            // line 42
            echo "</span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            // line 44
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-9\">
\t\t\t\t<table class=\"table table-bordered\" id=\"admin-categories-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.board-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["category_index"] => $context["category"]) {
            // line 62
            echo "<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "boards")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_edit", array("categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t id=\"update_category[";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "]\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 70
            echo "</a>";
            // line 72
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 73
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_delete", array("categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t id=\"delete_category[";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "]\">";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 76
                echo "</a>";
            }
            // line 79
            if (((!(null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))) && ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) != ""))) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > 1)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_reorder_up", array("categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_up_category[";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo "]\">";
                    // line 84
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 85
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 87
                        echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
                    }
                    // line 89
                    echo "</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_reorder_down", array("categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_down_category[";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                    echo "]\">";
                    // line 93
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                        // line 94
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 96
                        echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
                    }
                    // line 98
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                }
            }
            // line 102
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
        unset($context['_seq'], $context['_iterated'], $context['category_index'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 80,  172 => 70,  153 => 78,  114 => 39,  110 => 46,  97 => 52,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  197 => 74,  192 => 73,  190 => 72,  186 => 69,  174 => 65,  170 => 64,  113 => 43,  81 => 35,  211 => 83,  194 => 88,  188 => 70,  180 => 103,  175 => 89,  160 => 91,  155 => 75,  150 => 49,  129 => 64,  126 => 63,  104 => 52,  90 => 36,  20 => 1,  146 => 61,  137 => 65,  127 => 62,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 29,  65 => 22,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 83,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 55,  119 => 77,  102 => 51,  71 => 41,  67 => 32,  63 => 36,  59 => 20,  87 => 40,  38 => 15,  93 => 43,  88 => 35,  78 => 32,  201 => 28,  196 => 90,  183 => 68,  171 => 81,  166 => 63,  163 => 62,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 35,  91 => 36,  62 => 21,  49 => 24,  94 => 45,  89 => 41,  85 => 42,  75 => 29,  68 => 27,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 7,  25 => 7,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 56,  131 => 54,  123 => 58,  120 => 57,  115 => 44,  111 => 42,  108 => 54,  101 => 48,  98 => 45,  96 => 38,  83 => 37,  74 => 30,  66 => 26,  55 => 17,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 6,  32 => 5,  29 => 13,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 90,  144 => 80,  141 => 70,  133 => 74,  130 => 10,  125 => 59,  122 => 68,  116 => 56,  112 => 56,  109 => 41,  106 => 51,  103 => 39,  99 => 40,  95 => 57,  92 => 37,  86 => 38,  82 => 33,  80 => 38,  73 => 28,  64 => 22,  60 => 21,  57 => 21,  54 => 17,  51 => 16,  48 => 17,  45 => 21,  42 => 10,  39 => 9,  36 => 9,  33 => 8,  30 => 5,);
    }
}
