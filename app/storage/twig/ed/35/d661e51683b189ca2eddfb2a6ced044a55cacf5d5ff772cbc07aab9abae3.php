<?php

/* C:\xampp\htdocs\massada/themes/demo/layouts/fallback */
class __TwigTemplate_ed35d661e51683b189ca2eddfb2a6ced044a55cacf5d5ff772cbc07aab9abae3 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/layouts/fallback";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
