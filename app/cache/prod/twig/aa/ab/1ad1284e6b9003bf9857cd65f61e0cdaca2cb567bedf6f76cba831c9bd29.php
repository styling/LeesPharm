<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_aaab1ad1284e6b9003bf9857cd65f61e0cdaca2cb567bedf6f76cba831c9bd29 extends Twig_Template
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
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 2
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div id=\"float-consult\" class=\"float-consult\">
    <div class=\"btn-group-vertical\">

      ";
            // line 6
            $context["break"] = 0;
            // line 7
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq"));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (((!twig_test_empty($this->getAttribute((isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "name"))) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                    // line 8
                    echo "        <span class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color"), "html", null, true);
                    echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"QQ客服\" data-content-element=\"#consult-qq-content\"><span class=\"icon icon-qq\"></span></span>
        ";
                    // line 9
                    $context["break"] = 1;
                    // line 10
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
      ";
            // line 12
            $context["break"] = 0;
            // line 13
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup"));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (((!twig_test_empty($this->getAttribute((isset($context["qqgroup"]) ? $context["qqgroup"] : $this->getContext($context, "qqgroup")), "name"))) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                    // line 14
                    echo "        <span class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color"), "html", null, true);
                    echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"QQ群\" data-content-element=\"#consult-qqgroup-content\"><span class=\"icon icon-qqgroup\"></span></span>
        ";
                    // line 15
                    $context["break"] = 1;
                    // line 16
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 18
            $context["break"] = 0;
            // line 19
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone"));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if (((!twig_test_empty($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "name"))) && ((isset($context["break"]) ? $context["break"] : $this->getContext($context, "break")) == 0))) {
                    echo " 
        <span class=\"btn btn-";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color"), "html", null, true);
                    echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"电话客服\" data-content-element=\"#consult-phone-content\"><span class=\"icon icon-phone\"></span></span>
        ";
                    // line 21
                    $context["break"] = 1;
                    // line 22
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 24
            if ((!twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI")))) {
                // line 25
                echo "        <span class=\"btn btn-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color"), "html", null, true);
                echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"微信公众号\" data-content-element=\"#consult-weixin-content\"><span class=\"icon icon-weixin\"></span></span>
      ";
            }
            // line 27
            echo "      
      ";
            // line 28
            if ((!twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email")))) {
                // line 29
                echo "        <span class=\"btn btn-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color"), "html", null, true);
                echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"电子邮箱\" data-content-element=\"#consult-email-content\"><span class=\"icon icon-email\"></span></span>
      ";
            }
            // line 31
            echo "    </div>

    <div class=\"consult-contents\">
      <div id=\"consult-qq-content\">
        ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq"));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if ((!twig_test_empty($this->getAttribute((isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "name")))) {
                    // line 36
                    echo "          <p>
            <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "number"), "html", null, true);
                    echo "&site=qq&menu=yes\" >
              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "number"), "html", null, true);
                    echo ":52\" alt=\"\" title=\"点击这里给我发消息\"/>
              ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "name"), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>

      <div id=\"consult-qqgroup-content\">
        ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup"));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if ((!twig_test_empty($this->getAttribute((isset($context["qqgroup"]) ? $context["qqgroup"] : $this->getContext($context, "qqgroup")), "name")))) {
                    // line 47
                    echo "          <p>
            <span class=\"icon icon-qqgroup text-muted\" style=\"font-size:14px;\"></span>
            ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qqgroup"]) ? $context["qqgroup"] : $this->getContext($context, "qqgroup")), "name"), "html", null, true);
                    echo " 
            <br> <span class=\"text-info\" style=\"margin-left:20px;\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qqgroup"]) ? $context["qqgroup"] : $this->getContext($context, "qqgroup")), "number"), "html", null, true);
                    echo "</span>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
      <div id=\"consult-phone-content\">
        <p>
          <strong>服务时间：</strong> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime"), "html", null, true);
            echo "
        </p>

        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone"));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if ((!twig_test_empty($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "name")))) {
                    // line 60
                    echo "          <p>
            ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "name"), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "number"), "html", null, true);
                    echo "
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </div>

      
      <div id=\"consult-weixin-content\">
        <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI")), "html", null, true);
            echo "\" class=\"qrcode center-block\">
      </div>

      <div id=\"consult-email-content\">
       <a href=\"mailto:";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email"), "html", null, true);
            echo "</a>
      </div>

    </div>
  </div>
