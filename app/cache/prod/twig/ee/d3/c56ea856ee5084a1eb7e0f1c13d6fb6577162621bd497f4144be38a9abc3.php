<?php

/* TopxiaWebBundle:CourseLesson:item-list.html.twig */
class __TwigTemplate_eed3c56ea856ee5084a1eb7e0f1c13d6fb6577162621bd497f4144be38a9abc3 extends Twig_Template
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
        $context["learnStatuses"] = ((array_key_exists("learnStatuses", $context)) ? (_twig_default_filter((isset($context["learnStatuses"]) ? $context["learnStatuses"] : $this->getContext($context, "learnStatuses")), array())) : (array()));
        // line 2
        $context["experience"] = ((array_key_exists("experience", $context)) ? (_twig_default_filter((isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), false)) : (false));
        // line 3
        echo "<div class=\"course-item-list-wrap\">
\t";
        // line 4
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : (""));
        // line 5
        echo "\t<ul class=\"course-item-list ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo " \" id=\"course-item-list\" >
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 7
            echo "\t\t  ";
            if (twig_in_filter("chapter", (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 8
                echo "\t\t    ";
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "unit")) {
                    // line 9
                    echo "\t\t\t\t  <li class=\"item chapter-item chapter-item-unit clearfix\">
\t\t\t\t  \t<span class=\"name\">第 ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "number"), "html", null, true);
                    echo " 节</span>
\t\t\t\t  \t<span class=\"title\">";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                    echo "</span>
\t\t  \t  </li>
\t\t    ";
                } else {
                    // line 14
                    echo "\t\t\t\t  <li class=\"item chapter-item clearfix\">
\t\t\t\t  \t<span class=\"name\">第 ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "number"), "html", null, true);
                    echo " 章</span>
\t\t\t\t  \t<span class=\"title\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                    echo "</span>
\t\t  \t  </li>
\t\t    ";
                }
                // line 19
                echo "\t\t  ";
            } elseif (twig_in_filter("lesson", (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 20
                echo "\t    \t  ";
                $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))) . "#lesson/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"));
                // line 21
                echo "\t\t    <li class=\"item lesson-item ";
                if ((($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), array(), "array"), null)) : (null))) {
                    echo "lesson-item-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : $this->getContext($context, "learnStatuses")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), array(), "array"), "html", null, true);
                }
                echo " lesson-item-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
                echo " hover-item clearfix \" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
                echo "\">
\t\t    \t";
                // line 22
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status") == "published")) {
                    echo "\t    \t
\t\t\t    \t";
                    // line 23
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "video")) {
                        // line 24
                        echo "\t\t\t\t    \t<span class=\"type\" title=\"视频时长";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length")), "html", null, true);
                        echo "\">
\t\t\t\t    \t\t<span>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length")), "html", null, true);
                        echo "</span>
\t\t\t\t    \t\t<span class=\"glyphicon glyphicon-play-circle\"></span>
\t\t\t\t    \t</span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "audio")) {
                        // line 29
                        echo "\t\t\t\t      <span class=\"type\" title=\"音频时长";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length")), "html", null, true);
                        echo "\">
\t\t\t\t    \t\t<span>";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "length")), "html", null, true);
                        echo "</span>
\t\t\t\t    \t\t<span class=\"glyphicon glyphicon-volume-up\"></span>
\t\t\t\t      </span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "text")) {
                        // line 34
                        echo "\t\t\t\t      <span class=\"type\">图文 <span class=\"glyphicon glyphicon-picture\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "testpaper")) {
                        // line 36
                        echo "\t\t\t\t      <span class=\"type\">试卷 <span class=\"glyphicon glyphicon-check\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "ppt")) {
                        // line 38
                        echo "\t\t\t\t      <span class=\"type\">PPT <span class=\"glyphicon glyphicon-picture\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type") == "live")) {
                        // line 40
                        echo "\t\t\t\t       \t";
                        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime") > (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime")))) {
                            // line 41
                            echo "\t\t\t\t\t\t\t<small class=\"type\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime"), "m月d日"), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 42
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["weeks"]) ? $context["weeks"] : $this->getContext($context, "weeks")));
                            foreach ($context['_seq'] as $context["key"] => $context["week"]) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime"), "w"))) {
                                    // line 44
                                    echo "\t\t\t\t\t\t\t\t\t\t星期";
                                    echo twig_escape_filter($this->env, (isset($context["week"]) ? $context["week"] : $this->getContext($context, "week")), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 46
                                echo "\t\t\t\t\t\t\t    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime"), "H：i"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "startTime") <= (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime"))) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endTime") >= (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime"))))) {
                            // line 50
                            echo "\t\t\t\t\t\t\t<small class=\"type\">正在直播中</small>
\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "endTime") < (isset($context["currentTime"]) ? $context["currentTime"] : $this->getContext($context, "currentTime")))) {
                            // line 52
                            echo "
\t\t\t\t\t\t\t<small class=\"type\" >
\t\t\t\t\t    \t\t";
                            // line 54
                            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "replayStatus") == "generated")) {
                                // line 55
                                echo "\t\t\t\t\t    \t\t<span class=\"type\">回放</span>
\t\t\t\t\t    \t\t<span class=\"glyphicon 
\t\t\t\t\t    \t\tglyphicon-play-circle\"></span>
\t\t\t\t\t    \t\t";
                            } else {
                                // line 59
                                echo "\t\t\t\t\t    \t\t<span class=\"type\">直播结束</span>
\t\t\t\t\t    \t\t";
                            }
                            // line 61
                            echo "\t\t\t\t\t    \t</small>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t    ";
                    }
                    // line 65
                    echo "\t\t\t    ";
                } else {
                    // line 66
                    echo "\t\t\t      \t<span class=\"status\">未发布</span>
\t\t\t    ";
                }
                // line 68
                echo "
