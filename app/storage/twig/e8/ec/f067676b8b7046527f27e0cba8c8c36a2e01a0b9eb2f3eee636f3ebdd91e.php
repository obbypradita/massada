<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-operator-insert.htm */
class __TwigTemplate_e8ecf067676b8b7046527f27e0cba8c8c36a2e01a0b9eb2f3eee636f3ebdd91e extends Twig_Template
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
        echo "<alert></alert>
<div class=\"row\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    <div class=\"col-sm-9 col-md-10\">
        
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/operators"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
        <h2 class=\"sub-header\">Insert New Operator</h2>

        <form name=\"operatorForm\" method=\"POST\" ng-submit=\"save()\" enctype=\"multipart/from-data\" novalidate>
            <hr/>
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-operators")        ;
        $context['__cms_partial_params']['base'] = "operatorForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "            
            <div class=\"container-fluid\">
                <div class=\"col-md-4 col-sm-5\">
                    ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorLogo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                </div>
                <div class=\"col-md-8 col-sm-7\">
                    <div class=\"form-horizontal\">
                        
                        ";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorCompany"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorPhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                    </div>
                </div>
            </div>
            <hr/>
        
        
            <!-- contact -->
            ";
        // line 33
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "          <!-- end contacts-->
        </form>

        <hr/>
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-operators")        ;
        $context['__cms_partial_params']['base'] = "operatorForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        
        
        ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["mObject"]) ? $context["mObject"] : null), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-operator-insert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  112 => 39,  106 => 38,  100 => 34,  96 => 33,  87 => 26,  82 => 25,  77 => 24,  72 => 23,  67 => 22,  63 => 21,  57 => 17,  53 => 16,  48 => 13,  42 => 12,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
