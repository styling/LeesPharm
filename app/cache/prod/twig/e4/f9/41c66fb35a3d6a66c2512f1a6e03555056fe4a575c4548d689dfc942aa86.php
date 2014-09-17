<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_e4f941c66fb35a3d6a66c2512f1a6e03555056fe4a575c4548d689dfc942aa86 extends Twig_Template
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
        $context["submenu"] = "course_setting";
        // line 6
        $context["script_controller"] = "setting/course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\"><h1>课程设置</h1></div>

";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >给新学员发送欢迎私信</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_enabled"));
        echo "
      <p class=\"help-block\">开启后，新学员加入课程后，会收到教师的欢迎私信</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">欢迎私信内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 38
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{course}} 为课程名称</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >购买课程时填写个人资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        echo $this->env->getExtension('topxia_html_twig')->radios("buy_fill_userinfo", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "buy_fill_userinfo"));
        echo "
      <p class=\"help-block\">开启后，学员购买课程时，需填写个人资料</p>
      </div>
      <div class=\"controls col-md-8 col-md-offset-3\"  id=\"show-list\">
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 53
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                // line 54
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">真实姓名</button>
            ";
            }
            // line 56
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                // line 57
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 59
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "qq")) {
                // line 60
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">QQ</button>
            ";
            }
            // line 62
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                // line 63
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">所在公司</button>
            ";
            }
            // line 65
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                // line 66
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 68
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                // line 69
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 71
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                // line 72
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 74
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weibo")) {
                // line 75
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微博</button>
            ";
            }
            // line 77
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weixin")) {
                // line 78
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微信</button>
            ";
            }
            // line 80
            echo "            ";
            if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                // line 81
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 82
                    echo "                      ";
                    if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                        // line 83
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            // line 87
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
      <div  class=\"controls col-md-8 col-md-offset-2\" id=\"buy-userinfo-list\">
            <div class=\"form-group\"><ul class=\"buy-userinfo-list sortable-list\" data-role=\"list\">
            ";
        // line 93
        if ($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFieldNameArray")) {
            // line 94
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFieldNameArray"));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 95
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                    // line 96
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\"  ";
                    // line 98
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
                </li>
               ";
                }
                // line 101
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                    // line 102
                    echo "                  <li class=\"list-group-item clearfix\" data-role=\"item\" >
                    <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                    &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ";
                    // line 104
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
                  </li>
               ";
                }
                // line 107
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "qq")) {
                    // line 108
                    echo "                      <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\"  ";
                    // line 110
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "qq")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "  name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
                    </li>
               ";
                }
                // line 113
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                    // line 114
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" ";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
                    </li>
               ";
                }
                // line 119
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                    // line 120
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 122
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
                </li>
               ";
                }
                // line 125
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                    // line 126
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 128
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 131
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                    // line 132
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 134
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 137
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weibo")) {
                    // line 138
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 140
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weibo")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
                </li>
               ";
                }
                // line 143
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weixin")) {
                    // line 144
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 146
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "weixin")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
                </li>
               ";
                }
                // line 149
                echo "               ";
                if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                    // line 150
                    echo "               ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 151
                        echo "                ";
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                            // line 152
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 154
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "userinfoFields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                                    echo "checked=true";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " name=\"userinfoFields[]\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "html", null, true);
                            echo "\"></input> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 157
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "               ";
                }
                // line 159
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            ";
        } else {
            // line 161
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
            </li>
            ";
            // line 197
            if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                // line 198
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 199
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"), "html", null, true);
                    echo "\"></input> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
                    echo "
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "            ";
            }
            // line 205
            echo "          ";
        }
        // line 206
        echo "            </ul><div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
  </div></div>

    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师设置课程价格</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 217
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_modify_price"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师添加/移除学员</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 226
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_manage_student"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师导出学员资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 235
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_export_student"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许学员下载课时的音视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 244
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => "不允许", 1 => "允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "student_download_media"));
        echo "
        <div class=\"help-block\">开启此项设置后，学员可在课时学习界面侧栏的\"资料\"面板中下载。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程详情页显示相关课程</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 254
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "relatedCourses"));
        echo "
        <div class=\"help-block\">根据课程的标签，显示相关课程</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课程允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 264
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "allowAnonymousPreview"));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课程</div>
      </div>
    </div>

";
        // line 277
        echo "
  </fieldset>
  <fieldset>
    <legend>直播课程</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >开启状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 287
        echo $this->env->getExtension('topxia_html_twig')->radios("live_course_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "live_course_enabled"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>同时在线人数上限</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"mts text-muted\" >";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "live_student_capacity"), "html", null, true);
        echo "人</div>
        <input class=\"form-control\" name=\"live_student_capacity\" type=\"hidden\" data-value=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "live_student_capacity"), "html", null, true);
        echo "\">
        <p class=\"help-block\"><a href=\"http://www.edusoho.com/service/136\" target=\"_blank\">点击查看如何购买扩充在线人数</a></p>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 309,  648 => 297,  644 => 296,  632 => 287,  620 => 277,  612 => 264,  599 => 254,  586 => 244,  574 => 235,  562 => 226,  550 => 217,  537 => 206,  534 => 205,  531 => 204,  518 => 201,  514 => 199,  509 => 198,  507 => 197,  469 => 161,  466 => 160,  460 => 159,  457 => 158,  451 => 157,  430 => 154,  426 => 152,  423 => 151,  418 => 150,  415 => 149,  400 => 146,  396 => 144,  393 => 143,  378 => 140,  374 => 138,  371 => 137,  356 => 134,  352 => 132,  349 => 131,  334 => 128,  330 => 126,  327 => 125,  312 => 122,  308 => 120,  305 => 119,  290 => 116,  286 => 114,  283 => 113,  268 => 110,  264 => 108,  261 => 107,  246 => 104,  242 => 102,  239 => 101,  224 => 98,  220 => 96,  217 => 95,  212 => 94,  210 => 93,  203 => 88,  197 => 87,  194 => 86,  188 => 85,  182 => 83,  179 => 82,  174 => 81,  171 => 80,  167 => 78,  164 => 77,  160 => 75,  157 => 74,  153 => 72,  150 => 71,  146 => 69,  143 => 68,  139 => 66,  136 => 65,  132 => 63,  129 => 62,  125 => 60,  122 => 59,  118 => 57,  115 => 56,  111 => 54,  108 => 53,  104 => 52,  97 => 48,  78 => 38,  73 => 30,  60 => 20,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
