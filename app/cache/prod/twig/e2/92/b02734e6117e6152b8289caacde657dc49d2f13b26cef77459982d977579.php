<?php

/* TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig */
class __TwigTemplate_e292b02734e6117e6152b8289caacde657dc49d2f13b26cef77459982d977579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:layout.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "quiz-question/my-favorite";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if ((isset($context["favoriteQuestions"]) ? $context["favoriteQuestions"] : $this->getContext($context, "favoriteQuestions"))) {
            // line 8
            echo "    <table class=\"table table-striped table-hover\">
    \t<tbody>
    \t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoriteQuestions"]) ? $context["favoriteQuestions"] : $this->getContext($context, "favoriteQuestions")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["favoriteQuestion"]) {
                // line 11
                echo "    \t\t\t";
                $context["paper"] = $this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : $this->getContext($context, "testpapers")), $this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : $this->getContext($context, "targets")), $this->getAttribute((isset($context["favoriteQuestion"]) ? $context["favoriteQuestion"] : $this->getContext($context, "favoriteQuestion")), "target"), array(), "array"), "id"), array(), "array");
                // line 12
                echo "    \t\t\t";
                $context["question"] = $this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $this->getAttribute((isset($context["favoriteQuestion"]) ? $context["favoriteQuestion"] : $this->getContext($context, "favoriteQuestion")), "questionId"), array(), "array");
                // line 13
                echo "    \t\t\t
    \t\t\t\t";
                // line 14
                $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:my-favorite-question-tr.html.twig")->display($context);
                // line 15
                echo "
    \t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoriteQuestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    \t</tbody>
    </table>
  ";
        } else {
            // line 20
            echo "    <div class=\"empty\">还没有收藏的题目</div>
  ";
        }
        // line 22
        echo "
";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-favorite-question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  94 => 22,  90 => 20,  85 => 17,  70 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  42 => 10,  38 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
