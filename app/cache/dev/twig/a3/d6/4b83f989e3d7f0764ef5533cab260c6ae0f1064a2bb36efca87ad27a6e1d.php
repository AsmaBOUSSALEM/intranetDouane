<?php

/* douaneintraBundle:Profile:show_content.html.twig */
class __TwigTemplate_a3d64b83f989e3d7f0764ef5533cab260c6ae0f1064a2bb36efca87ad27a6e1d extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show form\">
    <p style=\"margin-bottom: 25px; margin-top: 45px;\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 56,  81 => 35,  211 => 79,  194 => 88,  188 => 85,  180 => 78,  175 => 75,  160 => 71,  155 => 70,  150 => 69,  129 => 56,  126 => 55,  104 => 52,  90 => 41,  20 => 1,  146 => 70,  137 => 68,  127 => 58,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 24,  65 => 22,  34 => 7,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 78,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 51,  102 => 51,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 40,  38 => 8,  93 => 43,  88 => 6,  78 => 30,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 30,  91 => 36,  62 => 15,  49 => 13,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 4,  25 => 7,  46 => 12,  26 => 12,  28 => 4,  24 => 7,  19 => 2,  79 => 33,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 70,  131 => 52,  123 => 47,  120 => 40,  115 => 38,  111 => 55,  108 => 54,  101 => 48,  98 => 48,  96 => 46,  83 => 37,  74 => 29,  66 => 26,  55 => 17,  52 => 18,  50 => 8,  43 => 15,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 56,  122 => 55,  116 => 41,  112 => 37,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 42,  86 => 38,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 21,  57 => 14,  54 => 17,  51 => 16,  48 => 12,  45 => 13,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 2,);
    }
}
