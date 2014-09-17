<?php

/* TopxiaAdminBundle:System:ip-blacklist.html.twig */
class __TwigTemplate_f2eed970b0c1b1412fcc1808700991c6d3f71b81c26e4b4073743bd420dc3cb3 extends Twig_Template
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
        $context["menu"] = "ip_blacklist";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "IP黑名单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header\"><h1>IP黑名单</h1></div>

";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form method=\"post\">
\t<textarea id=\"ips\" name=\"ips\" rows=\"18\" class=\"form-control\">";
        // line 14
        if ((isset($context["ips"]) ? $context["ips"] : $this->getContext($context, "ips"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ips"]) ? $context["ips"] : $this->getContext($context, "ips")), "ips"), "html", null, true);
        }
        // line 15
        echo "</textarea>

  <div class=\"help-block\">一行一个IP，被加入黑名单的IP将被禁止访问！暂不支持网段的封锁!</div>
  <input type=\"submit\" class=\"btn btn-primary\" value=\"提交\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  56 => 15,  52 => 14,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
