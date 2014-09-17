<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_113d39ee55e787585a09a8eb19e65fa6ef8e7838171aa47b91dc9e1ccac4b16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 11
        $this->displayBlock('side', $context, $blocks);
        // line 57
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 59
        $this->displayBlock('main', $context, $blocks);
        // line 60
        echo "  </div>
</div>
";
    }

    // line 11
    public function block_side($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 13
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">课程信息</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
        // line 18
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">基本信息</a>
              <a class=\"list-group-item ";
        // line 19
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "detail")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">详细信息</a>
              <a class=\"list-group-item ";
        // line 20
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "picture")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">课程图片</a>
              <a class=\"list-group-item ";
        // line 21
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "lesson")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">课时管理</a>
              ";
        // line 22
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
            // line 23
            echo "              <a class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "replay")) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">录播管理</a>
              ";
        }
        // line 25
        echo "              <a class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "files")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">文件管理</a>
            </div>
          </div><!-- /list-group-block -->

          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">课程设置</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
        // line 32
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "price")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">价格设置</a>
              <a class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">教师设置</a>
              <a class=\"list-group-item ";
        // line 34
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
            echo "active";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">学员管理</a>
            </div>
          </div>
          ";
        // line 37
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "normal")) {
            // line 38
            echo "          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">题库</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
            // line 41
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question")) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">题目管理</a>

              ";
            // line 43
            if ($this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled")) {
                // line 44
                echo "                <a class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question_plumber")) {
                    echo "active";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "type" => "import")), "html", null, true);
                echo "\">题目导入/导出</a>
              ";
            }
            // line 46
            echo "
              <a class=\"list-group-item ";
            // line 47
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question_category")) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">题目类别管理</a>
              <a class=\"list-group-item ";
            // line 48
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper")) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">试卷管理</a>
              <a class=\"list-group-item ";
            // line 49
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testCheck")) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "status" => "reviewing")), "html", null, true);
            echo "\">试卷批阅</a>
            </div>
          </div>
          ";
        }
        // line 53
        echo "        </div>

      </div>
    ";
    }

    // line 59
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 59,  221 => 53,  210 => 49,  202 => 48,  194 => 47,  191 => 46,  181 => 44,  179 => 43,  170 => 41,  165 => 38,  163 => 37,  153 => 34,  145 => 33,  137 => 32,  122 => 25,  112 => 23,  102 => 21,  94 => 20,  86 => 19,  78 => 18,  71 => 13,  68 => 12,  65 => 11,  59 => 60,  57 => 59,  51 => 11,  44 => 7,  41 => 6,  38 => 5,  31 => 3,  183 => 107,  174 => 100,  166 => 94,  164 => 93,  155 => 87,  144 => 79,  138 => 75,  131 => 71,  126 => 68,  124 => 67,  116 => 62,  110 => 22,  99 => 52,  93 => 48,  91 => 47,  83 => 42,  72 => 34,  61 => 26,  53 => 57,  45 => 15,  42 => 14,  35 => 3,  30 => 8,  28 => 6,  26 => 5,);
    }
}
