<?php

/* TopxiaAdminBundle:System:user_set.layout.html.twig */
class __TwigTemplate_73c24352d1ff66fb7b3f48d5170039c6d0d998c08dbc01c09d74f79af0223b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "user_set";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "全局设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">
  <li class=\"";
        // line 9
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "auth")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("admin_setting_auth");
        echo "\">注册设置
  \t</a>
  </li>\t
  <li class=\"";
        // line 13
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "login_bind")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_setting_login_bind");
        echo "\">登录设置
  \t</a>
  </li>
  <li class=\"";
        // line 17
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "user_center")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_center");
        echo "\">用户中心设置
    </a>
  </li>
  <li class=\"";
        // line 21
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "user_fields")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_fields");
        echo "\">字段自定义
    </a>
  </li>

</ul>


  ";
        // line 29
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  87 => 22,  81 => 21,  75 => 18,  69 => 17,  63 => 14,  57 => 13,  51 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  640 => 320,  625 => 308,  612 => 298,  588 => 285,  583 => 275,  571 => 266,  558 => 256,  545 => 246,  532 => 236,  514 => 220,  511 => 219,  508 => 218,  495 => 215,  491 => 213,  486 => 212,  484 => 211,  446 => 175,  443 => 174,  437 => 173,  434 => 172,  428 => 171,  407 => 168,  403 => 166,  400 => 165,  395 => 164,  392 => 163,  377 => 160,  373 => 158,  370 => 157,  355 => 154,  351 => 152,  348 => 151,  333 => 148,  329 => 146,  326 => 145,  311 => 142,  307 => 140,  304 => 139,  289 => 136,  285 => 134,  282 => 133,  267 => 130,  263 => 128,  260 => 127,  253 => 122,  250 => 121,  243 => 116,  240 => 115,  232 => 109,  229 => 108,  224 => 107,  222 => 106,  213 => 99,  207 => 98,  204 => 97,  198 => 96,  192 => 94,  189 => 93,  184 => 92,  181 => 91,  177 => 89,  174 => 88,  170 => 86,  167 => 85,  163 => 83,  160 => 82,  156 => 80,  153 => 79,  149 => 77,  146 => 76,  142 => 74,  139 => 73,  135 => 71,  132 => 70,  128 => 68,  125 => 67,  121 => 65,  118 => 64,  114 => 63,  91 => 51,  86 => 41,  74 => 32,  59 => 20,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
