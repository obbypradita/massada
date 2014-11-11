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
        </form>
        <hr/>
        
        
        
        
       <div id=\"myDiv\"></div>
       <button ng-click=\"ajax()\">Ajax</button>
        <button ng-click=\"muncul()\">Muncul</button>
        
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
                    <tr ng-repeat=\"site in site.sites | filter:search\">
                        <td>";
        // line 73
        echo "{{ site.id }}";
        echo "</td>
                        <td>";
        // line 74
        echo "{{ site.name }}";
        echo "</td>
                        <td>";
        // line 75
        echo "{{ site.owner }}";
        echo "</td>
                        <td>";
        // line 76
        echo "{{ site.project_type }}";
        echo "</td>
                        <td>";
        // line 77
        echo "{{ site.locations.name }}";
        echo "</td>
                        <td>";
        // line 78
        echo "{{ site.address }}";
        echo "</td>
                        <td>";
        // line 79
        echo "{{ site.photo }}";
        echo "</td>
                        <td><a href=\"#\">Update</a> | 
                            <a href=\"\" ng-click=\"onDelete(";
        // line 81
        echo "site.id";
        echo ")\"
                            >Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    ";
        // line 88
        echo "{{ site.sites }}";
        echo "
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
        return array (  140 => 88,  130 => 81,  125 => 79,  121 => 78,  117 => 77,  113 => 76,  109 => 75,  105 => 74,  101 => 73,  57 => 32,  26 => 3,  22 => 2,  19 => 1,);
    }
}
