<?php

/* C:\xampp\htdocs\massada/plugins/marsflow/controls/components/contact/default.htm */
class __TwigTemplate_3fd30a9ed23fbc7084124b2b895ab64d95d48978513cb502b6edb9ffd857303f extends Twig_Template
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
        echo "<h2 class=\"sub-header\">Contact Person</h2>
<!-- contact menu toolbox-->
<hr/>
<div class=\"form-inline\">
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" ng-click=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo " = [];\">
            <span class=\"fa fa-eraser\"></span>
            Clear Contacts
        </button>
    </div>
    
    <!-- Submit -->
    <div class=\"form-group\">
        <button type=\"button\" ng-click=\"addContact()\" class=\"btn btn-primary\"> 
            <span class=\"fa fa-plus\"></span>
            Add Contact
        </button>
    </div>
</div>
<!--end contacts toolbox-->    

<!-- main fonctact name-->
<div class=\"form-horizontal\">
    <div ng-repeat=\"contact in ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo " track by \$index\">
        <hr/>
        <div class=\"form-group\" ng-class=\"{ 
            'has-error':   ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty, 
            'has-success': ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty }\">
            <label for=\"\" class=\"col-sm-2 control-label\">Contact ";
        // line 29
        echo "{{ \$index + 1 }}";
        echo " : </label>
            <div class=\"col-sm-10 controls\">
                <div class=\"input-group\">
                    <input \ttype=\"text\" class=\"form-control\" 
                    \t\tname \t\t\t= \"";
        // line 33
        echo "contact{{ \$index }}";
        echo "\"
                    \t\tng-model \t\t= \"contact.";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModelContact", array()), "html", null, true);
        echo "\"
                    \t\tng-trim \t\t= \"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrimContact", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\tng-pattern \t\t= \"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpContact", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tng-minlength \t= \"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinContact", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tng-maxlength \t= \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxContact", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\tng-required \t= \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireContact", array()), "html", null, true);
        echo "\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-danger\" ng-click=\"removeContact(\$index)\">X</button>
                    </span>
                </div>
                <i style=\"right: 50px; top:0px\" ng-class=\"{ 
\t\t        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty, 
\t\t        \t'form-control-feedback glyphicon glyphicon-ok':     ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty }\"></i>
\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$error.required  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty\">
\t\t        \t* ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireContact_msg", array()), "html", null, true);
        echo " <br/>
\t\t        </small>
\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty\">
\t\t        \t* ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinContact_msg", array()), "html", null, true);
        echo " <br/>
\t\t    \t</small>
\t\t    \t<small class=\"message-status-error\" ng-show=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty\">
\t\t        \t* ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxContact_msg", array()), "html", null, true);
        echo "  <br/>
\t\t    \t</small>
\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$error.pattern   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty\">
\t\t        \t* ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpContact_msg", array()), "html", null, true);
        echo "  <br/>
\t\t    \t</small>
            </div>
        </div>

        <!-- phone -->
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"></label>
            <div class=\"col-sm-10 controls\">
                <h4>Phone ";
        // line 66
        echo "{{ contact.name }}";
        echo "</h4>
                <hr/>
                <div class=\"form-horizontal\">
                    <div class=\"form-group\" ng-repeat=\"phone in contact.phones track by \$index\" ng-class=\"{ 
