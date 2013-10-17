<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_7458fada654d989e14fe4dd2507ceaba2f2f8a7361143693940b7e593cb18a6b extends Twig_Template
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
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            // line 16
            echo "        ";
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if ((($this->getAttribute($_field_description_, "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
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
                // line 19
                echo "            ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $_field_description_), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 242,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 169,  303 => 156,  235 => 124,  213 => 76,  188 => 67,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 93,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 77,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 55,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 149,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 126,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 66,  164 => 58,  151 => 55,  132 => 50,  73 => 25,  139 => 41,  64 => 23,  61 => 22,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 136,  244 => 100,  238 => 84,  230 => 80,  225 => 81,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 111,  205 => 73,  199 => 71,  191 => 69,  123 => 46,  42 => 13,  94 => 30,  91 => 12,  185 => 54,  176 => 93,  172 => 61,  165 => 90,  159 => 63,  144 => 25,  87 => 29,  68 => 17,  79 => 30,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 50,  234 => 86,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 58,  153 => 56,  148 => 51,  145 => 53,  135 => 75,  82 => 9,  23 => 18,  54 => 38,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 234,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 101,  365 => 91,  362 => 90,  359 => 90,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 166,  307 => 73,  302 => 72,  295 => 70,  287 => 148,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 52,  201 => 66,  143 => 76,  138 => 38,  134 => 45,  131 => 48,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 28,  72 => 198,  69 => 23,  51 => 19,  48 => 18,  35 => 16,  29 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 134,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 73,  198 => 71,  194 => 45,  150 => 67,  147 => 66,  127 => 71,  112 => 29,  96 => 60,  76 => 29,  71 => 16,  110 => 42,  89 => 17,  65 => 5,  63 => 4,  58 => 12,  34 => 16,  114 => 24,  109 => 27,  106 => 20,  101 => 61,  85 => 53,  77 => 17,  67 => 24,  28 => 14,  55 => 23,  43 => 18,  26 => 20,  24 => 12,  39 => 17,  57 => 20,  50 => 78,  47 => 75,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 79,  207 => 70,  197 => 84,  195 => 70,  192 => 69,  189 => 81,  186 => 66,  181 => 78,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 81,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 40,  53 => 80,  19 => 11,  98 => 29,  88 => 25,  80 => 52,  78 => 40,  46 => 19,  44 => 74,  40 => 44,  36 => 16,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 119,  215 => 73,  211 => 47,  208 => 49,  202 => 107,  196 => 70,  193 => 102,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 80,  160 => 58,  157 => 48,  149 => 51,  146 => 60,  140 => 24,  137 => 50,  129 => 47,  124 => 27,  121 => 69,  118 => 30,  115 => 67,  111 => 23,  107 => 63,  104 => 39,  97 => 38,  93 => 45,  90 => 35,  81 => 15,  70 => 24,  66 => 22,  62 => 165,  59 => 21,  56 => 81,  52 => 113,  49 => 19,  45 => 33,  41 => 4,  37 => 17,  33 => 15,  30 => 3,);
    }
}
