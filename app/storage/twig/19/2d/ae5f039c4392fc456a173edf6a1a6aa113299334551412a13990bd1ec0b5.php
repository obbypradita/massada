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
        echo $this->env->getExtension('CMS')->partialFunction("administration/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "        <div class=\"col-sm-9 col-md-10\">
            <h1 class=\"page-header\">Operators</h1>

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
            
            ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sitePhoto"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "            <input type=\"text\" ng-model=\"site.mysite\">
            ";
        // line 31
        echo "{{ site.mysite }}";
        echo "

            <h2 class=\"sub-header\">Section title</h2>
            <div class=\"table-responsive\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        return array (  61 => 31,  58 => 30,  54 => 29,  26 => 3,  22 => 2,  19 => 1,);
    }
}
