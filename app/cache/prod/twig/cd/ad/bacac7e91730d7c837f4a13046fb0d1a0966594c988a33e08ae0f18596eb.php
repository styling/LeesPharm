<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_cdadbacac7e91730d7c837f4a13046fb0d1a0966594c988a33e08ae0f18596eb extends Twig_Template
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
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"panel panel-default panel-col\">
\t<div class=\"panel-heading\">基本信息</div>
\t<div class=\"panel-body\">
\t\t<form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

\t\t  ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-md-2 control-label\">标题</label>
\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t<input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-md-2 control-label\">副标题</label>
\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t<textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\" class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle"), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-md-2 control-label\">标签</label>
\t\t\t  <div class=\"col-md-8 controls\">
\t\t\t  \t<input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), ","), "html", null, true);
        echo "\" data-explain=\"将会应用于按标签搜索课程、相关课程的提取等\">
\t\t\t  \t<div class=\"help-block\">将会应用于按标签搜索课程、相关课程的提取等</div>
\t\t\t  </div>
\t\t\t</div>

\t\t\t";
        // line 47
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
            // line 48
            echo "
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">直播最大学员数</label>
\t\t\t <div class=\"col-md-8 controls\">
\t\t\t\t\t<input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum"), 20)) : (20)), "html", null, true);
            echo "\" data-live-capacity=\"";
            echo twig_escape_filter($this->env, (isset($context["liveCapacity"]) ? $context["liveCapacity"] : $this->getContext($context, "liveCapacity")), "html", null, true);
            echo "\"> 人
\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        }
        // line 58
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-md-2 control-label\" for=\"course_expiryDay\">学员有效期</label>
\t\t\t  <div class=\"col-md-8 controls\">
\t\t\t    <input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryDay"), "html", null, true);
        echo "\" data-widget-cid=\"widget-3\" data-explain=\"设置该值后，学员只能在有效期内学习课程、发表话题、提问、笔记等，超过有效期后学员只能浏览课时目录及讨论区。该值为0，则不做此限制。\"> 天
\t\t\t    <div class=\"help-block\">设置该值后，学员只能在有效期内学习课程、发表话题、提问、笔记等，超过有效期后学员只能浏览课时目录及讨论区。该值为0，则不做此限制。</div>
\t\t\t  </div>
\t\t\t</div>

\t\t\t";
        // line 67
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "normal")) {
            // line 68
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\">连载状态</label>
\t\t\t\t\t<div class=\"col-md-8 controls radios\">
\t\t\t\t\t\t";
            // line 71
            echo $this->env->getExtension('topxia_html_twig')->radios("serializeMode", array("none" => "非连载课程", "serialize" => "更新中", "finished" => "已完结"), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode"), "none")) : ("none")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 75
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-md-2 control-label\">显示学员人数</label>
\t\t\t\t<div class=\"col-md-8 controls radios\">
\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('topxia_html_twig')->radios("showStudentNumType", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "showStudentNumType"));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-md-2 control-label\">分类</label>
\t\t\t  <div class=\"col-md-8 controls\">
\t\t\t    <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
\t\t\t    \t";
        // line 87
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "categoryId"), "分类");
        echo "
\t\t\t    </select>
\t\t\t  \t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t  </div>
\t\t\t</div>

\t\t";
        // line 93
        if (((isset($context["liveCapacity"]) ? $context["liveCapacity"] : $this->getContext($context, "liveCapacity")) != 0)) {
            // line 94
            echo "\t\t\t<div class=\"form-group\">
\t\t\t    <div class=\"col-md-offset-2 col-md-8 controls\">
\t\t\t    \t<a href=\"http://www.edusoho.com/files/liveplugin/live_desktop.rar\" target=\"_blank\">直播“桌面分享”插件下载</a>
\t\t\t    </div>
\t\t\t</div>
\t\t";
        }
        // line 100
        echo "\t\t
\t\t  <div class=\"form-group\">
\t\t    <div class=\"col-md-offset-2 col-md-8 controls\">
\t\t    \t<button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">保存</button>
\t\t    </div>
\t\t  </div>

\t\t  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

\t\t</form>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 107,  174 => 100,  166 => 94,  164 => 93,  155 => 87,  144 => 79,  138 => 75,  131 => 71,  126 => 68,  124 => 67,  116 => 62,  110 => 58,  99 => 52,  93 => 48,  91 => 47,  83 => 42,  72 => 34,  61 => 26,  53 => 21,  45 => 15,  42 => 14,  35 => 3,  30 => 8,  28 => 6,  26 => 5,);
    }
}
