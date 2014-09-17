<?php

/* TopxiaAdminBundle:System:operation.layout.html.twig */
class __TwigTemplate_ee27cba4a8b27bce4a87895917f9024165f08b7febe7148a6cadcbfd1c128ebf extends Twig_Template
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
        $context["menu"] = "operation";
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
        // line 10
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "course_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_setting_course_setting");
        echo "\">课程设置
    </a>
  </li>

  <li class=\"";
        // line 15
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "consult_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_setting_consult_setting");
        echo "\">客服设置
    </a>
  </li>

  <li class=\"";
        // line 20
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "payment")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_setting_payment");
        echo "\">支付方式
  \t</a>
  </li>
  <li class=\"";
        // line 24
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "mailer")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("admin_setting_mailer");
        echo "\">邮件服务器设置
  \t</a>
  </li>  
  <li class=\"";
        // line 28
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "storage")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("admin_setting_storage");
        echo "\">云平台设置
    </a>
  </li>
  <li class=\"";
        // line 32
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "theme")) {
            echo "active";
        }
        echo "\">
       <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_setting_theme");
        echo "\">主题设置</a>
  </li>
  <li class=\"";
        // line 35
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "refund")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("admin_setting_refund");
        echo "\">退款设置
  \t</a>
  </li>
   <li class=\"";
        // line 39
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "default")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("admin_setting_default");
        echo "\">系统默认设置
    </a>
  </li>

  <li class=\"";
        // line 44
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "customer_service")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">
    <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getUrl("admin_customer_service");
        echo "\">在线客户服务
    </a>
  </li>

</ul>


  ";
        // line 52
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  137 => 40,  131 => 39,  119 => 35,  114 => 33,  102 => 29,  96 => 28,  90 => 25,  84 => 24,  72 => 20,  65 => 16,  59 => 15,  52 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  663 => 309,  648 => 297,  644 => 296,  632 => 287,  620 => 277,  612 => 264,  599 => 254,  586 => 244,  574 => 235,  562 => 226,  550 => 217,  537 => 206,  534 => 205,  531 => 204,  518 => 201,  514 => 199,  509 => 198,  507 => 197,  469 => 161,  466 => 160,  460 => 159,  457 => 158,  451 => 157,  430 => 154,  426 => 152,  423 => 151,  418 => 150,  415 => 149,  400 => 146,  396 => 144,  393 => 143,  378 => 140,  374 => 138,  371 => 137,  356 => 134,  352 => 132,  349 => 131,  334 => 128,  330 => 126,  327 => 125,  312 => 122,  308 => 120,  305 => 119,  290 => 116,  286 => 114,  283 => 113,  268 => 110,  264 => 108,  261 => 107,  246 => 104,  242 => 102,  239 => 101,  224 => 98,  220 => 96,  217 => 95,  212 => 94,  210 => 93,  203 => 88,  197 => 87,  194 => 86,  188 => 85,  182 => 83,  179 => 82,  174 => 81,  171 => 80,  167 => 78,  164 => 77,  160 => 52,  157 => 74,  153 => 72,  150 => 45,  146 => 69,  143 => 68,  139 => 66,  136 => 65,  132 => 63,  129 => 62,  125 => 36,  122 => 59,  118 => 57,  115 => 56,  111 => 54,  108 => 32,  104 => 52,  97 => 48,  78 => 21,  73 => 30,  60 => 20,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
