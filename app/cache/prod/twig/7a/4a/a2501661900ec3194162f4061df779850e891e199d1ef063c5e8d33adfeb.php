<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_7a4aa2501661900ec3194162f4061df779850e891e199d1ef063c5e8d33adfeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $_edit_, "html", null, true);
        echo "-";
        if (isset($context["inline"])) { $_inline_ = $context["inline"]; } else { $_inline_ = null; }
        echo twig_escape_filter($this->env, $_inline_, "html", null, true);
        echo " ";
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ($this->getAttribute($_field_description_, "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($_field_description_, "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        echo $this->getAttribute($_field_description_, "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 72,  280 => 69,  259 => 67,  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 125,  400 => 133,  392 => 129,  342 => 109,  336 => 111,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 83,  289 => 69,  284 => 70,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 136,  411 => 106,  401 => 122,  398 => 121,  393 => 118,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 108,  320 => 80,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 51,  175 => 76,  113 => 143,  20 => 1,  179 => 48,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 30,  139 => 42,  64 => 27,  61 => 18,  99 => 39,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 47,  168 => 46,  154 => 48,  116 => 26,  126 => 46,  119 => 44,  95 => 74,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 30,  42 => 19,  94 => 33,  91 => 37,  185 => 54,  176 => 64,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 26,  68 => 20,  79 => 27,  161 => 44,  141 => 49,  128 => 44,  103 => 139,  86 => 14,  83 => 13,  74 => 19,  234 => 57,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 47,  145 => 53,  135 => 40,  82 => 34,  23 => 11,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 115,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 33,  122 => 37,  117 => 37,  108 => 54,  102 => 40,  92 => 37,  84 => 35,  72 => 29,  69 => 28,  51 => 21,  48 => 21,  35 => 15,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 68,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 31,  112 => 42,  96 => 38,  76 => 30,  71 => 27,  110 => 142,  89 => 32,  65 => 24,  63 => 26,  58 => 25,  34 => 16,  114 => 44,  109 => 23,  106 => 140,  101 => 36,  85 => 29,  77 => 24,  67 => 29,  28 => 14,  55 => 23,  43 => 16,  26 => 12,  24 => 11,  39 => 18,  57 => 24,  50 => 20,  47 => 22,  38 => 20,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 51,  189 => 50,  186 => 66,  181 => 55,  178 => 63,  173 => 47,  162 => 56,  158 => 43,  155 => 42,  152 => 58,  142 => 55,  136 => 34,  133 => 47,  130 => 46,  120 => 38,  105 => 19,  100 => 138,  75 => 31,  60 => 25,  53 => 16,  19 => 11,  98 => 17,  88 => 36,  80 => 32,  78 => 29,  46 => 14,  44 => 26,  40 => 25,  36 => 13,  32 => 15,  27 => 16,  22 => 12,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 49,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 46,  157 => 48,  149 => 39,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 30,  121 => 77,  118 => 36,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 65,  90 => 15,  81 => 21,  70 => 25,  66 => 17,  62 => 27,  59 => 15,  56 => 21,  52 => 14,  49 => 15,  45 => 17,  41 => 21,  37 => 14,  33 => 16,  30 => 16,);
    }
}
