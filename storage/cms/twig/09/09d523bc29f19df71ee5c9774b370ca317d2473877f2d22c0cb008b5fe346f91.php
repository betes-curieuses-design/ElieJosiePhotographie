<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/ejpGallery/default.htm */
class __TwigTemplate_33759ad003116fe521da78ad66ba264cfed5e97b36332d7c306eb584087c37a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    public function getTemplateName()
    {
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/ejpGallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 68,  183 => 65,  174 => 64,  170 => 63,  164 => 62,  157 => 57,  155 => 26,  148 => 52,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  123 => 42,  117 => 39,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  84 => 29,  80 => 27,  78 => 26,  76 => 1,  70 => 22,  66 => 21,  62 => 20,  57 => 18,  53 => 17,  49 => 16,  44 => 14,  38 => 11,  32 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "    <style>
        #";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " {
            list-style: none outside none;
            display: inline-block;
            padding-left: 0;
        }
        #";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li {
            display: block;
            float: left;
            height: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            margin-bottom: 6px;
            margin-right: 6px;
            width: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
        #";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a {
            height: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
        #";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " li a img {
            height: ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px;
            width: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px;
        }
    </style>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 26
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 27
        echo "    <script>
         \$(document).ready(function() {
            var ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " = \$(\"#";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\").lightGallery({
                // Elements
                thumbnail   : ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["thumbnail"]) ? $context["thumbnail"] : null), "html", null, true);
        echo ",
                caption     : ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo ",
                desc        : ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : null), "html", null, true);
        echo ",
                counter     : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
        echo ",
                controls    : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["controls"]) ? $context["controls"] : null), "html", null, true);
        echo ",
                preload     : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["preload"]) ? $context["preload"] : null), "html", null, true);
        echo ",

                // Transitions
                mode   : '";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "',
                useCSS : true,
                easing : 'linear',
                speed  : ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["speed"]) ? $context["speed"] : null), "html", null, true);
        echo ",

                // Navigation
                hideControlOnEnd : false,
                loop             : ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["loop"]) ? $context["loop"] : null), "html", null, true);
        echo ",
                auto             : ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["auto"]) ? $context["auto"] : null), "html", null, true);
        echo ",
                pause            : ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["pause"]) ? $context["pause"] : null), "html", null, true);
        echo ",
                escKey           : ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["escKey"]) ? $context["escKey"] : null), "html", null, true);
        echo ",
                swipeThreshold    : 50,

                lang : { allPhotos: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "' },
            });
        });
    </script>
";
        // line 26
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 57
        echo "
<div class=\"row\">
    <div class=\"col-xs-8 col-xs-offset-2 col-sm-10 col-sm-offset-1 col-lg-11 col-lg-offset-1\">
        <div class=\"text-center\">
            <div style=\"margin: 0 auto;\">
                <ul id=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 64
            echo "                        <li data-src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" data-desc=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "\">
                            <a href=\"#\"><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getThumb", array(0 => (isset($context["width"]) ? $context["width"] : null), 1 => (isset($context["height"]) ? $context["height"] : null), 2 => (isset($context["resizer"]) ? $context["resizer"] : null)), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "\" /></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </ul>
            </div>
        </div>
    </div>
</div>";
    }
}
/* {% put styles %}*/
/*     <style>*/
/*         #{{ __SELF__ }} {*/
/*             list-style: none outside none;*/
/*             display: inline-block;*/
/*             padding-left: 0;*/
/*         }*/
/*         #{{ __SELF__ }} li {*/
/*             display: block;*/
/*             float: left;*/
/*             height: {{ height }}px;*/
/*             margin-bottom: 6px;*/
/*             margin-right: 6px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*         #{{ __SELF__ }} li a {*/
/*             height: {{ height }}px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*         #{{ __SELF__ }} li a img {*/
/*             height: {{ height }}px;*/
/*             width: {{ width }}px;*/
/*         }*/
/*     </style>*/
/* {% endput %}*/
/* {% put scripts %}*/
/*     <script>*/
/*          $(document).ready(function() {*/
/*             var {{ __SELF__ }} = $("#{{ __SELF__ }}").lightGallery({*/
/*                 // Elements*/
/*                 thumbnail   : {{ thumbnail }},*/
/*                 caption     : {{ caption }},*/
/*                 desc        : {{ desc }},*/
/*                 counter     : {{ counter }},*/
/*                 controls    : {{ controls }}, */
/*                 preload     : {{ preload }},*/
/* */
/*                 // Transitions*/
/*                 mode   : '{{ mode }}',*/
/*                 useCSS : true,*/
/*                 easing : 'linear',*/
/*                 speed  : {{ speed }},*/
/* */
/*                 // Navigation*/
/*                 hideControlOnEnd : false,*/
/*                 loop             : {{ loop }},*/
/*                 auto             : {{ auto }},*/
/*                 pause            : {{ pause }},*/
/*                 escKey           : {{ escKey }},*/
/*                 swipeThreshold    : 50,*/
/* */
/*                 lang : { allPhotos: '{{ lang }}' },*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endput %}*/
/* */
/* <div class="row">*/
/*     <div class="col-xs-8 col-xs-offset-2 col-sm-10 col-sm-offset-1 col-lg-11 col-lg-offset-1">*/
/*         <div class="text-center">*/
/*             <div style="margin: 0 auto;">*/
/*                 <ul id="{{ __SELF__ }}" class="{{ __SELF__ }}">*/
/*                     {% for image in gallery.images %}*/
/*                         <li data-src="{{ image.path }}" data-title="{{ image.title }}" data-desc="{{ image.description }}">*/
/*                             <a href="#"><img src="{{ image.getThumb(width, height, resizer) }}" alt="{{ image.title }}" /></a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
