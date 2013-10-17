<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_2385793b994f1d4a7498c2f1d9dc9830a00d64002091ed11c42f71b93ff025ae extends Twig_Template
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
        echo "    ";
        if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
        if ((($this->getAttribute($_field_description_, "hasassociationadmin") && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                echo "            <a href=\"";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_description_, "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "name"), 1 => $_element_, 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_field_description_, "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $_field_description_), "html", null, true);
                echo "</a>";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ((!$this->getAttribute($_loop_, "last"))) {
                    echo ", ";
                }
                // line 18
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 21
                echo "            ";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $_field_description_), "html", null, true);
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ((!$this->getAttribute($_loop_, "last"))) {
                    echo ", ";
                }
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 23,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 109,  336 => 107,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 106,  303 => 156,  235 => 73,  213 => 76,  188 => 57,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 105,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 75,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 57,  174 => 53,  164 => 49,  151 => 55,  132 => 50,  73 => 25,  139 => 41,  64 => 23,  61 => 21,  99 => 47,  317 => 81,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 52,  154 => 48,  116 => 36,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 13,  94 => 33,  91 => 30,  185 => 54,  176 => 56,  172 => 61,  165 => 90,  159 => 63,  144 => 44,  87 => 29,  68 => 17,  79 => 27,  161 => 50,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 20,  74 => 50,  234 => 73,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 53,  177 => 38,  169 => 75,  167 => 50,  153 => 46,  148 => 51,  145 => 53,  135 => 75,  82 => 57,  23 => 18,  54 => 38,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 99,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 81,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 76,  138 => 38,  134 => 45,  131 => 48,  122 => 40,  117 => 39,  108 => 54,  102 => 21,  92 => 18,  84 => 29,  72 => 198,  69 => 23,  51 => 40,  48 => 18,  35 => 16,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 79,  247 => 75,  237 => 57,  204 => 63,  198 => 71,  194 => 45,  150 => 45,  147 => 45,  127 => 39,  112 => 29,  96 => 60,  76 => 29,  71 => 25,  110 => 73,  89 => 32,  65 => 24,  63 => 4,  58 => 20,  34 => 16,  114 => 38,  109 => 37,  106 => 20,  101 => 68,  85 => 29,  77 => 56,  67 => 22,  28 => 14,  55 => 21,  43 => 18,  26 => 14,  24 => 12,  39 => 17,  57 => 20,  50 => 20,  47 => 35,  38 => 17,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 84,  195 => 60,  192 => 69,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 55,  162 => 56,  158 => 57,  155 => 55,  152 => 81,  142 => 38,  136 => 41,  133 => 41,  130 => 40,  120 => 37,  105 => 49,  100 => 20,  75 => 26,  60 => 40,  53 => 19,  19 => 11,  98 => 33,  88 => 25,  80 => 19,  78 => 24,  46 => 19,  44 => 74,  40 => 16,  36 => 15,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 69,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 80,  160 => 48,  157 => 48,  149 => 51,  146 => 60,  140 => 43,  137 => 50,  129 => 47,  124 => 27,  121 => 77,  118 => 30,  115 => 67,  111 => 22,  107 => 63,  104 => 34,  97 => 34,  93 => 64,  90 => 35,  81 => 25,  70 => 25,  66 => 18,  62 => 49,  59 => 22,  56 => 20,  52 => 17,  49 => 19,  45 => 17,  41 => 16,  37 => 17,  33 => 16,  30 => 3,);
    }
}
