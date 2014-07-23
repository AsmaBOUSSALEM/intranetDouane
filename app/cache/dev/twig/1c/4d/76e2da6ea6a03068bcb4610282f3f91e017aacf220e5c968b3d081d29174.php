<?php

/* douaneintraBundle:Default:docShow.html.twig */
class __TwigTemplate_1c4d76e2da6ea6a03068bcb4610282f3f91e017aacf220e5c968b3d081d29174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "

<center><h3>Liste des documents disponibles</h3></center>
<table class=\"table table-hover\" style=\"margin-top: 30px; margin-left: 25px; margin-right: 55px;\">
<tr>
      <th>nom du document</th>
      <th>nom de la formation</th>
      <th></th>
    </tr>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "<tr><td>
";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nom_document"), "html", null, true);
            echo "  </td>
<td>
";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "formation"), "nom_formation"), "html", null, true);
            echo "  </td>

<td>
<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("download_route", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id_document"))), "html", null, true);
            echo "\">
  telecharger
</a></td></tr>




";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Default:docShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 84,  184 => 75,  178 => 73,  172 => 70,  153 => 62,  114 => 44,  110 => 42,  97 => 39,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 91,  207 => 80,  205 => 79,  202 => 76,  200 => 75,  197 => 74,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 64,  113 => 43,  81 => 35,  211 => 79,  194 => 88,  188 => 70,  180 => 78,  175 => 75,  160 => 66,  155 => 63,  150 => 69,  129 => 53,  126 => 55,  104 => 40,  90 => 36,  20 => 1,  146 => 61,  137 => 54,  127 => 49,  70 => 27,  58 => 20,  53 => 31,  84 => 37,  76 => 48,  77 => 30,  65 => 22,  34 => 7,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 77,  219 => 76,  217 => 83,  208 => 78,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 56,  119 => 47,  102 => 51,  71 => 41,  67 => 15,  63 => 36,  59 => 20,  87 => 40,  38 => 8,  93 => 43,  88 => 36,  78 => 32,  201 => 92,  196 => 90,  183 => 68,  171 => 61,  166 => 63,  163 => 68,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 30,  91 => 37,  62 => 21,  49 => 14,  94 => 42,  89 => 41,  85 => 30,  75 => 29,  68 => 16,  56 => 19,  27 => 3,  21 => 3,  44 => 11,  31 => 3,  25 => 7,  46 => 13,  26 => 12,  28 => 2,  24 => 7,  19 => 2,  79 => 33,  72 => 29,  69 => 39,  47 => 23,  40 => 18,  37 => 10,  22 => 3,  246 => 90,  157 => 64,  145 => 59,  139 => 57,  131 => 54,  123 => 47,  120 => 40,  115 => 44,  111 => 42,  108 => 42,  101 => 48,  98 => 45,  96 => 44,  83 => 37,  74 => 27,  66 => 26,  55 => 17,  52 => 18,  50 => 8,  43 => 15,  41 => 9,  35 => 5,  32 => 5,  29 => 5,  209 => 82,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 72,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 61,  147 => 60,  144 => 49,  141 => 73,  133 => 55,  130 => 51,  125 => 48,  122 => 47,  116 => 45,  112 => 43,  109 => 41,  106 => 51,  103 => 40,  99 => 39,  95 => 38,  92 => 37,  86 => 38,  82 => 33,  80 => 38,  73 => 28,  64 => 22,  60 => 19,  57 => 14,  54 => 16,  51 => 16,  48 => 12,  45 => 13,  42 => 12,  39 => 9,  36 => 5,  33 => 6,  30 => 2,);
    }
}
