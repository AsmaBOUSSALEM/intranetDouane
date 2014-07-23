<?php

/* CCDNForumForumBundle:Moderator/Topic:change_board.html.twig */
class __TwigTemplate_1a0d9253ae8dcd857a52c86c87bd6d3fbc2e1afbfeed3129d90ca6226074486f extends Twig_Template
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
        return "CCDNForumForumBundle:Moderator/Topic:change_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 80,  172 => 70,  153 => 78,  114 => 39,  110 => 46,  97 => 52,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 77,  113 => 56,  81 => 35,  211 => 83,  194 => 88,  188 => 88,  180 => 103,  175 => 89,  160 => 91,  155 => 75,  150 => 49,  129 => 64,  126 => 63,  104 => 52,  90 => 41,  20 => 1,  146 => 81,  137 => 65,  127 => 62,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 29,  65 => 22,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 84,  159 => 89,  143 => 64,  135 => 20,  119 => 77,  102 => 51,  71 => 41,  67 => 32,  63 => 36,  59 => 30,  87 => 40,  38 => 15,  93 => 43,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 79,  163 => 78,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 61,  117 => 57,  105 => 35,  91 => 36,  62 => 24,  49 => 24,  94 => 45,  89 => 41,  85 => 42,  75 => 29,  68 => 27,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 7,  25 => 7,  46 => 12,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 33,  72 => 36,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 77,  131 => 61,  123 => 58,  120 => 57,  115 => 59,  111 => 55,  108 => 54,  101 => 48,  98 => 48,  96 => 46,  83 => 37,  74 => 43,  66 => 26,  55 => 17,  52 => 18,  50 => 17,  43 => 15,  41 => 14,  35 => 6,  32 => 5,  29 => 13,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 90,  144 => 80,  141 => 70,  133 => 74,  130 => 10,  125 => 59,  122 => 68,  116 => 56,  112 => 56,  109 => 52,  106 => 51,  103 => 34,  99 => 40,  95 => 57,  92 => 42,  86 => 38,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 21,  57 => 21,  54 => 17,  51 => 16,  48 => 17,  45 => 21,  42 => 10,  39 => 9,  36 => 9,  33 => 8,  30 => 5,);
    }
}
