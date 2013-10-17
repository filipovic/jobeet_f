<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_3bea9919d7f036a620da77c0e6ec5e29a5dda8f1257a6353bb61479e615ee73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "getLinks", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (($_page_ == $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => $_page_), "method")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $_page_, "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => $_page_), "method")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $_page_, "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 109,  336 => 107,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 106,  303 => 156,  235 => 73,  213 => 76,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 105,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 75,  216 => 51,  175 => 76,  113 => 41,  20 => 1,  179 => 57,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 31,  139 => 42,  64 => 24,  61 => 19,  99 => 32,  317 => 81,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 52,  154 => 48,  116 => 36,  126 => 47,  119 => 42,  95 => 18,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 43,  42 => 19,  94 => 33,  91 => 33,  185 => 54,  176 => 64,  172 => 62,  165 => 62,  159 => 58,  144 => 44,  87 => 26,  68 => 25,  79 => 34,  161 => 60,  141 => 49,  128 => 44,  103 => 31,  86 => 27,  83 => 33,  74 => 50,  234 => 73,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 46,  148 => 47,  145 => 53,  135 => 40,  82 => 29,  23 => 13,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 99,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 81,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 76,  138 => 52,  134 => 45,  131 => 43,  122 => 37,  117 => 37,  108 => 54,  102 => 33,  92 => 18,  84 => 35,  72 => 31,  69 => 23,  51 => 21,  48 => 21,  35 => 22,  29 => 14,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 79,  247 => 75,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 45,  112 => 38,  96 => 37,  76 => 30,  71 => 27,  110 => 30,  89 => 32,  65 => 24,  63 => 28,  58 => 26,  34 => 15,  114 => 36,  109 => 37,  106 => 39,  101 => 36,  85 => 16,  77 => 24,  67 => 27,  28 => 14,  55 => 22,  43 => 17,  26 => 14,  24 => 11,  39 => 12,  57 => 23,  50 => 19,  47 => 19,  38 => 17,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 84,  195 => 60,  192 => 71,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 49,  162 => 56,  158 => 57,  155 => 59,  152 => 58,  142 => 55,  136 => 41,  133 => 47,  130 => 46,  120 => 38,  105 => 34,  100 => 27,  75 => 32,  60 => 25,  53 => 20,  19 => 11,  98 => 33,  88 => 36,  80 => 32,  78 => 29,  46 => 21,  44 => 17,  40 => 16,  36 => 16,  32 => 21,  27 => 16,  22 => 11,  232 => 95,  226 => 71,  222 => 69,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 46,  157 => 48,  149 => 51,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 41,  121 => 77,  118 => 36,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 31,  90 => 28,  81 => 26,  70 => 25,  66 => 26,  62 => 23,  59 => 22,  56 => 21,  52 => 21,  49 => 19,  45 => 20,  41 => 18,  37 => 19,  33 => 17,  30 => 16,);
    }
}
