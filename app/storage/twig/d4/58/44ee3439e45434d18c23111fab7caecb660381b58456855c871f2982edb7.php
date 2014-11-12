<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/home.htm */
class __TwigTemplate_d45844ee3439e45434d18c23111fab7caecb660381b58456855c871f2982edb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_9e15fb7415bdb52fb7f69d8b168a70cdd131f21bc5cbdbac83a422bec774d1a3' => array($this, 'block___internal_9e15fb7415bdb52fb7f69d8b168a70cdd131f21bc5cbdbac83a422bec774d1a3'),
            '__internal_9bcb2b930060925da85155f11c90aa5383ab92b49d5871322c45e15f479eca45' => array($this, 'block___internal_9bcb2b930060925da85155f11c90aa5383ab92b49d5871322c45e15f479eca45'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<base href=\"/massada/default\">
<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 4
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        );
        // line 5
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i>
        Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold —
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>
        The page menu and footer in the Demo theme are defined in the layout as well.
    </p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i>
        Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
        <pre>";
        // line 44
        echo "{% page %}";
        echo "</pre>
        Using a layout for pages is optional — you can define everything right in the page file.
    </p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i>
        Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files which can be included anywhere.
        In this example we placed the footer content to the <code>partials/footer.htm</code> partial.
        Partials are rendered with:
        <pre>";
        // line 60
        echo "{% partial \"partial-name\" %}";
        echo "</pre> 
        It can be used inside pages, templates or other partials.
    </p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i>
        Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with: 
        <pre>";
        // line 75
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i>
        Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            Layout file:
            <pre>";
        // line 94
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9e15fb7415bdb52fb7f69d8b168a70cdd131f21bc5cbdbac83a422bec774d1a3", $context, $blocks));
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            Page file:
            <pre>";
        // line 98
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9bcb2b930060925da85155f11c90aa5383ab92b49d5871322c45e15f479eca45", $context, $blocks));
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i>
        Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <hr />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 121
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>

";
        // line 126
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
    }

    // line 94
    public function block___internal_9e15fb7415bdb52fb7f69d8b168a70cdd131f21bc5cbdbac83a422bec774d1a3($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/layout.txt"        );
    }

    // line 98
    public function block___internal_9bcb2b930060925da85155f11c90aa5383ab92b49d5871322c45e15f479eca45($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/page.txt"        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 98,  178 => 94,  169 => 126,  161 => 121,  135 => 98,  128 => 94,  106 => 75,  88 => 60,  69 => 44,  28 => 5,  26 => 4,  21 => 1,);
    }
}
