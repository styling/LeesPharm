<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_32b2ef909dab1ffbe8458c1232f2b1dffbe06e36f82d0c3f0bac1f6d53a8a3ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<div class=\"modal-dialog";
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 9
        if ((!((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : $this->getContext($context, "hide_footer")), false)) : (false)))) {
            // line 10
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 12
        echo "  </div>
</div>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  62 => 8,  57 => 6,  46 => 10,  44 => 9,  40 => 8,  35 => 6,  24 => 2,  22 => 1,  233 => 104,  230 => 103,  227 => 102,  216 => 95,  213 => 94,  205 => 89,  200 => 86,  198 => 85,  190 => 80,  186 => 79,  167 => 65,  159 => 61,  157 => 60,  147 => 55,  141 => 52,  133 => 47,  126 => 45,  114 => 38,  107 => 34,  97 => 29,  89 => 24,  80 => 20,  76 => 18,  70 => 16,  64 => 14,  61 => 13,  55 => 12,  52 => 12,  49 => 10,  39 => 7,  36 => 6,  31 => 107,  29 => 4,  27 => 3,);
    }
}
