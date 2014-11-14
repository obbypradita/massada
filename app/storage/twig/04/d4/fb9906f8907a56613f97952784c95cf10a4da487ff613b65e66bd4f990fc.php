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

<!--S
<div id = \"alert_placeholder\"></div>
<div class=\"alert alert-info flash fade-in alert-fixed\">  
  <a class=\"close\" data-dismiss=\"alert\">×</a>  
  <strong>Info!</strong>Watch this, but you may forget.  
</div> 
-->

<div class=\"row\">
    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "    <div class=\"col-sm-9 col-md-10\">
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/sites"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
        <h2 class=\"sub-header\">Update Site</h2>
        <hr/>
        
        <form name=\"site.siteForm\" method=\"POST\" enctype=\"multipart/from-data\" novalidate>
            ";
        // line 27
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "site.siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "            <hr/>
            
            <div class=\"container-fluid\">
                <div class=\"col-md-4 col-sm-5\">
                    ";
        // line 32
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 33
        echo "                </div>
                <div class=\"col-md-8 col-sm-7\">
                    <div class=\"form-horizontal\">
                        ";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteOwner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteProjectType"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteLocation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 41
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "                        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "                    </div>
                </div>
            </div>
            <hr/>
            
            ";
        // line 48
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 49
        echo "            <hr/>
            
            ";
        // line 51
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "site.siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 52
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
        return array (  133 => 52,  127 => 51,  123 => 49,  119 => 48,  112 => 43,  107 => 42,  102 => 41,  97 => 40,  92 => 39,  87 => 38,  82 => 37,  78 => 36,  73 => 33,  69 => 32,  63 => 28,  57 => 27,  50 => 22,  46 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }
}
