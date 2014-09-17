<?php

/* TopxiaAdminBundle:System:refund.html.twig */
class __TwigTemplate_9b09992d16055bb52e7732df6f377ce73ae2e9b4a80daea39f9aff784a91529d extends Twig_Template
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
        $context["submenu"] = "refund";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "退款设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header\"><h1>退款设置</h1></div>

";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"max-refund-days-field\" >退款期限</label>
    </div>
    <div class=\"controls col-md-8\">
      <input id=\"max-refund-days-field\" class=\"form-control\" name=\"maxRefundDays\" type=\"text\"   value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : $this->getContext($context, "refundSetting")), "maxRefundDays"), "html", null, true);
        echo "\">
      <div class=\"help-block\">用户在退款期限的天数内，可以申请退款。退款期限为０，则不能申请退款。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"apply-notification-field\" >退款申请通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"apply-notification-field\" class=\"form-control\" name=\"applyNotification\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : $this->getContext($context, "refundSetting")), "applyNotification"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">退款申请提交时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"success-notification-field\" >退款审核通过通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"success-notification-field\" class=\"form-control\" name=\"successNotification\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : $this->getContext($context, "refundSetting")), "successNotification"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">管理员审核退款通过时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"failed-notification-field\">退款审核未通过通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"failed-notification-field\" class=\"form-control\" name=\"failedNotification\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : $this->getContext($context, "refundSetting")), "failedNotification"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">管理员审核退款未通过时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
        // line 71
        echo "
<div class=\"alert alert-info\">
  <p><strong>通知变量说明：</strong></p>
  <ul>
    <li>{{course}}: 需退款的课程</li>
    <li>{{amount}}: 退款金额</li>
  </ul>
</div>
";
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:refund.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 71,  110 => 60,  96 => 49,  83 => 39,  70 => 29,  57 => 19,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
