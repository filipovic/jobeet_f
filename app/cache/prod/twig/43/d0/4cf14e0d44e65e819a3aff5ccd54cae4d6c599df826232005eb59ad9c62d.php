<?php

/* EnsJobeetBundle:AffiliateAdmin:list__action_activate.html.twig */
class __TwigTemplate_43d04cf14e0d44e65e819a3aff5ccd54cae4d6c599df826232005eb59ad9c62d extends Twig_Template
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
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if (($this->getAttribute($_admin_, "isGranted", array(0 => "EDIT", 1 => $_object_), "method") && $this->getAttribute($_admin_, "hasRoute", array(0 => "activate"), "method"))) {
            // line 2
            echo "    <a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "activate", 1 => $_object_), "method"), "html", null, true);
            echo "\" class=\"btn edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_activate", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:AffiliateAdmin:list__action_activate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  141 => 49,  128 => 44,  103 => 35,  86 => 24,  83 => 23,  74 => 19,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 5,  190 => 97,  182 => 92,  177 => 90,  169 => 84,  167 => 82,  153 => 78,  148 => 77,  145 => 76,  135 => 74,  82 => 38,  23 => 2,  54 => 14,  31 => 8,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 82,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 42,  117 => 36,  108 => 54,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 18,  51 => 13,  48 => 7,  35 => 6,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  114 => 38,  109 => 37,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  28 => 4,  55 => 23,  43 => 7,  26 => 6,  24 => 4,  39 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  227 => 14,  224 => 13,  221 => 90,  207 => 70,  197 => 74,  195 => 99,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 52,  142 => 52,  136 => 44,  133 => 45,  130 => 42,  120 => 40,  105 => 53,  100 => 52,  75 => 24,  60 => 12,  53 => 19,  19 => 1,  98 => 40,  88 => 17,  80 => 22,  78 => 37,  46 => 12,  44 => 9,  40 => 15,  36 => 6,  32 => 5,  27 => 3,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 80,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 73,  124 => 57,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 17,  62 => 11,  59 => 12,  56 => 12,  52 => 10,  49 => 10,  45 => 16,  41 => 8,  37 => 7,  33 => 4,  30 => 3,);
    }
}
