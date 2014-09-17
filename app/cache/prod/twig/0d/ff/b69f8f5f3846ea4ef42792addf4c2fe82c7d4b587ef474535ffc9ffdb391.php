<?php

/* TopxiaAdminBundle:Theme:index.html.twig */
class __TwigTemplate_0dffb69f8f5f3846ea4ef42792addf4c2fe82c7d4b587ef474535ffc9ffdb391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "setting/theme";
        // line 7
        $context["submenu"] = "theme";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "主题设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>主题设置</h1></div>

  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>名称</th>
      <th>主题版本</th>
      <th>作者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 24
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("themes/" . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "uri")) . "/") . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "thumb"))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "name"), "html", null, true);
            echo "</h5>
                ";
            // line 31
            echo (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description"), "")) : (""));
            echo "
                ";
            // line 32
            if ((($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "setting"), null)) : (null))) {
                // line 33
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "setting"), "html", null, true);
                echo "\">设置</a>
                ";
            }
            // line 35
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "version"), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "author"), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 41
            if (($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "uri") == $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "uri"))) {
                // line 42
                echo "              <span class=\"text-success\">当前正在使用该主题</span>
            ";
            } else {
                // line 44
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "uri"))), "html", null, true);
                echo "\">使用</button>
            ";
            }
            // line 46
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  115 => 46,  109 => 44,  105 => 42,  103 => 41,  98 => 39,  94 => 38,  89 => 35,  83 => 33,  81 => 32,  77 => 31,  73 => 30,  68 => 28,  62 => 24,  58 => 23,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
