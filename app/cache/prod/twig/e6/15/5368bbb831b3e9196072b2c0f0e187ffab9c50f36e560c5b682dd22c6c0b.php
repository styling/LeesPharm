<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_e6155368bbb831b3e9196072b2c0f0e187ffab9c50f36e560c5b682dd22c6c0b extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "


<div class=\"row row-12\">
  <div class=\"col-md-12\">
    <div class=\"panel panel-default  course-header\">
      <div class=\"panel-body clearfix\">
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">
            <img class=\"picture\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture"), ""), "html", null, true);
        echo "\" />
        </a>

        <h1 class=\"title\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
        echo "</a> 
          ";
        // line 14
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") == "closed")) {
            echo "  
            <span class=\"label label-danger \">已关闭</span>
          ";
        } elseif (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") == "draft")) {
            // line 17
            echo "            <span class=\"label label-warning \">未发布</span>
          ";
        } elseif (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") == "published")) {
            // line 19
            echo "            ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode") == "serialize")) {
                // line 20
                echo "              <span class=\"label label-success \">更新中</span>
            ";
            } elseif (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode") == "finished")) {
                // line 22
                echo "              <span class=\"label label-warning \">已完结</span>
            ";
            }
            // line 24
            echo "          ";
        }
        // line 25
        echo "        </h1>

        <div class=\"teachers\">
          ";
        // line 28
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds"), null)) : (null))) {
            // line 29
            echo "            教师：
            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "teacherIds"));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 31
                echo "              ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array");
                // line 32
                echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_teacher_info", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname"), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
        }
        // line 35
        echo "        </div>

        <div class=\"toolbar hidden-xs hidden-lt-ie8\">
          ";
        // line 38
        if ((!(isset($context["manage"]) ? $context["manage"] : $this->getContext($context, "manage")))) {
            // line 39
            echo "          <div class=\"btn-group\">
            <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"评价\" data-placement=\"top\" href=\"#modal\">
              <i class=\"glyphicon glyphicon-thumbs-up\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum"), "html", null, true);
            echo "</a>

            ";
            // line 43
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "showStudentNumType") == "opened") || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role"), "student")) : ("student")) == "teacher")) || (isset($context["isAdmin"]) ? $context["isAdmin"] : $this->getContext($context, "isAdmin")))) {
                // line 44
                echo "              <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"查看学员的学习进度, 还可以发私信进行联系!\" data-placement=\"bottom\"
              href=\"#modal\"><i class=\"glyphicon glyphicon-user\"></i> ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum"), "html", null, true);
                echo "</a>
            ";
            }
            // line 47
            echo "
            <div class=\"btn-group\" data-role=\"tooltip\" title=\"分享到\" data-placement=\"left\" >
              <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"glyphicon glyphicon-share\"></i>
              </button>
              <ul class=\"dropdown-menu pull-right shares-dropdown-menu js-social-shares\">
                <li class=\"disabled\"><a href=\"javascript:\">分享到：</a></li>
                <li><a href=\"javascript:\" data-share=\"weibo\" data-params=\"#course-social-share-params\"><span class=\"social-icon-weibo\"></span> 新浪微博</a></li>
                <li><a href=\"javascript:\" data-share=\"qq\" data-params=\"#course-social-share-params\"><span class=\"social-icon-qq\"></span> QQ空间</a></li>
                <li><a href=\"javascript:\" data-share=\"renren\" data-params=\"#course-social-share-params\"><span class=\"social-icon-renren\"></span> 人人网</a></li>
                <li><a href=\"javascript:\" data-share=\"douban\" data-params=\"#course-social-share-params\"><span class=\"social-icon-douban\"></span> 豆瓣</a></li>
              </ul>
              <div id=\"course-social-share-params\" style=\"display:none;\"
                data-title=\"课程 《";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
            echo "》\"
                data-picture=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture"), "large", true), "html", null, true);
            echo "\"
                data-url=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\"
                ></div>
            </div>
            ";
            // line 65
            if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role"), null)) : (null)) == "student")) {
                // line 66
                echo "                  ";
                if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "orderId")) {
                    // line 67
                    echo "                   <a class=\"btn btn-default btn-sm \" title=\"退出学习\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-log-in\"></i></a>
                  ";
                } else {
                    // line 69
                    echo "                  <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"退出学习\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-log-in\"></i></a>
                    ";
                }
                // line 71
                echo "                ";
            }
            // line 72
            echo "            ";
            if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
                // line 73
                echo "            <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\"  title=\"课程管理\"  >
            <i class=\"glyphicon glyphicon-cog\"></i>
            </a>
            ";
            }
            // line 77
            echo "          </div>

          ";
        } else {
            // line 80
            echo "
            ";
            // line 81
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") == "published")) {
                // line 82
                echo "              <div class=\"btn-group\">
                <a class=\"btn btn-default btn-sm\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">返回课程主页</a>
              </div>
            ";
            }
            // line 86
            echo "
            <div class=\"btn-group\">
              <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">预览 <span class=\"caret\"></span></button>
              <ul class=\"dropdown-menu pull-right\">
                  <li><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">作为 已购买用户</a></li>
                  <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"), "previewAs" => "guest")), "html", null, true);
            echo "\" target=\"_blank\">作为 未购买用户</a></li>
              </ul>
            </div>

            ";
            // line 95
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status") != "published")) {
                // line 96
                echo "              <div class=\"btn-group\">
                <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">发布课程</button>
              </div>
            ";
            }
            // line 100
            echo "
          ";
        }
        // line 102
        echo "        </div>
      </div>
    </div>
    ";
        // line 105
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")), "ok")) : ("ok")) != "ok")) {
            // line 106
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 108
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")) == "not_member")) {
                // line 109
                echo "          您已经不是会员，不能学习此课程！请重新开通会员，或购买课程！
        ";
            } elseif (((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")) == "member_expired")) {
                // line 111
                echo "          您的会员已过期，不能学习此课程，请先续费。
        ";
            } elseif (((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")) == "level_not_exist")) {
                // line 113
                echo "          会员等级已删除，不能学习此课程。
        ";
            } elseif (((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")) == "level_low")) {
                // line 115
                echo "          会员等级不够，不能学习此课程。
        ";
            } elseif (((isset($context["vipChecked"]) ? $context["vipChecked"] : $this->getContext($context, "vipChecked")) == "vip_closed")) {
                // line 117
                echo "          会员专区已关闭，您不能继续学课程。
        ";
            }
            // line 119
            echo "
      </div>

    ";
        }
        // line 123
        echo "
    ";
        // line 124
        if ((!(isset($context["isNonExpired"]) ? $context["isNonExpired"] : $this->getContext($context, "isNonExpired")))) {
            // line 125
            echo "      ";
            if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) == "free_end")) {
                // line 126
                echo "        <div class=\"alert alert-danger alert-dismissable\">
          <a class=\"btn btn-primary\" href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\" style=\"float:right;margin-top: -6px;margin-right:-20px\" title=\"\">购买</a>
          您购买的课程限时免费活动已结束，无法继续学习课时、提问等。请重新购买该课程。
        </div>
      ";
            } else {
                // line 131
                echo "       <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
          您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师。
      </div>
      ";
            }
            // line 136
            echo "    ";
        }
        // line 137
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 137,  309 => 136,  302 => 131,  295 => 127,  292 => 126,  289 => 125,  287 => 124,  284 => 123,  278 => 119,  274 => 117,  270 => 115,  266 => 113,  262 => 111,  258 => 109,  256 => 108,  252 => 106,  250 => 105,  245 => 102,  241 => 100,  235 => 97,  232 => 96,  230 => 95,  223 => 91,  219 => 90,  213 => 86,  207 => 83,  204 => 82,  199 => 80,  186 => 73,  180 => 71,  172 => 69,  161 => 65,  151 => 61,  147 => 60,  132 => 47,  127 => 45,  120 => 43,  115 => 41,  111 => 40,  108 => 39,  106 => 38,  101 => 35,  98 => 34,  87 => 32,  84 => 31,  80 => 30,  77 => 29,  75 => 28,  70 => 25,  67 => 24,  63 => 22,  56 => 19,  52 => 17,  46 => 14,  40 => 13,  34 => 10,  21 => 2,  19 => 1,  228 => 59,  221 => 53,  210 => 49,  202 => 81,  194 => 77,  191 => 46,  181 => 44,  179 => 43,  170 => 41,  165 => 38,  163 => 66,  153 => 34,  145 => 33,  137 => 32,  122 => 44,  112 => 23,  102 => 21,  94 => 20,  86 => 19,  78 => 18,  71 => 13,  68 => 12,  65 => 11,  59 => 20,  57 => 59,  51 => 11,  44 => 7,  41 => 6,  38 => 5,  31 => 3,  183 => 72,  174 => 100,  166 => 67,  164 => 93,  155 => 62,  144 => 79,  138 => 75,  131 => 71,  126 => 68,  124 => 67,  116 => 62,  110 => 22,  99 => 52,  93 => 48,  91 => 47,  83 => 42,  72 => 34,  61 => 26,  53 => 57,  45 => 15,  42 => 14,  35 => 3,  30 => 9,  28 => 6,  26 => 5,);
    }
}
