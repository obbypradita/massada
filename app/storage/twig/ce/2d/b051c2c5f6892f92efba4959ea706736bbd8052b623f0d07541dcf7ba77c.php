<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-sites.htm */
class __TwigTemplate_ce2db051c2c5f6892f92efba4959ea706736bbd8052b623f0d07541dcf7ba77c extends Twig_Template
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
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/sites"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
        <h2 class=\"sub-header\">Sites List</h2>
        <hr/>
        
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Sites"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-site-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        
        
        
        <h1 id=\"confirmation\">Sebentar...</h1>
        <div id=\"myDiv\"></div>
        
        <div class=\"table-responsive\"  id=\"siteTable\">
           <table  class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th><a href=\"\" ng-click=\"sortField = 'id';              reverse = !reverse\" >#</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'name';            reverse = !reverse\" >Site Name</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'owner';           reverse = !reverse\" >Building Owner</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'project_type';    reverse = !reverse\" >Project Type</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'locations.name';  reverse = !reverse\" >Location</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'address';         reverse = !reverse\" >Address</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'photo';           reverse = !reverse\" >Photo</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"st in administration.sites | filter:search | orderBy:sortField:reverse\">
                        <td>";
        // line 33
        echo "{{ st.id }}";
        echo "</td>
                        <td>";
        // line 34
        echo "{{ st.name }}";
        echo "</td>
                        <td>";
        // line 35
        echo "{{ st.owner }}";
        echo "</td>
                        <td>";
        // line 36
        echo "{{ st.project_type }}";
        echo "</td>
                        <td>";
        // line 37
        echo "{{ st.locations.name }}";
        echo "</td>
                        <td>";
        // line 38
        echo "{{ st.address }}";
        echo "</td>
                        <td>";
        // line 39
        echo "{{ st.photo }}";
        echo "</td>
                        <td><a href=\"http://localhost:8080/massada/administration/site/update/";
        // line 40
        echo "{{ st.id }}";
        echo "\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 41
        echo "st.id";
        echo ")\">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr/>
        ";
        // line 47
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Sites"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-site-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "    </div>
</div>
";
        // line 50
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-sites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  117 => 48,  111 => 47,  102 => 41,  98 => 40,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  46 => 11,  40 => 10,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
