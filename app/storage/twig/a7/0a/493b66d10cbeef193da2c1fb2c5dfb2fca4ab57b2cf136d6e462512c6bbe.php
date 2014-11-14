<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/sidebar/legal.htm */
class __TwigTemplate_a70a493b66d10cbeef193da2c1fb2c5dfb2fca4ab57b2cf136d6e462512c6bbe extends Twig_Template
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
        echo "\">Contracts</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Massada - Building</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Massada - Operator</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Repositories</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Report</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/sidebar/legal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
