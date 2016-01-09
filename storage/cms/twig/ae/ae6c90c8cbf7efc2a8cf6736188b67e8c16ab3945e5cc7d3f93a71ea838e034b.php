<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/layouts/contact.htm */
class __TwigTemplate_5b4816698c83bb8282b1da1112455b3a6b442e3d6bc3eb81752d76b3c4e146e8 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/layouts/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  144 => 62,  137 => 61,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  99 => 44,  92 => 39,  88 => 38,  83 => 35,  79 => 34,  74 => 31,  72 => 30,  67 => 27,  63 => 26,  54 => 20,  50 => 19,  44 => 15,  41 => 13,  38 => 12,  32 => 9,  26 => 6,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"google-site-verification\" content=\"uHktIKoGLd5YM6vEZ8p_9CWzFQmk8et3fgot4eF4ofc\" />
    <title>Élie & Josie Photographie: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/gallery/blueimp-gallery.min.css", 1 => "assets/css/theme.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
    <!-- font awesome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
</head>
<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<div id=\"top\" class=\"navbar-wrapper\">
    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "</div>

<div class=\"generalblock container\">
    ";
        // line 30
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 31
        echo "</div>

<div id=\"contact\" class=\"spacer\">
    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contacts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "</div>

<div class=\"footer text-center spacer\">
    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "</div>

<a href=\"#top\" class=\"gototop \"><i class=\"fa fa-angle-up  fa-3x\"></i></a>

<!-- Scripts -->
<script src=\"";
        // line 44
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 45
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.js");
        echo "\"></script>
<script src=\"";
        // line 46
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\"";
        // line 47
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/touchSwipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 48
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script src=\"";
        // line 49
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 50
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70359045-4', 'auto');
    ga('send', 'pageview');

</script>
";
        // line 61
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 62
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 63
        echo "
</body>
</html>";
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <meta name="description" content="{{ this.page.meta_description }}" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/*     <meta name="google-site-verification" content="uHktIKoGLd5YM6vEZ8p_9CWzFQmk8et3fgot4eF4ofc" />*/
/*     <title>Élie & Josie Photographie: {{ this.page.title }}</title>*/
/*     <!-- Google fonts -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>*/
/*     {% styles %}*/
/*     <link href="{{ [*/
/* 			'assets/vendor/gallery/blueimp-gallery.min.css',*/
/* 			'assets/css/theme.css']|theme }}" rel="stylesheet">*/
/*     <!-- font awesome -->*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*     <!-- favicon -->*/
/*     <link rel="shortcut icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/*     <link rel="icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/* </head>*/
/* <body>*/
/* <div class="topbar animated fadeInLeftBig"></div>*/
/* */
/* <div id="top" class="navbar-wrapper">*/
/*     {% partial "nav" %}*/
/* </div>*/
/* */
/* <div class="generalblock container">*/
/*     {% page %}*/
/* </div>*/
/* */
/* <div id="contact" class="spacer">*/
/*     {% partial "contacts" %}*/
/* </div>*/
/* */
/* <div class="footer text-center spacer">*/
/*     {% partial "footer" %}*/
/* </div>*/
/* */
/* <a href="#top" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>*/
/* */
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/respond.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/script.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/touchSwipe.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/gallery/jquery.blueimp-gallery.min.js'|theme }}"></script>*/
/* <script>*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*     ga('create', 'UA-70359045-4', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/* </script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* */
/* </body>*/
/* </html>*/
