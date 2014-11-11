<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/administration/sidebar.htm */
class __TwigTemplate_00be34959cd4105eb4c73bdcc289089581d54884154b86c7b6e384e0ed2b917e extends Twig_Template
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
        echo "\">Sites</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Operators</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Contact Person</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/administration/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
