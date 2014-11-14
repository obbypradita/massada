<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/list/sites.htm */
class __TwigTemplate_aae7f1034a8d559669f7cd1f1fe79bb96da7cc136848cfc5b783791d22f666c0 extends Twig_Template
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
        echo "<form class=\"form-inline\">
    <div class=\"form-group\">
        <a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["addLinks"]) ? $context["addLinks"] : null), "html", null, true);
        echo "\" >
            <span class=\"fa fa-plus\"></span>
            Add New Site
        </a>
    </div>
    <div class=\"form-group has-feedback\">
        <input type=\"text\" class=\"form-control\" ng-model=\"search\" id=\"tb-search\" placeholder=\"Search something...\" >
        <i class=\"form-control-feedback fa fa-search\"></i>
    </div>

    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#mmodal\">
            <span class=\"fa fa-gear\"></span>
        </button>
    </div>
    
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" ng-click=\"refresh()\">
            <span class=\"fa fa-refresh\"></span>
        </button>
    </div>
</form>
<hr/>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/list/sites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
