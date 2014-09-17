<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_294e92854d9eb4272b54823e4951a4a4039d39bca84431cc9a53cfaa0e68e456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "auth";
        // line 6
        $context["script_controller"] = "setting/auth";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>注册设置</h1></div>

";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >新用户注册</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("register_mode", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode"));
        echo "
    </div>
  </div>

  <fieldset>
    <legend>新用户激活邮件设置</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_title\" >新用户激活邮件标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_title"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_body\">新用户激活邮件内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 51
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
            <li>{{verifyurl}} 为邮箱验证地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>注册信息字段设置</legend>
      <div class=\"row\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">注册时需提供</label>
        </div>
        <div class=\"controls col-md-8 \"  id=\"show-list\">
        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 64
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "email")) {
                // line 65
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">邮箱地址</button>
            ";
            }
            // line 67
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "nickname")) {
                // line 68
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">昵称</button>
            ";
            }
            // line 70
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "password")) {
                // line 71
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">密码</button>
            ";
            }
            // line 73
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                // line 74
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">姓名</button>
            ";
            }
            // line 76
            echo "            ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                // line 77
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 79
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                // line 80
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 82
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                // line 83
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 85
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                // line 86
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 88
            echo "             ";
            if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                // line 89
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">公司</button>
            ";
            }
            // line 91
            echo "            ";
            if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                // line 92
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 93
                    echo "                      ";
                    if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                        // line 94
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 96
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "            ";
            }
            // line 98
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
        <div  class=\"controls col-md-8 \" id=\"show-register-list\">
          <div class=\"form-group \"><ul class=\"sortable-list\" data-role=\"list\">
          </div>
            <div class=\"form-group\"><ul class=\"register-list sortable-list\" data-role=\"list\">
            ";
        // line 106
        if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerFieldNameArray")) {
            // line 107
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerFieldNameArray"));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 108
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "email")) {
                    // line 109
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
                
               ";
                }
                // line 115
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "nickname")) {
                    // line 116
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 121
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "password")) {
                    // line 122
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 127
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                    // line 128
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 130
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
                </li>
               ";
                }
                // line 133
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                    // line 134
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 136
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 139
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                    // line 140
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 142
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 145
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                    // line 146
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 148
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 151
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                    // line 152
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 154
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 157
                echo "               ";
                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                    // line 158
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                    // line 160
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
                </li>            
               ";
                }
                // line 163
                echo "               ";
                if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                    // line 164
                    echo "               ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 165
                        echo "                ";
                        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                            // line 166
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 168
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "registerSort"));
                            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                                if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"))) {
                                    echo "checked=true";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " name=\"registerSort[]\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                            echo twig_escape_filter($this->env, (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "html", null, true);
                            echo "\"></input> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "title"), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 171
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "               ";
                }
                // line 173
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "            ";
        } else {
            // line 175
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
            </li>
            ";
            // line 211
            if ((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields"))) {
                // line 212
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : $this->getContext($context, "userFields")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 213
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName"), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
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
                // line 218
                echo "            ";
            }
            // line 219
            echo "            ";
        }
        // line 220
        echo "            </ul>
            <span class=\"help-block pull-right\">可拖动调整先后次序.勾选后，在注册时就必须要填写该项目，将会增加注册难度，请谨慎使用</span>
          </div>
          <div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
        </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>欢迎信息设置</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 236
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("welcome_methods", array("message" => "站内私信", "email" => "电子邮件"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_methods"));
        echo "
        <div class=\"help-block\">新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 246
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_enabled"));
        echo "
        <div class=\"help-block\">欢迎信以站内私信的方式，发送给新用户。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">欢迎信息发送方</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_sender"), "html", null, true);
        echo "\">
        <div class=\"help-block\">通常为这个网站的管理员，请输入用户昵称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">欢迎信息标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_title"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">欢迎信息内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 285
        echo "
          <div>注意： 私信长度不能超过1000个字符</div>
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>服务条款设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">是否开启服务条款</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 298
        echo $this->env->getExtension('topxia_html_twig')->radios("user_terms", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms"));
        echo "
        <div class=\"help-block\">开启后用户注册时必须同意条款才能注册</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">条款内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\">";
        // line 308
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms_body"), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 320,  625 => 308,  612 => 298,  588 => 285,  583 => 275,  571 => 266,  558 => 256,  545 => 246,  532 => 236,  514 => 220,  511 => 219,  508 => 218,  495 => 215,  491 => 213,  486 => 212,  484 => 211,  446 => 175,  443 => 174,  437 => 173,  434 => 172,  428 => 171,  407 => 168,  403 => 166,  400 => 165,  395 => 164,  392 => 163,  377 => 160,  373 => 158,  370 => 157,  355 => 154,  351 => 152,  348 => 151,  333 => 148,  329 => 146,  326 => 145,  311 => 142,  307 => 140,  304 => 139,  289 => 136,  285 => 134,  282 => 133,  267 => 130,  263 => 128,  260 => 127,  253 => 122,  250 => 121,  243 => 116,  240 => 115,  232 => 109,  229 => 108,  224 => 107,  222 => 106,  213 => 99,  207 => 98,  204 => 97,  198 => 96,  192 => 94,  189 => 93,  184 => 92,  181 => 91,  177 => 89,  174 => 88,  170 => 86,  167 => 85,  163 => 83,  160 => 82,  156 => 80,  153 => 79,  149 => 77,  146 => 76,  142 => 74,  139 => 73,  135 => 71,  132 => 70,  128 => 68,  125 => 67,  121 => 65,  118 => 64,  114 => 63,  91 => 51,  86 => 41,  74 => 32,  59 => 20,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
