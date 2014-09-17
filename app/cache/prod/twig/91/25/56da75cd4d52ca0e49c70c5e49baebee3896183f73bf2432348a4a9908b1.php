<?php

/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_912556da75cd4d52ca0e49c70c5e49baebee3896183f73bf2432348a4a9908b1 extends Twig_Template
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
        // line 5
        $context["side_nav"] = "my-group";
        // line 6
        $context["tab_nav"] = "index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-center.html.twig", "1444622749")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}


/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_912556da75cd4d52ca0e49c70c5e49baebee3896183f73bf2432348a4a9908b1_1444622749 extends Twig_Template
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

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo " 
        我的小组
      ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "          <div class=\"row\">

            <div class=\"col-md-12\">

              ";
        // line 18
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig")->display($context);
        // line 19
        echo "
              <div class=\"page-header\">
                <h4> 我加入的小组<a class=\"badge pull-right\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["groupsCount"]) ? $context["groupsCount"] : $this->getContext($context, "groupsCount")), "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 24
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")))));
        // line 27
        echo "
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>我发起的话题<a class=\"badge pull-right\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["threadsCount"]) ? $context["threadsCount"] : $this->getContext($context, "threadsCount")), "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 36
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("threads" => (isset($context["ownThreads"]) ? $context["ownThreads"] : $this->getContext($context, "ownThreads")), "groups" => (isset($context["groupsAsOwnThreads"]) ? $context["groupsAsOwnThreads"] : $this->getContext($context, "groupsAsOwnThreads")))));
        // line 40
        echo "              
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>回复的话题<a class=\"badge pull-right\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\" style=\"background-color:#3cb373;\">";
        echo twig_escape_filter($this->env, (isset($context["postsCount"]) ? $context["postsCount"] : $this->getContext($context, "postsCount")), "html", null, true);
        echo "</a></h4>
              </div>
              
              ";
        // line 49
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("lastPostMembers" => (isset($context["postLastPostMembers"]) ? $context["postLastPostMembers"] : $this->getContext($context, "postLastPostMembers")), "groups" => (isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : $this->getContext($context, "groupsAsPostThreads")), "threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 55
        echo "              
            </div>
          </div>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 55,  157 => 49,  149 => 46,  141 => 40,  139 => 36,  131 => 33,  123 => 27,  121 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
