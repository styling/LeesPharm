<?php

/* TopxiaAdminBundle:System:user-center.html.twig */
class __TwigTemplate_6a2380ebd0d83ec0a8e065c978713c4bafe5c657bfc69df549e9b342e586927c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "setting/user-center";
        // line 6
        $context["submenu"] = "user_center";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户中心设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\">
  ";
        // line 11
        if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "mode") != "default")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_admin_sync");
            echo "\" class=\"pull-right btn btn-link\">管理员帐号同步</a>";
        }
        // line 12
        echo "  <h1>用户中心设置</h1>
</div>

";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >用户中心</label>
    </div>
    <div class=\"controls col-md-8 radios mode-radios\">
      ";
        // line 23
        echo $this->env->getExtension('topxia_html_twig')->radios("mode", array("default" => "无", "discuz" => "Discuz (Ucenter)", "phpwind" => "phpwind (WindID)"), $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "mode"));
        echo "
      <div class=\"help-block\">支持phpwind 9系列，Discuz X2.5/X3.0/X3.1的用户中心</div>
    </div>
  </div>

  <div class=\"row form-group with-discuz\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>Ucenter配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"discuz_config\" rows=\"10\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["discuzConfig"]) ? $context["discuzConfig"] : $this->getContext($context, "discuzConfig")), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">从Ucenter复制配置，粘帖到此处。注意：请不要去除头部的 &lt;?php。 <a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

  <div class=\"row form-group with-phpwind\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>WindId配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"phpwind_config\" rows=\"10\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["phpwindConfig"]) ? $context["phpwindConfig"] : $this->getContext($context, "phpwindConfig")), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">如使用phpwind (WindID)的用户中心，请填写此项配置。<a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

    <div class=\"form-group with-phpwind with-discuz\">
    <div class=\"col-md-3 control-label\">
      <label for=\"email_filter\">过滤邮箱地址清单</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"email_filter\" name=\"email_filter\" class=\"form-control\" rows=\"5\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "email_filter"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">
        ";
        // line 53
        echo "
        <div>每行输入一个邮箱地址。名单中的邮箱地址如果出现在第三方登录的过程中，则会给该用户随机生成一个邮箱</div>
        ";
        echo "
      </div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>用户修改昵称</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 63
        echo $this->env->getExtension('topxia_html_twig')->radios("nickname_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "nickname_enabled"));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>头像设置提醒</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 72
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar_alert", array("none" => "从不", "in_user_center" => "每次进入\"我的课程\"时", "when_join_course" => "加入免费课程时强制要求"), $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "avatar_alert"));
        echo "
    </div>
  </div>



  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>




  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 88,  136 => 72,  124 => 63,  109 => 53,  104 => 49,  91 => 39,  80 => 31,  69 => 23,  58 => 15,  53 => 12,  47 => 11,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
