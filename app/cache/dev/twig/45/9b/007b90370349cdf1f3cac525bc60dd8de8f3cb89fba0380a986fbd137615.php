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
        return "CCDNForumForumBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  135 => 20,  130 => 10,  125 => 7,  119 => 77,  94 => 52,  92 => 49,  89 => 48,  85 => 47,  74 => 38,  67 => 32,  65 => 30,  60 => 26,  58 => 20,  55 => 19,  49 => 15,  41 => 9,  36 => 7,  28 => 2,  25 => 1,  241 => 96,  237 => 92,  230 => 89,  228 => 88,  225 => 86,  211 => 83,  209 => 82,  191 => 81,  187 => 77,  185 => 76,  182 => 74,  167 => 70,  165 => 69,  148 => 68,  145 => 36,  143 => 64,  140 => 30,  138 => 61,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  112 => 48,  110 => 46,  106 => 42,  104 => 41,  102 => 40,  99 => 39,  95 => 37,  93 => 36,  91 => 35,  88 => 34,  80 => 31,  72 => 36,  70 => 24,  64 => 22,  61 => 21,  59 => 20,  56 => 19,  54 => 17,  51 => 17,  46 => 12,  44 => 10,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
