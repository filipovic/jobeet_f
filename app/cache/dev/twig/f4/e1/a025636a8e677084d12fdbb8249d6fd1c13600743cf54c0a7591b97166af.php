<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_f4e1a025636a8e677084d12fdbb8249d6fd1c13600743cf54c0a7591b97166af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  769 => 171,  764 => 169,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  689 => 137,  666 => 126,  662 => 125,  638 => 118,  635 => 117,  619 => 113,  598 => 107,  576 => 101,  564 => 99,  555 => 95,  529 => 92,  501 => 80,  496 => 79,  478 => 74,  464 => 71,  442 => 62,  428 => 59,  414 => 52,  403 => 48,  400 => 47,  390 => 43,  385 => 41,  350 => 26,  266 => 366,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  742 => 475,  706 => 472,  702 => 470,  698 => 469,  694 => 138,  686 => 466,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  525 => 408,  520 => 406,  244 => 136,  378 => 157,  334 => 141,  328 => 139,  363 => 32,  353 => 149,  255 => 353,  212 => 279,  431 => 189,  408 => 50,  401 => 172,  373 => 156,  351 => 120,  323 => 128,  207 => 269,  356 => 328,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 172,  770 => 250,  767 => 170,  761 => 247,  759 => 246,  756 => 165,  750 => 243,  748 => 242,  745 => 476,  739 => 156,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 473,  720 => 232,  716 => 187,  710 => 149,  696 => 140,  691 => 181,  688 => 180,  683 => 135,  680 => 134,  667 => 164,  661 => 162,  658 => 124,  655 => 160,  649 => 122,  645 => 460,  642 => 155,  636 => 154,  631 => 151,  625 => 453,  617 => 112,  614 => 111,  610 => 146,  602 => 449,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  547 => 93,  544 => 127,  536 => 125,  533 => 124,  519 => 160,  515 => 85,  512 => 84,  503 => 81,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  462 => 202,  459 => 69,  451 => 71,  433 => 60,  417 => 59,  405 => 49,  391 => 50,  372 => 37,  317 => 230,  301 => 222,  290 => 5,  231 => 83,  370 => 36,  343 => 146,  330 => 87,  327 => 114,  320 => 127,  313 => 15,  310 => 81,  287 => 216,  271 => 374,  262 => 98,  180 => 104,  12 => 34,  568 => 179,  553 => 129,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 123,  488 => 153,  477 => 150,  470 => 73,  467 => 72,  463 => 133,  460 => 132,  449 => 198,  446 => 197,  426 => 58,  419 => 98,  410 => 96,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 158,  369 => 136,  367 => 155,  333 => 272,  302 => 125,  296 => 121,  226 => 84,  316 => 16,  299 => 8,  293 => 6,  284 => 106,  281 => 388,  279 => 104,  275 => 105,  210 => 270,  174 => 217,  399 => 158,  394 => 168,  359 => 140,  357 => 123,  352 => 30,  348 => 140,  345 => 147,  325 => 129,  308 => 13,  276 => 381,  270 => 102,  245 => 335,  239 => 201,  237 => 86,  234 => 84,  202 => 266,  167 => 60,  155 => 47,  681 => 404,  676 => 168,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 144,  595 => 354,  588 => 350,  581 => 137,  577 => 344,  575 => 341,  567 => 337,  557 => 96,  550 => 94,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 83,  492 => 295,  481 => 290,  466 => 76,  456 => 68,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  415 => 180,  396 => 157,  383 => 150,  366 => 33,  346 => 28,  331 => 140,  304 => 79,  267 => 101,  257 => 61,  253 => 342,  213 => 78,  58 => 14,  150 => 55,  134 => 161,  194 => 248,  127 => 35,  344 => 24,  340 => 145,  338 => 135,  335 => 21,  315 => 131,  295 => 275,  288 => 4,  259 => 103,  249 => 55,  190 => 76,  161 => 202,  701 => 183,  695 => 139,  692 => 209,  690 => 467,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 123,  651 => 198,  643 => 120,  640 => 119,  623 => 373,  606 => 189,  601 => 187,  596 => 106,  593 => 105,  590 => 184,  584 => 138,  580 => 178,  578 => 136,  573 => 340,  556 => 130,  539 => 126,  535 => 172,  530 => 410,  527 => 91,  524 => 90,  521 => 169,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 120,  498 => 157,  495 => 155,  493 => 78,  490 => 77,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 64,  441 => 196,  439 => 195,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 51,  389 => 160,  377 => 37,  371 => 35,  361 => 152,  358 => 151,  349 => 29,  347 => 118,  342 => 23,  339 => 316,  336 => 99,  332 => 20,  329 => 131,  326 => 138,  324 => 113,  321 => 135,  319 => 90,  311 => 14,  307 => 128,  297 => 104,  291 => 102,  289 => 113,  282 => 213,  277 => 68,  272 => 76,  250 => 341,  233 => 304,  228 => 83,  223 => 196,  191 => 246,  178 => 59,  175 => 58,  76 => 31,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  292 => 218,  286 => 112,  280 => 69,  274 => 110,  263 => 365,  256 => 96,  242 => 140,  192 => 23,  185 => 74,  170 => 84,  165 => 83,  20 => 1,  53 => 11,  137 => 95,  97 => 41,  34 => 5,  126 => 147,  118 => 49,  114 => 111,  70 => 19,  90 => 27,  110 => 38,  84 => 41,  65 => 17,  265 => 105,  260 => 363,  248 => 336,  236 => 63,  232 => 88,  216 => 79,  211 => 84,  195 => 77,  188 => 90,  184 => 233,  152 => 46,  100 => 39,  81 => 40,  172 => 57,  153 => 77,  146 => 181,  113 => 38,  148 => 44,  104 => 90,  77 => 25,  225 => 298,  222 => 297,  218 => 77,  215 => 280,  205 => 195,  200 => 72,  197 => 249,  186 => 239,  181 => 232,  160 => 52,  129 => 148,  124 => 132,  23 => 12,  480 => 75,  474 => 149,  469 => 158,  461 => 70,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 61,  435 => 258,  430 => 103,  427 => 62,  423 => 57,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 34,  362 => 141,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 111,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 72,  258 => 354,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 61,  177 => 63,  169 => 210,  140 => 58,  132 => 57,  128 => 44,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 60,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 78,  219 => 129,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 18,  63 => 18,  59 => 13,  87 => 26,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  28 => 3,  38 => 7,  24 => 3,  26 => 3,  21 => 2,  31 => 4,  25 => 35,  201 => 57,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 42,  138 => 50,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 16,  49 => 12,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 8,  27 => 3,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 58,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 33,  74 => 22,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 6,  29 => 4,  209 => 24,  203 => 73,  199 => 265,  193 => 70,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 44,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 26,  80 => 24,  73 => 33,  64 => 3,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 11,  45 => 11,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
