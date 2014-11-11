<?php

/* C:\xampp\htdocs\massada/plugins/responsiv/angular/components/layout/default.htm */
class __TwigTemplate_d69f7c5f6340a62467c37a29f57fb07a9819ff14e3ebbe872c8ca36264f7712b extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "\$/responsiv/angular/assets/js/angular-bridge.js"));
        echo "\"></script>
<script>

    var app = angular.module('";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "', ";
        echo (isset($context["dependencyString"]) ? $context["dependencyString"] : null);
        echo "), ";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo " = app

    app.config(
        ['\$routeProvider', '\$cmsRouterProvider', '\$locationProvider', '\$controllerProvider', '\$compileProvider', '\$filterProvider', '\$provide',
        function (\$routeProvider, \$cmsRouterProvider, \$locationProvider, \$controllerProvider, \$compileProvider, \$filterProvider, \$provide) {

        /*
         * Switch on HTML5 mode
         */
        \$locationProvider.html5Mode(true);

        /*
         * Helpers
         */
        app.register = {
            controller: \$controllerProvider.register,
            directive: \$compileProvider.directive,
            filter: \$filterProvider.register,
            factory: \$provide.factory,
            service: \$provide.service
        }

        /*
         * Configure the router
         */
        var routeConfig = \$cmsRouterProvider.routeConfig

        // Change base url
        routeConfig.setBaseUrl('";
        // line 32
        echo $this->env->getExtension('System')->appFilter("/");
        echo "')

        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 35
            echo "            routeConfig.mapPage('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "baseFileName", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
            echo "', '";
            echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($context["page"], "baseFilename", array()), array(), false);
            echo "')
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        /*
         * Define routes - controllers will be loaded dynamically
         */
        var route = \$cmsRouterProvider.route

        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 44
            echo "            \$routeProvider.when('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
            echo "', route.resolve('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "baseFileName", array()), "html", null, true);
            echo "'))
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "       

        // @todo This should be page name with 404
        \$routeProvider.otherwise({ redirectTo: '/404' })

        return app
    }])

    october.bootApp(app)



    /*
         var app = angular.module('appLayout', ['ngRoute', 'ngAnimate', 'ngSanitize', 'ocServices']), appLayout = app

    app.config(
        ['\$routeProvider', '\$cmsRouterProvider', '\$locationProvider', '\$controllerProvider', '\$compileProvider', '\$filterProvider', '\$provide',
        function (\$routeProvider, \$cmsRouterProvider, \$locationProvider, \$controllerProvider, \$compileProvider, \$filterProvider, \$provide) {

        /*
         * Switch on HTML5 mode
         */
         /*
        \$locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        })
*/
        /*
         * Helpers
         */
   /*     app.register = {
            controller: \$controllerProvider.register,
            directive: \$compileProvider.directive,
            filter: \$filterProvider.register,
            factory: \$provide.factory,
            service: \$provide.service
        }
*/
        /*
         * Configure the router
         */
  //      var routeConfig = \$cmsRouterProvider.routeConfig

        // Change base url
    /*    routeConfig.setBaseUrl('http://localhost:8080/massada/default')

                    routeConfig.mapPage('404', '/404', 'http://localhost:8080/massada/404')
                    routeConfig.mapPage('accounting', '/accounting', 'http://localhost:8080/massada/accounting')
                    routeConfig.mapPage('administration-operators', '/default/administration/operators', 'http://localhost:8080/massada/default/administration/operators')
                    routeConfig.mapPage('administration-site-insert', '/administration/site/insert', 'http://localhost:8080/massada/administration/site/insert')
                    routeConfig.mapPage('administration-sites', '/administration/sites', 'http://localhost:8080/massada/administration/sites')
                    routeConfig.mapPage('administration', '/default/administration', 'http://localhost:8080/massada/default/administration')
                    routeConfig.mapPage('dashboard', '/default/dashboard', 'http://localhost:8080/massada/default/dashboard')
                    routeConfig.mapPage('error', '/default/error', 'http://localhost:8080/massada/default/error')
                    routeConfig.mapPage('home', '/', 'http://localhost:8080/massada')
                    routeConfig.mapPage('human-resource', '/default/human-resource', 'http://localhost:8080/massada/default/human-resource')
                    routeConfig.mapPage('inventory', '/default/inventory', 'http://localhost:8080/massada/default/inventory')
                    routeConfig.mapPage('legal', '/default/legal', 'http://localhost:8080/massada/default/legal')
                    routeConfig.mapPage('technical', '/default/technical', 'http://localhost:8080/massada/default/technical')
                    routeConfig.mapPage('users', '/default/users', 'http://localhost:8080/massada/default/users')
      */  
        /*
         * Define routes - controllers will be loaded dynamically
         */
        /*var route = \$cmsRouterProvider.route

                    \$routeProvider.when('/404', route.resolve('404'))
                    \$routeProvider.when('/accounting', route.resolve('accounting'))
                    \$routeProvider.when('/default/administration/operators', route.resolve('administration-operators'))
                    \$routeProvider.when('/administration/site/insert', route.resolve('administration-site-insert'))
                    \$routeProvider.when('/administration/sites', route.resolve('administration-sites'))
                    \$routeProvider.when('/default/administration', route.resolve('administration'))
                    \$routeProvider.when('/default/dashboard', route.resolve('dashboard'))
                    \$routeProvider.when('/default/error', route.resolve('error'))
                    \$routeProvider.when('/', route.resolve('home'))
                    \$routeProvider.when('/default/human-resource', route.resolve('human-resource'))
                    \$routeProvider.when('/default/inventory', route.resolve('inventory'))
                    \$routeProvider.when('/default/legal', route.resolve('legal'))
                    \$routeProvider.when('/default/technical', route.resolve('technical'))
                    \$routeProvider.when('/default/users', route.resolve('users'))
        */
        // @todo This should be page name with 404
        //\$routeProvider.otherwise({ redirectTo: '/404' })

        /*return app
    }])

    october.bootApp(app)
    */
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/responsiv/angular/components/layout/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  95 => 44,  91 => 43,  83 => 37,  70 => 35,  66 => 34,  61 => 32,  26 => 4,  19 => 1,);
    }
}
