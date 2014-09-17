<?php

/* TopxiaWebBundle:Default:promoted-teacher-block.html.twig */
class __TwigTemplate_8e2716a28b0a8f975898407f6cdc29cd30fa0f4925ebe80dec2dcd36b70fd904 extends Twig_Template
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
        if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
            // line 2
            echo "<div class=\"es-box\">
  <div class=\"es-box-heading\"><h2>名师风采</h2></div>
  <div class=\"es-box-body\">
    <div class=\"promoted-teacher\">
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "mediumAvatar"), ""), "html", null, true);
            echo "\" class=\"avatar\"></a>
      <a class=\"nickname\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname"), "html", null, true);
            echo "</a>
      <div class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title"), "html", null, true);
            echo "</div>
      <div class=\"about\">";
            // line 9
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "about"), 100);
            echo "</div>
      <div class=\"more\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id"))), "html", null, true);
            echo "\">去老师主页看看 &raquo;</a></div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:promoted-teacher-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  43 => 9,  39 => 8,  27 => 6,  21 => 2,  19 => 1,  575 => 245,  557 => 239,  551 => 237,  549 => 236,  544 => 234,  541 => 233,  535 => 230,  529 => 229,  523 => 228,  520 => 227,  517 => 226,  515 => 225,  511 => 223,  505 => 221,  502 => 220,  496 => 217,  490 => 216,  487 => 215,  484 => 214,  481 => 213,  479 => 212,  475 => 210,  472 => 209,  468 => 207,  464 => 205,  461 => 204,  458 => 203,  455 => 202,  451 => 200,  447 => 198,  445 => 197,  439 => 196,  431 => 193,  427 => 192,  424 => 191,  420 => 190,  417 => 189,  414 => 188,  403 => 187,  396 => 182,  386 => 175,  374 => 166,  369 => 164,  363 => 160,  361 => 159,  354 => 155,  349 => 152,  345 => 150,  340 => 147,  334 => 146,  323 => 141,  317 => 139,  313 => 137,  311 => 136,  305 => 135,  299 => 132,  295 => 131,  292 => 130,  289 => 129,  285 => 128,  281 => 126,  278 => 125,  276 => 124,  270 => 120,  265 => 117,  259 => 113,  253 => 109,  249 => 107,  246 => 106,  234 => 100,  230 => 99,  224 => 96,  220 => 95,  211 => 91,  207 => 90,  201 => 86,  196 => 85,  193 => 84,  191 => 83,  184 => 79,  179 => 76,  176 => 75,  171 => 71,  167 => 69,  163 => 67,  157 => 66,  147 => 63,  143 => 62,  140 => 61,  137 => 60,  133 => 59,  130 => 58,  127 => 57,  125 => 56,  119 => 53,  114 => 50,  111 => 48,  103 => 43,  98 => 40,  92 => 39,  90 => 38,  84 => 34,  82 => 33,  77 => 30,  73 => 28,  67 => 26,  65 => 25,  59 => 22,  50 => 15,  44 => 12,  40 => 10,  38 => 9,  33 => 7,  30 => 5,  25 => 2,);
    }
}
