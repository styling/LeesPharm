<?php

/* TopxiaAdminBundle:System:layout.html.twig */
class __TwigTemplate_36780a697dff11c540a33d7769f5516855333c9be5a2943d7b0d335048712adf extends Twig_Template
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
        $context["nav"] = "system";
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
        // line 25
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 28
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
        echo $this->env->getExtension('routing')->getPath("admin_setting_site");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "site")) {
            echo "active";
        }
        echo "\">站点设置</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "operation")) {
            echo "active";
        }
        echo "\">全局设置</a>
          <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_setting_auth");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "user_set")) {
            echo "active";
        }
        echo "\">用户相关设置</a>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "client")) {
            echo "active";
        }
        echo "\">移动客户端设置</a>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("admin_setting_ip_blacklist");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "ip_blacklist")) {
            echo "active";
        }
        echo "\">IP黑名单</a>

        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_optimize");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "optimize")) {
            echo "active";
        }
        echo "\">优化和备份</a>   

       ";
        // line 17
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
            // line 18
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_cloud_bill");
            echo "\" class=\"list-group-item ";
            if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "bill")) {
                echo "active";
            }
            echo "\">云视频账单</a>
       ";
        }
        // line 20
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "analysis")) {
            echo "active";
        }
        echo "\">数据统计</a>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_logs");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "logs")) {
            echo "active";
        }
        echo "\">系统日志</a>

      </div>
    ";
    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 27,  128 => 21,  119 => 20,  109 => 18,  107 => 17,  98 => 15,  89 => 13,  81 => 12,  73 => 11,  65 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 28,  44 => 27,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  289 => 177,  274 => 165,  262 => 156,  238 => 135,  219 => 119,  206 => 109,  194 => 100,  182 => 91,  170 => 82,  158 => 73,  149 => 71,  145 => 70,  137 => 69,  125 => 60,  116 => 58,  112 => 57,  104 => 56,  91 => 46,  79 => 37,  67 => 28,  52 => 16,  43 => 9,  40 => 25,  33 => 3,  28 => 6,  26 => 5,);
    }
}
