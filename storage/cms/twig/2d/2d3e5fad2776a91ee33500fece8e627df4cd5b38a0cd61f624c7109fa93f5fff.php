<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/works.htm */
class __TwigTemplate_4ce2cbea9f8f56a38194d7527a87e1c8c1f80f47b692fa259f4d74cca69d2003 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  62 => 24,  55 => 20,  49 => 17,  42 => 13,  36 => 10,  29 => 6,  23 => 3,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- works -->
    <figure class=\"effect-oscar  wowload fadeIn\">
        <img src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ejp-pf-main-mariage.jpg");
        echo "\" alt=\"Photo d'une séance mariage\" />
        <figcaption>
            <h4>Mariage</h4>
            <p><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/mariage");
        echo "\" title=\"Section du portfolio, mariage.\">Voir nos photos</a></p>
        </figcaption>
    </figure>
    <figure class=\"effect-oscar  wowload fadeInUp\">
        <img src=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ejp-pf-main-portrait.jpg");
        echo "\" alt=\"Photo d'un portrait\" />
        <figcaption>
            <h4>Portrait</h4>
            <p><a href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/portrait");
        echo "\" title=\"Section du portfolio, portrait.\">Voir nos photos</a></p>
        </figcaption>
    </figure>
    <figure class=\"effect-oscar  wowload fadeInUp\">
        <img src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ejp-pf-main-corporatif.jpg");
        echo "\" alt=\"Photo d'une séance corporative\"/>
        <figcaption>
            <h4>Corporatif</h4>
            <p><a href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/corporatif");
        echo "\" title=\"Section du portfolio, corporatif\">Voir nos photos</a></p>
        </figcaption>
    </figure>
    <figure class=\"effect-oscar  wowload fadeInUp\">
        <img src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ejp-pf-main-famille.jpg");
        echo "\" alt=\"Photo d'une séance familiale\"/>
        <figcaption>
            <h4>Famille & Maternité</h4>
            <p><a href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->pageFilter("portfolio/famille-maternite");
        echo "\" title=\"Section du portfolio, famille et maternité.\">Voir nos photos</a></p>
        </figcaption>
    </figure>

<!-- works -->";
    }
}
/* <!-- works -->*/
/*     <figure class="effect-oscar  wowload fadeIn">*/
/*         <img src="{{ 'assets/images/ejp-pf-main-mariage.jpg'|theme }}" alt="Photo d'une séance mariage" />*/
/*         <figcaption>*/
/*             <h4>Mariage</h4>*/
/*             <p><a href="{{ 'portfolio/mariage'| page }}" title="Section du portfolio, mariage.">Voir nos photos</a></p>*/
/*         </figcaption>*/
/*     </figure>*/
/*     <figure class="effect-oscar  wowload fadeInUp">*/
/*         <img src="{{ 'assets/images/ejp-pf-main-portrait.jpg'|theme }}" alt="Photo d'un portrait" />*/
/*         <figcaption>*/
/*             <h4>Portrait</h4>*/
/*             <p><a href="{{ 'portfolio/portrait'| page }}" title="Section du portfolio, portrait.">Voir nos photos</a></p>*/
/*         </figcaption>*/
/*     </figure>*/
/*     <figure class="effect-oscar  wowload fadeInUp">*/
/*         <img src="{{ 'assets/images/ejp-pf-main-corporatif.jpg'|theme }}" alt="Photo d'une séance corporative"/>*/
/*         <figcaption>*/
/*             <h4>Corporatif</h4>*/
/*             <p><a href="{{ 'portfolio/corporatif'| page }}" title="Section du portfolio, corporatif">Voir nos photos</a></p>*/
/*         </figcaption>*/
/*     </figure>*/
/*     <figure class="effect-oscar  wowload fadeInUp">*/
/*         <img src="{{ 'assets/images/ejp-pf-main-famille.jpg'|theme }}" alt="Photo d'une séance familiale"/>*/
/*         <figcaption>*/
/*             <h4>Famille & Maternité</h4>*/
/*             <p><a href="{{ 'portfolio/famille-maternite'| page }}" title="Section du portfolio, famille et maternité.">Voir nos photos</a></p>*/
/*         </figcaption>*/
/*     </figure>*/
/* */
/* <!-- works -->*/
