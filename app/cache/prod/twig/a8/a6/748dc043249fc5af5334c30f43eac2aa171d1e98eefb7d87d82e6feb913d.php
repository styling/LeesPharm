<?php

/* TopxiaWebBundle:MyNotebook:index.html.twig */
class __TwigTemplate_a8a6748dc043249fc5af5334c30f43eac2aa171d1e98eefb7d87d82e6feb913d extends Twig_Template
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
        $context["side_nav"] = "my-notes";
        // line 6
        $context["script_controller"] = "my/notebooks";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的笔记</div>
  <div class=\"panel-body\">
    <ul class=\"media-list notebook-list\" id=\"notebook-list\">
      ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseMembers"]) ? $context["courseMembers"] : $this->getContext($context, "courseMembers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "        ";
            $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "courseId"), array(), "array");
            // line 16
            echo "        <div class=\"media\">
          <img class=\"pull-left media-object\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture"), "large"), "html", null, true);
            echo "\">
          <div class=\"media-body\">
            <h4 class=\"media-heading\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
            echo "</h4>
            <div class=\"notebook-metas\">
              <span class=\"notebook-number\">共 ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "noteNum"), "html", null, true);
            echo " 篇笔记</span>
            </div>
            <div class=\"notebook-metas\">
              ";
            // line 24
            if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "noteLastUpdateTime") > 0)) {
                // line 25
                echo "                <span class=\"notebook-time\">最后更新 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "noteLastUpdateTime")), "html", null, true);
                echo "</span>
              ";
            }
            // line 27
            echo "              <a class=\"pull-right notebook-go\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_notebook_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">查看笔记</a>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <li class=\"empty\">你还没有写过笔记</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyNotebook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  103 => 34,  96 => 32,  85 => 27,  79 => 25,  77 => 24,  71 => 21,  66 => 19,  61 => 17,  58 => 16,  55 => 15,  50 => 14,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
