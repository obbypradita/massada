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

<!--S
<div id = \"alert_placeholder\"></div>
<div class=\"alert alert-info flash fade-in alert-fixed\">  
  <a class=\"close\" data-dismiss=\"alert\">×</a>  
  <strong>Info!</strong>Watch this, but you may forget.  
</div> 
-->

<div>
    <div class=\"row\">
        ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("administration/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
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

            <form name=\"siteForm\" method=\"POST\" enctype=\"multipart/from-data\" novalidate>
                <hr/>
                <div class=\"form-inline\">
                    <div class=\"form-group\">
                        <a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 53
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
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
                        <button type=\"submit\" name=\"submit\" ng-disabled=\"siteForm.\$invalid\" ng-click=\"save()\" class=\"btn btn-primary\"> 
                            <span class=\"fa fa-save\"></span>
                            Save
                        </button>
                    </div>
                </div>
                <hr/>
                <div class=\"container-fluid\">
                    <div class=\"col-md-4 col-sm-5\">
                        ";
        // line 76
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 77
        echo "                    </div>
                    <div class=\"col-md-8 col-sm-7\">
                        <div class=\"form-horizontal\">
                            
                            ";
        // line 81
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 82
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteOwner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 83
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteProjectType"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 84
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteLocation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 85
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 86
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 87
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 88
        echo "                        </div>
                    </div>
                </div>
                <hr/>
            
            
                <!-- contact -->
                ";
        // line 95
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 96
        echo "              <!-- end contacts-->
            </form>


            <hr/>
            <div class=\"form-inline\">
                <div class=\"form-group\">
                    <a type=\"button\" class=\"btn btn-default\" href=\"";
        // line 103
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
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
                    <button type=\"submit\" name=\"submit\" ng-disabled=\"siteForm.\$invalid\" ng-click=\"save()\" class=\"btn btn-primary\"> 
                        <span class=\"fa fa-save\"></span>
                        Save
                    </button>
                </div>
            </div>
            <hr/>
            ";
        // line 124
        echo "{{ site.contacts }}";
        echo "
            
            
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
        return array (  194 => 124,  170 => 103,  161 => 96,  157 => 95,  148 => 88,  143 => 87,  138 => 86,  133 => 85,  128 => 84,  123 => 83,  118 => 82,  114 => 81,  108 => 77,  104 => 76,  78 => 53,  44 => 21,  40 => 20,  19 => 1,);
    }
}
