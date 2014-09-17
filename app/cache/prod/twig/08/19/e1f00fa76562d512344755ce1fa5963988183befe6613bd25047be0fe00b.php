<?php

/* TopxiaAdminBundle:System:login-connect.html.twig */
class __TwigTemplate_0819e1f00fa76562d512344755ce1fa5963988183befe6613bd25047be0fe00b extends Twig_Template
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
        $context["script_controller"] = "system/login_bind";
        // line 7
        $context["submenu"] = "login_bind";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-header\"><h1>登录设置</h1></div>

";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"login_bind-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >用户登录限制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 22
        echo $this->env->getExtension('topxia_html_twig')->radios("login_limit", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "login_limit"));
        echo "
      <p class=\"help-block\">开启后同一帐号只能在一处登录</p>
      </div>
    </div>
  </fieldset>
<br>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >第三方登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 35
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "enabled"));
        echo "
      </div>
    </div>
  </fieldset>
<br>

  <fieldset>
    <legend>微博登录</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label >微博登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        echo $this->env->getExtension('topxia_html_twig')->radios("weibo_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "weibo_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://open.weibo.com/authentication/\" target=\"_blank\">申请微博登录</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"weibo_key\" >App Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"weibo_key\" name=\"weibo_key\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "weibo_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"weibo_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"weibo_secret\" name=\"weibo_secret\" class=\"form-control\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "weibo_secret"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置账号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 75
        echo $this->env->getExtension('topxia_html_twig')->radios("weibo_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "weibo_set_fill_account"));
        echo "
              <p class=\"help-block\">在微博官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>QQ登录</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >QQ登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 88
        echo $this->env->getExtension('topxia_html_twig')->radios("qq_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "qq_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://wiki.open.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91%E7%BD%91%E7%AB%99%E6%8E%A5%E5%85%A5#2._QQ.E7.99.BB.E5.BD.95\" target=\"_blank\">申请QQ登录</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"qq_key\" >App ID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"qq_key\" name=\"qq_key\" class=\"form-control\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "qq_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"qq_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"qq_secret\" name=\"qq_secret\" class=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "qq_secret"), "html", null, true);
        echo "\">
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置账号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 116
        echo $this->env->getExtension('topxia_html_twig')->radios("qq_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "qq_set_fill_account"));
        echo "
              <p class=\"help-block\">在QQ官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>人人连接</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >人人连接</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 130
        echo $this->env->getExtension('topxia_html_twig')->radios("renren_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "renren_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://wiki.dev.renren.com/wiki/WEB%E7%BD%91%E7%AB%99%E5%B8%90%E5%8F%B7%E7%99%BB%E5%BD%95%E5%85%A5%E9%97%A8%E6%95%99%E7%A8%8B\" target=\"_blank\">申请人人连接</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"renren_key\" >App Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"renren_key\" name=\"renren_key\" class=\"form-control\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "renren_key"), "html", null, true);
        echo "\">
      </div>
    </div>
  
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"renren_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"renren_secret\" name=\"renren_secret\" class=\"form-control\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "renren_secret"), "html", null, true);
        echo "\">
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置账号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 158
        echo $this->env->getExtension('topxia_html_twig')->radios("renren_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "renren_set_fill_account"));
        echo "
              <p class=\"help-block\">在人人官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>登录接口验证代码</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"verify_code\" >验证代码</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"verify_code\" name=\"verify_code\" class=\"form-control\" rows=\"5\">";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : $this->getContext($context, "loginConnect")), "verify_code"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">在申请QQ登录等接口时，会要求验证您的网站域名。请把相关验证代码粘到此处，然后提交保存。</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:login-connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 183,  252 => 172,  235 => 158,  223 => 149,  211 => 140,  198 => 130,  181 => 116,  169 => 107,  157 => 98,  144 => 88,  128 => 75,  117 => 67,  105 => 58,  92 => 48,  76 => 35,  60 => 22,  47 => 12,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
