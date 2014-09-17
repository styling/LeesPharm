<?php

/* TopxiaWebBundle:Group:groups-threads-ul.html.twig */
class __TwigTemplate_a84db52bbc9e156a50b11ab3444af3df7deffb1deb1c417dc7de6733820fa3ac extends Twig_Template
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
        echo "<ul class=\"media-list thread-list\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "    ";
            $context["group"] = (($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "groupId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "groupId"), array(), "array"), null)) : (null));
            // line 4
            echo "    ";
            if (((array_key_exists("users", $context)) ? (_twig_default_filter((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), null)) : (null))) {
                // line 5
                echo "    ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "userId"), array(), "array"), null)) : (null));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <li class=\"media\">
      <a class=\"pull-left\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smallAvatar"), ""), "html", null, true);
            echo "\" class=\"media-object\">
      </a>
      <div class=\"media-body\">
        ";
            // line 12
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "postNum")) {
                echo "<span class=\"badge pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "postNum"), "html", null, true);
                echo "</span>";
            }
            // line 13
            echo "        <div class=\"media-heading\">
          ";
            // line 14
            if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "isStick") && (!(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))))) {
                // line 15
                echo "            <span class=\"label label-danger\">置顶</span>
          ";
            }
            // line 17
            echo "          <a class=\"title\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "groupId"), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title"), 90);
            echo "</a>
          ";
            // line 18
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "isElite")) {
                // line 19
                echo "            <span class=\"label label-warning\">精</span>
          ";
            }
            // line 21
            echo "        </div>
        
        <div class=\"metas\">
          ";
            // line 24
            if ((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))) {
                // line 25
                echo "            <a class=\"link-muted\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "groupId"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                echo "</a>
            <span class=\"divider\">•</span>
          ";
            }
            // line 28
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => "link-muted"), "method"), "html", null, true);
            echo "
          <span class=\"divider\">•</span>
          ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "createdTime")), "html", null, true);
            echo "
          ";
            // line 31
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastPostTime")) {
                // line 32
                echo "            <span class=\"divider\">•</span>
            最后回复 ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => $this->getAttribute((isset($context["lastPostMembers"]) ? $context["lastPostMembers"] : $this->getContext($context, "lastPostMembers")), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastPostMemberId"), array(), "array"), 1 => "link-muted"), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "lastPostTime")), "html", null, true);
                echo "
          ";
            }
            // line 35
            echo "        </div> 
      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "    <li class=\"empty\">暂无话题！</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-threads-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  128 => 39,  120 => 35,  110 => 32,  108 => 31,  104 => 30,  87 => 25,  80 => 21,  76 => 19,  74 => 18,  67 => 17,  63 => 15,  61 => 14,  58 => 13,  39 => 7,  111 => 36,  103 => 32,  97 => 31,  85 => 24,  81 => 21,  72 => 19,  68 => 17,  60 => 15,  52 => 12,  50 => 12,  44 => 11,  36 => 6,  31 => 5,  27 => 3,  24 => 3,  46 => 9,  30 => 4,  22 => 2,  19 => 1,  53 => 5,  48 => 4,  42 => 8,  38 => 4,  25 => 3,  23 => 2,  21 => 1,  159 => 55,  157 => 49,  149 => 46,  141 => 40,  139 => 36,  131 => 33,  123 => 27,  121 => 24,  113 => 33,  109 => 19,  107 => 34,  101 => 14,  98 => 28,  90 => 9,  43 => 8,  40 => 7,  33 => 5,  28 => 6,  26 => 5,);
    }
}
