<?php

/* TopxiaAdminBundle:System:default-avatar.html.twig */
class __TwigTemplate_bf9c374ae501a6fc714fee465d474980701db8a8c73f310cc55b53cfd926becc extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.defaultAvatar")) {
            // line 2
            echo "  <div class=\"form-group\" id=\"avatar-class\">
    <div class=\"col-md-8 control-label\"><b>自定义默认头像</b></div>
    <form id=\"avatar-form\" method=\"post\" action=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("admin_setting_default_avatar");
            echo "\" enctype=\"multipart/form-data\">
      <div class=\"controls col-md-8 controls\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("avatar", "true"), "html", null, true);
            echo "\">
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8 controls\">
          <input id=\"avatar-field\" type=\"file\" name=\"picture\" accept=\"image/gif,image/jpeg,image/png\">
          <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件。</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-default btn-sm\">上传</button>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  </div>

  <div class=\"form-group\" id=\"system-avatar-class\" style=\"display:none;\">
    <div class=\"col-md-8 control-label\"><b>系统默认头像</b></div>
      <div class=\"controls col-md-8 controls\">
        <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("avatar", ""), "html", null, true);
            echo "\">
      </div>
  </div>

";
        } else {
            // line 35
            echo "
  <div class=\"form-group\" id=\"avatar-class\" style=\"display:none;\">
    <div class=\"col-md-8 control-label\"><b>自定义默认头像</b></div>
    <form id=\"avatar-form\" method=\"post\" action=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("admin_setting_default_avatar");
            echo "\" enctype=\"multipart/form-data\">
      <div class=\"controls col-md-8 controls\">
        <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("avatar", "true"), "html", null, true);
            echo "\">
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8 controls\">
          <input id=\"avatar-field\" type=\"file\" name=\"picture\" accept=\"image/gif,image/jpeg,image/png\">
          <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件。</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-default btn-sm\">上传</button>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  </div>

  <div class=\"form-group\" id=\"system-avatar-class\">
    <div class=\"col-md-8 control-label\"><b>系统默认头像</b></div>
      <div class=\"controls col-md-8 controls\">
        <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("avatar", ""), "html", null, true);
            echo "\">
      </div>
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 64,  98 => 57,  78 => 40,  68 => 35,  60 => 30,  50 => 23,  30 => 6,  25 => 4,  21 => 2,  19 => 1,  101 => 42,  99 => 41,  94 => 38,  88 => 34,  86 => 33,  81 => 31,  73 => 38,  71 => 24,  65 => 20,  63 => 19,  58 => 17,  46 => 8,  43 => 7,  40 => 6,  33 => 2,  28 => 4,  26 => 3,);
    }
}
