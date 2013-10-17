<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_ee708ece9ad3f48ad2505294871a0b11a8eb67cc1288f1e8fd08d9e3a55aaf08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $_query_), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $_query_, "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $_query_), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        if ($_query_) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                    if ((!$_display_)) {
                        // line 37
                        echo "                    ";
                        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                        $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ($_display_) {
                    // line 41
                    echo "                    ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
                        if ((($_count_ % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
                        $context["count"] = ($_count_ + 1);
                        // line 47
                        echo "                        ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if ((($this->getAttribute($_admin_, "hasroute", array(0 => "create"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => $_query_, "admin_code" => $this->getAttribute($_admin_, "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 109,  336 => 107,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 106,  303 => 156,  235 => 73,  213 => 76,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 105,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 75,  216 => 51,  175 => 76,  113 => 41,  20 => 1,  179 => 57,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 31,  139 => 42,  64 => 24,  61 => 27,  99 => 37,  317 => 81,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 52,  154 => 48,  116 => 36,  126 => 47,  119 => 42,  95 => 18,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 43,  42 => 17,  94 => 33,  91 => 33,  185 => 54,  176 => 64,  172 => 62,  165 => 62,  159 => 58,  144 => 44,  87 => 31,  68 => 25,  79 => 34,  161 => 60,  141 => 49,  128 => 44,  103 => 31,  86 => 27,  83 => 33,  74 => 50,  234 => 73,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 46,  148 => 47,  145 => 53,  135 => 40,  82 => 57,  23 => 18,  54 => 23,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 99,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 81,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 76,  138 => 52,  134 => 45,  131 => 43,  122 => 37,  117 => 39,  108 => 54,  102 => 38,  92 => 18,  84 => 35,  72 => 31,  69 => 30,  51 => 21,  48 => 18,  35 => 15,  29 => 14,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 79,  247 => 75,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 45,  112 => 38,  96 => 37,  76 => 30,  71 => 26,  110 => 40,  89 => 32,  65 => 24,  63 => 28,  58 => 26,  34 => 15,  114 => 38,  109 => 37,  106 => 39,  101 => 36,  85 => 16,  77 => 56,  67 => 27,  28 => 14,  55 => 22,  43 => 17,  26 => 14,  24 => 11,  39 => 16,  57 => 21,  50 => 19,  47 => 19,  38 => 17,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 84,  195 => 60,  192 => 71,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 49,  162 => 56,  158 => 57,  155 => 59,  152 => 58,  142 => 55,  136 => 41,  133 => 47,  130 => 46,  120 => 37,  105 => 49,  100 => 38,  75 => 32,  60 => 22,  53 => 20,  19 => 11,  98 => 33,  88 => 36,  80 => 32,  78 => 29,  46 => 21,  44 => 17,  40 => 16,  36 => 16,  32 => 22,  27 => 12,  22 => 12,  232 => 95,  226 => 71,  222 => 69,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 46,  157 => 48,  149 => 51,  146 => 57,  140 => 43,  137 => 48,  129 => 39,  124 => 41,  121 => 77,  118 => 36,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 64,  90 => 28,  81 => 26,  70 => 25,  66 => 18,  62 => 23,  59 => 22,  56 => 21,  52 => 21,  49 => 19,  45 => 18,  41 => 18,  37 => 19,  33 => 13,  30 => 3,);
    }
}
