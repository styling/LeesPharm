<?php

/* TopxiaAdminBundle:System:mailer.html.twig */
class __TwigTemplate_765026f69f931cba2183b474d99f685a6baa9be85e58a07a209e1c41fa4eaa21 extends Twig_Template
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
        // line 5
        $context["script_controller"] = "system/mailer";
        // line 7
        $context["submenu"] = "mailer";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "电子邮件 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>邮件服务器设置</h1></div>

";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >邮件发送</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "enabled"));
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"host\">SMTP服务器地址</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "host"), "html", null, true);
        echo "\">
    </div>
  </div>
  <p></p>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"port\">SMTP端口号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "port"), "html", null, true);
        echo "\">
      <p class=\"help-block\">通常端口号为25</p>
    </div>
  </div>
 <p></p>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"username\" >SMTP用户名</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "username"), "html", null, true);
        echo "\">
    </div>
  </div>
 <p></p>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"password\" >SMTP密码</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "password"), "html", null, true);
        echo "\">
    </div>
  </div>
 <p></p>

 <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"from\" >发信人地址</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "from"), "html", null, true);
        echo "\">
    </div>
  </div>
 <p></p>

 <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"name\" >发信人名称</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "name"), "html", null, true);
        echo "\">
    </div>
  </div>
 <p></p>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 90,  135 => 79,  122 => 69,  109 => 59,  96 => 49,  83 => 39,  71 => 30,  59 => 21,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
