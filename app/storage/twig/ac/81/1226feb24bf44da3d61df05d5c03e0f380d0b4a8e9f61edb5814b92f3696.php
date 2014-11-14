<?php

/* C:\xampp\htdocs\massada/plugins/marsflow/controls/components/textarea/default.htm */
class __TwigTemplate_ac811226feb24bf44da3d61df05d5c03e0f380d0b4a8e9f61edb5814b92f3696 extends Twig_Template
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
        echo "
 <div class=\"form-group has-feedback\" ng-class=\"{
 \t'has-error': ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty , 
\t'has-success': ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$valid  && !";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$pristine }\">
    <label for=\"modal-country-id\" class=\"col-lg-3 col-sm-5 col-md-4 control-label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mLabel", array()), "html", null, true);
        echo "</label>
    <div class=\"col-lg-9 col-sm-7 col-md-8\">
        <textarea id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo "\" class=\"form-control\" 
        \t\trows=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRows", array()), "html", null, true);
        echo "\" 
        \t\tng-model=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo "\"
        \t\tng-trim=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrim", array()), "html", null, true);
        echo "\" 
               \tng-pattern=\"/^";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpression", array()), "html", null, true);
        echo "*\$/\"
               \tng-minlength=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinlength", array()), "html", null, true);
        echo "\"
               \tng-maxlength=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxlength", array()), "html", null, true);
        echo "\"
                required=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequired", array()), "html", null, true);
        echo "\"
                ></textarea>
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
        echo ".\$valid  && !";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$pristine
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
        \t* ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequired_msg", array()), "html", null, true);
        echo " <br/>
        </small>
        <small class=\"message-status-error\" ng-show=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinlength_msg", array()), "html", null, true);
        echo " <br/>
    \t</small>
    \t<small class=\"message-status-error\" ng-show=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxlength_msg", array()), "html", null, true);
        echo " <br/>
    \t</small>
        <small class=\"message-status-error\" ng-show=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.pattern && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpression_msg", array()), "html", null, true);
        echo " <br/>
    \t</small>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/marsflow/controls/components/textarea/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 30,  150 => 29,  145 => 27,  135 => 26,  130 => 24,  120 => 23,  115 => 21,  105 => 20,  94 => 18,  84 => 17,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  48 => 7,  43 => 5,  33 => 4,  23 => 3,  19 => 1,);
    }
}
