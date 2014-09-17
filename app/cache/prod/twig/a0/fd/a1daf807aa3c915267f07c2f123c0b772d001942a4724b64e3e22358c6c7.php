<?php

/* TopxiaAdminBundle:System:user-fields.table.tr.html.twig */
class __TwigTemplate_a0fda1daf807aa3c915267f07c2f123c0b772d001942a4724b64e3e22358c6c7 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "\t\t<tr id=\"field-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo "\">
\t\t <td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 5
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "enabled")) {
                echo "是";
            } else {
                echo "否";
            }
            echo "</td>
\t\t <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "seq"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "createdTime"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t <td><a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_edit", array("id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">编辑</a>&nbsp;<a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_delete", array("id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">删除</a></td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无自定义字段</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.table.tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  53 => 8,  49 => 7,  45 => 6,  37 => 5,  29 => 3,  24 => 2,  19 => 1,  72 => 30,  70 => 29,  66 => 28,  61 => 25,  59 => 24,  43 => 10,  40 => 9,  33 => 4,  28 => 7,  26 => 5,);
    }
}
