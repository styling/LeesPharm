<?php

/* TopxiaWebBundle:Settings:layout.html.twig */
class __TwigTemplate_39a6d7cf2dbdb348e25970723a5dba2b1fbe6c6b98e5786ae11fa39f8f4c8ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "帐号设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 36
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 38
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"list-group-block\">
            <div class=\"list-group-panel\">
              <div class=\"list-group-heading\">帐号设置</div>
            <ul class=\"list-group\">
              ";
        // line 15
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 16
        echo "              
              <a class=\"list-group-item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "profile")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> 基础信息</a>
              
              <a class=\"list-group-item ";
        // line 19
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "avatar")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> 头像设置</a>
              
              <a class=\"list-group-item ";
        // line 21
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "password")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_password");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> 密码修改</a>
              
              <a class=\"list-group-item ";
        // line 23
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "email")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> 邮箱设置</a>

              ";
        // line 25
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled"), false)) : (false))) {
            // line 26
            echo "                <a class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "binds")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_binds");
            echo "\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i> 第三方登录</a>
              ";
        }
        // line 28
        echo "
            </ul>
            </div>
          </div><!-- /list-group-block -->
        </div>

      </div>
    ";
    }

    // line 38
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 38,  123 => 28,  111 => 25,  102 => 23,  93 => 21,  84 => 19,  75 => 17,  72 => 16,  70 => 15,  62 => 9,  59 => 8,  53 => 39,  51 => 38,  47 => 36,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  479 => 238,  470 => 231,  467 => 230,  461 => 229,  449 => 224,  442 => 222,  439 => 221,  423 => 216,  416 => 214,  413 => 213,  399 => 208,  392 => 206,  389 => 205,  375 => 200,  368 => 198,  365 => 197,  351 => 192,  344 => 190,  341 => 189,  338 => 188,  334 => 187,  331 => 186,  329 => 185,  319 => 178,  308 => 170,  297 => 162,  284 => 152,  274 => 145,  263 => 137,  252 => 129,  241 => 121,  230 => 113,  224 => 109,  216 => 89,  205 => 81,  191 => 72,  184 => 70,  176 => 64,  169 => 60,  166 => 59,  159 => 55,  156 => 54,  150 => 50,  144 => 46,  142 => 45,  132 => 38,  126 => 34,  113 => 26,  104 => 14,  101 => 13,  98 => 12,  92 => 11,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
