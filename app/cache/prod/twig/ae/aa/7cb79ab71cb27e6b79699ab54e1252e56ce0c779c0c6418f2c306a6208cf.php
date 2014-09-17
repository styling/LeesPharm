<?php

/* TopxiaAdminBundle:System:storage.html.twig */
class __TwigTemplate_aeaa7cb79ab71cb27e6b79699ab54e1252e56ce0c779c0c6418f2c306a6208cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "storage";
        // line 6
        $context["script_controller"] = "setting/cloud";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云平台设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>云平台设置</h1></div>

";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

  <fieldset>
    <legend>Edusoho云平台参数</legend>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cloud_access_key\" >AccessKey</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        <input type=\"text\" id=\"cloud_access_key\" class=\"form-control\" name=\"cloud_access_key\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "cloud_access_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cloud_secret_key\" >SecretKey</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        <input type=\"text\" id=\"cloud_secret_key\" class=\"form-control\" name=\"cloud_secret_key\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "cloud_secret_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cloud_api_server\" >API地址</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        <input type=\"text\" id=\"cloud_api_server\" class=\"form-control\" name=\"cloud_api_server\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "cloud_api_server"), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>


  <fieldset>
    <legend>云视频设置</legend>


  </fieldset>


  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >云视频</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      ";
        // line 62
        echo $this->env->getExtension('topxia_html_twig')->radios("upload_mode", array("local" => "关闭", "cloud" => "开启"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"));
        echo "

      <div class=\"help-block\">
        云视频，提供更快的视频播放速度，以及更低廉的网络流量价格。<br />
        <strong class=\"text-info\">如需使用云视频，请联系<a href=\"http://www.edusoho.com/service\" target=\"_blank\">Edusoho官方</a></strong>。
      </div>

    </div>
  </div>


  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"cloud_bucket\" >云视频Bucket</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input type=\"text\" id=\"cloud_bucket\" class=\"form-control\" name=\"cloud_bucket\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "cloud_bucket"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"cloud_bucket\" >云视频转码类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <p>
        <span class=\"form-control-static text-info\">画质</span>
        ";
        // line 89
        echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_quality"));
        echo "
      </p>

      <p>
        <span class=\"form-control-static text-info\">音质</span>
        ";
        // line 94
        echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_audio_quality"));
        echo "
      </p>

    </div>
  </div>



  <hr>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>云视频水印</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 109
        echo $this->env->getExtension('topxia_html_twig')->radios("video_watermark", array("0" => "关闭", "1" => "开启"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark"));
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>设置水印图片</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      <div id=\"cloud-video-watermark-container\">";
        // line 119
        if ($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark_image")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark_image")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-upload\" type=\"button\" data-url=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_upload");
        echo "\">上传</button>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-remove\" type=\"button\" data-url=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_remove");
        echo "\" ";
        if ((!$this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark_image"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

      <div class=\"help-block\">支持png/jpg格式图片，建议使用半透明的png图片。</div>
      <input type=\"hidden\" name=\"video_watermark_image\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark_image"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\">
      <label>水印位置</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 133
        echo $this->env->getExtension('topxia_html_twig')->radios("video_watermark_position", array("topright" => "右上", "bottomright" => "右下", "topleft" => "左上", "bottomleft" => "左下"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_watermark_position"));
        echo "
    </div>
  </div>

  <hr>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>云视频指纹</label>
    </div>  
    <div class=\"controls col-md-8 radios\">
      ";
        // line 144
        echo $this->env->getExtension('topxia_html_twig')->radios("video_fingerprint", array("0" => "关闭", "1" => "开启"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "video_fingerprint"));
        echo "
      <div class=\"help-block\">开启后，将在视频播放中随机时间、随机位置显示当前网站域名及学员的昵称。</div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:storage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 156,  230 => 144,  216 => 133,  204 => 124,  194 => 121,  190 => 120,  182 => 119,  169 => 109,  151 => 94,  143 => 89,  129 => 78,  110 => 62,  87 => 42,  75 => 33,  63 => 24,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
