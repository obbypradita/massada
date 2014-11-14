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
