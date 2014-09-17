<?php

/* TopxiaWebBundle:MyOrder:index.html.twig */
class __TwigTemplate_c235ffb4d91660ca5a8b1329851c92d713e9576945d2dea245c524d76f5d3869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:MyOrder:layout.html.twig");

        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "my/orders";
        // line 5
        $context["main_nav"] = "orders";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <table class=\"table table-striped table-hover\" id=\"orders-table\">
    <thead>
      <th>名称</th>
      <th>成交时间</th>
      <th>价格</th>
      <th>状态</th>
    </thead>
    <tbody>
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 17
            echo "        <tr>
          <td>
            ";
            // line 19
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetType") == "course")) {
                // line 20
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetId"))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                echo "</a>
            ";
            } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetType") == "vip")) {
                // line 22
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "targetId"))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 24
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "title"), "html", null, true);
                echo "
            ";
            }
            // line 26
            echo "            <div class=\"text-sm text-muted\">
              订单号：";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "sn"), "html", null, true);
            echo "
            </div>
          </td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "createdTime"), "Y-n-d H:i"), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "amount"), "html", null, true);
            echo "元</td>
          <td>
            ";
            // line 33
            echo $this->env->getExtension('topxia_web_twig')->getDictText("orderStatus:html", $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "status"));
            echo "
            <div class=\"actions\">
              ";
            // line 35
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "status") == "refunding")) {
                // line 36
                echo "                <a href=\"javascript:;\" class=\"text-sm cancel-refund\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                echo "\">取消退款</a>
              ";
            }
            // line 38
            echo "            </div>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <tr>
          <td colspan=\"20\" class=\"empty\">无订单记录</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  117 => 42,  109 => 38,  103 => 36,  101 => 35,  96 => 33,  91 => 31,  87 => 30,  81 => 27,  78 => 26,  72 => 24,  64 => 22,  56 => 20,  54 => 19,  50 => 17,  45 => 16,  35 => 8,  32 => 7,  27 => 5,  25 => 3,);
    }
}
