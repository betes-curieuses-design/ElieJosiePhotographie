<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/clients.htm */
class __TwigTemplate_b74abcebde61b74dc7bcce10148ca9e86f9824e67ceb9306ade28f66ed14a221 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  30 => 7,  25 => 5,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2 class=\"text-center  wowload fadeInUp\">Témoignages</h2>
<div class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-2 col-xs-2\">  </div>
    <div class=\"col-lg-7 col-md-7 col-sm-10 col-xs-10 partners wowload fadeInLeft all-top-buffer\">
        <a href=\"http://vertquivive.com\" title=\"Notre partenaire la boutique en ligne Vert de vie\" target=\"_blank\"><img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/vert-qui-vive.jpg");
        echo "\" class=\"img-responsive\"
             alt=\"Notre partenaire la boutique en ligne Vert de vie\"></a>
        <a href=\"http://www.fleuriste-repentigny.com\" title=\"Notre partenaire fleuristes Parfum de Fleurs, 920 Boulevard Iberville, Repentigny\" target=\"_blank\"> <img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/parfum-de-fleurs.jpg");
        echo "\" class=\"img-responsive\" alt=\"Notre partenaire fleuristes Parfum de Fleurs\"></a>
    </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1 hidden-sm\">  </div>
    <div class=\"col-md-9 col-sm-12 col-xs-12 mobile-top-buffer\">
        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Quotes"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "    </div>
</div>";
    }
}
/* <h2 class="text-center  wowload fadeInUp">Témoignages</h2>*/
/* <div class="row">*/
/*     <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">  </div>*/
/*     <div class="col-lg-7 col-md-7 col-sm-10 col-xs-10 partners wowload fadeInLeft all-top-buffer">*/
/*         <a href="http://vertquivive.com" title="Notre partenaire la boutique en ligne Vert de vie" target="_blank"><img src="{{ 'assets/images/vert-qui-vive.jpg'|theme }}" class="img-responsive"*/
/*              alt="Notre partenaire la boutique en ligne Vert de vie"></a>*/
/*         <a href="http://www.fleuriste-repentigny.com" title="Notre partenaire fleuristes Parfum de Fleurs, 920 Boulevard Iberville, Repentigny" target="_blank"> <img src="{{ 'assets/images/parfum-de-fleurs.jpg'|theme }}" class="img-responsive" alt="Notre partenaire fleuristes Parfum de Fleurs"></a>*/
/*     </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-1 hidden-sm">  </div>*/
/*     <div class="col-md-9 col-sm-12 col-xs-12 mobile-top-buffer">*/
/*         {% component 'Quotes' %}*/
/*     </div>*/
/* </div>*/
