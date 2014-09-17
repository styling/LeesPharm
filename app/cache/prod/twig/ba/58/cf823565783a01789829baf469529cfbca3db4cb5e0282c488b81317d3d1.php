<?php

/* TopxiaWebBundle:Group:group-member-join.html.twig */
class __TwigTemplate_ba58cf823565783a01789829baf469529cfbca3db4cb5e0282c488b81317d3d1 extends Twig_Template
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
        $context["tab_nav"] = "join";
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
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-join.html.twig", "119191505")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-join.html.twig";
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


/* TopxiaWebBundle:Group:group-member-join.html.twig */
class __TwigTemplate_ba58cf823565783a01789829baf469529cfbca3db4cb5e0282c488b81317d3d1_119191505 extends Twig_Template
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
        // line 14
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig")->display($context);
        // line 15
        echo "          ";
        if ((isset($context["adminGroups"]) ? $context["adminGroups"] : $this->getContext($context, "adminGroups"))) {
            // line 16
            echo "          <div class=\"page-header\">
            <h4> 我管理的小组</h4>
          </div>
          ";
            // line 19
            $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => (isset($context["adminGroups"]) ? $context["adminGroups"] : $this->getContext($context, "adminGroups")))));
            // line 22
            echo "          ";
        }
        // line 23
        echo "        </div>
        <div class=\"col-md-12\">
          <div class=\"page-header\">
            <h4> 我加入的小组</h4>
          </div>
          ";
        // line 28
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")))));
        // line 31
        echo "          
        </div>
        <div class=\"col-md-12 pull-left\">
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  129 => 31,  127 => 28,  120 => 23,  117 => 22,  115 => 19,  110 => 16,  107 => 15,  105 => 14,  101 => 12,  98 => 11,  90 => 8,  43 => 7,  40 => 6,  33 => 3,  28 => 5,  26 => 4,);
    }
}
