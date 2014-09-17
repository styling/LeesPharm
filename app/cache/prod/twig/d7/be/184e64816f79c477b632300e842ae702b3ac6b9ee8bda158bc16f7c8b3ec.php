<?php

/* TopxiaAdminBundle:Default:popular-courses-table.html.twig */
class __TwigTemplate_d7be184e64816f79c477b632300e842ae702b3ac6b9ee8bda158bc16f7c8b3ec extends Twig_Template
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
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 2
            echo "\t<table class=\"table table-condensed table-striped table-hover\">
\t  <thead>
\t    <tr>
\t      <th>课程名称</th>
\t      <th>新增学生人数</th>
\t      <th>总学生人数</th>
\t      <th>新增收入</th>
\t    </tr>
\t  </thead>
\t\t<tbody>
\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 13
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "addedStudentNum", array(), "array"), "html", null, true);
                echo " 人 </td>
\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array(), "array"), "html", null, true);
                echo " 人</td>
\t\t\t\t\t<td class=\"money-text\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "addedMoney", array(), "array"), "html", null, true);
                echo " 元 </td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 25
            echo "  <div class=\"empty\">暂无受欢迎课程</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:popular-courses-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  65 => 22,  56 => 19,  52 => 18,  48 => 17,  41 => 15,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }
}
