<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/home.htm */
class __TwigTemplate_314e1eec52e24c831098ff5f4643c45b988e9d668bad0e89a339b06176323dc4 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  44 => 11,  40 => 10,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"portfolio\" class=\" clearfix grid\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("works"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>

<div id=\"about\" class=\"container spacer about\">
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("intro"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>

<div id=\"team\" class=\"container spacer about\">
\t";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>

<section>
<div id=\"partners\" class=\"container spacer about\">
\t";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("clients"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "</div>
</section>";
    }
}
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
/* <div id="partners" class="container spacer about">*/
/* 	{% partial "clients" %}*/
/* </div>*/
/* </section>*/
