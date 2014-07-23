<?php

/* CCDNForumForumBundle:Common:Layout/base.html.twig */
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
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 66,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 37,  108 => 31,  105 => 30,  94 => 42,  92 => 37,  85 => 30,  77 => 24,  72 => 21,  68 => 16,  62 => 15,  57 => 14,  50 => 8,  36 => 5,  98 => 45,  96 => 44,  93 => 43,  89 => 41,  87 => 33,  83 => 37,  81 => 35,  79 => 33,  75 => 22,  73 => 28,  65 => 22,  60 => 21,  58 => 20,  56 => 19,  54 => 13,  51 => 16,  46 => 12,  44 => 7,  42 => 10,  39 => 6,  35 => 6,  32 => 5,  27 => 3,);
    }
}
