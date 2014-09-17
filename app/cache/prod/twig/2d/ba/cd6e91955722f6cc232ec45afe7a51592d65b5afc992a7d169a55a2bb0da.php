<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_2dbacd6e91955722f6cc232ec45afe7a51592d65b5afc992a7d169a55a2bb0da extends Twig_Template
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
        $context["modal_class"] = "modal-lg";
        // line 4
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), null)) : (null));
        // line 107
        $context["hideFooter"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo "编辑课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number"), "html", null, true);
        } else {
            echo "添加课时";
        }
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<form id=\"course-lesson-form\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        // line 12
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")), "html", null, true);
            echo "\" ";
        }
        // line 13
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            // line 14
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 16
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"
  ";
        }
        // line 18
        echo "  >

  <div class=\"form-group\" ";
        // line 20
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>类型</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 24
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 29
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">标题</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 34
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title");
        echo "\">
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 38
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> 免费课时</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 45
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">摘要</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\">";
        // line 47
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "summary");
        echo "</textarea></div>
  </div>

  <div class=\"form-group for-text-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\">内容</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\">";
        // line 52
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "content");
        echo "</textarea></div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 55
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label for-video-type\"><label>视频</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>音频</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 60
        $this->env->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig")->display($context);
        // line 61
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 65
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>PPT文档需要EduSoho云转换后才能在浏览器中显示，请先开启EduSoho云。</p>
        <p>如尚未购买EduSoho云服务，请联系<a href=\"http://www.edusoho.com/service\" target=\"_blank\"><strong>EduSoho官方</strong></a>购买。</p>
        </div>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>视频时长</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">视频时长或</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">音频时长</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 79
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "minute");
        echo "\">分
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 80
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "second");
        echo "\">秒
      <div class=\"help-block\">时长必须为整数。</div>
    </div>
  </div>

  ";
        // line 85
        if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : $this->getContext($context, "features")))) {
            // line 86
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">学分</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit"), 0)) : (0)), "html", null, true);
            echo "\"> 分
      <div class=\"help-block\">学完此课时，可获得的学分</div>
    </div>
  </div>
  ";
        }
        // line 94
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<script>app.load('course-manage/lesson-modal')</script>

";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        // line 104
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo "保存";
        } else {
            echo "添加";
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 104,  230 => 103,  227 => 102,  216 => 95,  213 => 94,  205 => 89,  200 => 86,  198 => 85,  190 => 80,  186 => 79,  167 => 65,  159 => 61,  157 => 60,  147 => 55,  141 => 52,  133 => 47,  126 => 45,  114 => 38,  107 => 34,  97 => 29,  89 => 24,  80 => 20,  76 => 18,  70 => 16,  64 => 14,  61 => 13,  55 => 12,  52 => 11,  49 => 10,  39 => 7,  36 => 6,  31 => 107,  29 => 4,  27 => 3,);
    }
}
