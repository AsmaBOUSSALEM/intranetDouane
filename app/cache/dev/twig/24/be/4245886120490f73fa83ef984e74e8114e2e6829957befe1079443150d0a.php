<?php

/* CCDNForumForumBundle:User/Subscription:show.html.twig */
class __TwigTemplate_24be4245886120490f73fa83ef984e74e8114e2e6829957befe1079443150d0a extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "subscription"), "list"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_subscriptions.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_body_content($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 50
        echo "<section class=\"row clearfix\">
\t\t<div class=\"col-md-12\">
\t\t\t<ul class=\"nav nav-tabs\">";
        // line 53
        $context["tabs"] = $this;
        // line 54
        if ((!(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum"))))) {
            // line 55
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.all", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "all", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_total", array(), "array"));
            // line 56
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.unread", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "unread", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), null, $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), null);
            // line 57
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.read", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "read", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), null, null);
        } else {
            // line 59
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.all", array(), "CCDNForumForumBundle"), "~", "all", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_total", array(), "array"));
            // line 60
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.unread", array(), "CCDNForumForumBundle"), "~", "unread", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), null, $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), null);
            // line 61
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.read", array(), "CCDNForumForumBundle"), "~", "read", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), null, null);
        }
        // line 63
        echo "</ul>
\t\t</div>
\t</section>";
        // line 67
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 69
        echo "<section class=\"clearfix\">
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"left\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 170px;\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>";
        // line 82
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
        foreach ($context['_seq'] as $context["row"] => $context["subscription"]) {
            // line 83
            $context["topic"] = $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription")), "getTopic");
            // line 85
            $this->env->loadTemplate("CCDNForumForumBundle:User:Subscription/Partial/item_topic_list.html.twig")->display($context);
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
            // line 87
            echo "<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">
\t\t\t\t\t\t\t<span class=\"lead\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subscription.no-topics", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 91
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</tbody>
\t\t</table>
\t</section>";
        // line 99
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function getsubscription_tab($_label = null, $_forum_name = null, $_filter_key = null, $_filter_value = null, $_count_read = null, $_count_unread = null, $_count_total = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "forum_name" => $_forum_name,
            "filter_key" => $_filter_key,
            "filter_value" => $_filter_value,
            "count_read" => $_count_read,
            "count_unread" => $_count_unread,
            "count_total" => $_count_total,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            if (((isset($context["filter_key"]) ? $context["filter_key"] : $this->getContext($context, "filter_key")) == (isset($context["filter_value"]) ? $context["filter_value"] : $this->getContext($context, "filter_value")))) {
                // line 18
                echo "<li class=\"active\">";
            } else {
                // line 20
                echo "<li>";
            }
            // line 22
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => (isset($context["forum_name"]) ? $context["forum_name"] : $this->getContext($context, "forum_name")), "filter" => (isset($context["filter_key"]) ? $context["filter_key"] : $this->getContext($context, "filter_key")))), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            // line 25
            echo "&nbsp;

\t\t\t<span class=\"badge\">";
            // line 28
            if (((!(null === (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")))) && (!(null === (isset($context["count_total"]) ? $context["count_total"] : $this->getContext($context, "count_total")))))) {
                // line 29
                echo twig_escape_filter($this->env, (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")), "html", null, true);
                // line 30
                echo "&nbsp;/&nbsp;";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["count_total"]) ? $context["count_total"] : $this->getContext($context, "count_total")), "html", null, true);
            } else {
                // line 33
                if ((!(null === (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread"))))) {
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")), "html", null, true);
                }
                // line 37
                if ((!(null === (isset($context["count_read"]) ? $context["count_read"] : $this->getContext($context, "count_read"))))) {
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["count_read"]) ? $context["count_read"] : $this->getContext($context, "count_read")), "html", null, true);
                }
            }
            // line 41
            echo "</span>
\t\t</a>
\t</li>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Subscription:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 77,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 44,  110 => 82,  97 => 39,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 35,  211 => 83,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 66,  155 => 63,  150 => 49,  129 => 53,  126 => 63,  104 => 78,  90 => 44,  20 => 1,  146 => 61,  137 => 70,  127 => 62,  70 => 27,  58 => 20,  53 => 31,  84 => 69,  76 => 48,  77 => 30,  65 => 22,  34 => 11,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 83,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 87,  135 => 68,  119 => 47,  102 => 49,  71 => 59,  67 => 31,  63 => 28,  59 => 20,  87 => 40,  38 => 15,  93 => 43,  88 => 43,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 68,  158 => 82,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 35,  91 => 37,  62 => 54,  49 => 24,  94 => 45,  89 => 41,  85 => 42,  75 => 61,  68 => 57,  56 => 50,  27 => 3,  21 => 2,  44 => 11,  31 => 7,  25 => 4,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 32,  47 => 19,  40 => 14,  37 => 11,  22 => 3,  246 => 90,  157 => 95,  145 => 78,  139 => 57,  131 => 65,  123 => 58,  120 => 57,  115 => 56,  111 => 42,  108 => 53,  101 => 48,  98 => 45,  96 => 76,  83 => 37,  74 => 35,  66 => 56,  55 => 23,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 6,  32 => 5,  29 => 13,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 72,  173 => 88,  168 => 80,  164 => 59,  162 => 85,  154 => 71,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 45,  112 => 55,  109 => 41,  106 => 51,  103 => 40,  99 => 48,  95 => 47,  92 => 75,  86 => 41,  82 => 67,  80 => 36,  73 => 60,  64 => 55,  60 => 53,  57 => 24,  54 => 48,  51 => 47,  48 => 17,  45 => 21,  42 => 10,  39 => 9,  36 => 9,  33 => 8,  30 => 7,);
    }
}
