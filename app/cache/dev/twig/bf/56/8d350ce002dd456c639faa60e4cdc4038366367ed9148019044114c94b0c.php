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
        if ((!(null === $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => $this->getAttribute($this->getContext($context, "admin"), "toString", array(0 => $this->getContext($context, "object")), "method")), "SonataAdminBundle"), "html", null, true);
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
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
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
        return array (  12 => 34,  568 => 179,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 159,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  426 => 102,  419 => 98,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  367 => 131,  333 => 117,  302 => 114,  296 => 111,  226 => 67,  316 => 121,  299 => 112,  293 => 109,  284 => 106,  281 => 105,  279 => 104,  275 => 77,  210 => 75,  174 => 53,  399 => 158,  394 => 156,  359 => 140,  357 => 125,  352 => 121,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  245 => 88,  239 => 86,  237 => 86,  234 => 84,  202 => 73,  167 => 60,  155 => 55,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  567 => 337,  557 => 177,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 97,  396 => 157,  383 => 150,  366 => 142,  346 => 196,  331 => 187,  304 => 174,  267 => 98,  257 => 149,  253 => 95,  213 => 126,  58 => 19,  150 => 58,  134 => 58,  194 => 86,  127 => 34,  344 => 97,  340 => 95,  338 => 94,  335 => 129,  315 => 90,  295 => 88,  288 => 108,  259 => 70,  249 => 70,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 340,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 157,  498 => 157,  495 => 155,  493 => 155,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 105,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 84,  389 => 118,  377 => 82,  371 => 144,  361 => 127,  358 => 106,  349 => 103,  347 => 118,  342 => 133,  339 => 100,  336 => 99,  332 => 97,  329 => 126,  326 => 185,  324 => 116,  321 => 123,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  282 => 80,  277 => 81,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 66,  191 => 69,  178 => 46,  175 => 76,  76 => 34,  318 => 122,  306 => 140,  303 => 139,  300 => 113,  292 => 87,  286 => 80,  280 => 79,  274 => 77,  263 => 71,  256 => 96,  242 => 140,  192 => 55,  185 => 68,  170 => 61,  165 => 59,  20 => 11,  53 => 24,  137 => 58,  97 => 37,  34 => 17,  126 => 55,  118 => 46,  114 => 46,  70 => 29,  90 => 34,  110 => 36,  84 => 33,  65 => 29,  265 => 99,  260 => 98,  248 => 115,  236 => 63,  232 => 84,  216 => 99,  211 => 84,  195 => 77,  188 => 68,  184 => 48,  152 => 63,  100 => 42,  81 => 34,  172 => 52,  153 => 48,  146 => 34,  113 => 46,  148 => 44,  104 => 42,  77 => 27,  225 => 83,  222 => 81,  218 => 77,  215 => 78,  205 => 59,  200 => 55,  197 => 56,  186 => 54,  181 => 79,  160 => 59,  129 => 42,  124 => 49,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 149,  457 => 131,  453 => 124,  444 => 142,  440 => 148,  437 => 147,  435 => 258,  430 => 103,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 95,  402 => 130,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 81,  283 => 106,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 51,  140 => 53,  132 => 43,  128 => 58,  107 => 44,  61 => 28,  273 => 101,  269 => 75,  254 => 91,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 60,  204 => 73,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 31,  102 => 142,  71 => 25,  67 => 28,  63 => 22,  59 => 23,  87 => 38,  94 => 36,  89 => 17,  85 => 37,  75 => 31,  68 => 24,  56 => 25,  28 => 14,  38 => 14,  24 => 13,  26 => 14,  21 => 11,  31 => 15,  25 => 13,  201 => 57,  196 => 71,  183 => 82,  171 => 63,  166 => 50,  163 => 60,  158 => 37,  156 => 57,  151 => 45,  142 => 42,  138 => 50,  136 => 39,  121 => 51,  117 => 50,  105 => 26,  91 => 39,  62 => 24,  49 => 16,  19 => 11,  93 => 40,  88 => 32,  78 => 21,  46 => 15,  44 => 21,  27 => 16,  79 => 31,  72 => 30,  69 => 24,  47 => 22,  40 => 24,  37 => 18,  22 => 11,  246 => 69,  157 => 58,  145 => 56,  139 => 59,  131 => 48,  123 => 33,  120 => 48,  115 => 45,  111 => 30,  108 => 144,  101 => 37,  98 => 42,  96 => 139,  83 => 29,  74 => 26,  66 => 23,  55 => 18,  52 => 24,  50 => 23,  43 => 14,  41 => 19,  35 => 22,  32 => 15,  29 => 15,  209 => 95,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 65,  173 => 71,  168 => 60,  164 => 71,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 66,  133 => 51,  130 => 35,  125 => 40,  122 => 44,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 23,  95 => 40,  92 => 28,  86 => 25,  82 => 23,  80 => 28,  73 => 27,  64 => 26,  60 => 19,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
