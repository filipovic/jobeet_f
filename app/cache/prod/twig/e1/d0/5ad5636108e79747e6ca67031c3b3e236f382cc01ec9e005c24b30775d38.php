<?php

/* EnsJobeetBundle:Api:jobs.xml.twig */
class __TwigTemplate_e1d05ad5636108e79747e6ca67031c3b3e236f382cc01ec9e005c24b30775d38 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<jobs>
";
        // line 3
        if (isset($context["jobs"])) { $_jobs_ = $context["jobs"]; } else { $_jobs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jobs_);
        foreach ($context['_seq'] as $context["url"] => $context["job"]) {
            // line 4
            echo "    <job url=\"";
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            echo twig_escape_filter($this->env, $_url_, "html", null, true);
            echo "\">
";
            // line 5
            if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_job_);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 6
                echo "        <";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo ">";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "</";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo ">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </job>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['url'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</jobs>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Api:jobs.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  64 => 14,  61 => 13,  99 => 22,  317 => 115,  296 => 106,  282 => 100,  276 => 98,  268 => 94,  263 => 93,  244 => 86,  238 => 84,  230 => 80,  225 => 79,  200 => 70,  168 => 58,  154 => 48,  116 => 38,  126 => 34,  119 => 31,  95 => 23,  316 => 115,  306 => 109,  301 => 108,  286 => 101,  275 => 98,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 73,  205 => 72,  199 => 70,  191 => 66,  123 => 42,  42 => 8,  94 => 23,  91 => 26,  185 => 54,  176 => 51,  172 => 59,  165 => 45,  159 => 44,  144 => 39,  87 => 24,  68 => 17,  79 => 18,  161 => 56,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 20,  74 => 17,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 90,  169 => 84,  167 => 58,  153 => 52,  148 => 51,  145 => 76,  135 => 45,  82 => 16,  23 => 3,  54 => 12,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 109,  302 => 108,  295 => 106,  287 => 101,  279 => 78,  256 => 91,  251 => 71,  239 => 69,  231 => 82,  219 => 77,  201 => 66,  143 => 49,  138 => 38,  134 => 45,  131 => 29,  122 => 42,  117 => 36,  108 => 54,  102 => 23,  92 => 25,  84 => 23,  72 => 16,  69 => 11,  51 => 14,  48 => 13,  35 => 4,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 100,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 84,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 40,  127 => 36,  112 => 29,  96 => 21,  76 => 14,  71 => 16,  110 => 37,  89 => 22,  65 => 11,  63 => 18,  58 => 12,  34 => 5,  114 => 29,  109 => 27,  106 => 20,  101 => 26,  85 => 20,  77 => 17,  67 => 15,  28 => 4,  55 => 8,  43 => 8,  26 => 6,  24 => 2,  39 => 6,  57 => 11,  50 => 10,  47 => 8,  38 => 7,  25 => 5,  227 => 14,  224 => 79,  221 => 90,  207 => 70,  197 => 74,  195 => 56,  192 => 66,  189 => 61,  186 => 65,  181 => 63,  178 => 61,  173 => 59,  162 => 56,  158 => 56,  155 => 55,  152 => 52,  142 => 38,  136 => 37,  133 => 45,  130 => 36,  120 => 34,  105 => 24,  100 => 52,  75 => 19,  60 => 12,  53 => 7,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 19,  46 => 9,  44 => 7,  40 => 8,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 51,  146 => 44,  140 => 46,  137 => 37,  129 => 44,  124 => 42,  121 => 32,  118 => 30,  115 => 26,  111 => 37,  107 => 28,  104 => 27,  97 => 24,  93 => 20,  90 => 22,  81 => 22,  70 => 18,  66 => 19,  62 => 10,  59 => 14,  56 => 13,  52 => 11,  49 => 10,  45 => 9,  41 => 4,  37 => 7,  33 => 4,  30 => 3,);
    }
}
