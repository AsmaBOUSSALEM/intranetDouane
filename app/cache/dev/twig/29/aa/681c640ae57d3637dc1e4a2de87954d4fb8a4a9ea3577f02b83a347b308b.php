<?php

/* WebProfilerBundle:Collector:form.html.twig */
class __TwigTemplate_29aa681c640ae57d3637dc1e4a2de87954d4fb8a4a9ea3577f02b83a347b308b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_063acdec9b4b2550393f3952494c42db3e04b21c27f2cd21862522013490b5c9"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAYElEQVRIiWNgGHGAEZ+knZ3df2zihw4dwqmPiVIXoQMMm3C5ChdAdy0LsgH4vIIPIJtBdS9T3UAWdAFyvQ0DjKRGAiEwQsIQOdioHoYoLqRGwh514VB0IakWjsC8PAIBAMl9LomdN/ohAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree a {
        text-decoration: none;
        display: block;
        padding: 5px 7px;
        border-radius: 6px;
        color: #313131;
    }
    .tree ul ul a {
        padding-left: 22px;
    }
    .tree ul ul ul a {
        padding-left: 37px;
    }
    .tree ul ul ul ul a {
        padding-left: 52px;
    }
    .tree ul ul ul ul ul a {
        padding-left: 67px;
    }
    .tree a:hover {
        background: #dfdfdf;
    }
    .tree a.active, a.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    </style>

    ";
        // line 89
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 90
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 96
                echo "                    ";
                echo $context["__internal_063acdec9b4b2550393f3952494c42db3e04b21c27f2cd21862522013490b5c9"]->getform_tree_entry((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                </ul>
            </div>

            ";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 102
                echo "                ";
                echo $context["__internal_063acdec9b4b2550393f3952494c42db3e04b21c27f2cd21862522013490b5c9"]->getform_tree_details((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </div>
    ";
        } else {
            // line 106
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 108
        echo "
    <script>
    function TabView() {
        var _activeLink = null,
            _activeView = null;

        this.init = function () {
            var links = document.querySelectorAll('.tree a'),
                views = document.querySelectorAll('.tree-details'),
                i,
                l;

            for (i = 0, l = links.length; i < l; ++i) {
                (function () {
                    var link = links[i];

                    link.addEventListener('click', function (e) {
                        var href = link.getAttribute('href'),
                            targetId = href.substr(href.indexOf('#') + 1),
                            view = document.getElementById(targetId);

                        if (view) {
                            if (null !== _activeLink) {
                                Sfjs.removeClass(_activeLink, 'active');
                            }

                            if (null !== _activeView) {
                                Sfjs.addClass(_activeView, 'hidden');
                            }

                            Sfjs.addClass(link, 'active');
                            Sfjs.removeClass(view, 'hidden');

                            _activeLink = link;
                            _activeView = view;
                        }

                        e.preventDefault();

                        return false;
                    })
                }());
            }

            for (i = 0, l = views.length; i < l; ++i) {
                Sfjs.addClass(views[i], 'hidden');
            }

            if (links.length > 0) {
                Sfjs.addClass(links[0], 'active');
                _activeLink = links[0];

                if (views.length > 0) {
                    Sfjs.removeClass(views[0], 'hidden');
                    _activeView = views[0];
                }
            }
        }
    }

    var tabView = new TabView();

    tabView.init();
    </script>
";
    }

    // line 174
    public function getform_tree_entry($_name = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 175
            echo "    <li>
        <a href=\"#details_";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a>

        ";
            // line 178
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children")))) {
                // line 179
                echo "            <ul>
                ";
                // line 180
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 181
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData"))), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "            </ul>
        ";
            }
            // line 185
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function getform_tree_details($_name = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            echo "    <div class=\"tree-details\" id=\"details_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "\">
        <h2>
            ";
            // line 191
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            ";
            // line 192
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true)) {
                // line 193
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type"), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 195
            echo "        </h2>

        ";
            // line 197
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")) > 0))) {
                // line 198
                echo "        <h3>Errors</h3>

        <table>
            <tr>
                <th width=\"50%\">Message</th>
                <th>Cause</th>
            </tr>
            ";
                // line 205
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 206
                    echo "            <tr>
                <td>";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                    echo "</td>
                <td><em>Unknown.</em></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "        </table>
        ";
            }
            // line 213
            echo "
        ";
            // line 214
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 215
                echo "        <h3>Default Data</h3>

        <table>
            <tr>
                <th width=\"180\">Model Format</th>
                <td>
                    ";
                // line 221
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 222
                    echo "                        <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "model"), "html", null, true);
                    echo "</pre>
                    ";
                } else {
                    // line 224
                    echo "                        <em>same as normalized format</em>
                    ";
                }
                // line 226
                echo "                </td>
            </tr>
            <tr>
                <th>Normalized Format</th>
                <td><pre>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "norm"), "html", null, true);
                echo "</pre></td>
            </tr>
            <tr>
                <th>View Format</th>
                <td>
                    ";
                // line 235
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 236
                    echo "                        <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "view"), "html", null, true);
                    echo "</pre>
                    ";
                } else {
                    // line 238
                    echo "                        <em>same as normalized format</em>
                    ";
                }
                // line 240
                echo "                </td>
            </tr>
        </table>
        ";
            }
            // line 244
            echo "
        ";
            // line 245
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 246
                echo "        <h3>Submitted Data</h3>

        ";
                // line 248
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 249
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 253
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 254
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "view"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 256
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 258
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 262
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "norm"), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 267
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 268
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "model"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 270
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 272
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 276
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 278
                echo "        ";
            }
            // line 279
            echo "
        ";
            // line 280
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 281
                echo "        <h3>Passed Options</h3>

        ";
                // line 283
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"))) {
                    // line 284
                    echo "        <table>
            <tr>
                <th width=\"180\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            ";
                    // line 290
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 291
                        echo "            <tr>
                <th>";
                        // line 292
                        echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                        echo "</th>
                <td><pre>";
                        // line 293
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</pre></td>
                <td>
                    ";
                        // line 295
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array") === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                            // line 296
                            echo "                        <em>same as passed value</em>
                    ";
                        } else {
                            // line 298
                            echo "                        <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array"), "html", null, true);
                            echo "</pre>
                    ";
                        }
                        // line 300
                        echo "                </td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 303
                    echo "        </table>
        ";
                } else {
                    // line 305
                    echo "        <p><em>No options where passed when constructing this form.</em></p>
        ";
                }
                // line 307
                echo "        ";
            }
            // line 308
            echo "
        ";
            // line 309
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 310
                echo "        <h3>Resolved Options</h3>

        <table>
            <tr>
                <th width=\"180\">Option</th>
                <th>Value</th>
            </tr>
            ";
                // line 317
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 318
                    echo "            <tr>
                <th>";
                    // line 319
                    echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                    echo "</th>
                <td><pre>";
                    // line 320
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "        </table>
        ";
            }
            // line 325
            echo "
        ";
            // line 326
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 327
                echo "        <h3>View Variables</h3>

        <table>
            <tr>
                <th width=\"180\">Variable</th>
                <th>Value</th>
            </tr>
            ";
                // line 334
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "view_vars"));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 335
                    echo "            <tr>
                <th>";
                    // line 336
                    echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
                    echo "</th>
                <td><pre>";
                    // line 337
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "        </table>
        ";
            }
            // line 342
            echo "    </div>

    ";
            // line 344
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 345
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData"))), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  353 => 193,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 178,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 206,  373 => 156,  351 => 192,  342 => 137,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  275 => 105,  270 => 102,  262 => 98,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  194 => 70,  134 => 54,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  367 => 198,  361 => 195,  357 => 123,  348 => 140,  345 => 120,  338 => 135,  334 => 117,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 125,  306 => 107,  297 => 179,  291 => 102,  288 => 176,  265 => 96,  263 => 95,  255 => 93,  231 => 83,  237 => 92,  211 => 83,  150 => 55,  215 => 37,  212 => 78,  191 => 67,  185 => 66,  161 => 63,  180 => 103,  175 => 65,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 122,  300 => 180,  296 => 121,  292 => 119,  289 => 113,  286 => 112,  284 => 114,  281 => 113,  277 => 112,  274 => 97,  271 => 110,  266 => 106,  261 => 104,  256 => 96,  250 => 99,  234 => 94,  195 => 112,  184 => 101,  172 => 64,  160 => 91,  153 => 56,  267 => 101,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 86,  222 => 85,  213 => 78,  210 => 33,  207 => 75,  205 => 108,  202 => 94,  200 => 72,  197 => 104,  192 => 73,  190 => 76,  186 => 69,  174 => 65,  146 => 81,  70 => 19,  76 => 31,  77 => 20,  100 => 39,  188 => 102,  155 => 87,  152 => 86,  129 => 63,  114 => 30,  84 => 24,  81 => 23,  181 => 65,  178 => 66,  170 => 96,  167 => 70,  165 => 60,  148 => 68,  137 => 77,  90 => 26,  65 => 22,  58 => 25,  34 => 11,  126 => 63,  118 => 49,  113 => 48,  23 => 4,  127 => 60,  124 => 55,  110 => 22,  104 => 32,  97 => 41,  53 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 124,  298 => 120,  294 => 90,  285 => 175,  283 => 100,  278 => 106,  268 => 85,  264 => 105,  258 => 94,  252 => 100,  247 => 98,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 102,  169 => 95,  140 => 58,  132 => 57,  128 => 56,  107 => 59,  61 => 15,  273 => 174,  269 => 109,  254 => 102,  243 => 92,  240 => 86,  238 => 95,  235 => 85,  230 => 89,  227 => 92,  224 => 81,  221 => 41,  219 => 76,  217 => 38,  208 => 68,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 40,  71 => 31,  67 => 24,  63 => 19,  59 => 11,  87 => 34,  38 => 7,  93 => 27,  88 => 25,  78 => 26,  201 => 106,  196 => 92,  183 => 17,  171 => 81,  166 => 95,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 12,  49 => 14,  94 => 34,  89 => 7,  85 => 23,  75 => 19,  68 => 30,  56 => 11,  27 => 3,  21 => 2,  44 => 9,  31 => 3,  25 => 35,  46 => 13,  26 => 9,  28 => 3,  24 => 4,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 21,  40 => 11,  37 => 5,  22 => 3,  246 => 93,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 20,  115 => 59,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 47,  55 => 16,  52 => 12,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 107,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 91,  147 => 54,  144 => 80,  141 => 51,  133 => 74,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 52,  106 => 51,  103 => 55,  99 => 31,  95 => 37,  92 => 43,  86 => 42,  82 => 28,  80 => 32,  73 => 20,  64 => 13,  60 => 20,  57 => 19,  54 => 37,  51 => 16,  48 => 9,  45 => 10,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
