<?php

/* CCDNForumForumBundle:User/Topic:reply.html.twig */
class __TwigTemplate_c636fd3da8936b5c7a1f76db7a9bcdc8475d1bea453da7f955e7882d58160691 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "reply"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "CCDNForumForumBundle"), "html", null, true);
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
        echo "<section class=\"clearfix\">";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "reply"), "form_theme")));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id"))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" role=\"form\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
        // line 32
        echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 40
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 44
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t";
        // line 51
        echo "
\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id"))), "html", null, true);
        echo "\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 54
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        // line 62
        if (array_key_exists("preview", $context)) {
            // line 63
            if ((!twig_test_empty((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview"))))) {
                // line 64
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig")->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            }
        }
        // line 68
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig")->display(array_merge($context, array("topic" => (isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")))));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 85,  118 => 64,  215 => 37,  212 => 34,  191 => 108,  185 => 105,  161 => 90,  180 => 103,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  172 => 70,  160 => 91,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  146 => 81,  70 => 27,  76 => 43,  77 => 35,  100 => 52,  188 => 20,  155 => 87,  152 => 86,  129 => 71,  126 => 63,  114 => 62,  84 => 36,  81 => 13,  181 => 81,  178 => 73,  170 => 96,  167 => 95,  165 => 94,  148 => 83,  137 => 77,  113 => 43,  90 => 33,  65 => 22,  58 => 20,  34 => 14,  23 => 4,  127 => 62,  124 => 68,  110 => 60,  104 => 53,  97 => 27,  53 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 78,  132 => 66,  128 => 72,  107 => 59,  61 => 28,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 76,  119 => 47,  102 => 52,  71 => 31,  67 => 36,  63 => 23,  59 => 21,  87 => 47,  38 => 10,  93 => 52,  88 => 40,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 58,  91 => 40,  62 => 23,  49 => 16,  94 => 44,  89 => 19,  85 => 16,  75 => 29,  68 => 33,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 9,  25 => 5,  46 => 12,  26 => 4,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 29,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 72,  123 => 50,  120 => 67,  115 => 59,  111 => 42,  108 => 58,  101 => 52,  98 => 51,  96 => 50,  83 => 45,  74 => 9,  66 => 26,  55 => 20,  52 => 24,  50 => 22,  43 => 14,  41 => 33,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 104,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 69,  122 => 68,  116 => 63,  112 => 61,  109 => 41,  106 => 54,  103 => 55,  99 => 51,  95 => 51,  92 => 43,  86 => 38,  82 => 35,  80 => 32,  73 => 28,  64 => 25,  60 => 21,  57 => 28,  54 => 17,  51 => 16,  48 => 21,  45 => 18,  42 => 10,  39 => 9,  36 => 9,  33 => 10,  30 => 11,);
    }
}
