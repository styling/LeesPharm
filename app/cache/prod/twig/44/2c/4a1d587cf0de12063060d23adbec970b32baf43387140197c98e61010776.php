<?php

/* TopxiaWebBundle:Teacher:index.html.twig */
class __TwigTemplate_442c4a1d587cf0de12063060d23adbec970b32baf43387140197c98e61010776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["bodyClass"] = "teacherpage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "师资介绍 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo "师资介绍 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "的师资介绍。";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>师资介绍</h1></div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">

      <ul class=\"media-list\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 24
            echo "          ";
            $context["profile"] = $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"), array(), "array");
            // line 25
            echo "          <li class=\"media teacher\">
            <a class=\"pull-left\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\">
              <img class=\"media-object\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "mediumAvatar"), ""), "html", null, true);
            echo "\">
            </a>
            <div class=\"media-body\">
              <button class=\"btn btn-default pull-right\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\">私信</button>

              <h4 class=\"media-heading\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname"), "html", null, true);
            echo "</a>
              </h4>
              <div class=\"teacher-title\">
                ";
            // line 36
            if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title")) {
                // line 37
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title"), "html", null, true);
                echo "
                ";
            } else {
                // line 39
                echo "                  <span class=\"text-muted\">请设置头衔</span>
                ";
            }
            // line 41
            echo "              </div>
              <div class=\"teacher-about\">";
            // line 42
            echo $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about");
            echo "</div>
            </div>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </ul>
      ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
      
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  130 => 46,  120 => 42,  117 => 41,  113 => 39,  107 => 37,  105 => 36,  97 => 33,  91 => 30,  85 => 27,  81 => 26,  78 => 25,  75 => 24,  71 => 23,  57 => 11,  54 => 10,  47 => 6,  40 => 5,  33 => 3,  28 => 9,);
    }
}
