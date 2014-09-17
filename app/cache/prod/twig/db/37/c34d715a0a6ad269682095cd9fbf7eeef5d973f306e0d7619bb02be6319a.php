<?php

/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_db37c34d715a0a6ad269682095cd9fbf7eeef5d973f306e0d7619bb02be6319a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "avatar";
        // line 5
        $context["script_controller"] = "settings/avatar";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "头像 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Settings:avatar.html.twig", "102385273")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  33 => 3,  28 => 5,  26 => 4,);
    }
}


/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_db37c34d715a0a6ad269682095cd9fbf7eeef5d973f306e0d7619bb02be6319a_102385273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo "头像";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
      <form id=\"settings-avatar-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><b>当前头像</b></div>
          <div class=\"controls col-md-8 controls\">
          \t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "largeAvatar"), ""), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar"), 'label', array("label" => "新头像"));
        echo "
          </div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar"), 'widget', array("attr" => array("accept" => "image/gif,image/jpeg,image/png")));
        echo "
            <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
        echo "</strong>。</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">上传</button>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          </div>
        </div>

        ";
        // line 42
        if ((isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : $this->getContext($context, "partnerAvatar"))) {
            // line 43
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><b>论坛头像</b></div>
            <div class=\"controls col-md-8 controls\">
              <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : $this->getContext($context, "partnerAvatar")), "html", null, true);
            echo "\" class=\"mrm\">
              <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\">使用该头像</button>
            </div>
          </div>
        ";
        }
        // line 51
        echo "
      </form>

















    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  164 => 47,  160 => 46,  155 => 43,  153 => 42,  146 => 38,  141 => 36,  131 => 29,  127 => 28,  121 => 25,  112 => 19,  104 => 14,  99 => 11,  96 => 10,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 5,  26 => 4,);
    }
}
