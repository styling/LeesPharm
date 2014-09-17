<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_ba50abf4518d956bd3f32613589e4e6a0ea79e6da60c7c6146c82ceef903b081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 3
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 14
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 15
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 17
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>

";
        // line 28
        $context["nav"] = ((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), null)) : (null));
        // line 29
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null));
        // line 30
        echo "
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">Edusoho管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">

        <ul class=\"nav navbar-nav\">
      ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "          <li ";
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "course")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_course");
            echo "\">课程</a></li>
          <li ";
            // line 47
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "user")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_user");
            echo "\">用户</a></li>
          <li ";
            // line 48
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "content")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_navigation");
            echo "\">内容</a></li>          
          <li ";
            // line 49
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "group")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_group");
            echo "\">小组</a></li>
          <li ";
            // line 50
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "app")) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("admin_app_installed");
            echo "\">应用</a>
          </li>
        ";
        }
        // line 54
        echo "
          ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 56
            echo "            <li ";
            if (((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")) == "system")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_site");
            echo "\">系统</a></li>
          ";
        }
        // line 58
        echo "        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>
          <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "uri", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "uri"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nickname"), "html", null, true);
        echo "</a></li>
          <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>

  <div class=\"container\">
    <div class=\"row\">";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
  </div>


  ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 76
        echo "
  ";
        // line 77
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 78
        echo "
  <div id=\"modal\" class=\"modal\" ></div>
</body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "EduSoho管理后台";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 75,  231 => 71,  226 => 21,  220 => 13,  213 => 78,  211 => 77,  208 => 76,  206 => 75,  199 => 71,  188 => 63,  182 => 62,  178 => 61,  173 => 58,  163 => 56,  161 => 55,  158 => 54,  152 => 51,  146 => 50,  138 => 49,  122 => 47,  113 => 46,  111 => 45,  103 => 40,  91 => 30,  89 => 29,  87 => 28,  80 => 24,  76 => 23,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 17,  48 => 15,  46 => 14,  38 => 12,  23 => 1,  130 => 48,  123 => 62,  119 => 60,  112 => 56,  105 => 52,  90 => 40,  86 => 39,  71 => 21,  64 => 25,  49 => 15,  44 => 12,  42 => 13,  35 => 6,  32 => 5,  27 => 3,  25 => 2,);
    }
}
