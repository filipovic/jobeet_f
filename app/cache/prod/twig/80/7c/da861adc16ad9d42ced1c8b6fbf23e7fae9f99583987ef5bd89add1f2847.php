<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_807cda861adc16ad9d42ced1c8b6fbf23e7fae9f99583987ef5bd89add1f2847 extends Twig_Template
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
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_value_);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_element_, $this->getAttribute($_sonata_admin_, "field_description")), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" >
            ";
            // line 19
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 20
                echo "                ";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (($this->getAttribute($_sonata_admin_, "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                        // line 22
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                            if (($_field_name_ == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo (($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 30
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_nested_field_, "vars"), "sonata_admin", array(), "array"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "label")), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 33
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 34
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 37
                        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 38
                            echo "                                    <tr>
                                        ";
                            // line 39
                            if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_nested_group_field_, "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 40
                                echo "                                            <td class=\"sonata-ba-td-";
                                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                                echo "-";
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                echo twig_escape_filter($this->env, $_field_name_, "html", null, true);
                                echo " control-group";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "errors")) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 41
                                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                                if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                                    // line 42
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "

                                                    ";
                                    // line 44
                                    if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                    $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                    // line 45
                                    echo "                                                ";
                                } else {
                                    // line 46
                                    echo "                                                    ";
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                    echo "
                                                ";
                                }
                                // line 48
                                echo "                                                ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_nested_field_, "vars"), "errors")) > 0)) {
                                    // line 49
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 50
                                    if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 53
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 57
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 60
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($_form_, "children")) > 0)) {
                    // line 61
                    echo "                    <div>
                        ";
                    // line 62
                    if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "children"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 63
                        echo "                            ";
                        if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_nested_group_field_, "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 64
                            echo "                                ";
                            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                            if (isset($context["field_name"])) { $_field_name_ = $context["field_name"]; } else { $_field_name_ = null; }
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $_field_name_, array(), "array", true, true)) {
                                // line 65
                                echo "                                    ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget', array("inline" => "natural", "edit" => "inline"));
                                // line 68
                                echo "
                                    ";
                                // line 69
                                if (isset($context["nested_group_field"])) { $_nested_group_field_ = $context["nested_group_field"]; } else { $_nested_group_field_ = null; }
                                $context["dummy"] = $this->getAttribute($_nested_group_field_, "setrendered");
                                // line 70
                                echo "                                ";
                            } else {
                                // line 71
                                echo "                                    ";
                                if (isset($context["nested_field"])) { $_nested_field_ = $context["nested_field"]; } else { $_nested_field_ = null; }
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_nested_field_, 'widget');
                                echo "
                                ";
                            }
                            // line 73
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    </div>
                ";
                }
                // line 77
                echo "            ";
            } else {
                // line 78
                echo "                ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
            ";
            }
            // line 80
            echo "
        </span>

        ";
            // line 83
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
                // line 84
                echo "
            ";
                // line 85
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 86
                    echo "                <span id=\"field_actions_";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 88
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 89
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 91
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 94
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 98
                echo "
            ";
                // line 100
                echo "            ";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 101
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 102
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 106
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 109
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 111
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 118
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "-";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 124
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 125
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 126
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 129
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 133
                echo "
            ";
                // line 135
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 136
                echo "
        ";
            } else {
                // line 138
                echo "            <span id=\"field_actions_";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" >
                ";
                // line 139
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                    // line 140
                    echo "                    <a
                        href=\"";
                    // line 141
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 142
                    if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                    echo twig_escape_filter($this->env, $_id_, "html", null, true);
                    echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                    // line 144
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                    // line 147
                    if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                    if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 150
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 152
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\">

            </div>

            ";
                // line 156
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 157
                echo "        ";
            }
            // line 158
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 111,  336 => 109,  329 => 106,  318 => 101,  314 => 100,  294 => 91,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 169,  303 => 156,  235 => 73,  213 => 76,  188 => 57,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 74,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 53,  164 => 49,  151 => 55,  132 => 50,  73 => 25,  139 => 41,  64 => 23,  61 => 21,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 86,  268 => 94,  263 => 136,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 73,  199 => 62,  191 => 69,  123 => 46,  42 => 13,  94 => 30,  91 => 30,  185 => 54,  176 => 93,  172 => 61,  165 => 90,  159 => 63,  144 => 25,  87 => 29,  68 => 17,  79 => 27,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 50,  234 => 86,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 50,  153 => 46,  148 => 51,  145 => 53,  135 => 75,  82 => 9,  23 => 18,  54 => 38,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 124,  365 => 91,  362 => 90,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 73,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 58,  251 => 77,  239 => 69,  231 => 56,  219 => 68,  201 => 66,  143 => 76,  138 => 38,  134 => 45,  131 => 48,  122 => 40,  117 => 39,  108 => 54,  102 => 23,  92 => 18,  84 => 28,  72 => 198,  69 => 23,  51 => 19,  48 => 18,  35 => 16,  29 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 87,  247 => 75,  237 => 57,  204 => 63,  198 => 71,  194 => 45,  150 => 45,  147 => 44,  127 => 71,  112 => 29,  96 => 60,  76 => 29,  71 => 16,  110 => 42,  89 => 17,  65 => 22,  63 => 4,  58 => 12,  34 => 16,  114 => 38,  109 => 37,  106 => 20,  101 => 61,  85 => 29,  77 => 17,  67 => 24,  28 => 13,  55 => 23,  43 => 17,  26 => 20,  24 => 12,  39 => 17,  57 => 20,  50 => 78,  47 => 75,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 79,  207 => 70,  197 => 84,  195 => 70,  192 => 69,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 81,  142 => 38,  136 => 41,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 26,  60 => 40,  53 => 19,  19 => 11,  98 => 33,  88 => 25,  80 => 52,  78 => 40,  46 => 19,  44 => 74,  40 => 16,  36 => 16,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 69,  215 => 65,  211 => 47,  208 => 49,  202 => 107,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 80,  160 => 48,  157 => 48,  149 => 51,  146 => 60,  140 => 42,  137 => 50,  129 => 47,  124 => 27,  121 => 69,  118 => 30,  115 => 67,  111 => 23,  107 => 63,  104 => 34,  97 => 38,  93 => 45,  90 => 35,  81 => 15,  70 => 25,  66 => 22,  62 => 165,  59 => 21,  56 => 20,  52 => 113,  49 => 19,  45 => 33,  41 => 4,  37 => 17,  33 => 15,  30 => 3,);
    }
}
