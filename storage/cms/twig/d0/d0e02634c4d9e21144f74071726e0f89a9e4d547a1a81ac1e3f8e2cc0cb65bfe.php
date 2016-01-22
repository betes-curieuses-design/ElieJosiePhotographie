<?php

/* /Users/alexfoisy/Sites/ElieJosiePhotographie/plugins/betescurieuses/gadgets/components/quotes/default.htm */
class __TwigTemplate_e5d4a6f212dbb985d253c955920354b7cdbc3376821dbb9fca615b5d9d8c67e0 extends Twig_Template
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
        return "/Users/alexfoisy/Sites/ElieJosiePhotographie/plugins/betescurieuses/gadgets/components/quotes/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  28 => 8,  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"row\">
            <div class=\"col-xs-2 col-md-1\">
                <i class=\"fa fa-quote-right fa-2x\"></i>
            </div>
            <div class=\"col-xs-10 col-md-11\">
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quotes"]) ? $context["quotes"] : null), 0, array()), "description", array()), "html", null, true);
        echo "</p>
                <h6><strong>- ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quotes"]) ? $context["quotes"] : null), 0, array()), "author", array()), "html", null, true);
        echo "</strong></h6>
            </div>
        </div>
    </div>
</div>

";
    }
}
/* <div class="row">*/
/*     <div class="col-sm-12">*/
/*         <div class="row">*/
/*             <div class="col-xs-2 col-md-1">*/
/*                 <i class="fa fa-quote-right fa-2x"></i>*/
/*             </div>*/
/*             <div class="col-xs-10 col-md-11">*/
/*                 <p>{{ quotes.0.description }}</p>*/
/*                 <h6><strong>- {{ quotes.0.author }}</strong></h6>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
