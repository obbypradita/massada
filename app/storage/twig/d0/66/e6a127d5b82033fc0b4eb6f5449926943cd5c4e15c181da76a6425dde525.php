<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-site-insert.htm */
class __TwigTemplate_d066e6a127d5b82033fc0b4eb6f5449926943cd5c4e15c181da76a6425dde525 extends Twig_Template
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


<div id = \"alert_placeholder\"></div>

<div class=\"alert alert-info flash fade-in alert-fixed\">  
  <a class=\"close\" data-dismiss=\"alert\">×</a>  
  <strong>Info!</strong>Watch this, but you may forget.  
</div> 


<div>
    <div class=\"row\">
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("administration/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        <div class=\"col-sm-9 col-md-10\">
            <h1 class=\"page-header\">Sites</h1>
    
            <div class=\"row placeholders\">
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Label</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Label</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Label</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
                <div class=\"col-xs-6 col-sm-3 placeholder\">
                    <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
                    <h4>Label</h4>
                    <span class=\"text-muted\">Something else</span>
                </div>
            </div>
    
            <h2 class=\"sub-header\">Insert New Site</h2>
            

            <form data-request=\"onInsert\" name=\"siteForm\" method=\"POST\" enctype=\"multipart/from-data\">
            ";
        // line 53
        echo "                <div class=\"form-inline\">
                    <div class=\"form-group\">
                        <a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->env->getExtension('CMS')->pageFilter("administration-site-insert");
        echo "\" >
                            <span class=\"fa fa-plus\"></span>Cancel
                        </a>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"button\" class=\"btn btn-default\" ng-click=\"clear()\">
                            <span class=\"fa fa-gear\"></span>Clear
                        </button>
                    </div>
                    
                    <!-- Submit -->
                    <div class=\"form-group\">
                        <button type=\"submit\" name=\"submit\" ng-disabled=\"siteForm.\$invalid\" ng-click=\"save()\" class=\"btn btn-default\"> 
                            <span class=\"fa fa-gear\"></span>Save
                        </button>
                    </div>
                </div>
                <hr/>
                <div class=\"container-fluid\">
                    <div class=\"col-md-4 col-sm-5\">
                        ";
        // line 75
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 76
        echo "                    </div>
                    <div class=\"col-md-8 col-sm-7\">
                        <div class=\"form-horizontal\">
                            
                            ";
        // line 80
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 81
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteOwner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteProjectType"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 83
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteLocation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 84
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 85
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 86
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 87
        echo "                        </div>
                    </div>
                </div>
                ";
        // line 91
        echo "            
            </form>
            
            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-site-insert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 91,  148 => 87,  143 => 86,  138 => 85,  133 => 84,  128 => 83,  123 => 82,  118 => 81,  114 => 80,  108 => 76,  104 => 75,  81 => 55,  77 => 53,  45 => 22,  41 => 21,  19 => 1,);
    }
}
