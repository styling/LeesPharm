<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_0ab68913d6dba1273cb4c3876ca650a2109c525581a08c7e673d902446c50d3b extends Twig_Template
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
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "html", null, true);
        echo "\">
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
        echo "</strong></a>";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
            echo "<span class=\"label label-success live-label mls\">直播</span>";
        }
        // line 6
        echo "    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 8
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended")) {
            // line 9
            echo "      <span class=\"label label-default\">荐:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedTime"), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq"), "html", null, true);
            echo "</span>
    ";
        }
        // line 11
        echo "  </td>
  <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum"), "html", null, true);
        echo "</td>
  <td><span class=\"money-text\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "income"), "html", null, true);
        echo "</span></td>
  <td>";
        // line 14
        echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status"));
        echo "</td>
  <td>
    ";
        // line 16
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "createdTime"), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "ref" => "courseList")), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐课程</a></li>

        ";
        // line 31
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended")) {
            // line 32
            echo "          <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        }
        // line 34
        echo "
        <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为未购买用户</a></li>
        <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为已购买用户</a></li>

        <li class=\"divider\"></li>

        ";
        // line 40
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") == "published")) {
            // line 41
            echo "          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_close", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") != "published")) {
            // line 45
            echo "          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 47
        echo "
        <li class=\"divider\"></li>

        <li><a class=\"delete-course\" href=\"javascript:\" data-url=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  140 => 47,  134 => 45,  121 => 40,  110 => 35,  107 => 34,  101 => 32,  99 => 31,  94 => 29,  84 => 22,  72 => 16,  63 => 13,  59 => 12,  56 => 11,  48 => 9,  42 => 7,  39 => 6,  31 => 5,  21 => 2,  19 => 1,  171 => 37,  159 => 31,  150 => 29,  141 => 27,  123 => 41,  114 => 36,  105 => 19,  96 => 17,  77 => 18,  67 => 14,  65 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 8,  44 => 37,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  160 => 62,  155 => 59,  148 => 57,  135 => 56,  132 => 44,  129 => 43,  126 => 53,  108 => 52,  87 => 15,  81 => 31,  74 => 27,  66 => 22,  55 => 15,  49 => 13,  47 => 12,  43 => 10,  40 => 35,  33 => 3,  28 => 7,  26 => 3,);
    }
}
