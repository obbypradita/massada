<?php

/* C:\xampp\htdocs\massada/themes/demo/pages/main.htm */
class __TwigTemplate_aa7051bbfb68b87fd3446c2ebf3c9a1f4e374cb15347589bdd63a1b507124a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_8aa846ea9ad93521481a71ac3bf3b70d8d33508a39e589156fb5f2ed0aaa3f72' => array($this, 'block___internal_8aa846ea9ad93521481a71ac3bf3b70d8d33508a39e589156fb5f2ed0aaa3f72'),
            '__internal_9f59d7bb53d7a71917306d2409d5d9f1361d2fb6733ac3136aab85d8e9088c43' => array($this, 'block___internal_9f59d7bb53d7a71917306d2409d5d9f1361d2fb6733ac3136aab85d8e9088c43'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        );
        // line 4
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
        // line 43
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
        // line 59
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
        // line 74
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
        // line 93
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8aa846ea9ad93521481a71ac3bf3b70d8d33508a39e589156fb5f2ed0aaa3f72", $context, $blocks));
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            Page file:
            <pre>";
        // line 97
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_9f59d7bb53d7a71917306d2409d5d9f1361d2fb6733ac3136aab85d8e9088c43", $context, $blocks));
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
        // line 120
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>

";
        // line 125
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
    }

    // line 93
    public function block___internal_8aa846ea9ad93521481a71ac3bf3b70d8d33508a39e589156fb5f2ed0aaa3f72($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/layout.txt"        );
    }

    // line 97
    public function block___internal_9f59d7bb53d7a71917306d2409d5d9f1361d2fb6733ac3136aab85d8e9088c43($context, array $blocks = array())
    {
        echo $this->env->getExtension('CMS')->contentFunction("placeholder/page.txt"        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/themes/demo/pages/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 97,  177 => 93,  168 => 125,  160 => 120,  134 => 97,  127 => 93,  105 => 74,  87 => 59,  68 => 43,  27 => 4,  25 => 3,  21 => 1,);
    }
}
