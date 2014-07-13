<?php

/* CCDNForumForumBundle::base.html.twig */
class __TwigTemplate_459b007b90370349cdf1f3cac525bc60dd8de8f3cb89fba0380a986fbd137615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'tool_bar' => array($this, 'block_tool_bar'),
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

\t\t<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
    <body>";
        // line 15
        ob_start();
        // line 17
        echo "<div id=\"page-wrap\">
\t\t\t<div id=\"page-main\">";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo "<div class=\"container clearfix\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t        <aside class=\"col-md-2 page-sidebar-left\">";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "</aside>

\t\t\t\t        <div class=\"col-md-10 page-body-right\">
\t\t\t\t\t\t\t<div id=\"top clearfix\"></div>";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "</div>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t<footer class=\"footer site-footer\">

\t\t\t<div class=\"navbar navbar-default clearfix\">
\t\t\t\t<p class=\"navbar-text pull-right content-right\">
\t\t\t\t\tCopyright <a target=\"_blank\" class=\"navbar-link\" href=\"http://www.codeconsortium.com/\">Code Consortium</a> 2011 - ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<nav class=\"navbar navbar-inverse clearfix\" style=\"bottom:0px;margin-bottom:0px;\">
\t\t\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t\t    <ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"http://www.codeconsortium.com\">
\t\t\t\t\t\t\t\tCode Consortium
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"friend\" target=\"_blank\" href=\"http://github.com/codeconsortium\">Contribute</a>
\t\t\t\t\t\t</li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t</footer>

\t\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t\t<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
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
        // line 113
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
        // line 21
        echo "<header class=\"navbar navbar-default navbar-fixed-top clearfix\" role=\"navigation\">
\t\t\t\t\t\t<a target=\"_blank\" class=\"navbar-brand\" href=\"http://www.codeconsortium.com/\">Code Consortium</a>

\t\t\t\t\t\t<p class=\"navbar-text pull-right\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user\"></i>
\t\t\t\t\t\t\t&nbsp;";
        // line 27
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
        }
        // line 30
        echo "</p>
\t\t\t\t\t</header>";
        // line 33
        $this->displayBlock('tool_bar', $context, $blocks);
    }

    public function block_tool_bar($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  211 => 83,  150 => 85,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 27,  180 => 103,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  172 => 70,  160 => 91,  153 => 78,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  146 => 10,  70 => 24,  76 => 34,  77 => 35,  100 => 52,  188 => 20,  155 => 87,  152 => 86,  129 => 63,  126 => 63,  114 => 62,  84 => 40,  81 => 13,  181 => 81,  178 => 73,  170 => 85,  167 => 70,  165 => 69,  148 => 68,  137 => 77,  113 => 43,  90 => 33,  65 => 22,  58 => 20,  34 => 11,  23 => 4,  127 => 62,  124 => 55,  110 => 88,  104 => 41,  97 => 27,  53 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 41,  169 => 33,  140 => 62,  132 => 57,  128 => 56,  107 => 59,  61 => 43,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 113,  119 => 57,  102 => 40,  71 => 31,  67 => 36,  63 => 29,  59 => 41,  87 => 47,  38 => 10,  93 => 36,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 30,  163 => 28,  158 => 90,  156 => 81,  151 => 20,  142 => 59,  138 => 61,  136 => 72,  121 => 58,  117 => 57,  105 => 58,  91 => 35,  62 => 23,  49 => 17,  94 => 44,  89 => 43,  85 => 16,  75 => 29,  68 => 49,  56 => 19,  27 => 3,  21 => 2,  44 => 12,  31 => 8,  25 => 5,  46 => 12,  26 => 1,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 25,  69 => 29,  47 => 15,  40 => 17,  37 => 7,  22 => 3,  246 => 90,  157 => 81,  145 => 65,  139 => 77,  131 => 65,  123 => 50,  120 => 54,  115 => 59,  111 => 53,  108 => 85,  101 => 52,  98 => 46,  96 => 45,  83 => 45,  74 => 33,  66 => 47,  55 => 20,  52 => 20,  50 => 22,  43 => 14,  41 => 16,  35 => 6,  32 => 5,  29 => 2,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 85,  182 => 47,  176 => 99,  173 => 99,  168 => 84,  164 => 59,  162 => 85,  154 => 21,  149 => 91,  147 => 90,  144 => 80,  141 => 7,  133 => 74,  130 => 73,  125 => 61,  122 => 68,  116 => 56,  112 => 48,  109 => 52,  106 => 42,  103 => 55,  99 => 39,  95 => 37,  92 => 43,  86 => 42,  82 => 61,  80 => 31,  73 => 28,  64 => 22,  60 => 21,  57 => 25,  54 => 37,  51 => 16,  48 => 21,  45 => 19,  42 => 10,  39 => 9,  36 => 12,  33 => 10,  30 => 11,);
    }
}
