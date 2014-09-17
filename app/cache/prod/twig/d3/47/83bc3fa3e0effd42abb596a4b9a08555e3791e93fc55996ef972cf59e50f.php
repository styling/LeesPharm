<?php

/* TopxiaWebBundle:MyOrder:layout.html.twig */
class __TwigTemplate_d34783bc3fa3e0effd42abb596a4b9a08555e3791e93fc55996ef972cf59e50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-orders";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的订单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的订单</div>
  <div class=\"panel-body\">

    ";
        // line 12
        $context["main_nav"] = ((array_key_exists("main_nav", $context)) ? (_twig_default_filter((isset($context["main_nav"]) ? $context["main_nav"] : $this->getContext($context, "main_nav")), null)) : (null));
        // line 13
        echo "    <ul class=\"nav nav-pills nav-pills-mini clearfix\">
      <li";
        // line 14
        if (((isset($context["main_nav"]) ? $context["main_nav"] : $this->getContext($context, "main_nav")) == "orders")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders");
        echo "\">全部订单</a></li>
      <li";
        // line 15
        if (((isset($context["main_nav"]) ? $context["main_nav"] : $this->getContext($context, "main_nav")) == "refunds")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_refunds");
        echo "\">退款记录</a></li>
    </ul>

    ";
        // line 18
        $this->displayBlock('main_body', $context, $blocks);
        // line 19
        echo "  </div>
</div>
";
    }

    // line 18
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  73 => 19,  71 => 18,  61 => 15,  53 => 14,  48 => 12,  42 => 8,  39 => 7,  126 => 46,  117 => 42,  109 => 38,  103 => 36,  101 => 35,  96 => 33,  91 => 31,  87 => 30,  81 => 27,  78 => 26,  72 => 24,  64 => 22,  56 => 20,  54 => 19,  50 => 13,  45 => 16,  35 => 8,  32 => 3,  27 => 5,  25 => 3,);
    }
}
