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
        echo ".\$dirty , 
            'has-success': ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "contact{{ \$index }}";
        echo ".\$dirty  }\">
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
                        <button class=\"btn btn-danger\"  type=\"button\" ng-click=\"removeContact(\$index)\">X</button>
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
                <h4 style=\"float: left; overflow:auto; padding-right:25px;\" >Phone ";
        // line 66
        echo "{{ contact.name }}";
        echo "</h4>
                <button type=\"button\" class=\"btn btn-default\" ng-click=\"addPhone(\$index)\">Add Phone</button>
                <hr/>
                <div class=\"form-horizontal\">
                    <div class=\"form-group\" ng-repeat=\"phone in contact.phone track by \$index\" ng-class=\"{ 
\t\t\t\t\t\t'has-error':   ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty, 
\t\t\t\t\t\t'has-success': ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty }\">
                        <label for=\"\" class=\"col-sm-2 control-label\">Phone ";
        // line 73
        echo "{{ \$index + 1 }}";
        echo " : </label>
                        <div class=\"col-sm-10 controls\">
                            <div class=\"input-group\">
                                <input \ttype=\"text\" class=\"form-control\"
                                \t\tname \t\t\t= \"";
        // line 77
        echo "phone{{\$parent.\$index}}{{\$index}}";
        echo "\"
                                \t   \tng-model \t\t= \"phone.";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModelPhone", array()), "html", null, true);
        echo "\"
                                \t   \tng-trim \t\t= \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrimPhone", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\t\t\t\tng-pattern \t\t= \"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-minlength \t= \"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-maxlength \t= \"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxPhone", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-required \t= \"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequirePhone", array()), "html", null, true);
        echo "\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-danger\" type=\"button\" ng-click=\"removePhone(\$parent.\$index, \$index)\">X</button>
                                </span>
                            </div>
                            <i style=\"right: 50px; top:0px;\" ng-class=\"{ 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty, 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-ok':     ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty }\"></i>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.required  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequirePhone_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t        </small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinPhone_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t    \t<small class=\"message-status-error\" ng-show=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxPhone_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.pattern   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "phone{{\$parent.\$index}}{{ \$index }}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpPhone_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr/> <!-- end phone-->

        <!-- email -->
        <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\"></label>
            <div class=\"col-sm-10 controls\">
                <h4 style=\"float: left; overflow:auto; padding-right:25px;\">Email ";
        // line 115
        echo "{{ contact.name }}";
        echo "</h4>
                <button type=\"button\" class=\"btn btn-default\" ng-click=\"addEmail(\$index)\">Add Email</button>
                <hr/>
                <div class=\"form-horizontal\">
                    <div class=\"form-group\" ng-repeat=\"email in contact.email track by \$index\" ng-class=\"{ 
\t\t\t\t\t\t'has-error':   ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty, 
\t\t\t\t\t\t'has-success': ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty }\">
                        <label for=\"\" class=\"col-sm-2 control-label\">Email ";
        // line 122
        echo "{{ \$index + 1 }}";
        echo " : </label>
                        <div class=\"col-sm-10 controls\">
                            <div class=\"input-group\">
                                <input \ttype=\"text\" class=\"form-control\" 
                            \t\t\tname \t\t\t= \"";
        // line 126
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo "\"
                                \t   \tng-model \t\t= \"email.";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModelEmail", array()), "html", null, true);
        echo "\"
                                \t   \tng-trim \t\t= \"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mTrimEmail", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\t\t\t\tng-pattern \t\t= \"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-minlength \t= \"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-maxlength \t= \"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxEmail", array()), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tng-required \t= \"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireEmail", array()), "html", null, true);
        echo "\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-danger\" type=\"button\" ng-click=\"removeEmail(\$parent.\$index, \$index)\">X</button>
                                </span>
                            </div>
                            <i style=\"right: 50px; top:0px;\" ng-class=\"{ 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-remove': ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$invalid && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty, 
\t\t\t\t\t        \t'form-control-feedback glyphicon glyphicon-ok':     ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$valid   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty }\"></i>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.required  && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mRequireEmail_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t        </small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.minlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMinEmail_msg", array()), "html", null, true);
        echo " <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t    \t<small class=\"message-status-error\" ng-show=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.maxlength && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mMaxEmail_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
\t\t\t\t\t        <small class=\"message-status-error\" ng-show=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{ \$index }}";
        echo ".\$error.pattern   && ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mBase", array()), "html", null, true);
        echo ".";
        echo "email{{\$parent.\$index}}{{\$index}}";
        echo ".\$dirty\">
\t\t\t\t\t        \t* ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mExpEmail_msg", array()), "html", null, true);
        echo "  <br/>
\t\t\t\t\t    \t</small>
                        </div>
                    </div>
                    
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
        // line 166
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
        return array (  522 => 166,  503 => 150,  493 => 149,  488 => 147,  478 => 146,  473 => 144,  463 => 143,  458 => 141,  448 => 140,  438 => 139,  428 => 138,  419 => 132,  415 => 131,  411 => 130,  407 => 129,  403 => 128,  399 => 127,  395 => 126,  388 => 122,  378 => 121,  368 => 120,  360 => 115,  343 => 101,  333 => 100,  328 => 98,  318 => 97,  313 => 95,  303 => 94,  298 => 92,  288 => 91,  278 => 90,  268 => 89,  259 => 83,  255 => 82,  251 => 81,  247 => 80,  243 => 79,  239 => 78,  235 => 77,  228 => 73,  218 => 72,  208 => 71,  200 => 66,  188 => 57,  178 => 56,  173 => 54,  163 => 53,  158 => 51,  148 => 50,  143 => 48,  133 => 47,  123 => 46,  113 => 45,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  73 => 29,  63 => 28,  53 => 27,  47 => 24,  26 => 6,  19 => 1,);
    }
}
