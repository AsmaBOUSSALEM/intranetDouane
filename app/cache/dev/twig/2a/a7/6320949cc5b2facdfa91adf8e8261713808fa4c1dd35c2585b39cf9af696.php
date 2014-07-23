<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post_head.html.twig */
class __TwigTemplate_2aa76320949cc5b2facdfa91adf8e8261713808fa4c1dd35c2585b39cf9af696 extends Twig_Template
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
        echo "<div class=\"row clearfix\">
\t    <div class=\"col-md-7\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
            // line 7
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
            // line 10
            echo "&nbsp;&#183;&nbsp;";
        }
        // line 14
        echo "<span class=\"timestamper\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
        echo "\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
        // line 16
        echo "</span>
\t\t\t</h3>
\t    </div>

\t    <div class=\"col-md-5 pull-right text-right\">
\t        ";
        // line 21
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id") && (!$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted")))) {
            // line 22
            echo "\t            <div class=\"btn-group\">
\t                <a class=\"btn btn-xs btn-icon-only\" title=\"show post\"
\t\t\t\t\t href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-fullscreen\"></i>
\t\t\t\t\t</a>
\t                <a class=\"btn btn-xs btn-icon-only\" href=\"#post_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-link\"></i>
\t\t\t\t\t</a>
\t            </div>
\t        ";
        }
        // line 33
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) && ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") || (!$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted"))))) {
            // line 34
            echo "&nbsp;
                <div class=\"dropdown btn-group text-left\">
                    <a class=\"dropdown-toggle btn btn-xs btn-icon-only\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-cog\"></i>
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</a>
                    <ul class=\"dropdown-menu pull-right content-left\" style=\"z-index:15;\">";
            // line 42
            if ($this->env->getExtension('authorizer')->canReplyToTopic($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"))) {
                // line 43
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 48
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 52
            if ($this->env->getExtension('authorizer')->canEditPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 53
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\" id=\"post_edit[";
                // line 54
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "]\"
\t\t\t\t\t\t\t\t href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_edit", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 58
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 62
            if ($this->env->getExtension('authorizer')->canDeletePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 63
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_delete", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 68
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 72
            if ($this->env->getExtension('authorizer')->canRestorePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 73
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_restore", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-trash\"></i>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.restore", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 77
                echo "</a>
                            </li>";
            }
            // line 81
            if ($this->env->getExtension('authorizer')->canLockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 82
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_lock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-lock\"></i>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.lock", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 86
                echo "</a>
                            </li>";
            }
            // line 90
            if ($this->env->getExtension('authorizer')->canUnlockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 91
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_unlock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-lock\"></i>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.unlock", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 95
                echo "</a>
                            </li>";
            }
            // line 99
            echo "</ul>
                </div>";
        }
        // line 102
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 94,  152 => 85,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 63,  110 => 82,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 35,  211 => 83,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 91,  155 => 63,  150 => 49,  129 => 53,  126 => 63,  104 => 53,  90 => 47,  20 => 1,  146 => 61,  137 => 76,  127 => 62,  70 => 37,  58 => 30,  53 => 24,  84 => 39,  76 => 48,  77 => 42,  65 => 33,  34 => 14,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 66,  128 => 72,  107 => 57,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 67,  119 => 47,  102 => 55,  71 => 59,  67 => 33,  63 => 27,  59 => 27,  87 => 47,  38 => 15,  93 => 52,  88 => 46,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 32,  49 => 22,  94 => 48,  89 => 48,  85 => 42,  75 => 39,  68 => 57,  56 => 28,  27 => 7,  21 => 3,  44 => 13,  31 => 10,  25 => 6,  46 => 14,  26 => 4,  28 => 6,  24 => 4,  19 => 1,  79 => 43,  72 => 38,  69 => 34,  47 => 21,  40 => 16,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 65,  123 => 58,  120 => 61,  115 => 59,  111 => 42,  108 => 58,  101 => 53,  98 => 54,  96 => 49,  83 => 45,  74 => 20,  66 => 56,  55 => 21,  52 => 18,  50 => 23,  43 => 14,  41 => 14,  35 => 6,  32 => 8,  29 => 8,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 72,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 61,  122 => 67,  116 => 64,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 49,  95 => 53,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 28,  60 => 21,  57 => 22,  54 => 27,  51 => 20,  48 => 22,  45 => 21,  42 => 16,  39 => 9,  36 => 9,  33 => 12,  30 => 7,);
    }
}
