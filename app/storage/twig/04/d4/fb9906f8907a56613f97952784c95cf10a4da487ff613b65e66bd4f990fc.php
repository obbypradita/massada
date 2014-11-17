<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-site-update.htm */
class __TwigTemplate_04d4fb9906f8907a56613f97952784c95cf10a4da487ff613b65e66bd4f990fc extends Twig_Template
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
        echo "<style>

    .alert-fixed {
        position: fixed;
        width: 100%;
        z-index: 10;
    }
</style>

<div class=\"row\">
<alert></alert>
    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    <div class=\"col-sm-9 col-md-10\">
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/sites"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
        <h2 class=\"sub-header\">Update Site</h2>
        <hr/>
        
        <form name=\"siteForm\" method=\"POST\" enctype=\"multipart/from-data\" ng-submit=\"save()\" novalidate>
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "      
            
            <div class=\"container-fluid\">
                <div class=\"col-md-4 col-sm-5\">
                    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                </div>
                <div class=\"col-md-8 col-sm-7\">
                    <div class=\"form-horizontal\">
                        ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteOwner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteProjectType"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "                        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['myObject'] = (isset($context["myObject"]) ? $context["myObject"] : null)        ;
        echo $this->env->getExtension('CMS')->componentFunction("siteLocation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 33
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 34
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "                    </div>
                </div>
            </div>
            <hr/>
            
            ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "            <hr/>
            
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </form>
        
    
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-site-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  121 => 44,  117 => 42,  113 => 41,  106 => 36,  101 => 35,  96 => 34,  91 => 33,  85 => 32,  80 => 31,  75 => 30,  71 => 29,  66 => 26,  62 => 25,  56 => 21,  50 => 20,  43 => 15,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
