<?php

/* C:\xampp\htdocs\massada/plugins/massada/application/components/image/default.htm */
class __TwigTemplate_b486b3fc501005897a186af9b5994ce182a7d91498d828dd8185417ecf85f806 extends Twig_Template
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
        echo "<style>
\t.avatar-view {
\t  display: block;
\t  height: 200px;
\t  width: 200px;
\t  border: 3px solid #fff;
\t  border-radius: 5px;
\t  box-shadow: 0 0 5px rgba(0,0,0,.15);
\t  cursor: pointer;
\t  overflow: hidden;
}

    .cropArea {
      background: #E4E4E4;
      overflow: hidden;
      width:500px;
      height:350px;
    }

\t@media (min-width: 1200px) {
        .modal-dialog {
            width: 1170px!important;
        }
    }
    
    @media (min-width: 992px) {
        .modal-dialog {
            width: 970px!important;
        }
    }

</style>


\t
 <div class=\"form-group\" id=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\">
   \t\t
\t<div class=\"avatar-view\" title=\"Change the avatar\" data-toggle=\"modal\" id=\"tae\" data-target=\"#";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "modalLink", array()), "html", null, true);
        echo "\"> \t
\t\t<img ng-src=\"";
        // line 39
        echo "{{ avatar }}";
        echo "\">
\t</div>
\t<input type=\"text\" name=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mNamePhoto", array()), "html", null, true);
        echo "\" ng-model=\"img\" hidden>
    <input type=\"text\" name=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mNameAvatar", array()), "html", null, true);
        echo "\" ng-model=\"avatar\" hidden>

</div>

<!-- crop modal -->
<div class=\"modal fade\" id=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "modalLink", array()), "html", null, true);
        echo "\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                    <span aria-hidden=\"true\">×</span>
                    <span class=\"sr-only\">Close</span>
                </button>
                <h4 class=\"modal-title\">Crop Photo</h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"col-md-8 col-sm-7\">

  \t\t\t\t\t\t<div class=\"form-group\">
  \t\t\t\t\t\t    <label for=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mId", array()), "html", null, true);
        echo "\" class=\"col-sm-5 col-md-4 control-label\">Source File :</label>
  \t\t\t\t\t\t    <div class=\"col-sm-7 col-md-8\">
  \t\t\t\t\t\t        <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\" >
  \t\t\t\t\t\t    </div>
  \t\t\t\t\t\t</div>
  \t\t\t\t\t\t<div class=\"cropArea\">
  \t\t\t\t\t\t\t<img-crop image=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "mModel", array()), "html", null, true);
        echo "\" area-type=\"square\" change-on-fly=\"false\" result-image=\"img\"></img-crop>
  \t\t\t\t\t\t</div>
                    </div>

                    <div class=\"col-md-4 col-sm-5\">
                    \t<div class=\"form-group\">
\t\t\t\t\t\t    <label class=\"control-label\">Preview :</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img ng-src=\"";
        // line 77
        echo "{{ img }}";
        echo "\" />
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"button\" class=\"btn btn-primary\" ng-click=\"capture()\" data-dismiss=\"modal\">Save</button>         
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\massada/plugins/massada/application/components/image/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 77,  110 => 69,  101 => 63,  82 => 47,  74 => 42,  70 => 41,  65 => 39,  61 => 38,  56 => 36,  19 => 1,);
    }
}
