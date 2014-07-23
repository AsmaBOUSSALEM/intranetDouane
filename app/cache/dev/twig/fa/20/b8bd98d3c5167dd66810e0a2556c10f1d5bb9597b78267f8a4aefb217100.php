<?php

/* CCDNForumForumBundle:User:Category/Partial/item_category.html.twig */
class __TwigTemplate_fa20b8bd98d3c5167dd66810e0a2556c10f1d5bb9597b78267f8a4aefb217100 extends Twig_Template
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
        echo "<span title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "\" class=\"lead\">
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        // line 6
        echo "</a>
\t</span>

\t<section class=\"clearfix\">
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"center\" style=\"width:32px;\">&nbsp;</th>
\t\t\t\t\t<th class=\"left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:60px;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:60px;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:170px;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "boards"));
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
        foreach ($context['_seq'] as $context["row"] => $context["board"]) {
            // line 22
            $this->env->loadTemplate("CCDNForumForumBundle:User:Category/Partial/item_board.html.twig")->display($context);
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
            // line 24
            echo "<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"5\" style=\"width:100%;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.no-boards", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 27
            echo "</td>
\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</tbody>
\t\t</table>
\t</section>

\t<br>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Category/Partial/item_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  97 => 27,  92 => 24,  61 => 21,  55 => 17,  47 => 15,  31 => 5,  26 => 4,  99 => 40,  82 => 32,  77 => 29,  73 => 28,  70 => 27,  60 => 22,  48 => 17,  45 => 16,  43 => 14,  41 => 14,  34 => 11,  28 => 8,  95 => 26,  89 => 52,  86 => 49,  84 => 33,  79 => 22,  76 => 44,  71 => 41,  68 => 40,  66 => 38,  64 => 23,  59 => 30,  57 => 21,  52 => 18,  50 => 25,  40 => 17,  37 => 13,  33 => 6,  29 => 9,  25 => 6,  23 => 5,  21 => 3,  19 => 1,  93 => 26,  91 => 36,  87 => 22,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 12,  44 => 19,  42 => 18,  39 => 9,  35 => 14,  32 => 9,  27 => 8,);
    }
}
