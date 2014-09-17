<?php

/* TopxiaAdminBundle:Navigation:index.html.twig */
class __TwigTemplate_1ddbed0d5cc7a093390a5bf497b69e0a3bcbd35952fdf66c20aee3070ee796c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Content:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "navigation/page";
        // line 6
        $context["menu"] = "navigation";
        // line 8
        $context["types"] = array("top" => "顶部", "foot" => "底部");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 导航管理 ";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"page-header clearfix\">
  <button class=\"btn btn-info btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">新增";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"), "html", null, true);
        echo "导航</button>
  <h1 class=\"pull-left\">导航管理</h1>
</div>

<div data-role=\"navigation\">
  <ul class=\"nav nav-tabs\">
  \t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 20
            echo "\t    <li ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_navigation", array("type" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "导航</a></li>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </ul>
</div>

<table id=\"navigation-table\" class=\"table table-striped\">
\t<thead>
\t  <tr>
\t    <th>名称</th>
\t    <th width=\"10%\">新开窗口</th>
\t    <th width=\"10%\">显示顺序</th>
\t    <th width=\"10%\">状态</th>  
\t    <th width=\"30%\">操作</th>
\t  </tr>
\t</thead>
    
 \t";
        // line 36
        $this->env->loadTemplate("TopxiaAdminBundle:Navigation:tbody.html.twig")->display($context);
        // line 37
        echo "</table>
    


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  94 => 36,  78 => 22,  63 => 20,  59 => 19,  48 => 13,  44 => 11,  41 => 10,  35 => 3,  30 => 8,  28 => 6,  26 => 4,);
    }
}
