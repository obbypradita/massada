<?php

/* C:\xampp\htdocs\massada/plugins/massada/application/components/textbox/default.htm */
class __TwigTemplate_64f534e1bd47fe9307f7d13fd7f4eb991f6673557979d6f481d8556cf019aa8f extends Twig_Template
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
        echo "<div class=\"form-group has-feedback ng-pristine\" ng-class=\"{ 
\t\t'has-error': ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty, 
\t\t'has-success': ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$valid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty }\">
    <label for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\" class=\"col-lg-3 col-sm-5 col-md-4 control-label\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mLabel", array()), "html", null, true);
        echo "</label>
    <div class=\"col-lg-9 col-sm-7 col-md-8\">
        <input type=\"text\" class=\"form-control\" 
               id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\" 
               name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo "\"
               ng-model=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo "\" 
               ng-trim=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrim", array()), "html", null, true);
        echo "\" 
               ng-pattern=\"/^";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpression", array()), "html", null, true);
        echo "*\$/\"
               ng-minlength=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinlength", array()), "html", null, true);
        echo "\"
               ng-maxlength=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxlength", array()), "html", null, true);
        echo "\"
               ng-required=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequired", array()), "html", null, true);
        echo "\"
               
               />
        <i ng-class=\"{ 
        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty, 
        \t'form-control-feedback glyphicon glyphicon-ok': ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$valid  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty
         }\"></i>
        <small class=\"message-status-error\" ng-show=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.required && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequired_msg", array()), "html", null, true);
        echo " <br/>
        </small>
        <small class=\"message-status-error\" ng-show=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinlength_msg", array()), "html", null, true);
        echo " <br/>
    \t</small>
    \t<small class=\"message-status-error\" ng-show=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxlength_msg", array()), "html", null, true);
        echo "  <br/>
    \t</small>
        <small class=\"message-status-error\" ng-show=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$error.pattern && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mName", array()), "html", null, true);
        echo ".\$dirty\">
        \t* ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpression_msg", array()), "html", null, true);
        echo "  <br/>
    \t</small>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/massada/application/components/textbox/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 31,  151 => 30,  146 => 28,  136 => 27,  131 => 25,  121 => 24,  116 => 22,  106 => 21,  95 => 19,  85 => 18,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  42 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }
}
