<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/tools/form.htm */
class __TwigTemplate_0df7eb53f322a3439b6d98deca65c0bf3469de7d55033e602d0fcaf2b7589ef5 extends Twig_Template
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
        echo "<div class=\"form-inline\">
    <div class=\"form-group\">
        <a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\" >
            <span class=\"fa fa-undo\"></span>
            Back
        </a>
    </div>
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" ng-click=\"clear()\">
            <span class=\"fa fa-eraser\"></span>
            Clear
        </button>
    </div>
    
    <div class=\"form-group\">
        <button type=\"button\" ng-click=\"validate()\" class=\"btn btn-default\"> 
            <span class=\"fa fa-save\"></span>
            Validate
        </button>
    </div>
    
    <!-- Submit -->
    <div class=\"form-group\">
        <button type=\"submit\" name=\"submit\" ng-disabled=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo ".\$invalid\" class=\"btn btn-primary\"> 
            <span class=\"fa fa-save\"></span>
            Save
        </button>
    </div>
    
</div>
<hr/>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/tools/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  23 => 3,  19 => 1,);
    }
}
