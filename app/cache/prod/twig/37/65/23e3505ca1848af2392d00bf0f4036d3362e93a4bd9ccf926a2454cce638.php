<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_376523e3505ca1848af2392d00bf0f4036d3362e93a4bd9ccf926a2454cce638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (((($this->getAttribute($_field_description_, "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "id", array(0 => $_value_), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "name"), 1 => $_value_, 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 93,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 208,  780 => 205,  767 => 204,  761 => 202,  746 => 200,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 185,  676 => 184,  670 => 180,  666 => 178,  663 => 177,  657 => 176,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 130,  540 => 128,  533 => 149,  523 => 146,  520 => 145,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 128,  471 => 127,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 77,  309 => 76,  300 => 71,  290 => 68,  270 => 63,  228 => 55,  203 => 45,  353 => 89,  347 => 142,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 123,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 99,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 66,  164 => 58,  151 => 55,  132 => 50,  73 => 28,  139 => 41,  64 => 23,  61 => 13,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 93,  244 => 100,  238 => 84,  230 => 80,  225 => 82,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 98,  267 => 62,  262 => 59,  248 => 56,  243 => 86,  229 => 80,  218 => 77,  210 => 87,  205 => 48,  199 => 70,  191 => 69,  123 => 46,  42 => 64,  94 => 30,  91 => 12,  185 => 54,  176 => 41,  172 => 59,  165 => 74,  159 => 63,  144 => 25,  87 => 43,  68 => 17,  79 => 30,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 7,  234 => 87,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 58,  153 => 68,  148 => 51,  145 => 76,  135 => 49,  82 => 9,  23 => 3,  54 => 153,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 101,  365 => 91,  362 => 90,  359 => 90,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 86,  307 => 73,  302 => 72,  295 => 70,  287 => 68,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 52,  201 => 66,  143 => 52,  138 => 38,  134 => 45,  131 => 22,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 10,  72 => 198,  69 => 23,  51 => 19,  48 => 18,  35 => 16,  29 => 34,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 60,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 73,  198 => 71,  194 => 45,  150 => 67,  147 => 66,  127 => 21,  112 => 29,  96 => 21,  76 => 29,  71 => 16,  110 => 42,  89 => 17,  65 => 5,  63 => 4,  58 => 12,  34 => 41,  114 => 24,  109 => 27,  106 => 20,  101 => 38,  85 => 16,  77 => 17,  67 => 24,  28 => 14,  55 => 23,  43 => 18,  26 => 13,  24 => 2,  39 => 16,  57 => 20,  50 => 78,  47 => 75,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 90,  207 => 70,  197 => 84,  195 => 70,  192 => 66,  189 => 81,  186 => 66,  181 => 78,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 31,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 21,  53 => 80,  19 => 11,  98 => 29,  88 => 25,  80 => 22,  78 => 40,  46 => 19,  44 => 74,  40 => 44,  36 => 16,  32 => 35,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 76,  215 => 73,  211 => 47,  208 => 49,  202 => 68,  196 => 46,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 36,  166 => 36,  163 => 80,  160 => 71,  157 => 48,  149 => 51,  146 => 60,  140 => 24,  137 => 37,  129 => 47,  124 => 27,  121 => 56,  118 => 30,  115 => 26,  111 => 23,  107 => 17,  104 => 39,  97 => 38,  93 => 45,  90 => 35,  81 => 15,  70 => 33,  66 => 22,  62 => 165,  59 => 22,  56 => 81,  52 => 113,  49 => 112,  45 => 66,  41 => 4,  37 => 43,  33 => 15,  30 => 3,);
    }
}
