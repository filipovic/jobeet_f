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
        if ($this->getContext($context, "value")) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "value"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
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
        return array (  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  346 => 196,  331 => 187,  304 => 174,  267 => 156,  257 => 149,  253 => 148,  213 => 126,  58 => 23,  150 => 64,  134 => 58,  194 => 86,  127 => 76,  344 => 97,  340 => 95,  338 => 94,  335 => 188,  315 => 90,  295 => 88,  288 => 85,  259 => 70,  249 => 67,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 340,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  513 => 165,  504 => 302,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 115,  371 => 113,  361 => 208,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 185,  324 => 92,  321 => 183,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 169,  289 => 81,  282 => 83,  277 => 81,  272 => 158,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  191 => 50,  178 => 46,  175 => 76,  76 => 13,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  256 => 120,  242 => 140,  192 => 87,  185 => 85,  170 => 73,  165 => 71,  20 => 11,  53 => 80,  137 => 58,  97 => 63,  34 => 16,  126 => 51,  118 => 21,  114 => 71,  70 => 33,  90 => 18,  110 => 47,  84 => 38,  65 => 29,  265 => 125,  260 => 123,  248 => 115,  236 => 63,  232 => 136,  216 => 99,  211 => 84,  195 => 77,  188 => 73,  184 => 48,  152 => 92,  100 => 40,  81 => 15,  172 => 66,  153 => 35,  146 => 34,  113 => 35,  148 => 63,  104 => 67,  77 => 27,  225 => 83,  222 => 82,  218 => 14,  215 => 54,  205 => 10,  200 => 55,  197 => 119,  186 => 111,  181 => 79,  160 => 69,  129 => 56,  124 => 23,  23 => 18,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 97,  305 => 95,  298 => 173,  294 => 90,  285 => 84,  283 => 166,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 65,  169 => 73,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 18,  273 => 96,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 102,  221 => 77,  219 => 129,  217 => 75,  208 => 124,  204 => 80,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 37,  102 => 17,  71 => 19,  67 => 184,  63 => 24,  59 => 23,  87 => 17,  94 => 38,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 40,  28 => 14,  38 => 32,  24 => 13,  26 => 20,  21 => 11,  31 => 15,  25 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 102,  166 => 100,  163 => 63,  158 => 37,  156 => 93,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 75,  117 => 50,  105 => 46,  91 => 31,  62 => 28,  49 => 21,  19 => 11,  93 => 26,  88 => 60,  78 => 53,  46 => 21,  44 => 19,  27 => 3,  79 => 14,  72 => 198,  69 => 50,  47 => 75,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 41,  145 => 78,  139 => 59,  131 => 25,  123 => 53,  120 => 56,  115 => 49,  111 => 45,  108 => 47,  101 => 22,  98 => 43,  96 => 29,  83 => 22,  74 => 52,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 33,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 95,  203 => 122,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 79,  176 => 76,  173 => 44,  168 => 65,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 90,  144 => 61,  141 => 66,  133 => 55,  130 => 56,  125 => 38,  122 => 29,  116 => 41,  112 => 48,  109 => 69,  106 => 26,  103 => 45,  99 => 35,  95 => 42,  92 => 61,  86 => 43,  82 => 10,  80 => 9,  73 => 7,  64 => 183,  60 => 3,  57 => 22,  54 => 153,  51 => 21,  48 => 67,  45 => 19,  42 => 18,  39 => 61,  36 => 17,  33 => 4,  30 => 15,);
    }
}
