<?php

/* TopxiaWebBundle:Group:group-member-posts.html.twig */
class __TwigTemplate_6f4a37f14fc51f9ecb16df4f4c4cc348f87762b4f006aa64cd2f940060acb3e9 extends Twig_Template
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
        // line 4
        $context["tab_nav"] = "post";
        // line 5
        $context["side_nav"] = "my-group";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-posts.html.twig", "1435210630")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  33 => 3,  28 => 5,  26 => 4,);
    }
}


/* TopxiaWebBundle:Group:group-member-posts.html.twig */
class __TwigTemplate_6f4a37f14fc51f9ecb16df4f4c4cc348f87762b4f006aa64cd2f940060acb3e9_1435210630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo " 
    我的小组
       ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "      <div class=\"row\">
        
        <div class=\"col-md-12\">
          ";
        // line 15
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig")->display($context);
        echo " <br>
          ";
        // line 16
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")), "groups" => (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")))));
        // line 20
        echo "        </div>
        <div class=\"col-md-12 pull-left\">
          ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  112 => 20,  110 => 16,  106 => 15,  101 => 12,  98 => 11,  90 => 8,  43 => 7,  40 => 6,  33 => 3,  28 => 5,  26 => 4,);
    }
}
