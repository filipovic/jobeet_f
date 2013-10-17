<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_b88bc5cedfd44dd57ec050ae8b67d61370db19d9e9f07210d0bb7a2610e0ab0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_field_element_, "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($_field_description_, "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br />
        ";
    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        if (isset($context["field_element"])) { $_field_element_ = $context["field_element"]; } else { $_field_element_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_field_element_, 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 109,  336 => 107,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 106,  303 => 156,  235 => 73,  213 => 76,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 105,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 75,  216 => 51,  175 => 76,  113 => 41,  20 => 1,  179 => 57,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 31,  139 => 42,  64 => 27,  61 => 26,  99 => 39,  317 => 81,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 52,  154 => 48,  116 => 36,  126 => 46,  119 => 44,  95 => 18,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 43,  42 => 25,  94 => 33,  91 => 37,  185 => 54,  176 => 64,  172 => 62,  165 => 62,  159 => 58,  144 => 44,  87 => 26,  68 => 25,  79 => 32,  161 => 60,  141 => 49,  128 => 44,  103 => 40,  86 => 25,  83 => 33,  74 => 19,  234 => 73,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 46,  148 => 47,  145 => 53,  135 => 40,  82 => 29,  23 => 13,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 99,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 81,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 76,  138 => 52,  134 => 45,  131 => 43,  122 => 37,  117 => 37,  108 => 54,  102 => 33,  92 => 18,  84 => 35,  72 => 29,  69 => 28,  51 => 21,  48 => 21,  35 => 15,  29 => 14,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 79,  247 => 75,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 45,  112 => 42,  96 => 38,  76 => 30,  71 => 27,  110 => 30,  89 => 32,  65 => 24,  63 => 23,  58 => 25,  34 => 16,  114 => 36,  109 => 37,  106 => 39,  101 => 36,  85 => 16,  77 => 24,  67 => 27,  28 => 14,  55 => 22,  43 => 7,  26 => 13,  24 => 11,  39 => 18,  57 => 23,  50 => 23,  47 => 18,  38 => 23,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 84,  195 => 60,  192 => 71,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 49,  162 => 56,  158 => 57,  155 => 59,  152 => 58,  142 => 55,  136 => 41,  133 => 47,  130 => 46,  120 => 38,  105 => 34,  100 => 27,  75 => 30,  60 => 25,  53 => 20,  19 => 11,  98 => 33,  88 => 36,  80 => 32,  78 => 29,  46 => 21,  44 => 26,  40 => 16,  36 => 17,  32 => 15,  27 => 16,  22 => 11,  232 => 95,  226 => 71,  222 => 69,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 46,  157 => 48,  149 => 51,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 41,  121 => 77,  118 => 36,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 31,  90 => 28,  81 => 21,  70 => 25,  66 => 17,  62 => 16,  59 => 15,  56 => 21,  52 => 14,  49 => 19,  45 => 20,  41 => 18,  37 => 19,  33 => 14,  30 => 16,);
    }
}
