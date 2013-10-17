<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_59d0da231560625d17aa6a3cb0e5371de7b4fad3eccbae83d90d44fbae0758d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if ((!($_label_ === false))) {
            // line 16
            echo "        ";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => ((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
            if ((!$_compound_)) {
                // line 19
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("for" => $_id_));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 22
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (twig_test_empty($_label_)) {
                // line 26
                echo "            ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($_name_));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (isset($context["in_list_checkbox"])) { $_in_list_checkbox_ = $context["in_list_checkbox"]; } else { $_in_list_checkbox_ = null; }
            if (((array_key_exists("in_list_checkbox", $context) && $_in_list_checkbox_) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
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
                // line 31
                if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
                echo $_widget_;
                echo "
                <span>
                    ";
                // line 33
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 34
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 36
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_label_attr_);
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
                // line 42
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 43
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $_label_, 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
                echo (($_required_) ? ("*") : (""));
                echo "
            </label>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"
        ";
        // line 57
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attr_);
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
            echo "=\"";
            if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
            if (($_attrname_ == "class")) {
                echo "unstyled ";
            }
            if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
            echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (!twig_in_filter("class", $_attr_)) {
            echo "class=\"unstyled\"";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
            echo "
                ";
            // line 68
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if ($_compound_) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["form_widget_content"])) { $_form_widget_content_ = $context["form_widget_content"]; } else { $_form_widget_content_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label', array("in_list_checkbox" => true, "widget" => $_form_widget_content_) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_child_, "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
    ";
        } else {
            // line 89
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
            if ((!(null === $_empty_value_))) {
                // line 91
                echo "            <option value=\"\">
                ";
                // line 92
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ((!$this->getAttribute($_sonata_admin_, "admin"))) {
                    // line 93
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $_translation_domain_), "html", null, true);
                } else {
                    // line 95
                    if (isset($context["empty_value"])) { $_empty_value_ = $context["empty_value"]; } else { $_empty_value_ = null; }
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_empty_value_, array(), $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "html", null, true);
                }
                // line 97
                echo "            </option>
        ";
            }
            // line 99
            echo "        ";
            if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
            if ((twig_length_filter($this->env, $_preferred_choices_) > 0)) {
                // line 100
                echo "            ";
                if (isset($context["preferred_choices"])) { $_preferred_choices_ = $context["preferred_choices"]; } else { $_preferred_choices_ = null; }
                $context["options"] = $_preferred_choices_;
                // line 101
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 102
                if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
                if ((twig_length_filter($this->env, $_choices_) > 0)) {
                    // line 103
                    echo "                <option disabled=\"disabled\">";
                    if (isset($context["separator"])) { $_separator_ = $context["separator"]; } else { $_separator_ = null; }
                    echo twig_escape_filter($this->env, $_separator_, "html", null, true);
                    echo "</option>
            ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "        ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            $context["options"] = $_choices_;
            // line 107
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_form_row($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        if (isset($context["sonata_admin_enabled"])) { $_sonata_admin_enabled_ = $context["sonata_admin_enabled"]; } else { $_sonata_admin_enabled_ = null; }
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ((((!array_key_exists("sonata_admin", $context)) || (!$_sonata_admin_enabled_)) || (!$this->getAttribute($_sonata_admin_, "field_description")))) {
            // line 115
            echo "        <div class=\"control-group ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 116
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 118
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "
                ";
            // line 119
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 124
            echo "            </div>
        </div>
    ";
        } else {
            // line 127
            echo "        <div class=\"control-group";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">
            ";
            // line 128
            $this->displayBlock('label', $context, $blocks);
            // line 135
            echo "
            <div class=\"controls sonata-ba-field sonata-ba-field-";
            // line 136
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
            echo "-";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
            echo " ";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 138
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "

                ";
            // line 140
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_length_filter($this->env, $_errors_) > 0)) {
                // line 141
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 142
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                echo "
                    </div>
                ";
            }
            // line 145
            echo "
                ";
            // line 146
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if ($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help")) {
                // line 147
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 149
            echo "            </div>
        </div>
    ";
        }
    }

    // line 128
    public function block_label($context, array $blocks = array())
    {
        // line 129
        echo "                ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 130
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 132
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($_label_, null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 134
        echo "            ";
    }

    // line 154
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 157
        if (isset($context["allow_delete"])) { $_allow_delete_ = $context["allow_delete"]; } else { $_allow_delete_ = null; }
        if ($_allow_delete_) {
            // line 158
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 160
        echo "        ";
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["child"] = $_prototype_;
            // line 169
            echo "        ";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (isset($context["prototype"])) { $_prototype_ = $context["prototype"]; } else { $_prototype_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($_prototype_, "vars"), "name"), "class" => ((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class"), "")) : ("")) . " controls")));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 172
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        ";
        // line 173
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 174
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        ";
        // line 177
        if (isset($context["allow_add"])) { $_allow_add_ = $context["allow_add"]; } else { $_allow_add_ = null; }
        if ($_allow_add_) {
            // line 178
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 180
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 184
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        ob_start();
        // line 186
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 187
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "

            ";
        // line 189
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 190
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
            ";
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 199
        echo "    ";
        ob_start();
        // line 200
        echo "        <div class=\"control-group";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-";
        if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
        echo twig_escape_filter($this->env, $_key_, "html", null, true);
        echo "\">

            ";
        // line 202
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 204
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "edit"), "html", null, true);
        echo "-";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_sonata_admin_, "inline"), "html", null, true);
        echo " ";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 205
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
        echo "
            </div>

            ";
        // line 208
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 209
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 210
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
            echo "
                </div>
            ";
        }
        // line 213
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  800 => 213,  793 => 210,  790 => 209,  787 => 208,  780 => 205,  767 => 204,  761 => 202,  746 => 200,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 185,  676 => 184,  670 => 180,  666 => 178,  663 => 177,  657 => 176,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 130,  540 => 128,  533 => 149,  523 => 146,  520 => 145,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 128,  471 => 127,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 79,  315 => 78,  311 => 77,  309 => 76,  300 => 71,  290 => 68,  270 => 63,  228 => 55,  203 => 45,  353 => 89,  347 => 142,  341 => 140,  337 => 84,  334 => 138,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 123,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 99,  216 => 89,  175 => 76,  113 => 52,  20 => 11,  179 => 67,  174 => 66,  164 => 64,  151 => 61,  132 => 50,  73 => 25,  139 => 41,  64 => 183,  61 => 13,  99 => 47,  317 => 115,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 93,  244 => 100,  238 => 84,  230 => 80,  225 => 54,  200 => 85,  168 => 58,  154 => 62,  116 => 38,  126 => 47,  119 => 31,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 98,  267 => 62,  262 => 59,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 87,  205 => 72,  199 => 70,  191 => 66,  123 => 42,  42 => 62,  94 => 23,  91 => 26,  185 => 54,  176 => 41,  172 => 59,  165 => 74,  159 => 63,  144 => 39,  87 => 43,  68 => 17,  79 => 14,  161 => 34,  141 => 49,  128 => 44,  103 => 21,  86 => 29,  83 => 28,  74 => 17,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 90,  169 => 75,  167 => 58,  153 => 68,  148 => 51,  145 => 76,  135 => 59,  82 => 16,  23 => 3,  54 => 153,  31 => 3,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 103,  375 => 101,  365 => 91,  362 => 90,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 82,  327 => 88,  321 => 86,  307 => 128,  302 => 108,  295 => 124,  287 => 101,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 50,  201 => 66,  143 => 61,  138 => 38,  134 => 45,  131 => 29,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 23,  72 => 198,  69 => 197,  51 => 24,  48 => 13,  35 => 16,  29 => 11,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 86,  198 => 43,  194 => 64,  150 => 67,  147 => 66,  127 => 28,  112 => 29,  96 => 21,  76 => 13,  71 => 16,  110 => 41,  89 => 17,  65 => 18,  63 => 18,  58 => 12,  34 => 53,  114 => 24,  109 => 27,  106 => 20,  101 => 38,  85 => 16,  77 => 17,  67 => 184,  28 => 13,  55 => 23,  43 => 20,  26 => 13,  24 => 2,  39 => 61,  57 => 154,  50 => 10,  47 => 75,  38 => 17,  25 => 5,  227 => 14,  224 => 92,  221 => 90,  207 => 70,  197 => 84,  195 => 42,  192 => 66,  189 => 81,  186 => 65,  181 => 78,  178 => 61,  173 => 59,  162 => 56,  158 => 33,  155 => 55,  152 => 31,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 12,  53 => 7,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 40,  46 => 21,  44 => 74,  40 => 8,  36 => 6,  32 => 13,  27 => 3,  22 => 2,  232 => 95,  226 => 71,  222 => 76,  215 => 73,  211 => 47,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 38,  166 => 36,  163 => 80,  160 => 71,  157 => 48,  149 => 51,  146 => 60,  140 => 60,  137 => 37,  129 => 44,  124 => 27,  121 => 56,  118 => 30,  115 => 26,  111 => 23,  107 => 22,  104 => 39,  97 => 24,  93 => 45,  90 => 22,  81 => 15,  70 => 33,  66 => 23,  62 => 165,  59 => 164,  56 => 13,  52 => 113,  49 => 112,  45 => 9,  41 => 4,  37 => 54,  33 => 12,  30 => 3,);
    }
}
