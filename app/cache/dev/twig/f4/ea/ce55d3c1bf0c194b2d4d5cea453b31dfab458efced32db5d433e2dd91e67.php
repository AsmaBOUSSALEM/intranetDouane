<?php

/* CCDNForumForumBundle:User/Subscription/Partial:item_topic_list.html.twig */
class __TwigTemplate_f4eace55d3c1bf0c194b2d4d5cea453b31dfab458efced32db5d433e2dd91e67 extends Twig_Template
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
        // line 2
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard")) {
            // line 3
            if ($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard"), "getCategory")) {
                // line 4
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard"), "getCategory"), "getForum")) {
                    // line 5
                    echo "<tr>
\t\t\t\t\t<td class=\"center\">";
                    // line 7
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) {
                        // line 8
                        echo "<i class=\"glyphicon glyphicon-trash\"></i>";
                    } else {
                        // line 10
                        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) {
                            // line 11
                            echo "<i class=\"glyphicon glyphicon-lock\"></i>";
                        } else {
                            // line 14
                            if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount") > 100)) {
                                // line 15
                                echo "<i class=\"glyphicon glyphicon-fire\"></i>";
                            }
                        }
                    }
                    // line 19
                    echo "</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board"), "category"), "forumName"), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">";
                    // line 23
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky")) {
                        // line 24
                        echo "<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    } else {
                        // line 26
                        echo "<i class=\"glyphicon glyphicon-comment\"></i>";
                    }
                    // line 28
                    echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"left\">";
                    // line 31
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate")) {
                        // line 32
                        echo "<span class=\"label label-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed", array(), "CCDNForumForumBundle"), "html", null, true);
                        echo "</span>&nbsp;";
                    }
                    // line 35
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board"), "category"), "forumName"), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
                    echo "\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "html", null, true);
                    // line 37
                    echo "</a>

\t\t\t\t\t\t<br>";
                    // line 41
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost")) {
                        // line 43
                        echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedBy"), "html", null, true);
                        // line 46
                        echo "&nbsp;&#183;
\t\t\t                <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board"), "category"), "forumName"), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                        echo "\">
\t\t\t                    <abbr class=\"timestamper\" title=\"";
                        // line 48
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                        echo "\">";
                        // line 49
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "first_post_datetime_format")), "html", null, true);
                        // line 50
                        echo "</abbr>
\t\t\t                </a>";
                    }
                    // line 53
                    echo "</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<span class=\"label label-info lead\" title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
                    echo "\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
                    // line 57
                    echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<span class=\"label label-info lead\" title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
                    echo "\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
                    // line 62
                    echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">";
                    // line 65
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost")) {
                        // line 67
                        echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedBy"), "html", null, true);
                        // line 70
                        echo "<br>

\t\t\t\t\t\t\t";
                        // line 76
                        $context["page"] = 1;
                        // line 77
                        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                            // line 78
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board"), "category"), "forumName"), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                            // line 80
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                            echo "\">";
                            // line 81
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                            // line 82
                            echo "</abbr>
\t\t\t\t\t\t\t\t</a>";
                        } else {
                            // line 85
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board"), "category"), "forumName"), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                            // line 87
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                            echo "\">";
                            // line 88
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                            // line 89
                            echo "</abbr>
\t\t\t\t\t\t\t\t</a>";
                        }
                    }
                    // line 93
                    echo "</td>
\t\t\t\t</tr>";
                }
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Subscription/Partial:item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 93,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 84,  184 => 75,  172 => 70,  160 => 66,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 91,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  197 => 74,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  146 => 61,  127 => 62,  110 => 42,  70 => 25,  76 => 48,  77 => 30,  188 => 70,  155 => 63,  152 => 74,  129 => 53,  126 => 63,  124 => 62,  114 => 44,  97 => 39,  84 => 37,  81 => 35,  181 => 81,  178 => 73,  170 => 87,  167 => 76,  165 => 75,  148 => 69,  137 => 70,  113 => 43,  90 => 44,  65 => 22,  58 => 20,  34 => 10,  53 => 31,  23 => 3,  134 => 35,  104 => 50,  100 => 33,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 77,  219 => 76,  217 => 83,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 77,  135 => 68,  119 => 47,  102 => 49,  71 => 41,  67 => 31,  63 => 28,  59 => 20,  87 => 40,  38 => 12,  93 => 43,  88 => 43,  78 => 32,  201 => 92,  196 => 90,  183 => 68,  171 => 81,  166 => 63,  163 => 68,  158 => 82,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 30,  91 => 37,  62 => 21,  49 => 24,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  27 => 5,  21 => 2,  44 => 11,  31 => 7,  25 => 4,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 32,  47 => 19,  40 => 14,  37 => 11,  22 => 3,  246 => 90,  157 => 64,  145 => 78,  139 => 57,  131 => 65,  123 => 50,  120 => 57,  115 => 56,  111 => 42,  108 => 53,  101 => 48,  98 => 45,  96 => 44,  83 => 37,  74 => 35,  66 => 24,  55 => 23,  52 => 26,  50 => 8,  43 => 12,  41 => 13,  35 => 10,  32 => 8,  29 => 13,  209 => 82,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 72,  173 => 88,  168 => 80,  164 => 59,  162 => 85,  154 => 74,  149 => 61,  147 => 60,  144 => 49,  141 => 76,  133 => 67,  130 => 51,  125 => 61,  122 => 60,  116 => 45,  112 => 55,  109 => 41,  106 => 43,  103 => 40,  99 => 48,  95 => 47,  92 => 46,  86 => 41,  82 => 37,  80 => 36,  73 => 28,  64 => 22,  60 => 26,  57 => 24,  54 => 17,  51 => 22,  48 => 7,  45 => 21,  42 => 15,  39 => 9,  36 => 5,  33 => 8,  30 => 7,);
    }
}
