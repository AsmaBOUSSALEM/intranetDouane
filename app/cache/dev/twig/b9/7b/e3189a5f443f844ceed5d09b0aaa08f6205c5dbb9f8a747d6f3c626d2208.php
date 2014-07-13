<?php

/* CCDNForumForumBundle:User/Post/Partial:post_preview.html.twig */
class __TwigTemplate_b97be3189a5f443f844ceed5d09b0aaa08f6205c5dbb9f8a747d6f3c626d2208 extends Twig_Template
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
        // line 2
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")), "getBody")) {
            // line 3
            echo "<h4>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.preview", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 5
            echo "</h4>

\t\t<div class=\"col-md-12\">
\t\t\t<article class=\"row panel panel-default clearfix\"";
            // line 8
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "\"";
            }
            echo ">

\t\t\t    <header class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 12
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
                // line 13
                echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
                // line 16
                echo "&nbsp;&#183;&nbsp;";
            }
            // line 20
            echo "<span class=\"timestamper\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
            // line 22
            echo "</span>
\t\t\t\t\t</h3>
\t\t\t\t</header>

\t\t\t\t<div class=\"panel-body\">";
            // line 27
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig")->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            // line 28
            echo "</div>

\t\t\t</article>
\t\t</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:post_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  180 => 93,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  172 => 70,  160 => 66,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  146 => 61,  70 => 32,  76 => 48,  77 => 30,  100 => 77,  188 => 20,  155 => 63,  152 => 74,  129 => 53,  114 => 63,  84 => 39,  81 => 35,  181 => 81,  178 => 73,  170 => 87,  167 => 76,  165 => 75,  148 => 69,  137 => 68,  90 => 44,  65 => 28,  58 => 20,  34 => 10,  126 => 63,  118 => 65,  113 => 43,  23 => 3,  127 => 62,  124 => 64,  110 => 82,  104 => 54,  97 => 27,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 66,  128 => 83,  107 => 57,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 60,  143 => 73,  135 => 67,  119 => 47,  102 => 49,  71 => 59,  67 => 31,  63 => 27,  59 => 20,  87 => 40,  38 => 12,  93 => 43,  88 => 41,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 68,  158 => 82,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 27,  49 => 24,  94 => 45,  89 => 41,  85 => 30,  75 => 29,  68 => 57,  56 => 19,  27 => 5,  21 => 2,  44 => 13,  31 => 5,  25 => 4,  46 => 14,  26 => 4,  28 => 6,  24 => 4,  19 => 1,  79 => 33,  72 => 29,  69 => 32,  47 => 15,  40 => 14,  37 => 12,  22 => 3,  246 => 90,  157 => 95,  145 => 78,  139 => 57,  131 => 65,  123 => 50,  120 => 61,  115 => 59,  111 => 42,  108 => 53,  101 => 53,  98 => 45,  96 => 44,  83 => 37,  74 => 20,  66 => 56,  55 => 21,  52 => 26,  50 => 21,  43 => 14,  41 => 13,  35 => 6,  32 => 8,  29 => 13,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 72,  173 => 88,  168 => 80,  164 => 59,  162 => 85,  154 => 74,  149 => 91,  147 => 90,  144 => 49,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 64,  112 => 55,  109 => 41,  106 => 55,  103 => 55,  99 => 49,  95 => 26,  92 => 44,  86 => 39,  82 => 67,  80 => 36,  73 => 28,  64 => 28,  60 => 21,  57 => 22,  54 => 17,  51 => 20,  48 => 16,  45 => 21,  42 => 12,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
