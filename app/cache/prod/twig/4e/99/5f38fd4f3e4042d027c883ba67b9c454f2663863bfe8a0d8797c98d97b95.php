<?php

/* TopxiaWebBundle:CourseLessonManage:testpaper-modal.html.twig */
class __TwigTemplate_4e995f38fd4f3e4042d027c883ba67b9c454f2663863bfe8a0d8797c98d97b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), null)) : (null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo "编辑试卷课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number"), "html", null, true);
        } else {
            echo "添加试卷课时";
        }
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : $this->getContext($context, "paperOptions"))) {
            // line 11
            echo "    <form id=\"course-lesson-form\" class=\"form-horizontal lesson-form\" method=\"post\"  ";
            if (array_key_exists("parentId", $context)) {
                echo "data-parentId=\"";
                echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")), "html", null, true);
                echo "\" ";
            }
            // line 12
            echo "      ";
            if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                // line 13
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
                echo "\"
      ";
            } else {
                // line 15
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\"
      ";
            }
            // line 17
            echo "      >

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-mediaId-field\">试卷</label></div>
        <div class=\"col-md-9 controls\">
          <select id=\"lesson-mediaId-field\" class=\"form-control\" name=\"mediaId\">
            ";
            // line 23
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["paperOptions"]) ? $context["paperOptions"] : $this->getContext($context, "paperOptions")), (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId"), 0)) : (0)), "请选择试卷");
            echo "
          </select>
          <div class=\"help-block\">如果找不到试卷，请先确定该试卷已经发布</div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">标题</label></div>
        <div class=\"col-md-9 controls\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title"), "")) : ("")), "html", null, true);
            echo "\">
        </div>
      </div>

      ";
            // line 36
            if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : $this->getContext($context, "features")))) {
                // line 37
                echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">限制学分</label></div>
        <div class=\"col-md-9 controls\">
          <input class=\"form-control width-input width-input-small\" type=\"text\" name=\"requireCredit\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit"), 0)) : (0)), "html", null, true);
                echo "\"> 分
          <div class=\"help-block\">参加此次考试所需的学分，０分则不限制。</div>
        </div>
      </div>
      ";
            }
            // line 45
            echo "

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
    <script>app.load('course-manage/lesson-testpaper-modal')</script>
  ";
        } else {
            // line 51
            echo "    <div class=\"empty\">尚未创建试卷，请先<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">创建试卷</a>。</div>
  ";
        }
        // line 53
        echo "
";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : $this->getContext($context, "paperOptions"))) {
            // line 58
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"course-testpaper-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">保存</button>
  ";
        } else {
            // line 61
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:testpaper-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  143 => 58,  140 => 57,  137 => 56,  132 => 53,  126 => 51,  119 => 47,  115 => 45,  107 => 40,  102 => 37,  100 => 36,  93 => 32,  81 => 23,  73 => 17,  67 => 15,  61 => 13,  58 => 12,  51 => 11,  48 => 10,  45 => 9,  35 => 6,  32 => 5,  27 => 3,);
    }
}
