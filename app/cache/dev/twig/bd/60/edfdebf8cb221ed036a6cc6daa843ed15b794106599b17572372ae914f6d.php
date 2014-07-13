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
        return array (  143 => 73,  124 => 64,  120 => 61,  118 => 60,  107 => 57,  99 => 49,  81 => 38,  73 => 33,  24 => 4,  104 => 30,  97 => 47,  55 => 22,  43 => 14,  145 => 61,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  103 => 55,  98 => 39,  83 => 34,  70 => 32,  53 => 18,  28 => 6,  95 => 46,  86 => 40,  84 => 39,  79 => 22,  76 => 44,  64 => 28,  40 => 14,  33 => 6,  30 => 5,  106 => 43,  101 => 48,  96 => 46,  89 => 36,  80 => 38,  71 => 41,  69 => 35,  65 => 31,  63 => 23,  60 => 29,  45 => 14,  41 => 13,  38 => 12,  34 => 6,  31 => 8,  25 => 3,  23 => 5,  21 => 3,  19 => 1,  187 => 85,  182 => 47,  177 => 41,  169 => 33,  166 => 30,  163 => 28,  161 => 27,  110 => 44,  82 => 39,  66 => 24,  61 => 21,  59 => 30,  52 => 26,  49 => 17,  47 => 15,  37 => 12,  29 => 4,  26 => 5,  156 => 76,  154 => 21,  151 => 20,  146 => 10,  141 => 7,  139 => 70,  137 => 68,  135 => 67,  132 => 66,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 59,  112 => 56,  108 => 52,  105 => 56,  94 => 38,  92 => 24,  85 => 42,  77 => 29,  75 => 34,  72 => 21,  68 => 40,  62 => 27,  57 => 23,  50 => 21,  36 => 7,  93 => 45,  91 => 44,  87 => 35,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 12,  44 => 17,  42 => 18,  39 => 6,  35 => 11,  32 => 9,  27 => 7,);
    }
}
