<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_197e658ec6bd9c674637828a12f0f17e62dc7ef0a72799ff9f3a5c91904359bb extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 73,  124 => 64,  120 => 61,  118 => 60,  107 => 57,  81 => 38,  73 => 33,  24 => 2,  104 => 30,  97 => 47,  55 => 22,  43 => 14,  145 => 61,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  110 => 44,  103 => 55,  98 => 39,  70 => 26,  53 => 18,  28 => 6,  95 => 46,  86 => 40,  84 => 39,  79 => 29,  76 => 44,  64 => 28,  40 => 14,  33 => 6,  30 => 5,  106 => 43,  101 => 48,  96 => 46,  82 => 39,  71 => 41,  69 => 35,  65 => 31,  63 => 23,  60 => 29,  45 => 14,  41 => 13,  38 => 12,  34 => 6,  31 => 8,  25 => 3,  23 => 5,  21 => 3,  19 => 1,  130 => 54,  114 => 30,  111 => 28,  109 => 27,  102 => 21,  99 => 49,  89 => 36,  83 => 30,  80 => 38,  66 => 25,  61 => 21,  59 => 30,  52 => 26,  49 => 17,  47 => 15,  37 => 12,  29 => 4,  26 => 3,  156 => 76,  154 => 74,  151 => 73,  146 => 70,  141 => 73,  139 => 70,  137 => 68,  135 => 67,  132 => 66,  127 => 58,  125 => 41,  122 => 55,  117 => 33,  115 => 59,  112 => 56,  108 => 52,  105 => 56,  94 => 38,  92 => 24,  85 => 42,  77 => 29,  75 => 28,  72 => 21,  68 => 40,  62 => 24,  57 => 23,  50 => 15,  36 => 7,  93 => 45,  91 => 35,  87 => 35,  74 => 20,  56 => 19,  54 => 27,  51 => 16,  46 => 14,  44 => 17,  42 => 12,  39 => 6,  35 => 11,  32 => 6,  27 => 7,);
    }
}
