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
        return array (  84 => 38,  80 => 37,  76 => 36,  72 => 35,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  28 => 8,  19 => 1,);
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
              <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Logo d'Élie & Josie Photographie\"></a>
              <!-- #Logo Ends -->


              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                  <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Portfolio <span class=\"caret\" title=\"Portfolio\"></span></a>
                      <ul class=\"dropdown-menu\">
                          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/mariage");
        echo "\" title=\"Portfolio de photo de mariage\">Mariage</a></li>
                          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/portrait");
        echo "\" title=\"Portfolio de photo de portrait\">Portrait</a></li>
                          <li><a href=\"";
        // line 30
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/corporatif");
        echo "\"title=\"Portfolio de photo corporatif\">Corporatif</a></li>
                          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/famille-maternite");
        echo "\" title=\"Portfolio de photo de famille et maternité\">Famille & Maternité</a></li>

                      </ul>
                  </li>
                  <li><a href=\"";
        // line 35
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "/#team\" title=\"À propos d'Élie et Josie Photographie\">À propos</a></li>
                  <li ><a href=\"";
        // line 36
        echo $this->env->getExtension('CMS')->pageFilter("blog/blogs");
        echo "\" title=\"Le blogue d'Élie et Josie Photographie\">Blogue</a></li>
                  <li ><a href=\"";
        // line 37
        echo $this->env->getExtension('CMS')->pageFilter("tarif");
        echo "\" title=\"Nos tarifs pour des séances photo et forfaits\">Tarifs</a></li>
                  <li ><a href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->pageFilter("faq");
        echo "\">FAQ</a></li>
                 <li ><a href=\"https://eliejosiephotographie.shootproof.com\" target=\"_blank\" title=\"Espace Client\">Espace Client</a></li>
                 <li ><a href=\"#contact\" title=\"Nous contacter\">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
<!-- #Header Ends -->";
    }
}
/* <!-- Header Starts -->*/
/*       <div class="container">*/
/* */
/*         <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">*/
/*           <div class="container">*/
/*             <div class="navbar-header">*/
/*               <!-- Logo Starts -->*/
/*               <a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" alt="Logo d'Élie & Josie Photographie"></a>*/
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
/*             <div class="navbar-collapse collapse">*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                   <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret" title="Portfolio"></span></a>*/
/*                       <ul class="dropdown-menu">*/
/*                           <li><a href="{{ 'portfolio/mariage'| page }}" title="Portfolio de photo de mariage">Mariage</a></li>*/
/*                           <li><a href="{{ 'portfolio/portrait'| page }}" title="Portfolio de photo de portrait">Portrait</a></li>*/
/*                           <li><a href="{{ 'portfolio/corporatif'| page }}"title="Portfolio de photo corporatif">Corporatif</a></li>*/
/*                           <li><a href="{{ 'portfolio/famille-maternite'| page }}" title="Portfolio de photo de famille et maternité">Famille & Maternité</a></li>*/
/* */
/*                       </ul>*/
/*                   </li>*/
/*                   <li><a href="{{ 'home'| page }}/#team" title="À propos d'Élie et Josie Photographie">À propos</a></li>*/
/*                   <li ><a href="{{ 'blog/blogs'|page }}" title="Le blogue d'Élie et Josie Photographie">Blogue</a></li>*/
/*                   <li ><a href="{{ 'tarif'| page }}" title="Nos tarifs pour des séances photo et forfaits">Tarifs</a></li>*/
/*                   <li ><a href="{{ 'faq'| page }}">FAQ</a></li>*/
/*                  <li ><a href="https://eliejosiephotographie.shootproof.com" target="_blank" title="Espace Client">Espace Client</a></li>*/
/*                  <li ><a href="#contact" title="Nous contacter">Contact</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- #Nav Ends -->*/
/* */
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/* <!-- #Header Ends -->*/
