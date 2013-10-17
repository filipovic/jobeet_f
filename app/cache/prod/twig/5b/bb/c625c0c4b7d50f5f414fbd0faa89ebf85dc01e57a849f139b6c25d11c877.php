<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_5bbbc625c0c4b7d50f5f414fbd0faa89ebf85dc01e57a849f139b6c25d11c877 extends Twig_Template
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
        echo "[exception] ";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, (((($_status_code_ . " | ") . $_status_text_) . " | ") . $this->getAttribute($_exception_, "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo "
";
        // line 3
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
            echo "] ";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "class"), "html", null, true);
            echo ": ";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "message"), "html", null, true);
            echo "
";
            // line 5
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => $_e_));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  43 => 14,  26 => 5,  24 => 4,  39 => 7,  57 => 9,  50 => 7,  47 => 6,  38 => 13,  25 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 28,  75 => 24,  60 => 21,  53 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 41,  78 => 25,  46 => 10,  44 => 9,  40 => 16,  36 => 6,  32 => 3,  27 => 2,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 16,  59 => 11,  56 => 20,  52 => 6,  49 => 5,  45 => 7,  41 => 8,  37 => 4,  33 => 10,  30 => 4,);
    }
}
