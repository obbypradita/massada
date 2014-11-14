<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-operator-update.htm */
class __TwigTemplate_fea9fe0aa37a12bbc7548a551284eb9c61b1985b66968f19f48e2adca9edf7bd extends Twig_Template
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
        echo "<div class=\"row\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <div class=\"col-sm-9 col-md-10\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/operators"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
        <h2 class=\"sub-header\">Update Site</h2>
        <hr/>
        
        <form name=\"operatorForm\" method=\"POST\" enctype=\"multipart/from-data\" novalidate>
            ";
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-operators")        ;
        $context['__cms_partial_params']['base'] = "operatorForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    
            <div class=\"container-fluid\">
                <div class=\"col-md-4 col-sm-5\">
                    ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorLogo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "                </div>
                <div class=\"col-md-8 col-sm-7\">
                    <div class=\"form-horizontal\">
                        ";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorCompany"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorPhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                    </div>
                </div>
            </div>
            <hr/>
            
            ";
        // line 28
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("operatorContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 29
        echo "            <hr/>
            
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-operators")        ;
        $context['__cms_partial_params']['base'] = "operatorForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </form>
        
    
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-operator-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  99 => 31,  95 => 29,  91 => 28,  84 => 23,  79 => 22,  74 => 21,  69 => 20,  64 => 19,  60 => 18,  55 => 15,  51 => 14,  46 => 11,  40 => 10,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
