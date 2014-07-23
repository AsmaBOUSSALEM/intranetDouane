<?php

/* douaneintraBundle:User/Topic:show.html.twig */
class __TwigTemplate_fa5ea4904d134b21574934a14593807a6cbf8551b8c5e9f685e22081f6abca5b extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic"), "user"), "show"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.show", array("%topic_title%" => twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle"))), "CCDNForumForumBundle"), "html", null, true);
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
        echo "<section class=\"row clearfix btn-toolbar\">";
        // line 20
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig")->display($context);
        // line 21
        echo "</section>";
        // line 23
        $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig")->display($context);
        // line 25
        if ((($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted") || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed")) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky"))) {
            // line 26
            $this->env->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig")->display($context);
        }
        // line 29
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 31
        echo "<section class=\"row clearfix\">";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
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
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 33
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post.html.twig")->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</section>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:User/Topic:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 94,  167 => 95,  152 => 86,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 108,  185 => 105,  161 => 90,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 62,  110 => 60,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 96,  113 => 43,  81 => 13,  211 => 79,  194 => 88,  188 => 20,  180 => 103,  175 => 89,  160 => 91,  155 => 87,  150 => 85,  129 => 71,  126 => 55,  104 => 35,  90 => 33,  20 => 1,  146 => 81,  137 => 77,  127 => 62,  70 => 27,  58 => 20,  53 => 18,  84 => 37,  76 => 43,  77 => 35,  65 => 22,  34 => 14,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 78,  132 => 66,  128 => 72,  107 => 59,  61 => 28,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 81,  135 => 76,  119 => 47,  102 => 52,  71 => 31,  67 => 36,  63 => 23,  59 => 21,  87 => 47,  38 => 10,  93 => 52,  88 => 46,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 61,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 57,  105 => 58,  91 => 40,  62 => 23,  49 => 16,  94 => 48,  89 => 19,  85 => 16,  75 => 36,  68 => 33,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 9,  25 => 5,  46 => 12,  26 => 4,  28 => 10,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 29,  47 => 37,  40 => 17,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 72,  123 => 47,  120 => 67,  115 => 59,  111 => 42,  108 => 58,  101 => 54,  98 => 54,  96 => 50,  83 => 45,  74 => 9,  66 => 26,  55 => 20,  52 => 24,  50 => 22,  43 => 14,  41 => 33,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 84,  182 => 104,  176 => 99,  173 => 99,  168 => 72,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 80,  141 => 76,  133 => 74,  130 => 73,  125 => 69,  122 => 68,  116 => 63,  112 => 61,  109 => 41,  106 => 37,  103 => 55,  99 => 51,  95 => 51,  92 => 43,  86 => 39,  82 => 35,  80 => 33,  73 => 32,  64 => 25,  60 => 21,  57 => 28,  54 => 17,  51 => 16,  48 => 21,  45 => 18,  42 => 10,  39 => 9,  36 => 9,  33 => 10,  30 => 11,);
    }
}
