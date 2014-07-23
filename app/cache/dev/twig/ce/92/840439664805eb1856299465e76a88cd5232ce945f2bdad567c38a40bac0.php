<?php

/* douaneintraBundle:Security:login.html.twig */
class __TwigTemplate_ce92840439664805eb1856299465e76a88cd5232ce945f2bdad567c38a40bac0 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

<div class=\"container\">

      <form class=\"form-signin\" role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"username\" required autofocus>

        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\">Sign in</button>
      </form>

    </div> <!-- /container -->




";
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 79,  194 => 88,  188 => 85,  180 => 78,  175 => 75,  160 => 71,  155 => 70,  150 => 69,  129 => 56,  126 => 55,  104 => 43,  90 => 36,  20 => 1,  146 => 68,  137 => 68,  127 => 58,  70 => 27,  58 => 19,  53 => 31,  84 => 33,  76 => 48,  77 => 24,  65 => 37,  34 => 7,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 78,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 51,  102 => 42,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 33,  38 => 8,  93 => 28,  88 => 6,  78 => 30,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 30,  91 => 36,  62 => 15,  49 => 13,  94 => 42,  89 => 52,  85 => 30,  75 => 22,  68 => 26,  56 => 32,  27 => 6,  21 => 3,  44 => 7,  31 => 6,  25 => 7,  46 => 7,  26 => 12,  28 => 5,  24 => 7,  19 => 2,  79 => 49,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 70,  131 => 52,  123 => 47,  120 => 40,  115 => 38,  111 => 37,  108 => 31,  101 => 48,  98 => 31,  96 => 39,  83 => 25,  74 => 29,  66 => 26,  55 => 17,  52 => 18,  50 => 15,  43 => 15,  41 => 9,  35 => 14,  32 => 14,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 56,  122 => 55,  116 => 41,  112 => 47,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 37,  86 => 49,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 22,  57 => 14,  54 => 13,  51 => 26,  48 => 12,  45 => 13,  42 => 9,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
