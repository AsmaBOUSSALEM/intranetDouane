<?php

/* douaneintraBundle:Common/Layout:base.html.twig */
class __TwigTemplate_cb509c535cee3ba298952d86f132fc2d4f1f5c5e5c2b7cde3d41568f0a1d3a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_extra' => array($this, 'block_stylesheets_extra'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
            'tool_bar' => array($this, 'block_tool_bar'),
            'sub_title' => array($this, 'block_sub_title'),
            'crumb_trail' => array($this, 'block_crumb_trail'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["LayoutTemplate"]) ? $context["LayoutTemplate"] : $this->getContext($context, "LayoutTemplate")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 7
        $this->displayBlock('stylesheets_extra', $context, $blocks);
    }

    public function block_stylesheets_extra($context, array $blocks = array())
    {
        // line 8
        echo "\t";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 15
        $this->displayBlock('javascripts_extra', $context, $blocks);
    }

    public function block_javascripts_extra($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    // line 21
    public function block_tool_bar($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 24
        echo "<header class=\"clearfix\">
\t\t\t<nav class=\"navbar navbar-default\" style=\"background-color:#fff;\">

\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t<div class=\"row\" style=\"padding:10px 0;\">
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t";
        // line 30
        $this->displayBlock('sub_title', $context, $blocks);
        // line 33
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<div class=\"row\">";
        // line 37
        $this->displayBlock('crumb_trail', $context, $blocks);
        // line 42
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</nav>
\t\t</header>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_sub_title($context, array $blocks = array())
    {
        // line 31
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/SubTitle/sub_title_default.html.twig")->display($context);
    }

    // line 37
    public function block_crumb_trail($context, array $blocks = array())
    {
        // line 38
        if (array_key_exists("crumbs", $context)) {
            // line 39
            $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/crumbs.html.twig")->display(array_merge($context, array("crumbs" => (isset($context["crumbs"]) ? $context["crumbs"] : $this->getContext($context, "crumbs")))));
        }
    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 58
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        ob_start();
        // line 68
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/flashes.html.twig")->display($context);
        // line 70
        $this->displayBlock('body_content', $context, $blocks);
        // line 73
        $this->displayBlock('body_footer', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_body_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_body_footer($context, array $blocks = array())
    {
        // line 74
        echo "<hr>";
        // line 76
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Common/Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  137 => 68,  127 => 58,  70 => 27,  58 => 21,  53 => 31,  84 => 52,  76 => 48,  77 => 24,  65 => 37,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 42,  102 => 32,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 33,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 30,  91 => 36,  62 => 15,  49 => 24,  94 => 42,  89 => 52,  85 => 30,  75 => 22,  68 => 16,  56 => 32,  27 => 8,  21 => 3,  44 => 7,  31 => 7,  25 => 7,  46 => 7,  26 => 6,  28 => 8,  24 => 3,  19 => 1,  79 => 49,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 70,  131 => 52,  123 => 47,  120 => 40,  115 => 38,  111 => 37,  108 => 31,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 43,  66 => 26,  55 => 15,  52 => 18,  50 => 8,  43 => 15,  41 => 14,  35 => 14,  32 => 14,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 56,  122 => 55,  116 => 41,  112 => 37,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 37,  86 => 49,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 22,  57 => 14,  54 => 13,  51 => 26,  48 => 17,  45 => 21,  42 => 18,  39 => 6,  36 => 5,  33 => 8,  30 => 5,);
    }
}
