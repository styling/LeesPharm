<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_7bf59dd6f37a8ebc32eaae1af02c8e8e7c733ceb12792bf782163339f999bec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "homepage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">

  ";
        // line 9
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "home_top_banner")) {
            // line 10
            echo "    <div class=\"homepage-feature homepage-feature-slides mbl\">
      <div class=\"cycle-pager\"></div>
      ";
            // line 12
            echo $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "home_top_banner");
            echo "
    </div>
  ";
        }
        // line 15
        echo "
  <div class=\"row row-9-3\">

    <div class=\"col-md-9\">
      <div class=\"es-box\">
        <div class=\"es-box-heading\">
          <h2>课程</h2>
          <a class=\"pull-right\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">更多&gt;</a>
        </div>
        <div class=\"es-box-body\">
          ";
        // line 25
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 26
            echo "            ";
            echo $this->getAttribute($this, "course_lists", array(0 => $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 5))), "method");
            echo "
          ";
        } else {
            // line 28
            echo "            <div class=\"empty\">还没有发布的课程</div>
          ";
        }
        // line 30
        echo "        </div>
      </div>

      ";
        // line 33
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 34
            echo "
      <div class=\"es-box\">
        <div class=\"es-box-heading\">
          <h2>最新直播</h2>
          ";
            // line 38
            if ((twig_length_filter($this->env, (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : $this->getContext($context, "recentLiveCourses"))) >= 1)) {
                // line 39
                echo "            <a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("live_course_explore");
                echo "\">更多&gt;</a>
          ";
            }
            // line 40
            echo " 
        </div>
        <div class=\"es-box-body\">
          ";
            // line 43
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:coursesBlock", array("courses" => (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : $this->getContext($context, "recentLiveCourses")), "view" => "list")));
            echo "
        </div>
      </div>
      
      ";
        }
        // line 48
        echo "
      ";
        // line 50
        echo "        <div class=\"es-box news\">
          <div class=\"es-box-heading\">
            <h2>最新资讯</h2>
            <a class=\"pull-right\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
            ";
        // line 56
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 57
        echo "            ";
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 58
            echo "              <ul class=\"row\">
              ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 60
                echo "                ";
                if ((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) {
                    // line 61
                    echo "                  <li class=\"col-md-6\">
                    <em>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "updatedTime"), "m-d H:i"), "html", null, true);
                    echo " </em>
                    <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                    echo "\"> <span>[";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"), "name"), "html", null, true);
                    echo "]</span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
                    echo " </a>
                  </li>
                ";
                }
                // line 66
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "              </ul>
            ";
        } else {
            // line 69
            echo "              <div class=\"empty\">还没有资讯</div>
            ";
        }
        // line 71
        echo "          </div>
        </div>

      ";
        // line 75
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 76
            echo "        <div class=\"es-box vip\">
          <div class=\"es-box-heading\">
            <h2>会员专区</h2>
            <a class=\"pull-right\" href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("vip");
            echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
            <ul class=\"row vip-lists\">
              ";
            // line 83
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 84
            echo "              ";
            if ((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels"))) {
                // line 85
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 86
                    echo "                  <li class=\"col-sm-12\">
                    <div class=\"vip-item\">
                      <div class=\"row\">
                        <div class=\"col-sm-4 col-md-4\">
                          <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "id"))), "html", null, true);
                    echo "\">
                          <img class=\"img-responsive\" src=\"";
                    // line 91
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["level"]) ? $context["level"] : null), "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["level"]) ? $context["level"] : null), "picture"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "name"), "html", null, true);
                    echo "\">
                        </div>
                        </a>
                        <div class=\"col-sm-5 col-md-5\">
                          <h3>";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "name"), "html", null, true);
                    echo "</h3>
                          <p>";
                    // line 96
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "description"), 40);
                    echo "</p>
                        </div>
                        <div class=\"vip-price col-sm-3 col-md-3\">
                          <h4>¥&nbsp;";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "monthPrice"), "html", null, true);
                    echo "</h4>
                          <h4><a href=\"";
                    // line 100
                    echo $this->env->getExtension('routing')->getPath("vip_buy");
                    echo "\" class=\"btn btn-success\">立即购买</a></h4>
                        </div>
                      </div>
                    </div>      
                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "              ";
            } else {
                // line 107
                echo "                <div class=\"empty\">尚未设置会员等级</div>
              ";
            }
            // line 109
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 113
        echo "
    </div>

    <div class=\"col-md-3\">
      ";
        // line 117
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:promotedTeacherBlock"));
        echo "

      ";
        // line 120
        echo "        <div class=\"es-box status-side\">
          <div class=\"es-box-heading\">
            <h2>学员动态</h2>
          </div>
          ";
        // line 124
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestFinishedLearns", array("count" => 5));
        // line 125
        echo "          ";
        if ((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns"))) {
            // line 126
            echo "            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns")));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 129
                echo "                  ";
                if ($this->getAttribute((isset($context["learn"]) ? $context["learn"] : null), "lesson", array(), "any", true, true)) {
                    // line 130
                    echo "                    <li class=\"media\">
                      <a class=\"pull-left\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "user"), "id"))), "html", null, true);
                    echo "\">
                        <img class=\"media-object\" src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                      </a>
                      <div class=\"media-body\">
                        <a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "user"), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "user"), "nickname"), "html", null, true);
                    echo "</a>
                        ";
                    // line 136
                    if (($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "status") == "learning")) {
                        // line 137
                        echo "                          正在学习
                        ";
                    } else {
                        // line 139
                        echo "                          在";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "finishedTime")), "html", null, true);
                        echo " 完成了
                        ";
                    }
                    // line 141
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "courseId"))), "html", null, true);
                    echo "\">《";
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute((isset($context["learn"]) ? $context["learn"] : $this->getContext($context, "learn")), "lesson"), "title"), 15);
                    echo "》</a>
                        的学习
                      </div>
                    </li>
                  ";
                }
                // line 146
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "              </ul>
            </div>
          ";
        } else {
            // line 150
            echo "            <div class=\"empty\">还没有动态</div>
          ";
        }
        // line 152
        echo "        </div>

      
      ";
        // line 155
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "
    </div>

  </div>
  ";
        // line 159
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 160
            echo "    <div class=\"row row-9-3\">

      <div class=\"col-md-9\">
        <div class=\"es-box\">
          <div class=\"es-box-heading\"><h2>最热小组</h2><a href=\"";
            // line 164
            echo $this->env->getExtension('routing')->getPath("group_search_group");
            echo "\" class=\"pull-right\">&raquo;更多</a></div>
          <div class=\"es-box-body\">
             ";
            // line 166
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Group:hotGroup"));
            echo "
          </div>
        </div>
      </div>

      <div class=\"col-md-3\">
          <div class=\"es-box\">
          <div class=\"es-box-heading\"><h2>最热话题</h2></div>
          <div class=\"es-box-body\">
            ";
            // line 175
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Group:hotTHread"));
            echo "
          </div>
        </div>
      </div>

    </div>
    ";
        }
        // line 182
        echo "  <div class=\"row\"><div class=\"col-md-12\"></div></div>

