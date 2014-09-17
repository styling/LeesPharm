<?php

/* TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig */
class __TwigTemplate_1e903f9a033f179d7fe963d42d2b03b33b2916a359ce1d963db55f85d683f7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'analysisHead' => array($this, 'block_analysisHead'),
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["panel"] = "dashboard";
        // line 3
        $context["nav"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery/morris/0.5.0/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"row\">

    ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 10
        echo "
  <div class=\"col-md-12\">
  ";
        // line 12
        $this->displayBlock('analysisHead', $context, $blocks);
        // line 65
        $this->displayBlock('analysisBody', $context, $blocks);
        // line 67
        echo "</div>
</div>

";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 12
    public function block_analysisHead($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"col-md-12\">
";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <div class=\"page-header\">
    <h1>数据统计</h1>
  </div>
  <form  class=\"well well-sm form-inline\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_rount", array("tab" => (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")))), "html", null, true);
        echo "\" method=\"get\" id=\"operation-form\"  role=\"form\" >
          <div class=\"form-group\">
    <select class=\"form-control\" name=\"analysisDateType\">
        ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("analysisDateType"), $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType"), "--选择数据类型--");
        echo "
    </select>
  </div>
        <div class=\"form-group\">
         <a  type=\"button\" class=\"btn btn-default\"  id=\"btn-month\" currentMonthStart=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "currentMonthStart"), "html", null, true);
        echo "\" currentMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "currentMonthEnd"), "html", null, true);
        echo "\">本月</a>
        </div>
        <div class=\"form-group\">
         <a type=\"button\"  class=\"btn btn-default \"  id=\"btn-lastMonth\" lastMonthStart=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastMonthStart"), "html", null, true);
        echo "\" lastMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastMonthEnd"), "html", null, true);
        echo "\">上月</a>
        </div>

        <div class=\"form-group\">
          <a type=\"button\"  class=\"btn btn-default \" id=\"btn-lastThreeMonths\" lastThreeMonthsStart=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastThreeMonthsStart"), "html", null, true);
        echo "\" lastThreeMonthsEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastThreeMonthsEnd"), "html", null, true);
        echo "\">近三月</a>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-4\" style=\"padding-top:9px;\">起始日期</label>
            <div class=\"col-md-8 \">
            <input type=\"text\" class=\"form-control\" name=\"startTime\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-4\" style=\"padding-top:9px;\">截止日期</label>
             <div class=\"col-md-8 \">
            <input type=\"text\" class=\"form-control\"  name=\"endTime\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime"), "html", null, true);
        echo "\">
            </div>
        </div>

        <button class=\"btn btn-primary pull-right\" id=\"btn-search\">查询</button>
      </form>

      ";
        // line 52
        if ((((array_key_exists("showHelpMessage", $context)) ? (_twig_default_filter((isset($context["showHelpMessage"]) ? $context["showHelpMessage"] : $this->getContext($context, "showHelpMessage")), null)) : (null)) == 1)) {
            // line 53
            echo "        <div class=\"help-block\">视频观看数，将从数据统计功能更新启用之日起开始记录</div>
      ";
        }
        // line 55
        echo "  </div>
  <div class=\"col-md-12\"><br>
  </div>
  <div class=\"col-md-12\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li role=\"presentation\"";
        // line 60
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "trend")) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), array("tab" => "trend", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime"), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime"), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType"))), "html", null, true);
        echo "\">趋势</a></li>
        <li role=\"presentation\" ";
        // line 61
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "detail")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), array("tab" => "detail", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime"), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime"), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType"))), "html", null, true);
        echo "\">明细</a></li>
      </ul>
  </div>
";
    }

    // line 65
    public function block_analysisBody($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 65,  164 => 61,  156 => 60,  149 => 55,  145 => 53,  143 => 52,  133 => 45,  123 => 38,  112 => 32,  103 => 28,  95 => 25,  88 => 21,  82 => 18,  75 => 14,  72 => 13,  69 => 12,  65 => 9,  62 => 8,  55 => 67,  53 => 65,  51 => 12,  47 => 10,  38 => 5,  35 => 4,  30 => 3,  28 => 2,  66 => 16,  63 => 15,  60 => 14,  52 => 11,  45 => 8,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
