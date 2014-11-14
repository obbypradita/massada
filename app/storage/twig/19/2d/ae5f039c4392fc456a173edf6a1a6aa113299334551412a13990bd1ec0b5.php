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
        // line 10
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Operator"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-operator-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "            
            <h1 id=\"confirmation\">Sebentar...</h1>
            <div class=\"table-responsive\"  id=\"operatorTable\">
            <table  class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th><a href=\"\" ng-click=\"sortField = 'id'      ; reverse = !reverse\">#</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'name'    ; reverse = !reverse\">Brand Name</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'company' ; reverse = !reverse\">Company</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'address' ; reverse = !reverse\">Address</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'phone'   ; reverse = !reverse\">Phone</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'fax'     ; reverse = !reverse\">Fax</a></th>
                        <th><a href=\"\" ng-click=\"sortField = 'photo'   ; reverse = !reverse\">Photo</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"op in administration.operators | filter:search | orderBy:sortField:reverse\">
                        <td>";
        // line 29
        echo "{{ op.id      }}";
        echo "</td>
                        <td>";
        // line 30
        echo "{{ op.name    }}";
        echo "</td>
                        <td>";
        // line 31
        echo "{{ op.company }}";
        echo "</td>
                        <td>";
        // line 32
        echo "{{ op.address }}";
        echo "</td>
                        <td>";
        // line 33
        echo "{{ op.phone   }}";
        echo "</td>
                        <td>";
        // line 34
        echo "{{ op.fax     }}";
        echo "</td>
                        <td>";
        // line 35
        echo "{{ op.logo    }}";
        echo "</td>
                        <td><a href=\"http://localhost:8080/massada/administration/operator/update/";
        // line 36
        echo "{{ op.id }}";
        echo "\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 37
        echo "op.id";
        echo ")\">Delete</a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <hr/>
            
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['label'] = "Add New Operator"        ;
        $context['__cms_partial_params']['addLinks'] = $this->env->getExtension('CMS')->pageFilter("administration-operator-insert")        ;
        echo $this->env->getExtension('CMS')->partialFunction("tools/list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
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
        return array (  114 => 45,  108 => 44,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  46 => 11,  40 => 10,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
