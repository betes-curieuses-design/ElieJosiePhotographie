<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/footer.htm */
class __TwigTemplate_82e0c57e601469044d26ca140091d4a579df325e071015f70f82e5e7fe922a2d extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Footer Starts -->
<p class=\"wowload flipInX\">
    <a href=\"https://www.facebook.com/Élie-Josie-photographie-448359348562018\" title=\"Page Facebook d'Élie & Josie Photographie\"><i class=\"fa fa-facebook-square fa-2x text-primary\"></i></a>
    <a href=\"https://www.linkedin.com/in/josée-broekaert-34b96b54\" title=\"Page LinkedIn d'Élie & Josie Photographie\"><i class=\"fa fa-linkedin-square fa-2x text-primary\"></i></a>
    <a href=\"https://www.pinterest.com/liejosiephotogr/\" title=\"Page Pinterest d'Élie & Josie Photographie\"><i class=\"fa fa-pinterest-square fa-2x text-primary\"></i></a>
    <a href=\"https://plus.google.com/106047593105793158276/\" title=\"Page Google plus d'Élie & Josie Photographie\"><i class=\"fa fa-google-plus-square fa-2x text-primary\"></i></a>
</p>
<p class=\"power\">&copy; ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Élie & Josie Photographie | Réalisation par <a href=\"http://www.betescurieuses.com\" target=\"_blank\" title=\"Agence de design et conception Web, Bêtes Curieuses Design\">Bêtes Curieuses Design</a></p>
<!-- # Footer Ends -->";
    }
}
/* <!-- Footer Starts -->*/
/* <p class="wowload flipInX">*/
/*     <a href="https://www.facebook.com/Élie-Josie-photographie-448359348562018" title="Page Facebook d'Élie & Josie Photographie"><i class="fa fa-facebook-square fa-2x text-primary"></i></a>*/
/*     <a href="https://www.linkedin.com/in/josée-broekaert-34b96b54" title="Page LinkedIn d'Élie & Josie Photographie"><i class="fa fa-linkedin-square fa-2x text-primary"></i></a>*/
/*     <a href="https://www.pinterest.com/liejosiephotogr/" title="Page Pinterest d'Élie & Josie Photographie"><i class="fa fa-pinterest-square fa-2x text-primary"></i></a>*/
/*     <a href="https://plus.google.com/106047593105793158276/" title="Page Google plus d'Élie & Josie Photographie"><i class="fa fa-google-plus-square fa-2x text-primary"></i></a>*/
/* </p>*/
/* <p class="power">&copy; {{ "now"|date("Y") }} Élie & Josie Photographie | Réalisation par <a href="http://www.betescurieuses.com" target="_blank" title="Agence de design et conception Web, Bêtes Curieuses Design">Bêtes Curieuses Design</a></p>*/
/* <!-- # Footer Ends -->*/
