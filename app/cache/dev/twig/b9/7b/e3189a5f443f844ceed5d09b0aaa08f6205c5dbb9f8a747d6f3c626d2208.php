<?php

/* CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig */
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
        return "CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  57 => 22,  55 => 21,  48 => 16,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  116 => 63,  114 => 62,  112 => 61,  104 => 53,  102 => 52,  99 => 51,  96 => 50,  92 => 43,  90 => 42,  86 => 39,  84 => 37,  82 => 35,  80 => 33,  78 => 31,  73 => 27,  65 => 28,  60 => 21,  58 => 20,  56 => 19,  54 => 17,  51 => 20,  46 => 14,  44 => 13,  42 => 12,  39 => 9,  35 => 6,  32 => 8,  27 => 5,);
    }
}
