<?php

/* C:\xampp\htdocs\massada/themes/demo/layouts/default.htm */
class __TwigTemplate_a31ad12fbe95bd0d46b576d5f3b0f4fd65c93a01ae811693726fb16d44dac7e6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html ng-app=\"appLayout\">
    <head>
        <base href=\"/massada/main\"></base>
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/massadaTransp.png");
        echo "\" />
       
       
        <script src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/angular.min.js", 1 => "assets/js/angular-animate.min.js", 2 => "assets/js/angular-route.min.js", 3 => "assets/js/angular-sanitize.min.js", 4 => "assets/js/ng-img-crop.js", 5 => "assets/js/massada.js"));
        // line 18
        echo "\"></script>

        
        ";
        // line 21
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 22
        echo "        
        <link href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/css/jasny-bootstrap.min.css", 2 => "assets/css/bootstrap.min.css", 3 => "assets/css/font-awesome.min.css", 4 => "assets/css/ng-img-crop.css", 5 => "assets/css/massada.css"));
        // line 30
        echo "\" rel=\"stylesheet\">

        ";
        // line 32
        $context['__placeholder_css_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('css', $context['__placeholder_css_default_contents']);
        unset($context['__placeholder_css_default_contents']);        // line 33
        echo "        
        <style>
            .wrap{ height: 100%; overflow: hidden;}
        </style>

    </head>

    
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 55
        echo $this->env->getExtension('CMS')->pageFilter("main");
        echo "\">  Massada</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav navbar-left\">
                            <li class=\"";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("dashboard");
        echo "\">Dashboard</a></li>
                            <li class=\"";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "administration")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("administration");
        echo "\">Administration</a></li>
                            <li class=\"";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "legal")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("legal");
        echo "\">Legal</a></li>
                            <li class=\"";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "technical")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("technical");
        echo "\">Technical</a></li>
                            <li class=\"";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "inventory")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("inventory");
        echo "\">Inventory</a></li>
                            <li class=\"";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "accounting")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("accounting");
        echo "\">Accounting</a></li>
                            <li class=\"";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "human-resource")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("human-resource");
        echo "\">Human Resource</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "users")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("users");
        echo "\">Users</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        
        
        
        
        <div class=\"container-fluid nopadding\">
            <div class=\"col-md-10 col-sm-9\">
                   <ng-view></ng-view> 
            </div>
            ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("rightbar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "        </div>
        
        ";
        // line 86
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("appLayout"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 87
        echo "        
        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 91
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 94
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/app.js"));
        // line 97
        echo "\"></script>

        ";
        // line 99
        $context['__placeholder_jquery_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('jquery', $context['__placeholder_jquery_default_contents']);
        unset($context['__placeholder_jquery_default_contents']);        // line 100
        echo "        
        ";
        // line 101
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 102
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 103
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 103,  213 => 102,  206 => 101,  203 => 100,  201 => 99,  197 => 97,  195 => 94,  190 => 91,  186 => 90,  181 => 87,  177 => 86,  173 => 84,  169 => 83,  147 => 68,  137 => 65,  129 => 64,  121 => 63,  113 => 62,  105 => 61,  97 => 60,  89 => 59,  82 => 55,  58 => 33,  56 => 32,  52 => 30,  50 => 23,  47 => 22,  44 => 21,  39 => 18,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
