<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/portfolio/portrait.htm */
class __TwigTemplate_9a31a0dff2d54d54d2522ba5e3272f17bea844c22d9b26999e3d2d0654a7299a extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/pages/portfolio/portrait.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\" style=\"margin-top: 150px;\">
            <h1 class=\"text-center wowload fadeInUp text-primary\">Porfolio</h1>
            <h2 class=\"text-center\">Portrait</h2>
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ejpGallery"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "        </div>
    </div>

</div>";
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-12" style="margin-top: 150px;">*/
/*             <h1 class="text-center wowload fadeInUp text-primary">Porfolio</h1>*/
/*             <h2 class="text-center">Portrait</h2>*/
/*             {% component 'ejpGallery' %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
