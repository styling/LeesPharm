<?php

/* TopxiaAdminBundle:App:upgrades.html.twig */
class __TwigTemplate_cc7f65fe0acac568d74183d1525336ba4a83ce5b8d618127e0e95ac62aaf680c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:App:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "app/upgrades";
        // line 7
        $context["menu"] = "upgrades";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "检查应用更新 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>检查应用更新</h1>
  </div>

";
        // line 14
        if ((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps"))) {
            // line 15
            echo "  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th width=\"60%\">应用描述</th>
        <th>更新版本</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 25
                echo "        <tr>
          <td>
            <div class=\"\"><a href=\"#\" class=\"\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "name"), "html", null, true);
                echo "</a> </div>
            <div class=\"text-muted\">更新日志： ";
                // line 28
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "package"), "description"), 80);
                echo " <a href=\"javascript:;\" class=\"text-warning description-more\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "package"), "description"), "html", null, true);
                echo "\">查看详情  &raquo; </a>
            </div>
            <div class=\"text-muted\"><small>开发者：";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "developerName"), "html", null, true);
                echo "</small></div>
          </td>

          <td>
            <strong class=\"text-success\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "package"), "toVersion"), "html", null, true);
                echo "</strong>
            <br>
            <small class=\"text-muted\">";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "package"), "createdTime"), "Y-m-d"), "html", null, true);
                echo "更新</small>
          </td>

          <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "package"), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary\" data-keyboard=\"false\" data-backdrop=\"static\">更新</a>
          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </tbody>
  </table>
";
        } else {
            // line 47
            echo "当前已是最新版本!
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:upgrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  110 => 44,  100 => 40,  93 => 36,  88 => 34,  81 => 30,  74 => 28,  70 => 27,  66 => 25,  62 => 24,  51 => 15,  49 => 14,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
