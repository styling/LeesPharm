<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_f9de321fc1a3277ba047f89ae807f03500f68b040ac2a8b14973f6cd52e9785f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["hideSetupHint"] = true;
        // line 11
        $context["script_controller"] = "course/learn";
        // line 12
        $context["bodyClass"] = "lesson-dashboard-page";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/jquery-plugin/perfect-scrollbar/0.4.8/perfect-scrollbar.css"), "html", null, true);
        echo "\" />
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"container lesson-dashboard\" id=\"lesson-dashboard\"
         data-course-id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "html", null, true);
        echo "\"
         data-course-uri=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\"
         data-dashboard-uri=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\"
         data-hide-media-lesson-learn-btn=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
      <div class=\"dashboard-content\">
         <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> 返回课程</a>
         <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\" data-placement=\"right\" title=\"上一课时\"><span class=\"glyphicon glyphicon-chevron-up\" title=\"上一课时\"></span></a>
         <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\" data-placement=\"right\" title=\"下一课时\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

        <div class=\"dashboard-header\">
          <div class=\"pull-left title-group\">
            <span class=\"chapter-label\">第<span data-role=\"chapter-number\"></span>章</span>
            <span class=\"divider\">&raquo;</span>
            <span class=\"chapter-label\">第<span data-role=\"unit-number\"></span>节</span>
            <span class=\"divider\">&raquo;</span>
            <span class=\"item-label\">课时<span data-role=\"lesson-number\">正在加载...</span></span>
            <span class=\"item-title\" data-role=\"lesson-title\"></span>
          </div>
        </div>

        <div class=\"dashboard-body\">
          <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 38
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 39
            echo "              data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
            ";
        }
        // line 41
        echo "            ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 42
            echo "              data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"
            ";
        }
        // line 44
        echo "          ></div>
          <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\">当前课时正在编辑中，暂时无法观看。</div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-alert-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>

        </div>

        <div class=\"dashboard-footer clearfix\">

          <div class=\"pull-right\">
            <button class=\"btn btn-primary finish-btn\" data-role=\"finish-lesson\" style=\"display:none;\"><span class=\"glyphicon glyphicon-unchecked\"></span> 学过了</button>
          </div>

        </div>
      </div>

      <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
        <div class=\"toolbar-nav\">

          <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
          <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
            <li class=\"hide-pane\" style=\"display:none;\">
              <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </li>
          </ul>

        </div>
        <div class=\"toolbar-pane-container\">
        </div>
      </div>

    </div>




<div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\">学习进度提示</h4>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-success\">赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程～～～</p>
      </div>
      <div class=\"modal-footer\">
        <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">回课程主页</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 109,  118 => 44,  112 => 42,  109 => 41,  103 => 39,  101 => 38,  81 => 21,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  58 => 14,  52 => 7,  47 => 6,  44 => 5,  36 => 3,  31 => 12,  29 => 11,  27 => 10,);
    }
}
