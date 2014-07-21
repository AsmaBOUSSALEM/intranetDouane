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
  Read this blog post.
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
        return array (  74 => 27,  60 => 19,  54 => 16,  49 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,);
    }
}