</div>
";
    }

    // line 187
    public function getcourse_lists($_courses = null)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $_courses,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "  ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "default")) : ("default"));
            // line 189
            echo "  <ul class=\"course-wide-list\">
    ";
            // line 190
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 191
                echo "    <li class=\"course-item clearfix\">
      <a class=\"course-picture-link\" href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">
        <img class=\"course-picture\" src=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "middlePicture"), "large"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
                echo "\">
      </a>
      <div class=\"course-body\">
        <h4 class=\"course-title\"><a href=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
                echo "</a>
        ";
                // line 197
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode") == "serialize")) {
                    // line 198
                    echo "          <span class=\"label label-success \">更新中</span>
        ";
                } elseif (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode") == "finished")) {
                    // line 200
                    echo "          <span class=\"label label-warning \">已完结</span>
        ";
                }
                // line 202
                echo "        ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
                    // line 203
                    echo "            ";
                    $context["lesson"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lesson", array(), "array"), null)) : (null));
                    // line 204
                    echo "            ";
                    if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime")))) {
                        // line 205
                        echo "              <span class=\"label label-warning series-mode-label\">正在直播中</span>
            ";
                    } else {
                        // line 207
                        echo "              <span class=\"label label-success series-mode-label\">直播</span>
            ";
                    }
                    // line 209
                    echo "        ";
                }
                // line 210
                echo "        </h4>

        ";
                // line 212
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type") == "live")) {
                    // line 213
                    echo "          ";
                    $context["lesson"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lesson"), null)) : (null));
                    // line 214
                    echo "          ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                        // line 215
                        echo "            <div class=\"live-course-lesson mbm\">
              <span class=\"text-success fsm mrm\">";
                        // line 216
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime"), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime"), "H:i"), "html", null, true);
                        echo "</span>
              <span class=\"text-muted fsm mrm\">第";
                        // line 217
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number"), "html", null, true);
                        echo "课时</span>
            </div>
          ";
                    }
                    // line 220
                    echo "        ";
                } else {
                    // line 221
                    echo "          <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subtitle"), "html", null, true);
                    echo "</div>
        ";
                }
                // line 223
                echo "
        <div class=\"course-footer clearfix\">
          ";
                // line 225
                $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "teachers")), null);
                // line 226
                echo "          ";
                if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
                    // line 227
                    echo "            <div class=\"teacher\">
              <a href=\"";
                    // line 228
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "smallAvatar"), ""), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
              <a class=\"teacher-nickname ellipsis\" href=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname"), "html", null, true);
                    echo "</a>
              <span class=\"teacher-title ellipsis\">";
                    // line 230
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title"), "html", null, true);
                    echo "</span>
            </div>
          ";
                }
                // line 233
                echo "          <div class=\"course-metas\">
            <span class=\"stars-";
                // line 234
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rating")), "html", null, true);
                echo "\">&nbsp;</span>
            <span class=\"divider\"></span>
            ";
                // line 236
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "showStudentNumType") == "opened")) {
                    // line 237
                    echo "            <span class=\"text-muted mrm mls\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum"), "html", null, true);
                    echo "</strong>学员</span>
            ";
                }
                // line 239
                echo "            <span class=\"course-price\">";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price") > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price"), "html", null, true);
                    echo "元";
                } else {
                    echo "免费";
                }
                echo "</span>
          </div>
        </div>
      </div>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "  </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 245,  557 => 239,  551 => 237,  549 => 236,  544 => 234,  541 => 233,  535 => 230,  529 => 229,  523 => 228,  520 => 227,  517 => 226,  515 => 225,  511 => 223,  505 => 221,  502 => 220,  496 => 217,  490 => 216,  487 => 215,  484 => 214,  481 => 213,  479 => 212,  475 => 210,  472 => 209,  468 => 207,  464 => 205,  461 => 204,  458 => 203,  455 => 202,  451 => 200,  447 => 198,  445 => 197,  439 => 196,  431 => 193,  427 => 192,  424 => 191,  420 => 190,  417 => 189,  414 => 188,  403 => 187,  396 => 182,  386 => 175,  374 => 166,  369 => 164,  363 => 160,  361 => 159,  354 => 155,  349 => 152,  345 => 150,  340 => 147,  334 => 146,  323 => 141,  317 => 139,  313 => 137,  311 => 136,  305 => 135,  299 => 132,  295 => 131,  292 => 130,  289 => 129,  285 => 128,  281 => 126,  278 => 125,  276 => 124,  270 => 120,  265 => 117,  259 => 113,  253 => 109,  249 => 107,  246 => 106,  234 => 100,  230 => 99,  224 => 96,  220 => 95,  211 => 91,  207 => 90,  201 => 86,  196 => 85,  193 => 84,  191 => 83,  184 => 79,  179 => 76,  176 => 75,  171 => 71,  167 => 69,  163 => 67,  157 => 66,  147 => 63,  143 => 62,  140 => 61,  137 => 60,  133 => 59,  130 => 58,  127 => 57,  125 => 56,  119 => 53,  114 => 50,  111 => 48,  103 => 43,  98 => 40,  92 => 39,  90 => 38,  84 => 34,  82 => 33,  77 => 30,  73 => 28,  67 => 26,  65 => 25,  59 => 22,  50 => 15,  44 => 12,  40 => 10,  38 => 9,  33 => 6,  30 => 5,  25 => 2,);
    }
}
