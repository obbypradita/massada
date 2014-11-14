<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/form/sites.htm */
class __TwigTemplate_dd7b168a7df284cfe7c689ccd3b8ffa54f574581029d98c89c344da569894cae extends Twig_Template
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
    <!-- Submit -->
    <div class=\"form-group\">
        <button type=\"submit\" name=\"submit\" ng-disabled=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo ".\$invalid\" ng-click=\"save()\" class=\"btn btn-primary\"> 
            <span class=\"fa fa-save\"></span>
            Save
        </button>
    </div>
</div>
<hr/>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/form/sites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  23 => 3,  19 => 1,);
    }
}
