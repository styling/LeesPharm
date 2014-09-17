<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_91af412e140011c36766ce81cf395236549063b22dfdb8c9ff26e4427db1c327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 12
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 13
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 17
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  <!--[if IE 8]>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 38
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 39
        echo "
</head>
<body ";
        // line 41
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 140
        echo "

</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        echo " - ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
            echo " -";
        }
        echo " Powered by EDUSOHO";
    }

    // line 12
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/default/css/default.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/member.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 8]>
      <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/oldie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->
  ";
    }

    // line 38
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "
  <div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("user_remind_counter");
        echo "\">
    <div class=\"container\">
      <div class=\"container-gap\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 54
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 55
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 57
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 59
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 61
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)))));
        echo "

          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 64
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 65
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 66
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 67
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span></a></li>
              ";
            }
            // line 69
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></li>
              <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 73
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "newNotificationNum") > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "newNotificationNum"), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
              <li>
                <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 78
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "newMessageNum") > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "newMessageNum"), "html", null, true);
                echo "</span>";
            }
            // line 79
            echo "                </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nickname"), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nickname"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 帐号设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 88
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 89
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 92
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 96
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 97
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> 手机版</a></li>
              ";
            }
            // line 99
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span> 搜索</a></li>
              <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">注册</a></li>
            ";
        }
        // line 103
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>

  <div id=\"content-container\" class=\"container\">
    ";
        // line 110
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "setup") == 0)) && ((!array_key_exists("hideSetupHint", $context)) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : $this->getContext($context, "hideSetupHint")) != true)))) {
            // line 111
            echo "      <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
        <a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">现在就去设置</a>
      </div>
    ";
        }
        // line 117
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "  </div><!-- /container -->

  <div class=\"site-footer container clearfix\">

    ";
        // line 122
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:footNavigation"));
        echo "

    <div class=\"text-gray\" data-role=\"default-foot-bar\">
      ";
        // line 125
        $this->env->loadTemplate("TopxiaWebBundle::powered-by.html.twig")->display($context);
        // line 126
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
      <div class=\"pull-right\">";
        // line 127
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            echo "课程内容版权均归<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "</a>所有";
        }
        echo "&nbsp;";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            echo "<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
            echo "</a>";
        }
        echo "</div>

      <div class=\"pull-right mhs\"><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a></div>
    </div>
  </div>

  ";
        // line 133
        $this->displayBlock('bottom', $context, $blocks);
        // line 134
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
";
    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
    }

    // line 133
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 133,  416 => 117,  409 => 135,  406 => 134,  404 => 133,  397 => 129,  382 => 127,  377 => 126,  375 => 125,  369 => 122,  363 => 118,  360 => 117,  354 => 114,  349 => 111,  347 => 110,  338 => 103,  333 => 101,  329 => 100,  324 => 99,  318 => 97,  315 => 96,  307 => 92,  300 => 89,  298 => 88,  293 => 86,  289 => 85,  284 => 83,  277 => 81,  273 => 79,  267 => 78,  261 => 75,  252 => 73,  246 => 70,  241 => 69,  235 => 67,  233 => 66,  228 => 65,  226 => 64,  220 => 61,  216 => 59,  208 => 57,  200 => 55,  198 => 54,  186 => 45,  183 => 44,  180 => 43,  175 => 38,  168 => 27,  163 => 25,  159 => 24,  155 => 23,  151 => 22,  147 => 21,  142 => 20,  139 => 19,  134 => 13,  129 => 12,  116 => 11,  109 => 140,  107 => 139,  104 => 138,  102 => 43,  93 => 41,  89 => 39,  87 => 38,  81 => 35,  74 => 31,  71 => 30,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  29 => 2,  27 => 1,);
    }
}
