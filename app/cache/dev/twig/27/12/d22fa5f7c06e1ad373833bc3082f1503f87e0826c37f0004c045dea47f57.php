<?php

/* CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig */
class __TwigTemplate_2712d22fa5f7c06e1ad373833bc3082f1503f87e0826c37f0004c045dea47f57 extends Twig_Template
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
        echo "<tr>
\t\t<td class=\"center\">";
        // line 4
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) {
            // line 5
            echo "<i class=\"glyphicon glyphicon-trash\"></i>";
        } else {
            // line 7
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) {
                // line 8
                echo "<i class=\"glyphicon glyph-icon-lock\"></i>";
            } else {
                // line 11
                if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount") > 100)) {
                    // line 12
                    echo "<i class=\"glyphicon glyphicon-fire\"></i>";
                }
            }
        }
        // line 16
        echo "</td>
\t\t<td class=\"center\">
\t\t\t";
        // line 19
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
        echo "\">";
        // line 20
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky")) {
            // line 21
            echo "<i class=\"glyphicon glyphicon-bullhorn\"></i>";
        } else {
            // line 23
            echo "<i class=\"glyphicon glyphicon-comment\"></i>";
        }
        // line 25
        echo "</a>
\t\t</td>
\t\t<td class=\"left\">";
        // line 28
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate")) {
            // line 29
            echo "<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed", array(), "CCDNForumForumBundle"), "html", null, true);
            echo "</span>&nbsp;";
        }
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "html", null, true);
        // line 34
        echo "</a>

\t\t\t<br>";
        // line 38
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost")) {
            // line 39
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedBy"), "html", null, true);
            // line 42
            echo "&nbsp;&#183;
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
            echo "\">
                    <abbr class=\"timestamper\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "first_post_datetime_format")), "html", null, true);
            // line 46
            echo "</abbr>
                </a>";
        }
        // line 49
        echo "</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
        echo "\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount"), "html", null, true);
        // line 53
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
        echo "\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount"), "html", null, true);
        // line 58
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">";
        // line 61
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost")) {
            // line 62
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedBy"), "html", null, true);
            // line 65
            echo "<br>


\t\t\t\t";
            // line 72
            $context["page"] = 1;
            // line 73
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                // line 74
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                // line 78
                echo "</abbr>
\t\t\t\t\t</a>";
            } else {
                // line 81
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "last_post_datetime_format")), "html", null, true);
                // line 85
                echo "</abbr>
\t\t\t\t\t</a>";
            }
        }
        // line 89
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  170 => 85,  168 => 84,  157 => 81,  153 => 78,  151 => 77,  136 => 72,  131 => 65,  129 => 63,  127 => 62,  121 => 58,  116 => 56,  111 => 53,  109 => 52,  98 => 46,  96 => 45,  84 => 40,  82 => 39,  76 => 34,  68 => 32,  63 => 29,  57 => 25,  45 => 19,  34 => 11,  31 => 8,  26 => 5,  21 => 2,  114 => 39,  108 => 36,  105 => 35,  103 => 34,  100 => 33,  86 => 42,  79 => 25,  73 => 23,  62 => 19,  52 => 16,  43 => 12,  38 => 10,  29 => 7,  24 => 4,  22 => 3,  19 => 1,  150 => 49,  135 => 20,  130 => 10,  125 => 61,  119 => 57,  94 => 30,  92 => 49,  89 => 43,  85 => 47,  74 => 33,  67 => 32,  65 => 20,  60 => 26,  58 => 20,  55 => 17,  49 => 20,  41 => 16,  36 => 12,  28 => 2,  25 => 1,  241 => 96,  237 => 92,  230 => 89,  228 => 88,  225 => 86,  211 => 83,  209 => 82,  191 => 81,  187 => 77,  185 => 76,  182 => 74,  167 => 70,  165 => 83,  148 => 76,  145 => 36,  143 => 64,  140 => 74,  138 => 73,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  112 => 48,  110 => 46,  106 => 51,  104 => 41,  102 => 49,  99 => 39,  95 => 37,  93 => 44,  91 => 29,  88 => 34,  80 => 38,  72 => 36,  70 => 24,  64 => 22,  61 => 28,  59 => 18,  56 => 19,  54 => 23,  51 => 21,  46 => 13,  44 => 10,  42 => 10,  39 => 9,  35 => 6,  32 => 7,  27 => 5,);
    }
}
