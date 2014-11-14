<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration.htm */
class __TwigTemplate_e3493c204dfa0659c214bb408499fa6bb79f0fa1b4974a487900f8b1548d4cf7 extends Twig_Template
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
        echo "<div class=\"row\" ng-controller=\"administration\">
        ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
        <div class=\"col-sm-9 col-md-10\">
            <h1 class=\"page-header\">Administration</h1>

            <div class=\"row placeholders\">
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Newest Site Added</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Newest Site Updated</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Newest Operator Added</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Newest Operator Updated</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
            </div>

            <h2 class=\"sub-header\">Section title</h2>
            
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
