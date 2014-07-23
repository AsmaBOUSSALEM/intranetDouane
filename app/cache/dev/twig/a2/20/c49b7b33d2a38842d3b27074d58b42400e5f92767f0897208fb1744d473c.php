<?php

/* douaneintraBundle::base.html.twig */
class __TwigTemplate_a220c49b7b33d2a38842d3b27074d58b42400e5f92767f0897208fb1744d473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale"), "html", null, true);
        echo "\">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
    <body>";
        // line 15
        ob_start();
        // line 17
        echo "<div id=\"page-wrap\">
\t\t\t<div id=\"page-main\">
\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("concours-douane.jpg"), "html", null, true);
        echo "\" style=\"width: 100%; height: 150px; margin-bottom: 34px; \">";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 26
        echo "<div class=\"container clearfix\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t        <aside class=\"col-md-2 page-sidebar-left\">";
        // line 30
        $this->displayBlock('sidebar', $context, $blocks);
        // line 32
        echo "</aside>

\t\t\t\t        <div class=\"col-md-10 page-body-right\">
\t\t\t\t\t\t\t<div id=\"top clearfix\"></div>";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "</div>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t
\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "<script type='text/javascript'>
\t\t<!--
\t\t\t\$(document).ready(function() {
\t\t\t\t// make visible js compat toolbars site wide
\t\t\t\t\$(\"[data-js-non-compat]\").each(function(i, el) {
\t\t\t\t\t\$(el).addClass('collapse').addClass('hidden');
\t\t\t\t});

\t\t\t\t\$(\"[data-js-compat]\").each(function(i, el) {
\t\t\t\t\t\$(el).removeClass('collapse').removeClass('hidden');
\t\t\t\t});

\t\t\t\t\$('[data-tip]').each(function() {
\t\t\t\t\t\$(this).tooltip({
\t\t\t\t\t\thtml: true,
\t\t\t\t\t\tplacement: \$(this).data('tip')
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('[data-toggle=\"dropdown\"]').dropdown();
\t\t\t});
\t\t//-->
\t\t</script>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 77
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "douaneintraBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  165 => 69,  167 => 70,  152 => 86,  148 => 68,  124 => 55,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 73,  172 => 70,  153 => 78,  114 => 62,  110 => 46,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 85,  113 => 43,  81 => 13,  211 => 83,  194 => 88,  188 => 20,  180 => 103,  175 => 89,  160 => 91,  155 => 87,  150 => 49,  129 => 63,  126 => 55,  104 => 41,  90 => 33,  20 => 1,  146 => 81,  137 => 77,  127 => 62,  70 => 24,  58 => 20,  53 => 18,  84 => 40,  76 => 34,  77 => 35,  65 => 30,  34 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 30,  132 => 57,  128 => 56,  107 => 59,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 20,  119 => 77,  102 => 40,  71 => 31,  67 => 32,  63 => 29,  59 => 20,  87 => 47,  38 => 10,  93 => 36,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 61,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 77,  142 => 59,  138 => 61,  136 => 72,  121 => 58,  117 => 57,  105 => 58,  91 => 35,  62 => 23,  49 => 15,  94 => 52,  89 => 48,  85 => 47,  75 => 29,  68 => 32,  56 => 19,  27 => 3,  21 => 2,  44 => 10,  31 => 8,  25 => 1,  46 => 12,  26 => 5,  28 => 2,  24 => 4,  19 => 1,  79 => 43,  72 => 36,  69 => 29,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 77,  131 => 65,  123 => 47,  120 => 54,  115 => 59,  111 => 53,  108 => 58,  101 => 52,  98 => 46,  96 => 45,  83 => 45,  74 => 38,  66 => 26,  55 => 19,  52 => 24,  50 => 22,  43 => 14,  41 => 9,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 77,  182 => 74,  176 => 99,  173 => 99,  168 => 84,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 10,  125 => 7,  122 => 68,  116 => 56,  112 => 48,  109 => 52,  106 => 42,  103 => 55,  99 => 39,  95 => 37,  92 => 49,  86 => 42,  82 => 39,  80 => 31,  73 => 28,  64 => 22,  60 => 26,  57 => 25,  54 => 17,  51 => 17,  48 => 21,  45 => 19,  42 => 10,  39 => 9,  36 => 7,  33 => 10,  30 => 11,);
    }
}
