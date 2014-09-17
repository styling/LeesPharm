<?php

/* TopxiaWebBundle:MyCourse:learning.html.twig */
class __TwigTemplate_bd80250f57045d23a590a43040c4ea711d38d39ecd37f380594953bd9530f63e extends Twig_Template
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
        $context["tab_nav"] = "learning";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学习中 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"panel panel-default panel-col\">
\t  <div class=\"panel-heading\">我的课程</span></div>
\t  <div class=\"panel-body\">
  \t\t  \t ";
        // line 11
        $this->env->loadTemplate("TopxiaWebBundle:MyCourse:nav-pill.html.twig")->display($context);
        // line 12
        echo "\t  \t ";
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 13
            echo "\t\t     ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), "view" => "grid", "mode" => "learn")));
            echo "
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo " 
\t\t  ";
        } else {
            // line 16
            echo "\t\t    <div class=\"empty\">暂无学习中的课程</div>
\t\t  ";
        }
        // line 18
        echo "\t  </div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 16,  56 => 14,  51 => 13,  48 => 12,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
