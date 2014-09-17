<?php

/* TopxiaWebBundle:MyTeaching:threads.html.twig */
class __TwigTemplate_1a60a52a4ec01d6a1693037d976dfc5c65ec9c0cd3caaf2619f2ad4dd2148a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
            // line 21
            $context["side_nav"] = "my-teaching-questions";
        } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "discussion")) {
            // line 23
            $context["side_nav"] = "my-teaching-discussions";
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 

";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
            // line 6
            echo "\t学员问答
";
            // line 7
            $context["side_nav"] = "my-teaching-questions";
            // line 8
            echo "
";
        } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "discussion")) {
            // line 10
            echo "\t学员话题
";
            // line 11
            $context["side_nav"] = "my-teaching-discussions";
            // line 12
            echo "
";
        }
        // line 14
        echo "
- ";
        // line 15
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
<div class=\"panel panel-default panel-col\">
  \t<div class=\"panel-heading\">
\t\t";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
            // line 31
            echo "\t\t\t学员问答
\t\t";
        } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "discussion")) {
            // line 33
            echo "\t\t\t学员话题
\t\t";
        }
        // line 35
        echo "\t</div>

  <div class=\"panel-body\">

    ";
        // line 39
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 40
            echo "\t    ";
            $this->env->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig")->display(array_merge($context, array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))));
            // line 41
            echo "\t  ";
        } else {
            // line 42
            echo "\t  
\t  \t";
            // line 43
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "question")) {
                // line 44
                echo "\t\t\t<div class=\"empty\">您的课程中还没有学员提问过...</div>
\t\t";
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "discussion")) {
                // line 46
                echo "\t\t\t<div class=\"empty\">您的课程中还没有学员话题...</div>
\t\t";
            }
            // line 48
            echo "\t    
\t  ";
        }
        // line 50
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  118 => 48,  114 => 46,  110 => 44,  108 => 43,  105 => 42,  102 => 41,  99 => 40,  97 => 39,  91 => 35,  87 => 33,  83 => 31,  81 => 30,  76 => 27,  73 => 26,  66 => 15,  63 => 14,  59 => 12,  57 => 11,  54 => 10,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 3,  31 => 23,  28 => 21,  26 => 20,);
    }
}
