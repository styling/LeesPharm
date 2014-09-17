<?php

/* TopxiaAdminBundle:Navigation:tbody.html.twig */
class __TwigTemplate_2f5a692c089a2ff19d3f398e8bcb21b0570e46ec3129c8dc5a6e2f9e008c076c extends Twig_Template
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
        echo "<tbody>
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr id=\"navigations-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "id"), "html", null, true);
            echo "\">
\t\t  <td>
        ";
            // line 5
            if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "parentId") > 0)) {
                echo " &nbsp;&nbsp;&nbsp;&nbsp; └─";
            }
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "url")), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "name"), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 9
            if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "isNewWin") == 0)) {
                echo "否";
            } else {
                echo "是";
            }
            // line 10
            echo "  \t\t</td>
\t\t  <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "sequence"), "html", null, true);
            echo "</td>
\t\t  <td>
        ";
            // line 13
            if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "isOpen") == 1)) {
                echo "开启";
            } else {
                echo "关闭";
            }
            // line 14
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 16
            if ((($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "type") == "top") && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "parentId") == 0))) {
                // line 17
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_create", array("type" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "type"), "parentId" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "id"))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">添加二级导航</button>
        ";
            }
            // line 19
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_delete", array("id" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "id"))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : $this->getContext($context, "navigation")), "id"), "html", null, true);
            echo "\">删除</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无导航记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  83 => 20,  72 => 17,  70 => 16,  60 => 13,  55 => 11,  52 => 10,  37 => 6,  33 => 5,  22 => 2,  19 => 1,  136 => 30,  127 => 23,  119 => 22,  111 => 21,  103 => 20,  90 => 14,  82 => 13,  74 => 12,  66 => 14,  58 => 10,  54 => 8,  51 => 7,  46 => 9,  40 => 28,  38 => 7,  32 => 5,  27 => 3,  96 => 37,  94 => 24,  78 => 19,  63 => 20,  59 => 19,  48 => 13,  44 => 30,  41 => 10,  35 => 6,  30 => 8,  28 => 6,  26 => 4,);
    }
}
