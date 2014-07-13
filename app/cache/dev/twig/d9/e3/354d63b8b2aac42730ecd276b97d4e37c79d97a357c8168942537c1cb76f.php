<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_d9e3354d63b8b2aac42730ecd276b97d4e37c79d97a357c8168942537c1cb76f extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 73,  124 => 64,  120 => 61,  118 => 60,  107 => 57,  99 => 49,  81 => 38,  73 => 33,  24 => 2,  104 => 30,  97 => 47,  55 => 22,  43 => 14,  145 => 61,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  103 => 55,  98 => 39,  83 => 30,  70 => 26,  53 => 18,  28 => 6,  95 => 46,  86 => 40,  84 => 39,  79 => 29,  76 => 44,  64 => 28,  40 => 14,  33 => 6,  30 => 5,  106 => 43,  101 => 48,  96 => 46,  89 => 36,  80 => 38,  71 => 41,  69 => 35,  65 => 31,  63 => 23,  60 => 29,  45 => 14,  41 => 13,  38 => 12,  34 => 6,  31 => 8,  25 => 3,  23 => 5,  21 => 3,  19 => 1,  187 => 85,  182 => 47,  177 => 41,  169 => 33,  166 => 30,  163 => 28,  161 => 27,  110 => 44,  82 => 39,  66 => 25,  61 => 21,  59 => 30,  52 => 26,  49 => 17,  47 => 15,  37 => 12,  29 => 4,  26 => 3,  156 => 76,  154 => 21,  151 => 20,  146 => 10,  141 => 7,  139 => 70,  137 => 68,  135 => 67,  132 => 66,  127 => 58,  125 => 56,  122 => 55,  117 => 39,  115 => 59,  112 => 56,  108 => 52,  105 => 56,  94 => 38,  92 => 24,  85 => 42,  77 => 29,  75 => 28,  72 => 21,  68 => 40,  62 => 24,  57 => 23,  50 => 15,  36 => 7,  93 => 45,  91 => 35,  87 => 35,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 14,  44 => 17,  42 => 12,  39 => 6,  35 => 11,  32 => 6,  27 => 7,);
    }
}
