<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/tools/list.htm */
class __TwigTemplate_ca9bfb5778f66aa82b9456ef31859df6306ad85a81e084e1b513ab037a8f42ef extends Twig_Template
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
            ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
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
    
     <div class=\"form-group\">
        <img class=\"loading-icon\" ng-src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/loading.gif");
        echo "\"/>
     </div>
</form>
<hr/>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/tools/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 26,  28 => 5,  23 => 3,  19 => 1,);
    }
}
