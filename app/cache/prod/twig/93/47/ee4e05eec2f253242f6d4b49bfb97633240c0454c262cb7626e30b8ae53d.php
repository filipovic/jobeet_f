<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_9347ee4e05eec2f253242f6d4b49bfb97633240c0454c262cb7626e30b8ae53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_form($context, array $blocks = array())
    {
        // line 24
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 25
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute($_admin_, "id", array(0 => $_object_), "method"), "uniqid" => $this->getAttribute($_admin_, "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 27
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((!$this->getAttribute($_admin_pool_, "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 28
        echo "              >
        ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars"), "errors")) > 0)) {
            // line 30
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 31
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
            </div>
        ";
        }
        // line 34
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 39
        if (isset($context["permissions"])) { $_permissions_ = $context["permissions"]; } else { $_permissions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_permissions_);
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 40
            echo "                    <th>";
            if (isset($context["permission"])) { $_permission_ = $context["permission"]; } else { $_permission_ = null; }
            echo twig_escape_filter($this->env, $_permission_, "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 45
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $_user_, "html", null, true);
            echo "</td>
                    ";
            // line 48
            if (isset($context["permissions"])) { $_permissions_ = $context["permissions"]; } else { $_permissions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_permissions_);
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 49
                echo "                    <td>";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["permission"])) { $_permission_ = $context["permission"]; } else { $_permission_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, ($this->getAttribute($_user_, "id") . $_permission_), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

        ";
        // line 58
        $this->displayBlock('formactions', $context, $blocks);
        // line 63
        echo "    </form>
";
    }

    // line 58
    public function block_formactions($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 72,  280 => 69,  259 => 67,  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 125,  400 => 133,  392 => 129,  342 => 109,  336 => 111,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 83,  289 => 69,  284 => 70,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 136,  411 => 106,  401 => 122,  398 => 121,  393 => 118,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 108,  320 => 80,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 51,  175 => 76,  113 => 42,  20 => 1,  179 => 60,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 30,  139 => 42,  64 => 15,  61 => 14,  99 => 39,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 47,  168 => 63,  154 => 48,  116 => 26,  126 => 47,  119 => 44,  95 => 25,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 19,  94 => 38,  91 => 23,  185 => 54,  176 => 59,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 21,  68 => 16,  79 => 27,  161 => 44,  141 => 49,  128 => 44,  103 => 40,  86 => 14,  83 => 13,  74 => 19,  234 => 57,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 51,  145 => 53,  135 => 40,  82 => 34,  23 => 11,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 115,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 48,  122 => 37,  117 => 37,  108 => 54,  102 => 28,  92 => 37,  84 => 35,  72 => 28,  69 => 28,  51 => 21,  48 => 18,  35 => 16,  29 => 15,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 68,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 31,  112 => 42,  96 => 38,  76 => 30,  71 => 27,  110 => 142,  89 => 32,  65 => 23,  63 => 26,  58 => 25,  34 => 16,  114 => 44,  109 => 23,  106 => 140,  101 => 36,  85 => 29,  77 => 24,  67 => 27,  28 => 14,  55 => 29,  43 => 16,  26 => 14,  24 => 11,  39 => 18,  57 => 24,  50 => 23,  47 => 25,  38 => 20,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 51,  189 => 50,  186 => 66,  181 => 55,  178 => 63,  173 => 58,  162 => 56,  158 => 43,  155 => 53,  152 => 58,  142 => 55,  136 => 49,  133 => 47,  130 => 46,  120 => 38,  105 => 19,  100 => 138,  75 => 29,  60 => 25,  53 => 24,  19 => 11,  98 => 39,  88 => 34,  80 => 19,  78 => 30,  46 => 14,  44 => 24,  40 => 16,  36 => 17,  32 => 15,  27 => 16,  22 => 11,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 49,  180 => 64,  171 => 92,  166 => 58,  163 => 59,  160 => 56,  157 => 48,  149 => 39,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 30,  121 => 77,  118 => 45,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 65,  90 => 15,  81 => 31,  70 => 25,  66 => 17,  62 => 22,  59 => 21,  56 => 25,  52 => 14,  49 => 26,  45 => 20,  41 => 21,  37 => 18,  33 => 16,  30 => 16,);
    }
}
