<?php

/* TopxiaAdminBundle:Course:layout.html.twig */
class __TwigTemplate_89be718d7b93436be507c477e106c84d60627136245f63c68ffeed11ea0ffdf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 35
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 37
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"list-group\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_course");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course")) {
            echo "active";
        }
        echo "\">课程管理</a>
        ";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 11
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => "underway"));
            echo "\" class=\"list-group-item ";
            if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "live-course")) {
                echo "active";
            }
            echo "\">直播管理</a>
        ";
        }
        // line 13
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_course_recommend_list");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course-recommend-list")) {
            echo "active";
        }
        echo "\">推荐课程列表</a>

        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_course_order_manage");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "order")) {
            echo "active";
        }
        echo "\">订单管理</a>

        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("admin_order_refunds", array("status" => "created"));
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "refunds")) {
            echo "active";
        }
        echo "\">退款管理</a>

        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_review");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "review")) {
            echo "active";
        }
        echo "\">评价管理</a>

        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_thread");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "thread")) {
            echo "active";
        }
        echo "\">讨论区管理</a>

        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "question")) {
            echo "active";
        }
        echo "\">问答管理</a>

        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("admin_note");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "note")) {
            echo "active";
        }
        echo "\" >笔记管理</a>

        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("admin_course_category");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "category")) {
            echo "active";
        }
        echo "\">分类管理</a>

        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("admin_tag");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "tag")) {
            echo "active";
        }
        echo "\">标签管理</a>

        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("admin_course_disk");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "course-disk")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">文件管理</a>

      </div>
    ";
    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 37,  159 => 31,  150 => 29,  141 => 27,  123 => 23,  114 => 21,  105 => 19,  96 => 17,  77 => 13,  67 => 11,  65 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 38,  44 => 37,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  160 => 62,  155 => 59,  148 => 57,  135 => 56,  132 => 25,  129 => 54,  126 => 53,  108 => 52,  87 => 15,  81 => 31,  74 => 27,  66 => 22,  55 => 15,  49 => 13,  47 => 12,  43 => 10,  40 => 35,  33 => 3,  28 => 7,  26 => 5,);
    }
}
