<?php

/* CCDNForumForumBundle:User:Board/show.html.twig */
class __TwigTemplate_6400470c8db1d07dbcb64aaaeaf3cfca8d273327bf37a7cba22cc324fa5a62d7 extends Twig_Template
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board"), "user"), "show"), "layout_template");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.board.show", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name")), "CCDNForumForumBundle"), "html", null, true);
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
        echo "<section class=\"row btn-toolbar clearfix\">
            ";
        // line 20
        $context["is_topic_create_disabled"] = (($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "isAuthorisedToCreateTopic", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security")), "method")) ? ("") : (" disabled"));
        // line 21
        echo "
            <a class=\"btn btn-danger";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["is_topic_create_disabled"]) ? $context["is_topic_create_disabled"] : $this->getContext($context, "is_topic_create_disabled")), "html", null, true);
        echo "\" rel=\"nofollow\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_create", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId"))), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-asterisk\"></i>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 25
        echo "</a>

\t</section>

\t<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount"), "html", null, true);
        // line 37
        echo "</span>
\t\t\t&nbsp;
\t\t    <span class=\"label label-default\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        echo "\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount"), "html", null, true);
        // line 42
        echo "</span>
\t\t</div>
\t</header>";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 48
        echo "<section class=\"clearfix\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"left\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 170px;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>";
        // line 61
        if ((!twig_test_empty((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics"))))) {
            // line 62
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.announcements-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 65
            echo "</td>
\t\t\t\t\t</tr>";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics")));
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
            foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
                // line 69
                if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    // line 70
                    $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
                }
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
            unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topics-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 77
            echo "</td>
\t\t\t\t\t</tr>";
        }
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
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
        foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
            // line 82
            if (((!$this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted")) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 83
                $this->env->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig")->display($context);
            }
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
            // line 86
            echo "<tr>
\t\t                <td class=\"center\" colspan=\"6\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.no-topics", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 89
            echo "</td>
\t\t            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</tbody>
        </table>
\t</section>";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User:Board/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 96,  237 => 92,  230 => 89,  228 => 88,  225 => 86,  211 => 83,  209 => 82,  191 => 81,  187 => 77,  185 => 76,  182 => 74,  167 => 70,  165 => 69,  148 => 68,  145 => 65,  143 => 64,  140 => 62,  138 => 61,  132 => 57,  128 => 56,  124 => 55,  120 => 54,  112 => 48,  110 => 46,  106 => 42,  104 => 41,  102 => 40,  99 => 39,  95 => 37,  93 => 36,  91 => 35,  88 => 34,  80 => 31,  72 => 25,  70 => 24,  64 => 22,  61 => 21,  59 => 20,  56 => 19,  54 => 17,  51 => 16,  46 => 12,  44 => 11,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
