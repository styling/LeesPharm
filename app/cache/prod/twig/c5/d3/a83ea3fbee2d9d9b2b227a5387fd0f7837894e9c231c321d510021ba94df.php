<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_c5d3a83ea3fbee2d9d9b2b227a5387fd0f7837894e9c231c321d510021ba94df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "client";
        // line 6
        $context["script_controller"] = "setting/mobile";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "移动客户端设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<style>
#mobile-logo-container img ,#mobile-splash1-container img , #mobile-splash2-container img , #mobile-splash3-container img , #mobile-splash4-container img , #mobile-splash5-container
img {max-width: 80%; margin-bottom: 10px;}
</style>

<div class=\"page-header\"><h1>移动客户端设置</h1></div>

";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 26
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "enabled"));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "about"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 46
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" type=\"button\" data-url=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo"), "html", null, true);
        echo "\">
    </div>
  </div>

  <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 62
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" type=\"button\" data-url=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 75
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" type=\"button\" data-url=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 88
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" type=\"button\" data-url=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 101
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" type=\"button\" data-url=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 114
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" type=\"button\" data-url=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ((!$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5"), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 124,  279 => 118,  270 => 116,  266 => 115,  258 => 114,  246 => 105,  237 => 103,  233 => 102,  225 => 101,  213 => 92,  204 => 90,  200 => 89,  192 => 88,  180 => 79,  171 => 77,  167 => 76,  159 => 75,  147 => 66,  138 => 64,  134 => 63,  126 => 62,  111 => 50,  102 => 48,  98 => 47,  90 => 46,  77 => 36,  64 => 26,  52 => 17,  43 => 10,  40 => 9,  33 => 3,  28 => 6,  26 => 5,);
    }
}