\t\t    \t<span class=\"name \">课时";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "number"), "html", null, true);
                echo "</span>
\t\t    \t<span class=\"pie \">&nbsp;</span>
\t\t    \t<a class=\" title\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : $this->getContext($context, "lessonUrl")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
                echo "\" data-experience=\"";
                echo twig_escape_filter($this->env, (isset($context["experience"]) ? $context["experience"] : $this->getContext($context, "experience")), "html", null, true);
                echo "\" style=\"white-space:nowrap; overflow:hidden; text-overflow: ellipsis;\">
\t\t\t    \t\t";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title"), "html", null, true);
                echo "
\t\t\t\t    ";
                // line 73
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "materialNum") > 0)) {
                    // line 74
                    echo "\t\t\t\t      <span class=\"glyphicon  glyphicon-download\" title=\"资料\"></span>
\t\t\t\t    ";
                }
                // line 76
                echo "
\t\t\t\t    ";
                // line 77
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "giveCredit") > 0)) {
                    // line 78
                    echo "\t\t\t\t      <small class=\"text-muted\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "giveCredit"), "html", null, true);
                    echo "学分)</small>
\t\t\t\t    ";
                }
                // line 80
                echo "
\t\t\t\t    ";
                // line 81
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "requireCredit") > 0)) {
                    // line 82
                    echo "\t\t\t\t      <small class=\"text-muted\">(需";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "requireCredit"), "html", null, true);
                    echo "学分)</small>
\t\t\t\t    ";
                }
                // line 84
                echo "
\t\t    \t</a>
\t\t    \t<button class=\"btn btn-success btn-mini action\">开始学习</button>
\t\t    </li>
\t\t  ";
            }
            // line 89
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 90,  255 => 89,  248 => 84,  242 => 82,  240 => 81,  237 => 80,  231 => 78,  229 => 77,  226 => 76,  222 => 74,  220 => 73,  216 => 72,  206 => 71,  201 => 69,  198 => 68,  194 => 66,  191 => 65,  188 => 64,  183 => 61,  179 => 59,  173 => 55,  171 => 54,  167 => 52,  163 => 50,  156 => 47,  150 => 46,  144 => 44,  141 => 43,  137 => 42,  132 => 41,  129 => 40,  125 => 38,  121 => 36,  117 => 34,  110 => 30,  105 => 29,  98 => 25,  93 => 24,  91 => 23,  87 => 22,  75 => 21,  72 => 20,  69 => 19,  63 => 16,  59 => 15,  56 => 14,  50 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  24 => 3,  22 => 2,  19 => 1,);
    }
}
