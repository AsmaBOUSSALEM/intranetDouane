<?php

/* CCDNForumForumBundle:User/Post:show.html.twig */
class __TwigTemplate_9938dbe5b10197d6ca09e694f7602c5ce0b84b68d3f5b7d72c53228bc99efcdd extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "post"), "user"), "show"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.show", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId")), "CCDNForumForumBundle"), "html", null, true);
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
        <div class=\"col-md-6\">";
        // line 21
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig")->display($context);
        // line 22
        echo "</div>
\t</section>";
        // line 25
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig")->display($context);
        // line 27
        if ((($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted") || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky"))) {
            // line 28
            $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig")->display($context);
        }
        // line 31
        echo "<br>

\t<section class=\"row clearfix\">";
        // line 34
        $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post.html.twig")->display($context);
        // line 35
        echo "</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 94,  152 => 85,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 63,  110 => 82,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 13,  211 => 83,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 91,  155 => 63,  150 => 49,  129 => 53,  126 => 63,  104 => 53,  90 => 47,  20 => 1,  146 => 61,  137 => 76,  127 => 62,  70 => 37,  58 => 30,  53 => 24,  84 => 39,  76 => 10,  77 => 35,  65 => 33,  34 => 14,  23 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 66,  128 => 72,  107 => 57,  61 => 22,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 67,  119 => 47,  102 => 55,  71 => 31,  67 => 5,  63 => 27,  59 => 21,  87 => 47,  38 => 15,  93 => 52,  88 => 46,  78 => 11,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 32,  49 => 22,  94 => 48,  89 => 19,  85 => 16,  75 => 34,  68 => 28,  56 => 19,  27 => 3,  21 => 25,  44 => 11,  31 => 10,  25 => 28,  46 => 12,  26 => 4,  28 => 29,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 6,  47 => 37,  40 => 16,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 65,  123 => 58,  120 => 61,  115 => 59,  111 => 42,  108 => 58,  101 => 53,  98 => 54,  96 => 49,  83 => 45,  74 => 9,  66 => 27,  55 => 3,  52 => 18,  50 => 23,  43 => 14,  41 => 33,  35 => 6,  32 => 5,  29 => 8,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 72,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 61,  122 => 67,  116 => 64,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 49,  95 => 53,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 25,  60 => 21,  57 => 22,  54 => 17,  51 => 16,  48 => 22,  45 => 36,  42 => 10,  39 => 9,  36 => 9,  33 => 12,  30 => 7,);
    }
}
