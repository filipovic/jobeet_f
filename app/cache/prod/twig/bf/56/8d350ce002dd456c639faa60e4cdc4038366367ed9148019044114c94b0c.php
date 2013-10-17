<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_bf568d350ce002dd456c639faa60e4cdc4038366367ed9148019044114c94b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 34
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'actions' => array($this, 'block_actions'),
                'side_menu' => array($this, 'block_side_menu'),
                'form' => array($this, 'block_form'),
            )
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
        // line 15
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
            // line 16
            echo "        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($_admin_, "toString", array(0 => $_object_), "method")), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 24
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 25
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 26
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 27
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 28
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 29
        echo "    </div>
";
    }

    // line 32
    public function block_side_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 36
    public function block_form($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  12 => 34,  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 72,  280 => 69,  259 => 67,  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 125,  400 => 133,  392 => 129,  342 => 109,  336 => 111,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 83,  289 => 69,  284 => 70,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 136,  411 => 106,  401 => 122,  398 => 121,  393 => 118,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 108,  320 => 80,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 51,  175 => 76,  113 => 42,  20 => 11,  179 => 60,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 24,  139 => 42,  64 => 15,  61 => 14,  99 => 39,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 47,  168 => 63,  154 => 48,  116 => 26,  126 => 47,  119 => 44,  95 => 25,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 19,  94 => 38,  91 => 23,  185 => 54,  176 => 59,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 29,  68 => 16,  79 => 27,  161 => 44,  141 => 49,  128 => 44,  103 => 37,  86 => 14,  83 => 13,  74 => 19,  234 => 57,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 51,  145 => 53,  135 => 40,  82 => 34,  23 => 12,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 115,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 48,  122 => 37,  117 => 37,  108 => 54,  102 => 28,  92 => 32,  84 => 28,  72 => 28,  69 => 19,  51 => 16,  48 => 20,  35 => 16,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 68,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 31,  112 => 42,  96 => 38,  76 => 30,  71 => 27,  110 => 142,  89 => 32,  65 => 23,  63 => 26,  58 => 25,  34 => 16,  114 => 44,  109 => 23,  106 => 140,  101 => 36,  85 => 29,  77 => 24,  67 => 22,  28 => 14,  55 => 29,  43 => 14,  26 => 14,  24 => 11,  39 => 18,  57 => 24,  50 => 23,  47 => 25,  38 => 17,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 51,  189 => 50,  186 => 66,  181 => 55,  178 => 63,  173 => 58,  162 => 56,  158 => 43,  155 => 53,  152 => 58,  142 => 55,  136 => 49,  133 => 47,  130 => 46,  120 => 38,  105 => 19,  100 => 36,  75 => 25,  60 => 25,  53 => 24,  19 => 11,  98 => 39,  88 => 34,  80 => 19,  78 => 26,  46 => 15,  44 => 24,  40 => 16,  36 => 17,  32 => 15,  27 => 13,  22 => 11,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 49,  180 => 64,  171 => 92,  166 => 58,  163 => 59,  160 => 56,  157 => 48,  149 => 39,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 30,  121 => 77,  118 => 45,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 65,  90 => 15,  81 => 27,  70 => 23,  66 => 17,  62 => 22,  59 => 18,  56 => 23,  52 => 22,  49 => 26,  45 => 20,  41 => 18,  37 => 18,  33 => 16,  30 => 14,);
    }
}
