<?php

/* douaneintraBundle:User/Board:show.html.twig */
class __TwigTemplate_599e3258b84ceb50c6f823f221fad4aec8b1888519cabd6e325f158e9c3df071 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.board.show", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name")), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
            ";
        // line 20
        $context["is_topic_create_disabled"] = (($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "isAuthorisedToCreateTopic", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security")), "method")) ? ("") : (" disabled"));
        // line 21
        echo "
            <a class=\"btn btn-danger";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["is_topic_create_disabled"]) ? $context["is_topic_create_disabled"] : $this->getContext($context, "is_topic_create_disabled")), "html", null, true);
        echo "\" rel=\"nofollow\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_create", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId"))), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-asterisk\"></i>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 25
        echo "</a>

\t</section>

\t<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        // line 37
        echo "</span>
\t\t\t&nbsp;
\t\t    <span class=\"label label-default\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        echo "\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        // line 42
        echo "</span>
\t\t</div>
\t</header>";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 48
        echo "<section class=\"clearfix\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"left\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 170px;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>";
        // line 61
        if ((!twig_test_empty((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics"))))) {
            // line 62
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.announcements-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 65
            echo "</td>
\t\t\t\t\t</tr>";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics")));
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
            foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
                // line 69
                if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    // line 70
                    $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
                }
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
            unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topics-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 77
            echo "</td>
\t\t\t\t\t</tr>";
        }
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
            // line 82
            if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 83
                $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 86
            echo "<tr>
\t\t                <td class=\"center\" colspan=\"6\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.no-topics", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 89
            echo "</td>
\t\t            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</tbody>
        </table>
\t</section>";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:User/Board:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  165 => 69,  167 => 70,  152 => 86,  148 => 68,  124 => 55,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 73,  172 => 70,  153 => 78,  114 => 62,  110 => 46,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 85,  113 => 43,  81 => 13,  211 => 83,  194 => 88,  188 => 20,  180 => 103,  175 => 89,  160 => 91,  155 => 87,  150 => 85,  129 => 63,  126 => 55,  104 => 41,  90 => 33,  20 => 1,  146 => 81,  137 => 77,  127 => 62,  70 => 24,  58 => 20,  53 => 18,  84 => 40,  76 => 34,  77 => 35,  65 => 22,  34 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 62,  132 => 57,  128 => 56,  107 => 59,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 76,  119 => 57,  102 => 40,  71 => 31,  67 => 36,  63 => 29,  59 => 20,  87 => 47,  38 => 10,  93 => 36,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 61,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 77,  142 => 59,  138 => 61,  136 => 72,  121 => 58,  117 => 57,  105 => 58,  91 => 35,  62 => 23,  49 => 20,  94 => 44,  89 => 43,  85 => 16,  75 => 29,  68 => 32,  56 => 19,  27 => 3,  21 => 2,  44 => 11,  31 => 8,  25 => 5,  46 => 12,  26 => 5,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 25,  69 => 29,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 81,  145 => 65,  139 => 77,  131 => 65,  123 => 47,  120 => 54,  115 => 59,  111 => 53,  108 => 58,  101 => 52,  98 => 46,  96 => 45,  83 => 45,  74 => 33,  66 => 26,  55 => 20,  52 => 24,  50 => 22,  43 => 14,  41 => 16,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 77,  182 => 74,  176 => 99,  173 => 99,  168 => 84,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 61,  122 => 68,  116 => 56,  112 => 48,  109 => 52,  106 => 42,  103 => 55,  99 => 39,  95 => 37,  92 => 43,  86 => 42,  82 => 39,  80 => 31,  73 => 28,  64 => 22,  60 => 21,  57 => 25,  54 => 17,  51 => 16,  48 => 21,  45 => 19,  42 => 10,  39 => 9,  36 => 12,  33 => 10,  30 => 11,);
    }
}
