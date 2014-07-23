<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_410c5b67b02c8de6480b1b7f318d83d4fec847bb6a75e338e60c7a2101693048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  363 => 153,  358 => 151,  343 => 146,  340 => 145,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  353 => 328,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 178,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  351 => 192,  342 => 137,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  275 => 105,  270 => 102,  262 => 98,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  134 => 39,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  367 => 339,  361 => 152,  357 => 123,  348 => 140,  345 => 147,  338 => 135,  334 => 141,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 286,  297 => 179,  291 => 102,  288 => 118,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  181 => 65,  237 => 92,  165 => 60,  167 => 91,  152 => 46,  148 => 68,  124 => 55,  118 => 49,  215 => 72,  212 => 78,  191 => 67,  185 => 66,  161 => 63,  100 => 39,  331 => 140,  316 => 132,  311 => 128,  308 => 287,  303 => 122,  300 => 180,  296 => 121,  292 => 119,  289 => 113,  286 => 112,  284 => 114,  281 => 114,  277 => 112,  274 => 110,  271 => 110,  266 => 106,  261 => 104,  256 => 96,  250 => 99,  234 => 94,  195 => 112,  184 => 63,  178 => 59,  172 => 57,  153 => 56,  114 => 62,  110 => 22,  97 => 41,  267 => 101,  244 => 96,  239 => 93,  236 => 92,  232 => 88,  228 => 88,  225 => 91,  222 => 83,  213 => 78,  210 => 77,  207 => 75,  205 => 108,  202 => 94,  200 => 72,  197 => 69,  192 => 73,  190 => 76,  186 => 69,  174 => 65,  170 => 56,  113 => 48,  81 => 24,  211 => 83,  194 => 68,  188 => 102,  180 => 103,  175 => 58,  160 => 89,  155 => 47,  150 => 55,  129 => 63,  126 => 63,  104 => 31,  90 => 27,  20 => 1,  146 => 81,  137 => 77,  127 => 35,  70 => 19,  58 => 14,  53 => 11,  84 => 25,  76 => 27,  77 => 20,  65 => 11,  34 => 4,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 329,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 124,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 106,  268 => 85,  264 => 105,  258 => 94,  252 => 100,  247 => 98,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 102,  169 => 94,  140 => 58,  132 => 57,  128 => 56,  107 => 59,  61 => 23,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 86,  238 => 95,  235 => 89,  230 => 89,  227 => 86,  224 => 81,  221 => 41,  219 => 76,  217 => 38,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 21,  59 => 13,  87 => 26,  38 => 5,  93 => 28,  88 => 28,  78 => 24,  201 => 106,  196 => 92,  183 => 17,  171 => 81,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 74,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 14,  94 => 21,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  27 => 7,  21 => 2,  44 => 8,  31 => 5,  25 => 35,  46 => 10,  26 => 3,  28 => 3,  24 => 3,  19 => 1,  79 => 29,  72 => 18,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 59,  111 => 47,  108 => 33,  101 => 43,  98 => 29,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 7,  29 => 4,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 90,  162 => 59,  154 => 60,  149 => 80,  147 => 43,  144 => 42,  141 => 51,  133 => 62,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 55,  99 => 23,  95 => 39,  92 => 28,  86 => 42,  82 => 25,  80 => 24,  73 => 24,  64 => 17,  60 => 20,  57 => 39,  54 => 15,  51 => 37,  48 => 11,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
