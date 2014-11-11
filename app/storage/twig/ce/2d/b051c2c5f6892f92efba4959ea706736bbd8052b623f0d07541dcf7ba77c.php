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
        echo $this->env->getExtension('CMS')->partialFunction("administration/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <div class=\"col-sm-9 col-md-10\">
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

        <h2 class=\"sub-header\">Sites List</h2>
        <form class=\"form-inline\">
            <div class=\"form-group\">
                <a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->pageFilter("administration-site-insert");
        echo "\" >
                    <span class=\"fa fa-plus\"></span>
                    Add New Site
                </a>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"text\" class=\"form-control\" ng-model=\"search\" id=\"tb-search\" placeholder=\"Search something...\" >
                <i class=\"form-control-feedback fa fa-search\"></i>
            </div>

            <div class=\"form-group\">
                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#mmodal\">
                    <span class=\"fa fa-gear\"></span>
                </button>
            </div>
            
            <div class=\"form-group\">
                <button type=\"button\" class=\"btn btn-default\" ng-click=\"refresh()\">
                    <span class=\"fa fa-refresh\"></span>
                </button>
            </div>
            
        </form>
        <hr/>
        
        
        
        <h1 id=\"confirmation\">zentot</h1>
        <div id=\"myDiv\"></div>
        
        <div class=\"table-responsive\"  id=\"siteTable\">
           <table  class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Site Name</th>
                        <th>Building Owner</th>
                        <th>Project Type</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"st in site.sites | filter:search \">
                        <td>";
        // line 78
        echo "{{ st.id }}";
        echo "</td>
                        <td>";
        // line 79
        echo "{{ st.name }}";
        echo "</td>
                        <td>";
        // line 80
        echo "{{ st.owner }}";
        echo "</td>
                        <td>";
        // line 81
        echo "{{ st.project_type }}";
        echo "</td>
                        <td>";
        // line 82
        echo "{{ st.locations.name }}";
        echo "</td>
                        <td>";
        // line 83
        echo "{{ st.address }}";
        echo "</td>
                        <td>";
        // line 84
        echo "{{ st.photo }}";
        echo "</td>
                        <td><a href=\"#\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 86
        echo "st.id";
        echo ")\">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>";
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
        return array (  135 => 86,  130 => 84,  126 => 83,  122 => 82,  118 => 81,  114 => 80,  110 => 79,  106 => 78,  57 => 32,  26 => 3,  22 => 2,  19 => 1,);
    }
}
