<?php

/* C:\xampp\htdocs\massada/plugins/marsflow/controls/components/radiobutton/default.htm */
class __TwigTemplate_4f4a562572cf1d5744a72ffbfc157640af043d42b52d3d0cde4cb05a40948cb9 extends Twig_Template
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
        echo "<div class=\"form-group has-feedback\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\" ng-class=\"{
 \t'has-error': ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty , 
\t'has-success': ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$valid }\">
    <label for=\"modal-country-id\" class=\"col-lg-3 col-sm-5 col-md-4 control-label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mLabel", array()), "html", null, true);
        echo "</label>
    <div class=\"col-lg-9 col-sm-7 col-md-8\">
        <div class=\"radio\" ng-repeat='object in ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mObject", array()), "html", null, true);
        echo "'>
            <label>
                <input type=\"radio\" name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo "\" 
                id=\"";
        // line 9
        echo "{{ object.key }}";
        echo "\" 
                value=\"";
        // line 10
        echo "{{ object.value }}";
        echo "\" 
                ng-model=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo "\"
                ng-required=\"true\">
                    ";
        // line 13
        echo "{{ object.value }}";
        echo "
            </label>
        </div>
        <i ng-class=\"{ 
        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty, 
        \t'form-control-feedback glyphicon glyphicon-ok': ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$valid  
         }\"></i>
        <small class=\"message-status-error\" ng-show=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.required && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* dipilih coy <br/>
        </small>
    </div>
</div>
";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mObject", array()), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/marsflow/controls/components/radiobutton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  91 => 20,  84 => 18,  74 => 17,  67 => 13,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  40 => 4,  34 => 3,  24 => 2,  19 => 1,);
    }
}
