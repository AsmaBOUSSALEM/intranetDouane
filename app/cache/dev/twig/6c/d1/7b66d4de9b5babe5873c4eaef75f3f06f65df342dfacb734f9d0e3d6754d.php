<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_6cd17b66d4de9b5babe5873c4eaef75f3f06f65df342dfacb734f9d0e3d6754d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  211 => 83,  150 => 85,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  180 => 103,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  172 => 70,  160 => 91,  153 => 78,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  146 => 81,  70 => 24,  76 => 34,  77 => 35,  100 => 52,  188 => 20,  155 => 87,  152 => 86,  129 => 63,  114 => 30,  84 => 40,  81 => 13,  181 => 81,  178 => 73,  170 => 85,  167 => 70,  165 => 69,  148 => 68,  137 => 77,  90 => 33,  65 => 22,  58 => 20,  34 => 11,  126 => 63,  118 => 64,  113 => 43,  23 => 4,  127 => 62,  124 => 55,  110 => 46,  104 => 41,  97 => 27,  53 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 62,  132 => 57,  128 => 56,  107 => 59,  61 => 43,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 60,  119 => 57,  102 => 21,  71 => 31,  67 => 36,  63 => 29,  59 => 41,  87 => 47,  38 => 6,  93 => 36,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 77,  142 => 59,  138 => 61,  136 => 72,  121 => 58,  117 => 33,  105 => 58,  91 => 35,  62 => 23,  49 => 17,  94 => 10,  89 => 7,  85 => 16,  75 => 29,  68 => 49,  56 => 19,  27 => 3,  21 => 2,  44 => 12,  31 => 8,  25 => 5,  46 => 12,  26 => 1,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 25,  69 => 29,  47 => 15,  40 => 17,  37 => 7,  22 => 3,  246 => 90,  157 => 81,  145 => 65,  139 => 77,  131 => 65,  123 => 50,  120 => 54,  115 => 59,  111 => 28,  108 => 58,  101 => 52,  98 => 46,  96 => 45,  83 => 65,  74 => 33,  66 => 47,  55 => 20,  52 => 10,  50 => 22,  43 => 7,  41 => 16,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 77,  182 => 74,  176 => 99,  173 => 99,  168 => 84,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 47,  125 => 41,  122 => 68,  116 => 56,  112 => 48,  109 => 27,  106 => 42,  103 => 55,  99 => 20,  95 => 37,  92 => 43,  86 => 42,  82 => 39,  80 => 60,  73 => 28,  64 => 22,  60 => 21,  57 => 12,  54 => 37,  51 => 16,  48 => 9,  45 => 19,  42 => 10,  39 => 9,  36 => 12,  33 => 10,  30 => 11,);
    }
}
