<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c202002246baa34815ca5be1d1ae8fe098ef80009630ee8af0b7aa2f51dcd66b extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  98 => 40,  88 => 6,  80 => 41,  78 => 40,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
