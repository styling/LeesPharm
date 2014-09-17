<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_270291e93b3f60dad6d4461d4d2153248ab2418431b723dd8dd31c2fda9c0bb4 extends Twig_Template
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
        // line 14
        echo "
";
        // line 22
        echo "
";
        // line 45
        echo "
";
    }

    // line 1
    public function getuser_avatar($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a class=\"user-link user-avatar-link ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
    <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smallAvatar"), ""), "html", null, true);
            echo "\">
  </a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getuser_link($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "  ";
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 9
                echo "    <a ";
                if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname"), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 11
                echo "    <span class=\"text-muted\">用户已删除</span>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getflash_messages()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 17
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 18
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                    echo "\">";
                    echo (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"));
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getbytesToSize($_bytes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $_bytes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "  ";
            ob_start();
            // line 25
            echo "      
      ";
            // line 26
            $context["kilobyte"] = 1024;
            // line 27
            echo "      ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 28
            echo "      ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")) * 1024);
            // line 29
            echo "      ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")) * 1024);
            // line 30
            echo "
      ";
            // line 31
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 32
                echo "          ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 34
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")))) {
                // line 36
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte")))) {
                // line 38
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 40
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 42
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getpaginator($_paginator = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage") > 1)) {
                // line 48
                echo "    <ul  class=\"pagination\">
      ";
                // line 49
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage") == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage"))) {
                    // line 50
                    echo "        <li class=\"disabled\"><span>上一页</span></li>
      ";
                } else {
                    // line 52
                    echo "        <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage")), "method"), "html", null, true);
                    echo "\">上一页</a></li>
      ";
                }
                // line 54
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 55
                    echo "        <li ";
                    if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage"))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "
      ";
                // line 58
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage") == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage"))) {
                    // line 59
                    echo "        <li class=\"disabled\"><span>下一页</span></li>
      ";
                } else {
                    // line 61
                    echo "        <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage")), "method"), "html", null, true);
                    echo "\">下一页</a></li>
      ";
                }
                // line 63
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 63,  283 => 61,  279 => 59,  277 => 58,  274 => 57,  254 => 54,  248 => 52,  242 => 49,  236 => 47,  225 => 46,  206 => 40,  200 => 38,  188 => 34,  180 => 31,  177 => 30,  174 => 29,  168 => 27,  166 => 26,  163 => 25,  123 => 18,  118 => 17,  113 => 16,  49 => 3,  42 => 2,  25 => 45,  22 => 22,  19 => 14,  416 => 135,  411 => 118,  405 => 136,  403 => 135,  396 => 131,  381 => 129,  376 => 128,  374 => 127,  368 => 124,  361 => 119,  358 => 118,  352 => 115,  347 => 112,  345 => 111,  336 => 104,  331 => 102,  327 => 101,  322 => 100,  316 => 98,  313 => 97,  305 => 93,  298 => 90,  296 => 89,  291 => 87,  287 => 86,  282 => 84,  275 => 82,  271 => 80,  265 => 79,  259 => 55,  250 => 74,  244 => 50,  239 => 48,  233 => 68,  231 => 67,  226 => 66,  224 => 65,  218 => 62,  212 => 42,  196 => 54,  194 => 36,  179 => 43,  164 => 26,  159 => 24,  155 => 23,  151 => 22,  147 => 21,  142 => 20,  139 => 19,  134 => 20,  116 => 11,  109 => 141,  104 => 15,  102 => 42,  93 => 40,  89 => 38,  81 => 34,  71 => 29,  68 => 19,  62 => 7,  60 => 16,  56 => 15,  48 => 13,  44 => 12,  29 => 2,  27 => 1,  222 => 77,  210 => 68,  204 => 56,  193 => 59,  187 => 58,  182 => 32,  176 => 42,  171 => 28,  165 => 52,  154 => 49,  149 => 23,  143 => 46,  135 => 43,  129 => 12,  126 => 41,  124 => 40,  120 => 39,  114 => 38,  107 => 140,  94 => 28,  90 => 27,  84 => 26,  80 => 25,  74 => 8,  69 => 22,  63 => 21,  57 => 17,  55 => 16,  43 => 7,  40 => 11,  37 => 5,  30 => 1,  172 => 74,  167 => 71,  160 => 24,  148 => 62,  144 => 61,  140 => 45,  131 => 54,  125 => 51,  121 => 50,  117 => 49,  112 => 46,  108 => 44,  106 => 43,  100 => 29,  91 => 11,  87 => 37,  82 => 34,  77 => 9,  58 => 16,  52 => 14,  50 => 13,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 5,);
    }
}
