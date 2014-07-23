<?php

/* douaneintraBundle:Moderator/Topic:change_board.html.twig */
class __TwigTemplate_b58510d38ed8c3d827f12aa351e9155af332bb2fa33373b77209667b0ef693b5 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "moderator"), "change_board"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.change_board", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "CCDNForumForumBundle"), "html", null, true);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "moderator"), "change_board"), "form_theme")));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_change_board_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId"))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.change_board", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle")), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 35
        echo "<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 38
        echo "</label>
\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t<pre>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"), "html", null, true);
        // line 42
        echo "</pre>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 48
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.move", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 52
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id"))), "html", null, true);
        echo "\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 56
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Moderator/Topic:change_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 56,  81 => 35,  211 => 79,  194 => 88,  188 => 85,  180 => 78,  175 => 75,  160 => 71,  155 => 70,  150 => 69,  129 => 56,  126 => 55,  104 => 52,  90 => 41,  20 => 1,  146 => 70,  137 => 68,  127 => 58,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 24,  65 => 22,  34 => 7,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 78,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 51,  102 => 51,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 40,  38 => 8,  93 => 43,  88 => 6,  78 => 30,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 30,  91 => 36,  62 => 15,  49 => 13,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 6,  25 => 7,  46 => 12,  26 => 12,  28 => 5,  24 => 7,  19 => 2,  79 => 33,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 70,  131 => 52,  123 => 47,  120 => 40,  115 => 38,  111 => 55,  108 => 54,  101 => 48,  98 => 48,  96 => 46,  83 => 37,  74 => 29,  66 => 26,  55 => 17,  52 => 18,  50 => 8,  43 => 15,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 56,  122 => 55,  116 => 41,  112 => 37,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 42,  86 => 38,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 21,  57 => 14,  54 => 17,  51 => 16,  48 => 12,  45 => 13,  42 => 10,  39 => 9,  36 => 5,  33 => 7,  30 => 2,);
    }
}
