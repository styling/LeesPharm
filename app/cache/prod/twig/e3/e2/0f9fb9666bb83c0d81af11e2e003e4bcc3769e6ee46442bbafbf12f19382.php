<?php

/* TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig */
class __TwigTemplate_e3e20f9fb9666bb83c0d81af11e2e003e4bcc3769e6ee46442bbafbf12f19382 extends Twig_Template
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
\t\t\t <h3 class=\"panel-title\">最新购买记录</h3>
\t\t</div>
    ";
        // line 7
        if ((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) {
            // line 8
            echo "      <table class=\"table table-condensed table-bordered table-striped table-hover\">
  \t    <thead>
  \t      <tr>
  \t        <th width=\"50%\">订单名称</th>
  \t        <th width=\"10%\">金额</th>
  \t        <th width=\"10%\">购买人</th>
  \t        <th width=\"20%\">付款方式</th>
  \t      </tr>
  \t    </thead>
        <tbody>
          ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "            <tr>
            \t<td>
  \t\t          ";
                // line 21
                if (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetType") == "course")) {
                    // line 22
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetId"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                    echo "</a>
                ";
                } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetType") == "vip")) {
                    // line 24
                    echo "              \t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetId"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                    echo "</a>
              \t";
                } else {
                    // line 26
                    echo "  \t            \t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                    echo "
              \t";
                }
                // line 28
                echo "            \t</td>
              <td class=\"money-text\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "amount"), "html", null, true);
                echo " 元</td>
              <td>
              \t";
                // line 31
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "userId"), array(), "array"));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 34
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "payment")), "--"), "html", null, true);
                echo "  / ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "paidTime"), "Y-n-d H:i"), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 41
            echo "      <div class=\"empty\">暂无最新购买记录</div>
    ";
        }
        // line 43
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  100 => 38,  74 => 28,  68 => 26,  60 => 24,  52 => 22,  30 => 8,  28 => 7,  149 => 63,  145 => 61,  140 => 58,  132 => 55,  126 => 53,  124 => 52,  118 => 49,  114 => 47,  110 => 45,  106 => 43,  93 => 40,  84 => 37,  82 => 31,  65 => 28,  61 => 27,  57 => 25,  50 => 21,  21 => 2,  129 => 28,  117 => 24,  99 => 18,  97 => 41,  94 => 16,  88 => 34,  85 => 13,  83 => 12,  77 => 29,  66 => 9,  53 => 5,  39 => 3,  36 => 12,  24 => 1,  19 => 1,  236 => 75,  231 => 71,  226 => 21,  220 => 13,  213 => 78,  211 => 77,  208 => 76,  206 => 75,  199 => 71,  188 => 63,  182 => 62,  178 => 61,  173 => 58,  163 => 56,  161 => 55,  158 => 54,  152 => 51,  146 => 50,  138 => 49,  122 => 47,  113 => 46,  111 => 22,  103 => 40,  91 => 15,  89 => 29,  87 => 28,  80 => 11,  76 => 33,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 24,  48 => 15,  46 => 19,  38 => 13,  23 => 1,  130 => 48,  123 => 26,  119 => 60,  112 => 56,  105 => 41,  90 => 40,  86 => 39,  71 => 31,  64 => 25,  49 => 15,  44 => 12,  42 => 18,  35 => 6,  32 => 5,  27 => 6,  25 => 2,);
    }
}
