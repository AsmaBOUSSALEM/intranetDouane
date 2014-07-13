<?php

/* CCDNForumForumBundle:Admin/Forum:list.html.twig */
class __TwigTemplate_29f00294baefbe90b061f0d3370f1b5cc9aca2edb5a4779d35746ea79f609824 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "forum"), "admin"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-forums.index", array(), "CCDNForumForumBundle"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_create");
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"clearfix\">
\t\t\t<table class=\"table table-bordered\" id=\"admin-forums-list\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.category-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["forum_index"] => $context["forum"]) {
            // line 37
            echo "<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "categories")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_edit", array("forumId" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))), "html", null, true);
            echo "\" id=\"update_forum[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
            echo "]\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 44
            echo "</a>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 47
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_delete", array("forumId" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "id"))), "html", null, true);
                echo "\" id=\"delete_forum[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name"), "html", null, true);
                echo "]\">";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 49
                echo "</a>";
            }
            // line 51
            echo "</td>
\t\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['forum_index'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</tbody>
\t\t\t</table>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Forum:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 81,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  197 => 74,  192 => 73,  190 => 72,  186 => 69,  174 => 65,  146 => 61,  70 => 25,  76 => 48,  77 => 30,  100 => 33,  188 => 70,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  114 => 39,  84 => 37,  81 => 31,  181 => 81,  178 => 80,  170 => 64,  167 => 76,  165 => 75,  148 => 69,  137 => 54,  113 => 43,  90 => 36,  65 => 22,  58 => 20,  34 => 10,  23 => 5,  127 => 49,  124 => 62,  110 => 44,  104 => 52,  97 => 52,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 102,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 83,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 55,  119 => 47,  102 => 51,  71 => 41,  67 => 15,  63 => 23,  59 => 20,  87 => 40,  38 => 12,  93 => 43,  88 => 36,  78 => 32,  201 => 92,  196 => 90,  183 => 68,  171 => 81,  166 => 63,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 46,  105 => 30,  91 => 37,  62 => 21,  49 => 24,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 7,  25 => 7,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 56,  145 => 61,  139 => 56,  131 => 54,  123 => 50,  120 => 57,  115 => 44,  111 => 42,  108 => 42,  101 => 48,  98 => 45,  96 => 44,  83 => 37,  74 => 30,  66 => 24,  55 => 17,  52 => 26,  50 => 8,  43 => 12,  41 => 13,  35 => 6,  32 => 5,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 74,  149 => 73,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 51,  125 => 48,  122 => 55,  116 => 48,  112 => 37,  109 => 41,  106 => 43,  103 => 40,  99 => 39,  95 => 38,  92 => 37,  86 => 38,  82 => 33,  80 => 38,  73 => 29,  64 => 22,  60 => 21,  57 => 14,  54 => 17,  51 => 16,  48 => 7,  45 => 21,  42 => 10,  39 => 9,  36 => 5,  33 => 8,  30 => 5,);
    }
}
