<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/sidebar/human-resource.htm */
class __TwigTemplate_59e45e338f3e28c9496acedaa8fce656597f1e391b6099ff3518985aa4efff25 extends Twig_Template
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
        echo "<div class=\"col-sm-3 col-md-2 nopadding\">
    <ul class=\"nav nav-sidebar\">
        <li class=\"active\"><a href=\"";
        // line 3
        echo $this->env->getExtension('CMS')->pageFilter("administration");
        echo "\">Overview</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Departments</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Jobs</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Employees</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Privilege</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Administrators</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Report</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/sidebar/human-resource.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
