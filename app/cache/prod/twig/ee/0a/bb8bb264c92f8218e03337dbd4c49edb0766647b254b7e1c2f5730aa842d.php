<?php

/* TopxiaWebBundle:MyThread:thread-list.html.twig */
class __TwigTemplate_ee0abb8bb264c92f8218e03337dbd4c49edb0766647b254b7e1c2f5730aa842d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "discussion")) : ("discussion"));
        // line 2
        echo "
<ul class=\"media-list\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 5
            echo "   ";
            if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
                // line 6
                echo "    ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "courseId"), array(), "array"), null)) : (null));
                // line 7
                echo "    <li class=\"media\">
        <div class=\"media-body\">
          ";
                // line 9
                if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "postNum") > 0)) {
                    // line 10
                    echo "            <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "postNum"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 12
                echo "          <div class=\"mbm\">
            ";
                // line 13
                if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "type") == "question")) {
                    // line 14
                    echo "              <span class=\"label label-info\" title=\"问答帖\">问</span>
            ";
                }
                // line 16
                echo "
            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "courseId"), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title"), "html", null, true);
                echo "</strong></a>

            ";
                // line 19
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lessonId")) {
                    // line 20
                    echo "              <span class=\"label\" title=\"课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lessonId"), "html", null, true);
                    echo "\">L";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lessonId"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 22
                echo "
            ";
                // line 23
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "isElite")) {
                    // line 24
                    echo "              <span class=\"label label-warning\" title=\"精华帖\">精</span>
            ";
                }
                // line 26
                echo "
          </div>
          <div class=\"text-muted text-normal\">
            ";
                // line 29
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 30
                    echo "              <span>发表于<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                    echo "\" class=\"link-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
                    echo "</a></span>
            ";
                } else {
                    // line 32
                    echo "              <span>课程已删除</span>
            ";
                }
                // line 34
                echo "            <span class=\"bullet\">•</span>
            ";
                // line 35
                if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "postNum") > 0)) {
                    // line 36
                    echo "              ";
                    $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "latestPostUserId"), array(), "array");
                    // line 37
                    echo "              <span>最后回复 ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : $this->getContext($context, "poster")), 1 => "link-muted"), "method"), "html", null, true);
                    echo "</span>
              ,
              <span>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "latestPostTime")), "html", null, true);
                    echo "</span>
              <span class=\"bullet\">•</span>
            ";
                }
                // line 42
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "hitNum"), "html", null, true);
                echo "浏览</span>
          </div>
        </div>
      </li>
    ";
            } else {
                // line 47
                echo "      ";
                if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
                    // line 48
                    echo "        <li class=\"empty\">你还没提过问题</li>
      ";
                } else {
                    // line 50
                    echo "        <li class=\"empty\">你还没发表过话题</li>
      ";
                }
                // line 52
                echo "
    ";
            }
            // line 54
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
</ul>

";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:thread-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  155 => 56,  148 => 54,  144 => 52,  140 => 50,  136 => 48,  133 => 47,  124 => 42,  112 => 37,  109 => 36,  107 => 35,  104 => 34,  100 => 32,  92 => 30,  90 => 29,  85 => 26,  79 => 23,  68 => 20,  56 => 16,  52 => 14,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,  122 => 50,  118 => 39,  114 => 46,  110 => 44,  108 => 43,  105 => 42,  102 => 41,  99 => 40,  97 => 39,  91 => 35,  87 => 33,  83 => 31,  81 => 24,  76 => 22,  73 => 26,  66 => 19,  63 => 14,  59 => 17,  57 => 11,  54 => 10,  50 => 13,  48 => 7,  45 => 6,  43 => 5,  37 => 3,  31 => 23,  28 => 21,  26 => 20,);
    }
}
