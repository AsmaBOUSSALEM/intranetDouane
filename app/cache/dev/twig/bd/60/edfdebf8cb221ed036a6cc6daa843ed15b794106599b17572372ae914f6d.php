<?php

/* CCDNForumForumBundle:Common:Layout/footer.html.twig */
class __TwigTemplate_bd60edfdebf8cb221ed036a6cc6daa843ed15b794106599b17572372ae914f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 3
        echo "<footer class=\"row text-center page-footer\">
\t\t<div class=\"col-md-12\">
\t\t\t<p>
\t\t\t\tPowered by <a rel=\"friend\" target=\"_blank\" href=\"http://www.github.com/codeconsortium/CCDNForumForumBundle\">CCDNForum Forum Bundle</a>.
\t\t\t\tCopyright <a target=\"_blank\" href=\"http://www.codeconsortium.com/\">CodeConsortium</a> 2011 - ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
\t\t\t</p>
\t\t\t<p>
\t\t\t\tGraphics courtesy of <a rel=\"friend\" target=\"_blank\" href=\"http://glyphicons.com/glyphicons-licenses/\">Glyphicons</a>.
\t\t\t\tSmileys courtesy of <a rel=\"friend\" target=\"_blank\" href=\"http://www.freesmileys.org/copyright.php\">freesmileys.org</a>
\t\t\t</p>
\t\t</div>
\t</footer>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  103 => 42,  98 => 39,  83 => 34,  70 => 25,  53 => 18,  28 => 8,  95 => 57,  86 => 49,  84 => 48,  79 => 45,  76 => 44,  64 => 37,  40 => 17,  33 => 13,  30 => 5,  106 => 43,  101 => 48,  96 => 46,  89 => 36,  80 => 38,  71 => 41,  69 => 35,  65 => 31,  63 => 23,  60 => 29,  45 => 14,  41 => 13,  38 => 12,  34 => 6,  31 => 10,  25 => 3,  23 => 5,  21 => 3,  19 => 1,  187 => 85,  182 => 47,  177 => 41,  169 => 33,  166 => 30,  163 => 28,  161 => 27,  110 => 44,  82 => 39,  66 => 24,  61 => 43,  59 => 30,  52 => 26,  49 => 17,  47 => 15,  37 => 15,  29 => 4,  26 => 1,  156 => 76,  154 => 21,  151 => 20,  146 => 10,  141 => 7,  139 => 70,  137 => 57,  135 => 113,  132 => 65,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 38,  112 => 56,  108 => 52,  105 => 30,  94 => 38,  92 => 37,  85 => 42,  77 => 29,  75 => 28,  72 => 21,  68 => 40,  62 => 15,  57 => 19,  50 => 17,  36 => 7,  93 => 26,  91 => 37,  87 => 35,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 12,  44 => 19,  42 => 18,  39 => 6,  35 => 14,  32 => 9,  27 => 7,);
    }
}
