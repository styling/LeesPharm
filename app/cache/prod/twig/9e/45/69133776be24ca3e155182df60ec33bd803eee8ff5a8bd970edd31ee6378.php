<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_9e4569133776be24ca3e155182df60ec33bd803eee8ff5a8bd970edd31ee6378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"), "html", null, true);
        echo "\"style=\"word-break: break-all;\" >
\t<div class=\"item-line\"></div>
\t<div class=\"item-content\">
\t  ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus"), null)) : (null));
        // line 5
        echo "\t\t
\t\t";
        // line 6
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type"), array(0 => "video", 1 => "live"))) {
            // line 7
            echo "\t\t  ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 8
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-warning\"></span>
\t\t  ";
            } elseif (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 10
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-info\"></span>
\t\t  ";
            } elseif (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 12
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-danger\"></span>
\t\t  ";
            } else {
                // line 14
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-success\"></span>
\t\t  ";
            }
            // line 16
            echo "\t\t";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "audio")) {
            // line 17
            echo "\t\t  <span class=\"glyphicon glyphicon-volume-up text-success\"></span>
\t\t";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "testpaper")) {
            // line 19
            echo "\t\t  <span class=\"glyphicon glyphicon-check text-success\"></span>
\t\t";
        } else {
            // line 21
            echo "\t\t\t<span class=\"glyphicon glyphicon-file text-success\"></span>
\t\t";
        }
        // line 23
        echo "
\t\t课时 <span class=\"number\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number"), "html", null, true);
        echo "</span>： ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title"), "html", null, true);
        echo "

\t\t";
        // line 26
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type"), array(0 => "video", 1 => "audio"))) {
            // line 27
            echo "\t\t  <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "length")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 29
        echo "
\t\t";
        // line 30
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type"), array(0 => "live"))) {
            // line 31
            echo "\t\t  <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 33
        echo "
\t\t";
        // line 34
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit") > 0)) {
            // line 35
            echo "\t\t  <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit"), "html", null, true);
            echo "学分)</small>
\t\t";
        }
        // line 37
        echo "
    ";
        // line 38
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "requireCredit") > 0)) {
            // line 39
            echo "      <small class=\"text-muted\">(需";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "requireCredit"), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 41
        echo "
\t\t";
        // line 42
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") != "testpaper")) {
            // line 43
            echo "\t\t\t";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "video")) ? ("视频") : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "audio")) ? ("音频") : ("文件"))));
            // line 44
            echo "\t\t\t";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 45
                echo "\t\t\t  <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式转换)</span>
\t\t\t";
            } elseif (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 47
                echo "\t\t\t  <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式)</span>
\t\t\t";
            } elseif (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 49
                echo "\t\t\t  <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo "格式转换失败)</span>
\t\t\t";
            }
            // line 51
            echo "\t\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status") == "unpublished")) {
            // line 54
            echo "\t\t  <span class=\"text-warning\">(未发布)</span>
\t\t";
        }
        // line 56
        echo "
\t</div>

\t<div class=\"item-actions prs\">
\t  ";
        // line 60
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") != "testpaper")) {
            // line 61
            echo "\t\t<button class=\"btn btn-link\" title=\"添加资料\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip\"></span>
\t\t</button>
\t  ";
        }
        // line 64
        echo "\t  ";
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "testpaper")) {
            // line 65
            echo "\t\t\t<a class=\"btn btn-link\" title=\"预览\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId"))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
\t  ";
        } else {
            // line 67
            echo "\t\t\t<a class=\"btn btn-link\" title=\"预览\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
\t  ";
        }
        // line 69
        echo "

  \t";
        // line 71
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status") == "unpublished")) {
            // line 72
            echo "\t  \t<button class=\"btn btn-link publish-lesson-btn\" title=\"发布\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span></button>
\t  ";
        } else {
            // line 74
            echo "\t  \t<button class=\"btn btn-link unpublish-lesson-btn\" title=\"取消发布\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></button>
\t  ";
        }
        // line 76
        echo "
\t\t<button class=\"btn btn-link\" title=\"编辑\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
\t\t  ";
        // line 78
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "testpaper")) {
            // line 79
            echo "\t\t\t  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"
\t\t\t";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type") == "live")) {
            // line 81
            echo "\t\t\t  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"
\t\t\t";
        } else {
            // line 83
            echo "\t\t\t  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 85
        echo "\t\t  ><i class=\"glyphicon glyphicon-edit\"></i></button>

\t  <button class=\"btn btn-link delete-lesson-btn\" title=\"删除\" data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-trash\"></span></button>
\t 
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 87,  233 => 85,  227 => 83,  221 => 81,  215 => 79,  213 => 78,  209 => 76,  203 => 74,  197 => 72,  195 => 71,  191 => 69,  183 => 67,  177 => 65,  174 => 64,  167 => 61,  165 => 60,  159 => 56,  155 => 54,  153 => 53,  150 => 52,  147 => 51,  141 => 49,  135 => 47,  129 => 45,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  110 => 38,  107 => 37,  101 => 35,  99 => 34,  96 => 33,  90 => 31,  85 => 29,  79 => 27,  77 => 26,  70 => 24,  63 => 21,  59 => 19,  55 => 17,  52 => 16,  48 => 14,  44 => 12,  36 => 8,  31 => 6,  19 => 1,  163 => 54,  149 => 53,  146 => 52,  143 => 51,  140 => 50,  137 => 49,  134 => 48,  117 => 47,  112 => 39,  108 => 43,  102 => 39,  100 => 38,  88 => 30,  82 => 26,  73 => 19,  67 => 23,  65 => 16,  50 => 14,  43 => 9,  40 => 10,  33 => 7,  28 => 5,  26 => 4,);
    }
}