";
        }
        // line 78
        echo "
<script>
  var app = {};
  app.debug = ";
        // line 81
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 87
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  app.config = ";
        // line 89
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "editor_upload_path" => $this->env->getExtension('routing')->getPath("kindeditor_upload"), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 105
        echo ";

  app.arguments = {};
  ";
        // line 108
        if (array_key_exists("script_controller", $context)) {
            // line 109
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 111
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 112
            echo "    app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 114
        echo "</script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : $this->getContext($context, "script_main")), "html", null, true);
        echo "\")
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 119,  312 => 117,  308 => 116,  304 => 115,  301 => 114,  295 => 112,  292 => 111,  286 => 109,  284 => 108,  272 => 87,  268 => 86,  264 => 85,  260 => 84,  256 => 83,  252 => 82,  228 => 72,  221 => 68,  215 => 64,  203 => 61,  195 => 59,  189 => 56,  184 => 53,  170 => 49,  161 => 46,  156 => 43,  145 => 39,  141 => 38,  137 => 37,  115 => 28,  88 => 20,  78 => 18,  66 => 15,  61 => 14,  53 => 12,  36 => 8,  28 => 6,  23 => 3,  47 => 7,  21 => 2,  96 => 14,  92 => 21,  73 => 9,  70 => 8,  32 => 5,  289 => 63,  283 => 61,  279 => 105,  277 => 89,  274 => 57,  254 => 54,  248 => 52,  242 => 49,  236 => 47,  225 => 46,  206 => 40,  200 => 60,  188 => 34,  180 => 31,  177 => 30,  174 => 50,  168 => 27,  166 => 47,  163 => 25,  123 => 31,  118 => 17,  113 => 16,  49 => 3,  42 => 6,  25 => 45,  22 => 2,  19 => 1,  416 => 135,  411 => 118,  405 => 136,  403 => 135,  396 => 131,  381 => 129,  376 => 128,  374 => 127,  368 => 124,  361 => 119,  358 => 118,  352 => 115,  347 => 112,  345 => 111,  336 => 104,  331 => 102,  327 => 101,  322 => 100,  316 => 98,  313 => 97,  305 => 93,  298 => 90,  296 => 89,  291 => 87,  287 => 86,  282 => 84,  275 => 82,  271 => 80,  265 => 79,  259 => 55,  250 => 74,  244 => 81,  239 => 78,  233 => 68,  231 => 67,  226 => 66,  224 => 65,  218 => 62,  212 => 42,  196 => 54,  194 => 36,  179 => 43,  164 => 26,  159 => 24,  155 => 23,  151 => 22,  147 => 21,  142 => 20,  139 => 19,  134 => 36,  116 => 11,  109 => 141,  104 => 24,  102 => 42,  93 => 40,  89 => 38,  81 => 34,  71 => 29,  68 => 16,  62 => 7,  60 => 16,  56 => 15,  48 => 13,  44 => 12,  29 => 4,  27 => 1,  222 => 77,  210 => 68,  204 => 56,  193 => 59,  187 => 58,  182 => 32,  176 => 42,  171 => 28,  165 => 52,  154 => 49,  149 => 23,  143 => 46,  135 => 43,  129 => 35,  126 => 41,  124 => 40,  120 => 39,  114 => 38,  107 => 140,  94 => 22,  90 => 27,  84 => 26,  80 => 19,  74 => 8,  69 => 22,  63 => 21,  57 => 17,  55 => 13,  43 => 10,  40 => 11,  37 => 5,  30 => 7,  172 => 74,  167 => 71,  160 => 24,  148 => 62,  144 => 61,  140 => 45,  131 => 54,  125 => 51,  121 => 50,  117 => 29,  112 => 27,  108 => 44,  106 => 25,  100 => 16,  91 => 11,  87 => 37,  82 => 34,  77 => 10,  58 => 16,  52 => 14,  50 => 11,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 3,);
    }
}
