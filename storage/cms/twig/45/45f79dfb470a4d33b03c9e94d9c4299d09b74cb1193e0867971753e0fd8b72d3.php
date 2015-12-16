<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/nav.htm */
class __TwigTemplate_242781852cf40e7970dd41c85071aa7546816e54f60f9dce0dd8f675e886657a extends Twig_Template
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
        echo "<!-- Header Starts -->
      <div class=\"container\">

        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" id=\"top-nav\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <!-- Logo Starts -->
              <a class=\"navbar-brand\" href=\"#works\"><img src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
              <!-- #Logo Ends -->


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse  collapse\">
              <ul class=\"nav navbar-nav navbar-right scroll\">
                 <li class=\"active\"><a href=\"#works\">Home</a></li>
                 <li ><a href=\"#about\">About</a></li>
                 <li ><a href=\"#partners\">Partners</a></li>
                 <li ><a href=\"#contact\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
<!-- #Header Ends -->";
    }

    public function getTemplateName()
    {
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
/* <!-- Header Starts -->*/
/*       <div class="container">*/
/* */
/*         <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">*/
/*           <div class="container">*/
/*             <div class="navbar-header">*/
/*               <!-- Logo Starts -->*/
/*               <a class="navbar-brand" href="#works"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/*               <!-- #Logo Ends -->*/
/* */
/* */
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/* */
/*             </div>*/
/* */
/* */
/*             <!-- Nav Starts -->*/
/*             <div class="navbar-collapse  collapse">*/
/*               <ul class="nav navbar-nav navbar-right scroll">*/
/*                  <li class="active"><a href="#works">Home</a></li>*/
/*                  <li ><a href="#about">About</a></li>*/
/*                  <li ><a href="#partners">Partners</a></li>*/
/*                  <li ><a href="#contact">Contact</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- #Nav Ends -->*/
/* */
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/* <!-- #Header Ends -->*/
