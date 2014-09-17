<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_0b772b2f297744c264de2fb38fc639daf7bebaee9b1145d60f11738e7cc73796 extends Twig_Template
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
        echo "
<table class=\"table table-condensed table-bordered table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"35%\"></th>
            <th width=\"20%\">今日</th>
            <th width=\"20%\" >昨日</th>
\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 9
            echo "            <th width=\"40%\">历史</th>
\t\t";
        }
        // line 11
        echo "          </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td>新注册用户数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : $this->getContext($context, "todayRegisterNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["yesterdayRegisterNum"]) ? $context["yesterdayRegisterNum"] : $this->getContext($context, "yesterdayRegisterNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "detail", "analysisDateType" => "register")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户登录数<small>（不含重复登录）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["todayLoginNum"]) ? $context["todayLoginNum"] : $this->getContext($context, "todayLoginNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["yesterdayLoginNum"]) ? $context["yesterdayLoginNum"] : $this->getContext($context, "yesterdayLoginNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "trend", "analysisDateType" => "login")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "detail", "analysisDateType" => "login")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 29
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["todayCourseNum"]) ? $context["todayCourseNum"] : $this->getContext($context, "todayCourseNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseNum"]) ? $context["yesterdayCourseNum"] : $this->getContext($context, "yesterdayCourseNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 37
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "trend", "analysisDateType" => "course")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "detail", "analysisDateType" => "course")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 38
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课时数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["todayLessonNum"]) ? $context["todayLessonNum"] : $this->getContext($context, "todayLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["yesterdayLessonNum"]) ? $context["yesterdayLessonNum"] : $this->getContext($context, "yesterdayLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 46
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "trend", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "detail", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>加入学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["todayJoinLessonNum"]) ? $context["todayJoinLessonNum"] : $this->getContext($context, "todayJoinLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["yesterdayJoinLessonNum"]) ? $context["yesterdayJoinLessonNum"] : $this->getContext($context, "yesterdayJoinLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 55
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "trend", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "detail", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 56
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>购买课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["todayBuyLessonNum"]) ? $context["todayBuyLessonNum"] : $this->getContext($context, "todayBuyLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["yesterdayBuyLessonNum"]) ? $context["yesterdayBuyLessonNum"] : $this->getContext($context, "yesterdayBuyLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 64
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "trend", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "detail", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 65
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>完成课时学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : $this->getContext($context, "todayFinishedLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : $this->getContext($context, "yesterdayFinishedLessonNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 72
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 73
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "trend", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "detail", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 74
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>视频观看数<small>（含重复打开）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["todayAllVideoViewedNum"]) ? $context["todayAllVideoViewedNum"] : $this->getContext($context, "todayAllVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["yesterdayAllVideoViewedNum"]) ? $context["yesterdayAllVideoViewedNum"] : $this->getContext($context, "yesterdayAllVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "trend", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "detail", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 83
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 云视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["todayCloudVideoViewedNum"]) ? $context["todayCloudVideoViewedNum"] : $this->getContext($context, "todayCloudVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["yesterdayCloudVideoViewedNum"]) ? $context["yesterdayCloudVideoViewedNum"] : $this->getContext($context, "yesterdayCloudVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 91
            echo "\t\t\t\t<td>
\t\t\t\t";
            // line 92
            if (((($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error"), null)) : (null)) == "error")) {
                // line 93
                echo "\t\t\t\t\t\t未开通或未开启云视频!
\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "trend", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "detail", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">详情</a>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t</td>
\t\t";
        }
        // line 98
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 本地视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["todayLocalVideoViewedNum"]) ? $context["todayLocalVideoViewedNum"] : $this->getContext($context, "todayLocalVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["yesterdayLocalVideoViewedNum"]) ? $context["yesterdayLocalVideoViewedNum"] : $this->getContext($context, "yesterdayLocalVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t";
        // line 105
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 106
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "trend", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "detail", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 107
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 网络视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["todayNetVideoViewedNum"]) ? $context["todayNetVideoViewedNum"] : $this->getContext($context, "todayNetVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["yesterdayNetVideoViewedNum"]) ? $context["yesterdayNetVideoViewedNum"] : $this->getContext($context, "yesterdayNetVideoViewedNum")), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 114
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 115
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "trend", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "detail", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 116
        echo "\t
\t\t\t</tr>
\t\t\t";
        // line 118
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 119
            echo "\t\t\t<tr>
\t\t\t\t<td>营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["todayIncome"]) ? $context["todayIncome"] : $this->getContext($context, "todayIncome")), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["yesterdayIncome"]) ? $context["yesterdayIncome"] : $this->getContext($context, "yesterdayIncome")), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "trend", "analysisDateType" => "income")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "detail", "analysisDateType" => "income")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 课程营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["todayCourseIncome"]) ? $context["todayCourseIncome"] : $this->getContext($context, "todayCourseIncome")), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["yesterdayCourseIncome"]) ? $context["yesterdayCourseIncome"] : $this->getContext($context, "yesterdayCourseIncome")), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "trend", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "detail", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>
\t\t\t";
        }
        // line 139
        echo "

        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 139,  357 => 130,  353 => 129,  349 => 128,  339 => 123,  335 => 122,  331 => 121,  327 => 119,  325 => 118,  321 => 116,  313 => 115,  311 => 114,  307 => 113,  303 => 112,  296 => 107,  288 => 106,  286 => 105,  282 => 104,  278 => 103,  271 => 98,  267 => 97,  259 => 95,  255 => 93,  253 => 92,  250 => 91,  248 => 90,  244 => 89,  240 => 88,  233 => 83,  225 => 82,  223 => 81,  219 => 80,  215 => 79,  208 => 74,  200 => 73,  198 => 72,  194 => 71,  190 => 70,  183 => 65,  175 => 64,  173 => 63,  169 => 62,  165 => 61,  158 => 56,  150 => 55,  148 => 54,  144 => 53,  140 => 52,  133 => 47,  125 => 46,  123 => 45,  119 => 44,  115 => 43,  108 => 38,  100 => 37,  98 => 36,  94 => 35,  90 => 34,  83 => 29,  75 => 28,  73 => 27,  69 => 26,  65 => 25,  59 => 21,  51 => 19,  49 => 18,  45 => 17,  41 => 16,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
