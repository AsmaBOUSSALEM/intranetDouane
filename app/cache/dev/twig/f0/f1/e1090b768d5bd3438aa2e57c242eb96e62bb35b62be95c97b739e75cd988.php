<?php

/* douaneintraBundle:User/Category:index.html.twig */
class __TwigTemplate_f0f1e1090b768d5bd3438aa2e57c242eb96e62bb35b62be95c97b739e75cd988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category"), "user"), "index"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.category.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            $this->env->loadTemplate("CCDNForumForumBundle:User:Category/Partial/item_category.html.twig")->display($context);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 22
            echo "<section class=\"row clearfix\">
\t\t\t<div class=\"well text-center\">
\t\t\t\t<span class=\"lead\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.none", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 26
            echo "</span>
\t\t\t</div>
\t\t</section>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:User/Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 64,  118 => 60,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 77,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 44,  110 => 82,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 38,  211 => 79,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 66,  155 => 63,  150 => 69,  129 => 53,  126 => 55,  104 => 30,  90 => 44,  20 => 1,  146 => 61,  137 => 68,  127 => 62,  70 => 32,  58 => 20,  53 => 31,  84 => 39,  76 => 48,  77 => 30,  65 => 22,  34 => 7,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 66,  128 => 83,  107 => 57,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 61,  143 => 73,  135 => 67,  119 => 47,  102 => 49,  71 => 59,  67 => 31,  63 => 28,  59 => 20,  87 => 22,  38 => 8,  93 => 26,  88 => 43,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 61,  166 => 16,  163 => 68,  158 => 82,  156 => 81,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 27,  49 => 14,  94 => 42,  89 => 41,  85 => 30,  75 => 34,  68 => 57,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 5,  25 => 4,  46 => 12,  26 => 4,  28 => 6,  24 => 4,  19 => 1,  79 => 22,  72 => 36,  69 => 32,  47 => 15,  40 => 14,  37 => 12,  22 => 3,  246 => 90,  157 => 95,  145 => 78,  139 => 57,  131 => 65,  123 => 47,  120 => 61,  115 => 59,  111 => 42,  108 => 53,  101 => 48,  98 => 45,  96 => 76,  83 => 37,  74 => 20,  66 => 56,  55 => 17,  52 => 18,  50 => 21,  43 => 14,  41 => 9,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 72,  173 => 88,  168 => 72,  164 => 59,  162 => 85,  154 => 74,  149 => 91,  147 => 90,  144 => 49,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 45,  112 => 55,  109 => 41,  106 => 51,  103 => 55,  99 => 49,  95 => 26,  92 => 24,  86 => 40,  82 => 67,  80 => 36,  73 => 33,  64 => 28,  60 => 53,  57 => 23,  54 => 17,  51 => 16,  48 => 12,  45 => 13,  42 => 10,  39 => 9,  36 => 7,  33 => 6,  30 => 7,);
    }
}
