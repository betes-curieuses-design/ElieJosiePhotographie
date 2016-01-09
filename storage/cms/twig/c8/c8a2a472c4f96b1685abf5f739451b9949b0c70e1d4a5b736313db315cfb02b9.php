<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/faq.htm */
class __TwigTemplate_87711762c90ae3002f05fd79808c8b47674e7f6c3b544ce7895b895b81eeffe3 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-sm-12\">
<h1 class=\"text-center wowload fadeInUp text-primary\">Faq</h1>
    <div class=\"col-sm-1 hidden-xs\"></div>
    <div class=\"col-lg-10 col-sm-10 col-xs-12\">
        ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("faqDisplayer"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    </div>
    <div class=\"col-sm-1 hidden-xs\"></div>
    <br><br><br>
</div>";
    }
}
/* <div class="col-sm-12">*/
/* <h1 class="text-center wowload fadeInUp text-primary">Faq</h1>*/
/*     <div class="col-sm-1 hidden-xs"></div>*/
/*     <div class="col-lg-10 col-sm-10 col-xs-12">*/
/*         {% component 'faqDisplayer' %}*/
/*     </div>*/
/*     <div class="col-sm-1 hidden-xs"></div>*/
/*     <br><br><br>*/
/* </div>*/
