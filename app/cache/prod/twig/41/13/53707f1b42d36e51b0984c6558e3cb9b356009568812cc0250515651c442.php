<?php

/* TopxiaWebBundle:Group:group-member-nav-pill.html.twig */
class __TwigTemplate_411353707f1b42d36e51b0984c6558e3cb9b356009568812cc0250515651c442 extends Twig_Template
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
        echo "\t <ul class=\"nav nav-pills\">
      <li ";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "index")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">小组主页</a></li>
      <li ";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "join")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_join");
        echo "\">加入的小组</a></li>
      <li ";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "thread")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\">发起的话题</a></li>
      <li ";
        // line 5
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "post")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\">回复的话题</a></li>
    </ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  30 => 3,  22 => 2,  19 => 1,  53 => 5,  48 => 4,  42 => 5,  38 => 4,  25 => 3,  23 => 2,  21 => 1,  159 => 55,  157 => 49,  149 => 46,  141 => 40,  139 => 36,  131 => 33,  123 => 27,  121 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
