<?php

/* CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig */
class __TwigTemplate_fb66b7e8f1c21942165c54ff1364e3c84c83c9bb91b40410dc7e1ec62c49e387 extends Twig_Template
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
        $context["sidebar_categories"] = $this->env->getExtension('boardList')->boardList((isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")));
        // line 5
        if (twig_length_filter($this->env, (isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")))) {
            // line 6
            echo "<li>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["sidebar_category"]) {
                // line 9
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "boards"))) {
                    // line 11
                    echo "<li>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
                    // line 13
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sidebar_category"]) ? $context["sidebar_category"] : $this->getContext($context, "sidebar_category")), "boards"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sidebar_board"]) {
                        // line 14
                        if (array_key_exists("board", $context)) {
                            // line 15
                            if (($this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id") == $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"))) {
                                // line 16
                                echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 17
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 18
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                            } else {
                                // line 21
                                echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 22
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 23
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                            }
                        } else {
                            // line 27
                            echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 28
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "id"), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                            // line 29
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                        }
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sidebar_board"]) ? $context["sidebar_board"] : $this->getContext($context, "sidebar_board")), "name"), "html", null, true);
                        // line 33
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_board'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "</ul>
\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</ul>
\t\t</li>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  91 => 36,  84 => 33,  82 => 32,  77 => 29,  73 => 28,  70 => 27,  64 => 23,  60 => 22,  57 => 21,  52 => 18,  48 => 17,  45 => 16,  43 => 15,  41 => 14,  37 => 13,  34 => 11,  32 => 9,  28 => 8,  25 => 6,  23 => 5,  21 => 3,  19 => 1,);
    }
}
