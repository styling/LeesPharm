<?php

/* TopxiaAdminBundle:Default:unsolved-questions-block.html.twig */
class __TwigTemplate_35a0b8b32b9a07fca487326f8d3233038304361b222435c1c83075ffda78efb4 extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">

           \t<a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
           \t>更多</a>
\t\t\t<h3 class=\"panel-title\">最新未回复问答</h3>
\t\t\t 
\t\t</div>

\t";
        // line 12
        if ((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions"))) {
            // line 13
            echo "\t    <table class=\"table table-condensed table-bordered table-striped table-hover\">
\t      <thead>
\t        <tr>
\t          <th width=\"40%\">问答标题</th>
\t          <th width=\"35%\">所属课程</th>
\t          <th width=\"10%\">提问人</th>
\t          <th width=\"15%\">操作</th>
\t        </tr>
\t      </thead>
\t      <tbody class=\"tbody\">
\t        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 24
                echo "\t          ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), array(), "array"), null)) : (null));
                // line 25
                echo "\t\t        <tr>
\t\t          <td>
\t              <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
                echo "\" target=\"_blank\">
\t                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "title"), "html", null, true);
                echo "
\t              </a>
\t              <br />
\t              <span class=\"text-muted text-sm\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "hitNum"), "html", null, true);
                echo "次查看</span>
\t              <span class=\"text-muted text-sm\">•</span>
\t              <span class=\"text-muted text-sm\">发表于";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "createdTime"), "Y-n-d H:i"), "html", null, true);
                echo "</span>
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 36
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 37
                    echo "\t\t              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), array(), "array"), "title"), "html", null, true);
                    echo "</a>
\t\t              <br>
\t\t              <span class=\"text-muted text-sm\">老师：
\t\t\t\t            ";
                    // line 40
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), array(), "array"), "teacherIds"));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                        // line 41
                        echo "\t\t\t\t              ";
                        echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), (isset($context["teacherId"]) ? $context["teacherId"] : $this->getContext($context, "teacherId")), array(), "array"), "text-muted text-sm");
                        echo "
\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t          </span>
\t\t\t          ";
                } else {
                    // line 45
                    echo "\t\t\t            --
\t\t\t          ";
                }
                // line 47
                echo "\t\t          </td>
\t\t          <td>
\t\t            ";
                // line 49
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["askers"]) ? $context["askers"] : $this->getContext($context, "askers")), $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "userId"), array(), "array"));
                echo "
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 52
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 53
                    echo "\t\t\t\t          <button class=\"btn btn-default btn-sm remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId"), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
                    echo "\">提醒教师</button>
\t\t\t          ";
                }
                // line 55
                echo "\t\t\t        </td>
\t\t        </tr>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t      </tbody>
        </table>
    ";
        } else {
            // line 61
            echo "      <div class=\"empty\">暂无最新未回复问答</div>
    ";
        }
        // line 63
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  145 => 61,  140 => 58,  132 => 55,  126 => 53,  124 => 52,  118 => 49,  114 => 47,  110 => 45,  106 => 43,  93 => 40,  84 => 37,  82 => 36,  65 => 28,  61 => 27,  57 => 25,  50 => 23,  21 => 2,  129 => 28,  117 => 24,  99 => 18,  97 => 41,  94 => 16,  88 => 14,  85 => 13,  83 => 12,  77 => 10,  66 => 9,  53 => 5,  39 => 3,  36 => 12,  24 => 1,  19 => 1,  236 => 75,  231 => 71,  226 => 21,  220 => 13,  213 => 78,  211 => 77,  208 => 76,  206 => 75,  199 => 71,  188 => 63,  182 => 62,  178 => 61,  173 => 58,  163 => 56,  161 => 55,  158 => 54,  152 => 51,  146 => 50,  138 => 49,  122 => 47,  113 => 46,  111 => 22,  103 => 40,  91 => 15,  89 => 29,  87 => 28,  80 => 11,  76 => 33,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 24,  48 => 15,  46 => 14,  38 => 13,  23 => 1,  130 => 48,  123 => 26,  119 => 60,  112 => 56,  105 => 20,  90 => 40,  86 => 39,  71 => 31,  64 => 25,  49 => 15,  44 => 12,  42 => 13,  35 => 6,  32 => 5,  27 => 6,  25 => 2,);
    }
}
