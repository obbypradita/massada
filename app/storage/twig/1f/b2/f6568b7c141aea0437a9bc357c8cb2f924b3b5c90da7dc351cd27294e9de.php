<?php

/* C:\xampp\htdocs\massada/themes/demo/partials/rightbar.htm */
class __TwigTemplate_1fb2f6568b7c141aea0437a9bc357c8cb2f924b3b5c90da7dc351cd27294e9de extends Twig_Template
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Panel title</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("administration");
        echo "\">Overview</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("administration-sites");
        echo "\">Sites</a></li>
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("administration-operators");
        echo "\">Operators</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Contact Person</a></li>
        </ul>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/partials/rightbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
