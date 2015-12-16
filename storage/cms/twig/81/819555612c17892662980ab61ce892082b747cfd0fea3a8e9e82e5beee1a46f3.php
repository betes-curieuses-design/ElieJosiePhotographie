<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/layouts/default.htm */
class __TwigTemplate_9395553f489fca7ad25d630f367405a5cc4663ec22cd4b7f09f1251cf9974c6b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\" />
<meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\" />
<meta name=\"author\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/bootstrap/css/bootstrap.css", 1 => "assets/vendor/animate/animate.css", 2 => "assets/vendor/animate/set.css", 3 => "assets/vendor/gallery/blueimp-gallery.min.css", 4 => "assets/css/style.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
<!-- font awesome -->
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
</head>
<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<div class=\"navbar-wrapper\">
\t";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</div>

<div id=\"works\" class=\" clearfix grid\"> 
\t";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("works"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "</div>

<div id=\"about\" class=\"container spacer about\">
\t";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("intro"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "</div>

<div class=\"highlight-info\">
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "</div>

<div id=\"partners\" class=\"container spacer \">
\t";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("clients"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "</div>

<div id=\"contact\" class=\"spacer\">
\t";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contacts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "</div>

<div class=\"footer text-center spacer\">
\t";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "</div>

<a href=\"#works\" class=\"gototop \"><i class=\"fa fa-angle-up  fa-3x\"></i></a>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\">
    <!-- The container for the modal slides -->
    <div class=\"slides\"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class=\"title\">Title</h3>
    <a class=\"prev\">‹</a>
    <a class=\"next\">›</a>
    <a class=\"close\">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

<!-- Scripts -->
<script src=\"";
        // line 72
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 73
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.js");
        echo "\"></script>
<script src=\"";
        // line 74
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\"";
        // line 75
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/touchSwipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 76
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script src=\"";
        // line 77
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 78
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
";
        // line 79
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 80
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  159 => 75,  155 => 74,  151 => 73,  147 => 72,  128 => 55,  124 => 54,  119 => 51,  115 => 50,  110 => 47,  106 => 46,  101 => 43,  97 => 42,  92 => 39,  88 => 38,  83 => 35,  79 => 34,  74 => 31,  70 => 30,  61 => 24,  57 => 23,  51 => 19,  48 => 14,  45 => 13,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="description" content="{{ this.page.meta_description }}" />*/
/* <meta name="keywords" content="{{ this.page.meta_keywords }}" />*/
/* <meta name="author" content="{{ this.page.meta_author }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* <title>{{ this.page.title }}</title>*/
/* <!-- Google fonts -->*/
/* <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>*/
/* {% styles %}*/
/* <link href="{{ [*/
/*             'assets/vendor/bootstrap/css/bootstrap.css',*/
/*             'assets/vendor/animate/animate.css',*/
/*             'assets/vendor/animate/set.css',*/
/* 			'assets/vendor/gallery/blueimp-gallery.min.css',*/
/* 			'assets/css/style.css']|theme }}" rel="stylesheet">*/
/* <!-- font awesome -->*/
/* <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <!-- favicon -->*/
/* <link rel="shortcut icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/* <link rel="icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/* </head>*/
/* <body>*/
/* <div class="topbar animated fadeInLeftBig"></div>*/
/* */
/* <div class="navbar-wrapper">*/
/* 	{% partial "nav" %}*/
/* </div>*/
/* */
/* <div id="works" class=" clearfix grid"> */
/* 	{% partial "works" %}*/
/* </div>*/
/* */
/* <div id="about" class="container spacer about">*/
/* 	{% partial "intro" %}*/
/* </div>*/
/* */
/* <div class="highlight-info">*/
/* 	{% partial "about" %}*/
/* </div>*/
/* */
/* <div id="partners" class="container spacer ">*/
/* 	{% partial "clients" %}*/
/* </div>*/
/* */
/* <div id="contact" class="spacer">*/
/* 	{% partial "contacts" %}*/
/* </div>*/
/* */
/* <div class="footer text-center spacer">*/
/* 	{% partial "footer" %}*/
/* </div>*/
/* */
/* <a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>*/
/* */
/* <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->*/
/* <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">*/
/*     <!-- The container for the modal slides -->*/
/*     <div class="slides"></div>*/
/*     <!-- Controls for the borderless lightbox -->*/
/*     <h3 class="title">Title</h3>*/
/*     <a class="prev">‹</a>*/
/*     <a class="next">›</a>*/
/*     <a class="close">×</a>*/
/*     <!-- The modal dialog, which will be used to wrap the lightbox content -->    */
/* </div>*/
/* */
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/respond.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/script.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/touchSwipe.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/gallery/jquery.blueimp-gallery.min.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}             */
/*          */
/* </body>*/
/* </html>*/
