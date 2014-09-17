<?php

/* TopxiaWebBundle:Default:latest-reviews-block.html.twig */
class __TwigTemplate_c79ebe3ed9f44282a8a05068479bcbeab43a1550c2070639be8e668479fcf413 extends Twig_Template
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
        echo "<div class=\"es-box\">
\t<div class=\"es-box-heading\"><h2>学员评价</h2></div>
<ul class=\"media-list latest-review-list\">
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 5
            echo "\t  ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "userId"), array(), "array"), null)) : (null));
            // line 6
            echo "\t  ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "courseId"), array(), "array"), null)) : (null));
            // line 7
            echo "\t  ";
            if (((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")) && (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))) {
                // line 8
                echo "\t\t  <li class=\"media\">
\t\t  \t<a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id"))), "html", null, true);
                echo "\" class=\"author-picture-link\">
\t\t\t  \t<img class=\"author-picture\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "smallAvatar"), ""), "html", null, true);
                echo "\">
\t\t  \t</a>
\t\t  \t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id"))), "html", null, true);
                echo "\" class=\"author-nickname\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "nickname"), "html", null, true);
                echo "</a> <span class=\"text-muted\">说：</span> <br>
\t\t  \t<div class=\"review-content\">";
                // line 13
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "content"), 50);
                echo "</div>

\t\t\t  <div class=\"review-footer\">
\t\t\t\t  <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\" class=\"course-title\"> 《 ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title"), "html", null, true);
                echo " 》</a>
\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t  <span class=\"stars-";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["review"]) ? $context["review"] : $this->getContext($context, "review")), "rating"), "html", null, true);
                echo "\">&nbsp;</span>
\t\t\t  </div>

\t\t  </li>
\t  ";
            }
            // line 23
            echo "\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t  <li class=\"empty\">还没有评价</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  69 => 18,  62 => 16,  56 => 13,  45 => 10,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  24 => 4,  47 => 10,  43 => 9,  39 => 8,  27 => 6,  21 => 2,  19 => 1,  575 => 245,  557 => 239,  551 => 237,  549 => 236,  544 => 234,  541 => 233,  535 => 230,  529 => 229,  523 => 228,  520 => 227,  517 => 226,  515 => 225,  511 => 223,  505 => 221,  502 => 220,  496 => 217,  490 => 216,  487 => 215,  484 => 214,  481 => 213,  479 => 212,  475 => 210,  472 => 209,  468 => 207,  464 => 205,  461 => 204,  458 => 203,  455 => 202,  451 => 200,  447 => 198,  445 => 197,  439 => 196,  431 => 193,  427 => 192,  424 => 191,  420 => 190,  417 => 189,  414 => 188,  403 => 187,  396 => 182,  386 => 175,  374 => 166,  369 => 164,  363 => 160,  361 => 159,  354 => 155,  349 => 152,  345 => 150,  340 => 147,  334 => 146,  323 => 141,  317 => 139,  313 => 137,  311 => 136,  305 => 135,  299 => 132,  295 => 131,  292 => 130,  289 => 129,  285 => 128,  281 => 126,  278 => 125,  276 => 124,  270 => 120,  265 => 117,  259 => 113,  253 => 109,  249 => 107,  246 => 106,  234 => 100,  230 => 99,  224 => 96,  220 => 95,  211 => 91,  207 => 90,  201 => 86,  196 => 85,  193 => 84,  191 => 83,  184 => 79,  179 => 76,  176 => 75,  171 => 71,  167 => 69,  163 => 67,  157 => 66,  147 => 63,  143 => 62,  140 => 61,  137 => 60,  133 => 59,  130 => 58,  127 => 57,  125 => 56,  119 => 53,  114 => 50,  111 => 48,  103 => 43,  98 => 40,  92 => 39,  90 => 38,  84 => 34,  82 => 24,  77 => 23,  73 => 28,  67 => 26,  65 => 25,  59 => 22,  50 => 12,  44 => 12,  40 => 10,  38 => 8,  33 => 7,  30 => 5,  25 => 2,);
    }
}
