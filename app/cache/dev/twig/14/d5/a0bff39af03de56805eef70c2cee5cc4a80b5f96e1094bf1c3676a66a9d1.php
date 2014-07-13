<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig */
class __TwigTemplate_14d5a0bff39af03de56805eef70c2cee5cc4a80b5f96e1094bf1c3676a66a9d1 extends Twig_Template
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
        // line 3
        if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
            // line 4
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate")) {
                // line 5
                echo "<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 9
                echo $this->env->getExtension('translator')->trans("post.edited-by", array(), "CCDNForumForumBundle");
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedBy"), "html", null, true);
                // line 12
                echo "&nbsp;&#183;

\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "edited_datetime_format")), "html", null, true);
                // line 16
                echo "</abbr>
\t\t\t\t</div>
\t\t    </div>";
            }
        }
        // line 22
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == true)) {
            // line 23
            echo "<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t        <i class=\"glyphicon glyphicon-trash\"></i>";
            // line 27
            echo $this->env->getExtension('translator')->trans("post.deleted-by", array(), "CCDNForumForumBundle");
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedBy"), "html", null, true);
            // line 30
            echo "&nbsp;&#183;

\t\t        <abbr class=\"timestamper\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "deleted_datetime_format")), "html", null, true);
            // line 34
            echo "</abbr>
\t\t\t</div>";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 38
                echo "<div class=\"pull-right\">
\t                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#post_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "\" href=\"#post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.show", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 41
                echo "</a>
\t\t\t\t</div>";
            }
            // line 44
            echo "</div>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 47
                echo "<section class=\"accordion-body collapse\" id=\"post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 48
                $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
                // line 49
                echo "</section>";
            }
        } else {
            // line 52
            echo "<section id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
            echo "_body\">";
            // line 53
            $this->env->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig")->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
            // line 54
            echo "</section>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  180 => 93,  175 => 89,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  172 => 70,  160 => 66,  153 => 80,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  146 => 61,  70 => 37,  76 => 48,  77 => 30,  100 => 52,  188 => 20,  155 => 63,  152 => 74,  129 => 53,  126 => 63,  114 => 63,  84 => 39,  81 => 35,  181 => 81,  178 => 73,  170 => 87,  167 => 76,  165 => 75,  148 => 69,  137 => 68,  113 => 43,  90 => 47,  65 => 33,  58 => 30,  34 => 10,  23 => 4,  127 => 62,  124 => 64,  110 => 82,  104 => 53,  97 => 27,  53 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 66,  128 => 83,  107 => 57,  61 => 21,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 73,  135 => 67,  119 => 47,  102 => 49,  71 => 59,  67 => 34,  63 => 27,  59 => 20,  87 => 40,  38 => 12,  93 => 43,  88 => 46,  78 => 63,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 68,  158 => 82,  156 => 81,  151 => 73,  142 => 59,  138 => 69,  136 => 56,  121 => 46,  117 => 57,  105 => 56,  91 => 25,  62 => 32,  49 => 24,  94 => 48,  89 => 41,  85 => 30,  75 => 39,  68 => 57,  56 => 28,  27 => 5,  21 => 3,  44 => 13,  31 => 10,  25 => 5,  46 => 14,  26 => 4,  28 => 6,  24 => 4,  19 => 1,  79 => 33,  72 => 38,  69 => 32,  47 => 15,  40 => 15,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 78,  139 => 57,  131 => 65,  123 => 50,  120 => 61,  115 => 59,  111 => 42,  108 => 53,  101 => 53,  98 => 45,  96 => 49,  83 => 37,  74 => 20,  66 => 56,  55 => 21,  52 => 26,  50 => 23,  43 => 14,  41 => 13,  35 => 6,  32 => 8,  29 => 9,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 72,  173 => 88,  168 => 80,  164 => 59,  162 => 85,  154 => 74,  149 => 91,  147 => 90,  144 => 49,  141 => 76,  133 => 67,  130 => 85,  125 => 61,  122 => 60,  116 => 64,  112 => 55,  109 => 41,  106 => 54,  103 => 55,  99 => 49,  95 => 26,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 28,  60 => 21,  57 => 22,  54 => 27,  51 => 20,  48 => 22,  45 => 21,  42 => 16,  39 => 9,  36 => 5,  33 => 12,  30 => 7,);
    }
}
