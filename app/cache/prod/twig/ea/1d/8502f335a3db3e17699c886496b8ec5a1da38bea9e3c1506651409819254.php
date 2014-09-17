<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_ea1d8502f335a3db3e17699c886496b8ec5a1da38bea9e3c1506651409819254 extends Twig_Template
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
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"

  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\" data-toggle=\"tab\">上传视频</a></li>
        <li><a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">从视频库中选择</a></li>
        <li><a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入网络视频</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">




";
        // line 28
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            // line 29
            echo "  <div class=\"video-quality-switcher\">
    <div>
      <label>视频转码类型：</label>
      <span class=\"quality-switcher-bar\">
        <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </span>
    </div>

    <div class=\"quality-switcher-control\">
      <div class=\"video-quality radios\">
        画质：
        ";
            // line 40
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), null)) : (null))) {
                // line 41
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality"), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 43
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality"), "low")) : ("low")));
                echo "
        ";
            }
            // line 45
            echo "      </div>

      <div class=\"audio-quality radios\">
        音质：
        ";
            // line 49
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), null)) : (null))) {
                // line 50
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality"), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 52
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality"), "low")) : ("low")));
                echo "
          ";
            }
            // line 54
            echo "      </div>

      <div class=\"quality-actions\">
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
        <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
      </div>
    </div>
  </div>
  ";
        }
        // line 63
        echo "















            <div class=\"file-chooser-uploader-label\">选择你要上传的视频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"video-choose-uploader-btn\"
                data-role=\"uploader-btn\"
                data-filetypes=\"";
        // line 83
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo "*.mp4;*.avi;*.flv;*.wmv;*.mov";
        } else {
            echo "*.mp4";
        }
        echo "\"
                data-button-image=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 85
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#video-chooser-progress\"
                data-storage-type=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"video-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 105
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            // line 106
            echo "                  <li>支持<strong>mp4, avi, flv, wmv, mov</strong>格式的视频文件上传，文件大小不能超过<strong>1 GB</strong>。</li>
                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
                ";
        } else {
            // line 110
            echo "                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
                  <li>视频将上传到<strong>网站服务器</strong>，如需使用云视频，请联系EduSoho官方购买。使用云视频，将获得更好的播放体验。</li>
                ";
        }
        // line 113
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
            <div id=\"file-browser-video\" data-role=\"file-browser\"
            data-url=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "video")), "html", null, true);
        echo "\" 
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>
        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"支持优酷、土豆、网易公开课的视频页面地址导入\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-params-url=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        echo "\"

  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">从音频库中选择</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的音频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"audio-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 162
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#audio-chooser-progress\"
                data-storage-type=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "audio"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"audio-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
        echo "</strong>。</li>
                ";
        // line 183
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            // line 184
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 187
            echo "                  <li>音频将上传到<strong>网站服务器</strong></li>
                ";
        }
        // line 189
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
          data-url=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "audio")), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>
      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "convertor" => "ppt")), "html", null, true);
        echo "\"

  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">从PPT库中选择</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的PPT文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"ppt-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 229
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode") == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")))), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode"), "html", null, true);
        echo "\"
                data-progressbar=\"#ppt-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"ppt-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
          data-url=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "ppt")), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>
      </div>
    </div>

  </div>





</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 256,  360 => 230,  354 => 229,  350 => 228,  326 => 207,  312 => 196,  303 => 189,  299 => 187,  294 => 184,  292 => 183,  288 => 182,  268 => 165,  264 => 164,  257 => 162,  253 => 161,  229 => 140,  215 => 129,  204 => 121,  194 => 113,  187 => 110,  181 => 106,  179 => 105,  155 => 87,  148 => 85,  144 => 84,  136 => 83,  103 => 54,  91 => 50,  83 => 45,  77 => 43,  71 => 41,  69 => 40,  56 => 29,  54 => 28,  28 => 5,  19 => 1,  67 => 10,  62 => 8,  57 => 6,  46 => 10,  44 => 9,  40 => 8,  35 => 6,  24 => 4,  22 => 1,  233 => 104,  230 => 103,  227 => 102,  216 => 95,  213 => 94,  205 => 89,  200 => 86,  198 => 85,  190 => 80,  186 => 79,  167 => 65,  159 => 88,  157 => 60,  147 => 55,  141 => 52,  133 => 47,  126 => 45,  114 => 63,  107 => 34,  97 => 52,  89 => 49,  80 => 20,  76 => 18,  70 => 16,  64 => 14,  61 => 13,  55 => 12,  52 => 12,  49 => 10,  39 => 7,  36 => 6,  31 => 107,  29 => 4,  27 => 3,);
    }
}