\t\t\t\t\t\t'has-error':   ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty, 
\t\t\t\t\t\t'has-success': ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty }\">
                        <label for=\"\" class=\"col-sm-2 control-label\">Phone ";
        // line 72
        echo "{{ \$index + 1 }}";
        echo " : </label>
                        <div class=\"col-sm-10 controls\">
                            <div class=\"input-group\">
                                <input \ttype=\"text\" class=\"form-control\"
                                \t\tname \t\t\t= \"";
        // line 76
        echo "phone{{\$parent.\$index}}{{\$index}}";
        echo "\"
                                \t   \tng-model \t\t= \"phone.";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModelPhone", array()), "html", null, true);
        echo "\"
                                \t   \tng-trim \t\t= \"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrimPhone", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\t\t\t\tng-pattern \t\t= \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-minlength \t= \"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-maxlength \t= \"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-required \t= \"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequirePhone", array()), "html", null, true);
        echo "\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-danger\" ng-click=\"removePhone(\$parent.\$index, \$index)\">X</button>
                                </span>
                            </div>
                            <i style=\"right: 50px; top:0px;\" ng-class=\"{ 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty, 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-ok':     ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty }\"></i>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.required  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequirePhone_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t        </small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinPhone_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t    \t<small class=\"message-status-error\" ng-show=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxPhone_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.pattern   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpPhone_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-default\" ng-click=\"addPhone(\$index)\">Add Phone</button>
                </div>
            </div>
        </div>
        <hr/> <!-- end phone-->

        <!-- email -->
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"></label>
            <div class=\"col-sm-10 controls\">
                <h4>Email ";
        // line 114
        echo "{{ contact.name }}";
        echo "</h4>
                <hr/>
                <div class=\"form-horizontal\">
                    <div class=\"form-group\" ng-repeat=\"email in contact.emails track by \$index\" ng-class=\"{ 
\t\t\t\t\t\t'has-error':   ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty, 
\t\t\t\t\t\t'has-success': ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty }\">
                        <label for=\"\" class=\"col-sm-2 control-label\">Email ";
        // line 120
        echo "{{ \$index + 1 }}";
        echo " : </label>
                        <div class=\"col-sm-10 controls\">
                            <div class=\"input-group\">
                                <input \ttype=\"text\" class=\"form-control\" 
                            \t\t\tname \t\t\t= \"";
        // line 124
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo "\"
                                \t   \tng-model \t\t= \"email.";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModelEmail", array()), "html", null, true);
        echo "\"
                                \t   \tng-trim \t\t= \"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrimEmail", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\t\t\t\tng-pattern \t\t= \"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-minlength \t= \"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-maxlength \t= \"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-required \t= \"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireEmail", array()), "html", null, true);
        echo "\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-danger\" ng-click=\"removeEmail(\$parent.\$index, \$index)\">X</button>
                                </span>
                            </div>
                            <i style=\"right: 50px; top:0px;\" ng-class=\"{ 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty, 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-ok':     ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty }\"></i>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.required  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireEmail_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t        </small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinEmail_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t    \t<small class=\"message-status-error\" ng-show=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxEmail_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.pattern   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpEmail_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-default\" ng-click=\"addEmail(\$index)\">Add Email</button>
                </div>
            </div>
        </div><!--end email -->

    </div>
</div> <!-- end contacts->

<!-- bottom contact menu tools-->
<hr/>
<div class=\"form-inline\">
    <div class=\"form-group\">
        <button type=\"button\" class=\"btn btn-default\" ng-click=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo " = [];\">
            <span class=\"fa fa-eraser\"></span>
            Clear Contacts
        </button>
    </div>
    
    <div class=\"form-group\">
        <button type=\"button\" ng-click=\"addContact()\" class=\"btn btn-primary\"> 
            <span class=\"fa fa-plus\"></span>
            Add Contact
        </button>
    </div>
</div><!-- end bottom contact menu tools -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/marsflow/controls/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 164,  501 => 148,  491 => 147,  486 => 145,  476 => 144,  471 => 142,  461 => 141,  456 => 139,  446 => 138,  436 => 137,  426 => 136,  417 => 130,  413 => 129,  409 => 128,  405 => 127,  401 => 126,  397 => 125,  393 => 124,  386 => 120,  376 => 119,  366 => 118,  359 => 114,  342 => 100,  332 => 99,  327 => 97,  317 => 96,  312 => 94,  302 => 93,  297 => 91,  287 => 90,  277 => 89,  267 => 88,  258 => 82,  254 => 81,  250 => 80,  246 => 79,  242 => 78,  238 => 77,  234 => 76,  227 => 72,  217 => 71,  207 => 70,  200 => 66,  188 => 57,  178 => 56,  173 => 54,  163 => 53,  158 => 51,  148 => 50,  143 => 48,  133 => 47,  123 => 46,  113 => 45,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  73 => 29,  63 => 28,  53 => 27,  47 => 24,  26 => 6,  19 => 1,);
    }
}
