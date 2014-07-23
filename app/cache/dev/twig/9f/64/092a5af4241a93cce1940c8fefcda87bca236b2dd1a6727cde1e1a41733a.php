<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post.html.twig */
class __TwigTemplate_9f64092a5af4241a93cce1940c8fefcda87bca236b2dd1a6727cde1e1a41733a extends Twig_Template
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
        // line 25
        $context["post_panel"] = $this;
        // line 26
        $context["panel"] = $context["post_panel"]->getclass((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"));
        // line 28
        echo "<div class=\"col-md-12\">
\t\t<article class=\"row panel ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "html", null, true);
        echo " clearfix\"";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
            echo " id=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
            echo "\"";
        }
        echo ">

\t\t    <header class=\"panel-heading\">";
        // line 32
        $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 33
        echo "</header>

\t\t\t<div class=\"panel-body\">";
        // line 36
        $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 37
        echo "</div>

\t\t</article>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function getclass($_post = null, $_topic = null)
    {
        $context = $this->env->mergeGlobals(array(
            "post" => $_post,
            "topic" => $_topic,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == true)) {
                // line 6
                echo "panel-danger";
            } else {
                // line 8
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id") && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"))) {
                    // line 9
                    if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"), "firstPost")) {
                        // line 10
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic"), "firstPost"), "id") == $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id"))) {
                            // line 11
                            echo "panel-primary";
                        } else {
                            // line 13
                            echo "panel-default";
                        }
                    } else {
                        // line 16
                        echo "panel-default";
                    }
                } else {
                    // line 19
                    echo "panel-default";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 75,  167 => 94,  152 => 85,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 63,  110 => 82,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 13,  211 => 83,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 91,  155 => 63,  150 => 49,  129 => 53,  126 => 63,  104 => 53,  90 => 47,  20 => 1,  146 => 61,  137 => 76,  127 => 62,  70 => 37,  58 => 30,  53 => 24,  84 => 39,  76 => 10,  77 => 42,  65 => 33,  34 => 14,  23 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 66,  132 => 66,  128 => 72,  107 => 57,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 67,  119 => 47,  102 => 55,  71 => 59,  67 => 5,  63 => 27,  59 => 27,  87 => 47,  38 => 15,  93 => 52,  88 => 46,  78 => 11,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 70,  142 => 59,  138 => 69,  136 => 72,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 32,  49 => 22,  94 => 48,  89 => 19,  85 => 16,  75 => 39,  68 => 57,  56 => 28,  27 => 7,  21 => 25,  44 => 13,  31 => 10,  25 => 28,  46 => 14,  26 => 4,  28 => 29,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 6,  47 => 37,  40 => 16,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 65,  123 => 58,  120 => 61,  115 => 59,  111 => 42,  108 => 58,  101 => 53,  98 => 54,  96 => 49,  83 => 45,  74 => 9,  66 => 56,  55 => 3,  52 => 18,  50 => 23,  43 => 14,  41 => 33,  35 => 6,  32 => 8,  29 => 8,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 85,  176 => 72,  173 => 99,  168 => 80,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 61,  122 => 67,  116 => 64,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 49,  95 => 53,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 28,  60 => 21,  57 => 22,  54 => 27,  51 => 20,  48 => 22,  45 => 36,  42 => 16,  39 => 32,  36 => 9,  33 => 12,  30 => 7,);
    }
}
