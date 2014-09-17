<?php

/* TopxiaWebBundle:CourseManage:detail.html.twig */
class __TwigTemplate_8460c1090480cf431c84f3b5447597b14aeb8ef582e1839c9e59d5178d066ae6 extends Twig_Template
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
        $context["side_nav"] = "detail";
        // line 6
        $context["script_controller"] = "course-manage/detail";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "详细信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">详细信息</div>
  <div class=\"panel-body\">
    <form id=\"course-base-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label>课程简介</label></div>
        <div class=\"col-md-8 controls\">
          <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\">";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "about");
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group dynamic-collection\" id=\"course-goals-form-group\">
        <div class=\"col-md-2 control-label\"><label>课程目标</label></div>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group sortable-list\" data-role=\"list\" style=\"margin-bottom:10px;display:none;\"></ul>
          <div class=\"input-group\">
            <input id=\"teacher-input\" type=\"text\" data-role=\"item-input\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>

          <script type=\"text/plain\" data-role=\"model\">";
        // line 34
        echo twig_jsonencode_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "goals"));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
            ";
        // line 43
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                {{ this }}
                <input type=\"hidden\" name=\"goals[]\" value=\"{{ this }}\">
                <button class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\">&times;</button>
              </li>
            ";
        echo "
          </script>

        </div>
      </div>

      <div class=\"form-group\" id=\"course-audiences-form-group\">
        <div class=\"col-md-2 control-label\"><label>适应人群</label></div>
        <div class=\"col-md-8 controls\">

          <ul class=\"list-group sortable-list  dynamic-collection\" data-role=\"list\" style=\"margin-bottom:10px;display:none;\"></ul>
          <div class=\"input-group\">
            <input id=\"teacher-input\" type=\"text\" data-role=\"item-input\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>

          <script type=\"text/plain\" data-role=\"model\">";
        // line 61
        echo twig_jsonencode_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "audiences"));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
            ";
        // line 70
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                {{ this }}
                <input type=\"hidden\" name=\"audiences[]\" value=\"{{ this }}\">
                <button class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\">&times;</button>
              </li>
            ";
        echo "
          </script>

        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">保存</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 82,  114 => 70,  109 => 61,  81 => 43,  76 => 34,  58 => 19,  50 => 14,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
