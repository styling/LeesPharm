<?php

/* TopxiaWebBundle:MyTeaching:teaching.html.twig */
class __TwigTemplate_87dae3c5dd5fc63d65f9873a69c379f4ff1dad1852ffa581e20fedf8ca824eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-teaching-courses";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "在教课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 创建课程</a>
      ";
        // line 13
        if ((isset($context["live_course_enabled"]) ? $context["live_course_enabled"] : $this->getContext($context, "live_course_enabled"))) {
            // line 14
            echo "        <a id=\"create-course\" href=\"";
            echo $this->env->getExtension('routing')->getPath("course_create", array("flag" => "isLive"));
            echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 创建直播课程</a>
      ";
        }
        // line 16
        echo "      
    </span>
    在教课程
  </div>
  <div class=\"panel-body\">

  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"50%\">名称</th>
      <th>学员数</th>
      <th>价格(元)</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 34
            echo "        <tr>
          <td>

            <a class=\"pull-left mrm\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">
              <img class=\"course-picture\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "middlePicture"), "large"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
            echo "\" width=\"100\">
            </a>

            <div class=\"mlm\">
              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
            echo "</a>
              ";
            // line 43
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
                // line 44
                echo "                <div><span class=\"label label-success live-label\">直播</span></div>
              ";
            }
            // line 46
            echo "            </div>

          </td>
          <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum"), "html", null, true);
            echo "</td>
          <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price"), "html", null, true);
            echo "</td>
          <td>";
            // line 51
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status"));
            echo "</td>
          <td>
            <div class=\"btn-group\">
              <a class=\"btn btn-default btn-sm\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">管理</a>

              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu pull-right\">
                <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">课时管理</a></li>
                <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">文件管理</a></li>
                <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">学员管理</a></li>
              </ul>
            </div>

          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "        <tr><td colspan=\"20\">暂无在教的课程</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tbody>
  </table>

  ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 74,  167 => 71,  160 => 69,  148 => 62,  144 => 61,  140 => 60,  131 => 54,  125 => 51,  121 => 50,  117 => 49,  112 => 46,  108 => 44,  106 => 43,  100 => 42,  91 => 38,  87 => 37,  82 => 34,  77 => 33,  58 => 16,  52 => 14,  50 => 13,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 5,);
    }
}
