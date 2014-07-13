<?php

/* CCDNForumForumBundle:User/Topic/Partial:topic_actions.html.twig */
class __TwigTemplate_f241bb978fe5f66ffd29bbb8f5a9f5caca0c116b2e83ae48ff57a33ba262cd42 extends Twig_Template
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
        if (array_key_exists("topic", $context)) {
            // line 5
            if ((!array_key_exists("board", $context))) {
                // line 6
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
            }
            // line 10
            if ($this->env->getExtension('authorizer')->canReplyToTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 11
                echo "<a class=\"btn btn-danger\" rel=\"nofollow\"
\t\t\t href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-comment\"></i>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 15
                echo "</a>";
            } else {
                // line 17
                echo "<a class=\"btn btn-danger disabled\" rel=\"nofollow\"
\t\t\t href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 21
                echo "</a>";
            }
            // line 25
            if ($this->env->getExtension('authorizer')->canSubscribeToTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), ((array_key_exists("subscription", $context)) ? ((isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription"))) : (null)))) {
                // line 26
                echo "<a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_subscribe", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-eye-open\"></i>";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.subscribe", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 29
                echo "</a>";
            }
            // line 32
            if ($this->env->getExtension('authorizer')->canUnsubscribeFromTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), ((array_key_exists("subscription", $context)) ? ((isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription"))) : (null)))) {
                // line 33
                echo "<a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_unsubscribe", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-eye-close\"></i>";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.unsubscribe", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 36
                echo "</a>";
            }
            // line 40
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 41
                echo "<div class=\"btn-group\">
\t\t\t\t<a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-wrench\"></i>";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 45
                echo "<span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu\">";
                // line 49
                if ($this->env->getExtension('authorizer')->canStickyTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 50
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_sticky", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.sticky", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 54
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 58
                if ($this->env->getExtension('authorizer')->canUnstickyTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 59
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_unsticky", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.unsticky", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 63
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 67
                if ($this->env->getExtension('authorizer')->canCloseTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 68
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_close", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.close", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 72
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 76
                if ($this->env->getExtension('authorizer')->canReopenTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 77
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_reopen", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reopen", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 81
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 85
                if ($this->env->getExtension('authorizer')->canRestoreTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 86
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_restore", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.restore", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 90
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 94
                if ($this->env->getExtension('authorizer')->canDeleteTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 95
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_delete", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 99
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 103
                if ($this->env->getExtension('authorizer')->canTopicChangeBoard((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 104
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_change_board", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-move\"></i>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.change_board", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 108
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 112
                echo "</ul>
\t\t\t</div>";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic/Partial:topic_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 85,  215 => 37,  212 => 34,  191 => 108,  185 => 105,  161 => 90,  180 => 103,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  172 => 70,  160 => 91,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  146 => 81,  70 => 37,  76 => 10,  77 => 35,  100 => 52,  188 => 20,  155 => 87,  152 => 86,  129 => 71,  114 => 62,  84 => 44,  81 => 13,  181 => 81,  178 => 73,  170 => 96,  167 => 95,  165 => 94,  148 => 83,  137 => 77,  90 => 49,  65 => 24,  58 => 17,  34 => 14,  126 => 63,  118 => 65,  113 => 43,  23 => 5,  127 => 62,  124 => 68,  110 => 60,  104 => 53,  97 => 27,  53 => 24,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 78,  132 => 66,  128 => 72,  107 => 59,  61 => 28,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 76,  119 => 47,  102 => 55,  71 => 26,  67 => 5,  63 => 29,  59 => 21,  87 => 47,  38 => 12,  93 => 52,  88 => 46,  78 => 40,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 58,  91 => 40,  62 => 20,  49 => 20,  94 => 48,  89 => 19,  85 => 16,  75 => 36,  68 => 33,  56 => 26,  27 => 3,  21 => 3,  44 => 13,  31 => 10,  25 => 6,  46 => 12,  26 => 4,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 25,  47 => 37,  40 => 16,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 72,  123 => 50,  120 => 67,  115 => 59,  111 => 42,  108 => 58,  101 => 54,  98 => 54,  96 => 49,  83 => 45,  74 => 9,  66 => 32,  55 => 3,  52 => 26,  50 => 23,  43 => 14,  41 => 33,  35 => 11,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 104,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 69,  122 => 68,  116 => 63,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 53,  95 => 51,  92 => 50,  86 => 45,  82 => 41,  80 => 41,  73 => 35,  64 => 25,  60 => 18,  57 => 22,  54 => 25,  51 => 21,  48 => 22,  45 => 18,  42 => 17,  39 => 15,  36 => 5,  33 => 12,  30 => 11,);
    }
}
