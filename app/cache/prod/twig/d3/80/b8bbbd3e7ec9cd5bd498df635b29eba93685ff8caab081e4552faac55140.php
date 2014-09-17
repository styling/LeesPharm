<?php

/* TopxiaAdminBundle:System:default.html.twig */
class __TwigTemplate_d380b8bbbd3e7ec9cd5bd498df635b29eba93685ff8caab081e4552faac55140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["submenu"] = "default";
        // line 4
        $context["script_controller"] = "setting/default";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "系统默认设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_maincontent($context, array $blocks = array())
    {
        // line 7
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <div class=\"page-header\"><h1>系统默认设置</h1></div>

  <fieldset>
    <legend>用户默认头像</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"default-avatar\" >
        ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar", array(1 => "自定义默认头像", 0 => "系统默认头像"), $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "defaultAvatar"));
        echo "
        <p>网校内未上传头像的用户，都会显示该默认头像</p>    
        ";
        // line 19
        $this->env->loadTemplate("TopxiaAdminBundle:System:default-avatar.html.twig")->display($context);
        // line 20
        echo "      </div>
    </div>
  </fieldset>

";
        // line 24
        if ((isset($context["hasOwnCopyright"]) ? $context["hasOwnCopyright"] : $this->getContext($context, "hasOwnCopyright"))) {
            // line 25
            echo "
  <fieldset>
    <legend>课程默认图片</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"defaultCoursePicture\">
        ";
            // line 31
            echo $this->env->getExtension('topxia_html_twig')->radios("coursePicture", array(1 => "自定义默认课程图片", 0 => "系统默认课程图片"), $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "defaultCoursePicture"));
            echo "
        <p>网校内未上传图片的课程，都会显示该图片</p>
        ";
            // line 33
            $this->env->loadTemplate("TopxiaAdminBundle:System:default-course-picture.html.twig")->display($context);
            // line 34
            echo "      </div>
    </div>
  </fieldset>
";
        }
        // line 38
        echo "
  <div class=\"page-header\" style=\"display:none;\"><h1>分享内容</h1></div>
<legend></legend>
  ";
        // line 41
        $this->env->loadTemplate("TopxiaAdminBundle:System:default-share-content.html.twig")->display($context);
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  99 => 41,  94 => 38,  88 => 34,  86 => 33,  81 => 31,  73 => 25,  71 => 24,  65 => 20,  63 => 19,  58 => 17,  46 => 8,  43 => 7,  40 => 6,  33 => 2,  28 => 4,  26 => 3,);
    }
}
