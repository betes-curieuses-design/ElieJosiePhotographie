<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/ejpContact/default.htm */
class __TwigTemplate_d05962babc9a38a78e31ba20ae1945547c38b6650f3d8ce58238fadc0f2a5c7f extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/themes/ejp161003/partials/ejpContact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 14,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<h2 class=\"text-center  wowload fadeInUp text-primary\">Nous contacter</h2>
<p>
    <strong>Courriel:</strong> <a href=\"mailto:info@eliejosiephotographie.com\">info@eliejosiephotographie.com</a>
</p>
<p>
    <strong>Téléphone:</strong><br>
    <strong>Éliane:</strong> <a href=\"tel:5147935188\">514.793.5188</a><br>
    <strong>Josée:</strong> <a href=\"tel:5142460123\"> 514.246.0123</a><p>

<form class=\"flexiContactForm\" role=\"form\"
      data-request=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"name\" placeholder=\"Votre nom\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\" required>
        </div>
        <div class=\"form-group hidden\">
            <input type=\"text\" class=\"form-control\" value=\"Message venant de votre site Web\" name=\"subject\" placeholder=\"\" required>>
        </div>
        <div class=\"form-group\">
            <textarea  style=\"resize: none;\" class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Message\" cols=\"30\"
                      rows=\"5\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-sm pull-right\">
            <i class=\"fa fa-paper-plane\"></i>&nbsp; Soumettre
        </button>
    </div>
</form>";
    }
}
/* <div class="confirm-container">*/
/*     <!--This will contain the confirmation when the email is successfully sent-->*/
/* </div>*/
/* <h2 class="text-center  wowload fadeInUp text-primary">Nous contacter</h2>*/
/* <p>*/
/*     <strong>Courriel:</strong> <a href="mailto:info@eliejosiephotographie.com">info@eliejosiephotographie.com</a>*/
/* </p>*/
/* <p>*/
/*     <strong>Téléphone:</strong><br>*/
/*     <strong>Éliane:</strong> <a href="tel:5147935188">514.793.5188</a><br>*/
/*     <strong>Josée:</strong> <a href="tel:5142460123"> 514.246.0123</a><p>*/
/* */
/* <form class="flexiContactForm" role="form"*/
/*       data-request="{{ __SELF__ }}::onMailSent"*/
/*       data-request-update="'{{ __SELF__ }}::confirm': '.confirm-container'">*/
/* */
/*     <div class="form-groups">*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" value="" name="name" placeholder="Votre nom" required>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" value="" name="email" placeholder="Enter Email" required>*/
/*         </div>*/
/*         <div class="form-group hidden">*/
/*             <input type="text" class="form-control" value="Message venant de votre site Web" name="subject" placeholder="" required>>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <textarea  style="resize: none;" class="form-control" value="" name="body" placeholder="Message" cols="30"*/
/*                       rows="5"></textarea>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-primary btn-sm pull-right">*/
/*             <i class="fa fa-paper-plane"></i>&nbsp; Soumettre*/
/*         </button>*/
/*     </div>*/
/* </form>*/
