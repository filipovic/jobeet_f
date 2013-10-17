<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_cf8c8a43ad58a1ad72c6a07a231aaec58685b30fdffdbff49d873a5d2004b9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig");

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"icon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"icon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if ($_name_) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $_name_), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (isset($context["view_group"])) { $_view_group_ = $context["view_group"]; } else { $_view_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_view_group_, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                if ($this->getAttribute($this->getAttribute($_admin_, "show", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute($_admin_, "show"), $_field_name_, array(), "array"), $_object_);
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 97,  399 => 94,  369 => 86,  360 => 84,  351 => 82,  333 => 76,  305 => 66,  12 => 34,  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 64,  280 => 55,  259 => 67,  125 => 47,  372 => 87,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 62,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 95,  400 => 133,  392 => 129,  342 => 79,  336 => 111,  329 => 106,  318 => 70,  314 => 69,  294 => 63,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 100,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 78,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 90,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 72,  289 => 69,  284 => 70,  242 => 25,  223 => 53,  212 => 21,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 99,  411 => 106,  401 => 122,  398 => 121,  393 => 92,  389 => 91,  385 => 126,  381 => 97,  376 => 88,  371 => 93,  368 => 92,  349 => 87,  328 => 75,  320 => 80,  315 => 78,  311 => 68,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 61,  272 => 31,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 23,  175 => 76,  113 => 45,  20 => 11,  179 => 60,  174 => 53,  164 => 49,  151 => 44,  132 => 40,  73 => 30,  139 => 56,  64 => 26,  61 => 20,  99 => 38,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 102,  168 => 63,  154 => 48,  116 => 46,  126 => 47,  119 => 44,  95 => 35,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 20,  94 => 37,  91 => 33,  185 => 54,  176 => 59,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 29,  68 => 16,  79 => 32,  161 => 44,  141 => 49,  128 => 44,  103 => 37,  86 => 19,  83 => 34,  74 => 34,  234 => 24,  217 => 11,  214 => 10,  209 => 20,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 51,  145 => 53,  135 => 40,  82 => 34,  23 => 12,  54 => 23,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 83,  348 => 81,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 27,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 52,  122 => 48,  117 => 48,  108 => 46,  102 => 28,  92 => 32,  84 => 38,  72 => 30,  69 => 33,  51 => 19,  48 => 20,  35 => 16,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 60,  281 => 100,  277 => 54,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 104,  198 => 60,  194 => 45,  150 => 45,  147 => 44,  127 => 49,  112 => 42,  96 => 43,  76 => 31,  71 => 32,  110 => 40,  89 => 36,  65 => 12,  63 => 31,  58 => 25,  34 => 16,  114 => 44,  109 => 23,  106 => 140,  101 => 44,  85 => 29,  77 => 35,  67 => 31,  28 => 14,  55 => 24,  43 => 20,  26 => 14,  24 => 11,  39 => 18,  57 => 22,  50 => 23,  47 => 25,  38 => 18,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 58,  189 => 57,  186 => 66,  181 => 55,  178 => 63,  173 => 58,  162 => 56,  158 => 43,  155 => 53,  152 => 45,  142 => 57,  136 => 55,  133 => 52,  130 => 46,  120 => 38,  105 => 19,  100 => 36,  75 => 31,  60 => 25,  53 => 10,  19 => 11,  98 => 39,  88 => 34,  80 => 36,  78 => 33,  46 => 21,  44 => 20,  40 => 18,  36 => 17,  32 => 14,  27 => 14,  22 => 11,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 54,  183 => 52,  180 => 64,  171 => 92,  166 => 48,  163 => 59,  160 => 47,  157 => 48,  149 => 39,  146 => 57,  140 => 44,  137 => 48,  129 => 39,  124 => 50,  121 => 77,  118 => 45,  115 => 41,  111 => 22,  107 => 39,  104 => 45,  97 => 30,  93 => 42,  90 => 15,  81 => 27,  70 => 13,  66 => 32,  62 => 25,  59 => 29,  56 => 27,  52 => 23,  49 => 23,  45 => 21,  41 => 17,  37 => 17,  33 => 16,  30 => 15,);
    }
}
