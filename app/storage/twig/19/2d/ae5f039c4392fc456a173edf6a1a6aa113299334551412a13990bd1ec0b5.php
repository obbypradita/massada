<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/administration-operators.htm */
class __TwigTemplate_192dae5f039c4392fc456a173edf6a1a6aa113299334551412a13990bd1ec0b5 extends Twig_Template
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
        echo "        <div class=\"col-sm-9 col-md-10\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header/operators"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "            
            <h2 class=\"sub-header\">Operator List</h2>
            <hr/>
            
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Operator"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-operator-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "
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
                    <tr ng-repeat=\"st in site.sites | filter:search | orderBy:sortField:reverse\">
                        <td>";
        // line 27
        echo "{{ st.id }}";
        echo "</td>
                        <td>";
        // line 28
        echo "{{ st.name }}";
        echo "</td>
                        <td>";
        // line 29
        echo "{{ st.owner }}";
        echo "</td>
                        <td>";
        // line 30
        echo "{{ st.project_type }}";
        echo "</td>
                        <td>";
        // line 31
        echo "{{ st.locations.name }}";
        echo "</td>
                        <td>";
        // line 32
        echo "{{ st.address }}";
        echo "</td>
                        <td>";
        // line 33
        echo "{{ st.photo }}";
        echo "</td>
                        <td><a href=\"http://localhost:8080/massada/administration/site/update/";
        // line 34
        echo "{{ st.id }}";
        echo "\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 35
        echo "st.id";
        echo ")\">Delete</a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <hr/>
            
            ";
        // line 42
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Operator"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-operator-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/administration-operators.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  106 => 42,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  45 => 10,  39 => 9,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
