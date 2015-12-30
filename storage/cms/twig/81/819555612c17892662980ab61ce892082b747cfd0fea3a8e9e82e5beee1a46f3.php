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
        return array (  168 => 66,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  126 => 53,  122 => 52,  117 => 49,  113 => 48,  108 => 45,  104 => 44,  98 => 40,  94 => 39,  89 => 36,  85 => 35,  80 => 32,  76 => 31,  71 => 28,  67 => 27,  58 => 21,  54 => 20,  48 => 16,  45 => 14,  42 => 13,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
<title>Élie & Josie Photographie</title>
<!-- Google fonts -->
<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/gallery/blueimp-gallery.min.css", 1 => "assets/css/theme.css"));
        // line 16
        echo "\" rel=\"stylesheet\">
<!-- font awesome -->
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
</head>
<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<div class=\"navbar-wrapper\">
\t";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "</div>

<div id=\"portfolio\" class=\" clearfix grid\">
\t";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("works"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "</div>

<div id=\"about\" class=\"container spacer about\">
\t";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("intro"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "</div>

<div id=\"team\" class=\"container spacer about\">
\t";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "</div>

<section>
<div id=\"partners\" class=\"container spacer \">
\t";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("clients"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "</div>
</section>
<div id=\"contact\" class=\"spacer\">
\t";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contacts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "</div>

<div class=\"footer text-center spacer\">
\t";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "</div>

<a href=\"#works\" class=\"gototop \"><i class=\"fa fa-angle-up  fa-3x\"></i></a>

<!-- Scripts -->
<script src=\"";
        // line 58
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.js");
        echo "\"></script>
<script src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\"";
        // line 61
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/touchSwipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 62
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script src=\"";
        // line 63
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 64
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
";
        // line 65
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 66
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "

</body>
</html>";
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
/* <title>Élie & Josie Photographie</title>*/
/* <!-- Google fonts -->*/
/* <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>*/
/* {% styles %}*/
/* <link href="{{ [*/
/* 			'assets/vendor/gallery/blueimp-gallery.min.css',*/
/* 			'assets/css/theme.css']|theme }}" rel="stylesheet">*/
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
/* <div id="portfolio" class=" clearfix grid">*/
/* 	{% partial "works" %}*/
/* </div>*/
/* */
/* <div id="about" class="container spacer about">*/
/* 	{% partial "intro" %}*/
/* </div>*/
/* */
/* <div id="team" class="container spacer about">*/
/* 	{% partial "team" %}*/
/* </div>*/
/* */
/* <section>*/
/* <div id="partners" class="container spacer ">*/
/* 	{% partial "clients" %}*/
/* </div>*/
/* </section>*/
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
