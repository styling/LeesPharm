<?php

/* TopxiaWebBundle:My:avatar-alert.html.twig */
class __TwigTemplate_190c79ced826348cb7617338d1fe6d857aa6d31ab5441b3a6bd29732c725a374 extends Twig_Template
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
        if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : $this->getContext($context, "avatarAlert"))) {
            // line 2
            echo "
 <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>您还没有头像</strong>。拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a>
 </div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  96 => 14,  92 => 12,  73 => 9,  70 => 8,  32 => 5,  289 => 63,  283 => 61,  279 => 59,  277 => 58,  274 => 57,  254 => 54,  248 => 52,  242 => 49,  236 => 47,  225 => 46,  206 => 40,  200 => 38,  188 => 34,  180 => 31,  177 => 30,  174 => 29,  168 => 27,  166 => 26,  163 => 25,  123 => 18,  118 => 17,  113 => 16,  49 => 3,  42 => 6,  25 => 45,  22 => 2,  19 => 1,  416 => 135,  411 => 118,  405 => 136,  403 => 135,  396 => 131,  381 => 129,  376 => 128,  374 => 127,  368 => 124,  361 => 119,  358 => 118,  352 => 115,  347 => 112,  345 => 111,  336 => 104,  331 => 102,  327 => 101,  322 => 100,  316 => 98,  313 => 97,  305 => 93,  298 => 90,  296 => 89,  291 => 87,  287 => 86,  282 => 84,  275 => 82,  271 => 80,  265 => 79,  259 => 55,  250 => 74,  244 => 50,  239 => 48,  233 => 68,  231 => 67,  226 => 66,  224 => 65,  218 => 62,  212 => 42,  196 => 54,  194 => 36,  179 => 43,  164 => 26,  159 => 24,  155 => 23,  151 => 22,  147 => 21,  142 => 20,  139 => 19,  134 => 20,  116 => 11,  109 => 141,  104 => 15,  102 => 42,  93 => 40,  89 => 38,  81 => 34,  71 => 29,  68 => 7,  62 => 7,  60 => 16,  56 => 15,  48 => 13,  44 => 12,  29 => 4,  27 => 1,  222 => 77,  210 => 68,  204 => 56,  193 => 59,  187 => 58,  182 => 32,  176 => 42,  171 => 28,  165 => 52,  154 => 49,  149 => 23,  143 => 46,  135 => 43,  129 => 12,  126 => 41,  124 => 40,  120 => 39,  114 => 38,  107 => 140,  94 => 28,  90 => 27,  84 => 26,  80 => 25,  74 => 8,  69 => 22,  63 => 21,  57 => 17,  55 => 16,  43 => 7,  40 => 11,  37 => 5,  30 => 1,  172 => 74,  167 => 71,  160 => 24,  148 => 62,  144 => 61,  140 => 45,  131 => 54,  125 => 51,  121 => 50,  117 => 49,  112 => 46,  108 => 44,  106 => 17,  100 => 16,  91 => 11,  87 => 37,  82 => 34,  77 => 10,  58 => 16,  52 => 14,  50 => 13,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 5,);
    }
}
