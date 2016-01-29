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
        return array (  188 => 91,  185 => 90,  178 => 89,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  128 => 57,  124 => 56,  117 => 51,  113 => 50,  103 => 42,  99 => 41,  92 => 36,  90 => 35,  85 => 32,  81 => 31,  72 => 25,  68 => 24,  64 => 22,  61 => 21,  58 => 20,  50 => 15,  45 => 13,  41 => 12,  37 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"language\" content=\"fr\">
    <meta name=\"google-site-verification\" content=\"uHktIKoGLd5YM6vEZ8p_9CWzFQmk8et3fgot4eF4ofc\"/>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | Élie & Josie Photographie</title>
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\"/>
    <meta name=\"robots\" content=\"index,follow\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:image\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : null), "html", null, true);
        echo "\" />
    <meta property=\"og:title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | Élie & Josie Photographie\" />
    <meta property=\"og:url\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "url", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:site_name\" content=\"Élie & Josie Photographie\" />
    <meta property=\"og:description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "settings", array()), "meta_description", array()), "html", null, true);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
    ";
        // line 20
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 21
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 22
        echo "\" rel=\"stylesheet\">
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
</head>
<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<div id=\"top\" class=\"navbar-wrapper\">
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "</div>

<!-- Content -->
";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "
<div id=\"contact\" class=\"spacer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ejpContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "            </div>
        </div>
    </div>

</div>
<!-- Footer -->

<div class=\"footer text-center spacer\">
    ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "</div>

<a href=\"#top\" class=\"gototop \"><i class=\"fa fa-angle-up  fa-3x\"></i></a>
<div id=\"fb-root\"></div>
<!-- Scripts -->
<script src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.js");
        echo "\"></script>
<script src=\"";
        // line 58
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/touchSwipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 61
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
<script src=\"";
        // line 62
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/script.js");
        echo "\"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-70359045-4', 'auto');
    ga('send', 'pageview');

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/fr_CA/sdk.js#xfbml=1&version=v2.5\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
";
        // line 89
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 90
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 91
        echo "
</body>
</html>";
    }
}
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="language" content="fr">*/
/*     <meta name="google-site-verification" content="uHktIKoGLd5YM6vEZ8p_9CWzFQmk8et3fgot4eF4ofc"/>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     <title>{{ this.page.title }} | Élie & Josie Photographie</title>*/
/*     <meta name="description" content="{{ this.page.meta_description }}"/>*/
/*     <meta name="robots" content="index,follow">*/
/*     <meta property="og:type" content="website" />*/
/*     <meta property="og:image" content="{{ image_url }}" />*/
/*     <meta property="og:title" content="{{ this.page.title }} | Élie & Josie Photographie" />*/
/*     <meta property="og:url" content="{{ this.page.url }}" />*/
/*     <meta property="og:site_name" content="Élie & Josie Photographie" />*/
/*     <meta property="og:description" content="{{ this.page.settings.meta_description }}" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* */
/*     <!-- Google fonts -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>*/
/*     {% styles %}*/
/*     <link href="{{ [*/
/*     'assets/css/theme.css']|theme }}" rel="stylesheet">*/
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
/* <!-- Content -->*/
/* {% page %}*/
/* */
/* <div id="contact" class="spacer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">*/
/*                 {% component 'ejpContact' %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* <!-- Footer -->*/
/* */
/* <div class="footer text-center spacer">*/
/*     {% partial "footer" %}*/
/* </div>*/
/* */
/* <a href="#top" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>*/
/* <div id="fb-root"></div>*/
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/respond.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/touchSwipe.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/gallery/jquery.blueimp-gallery.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/script.js'|theme }}"></script>*/
/* */
/* <script>*/
/*     (function (i, s, o, g, r, a, m) {*/
/*         i['GoogleAnalyticsObject'] = r;*/
/*         i[r] = i[r] || function () {*/
/*                     (i[r].q = i[r].q || []).push(arguments)*/
/*                 }, i[r].l = 1 * new Date();*/
/*         a = s.createElement(o),*/
/*                 m = s.getElementsByTagName(o)[0];*/
/*         a.async = 1;*/
/*         a.src = g;*/
/*         m.parentNode.insertBefore(a, m)*/
/*     })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');*/
/* */
/*     ga('create', 'UA-70359045-4', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/*     (function (d, s, id) {*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) return;*/
/*         js = d.createElement(s);*/
/*         js.id = id;*/
/*         js.src = "//connect.facebook.net/fr_CA/sdk.js#xfbml=1&version=v2.5";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));*/
/* </script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* */
/* </body>*/
/* </html>*/
