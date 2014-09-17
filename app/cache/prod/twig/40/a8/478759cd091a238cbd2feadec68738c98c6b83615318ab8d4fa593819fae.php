<?php

/* TopxiaWebBundle:Group:hot-thread.html.twig */
class __TwigTemplate_40a8478759cd091a238cbd2feadec68738c98c6b83615318ab8d4fa593819fae extends Twig_Template
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
        echo "<ul class=\"text-list\">
    ";
        // line 2
        if ((isset($context["hotThreads"]) ? $context["hotThreads"] : $this->getContext($context, "hotThreads"))) {
            // line 3
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hotThreads"]) ? $context["hotThreads"] : $this->getContext($context, "hotThreads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 4
                echo "        <li style=\"border-bottom:none;background:url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\"><a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "groupId"), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title"), ((array_key_exists("textNum", $context)) ? (_twig_default_filter((isset($context["textNum"]) ? $context["textNum"] : $this->getContext($context, "textNum")), "15")) : ("15")));
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        <div class=\"empty\">暂无话题信息！</div>
    ";
        }
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:hot-thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  42 => 6,  22 => 2,  89 => 26,  69 => 18,  62 => 16,  56 => 13,  45 => 7,  41 => 9,  35 => 7,  32 => 6,  29 => 4,  24 => 3,  47 => 10,  43 => 9,  39 => 8,  27 => 6,  21 => 2,  19 => 1,  575 => 245,  557 => 239,  551 => 237,  549 => 236,  544 => 234,  541 => 233,  535 => 230,  529 => 229,  523 => 228,  520 => 227,  517 => 226,  515 => 225,  511 => 223,  505 => 221,  502 => 220,  496 => 217,  490 => 216,  487 => 215,  484 => 214,  481 => 213,  479 => 212,  475 => 210,  472 => 209,  468 => 207,  464 => 205,  461 => 204,  458 => 203,  455 => 202,  451 => 200,  447 => 198,  445 => 197,  439 => 196,  431 => 193,  427 => 192,  424 => 191,  420 => 190,  417 => 189,  414 => 188,  403 => 187,  396 => 182,  386 => 175,  374 => 166,  369 => 164,  363 => 160,  361 => 159,  354 => 155,  349 => 152,  345 => 150,  340 => 147,  334 => 146,  323 => 141,  317 => 139,  313 => 137,  311 => 136,  305 => 135,  299 => 132,  295 => 131,  292 => 130,  289 => 129,  285 => 128,  281 => 126,  278 => 125,  276 => 124,  270 => 120,  265 => 117,  259 => 113,  253 => 109,  249 => 107,  246 => 106,  234 => 100,  230 => 99,  224 => 96,  220 => 95,  211 => 91,  207 => 90,  201 => 86,  196 => 85,  193 => 84,  191 => 83,  184 => 79,  179 => 76,  176 => 75,  171 => 71,  167 => 69,  163 => 67,  157 => 66,  147 => 63,  143 => 62,  140 => 61,  137 => 60,  133 => 59,  130 => 58,  127 => 57,  125 => 56,  119 => 53,  114 => 50,  111 => 48,  103 => 43,  98 => 40,  92 => 39,  90 => 38,  84 => 34,  82 => 24,  77 => 23,  73 => 28,  67 => 26,  65 => 25,  59 => 22,  50 => 12,  44 => 12,  40 => 10,  38 => 8,  33 => 7,  30 => 5,  25 => 2,);
    }
}
