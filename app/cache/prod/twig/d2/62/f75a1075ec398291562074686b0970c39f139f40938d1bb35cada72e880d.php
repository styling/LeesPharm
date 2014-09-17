<?php

/* TopxiaAdminBundle:Content:layout.html.twig */
class __TwigTemplate_d262f75a1075ec398291562074686b0970c39f139f40938d1bb35cada72e880d extends Twig_Template
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
        $context["nav"] = "content";
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
        // line 28
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "
      <div class=\"list-group\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_navigation");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "navigation")) {
            echo "active";
        }
        echo "\">导航管理</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_content", array("type" => "page"));
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "content")) {
            echo "active";
        }
        echo "\">页面管理</a>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("admin_block");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "admin_block")) {
            echo "active";
        }
        echo "\">编辑区管理</a>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_file");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "file")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">文件监控</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_comment");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "comment")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">评论管理</a>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">资讯</div>
        <div class=\"list-group\">
          <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getUrl("admin_article");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "article")) {
            echo "active";
        }
        echo "\">资讯管理</a>
          <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_article_category");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "category")) {
            echo "active";
        }
        echo "\">栏目管理</a>
          <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_article_setting");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "setting")) {
            echo "active";
        }
        echo "\">资讯频道设置</a>
          <a class=\"list-group-item\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\" target=\"_blank\">资讯频道首页</a>
        </div>
      </div>

    ";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  127 => 23,  119 => 22,  111 => 21,  103 => 20,  90 => 14,  82 => 13,  74 => 12,  66 => 11,  58 => 10,  54 => 8,  51 => 7,  46 => 31,  40 => 28,  38 => 7,  32 => 5,  27 => 3,  96 => 37,  94 => 36,  78 => 22,  63 => 20,  59 => 19,  48 => 13,  44 => 30,  41 => 10,  35 => 6,  30 => 8,  28 => 6,  26 => 4,);
    }
}
