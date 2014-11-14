<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/sidebar/technical.htm */
class __TwigTemplate_a4447aaeca80dfb01813778f70572b6e9898aa8278e8148e8b06a0cd753e0070 extends Twig_Template
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
        echo "\">Equipments</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">DAS Configuration</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Site Technical</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Implementation</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Maintenance</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Documentation</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Report</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/sidebar/technical.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
