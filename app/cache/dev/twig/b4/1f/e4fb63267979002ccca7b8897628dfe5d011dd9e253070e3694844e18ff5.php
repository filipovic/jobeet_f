<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_b41fe4fb63267979002ccca7b8897628dfe5d011dd9e253070e3694844e18ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "editable")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 17
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 0, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 1, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  343 => 91,  330 => 87,  327 => 86,  320 => 84,  313 => 82,  310 => 81,  287 => 72,  271 => 66,  262 => 63,  180 => 104,  12 => 34,  568 => 179,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 159,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  426 => 102,  419 => 98,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  367 => 99,  333 => 117,  302 => 78,  296 => 76,  226 => 67,  316 => 121,  299 => 112,  293 => 75,  284 => 106,  281 => 105,  279 => 104,  275 => 77,  210 => 75,  174 => 60,  399 => 158,  394 => 156,  359 => 140,  357 => 125,  352 => 94,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  245 => 88,  239 => 86,  237 => 86,  234 => 84,  202 => 73,  167 => 60,  155 => 55,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 361,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  567 => 337,  557 => 177,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 97,  396 => 157,  383 => 150,  366 => 142,  346 => 92,  331 => 187,  304 => 79,  267 => 98,  257 => 61,  253 => 95,  213 => 126,  58 => 19,  150 => 58,  134 => 58,  194 => 86,  127 => 34,  344 => 97,  340 => 90,  338 => 94,  335 => 129,  315 => 83,  295 => 88,  288 => 108,  259 => 70,  249 => 55,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 340,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 157,  498 => 157,  495 => 155,  493 => 155,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 105,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 84,  389 => 118,  377 => 82,  371 => 144,  361 => 97,  358 => 106,  349 => 103,  347 => 118,  342 => 133,  339 => 100,  336 => 99,  332 => 88,  329 => 126,  326 => 185,  324 => 116,  321 => 123,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  282 => 80,  277 => 68,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 27,  191 => 69,  178 => 46,  175 => 76,  76 => 34,  318 => 122,  306 => 140,  303 => 139,  300 => 113,  292 => 87,  286 => 80,  280 => 69,  274 => 77,  263 => 71,  256 => 96,  242 => 140,  192 => 23,  185 => 20,  170 => 61,  165 => 59,  20 => 11,  53 => 18,  137 => 47,  97 => 37,  34 => 17,  126 => 55,  118 => 46,  114 => 46,  70 => 29,  90 => 34,  110 => 36,  84 => 33,  65 => 15,  265 => 64,  260 => 62,  248 => 115,  236 => 63,  232 => 84,  216 => 25,  211 => 84,  195 => 77,  188 => 21,  184 => 48,  152 => 63,  100 => 36,  81 => 34,  172 => 52,  153 => 48,  146 => 34,  113 => 39,  148 => 44,  104 => 42,  77 => 20,  225 => 83,  222 => 81,  218 => 77,  215 => 78,  205 => 59,  200 => 55,  197 => 56,  186 => 54,  181 => 79,  160 => 52,  129 => 42,  124 => 43,  23 => 1,  480 => 151,  474 => 149,  469 => 158,  461 => 149,  457 => 131,  453 => 124,  444 => 142,  440 => 148,  437 => 147,  435 => 258,  430 => 103,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 95,  402 => 130,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 63,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 28,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 60,  204 => 73,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 39,  71 => 32,  67 => 33,  63 => 30,  59 => 29,  87 => 38,  94 => 36,  89 => 17,  85 => 37,  75 => 31,  68 => 16,  56 => 12,  28 => 14,  38 => 18,  24 => 13,  26 => 14,  21 => 11,  31 => 16,  25 => 13,  201 => 57,  196 => 71,  183 => 82,  171 => 63,  166 => 57,  163 => 60,  158 => 37,  156 => 57,  151 => 45,  142 => 42,  138 => 50,  136 => 39,  121 => 42,  117 => 50,  105 => 26,  91 => 39,  62 => 30,  49 => 17,  19 => 11,  93 => 40,  88 => 32,  78 => 36,  46 => 9,  44 => 20,  27 => 14,  79 => 33,  72 => 30,  69 => 34,  47 => 23,  40 => 6,  37 => 5,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 33,  120 => 48,  115 => 40,  111 => 41,  108 => 144,  101 => 37,  98 => 38,  96 => 139,  83 => 35,  74 => 19,  66 => 23,  55 => 21,  52 => 25,  50 => 22,  43 => 21,  41 => 20,  35 => 17,  32 => 16,  29 => 15,  209 => 24,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 102,  173 => 71,  168 => 60,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 66,  133 => 51,  130 => 35,  125 => 40,  122 => 44,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 23,  95 => 37,  92 => 28,  86 => 25,  82 => 23,  80 => 28,  73 => 27,  64 => 31,  60 => 13,  57 => 14,  54 => 26,  51 => 29,  48 => 15,  45 => 20,  42 => 19,  39 => 20,  36 => 18,  33 => 17,  30 => 15,);
    }
}
