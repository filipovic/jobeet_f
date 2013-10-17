<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_64d4066788defaf686db9c21640ca05a14a77effbb1ad008c05d2f93a6516ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  547 => 128,  544 => 127,  536 => 125,  533 => 124,  519 => 160,  515 => 158,  512 => 157,  503 => 121,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  462 => 75,  459 => 74,  451 => 71,  433 => 65,  417 => 59,  405 => 56,  391 => 50,  372 => 37,  317 => 230,  301 => 222,  290 => 217,  231 => 199,  370 => 36,  343 => 91,  330 => 87,  327 => 86,  320 => 231,  313 => 82,  310 => 81,  287 => 216,  271 => 66,  262 => 63,  180 => 104,  12 => 34,  568 => 179,  553 => 129,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 123,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 69,  426 => 102,  419 => 98,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  367 => 99,  333 => 272,  302 => 78,  296 => 76,  226 => 197,  316 => 121,  299 => 112,  293 => 75,  284 => 106,  281 => 105,  279 => 104,  275 => 77,  210 => 75,  174 => 60,  399 => 158,  394 => 156,  359 => 140,  357 => 32,  352 => 30,  348 => 136,  345 => 135,  325 => 125,  308 => 226,  276 => 211,  270 => 209,  245 => 203,  239 => 201,  237 => 86,  234 => 84,  202 => 194,  167 => 60,  155 => 55,  681 => 404,  676 => 168,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 144,  595 => 354,  588 => 350,  581 => 137,  577 => 344,  575 => 341,  567 => 337,  557 => 177,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 124,  492 => 295,  481 => 290,  466 => 76,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 97,  396 => 157,  383 => 150,  366 => 142,  346 => 28,  331 => 265,  304 => 79,  267 => 98,  257 => 61,  253 => 95,  213 => 126,  58 => 17,  150 => 100,  134 => 94,  194 => 190,  127 => 60,  344 => 97,  340 => 22,  338 => 94,  335 => 129,  315 => 83,  295 => 219,  288 => 108,  259 => 70,  249 => 55,  190 => 188,  161 => 70,  701 => 183,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 138,  580 => 178,  578 => 136,  573 => 340,  556 => 130,  539 => 126,  535 => 172,  530 => 171,  527 => 123,  524 => 169,  521 => 169,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 120,  498 => 157,  495 => 155,  493 => 116,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 67,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 51,  389 => 118,  377 => 82,  371 => 144,  361 => 33,  358 => 106,  349 => 29,  347 => 118,  342 => 133,  339 => 100,  336 => 99,  332 => 88,  329 => 126,  326 => 262,  324 => 232,  321 => 123,  319 => 90,  311 => 227,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  282 => 213,  277 => 68,  272 => 76,  250 => 206,  233 => 62,  228 => 83,  223 => 196,  191 => 69,  178 => 172,  175 => 76,  76 => 28,  318 => 122,  306 => 225,  303 => 139,  300 => 113,  292 => 218,  286 => 80,  280 => 69,  274 => 77,  263 => 71,  256 => 208,  242 => 140,  192 => 23,  185 => 20,  170 => 61,  165 => 59,  20 => 11,  53 => 11,  137 => 95,  97 => 41,  34 => 18,  126 => 55,  118 => 46,  114 => 50,  70 => 79,  90 => 32,  110 => 22,  84 => 29,  65 => 54,  265 => 64,  260 => 62,  248 => 115,  236 => 63,  232 => 84,  216 => 25,  211 => 84,  195 => 77,  188 => 178,  184 => 48,  152 => 63,  100 => 43,  81 => 84,  172 => 52,  153 => 48,  146 => 34,  113 => 90,  148 => 44,  104 => 42,  77 => 20,  225 => 83,  222 => 81,  218 => 77,  215 => 78,  205 => 195,  200 => 193,  197 => 56,  186 => 54,  181 => 173,  160 => 52,  129 => 56,  124 => 43,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 149,  457 => 131,  453 => 72,  444 => 142,  440 => 148,  437 => 66,  435 => 258,  430 => 103,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 48,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 198,  220 => 65,  214 => 61,  177 => 63,  169 => 58,  140 => 96,  132 => 57,  128 => 44,  107 => 48,  61 => 12,  273 => 210,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 60,  204 => 73,  179 => 72,  159 => 49,  143 => 48,  135 => 62,  119 => 31,  102 => 17,  71 => 32,  67 => 33,  63 => 19,  59 => 13,  87 => 86,  94 => 34,  89 => 42,  85 => 32,  75 => 32,  68 => 55,  56 => 11,  28 => 3,  38 => 6,  24 => 13,  26 => 9,  21 => 11,  31 => 3,  25 => 35,  201 => 57,  196 => 191,  183 => 82,  171 => 113,  166 => 57,  163 => 60,  158 => 79,  156 => 57,  151 => 45,  142 => 42,  138 => 50,  136 => 39,  121 => 52,  117 => 19,  105 => 18,  91 => 39,  62 => 30,  49 => 13,  19 => 11,  93 => 88,  88 => 31,  78 => 26,  46 => 8,  44 => 21,  27 => 14,  79 => 83,  72 => 31,  69 => 33,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 40,  111 => 41,  108 => 19,  101 => 43,  98 => 38,  96 => 44,  83 => 35,  74 => 27,  66 => 32,  55 => 24,  52 => 14,  50 => 23,  43 => 11,  41 => 10,  35 => 5,  32 => 16,  29 => 3,  209 => 24,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 120,  173 => 119,  168 => 60,  164 => 111,  162 => 110,  154 => 46,  149 => 62,  147 => 46,  144 => 98,  141 => 66,  133 => 51,  130 => 35,  125 => 40,  122 => 44,  116 => 47,  112 => 47,  109 => 45,  106 => 45,  103 => 44,  99 => 45,  95 => 37,  92 => 43,  86 => 25,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 13,  57 => 12,  54 => 22,  51 => 21,  48 => 9,  45 => 8,  42 => 7,  39 => 15,  36 => 5,  33 => 4,  30 => 3,);
    }
}
