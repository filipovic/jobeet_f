<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_7925c6eac8c4b1e56735735d4ef7f48bacccd38809360bb93de58f85227d4ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        $context["url"] = (((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        if ((!$this->getAttribute($_admin_, "hasRoute", array(0 => $_url_), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 10
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => $_url_, 1 => array("id" => $this->getAttribute($_admin_, "id", array(0 => $_object_), "method"), "uniqid" => $this->getAttribute($_admin_, "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 12
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            if ((!$this->getAttribute($_admin_pool_, "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 13
            echo "              >
            ";
            // line 14
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars"), "errors")) > 0)) {
                // line 15
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 16
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                </div>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 33
            echo "
                <div class=\"tab-content\">
                    ";
            // line 35
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "formgroups"));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 36
                echo "                        <div class=\"tab-pane ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    echo " active";
                }
                echo "\" id=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
                echo "_";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 39
                if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                if (($this->getAttribute($_form_group_, "description") != false)) {
                    // line 40
                    echo "                                        <p>";
                    if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                    echo $this->getAttribute($_form_group_, "description");
                    echo "</p>
                                    ";
                }
                // line 42
                echo "
                                    ";
                // line 43
                if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_group_, "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 44
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                    if ($this->getAttribute($this->getAttribute($_admin_, "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                        // line 45
                        echo "                                            ";
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $_field_name_, array(), "array"), 'row');
                        echo "
                                        ";
                    }
                    // line 47
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                </div>
                            </fieldset>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>

            ";
            // line 54
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 57
            echo "
            ";
            // line 58
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "

            ";
            // line 60
            $this->displayBlock('formactions', $context, $blocks);
            // line 102
            echo "        </form>
    ";
        }
        // line 104
        echo "
";
    }

    // line 20
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 21
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 23
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 24
            echo "                            <li class=\"";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 25
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
            echo "_";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 27
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["form_group"])) { $_form_group_ = $context["form_group"]; } else { $_form_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $_name_, 1 => array(), 2 => $this->getAttribute($_form_group_, "translation_domain")), "method"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
            ";
    }

    // line 54
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 55
        echo "                </div>
            ";
    }

    // line 60
    public function block_formactions($context, array $blocks = array())
    {
        // line 61
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 62
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "request"), "isxmlhttprequest")) {
            // line 63
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
                // line 64
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 66
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "supportsPreviewMode")) {
                // line 70
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"icon-eye-open\"></i>
                                ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 75
            echo "                        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
            if ((!(null === $this->getAttribute($_admin_, "id", array(0 => $_object_), "method")))) {
                // line 76
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 78
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method")) {
                    // line 79
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 81
                echo "
                            ";
                // line 82
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                if (($this->getAttribute($_admin_, "hasroute", array(0 => "delete"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "DELETE", 1 => $_object_), "method"))) {
                    // line 83
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 84
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "delete", 1 => $_object_), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 86
                echo "
                            ";
                // line 87
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                if ((($this->getAttribute($_admin_, "isAclEnabled", array(), "method") && $this->getAttribute($_admin_, "hasroute", array(0 => "acl"), "method")) && $this->getAttribute($_admin_, "isGranted", array(0 => "MASTER", 1 => $_object_), "method"))) {
                    // line 88
                    echo "                                <a class=\"btn\" href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateObjectUrl", array(0 => "acl", 1 => $_object_), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "edit"), "method")) {
                    // line 92
                    echo "                                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 94
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if ($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method")) {
                    // line 95
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 97
                echo "                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  409 => 97,  399 => 94,  369 => 86,  360 => 84,  351 => 82,  333 => 76,  305 => 66,  12 => 34,  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 64,  280 => 55,  259 => 67,  125 => 47,  372 => 87,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 62,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 95,  400 => 133,  392 => 129,  342 => 79,  336 => 111,  329 => 106,  318 => 70,  314 => 69,  294 => 63,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 100,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 78,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 90,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 72,  289 => 69,  284 => 70,  242 => 25,  223 => 53,  212 => 21,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 99,  411 => 106,  401 => 122,  398 => 121,  393 => 92,  389 => 91,  385 => 126,  381 => 97,  376 => 88,  371 => 93,  368 => 92,  349 => 87,  328 => 75,  320 => 80,  315 => 78,  311 => 68,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 61,  272 => 31,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 23,  175 => 76,  113 => 36,  20 => 11,  179 => 60,  174 => 53,  164 => 49,  151 => 44,  132 => 40,  73 => 14,  139 => 42,  64 => 15,  61 => 14,  99 => 39,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 102,  168 => 63,  154 => 48,  116 => 26,  126 => 47,  119 => 44,  95 => 35,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 46,  42 => 19,  94 => 38,  91 => 33,  185 => 54,  176 => 59,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 29,  68 => 16,  79 => 16,  161 => 44,  141 => 49,  128 => 44,  103 => 37,  86 => 19,  83 => 13,  74 => 19,  234 => 24,  217 => 11,  214 => 10,  209 => 20,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 51,  145 => 53,  135 => 40,  82 => 34,  23 => 1,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 83,  348 => 81,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 27,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 48,  122 => 37,  117 => 37,  108 => 54,  102 => 28,  92 => 32,  84 => 28,  72 => 28,  69 => 19,  51 => 16,  48 => 20,  35 => 16,  29 => 2,  312 => 100,  308 => 94,  293 => 92,  285 => 60,  281 => 100,  277 => 54,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 104,  198 => 60,  194 => 45,  150 => 45,  147 => 44,  127 => 31,  112 => 42,  96 => 38,  76 => 15,  71 => 27,  110 => 142,  89 => 20,  65 => 12,  63 => 26,  58 => 25,  34 => 3,  114 => 44,  109 => 23,  106 => 140,  101 => 36,  85 => 29,  77 => 24,  67 => 22,  28 => 14,  55 => 29,  43 => 14,  26 => 14,  24 => 11,  39 => 18,  57 => 24,  50 => 9,  47 => 25,  38 => 17,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 58,  189 => 57,  186 => 66,  181 => 55,  178 => 63,  173 => 58,  162 => 56,  158 => 43,  155 => 53,  152 => 45,  142 => 43,  136 => 49,  133 => 47,  130 => 46,  120 => 38,  105 => 19,  100 => 36,  75 => 25,  60 => 25,  53 => 10,  19 => 11,  98 => 39,  88 => 34,  80 => 19,  78 => 26,  46 => 15,  44 => 6,  40 => 16,  36 => 17,  32 => 15,  27 => 13,  22 => 11,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 54,  183 => 52,  180 => 64,  171 => 92,  166 => 48,  163 => 59,  160 => 47,  157 => 48,  149 => 39,  146 => 57,  140 => 43,  137 => 48,  129 => 39,  124 => 30,  121 => 77,  118 => 45,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 65,  90 => 15,  81 => 27,  70 => 13,  66 => 17,  62 => 22,  59 => 18,  56 => 23,  52 => 22,  49 => 26,  45 => 20,  41 => 5,  37 => 4,  33 => 16,  30 => 14,);
    }
}
