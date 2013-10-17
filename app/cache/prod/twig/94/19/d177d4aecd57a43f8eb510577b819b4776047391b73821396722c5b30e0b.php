<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_9419d177d4aecd57a43f8eb510577b819b4776047391b73821396722c5b30e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label', $context, $blocks);
        // line 64
        echo "
";
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row', $context, $blocks);
        // line 78
        echo "
";
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if (isset($context["expanded"])) { $_expanded_ = $context["expanded"]; } else { $_expanded_ = null; }
        if ($_expanded_) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                ob_start();
                // line 10
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 12
                echo "                ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["form_widget_content"])) { $_form_widget_content_ = $context["form_widget_content"]; } else { $_form_widget_content_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label', array("in_list_checkbox" => true, "widget" => $_form_widget_content_));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    ";
        } else {
            // line 17
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 18
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if ((!(null === $_empty_value_))) {
                // line 19
                echo "            <option value=\"\">";
                if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "        ";
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
                // line 22
                echo "            ";
                if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
                $context["options"] = $_preferred_choices_;
                // line 23
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 24
                if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
                if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                if (((twig_length_filter($this->env, $_choices_) > 0) && (!(null === $_separator_)))) {
                    // line 25
                    echo "                <option disabled=\"disabled\">";
                    if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                    echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                    echo "</option>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "        ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            $context["options"] = $_choices_;
            // line 29
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 36
        ob_start();
        // line 37
        echo "    ";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($_type_, "text")) : ("text"));
        // line 38
        echo "    <input type=\"";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $_type_, "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label($context, array $blocks = array())
    {
        // line 45
        ob_start();
        // line 46
        echo "    ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ((!$_compound_)) {
            // line 47
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("for" => $_id_));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            // line 50
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " required")));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        if (isset($context["in_list_checkbox"])) { $_in_list_checkbox_ = $context["in_list_checkbox"]; } else { $_in_list_checkbox_ = null; }
        if (((array_key_exists("in_list_checkbox", $context) && $_in_list_checkbox_) && array_key_exists("widget", $context))) {
            // line 53
            echo "        <label";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 54
            if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
            echo $_widget_;
            echo "
            <span>
                ";
            // line 56
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 60
            echo "        <label";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_row($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    <div class=\"control-group ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')))) ? ("error") : (""));
        echo " \">
        ";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
            ";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_form_errors($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 84
            echo "        ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (((!$this->getAttribute($_form_, "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes", array(), "array")))) {
                // line 85
                echo "            <div class=\"control-group error\">
        ";
            }
            // line 87
            echo "        <span class=\"help-inline\">
            ";
            // line 88
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "                ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    // line 90
                    echo "                    ";
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 92
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </span>
        ";
            // line 94
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (((!$this->getAttribute($_form_, "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute($_form_, "vars"), "block_prefixes", array(), "array")))) {
                // line 95
                echo "            </div>
        ";
            }
            // line 97
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  386 => 95,  383 => 94,  380 => 93,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 50,  800 => 213,  793 => 210,  790 => 209,  787 => 208,  780 => 205,  767 => 204,  761 => 202,  746 => 200,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 185,  676 => 184,  670 => 180,  666 => 178,  663 => 177,  657 => 176,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 130,  540 => 128,  533 => 149,  523 => 146,  520 => 145,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 128,  471 => 127,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 77,  309 => 76,  300 => 71,  290 => 68,  270 => 63,  228 => 55,  203 => 45,  353 => 89,  347 => 142,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 123,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 99,  216 => 51,  175 => 76,  113 => 52,  20 => 11,  179 => 67,  174 => 66,  164 => 64,  151 => 27,  132 => 50,  73 => 25,  139 => 41,  64 => 183,  61 => 13,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 93,  244 => 100,  238 => 84,  230 => 80,  225 => 54,  200 => 47,  168 => 35,  154 => 28,  116 => 18,  126 => 47,  119 => 19,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 98,  267 => 62,  262 => 59,  248 => 56,  243 => 86,  229 => 80,  218 => 77,  210 => 87,  205 => 48,  199 => 70,  191 => 44,  123 => 42,  42 => 64,  94 => 23,  91 => 12,  185 => 54,  176 => 41,  172 => 59,  165 => 74,  159 => 63,  144 => 25,  87 => 43,  68 => 17,  79 => 8,  161 => 34,  141 => 49,  128 => 44,  103 => 15,  86 => 29,  83 => 28,  74 => 7,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 58,  153 => 68,  148 => 51,  145 => 76,  135 => 23,  82 => 9,  23 => 3,  54 => 153,  31 => 3,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 101,  365 => 91,  362 => 90,  359 => 90,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 86,  307 => 73,  302 => 72,  295 => 70,  287 => 68,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 52,  201 => 66,  143 => 61,  138 => 38,  134 => 45,  131 => 22,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 10,  72 => 198,  69 => 6,  51 => 24,  48 => 67,  35 => 16,  29 => 34,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 60,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 86,  198 => 43,  194 => 45,  150 => 67,  147 => 66,  127 => 21,  112 => 29,  96 => 21,  76 => 13,  71 => 16,  110 => 41,  89 => 17,  65 => 5,  63 => 4,  58 => 12,  34 => 41,  114 => 24,  109 => 27,  106 => 20,  101 => 38,  85 => 16,  77 => 17,  67 => 184,  28 => 13,  55 => 23,  43 => 20,  26 => 13,  24 => 2,  39 => 61,  57 => 154,  50 => 78,  47 => 75,  38 => 17,  25 => 5,  227 => 14,  224 => 92,  221 => 90,  207 => 70,  197 => 84,  195 => 42,  192 => 66,  189 => 81,  186 => 65,  181 => 78,  178 => 61,  173 => 37,  162 => 56,  158 => 29,  155 => 55,  152 => 31,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 3,  53 => 80,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 40,  46 => 21,  44 => 74,  40 => 44,  36 => 6,  32 => 35,  27 => 3,  22 => 2,  232 => 95,  226 => 71,  222 => 76,  215 => 73,  211 => 47,  208 => 49,  202 => 68,  196 => 46,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 36,  166 => 36,  163 => 80,  160 => 71,  157 => 48,  149 => 51,  146 => 60,  140 => 24,  137 => 37,  129 => 44,  124 => 27,  121 => 56,  118 => 30,  115 => 26,  111 => 23,  107 => 17,  104 => 39,  97 => 24,  93 => 45,  90 => 22,  81 => 15,  70 => 33,  66 => 23,  62 => 165,  59 => 164,  56 => 81,  52 => 113,  49 => 112,  45 => 66,  41 => 4,  37 => 43,  33 => 12,  30 => 3,);
    }
}
