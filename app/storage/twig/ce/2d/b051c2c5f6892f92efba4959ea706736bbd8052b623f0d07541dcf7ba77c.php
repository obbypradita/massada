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
    <!-- <alert type=\"jenis\" message=\"pesan\" ng-class=\"animation\"></alert> -->

    
<style>
    .avatar-icon {
\t  display: block;
\t  height: 50px;
\t  width: 50px;
\t  border: 3px solid #fff;
\t  border-radius: 5px;
\t  box-shadow: 0 0 5px rgba(0,0,0,.15);
\t  cursor: pointer;
\t  overflow: hidden;
}
</style>
   <alert></alert>
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar/administration"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    <div class=\"col-sm-9 col-md-10\">
    
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/sites"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
        <h2 class=\"sub-header\">Sites List</h2>
        <hr/>
        
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Site"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-site-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        
        
        

        <div id=\"myDiv\"></div>
        
        <div class=\"table-responsive\"  id=\"siteTable\">
           <table  class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th><a href=\"\" ng-click=\"sortField = 'id'             ; reverse = !reverse\" >#</a></th>
                        <th><a href=\"\">Photo</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'name'           ; reverse = !reverse\" >Site Name</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'owner'          ; reverse = !reverse\" >Building Owner</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'project_type'   ; reverse = !reverse\" >Project Type</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'locations.name' ; reverse = !reverse\" >Location</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'address'        ; reverse = !reverse\" >Address</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'photo'          ; reverse = !reverse\" >Photo</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"st in administration.sites | filter:search | orderBy:sortField:reverse\">
                        <td>";
        // line 50
        echo "{{ \$index + 1}}";
        echo "</td>
                        <td>
                            <div class=\"avatar-icon\" title=\"Change the avatar\"> \t
\t\t                        <img style=\" height: 50px; width: 50px;\" ng-src=\"http://localhost:8080/massada/uploads/public/images/site/avatar/";
        // line 53
        echo "{{ st.photo }}";
        echo ".png\">
\t                        </div>
\t                    </td>
                        <td>";
        // line 56
        echo "{{ st.name }}";
        echo "</td>
                        <td>";
        // line 57
        echo "{{ st.owner }}";
        echo "</td>
                        <td>";
        // line 58
        echo "{{ st.project_type }}";
        echo "</td>
                        <td>";
        // line 59
        echo "{{ st.location.name }}";
        echo "</td>
                        <td>";
        // line 60
        echo "{{ st.address }}";
        echo "</td>
                        <td>";
        // line 61
        echo "{{ st.photo }}";
        echo "</td>
                        <td><a href=\"http://localhost:8080/massada/administration/site/update/";
        // line 62
        echo "{{ st.id }}";
        echo "\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 63
        echo "st.id";
        echo ")\">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr/>
        ";
        // line 69
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Site"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-site-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "    </div>
</div>
";
        // line 72
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
        return array (  146 => 72,  142 => 70,  136 => 69,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  103 => 57,  99 => 56,  93 => 53,  87 => 50,  62 => 27,  56 => 26,  50 => 22,  46 => 21,  42 => 19,  38 => 18,  19 => 1,);
    }
}
