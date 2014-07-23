<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_c4a362a743dab7597ffcb7cdce660b652e447fd9d70ce91597d32bbb09463743 extends Twig_Template
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
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 35
                echo "        <span class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 76,  152 => 74,  148 => 69,  124 => 62,  118 => 64,  215 => 37,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 33,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 80,  172 => 70,  153 => 78,  114 => 39,  110 => 46,  97 => 52,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 77,  113 => 55,  81 => 47,  211 => 83,  194 => 88,  188 => 88,  180 => 103,  175 => 89,  160 => 91,  155 => 75,  150 => 49,  129 => 64,  126 => 63,  104 => 51,  90 => 46,  20 => 1,  146 => 81,  137 => 65,  127 => 62,  70 => 24,  58 => 32,  53 => 30,  84 => 48,  76 => 34,  77 => 35,  65 => 20,  34 => 26,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 84,  159 => 89,  143 => 64,  135 => 20,  119 => 77,  102 => 40,  71 => 31,  67 => 32,  63 => 34,  59 => 18,  87 => 49,  38 => 10,  93 => 47,  88 => 34,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 79,  163 => 78,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 61,  117 => 57,  105 => 35,  91 => 29,  62 => 19,  49 => 15,  94 => 30,  89 => 28,  85 => 47,  75 => 43,  68 => 36,  56 => 35,  27 => 5,  21 => 2,  44 => 26,  31 => 25,  25 => 3,  46 => 13,  26 => 12,  28 => 20,  24 => 4,  19 => 2,  79 => 25,  72 => 36,  69 => 40,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 81,  145 => 36,  139 => 77,  131 => 61,  123 => 58,  120 => 57,  115 => 59,  111 => 53,  108 => 36,  101 => 52,  98 => 46,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 17,  52 => 16,  50 => 29,  43 => 12,  41 => 11,  35 => 8,  32 => 7,  29 => 6,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 99,  173 => 99,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 90,  144 => 80,  141 => 70,  133 => 74,  130 => 10,  125 => 59,  122 => 68,  116 => 56,  112 => 48,  109 => 52,  106 => 42,  103 => 34,  99 => 39,  95 => 37,  92 => 49,  86 => 27,  82 => 39,  80 => 43,  73 => 23,  64 => 38,  60 => 26,  57 => 25,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 7,  36 => 7,  33 => 5,  30 => 21,);
    }
}
