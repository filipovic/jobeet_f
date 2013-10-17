<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_42139eb0ba85057449ae51408da3df62efe4c0ea2200733976ec40cb45a08b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  742 => 475,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  525 => 408,  520 => 406,  244 => 136,  378 => 157,  334 => 141,  328 => 139,  363 => 153,  353 => 149,  255 => 101,  212 => 78,  431 => 189,  408 => 176,  401 => 172,  373 => 156,  351 => 120,  323 => 128,  207 => 75,  356 => 328,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 476,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 473,  720 => 232,  716 => 187,  710 => 186,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 460,  642 => 155,  636 => 154,  631 => 151,  625 => 453,  617 => 148,  614 => 147,  610 => 146,  602 => 449,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  547 => 411,  544 => 127,  536 => 125,  533 => 124,  519 => 160,  515 => 404,  512 => 157,  503 => 121,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  462 => 202,  459 => 74,  451 => 71,  433 => 65,  417 => 59,  405 => 56,  391 => 50,  372 => 37,  317 => 230,  301 => 222,  290 => 119,  231 => 83,  370 => 36,  343 => 146,  330 => 87,  327 => 114,  320 => 127,  313 => 82,  310 => 81,  287 => 216,  271 => 66,  262 => 98,  180 => 104,  12 => 34,  568 => 179,  553 => 129,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 123,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 198,  446 => 197,  426 => 102,  419 => 98,  410 => 96,  392 => 83,  388 => 107,  386 => 159,  382 => 93,  380 => 158,  369 => 136,  367 => 155,  333 => 272,  302 => 125,  296 => 121,  226 => 84,  316 => 121,  299 => 112,  293 => 120,  284 => 106,  281 => 114,  279 => 104,  275 => 105,  210 => 77,  174 => 65,  399 => 158,  394 => 168,  359 => 140,  357 => 123,  352 => 30,  348 => 140,  345 => 147,  325 => 129,  308 => 226,  276 => 111,  270 => 102,  245 => 203,  239 => 201,  237 => 86,  234 => 84,  202 => 77,  167 => 60,  155 => 47,  681 => 404,  676 => 168,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 144,  595 => 354,  588 => 350,  581 => 137,  577 => 344,  575 => 341,  567 => 337,  557 => 177,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 124,  492 => 295,  481 => 290,  466 => 76,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  415 => 180,  396 => 157,  383 => 150,  366 => 142,  346 => 28,  331 => 140,  304 => 79,  267 => 101,  257 => 61,  253 => 100,  213 => 78,  58 => 25,  150 => 55,  134 => 39,  194 => 68,  127 => 35,  344 => 119,  340 => 145,  338 => 135,  335 => 134,  315 => 131,  295 => 275,  288 => 118,  259 => 103,  249 => 55,  190 => 76,  161 => 63,  701 => 183,  695 => 210,  692 => 209,  690 => 467,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 138,  580 => 178,  578 => 136,  573 => 340,  556 => 130,  539 => 126,  535 => 172,  530 => 410,  527 => 409,  524 => 169,  521 => 169,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 120,  498 => 157,  495 => 155,  493 => 116,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 196,  439 => 195,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 51,  389 => 160,  377 => 82,  371 => 156,  361 => 152,  358 => 151,  349 => 29,  347 => 118,  342 => 137,  339 => 316,  336 => 99,  332 => 116,  329 => 131,  326 => 138,  324 => 113,  321 => 135,  319 => 90,  311 => 227,  307 => 128,  297 => 104,  291 => 102,  289 => 113,  282 => 213,  277 => 68,  272 => 76,  250 => 206,  233 => 87,  228 => 83,  223 => 196,  191 => 67,  178 => 59,  175 => 58,  76 => 34,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  292 => 218,  286 => 112,  280 => 69,  274 => 110,  263 => 95,  256 => 96,  242 => 140,  192 => 23,  185 => 74,  170 => 84,  165 => 83,  20 => 1,  53 => 12,  137 => 95,  97 => 41,  34 => 5,  126 => 55,  118 => 49,  114 => 50,  70 => 15,  90 => 42,  110 => 22,  84 => 40,  65 => 22,  265 => 105,  260 => 62,  248 => 97,  236 => 63,  232 => 88,  216 => 79,  211 => 84,  195 => 77,  188 => 90,  184 => 63,  152 => 46,  100 => 39,  81 => 30,  172 => 57,  153 => 77,  146 => 34,  113 => 38,  148 => 44,  104 => 32,  77 => 25,  225 => 83,  222 => 83,  218 => 77,  215 => 78,  205 => 195,  200 => 72,  197 => 69,  186 => 54,  181 => 65,  160 => 52,  129 => 56,  124 => 43,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 149,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 66,  435 => 258,  430 => 103,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 111,  285 => 81,  283 => 115,  278 => 98,  268 => 73,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 61,  177 => 63,  169 => 58,  140 => 58,  132 => 57,  128 => 44,  107 => 48,  61 => 12,  273 => 210,  269 => 107,  254 => 60,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 105,  227 => 86,  224 => 81,  221 => 78,  219 => 129,  217 => 79,  208 => 76,  204 => 73,  179 => 72,  159 => 49,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 23,  67 => 14,  63 => 18,  59 => 17,  87 => 41,  94 => 21,  89 => 35,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  28 => 3,  38 => 6,  24 => 3,  26 => 6,  21 => 2,  31 => 4,  25 => 35,  201 => 57,  196 => 92,  183 => 82,  171 => 113,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 42,  138 => 50,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  19 => 1,  93 => 38,  88 => 25,  78 => 18,  46 => 13,  44 => 20,  27 => 3,  79 => 18,  72 => 18,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 58,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 25,  55 => 24,  52 => 12,  50 => 22,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 24,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 111,  162 => 59,  154 => 60,  149 => 62,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 44,  99 => 23,  95 => 39,  92 => 43,  86 => 25,  82 => 19,  80 => 32,  73 => 33,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
