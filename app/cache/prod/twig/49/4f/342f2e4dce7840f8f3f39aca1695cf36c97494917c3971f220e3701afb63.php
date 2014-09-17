<?php

/* TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig */
class __TwigTemplate_494f342f2e4dce7840f8f3f39aca1695cf36c97494917c3971f220e3701afb63 extends Twig_Template
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
        if ((isset($context["myTestpaper"]) ? $context["myTestpaper"] : $this->getContext($context, "myTestpaper"))) {
            // line 2
            echo "<tr>
  <td width=\"60%\">
  \t";
            // line 4
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : $this->getContext($context, "myTestpaper")), "name"), 60);
            echo "
  \t<div>
  \t  <small class=\"text-muted\">来自课程《";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
            echo "》</small>
  \t  <small class=\"text-muted mhs\">•</small>
  \t  <small class=\"text-muted\" title=\"开始考试时间\">";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "beginTime"), "Y年n月d日 H:i"), "html", null, true);
            echo "</small>
  \t</div>
  </td>
\t<td>
\t\t";
            // line 12
            if (($this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "status") == "reviewing")) {
                // line 13
                echo "\t\t  <span class=\"text-warning\">正在批阅</span>
\t\t";
            } elseif (($this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "status") == "finished")) {
                // line 15
                echo "\t\t\t<span class=\"text-muted\">得分<strong class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "score"), "html", null, true);
                echo "</strong>分</span><br>
\t\t\t<small class=\"text-muted\">做对<strong>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "rightItemCount"), "html", null, true);
                echo "</strong>题 / 共<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : $this->getContext($context, "myTestpaper")), "itemCount"), "html", null, true);
                echo "</strong>题</small>
\t\t";
            } else {
                // line 18
                echo "\t\t  <span class=\"text-muted\">未交卷</span>
\t\t";
            }
            // line 20
            echo "\t</td>
\t<td>
\t\t";
            // line 22
            if (twig_in_filter($this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "status"), array(0 => "doing", 1 => "paused"))) {
                // line 23
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_show_test", array("id" => $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">继续考试</a>
\t\t";
            } else {
                // line 25
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_redo_test", array("testId" => $this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : $this->getContext($context, "myTestpaper")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">再做一次</a>
\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-link btn-sm\">查看结果</a>
\t\t";
            }
            // line 28
            echo "\t</td>
</tr>
";
        } else {
            // line 31
            echo "
<tr>
\t<td colspan=\"3\">
\t\t<a href=\"javascript:;\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : $this->getContext($context, "myTestpaperResult")), "paperName"), "html", null, true);
            echo "</a> 
\t\t<br>
\t\t<small>该试卷已删除</small>
\t</td>
</tr>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  91 => 31,  86 => 28,  81 => 26,  76 => 25,  70 => 23,  64 => 20,  60 => 18,  53 => 16,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,  67 => 19,  57 => 15,  51 => 14,  32 => 3,  27 => 4,  107 => 23,  103 => 21,  98 => 19,  94 => 17,  80 => 16,  77 => 15,  74 => 18,  71 => 13,  68 => 22,  65 => 18,  48 => 15,  44 => 13,  42 => 12,  39 => 6,  36 => 5,  29 => 3,);
    }
}
