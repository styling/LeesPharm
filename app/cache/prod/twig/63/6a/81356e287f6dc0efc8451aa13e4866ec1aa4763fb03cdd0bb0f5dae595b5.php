<?php

/* TopxiaWebBundle:MyCourse:learned.html.twig */
class __TwigTemplate_636a81356e287f6dc0efc8451aa13e4866ec1aa4763fb03cdd0bb0f5dae595b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["tab_nav"] = "learned";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "已学完 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"panel panel-default panel-col\">
\t  <div class=\"panel-heading\">我的课程</span></div>
\t  \t<div class=\"panel-body\">
\t\t  \t 
\t\t  \t ";
        // line 12
        $this->env->loadTemplate("TopxiaWebBundle:MyCourse:nav-pill.html.twig")->display($context);
        // line 13
        echo "
 ";
        // line 14
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 15
            echo "\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), "view" => "grid", "mode" => "learn")));
            echo "
\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo " 
  ";
        } else {
            // line 18
            echo "    <div class=\"empty\">暂无已学完的课程</div>
  ";
        }
        // line 20
        echo "
  \t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:learned.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  64 => 18,  59 => 16,  54 => 15,  52 => 14,  49 => 13,  47 => 12,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
