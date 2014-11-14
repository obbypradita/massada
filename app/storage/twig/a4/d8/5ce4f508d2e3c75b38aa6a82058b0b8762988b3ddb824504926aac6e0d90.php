<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/sidebar/administration.htm */
class __TwigTemplate_a4d85ce4f508d2e3c75b38aa6a82058b0b8762988b3ddb824504926aac6e0d90 extends Twig_Template
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
        echo "<style>
    .left-sidebar {
        background-color: #222;
        margin-bottom: -99999px;
        padding-bottom: 99999px;
        background-color:#ffc;
    }
    .left-sideba-wrap {
        overflow: hidden; 
    }
    
</style>

<div class=\"col-sm-3 col-md-2 nopadding\">
    <ul class=\"nav nav-sidebar\">
        <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("administration");
        echo "\">Overview</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Sites</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Operators</a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Contact Person</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/sidebar/administration.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
