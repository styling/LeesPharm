<?php

/* TopxiaAdminBundle:System:default-share-content.html.twig */
class __TwigTemplate_b2b87eb0ea9b0a0ce819a8986611c6ef909ba657b1deaa6251e4ed953a569d12 extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <input type=\"hidden\" name=\"defaultAvatar\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "defaultAvatar"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"defaultCoursePicture\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "defaultCoursePicture"), "html", null, true);
        echo "\">
  <div style=\"display:none;\">
    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">资讯分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "articleShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 19
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{articletitle}} 为资讯标题</li>
              <li>{{sitename}} 为网校名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">课程分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "courseShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 36
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{course}} 为课程名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">小组分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "groupShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 54
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{groupname}} 为小组名称</li>
              <li>{{threadname}} 为话题名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-share-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 66,  89 => 54,  84 => 46,  66 => 36,  61 => 29,  42 => 19,  37 => 11,  22 => 2,  108 => 64,  98 => 57,  78 => 40,  68 => 35,  60 => 30,  50 => 23,  30 => 6,  25 => 4,  21 => 2,  19 => 1,  101 => 42,  99 => 41,  94 => 38,  88 => 34,  86 => 33,  81 => 31,  73 => 38,  71 => 24,  65 => 20,  63 => 19,  58 => 17,  46 => 8,  43 => 7,  40 => 6,  33 => 2,  28 => 4,  26 => 3,);
    }
}
