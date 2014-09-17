<?php

/* TopxiaWebBundle:Bootstrap:panel.html.twig */
class __TwigTemplate_880f89dd3724825f3c4292b035d49f69f5aa1da5a9ffe05752cb7dba12356902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["id"] = ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), null)) : (null));
        // line 2
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), null)) : (null));
        // line 3
        echo "<div ";
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
        }
        echo "class=\"panel panel-default ";
        if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        }
        echo "\">
  <div class=\"panel-heading\">";
        // line 4
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>
  <div class=\"panel-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 4
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  48 => 4,  42 => 5,  38 => 4,  25 => 3,  23 => 2,  21 => 1,  159 => 55,  157 => 49,  149 => 46,  141 => 40,  139 => 36,  131 => 33,  123 => 27,  121 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
