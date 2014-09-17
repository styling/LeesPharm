<?php

/* TopxiaWebBundle:CourseManage:price.html.twig */
class __TwigTemplate_2017831f37d869a1b7ba88d3d3423750c99837b43ce5131d629f73639314db11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "price";
        // line 6
        $context["script_controller"] = "course-manage/price";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "价格设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
\t<div class=\"panel-heading\">价格设置
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t";
        // line 15
        if ((isset($context["canModifyPrice"]) ? $context["canModifyPrice"] : $this->getContext($context, "canModifyPrice"))) {
            // line 16
            echo "\t\t
\t\t\t<form class=\"form-horizontal\" id=\"price-form\" method=\"post\" action=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"price\">价格</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"price\" name=\"price\" class=\"form-control\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 29
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("free_limit")) {
                // line 30
                echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"freeStartTime\">限免开始时间</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"freeStartTime\" name=\"freeStartTime\" class=\"form-control\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "freeStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "freeStartTime"))) : ("")), "Y-m-d H:i"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\" id=\"start-help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"freeEndTime\">限免结束时间</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"freeEndTime\" name=\"freeEndTime\" class=\"form-control\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "freeEndTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "freeEndTime"))) : ("")), "Y-m-d H:i"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t";
            // line 51
            if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
                // line 52
                echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"price\">会员课程设置</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t  <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
\t\t\t\t\t  \t";
                // line 59
                echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "vipLevelId"), "无");
                echo "
\t\t\t\t\t  </select>
\t\t\t\t\t\t<div class=\"help-block\">设置会员课程后，该会员及更高等级会员，可免费学习。</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 65
            echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-offset-2 col-md-8 controls\">
\t\t\t\t\t\t<button class=\"btn btn-fat btn-primary\" id=\"price-save-btn\" type=\"submit\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">

\t\t\t</form>
\t\t";
        } else {
            // line 77
            echo "\t\t  <div class=\"alert alert-danger\">抱歉，您无权设置课程价格，如有需要请联系网站管理员！</div>
\t\t";
        }
        // line 79
        echo "\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 79,  148 => 77,  141 => 73,  131 => 65,  122 => 59,  113 => 52,  111 => 51,  108 => 50,  100 => 45,  87 => 35,  80 => 30,  78 => 29,  70 => 24,  60 => 17,  57 => 16,  55 => 15,  50 => 13,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
