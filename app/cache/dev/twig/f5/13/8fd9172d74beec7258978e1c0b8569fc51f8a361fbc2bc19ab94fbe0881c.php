<?php

/* CCDNForumForumBundle:User/Category/Partial:item_board.html.twig */
class __TwigTemplate_f5138fd9172d74beec7258978e1c0b8569fc51f8a361fbc2bc19ab94fbe0881c extends Twig_Template
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
\t    <td class=\"center\">";
        // line 4
        if ($this->env->getExtension('authorizer')->canCreateTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
            // line 5
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 6
                echo "<i class=\"glyphicon glyphicon-folder-close\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 8
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        } else {
            // line 11
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 12
                echo "<i class=\"glyphicon glyphicon-eye-open\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 14
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        }
        // line 17
        echo "</td>

\t    <td class=\"left\">
\t        <h4>
\t            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName"), "html", null, true);
        echo "\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName"), "html", null, true);
        // line 23
        echo "</a>
\t        </h4>

\t\t\t<blockquote class=\"slim\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getDescription"), "html", null, true);
        // line 28
        echo "</blockquote>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount"), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount"), "html", null, true);
        // line 34
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount"), "html", null, true);
        echo "\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount"), "html", null, true);
        // line 40
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width:170px;\">";
        // line 44
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost")) {
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic")) {
                // line 46
                echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedBy"), "html", null, true);
                // line 49
                echo "<br>

\t\t\t\t\t";
                // line 55
                $context["page"] = 1;
                // line 56
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                    // line 57
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic"), "getId"))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getId"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "last_post_datetime_format")), "html", null, true);
                    // line 61
                    echo "</abbr>
\t                    </a>";
                } else {
                    // line 64
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show_paginated", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getTopic"), "getId"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getId"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost"), "getCreatedDate"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "last_post_datetime_format")), "html", null, true);
                    // line 68
                    echo "</abbr>
\t                    </a>";
                }
            }
        }
        // line 73
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Category/Partial:item_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 60,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  180 => 93,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  172 => 70,  160 => 66,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  146 => 61,  70 => 32,  76 => 48,  77 => 30,  100 => 77,  188 => 20,  155 => 63,  152 => 74,  129 => 53,  126 => 63,  114 => 44,  84 => 39,  81 => 38,  181 => 81,  178 => 73,  170 => 87,  167 => 76,  165 => 75,  148 => 69,  137 => 68,  113 => 43,  90 => 44,  65 => 22,  58 => 20,  34 => 10,  23 => 3,  127 => 62,  124 => 64,  110 => 82,  104 => 78,  97 => 47,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 66,  128 => 83,  107 => 57,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 73,  135 => 67,  119 => 47,  102 => 49,  71 => 59,  67 => 31,  63 => 28,  59 => 20,  87 => 40,  38 => 12,  93 => 45,  88 => 43,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 68,  158 => 82,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 56,  91 => 44,  62 => 27,  49 => 24,  94 => 42,  89 => 41,  85 => 30,  75 => 34,  68 => 57,  56 => 50,  27 => 3,  21 => 2,  44 => 17,  31 => 8,  25 => 4,  46 => 12,  26 => 5,  28 => 6,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 32,  47 => 19,  40 => 14,  37 => 12,  22 => 3,  246 => 90,  157 => 95,  145 => 78,  139 => 57,  131 => 65,  123 => 50,  120 => 61,  115 => 59,  111 => 42,  108 => 53,  101 => 48,  98 => 45,  96 => 76,  83 => 37,  74 => 35,  66 => 56,  55 => 22,  52 => 26,  50 => 21,  43 => 12,  41 => 13,  35 => 11,  32 => 5,  29 => 13,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 72,  173 => 88,  168 => 80,  164 => 59,  162 => 85,  154 => 74,  149 => 91,  147 => 90,  144 => 49,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 45,  112 => 55,  109 => 41,  106 => 43,  103 => 55,  99 => 49,  95 => 46,  92 => 75,  86 => 40,  82 => 67,  80 => 36,  73 => 33,  64 => 28,  60 => 53,  57 => 23,  54 => 48,  51 => 47,  48 => 7,  45 => 21,  42 => 10,  39 => 9,  36 => 5,  33 => 8,  30 => 7,);
    }
}
