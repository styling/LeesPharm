<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_0c7fee9a98e3ed551a807c652eb7d218206ac5aac9f1e7dcaa435f97b5b23934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Course:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["menu"] = "course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <div class=\"page-header\">
  ";
        // line 12
        if (((isset($context["liveSetEnabled"]) ? $context["liveSetEnabled"] : $this->getContext($context, "liveSetEnabled")) == 1)) {
            // line 13
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_create", array("flag" => "isLive"));
            echo "\" class=\"btn btn-info btn-sm pull-right mls\" target=\"_blank\">创建直播课程</a>
  ";
        }
        // line 15
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm pull-right\" target=\"_blank\">创建课程</a>
    <h1>课程管理</h1>
  </div>

  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
        ";
        // line 22
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 27
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "status"), "method"), "课程状态");
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>
  </form>

  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"50%\">名称</th>
      <th>学员数</th>
      <th>收入(元)</th>
      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 53
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "userId"), array(), "array"), null)) : (null));
            // line 54
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "categoryId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "categoryId"), array(), "array"), null)) : (null));
            // line 55
            echo "        ";
            $this->env->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig")->display($context);
            // line 56
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
  </table>

  ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  155 => 59,  148 => 57,  135 => 56,  132 => 55,  129 => 54,  126 => 53,  108 => 52,  87 => 34,  81 => 31,  74 => 27,  66 => 22,  55 => 15,  49 => 13,  47 => 12,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
