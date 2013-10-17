<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_1f4f13a2dab2d4272f40aaf5717803b3eb27fd989400a79e4faf8299ba0ccb82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"span3\">
        <div>
            <h4>
                ";
        // line 18
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if (($_pager_ && ($this->getAttribute($_pager_, "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if ($_pager_) {
            // line 32
            echo "                ";
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_pager_, "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    <li><a href=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "edit", 1 => $_result_), "method"), "html", null, true);
                echo "\">";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "toString", array(0 => $_result_), "method"), "html", null, true);
                echo "</a></li>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                    ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasRoute", array(0 => "create"), "method")) {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 38
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        } else {
            // line 42
            echo "                ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "create"), "method")) {
                // line 43
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 45
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 109,  336 => 107,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 106,  303 => 156,  235 => 73,  213 => 76,  188 => 69,  156 => 57,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 105,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 75,  216 => 51,  175 => 76,  113 => 41,  20 => 11,  179 => 57,  174 => 53,  164 => 49,  151 => 48,  132 => 50,  73 => 31,  139 => 41,  64 => 23,  61 => 21,  99 => 37,  317 => 81,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 52,  154 => 48,  116 => 36,  126 => 47,  119 => 44,  95 => 19,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 13,  94 => 33,  91 => 33,  185 => 54,  176 => 64,  172 => 62,  165 => 90,  159 => 58,  144 => 44,  87 => 31,  68 => 25,  79 => 27,  161 => 50,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 33,  74 => 50,  234 => 73,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 50,  153 => 46,  148 => 47,  145 => 53,  135 => 51,  82 => 57,  23 => 18,  54 => 23,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 99,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 81,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 76,  138 => 52,  134 => 45,  131 => 43,  122 => 40,  117 => 39,  108 => 54,  102 => 38,  92 => 18,  84 => 29,  72 => 198,  69 => 23,  51 => 21,  48 => 18,  35 => 16,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 79,  247 => 75,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 42,  112 => 38,  96 => 60,  76 => 32,  71 => 26,  110 => 73,  89 => 32,  65 => 24,  63 => 4,  58 => 20,  34 => 18,  114 => 38,  109 => 37,  106 => 39,  101 => 36,  85 => 29,  77 => 56,  67 => 27,  28 => 14,  55 => 22,  43 => 20,  26 => 14,  24 => 12,  39 => 19,  57 => 24,  50 => 20,  47 => 21,  38 => 17,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 84,  195 => 60,  192 => 71,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 55,  162 => 56,  158 => 57,  155 => 55,  152 => 55,  142 => 45,  136 => 41,  133 => 41,  130 => 50,  120 => 37,  105 => 49,  100 => 20,  75 => 26,  60 => 25,  53 => 19,  19 => 11,  98 => 33,  88 => 25,  80 => 19,  78 => 29,  46 => 19,  44 => 74,  40 => 16,  36 => 15,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 69,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 48,  157 => 48,  149 => 51,  146 => 60,  140 => 43,  137 => 50,  129 => 47,  124 => 41,  121 => 77,  118 => 40,  115 => 42,  111 => 22,  107 => 63,  104 => 34,  97 => 35,  93 => 64,  90 => 35,  81 => 25,  70 => 25,  66 => 18,  62 => 23,  59 => 22,  56 => 20,  52 => 17,  49 => 19,  45 => 17,  41 => 16,  37 => 19,  33 => 16,  30 => 3,);
    }
}
