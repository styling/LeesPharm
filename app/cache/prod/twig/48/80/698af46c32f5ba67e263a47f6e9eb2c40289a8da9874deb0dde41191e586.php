<?php

/* TopxiaWebBundle:Group:groups-ul.html.twig */
class __TwigTemplate_4880698af46c32f5ba67e263a47f6e9eb2c40289a8da9874deb0dde41191e586 extends Twig_Template
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
        echo "<ul class=\"list-unstyled\">
  ";
        // line 2
        if ((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) {
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 5
                echo "      ";
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status") == "open")) {
                    echo " 
            <li class=\"col-md-";
                    // line 6
                    echo twig_escape_filter($this->env, ((array_key_exists("colNum", $context)) ? (_twig_default_filter((isset($context["colNum"]) ? $context["colNum"] : $this->getContext($context, "colNum")), 4)) : (4)), "html", null, true);
                    echo "\"> 

                  <div class=\"panel\">
              
                        <div class=\"media\">
                            <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id"))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                    echo "\" class=\"pull-left\">
                              ";
                    // line 12
                    if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "logo")) {
                        // line 13
                        echo "                              <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "logo")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                        echo "\" style=\"width:58px;height:58px;\" >
                              ";
                    } else {
                        // line 15
                        echo "                              <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                        echo "\"  style=\"width:58px;height:58px;\">
                              ";
                    }
                    // line 17
                    echo "                            </a>
                            <div class=\"media-body\">
                              <p style=\"margin:0 0 10px;\"><a  href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id"))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title"), 10);
                    echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "memberNum"), "html", null, true);
                    echo "个成员&nbsp;
                                ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "threadNum"), "html", null, true);
                    echo "个话题
                              </div>
                            </div> 
                          </div>
                   
                    </div>

              </li>
        ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
  ";
        } else {
            // line 34
            echo "        <div class=\"empty\">暂无小组信息！</div>
  ";
        }
        // line 36
        echo "      
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  103 => 32,  97 => 31,  85 => 22,  81 => 21,  72 => 19,  68 => 17,  60 => 15,  52 => 13,  50 => 12,  44 => 11,  36 => 6,  31 => 5,  27 => 4,  24 => 3,  46 => 5,  30 => 3,  22 => 2,  19 => 1,  53 => 5,  48 => 4,  42 => 5,  38 => 4,  25 => 3,  23 => 2,  21 => 1,  159 => 55,  157 => 49,  149 => 46,  141 => 40,  139 => 36,  131 => 33,  123 => 27,  121 => 24,  113 => 21,  109 => 19,  107 => 34,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
