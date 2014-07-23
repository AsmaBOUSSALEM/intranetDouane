<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_eb9309b1798fd3ceb6ddbc4d034f585d977332a8934b43dce7ff93e7eb69a017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    
    </head>
    <body style=\"padding-top: 0;\">

    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("concours-douane.jpg"), "html", null, true);
        echo "\" style=\"width: 100%; height: 150px; \">






";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "
<ul class=\"nav nav-pills\">
  <li class=\"active\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("douaneintra_homepage");
            echo "\">Acceuil</a></li>
  <li class=\"active\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("show");
            echo "\">
afficher tous les documents
</a></li>
  <li class=\"active\"><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("upload");
            echo "\">
uploader un nouveau document
</a></li>
<li class=\"active\"><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("display_route");
            echo "\">
chercher par theme
</a></li>
<li class=\"active\"><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("ccdn_homepage");
            echo "\">
forum
</a></li>
";
            // line 42
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "<li class=\"active\"> <a href=\"";
                echo $this->env->getExtension('routing')->getPath("formation_route");
                echo "\">
ajouter formation
</a></li>

<li class=\"active\"><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create");
                echo "\">
Ajouter un theme
</a></li>

<li class=\"active\"><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
                echo "\">
Gérer le forum
</a></li>
";
            }
            // line 55
            echo "
<li class=\"active\"><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
logout
</a></li>

</ul>


";
        }
        // line 64
        echo "



        ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 69
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 70
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        <div>
        
            ";
        // line 78
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 81
        echo "
        </div>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    </body>
</html>
";
    }

    // line 78
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 79
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 79,  194 => 88,  188 => 85,  180 => 78,  175 => 75,  160 => 71,  155 => 70,  150 => 69,  129 => 56,  126 => 55,  104 => 43,  90 => 36,  20 => 1,  146 => 68,  137 => 68,  127 => 58,  70 => 27,  58 => 19,  53 => 31,  84 => 33,  76 => 48,  77 => 24,  65 => 37,  34 => 11,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 74,  140 => 64,  132 => 65,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 78,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 66,  119 => 51,  102 => 42,  71 => 41,  67 => 15,  63 => 36,  59 => 30,  87 => 33,  38 => 15,  93 => 28,  88 => 6,  78 => 30,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 76,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 30,  91 => 36,  62 => 15,  49 => 13,  94 => 42,  89 => 52,  85 => 30,  75 => 22,  68 => 26,  56 => 32,  27 => 6,  21 => 3,  44 => 7,  31 => 6,  25 => 7,  46 => 7,  26 => 12,  28 => 5,  24 => 7,  19 => 1,  79 => 49,  72 => 21,  69 => 39,  47 => 23,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 70,  131 => 52,  123 => 47,  120 => 40,  115 => 38,  111 => 37,  108 => 31,  101 => 48,  98 => 31,  96 => 39,  83 => 25,  74 => 29,  66 => 26,  55 => 15,  52 => 18,  50 => 8,  43 => 15,  41 => 11,  35 => 14,  32 => 14,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 74,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 56,  122 => 55,  116 => 41,  112 => 47,  109 => 34,  106 => 51,  103 => 32,  99 => 40,  95 => 57,  92 => 37,  86 => 49,  82 => 32,  80 => 38,  73 => 28,  64 => 36,  60 => 22,  57 => 14,  54 => 13,  51 => 26,  48 => 12,  45 => 12,  42 => 9,  39 => 7,  36 => 5,  33 => 9,  30 => 2,);
    }
}
