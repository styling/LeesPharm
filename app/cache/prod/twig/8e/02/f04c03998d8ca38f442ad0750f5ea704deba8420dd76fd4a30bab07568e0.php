<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_8e02f04c03998d8ca38f442ad0750f5ea704deba8420dd76fd4a30bab07568e0 extends Twig_Template
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
        $context["menu"] = "center";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"page-header\">
    <h1>应用中心</h1>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用描述</th>
        <th>开发者</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 22
            echo "        ";
            $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "code"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "code"), array(), "array"), null)) : (null));
            // line 23
            echo "      <tr>
        <td>
          <div>
            <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "code"), "html", null, true);
            echo "\"><strong class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "name"), "html", null, true);
            echo "</strong></a>
             - 
            <span class=\"text-info\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "latestVersion"), "html", null, true);
            echo "</span>
            ";
            // line 29
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "licensed")) {
                // line 30
                echo "              <span class=\"label label-warning\">商业版应用</span>
            ";
            }
            // line 32
            echo "          </div>
          <div class=\"\">";
            // line 33
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "description"), 100);
            echo "</div>
          <div class=\"text-muted\"><small>最后更新： ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "latestTime"), "Y-m-d"), "html", null, true);
            echo "</small></div>
        </td>
        <td>
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "developerName"), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 40
            if ((isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp"))) {
                // line 41
                echo "            <a href=\"javascript:;\" class=\"btn btn-default disabled\">已安装</a>
          ";
            } else {
                // line 43
                echo "            ";
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "userAccess") == "ok")) {
                    // line 44
                    echo "              <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "latestPackageId"))), "html", null, true);
                    echo "\" class=\"btn btn-primary\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
            ";
                } else {
                    // line 46
                    echo "              <a href=\"http://www.edusoho.com/service\" class=\"btn btn-warning\" target=\"_blank\">购买</a>
            ";
                }
                // line 48
                echo "          ";
            }
            // line 49
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  126 => 49,  123 => 48,  119 => 46,  113 => 44,  110 => 43,  106 => 41,  104 => 40,  98 => 37,  92 => 34,  88 => 33,  85 => 32,  81 => 30,  79 => 29,  75 => 28,  68 => 26,  63 => 23,  60 => 22,  56 => 21,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
