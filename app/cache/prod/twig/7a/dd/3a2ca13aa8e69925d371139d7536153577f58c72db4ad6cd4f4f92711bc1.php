<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_7add3a2ca13aa8e69925d371139d7536153577f58c72db4ad6cd4f4f92711bc1 extends Twig_Template
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
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课时管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 14
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "normal")) {
            echo "课时";
        } else {
            echo "直播课时";
        }
        echo "</button>

\t\t\t";
        // line 16
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "normal")) {
            // line 17
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 试卷</button>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i> 章节 <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 章</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "type" => "unit")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 小节</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t课时管理
\t</div>

\t";
        // line 38
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))) {
            // line 39
            echo "
\t <div class=\"empty\">暂无课时内容！</div>

\t ";
        }
        // line 43
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">

\t\t\t";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
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
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 48
            echo "\t\t\t  ";
            if (twig_in_filter("chapter", (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 49
                echo "\t\t\t    ";
                $this->env->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig")->display(array_merge($context, array("chapter" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
                // line 50
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 51
                echo "\t\t\t    ";
                $this->env->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig")->display(array_merge($context, array("lesson" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
                // line 52
                echo "\t\t\t  ";
            }
            // line 53
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  149 => 53,  146 => 52,  143 => 51,  140 => 50,  137 => 49,  134 => 48,  117 => 47,  112 => 45,  108 => 43,  102 => 39,  100 => 38,  88 => 29,  82 => 26,  73 => 19,  67 => 17,  65 => 16,  50 => 14,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
