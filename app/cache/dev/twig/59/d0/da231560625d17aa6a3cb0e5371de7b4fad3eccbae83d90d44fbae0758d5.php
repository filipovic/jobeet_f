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
        if ((!($this->getContext($context, "label") === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!$this->getContext($context, "compound"))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ($this->getContext($context, "required")) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty($this->getContext($context, "label"))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo $this->getContext($context, "widget");
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getContext($context, "label"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                echo (($this->getContext($context, "required")) ? ("*") : (""));
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
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
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
        if ($this->getContext($context, "compound")) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->getContext($context, "form_widget_content")) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
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
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 91
                echo "            <option value=\"\">
                ";
                // line 92
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 97
                echo "            </option>
        ";
            }
            // line 99
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 100
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 101
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 102
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 103
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
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
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 115
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls\">
                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
                ";
            // line 119
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 120
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 121
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
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
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 128
            $this->displayBlock('label', $context, $blocks);
            // line 135
            echo "
            <div class=\"controls sonata-ba-field sonata-ba-field-";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "

                ";
            // line 140
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 141
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 145
            echo "
                ";
            // line 146
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 147
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method");
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 130
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 132
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
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
        if ($this->getContext($context, "allow_delete")) {
            // line 158
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 160
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
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
            $context["child"] = $this->getContext($context, "prototype");
            // line 169
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($this->getContext($context, "prototype"), "vars"), "name"), "class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " controls")));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 177
        if ($this->getContext($context, "allow_add")) {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

            ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "\">

            ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
        echo "
            </div>

            ";
        // line 208
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 209
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors');
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
        return array (  701 => 213,  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 176,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  513 => 165,  504 => 160,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  321 => 91,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 79,  277 => 78,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  191 => 50,  178 => 45,  175 => 43,  76 => 13,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  292 => 134,  286 => 80,  280 => 130,  274 => 77,  263 => 71,  256 => 120,  242 => 112,  192 => 87,  185 => 85,  170 => 78,  165 => 76,  20 => 11,  53 => 23,  137 => 60,  97 => 39,  34 => 53,  126 => 51,  118 => 28,  114 => 34,  70 => 33,  90 => 18,  110 => 25,  84 => 16,  65 => 16,  265 => 125,  260 => 123,  248 => 115,  236 => 63,  232 => 93,  216 => 99,  211 => 84,  195 => 77,  188 => 73,  184 => 47,  152 => 38,  100 => 40,  81 => 15,  172 => 66,  153 => 71,  146 => 34,  113 => 35,  148 => 63,  104 => 23,  77 => 28,  225 => 83,  222 => 82,  218 => 14,  215 => 13,  205 => 10,  200 => 55,  197 => 54,  186 => 99,  181 => 97,  160 => 75,  129 => 39,  124 => 45,  23 => 3,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 131,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 115,  268 => 126,  264 => 84,  258 => 81,  252 => 101,  247 => 66,  241 => 77,  229 => 73,  220 => 87,  214 => 98,  177 => 65,  169 => 60,  140 => 52,  132 => 59,  128 => 58,  107 => 24,  61 => 18,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 91,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 61,  143 => 56,  135 => 53,  119 => 37,  102 => 41,  71 => 19,  67 => 184,  63 => 17,  59 => 164,  87 => 17,  94 => 38,  89 => 25,  85 => 25,  75 => 39,  68 => 22,  56 => 10,  28 => 3,  38 => 17,  24 => 4,  26 => 13,  21 => 2,  31 => 3,  25 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 74,  156 => 65,  151 => 63,  142 => 44,  138 => 61,  136 => 60,  121 => 29,  117 => 47,  105 => 40,  91 => 31,  62 => 165,  49 => 112,  19 => 1,  93 => 26,  88 => 20,  78 => 40,  46 => 21,  44 => 74,  27 => 13,  79 => 14,  72 => 198,  69 => 197,  47 => 75,  40 => 19,  37 => 54,  22 => 2,  246 => 90,  157 => 41,  145 => 78,  139 => 31,  131 => 49,  123 => 30,  120 => 56,  115 => 27,  111 => 45,  108 => 38,  101 => 22,  98 => 21,  96 => 29,  83 => 22,  74 => 19,  66 => 18,  55 => 14,  52 => 113,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 13,  29 => 11,  209 => 95,  203 => 56,  199 => 67,  193 => 73,  189 => 71,  187 => 86,  182 => 84,  176 => 81,  173 => 42,  168 => 65,  164 => 67,  162 => 53,  154 => 80,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 41,  125 => 38,  122 => 29,  116 => 41,  112 => 26,  109 => 44,  106 => 26,  103 => 53,  99 => 35,  95 => 20,  92 => 19,  86 => 43,  82 => 24,  80 => 41,  73 => 19,  64 => 183,  60 => 23,  57 => 154,  54 => 153,  51 => 24,  48 => 9,  45 => 20,  42 => 62,  39 => 61,  36 => 17,  33 => 4,  30 => 5,);
    }
}
