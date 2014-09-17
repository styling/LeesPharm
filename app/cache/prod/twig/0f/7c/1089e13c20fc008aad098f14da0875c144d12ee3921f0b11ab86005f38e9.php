<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_0f7c1089e13c20fc008aad098f14da0875c144d12ee3921f0b11ab86005f38e9 extends Twig_Template
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
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员管理
    ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "isAdmin", array(), "method") || ($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("course"), "teacher_export_student") == "1"))) {
            // line 13
            echo "      <a class=\"btn btn-info btn-sm pull-right mhs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出学员</a>
    ";
        }
        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "isAdmin", array(), "method") || ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : $this->getContext($context, "isTeacherAuthManageStudent")) == 1))) {
            // line 16
            echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加学员</button>
    ";
        }
        // line 18
        echo "
  </div>
  
  <div class=\"panel-body\">  
    <table class=\"table table-striped\" id=\"course-student-list\">
      <thead>
        <tr>
          <th width=\"40%\">学员</th>
          <th width=\"30%\">学习进度</th>
          <th width=\"30%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 32
            echo "          ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "userId"), array(), "array");
            // line 33
            echo "          ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : $this->getContext($context, "progresses")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "userId"), array(), "array");
            // line 34
            echo "          ";
            $context["isFollowing"] = twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), (isset($context["followingIds"]) ? $context["followingIds"] : $this->getContext($context, "followingIds")));
            // line 35
            echo "          ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig")->display($context);
            // line 36
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 37
            echo "          <tr class=\"empty\"><td colspan=\"20\">无学员记录</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      </tbody>
    </table>

    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  130 => 39,  123 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  80 => 31,  65 => 18,  59 => 16,  56 => 15,  50 => 13,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
