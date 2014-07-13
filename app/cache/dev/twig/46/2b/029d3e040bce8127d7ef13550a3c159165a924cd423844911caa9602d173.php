<?php

/* CCDNForumForumBundle:Common/Layout:base.html.twig */
class __TwigTemplate_462b029d3e040bce8127d7ef13550a3c159165a924cd423844911caa9602d173 extends Twig_Template
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
        return "CCDNForumForumBundle:Common/Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  70 => 25,  76 => 48,  77 => 24,  100 => 33,  188 => 88,  155 => 75,  152 => 74,  129 => 64,  126 => 63,  114 => 39,  84 => 52,  81 => 47,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 75,  148 => 69,  137 => 68,  113 => 55,  90 => 46,  65 => 37,  58 => 21,  34 => 10,  23 => 5,  127 => 58,  124 => 62,  110 => 44,  104 => 51,  97 => 52,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 53,  107 => 52,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 66,  119 => 49,  102 => 32,  71 => 41,  67 => 15,  63 => 23,  59 => 30,  87 => 33,  38 => 12,  93 => 47,  88 => 6,  78 => 27,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 39,  105 => 30,  91 => 37,  62 => 15,  49 => 24,  94 => 42,  89 => 36,  85 => 30,  75 => 22,  68 => 16,  56 => 32,  27 => 8,  21 => 3,  44 => 7,  31 => 7,  25 => 7,  46 => 13,  26 => 12,  28 => 8,  24 => 4,  19 => 1,  79 => 49,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 17,  22 => 3,  246 => 90,  157 => 56,  145 => 61,  139 => 70,  131 => 61,  123 => 50,  120 => 57,  115 => 38,  111 => 37,  108 => 31,  101 => 48,  98 => 39,  96 => 46,  83 => 34,  74 => 43,  66 => 24,  55 => 17,  52 => 26,  50 => 8,  43 => 12,  41 => 13,  35 => 14,  32 => 14,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 64,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 74,  149 => 73,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 54,  125 => 56,  122 => 55,  116 => 48,  112 => 37,  109 => 34,  106 => 43,  103 => 42,  99 => 35,  95 => 57,  92 => 37,  86 => 49,  82 => 39,  80 => 38,  73 => 23,  64 => 36,  60 => 23,  57 => 14,  54 => 13,  51 => 26,  48 => 7,  45 => 21,  42 => 18,  39 => 6,  36 => 5,  33 => 8,  30 => 5,);
    }
}
