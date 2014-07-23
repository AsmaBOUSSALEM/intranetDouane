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
        echo "\" style=\"width: 100%; height: 150px; margin-bottom: 34px; \">



";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "
<ul class=\"nav nav-pills\">
  <li class=\"active\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("douaneintra_homepage");
            echo "\">Acceuil</a></li>
  <li class=\"active\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("show");
            echo "\">
afficher tous les documents
</a></li>
  <li class=\"active\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("upload");
            echo "\">
uploader un nouveau document
</a></li>
<li class=\"active\"><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("display_route");
            echo "\">
chercher par theme
</a></li>
<li class=\"active\"><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ccdn_homepage");
            echo "\">
forum
</a></li>
";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "<li class=\"active\"> <a href=\"";
                echo $this->env->getExtension('routing')->getPath("formation_route");
                echo "\">
ajouter formation
</a></li>

<li class=\"active\"><a href=\"";
                // line 44
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create");
                echo "\">
Ajouter un theme
</a></li>

<li class=\"active\"><a href=\"";
                // line 48
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
                echo "\">
Gérer le forum
</a></li>
";
            }
            // line 52
            echo "<li class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
logout
</a></li>


</ul>


";
        }
        // line 62
        $this->displayBlock('navbar', $context, $blocks);
        // line 68
        echo "<div class=\"container clearfix\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t        <aside class=\"col-md-2 page-sidebar-left\">";
        // line 72
        $this->displayBlock('sidebar', $context, $blocks);
        // line 74
        echo "</aside>

\t\t\t\t        <div class=\"col-md-10 page-body-right\">
\t\t\t\t\t\t\t<div id=\"top clearfix\"></div>";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "</div>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
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
        // line 119
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

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 72
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    // line 91
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
        return array (  225 => 91,  220 => 78,  215 => 72,  210 => 62,  205 => 10,  200 => 7,  194 => 119,  169 => 94,  167 => 91,  164 => 90,  160 => 89,  149 => 80,  147 => 78,  142 => 74,  140 => 72,  133 => 62,  120 => 52,  113 => 48,  106 => 44,  90 => 36,  84 => 33,  78 => 30,  64 => 24,  55 => 19,  49 => 15,  41 => 9,  28 => 2,  25 => 1,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 68,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 37,  108 => 31,  105 => 30,  94 => 42,  92 => 37,  85 => 30,  77 => 24,  72 => 27,  68 => 26,  62 => 23,  57 => 14,  50 => 8,  36 => 7,  98 => 40,  96 => 39,  93 => 43,  89 => 41,  87 => 33,  83 => 37,  81 => 35,  79 => 33,  75 => 22,  73 => 28,  65 => 22,  60 => 21,  58 => 20,  56 => 19,  54 => 13,  51 => 17,  46 => 12,  44 => 10,  42 => 10,  39 => 6,  35 => 6,  32 => 5,  27 => 3,);
    }
}
