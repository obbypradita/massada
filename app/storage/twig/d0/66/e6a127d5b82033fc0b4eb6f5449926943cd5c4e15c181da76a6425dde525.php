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
        echo "<div>
    <div class=\"row\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "        <div class=\"col-sm-9 col-md-10\">
            
            ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/sites"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    
            <h2 class=\"sub-header\">Insert New Site</h2>

            <form name=\"siteForm\" method=\"POST\" enctype=\"multipart/from-data\" novalidate>
                <hr/>
                ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "                
                <div class=\"container-fluid\">
                    <div class=\"col-md-4 col-sm-5\">
                        ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                    </div>
                    <div class=\"col-md-8 col-sm-7\">
                        <div class=\"form-horizontal\">
                            
                            ";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteName"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteOwner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteProjectType"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteLocation"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteAddress"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhone"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        echo "                            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteFax"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "                        </div>
                    </div>
                </div>
                <hr/>
            
            
                <!-- contact -->
                ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "              <!-- end contacts-->
            </form>

            <hr/>
            ";
        // line 40
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link'] = $this->env->getExtension('CMS')->pageFilter("administration-sites")        ;
        $context['__cms_partial_params']['base'] = "siteForm"        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/form"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 41
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
        return array (  122 => 41,  116 => 40,  110 => 36,  106 => 35,  97 => 28,  92 => 27,  87 => 26,  82 => 25,  77 => 24,  72 => 23,  67 => 22,  63 => 21,  57 => 17,  53 => 16,  48 => 13,  42 => 12,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
