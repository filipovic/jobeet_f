<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_7f8f205d84b1fc77d51db95ad8d61dc2a30dfa6185b605dc728f5c4f42df8dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
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
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($_admin_, "sidemenu", array(0 => $_action_), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context["batchactions"] = $this->getAttribute($_admin_, "batchactions");
        // line 24
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results")) > 0)) {
            // line 25
            echo "        ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 26
                echo "        <form action=\"";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($_admin_, "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 27
                if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
                echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
                echo "\" />
        ";
            }
            // line 29
            echo "            <table class=\"table table-bordered table-striped\">
                ";
            // line 30
            $this->displayBlock('table_header', $context, $blocks);
            // line 64
            echo "
                ";
            // line 65
            $this->displayBlock('table_body', $context, $blocks);
            // line 74
            echo "
                ";
            // line 75
            $this->displayBlock('table_footer', $context, $blocks);
            // line 138
            echo "            </table>
        ";
            // line 139
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method")) {
                // line 140
                echo "        </form>
        ";
            }
            // line 142
            echo "    ";
        } else {
            // line 143
            echo "        <p class=\"notice\">
            ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 30
    public function block_table_header($context, array $blocks = array())
    {
        // line 31
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 33
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                                ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 35
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif (($this->getAttribute($_field_description_, "getOption", array(0 => "code"), "method") == "_select")) {
                // line 39
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                ";
            } elseif ((($this->getAttribute($_field_description_, "name") == "_action") && $this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
                // line 41
                echo "                                        ";
                // line 42
                echo "                                ";
            } else {
                // line 43
                echo "                                    ";
                $context["sortable"] = false;
                // line 44
                echo "                                    ";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                if (($this->getAttribute($this->getAttribute($_field_description_, "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_field_description_, "options"), "sortable"))) {
                    // line 45
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 46
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "sortparameters", array(0 => $_field_description_, 1 => $this->getAttribute($_admin_, "datagrid")), "method");
                    // line 47
                    echo "                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by") == $_field_description_) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute($_sort_parameters_, "filter"), "_sort_by")));
                    // line 48
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    $context["sort_active_class"] = (($_current_) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 49
                    echo "                                        ";
                    if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                    $context["sort_by"] = (($_current_) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($_field_description_, "options"), "_sort_order")));
                    // line 50
                    echo "                                    ";
                }
                // line 51
                echo "
                                    ";
                // line 52
                ob_start();
                // line 53
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_description_, "type"), "html", null, true);
                echo " ";
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo " sonata-ba-list-field-header-order-";
                    if (isset($context["sort_by"])) { $_sort_by_ = $context["sort_by"]; } else { $_sort_by_ = null; }
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_sort_by_), "html", null, true);
                    echo " ";
                    if (isset($context["sort_active_class"])) { $_sort_active_class_ = $context["sort_active_class"]; } else { $_sort_active_class_ = null; }
                    echo twig_escape_filter($this->env, $_sort_active_class_, "html", null, true);
                }
                echo "\">
                                            ";
                // line 54
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "<a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["sort_parameters"])) { $_sort_parameters_ = $context["sort_parameters"]; } else { $_sort_parameters_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => $_sort_parameters_), "method"), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo "                                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_field_description_, "label")), "method"), "html", null, true);
                echo "
                                            ";
                // line 56
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "</a>";
                }
                // line 57
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 59
                echo "                                ";
            }
            // line 60
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 65
    public function block_table_body($context, array $blocks = array())
    {
        // line 66
        echo "                    <tbody>
                        ";
        // line 67
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                            <tr>
                                ";
            // line 69
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 70
            echo "                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                ";
    }

    // line 75
    public function block_table_footer($context, array $blocks = array())
    {
        // line 76
        echo "                    <tr>
                        <th colspan=\"";
        // line 77
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "list"), "elements")) - (($this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($_admin_, "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 79
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_app_, "request"), "isXmlHttpRequest"))) {
            // line 80
            echo "                                    ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
            if (($this->getAttribute($_admin_, "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, $_batchactions_) > 0))) {
                // line 81
                echo "                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 108
                echo "
                                        <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                                    ";
            }
            // line 111
            echo "
                                    <div class=\"pull-right\">
                                        ";
            // line 113
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ((($this->getAttribute($_admin_, "hasRoute", array(0 => "export"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($_admin_, "getExportFormats", array(), "method")))) {
                // line 114
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                            ";
                // line 115
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "getExportFormats", array(), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 116
                    echo "                                                <a href=\"";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($_admin_, "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($_admin_, "datagrid"), 1 => 0), "method") + array("format" => $_format_))), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["format"])) { $_format_ = $context["format"]; } else { $_format_ = null; }
                    echo twig_escape_filter($this->env, $_format_, "html", null, true);
                    echo "</a>";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "last"))) {
                        echo ",";
                    }
                    // line 117
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "
                                            &nbsp;-&nbsp;
                                        ";
            }
            // line 121
            echo "
                                        ";
            // line 122
            $this->displayBlock('pager_results', $context, $blocks);
            // line 125
            echo "                                    </div>
                                ";
        }
        // line 127
        echo "                            </div>
                        </th>
                    </tr>

                    ";
        // line 131
        $this->displayBlock('pager_links', $context, $blocks);
        // line 136
        echo "
                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                            <script type=\"text/javascript\">
                                                ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                            </script>

                                            ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 107
        echo "                                        ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').click(function () {
                                                            \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                        \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                            \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                        });
                                                    });
                                                ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                                <label class=\"checkbox\" for=\"";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                </label>

                                                <select name=\"action\" style=\"width: auto; height: auto\">
                                                    ";
        // line 102
        if (isset($context["batchactions"])) { $_batchactions_ = $context["batchactions"]; } else { $_batchactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_batchactions_);
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                        <option value=\"";
            if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
            echo twig_escape_filter($this->env, $_action_, "html", null, true);
            echo "\">";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_options_, "label"), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                </select>
                                            ";
    }

    // line 122
    public function block_pager_results($context, array $blocks = array())
    {
        // line 123
        echo "                                            ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 124
        echo "                                        ";
    }

    // line 131
    public function block_pager_links($context, array $blocks = array())
    {
        // line 132
        echo "                        ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 133
            echo "                            ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_, "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 134
            echo "                        ";
        }
        // line 135
        echo "                    ";
    }

    // line 149
    public function block_list_filters($context, array $blocks = array())
    {
        // line 150
        echo "    ";
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters")) {
            // line 151
            echo "        <form class=\"sonata-filter-form ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo ((($this->getAttribute($_admin_, "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 153
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 155
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo (($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 157
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_admin_, "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 158
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 159
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "trans", array(0 => $this->getAttribute($_filter_, "label")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 160
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 161
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_filter_, "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 168
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 169
            echo "                    ";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 173
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 176
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 177
                echo "                    <input type=\"hidden\" name=\"";
                if (isset($context["paramKey"])) { $_paramKey_ = $context["paramKey"]; } else { $_paramKey_ = null; }
                echo twig_escape_filter($this->env, $_paramKey_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["paramValue"])) { $_paramValue_ = $context["paramValue"]; } else { $_paramValue_ = null; }
                echo twig_escape_filter($this->env, $_paramValue_, "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 164,  583 => 161,  577 => 160,  564 => 158,  559 => 157,  545 => 153,  535 => 151,  528 => 149,  524 => 135,  521 => 134,  516 => 133,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 114,  340 => 113,  310 => 77,  304 => 75,  299 => 72,  280 => 69,  259 => 67,  125 => 47,  372 => 122,  370 => 121,  358 => 115,  350 => 112,  324 => 104,  291 => 93,  252 => 80,  246 => 78,  184 => 58,  467 => 98,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 125,  400 => 133,  392 => 129,  342 => 109,  336 => 111,  329 => 106,  318 => 101,  314 => 100,  294 => 95,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 173,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 155,  531 => 150,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 117,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 109,  303 => 156,  235 => 73,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 95,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 83,  289 => 69,  284 => 70,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 136,  411 => 106,  401 => 122,  398 => 121,  393 => 118,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 108,  320 => 80,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 51,  175 => 76,  113 => 143,  20 => 1,  179 => 48,  174 => 53,  164 => 49,  151 => 44,  132 => 50,  73 => 26,  139 => 42,  64 => 27,  61 => 23,  99 => 39,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 47,  168 => 46,  154 => 48,  116 => 144,  126 => 46,  119 => 44,  95 => 74,  316 => 115,  306 => 75,  301 => 98,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 65,  199 => 63,  191 => 69,  123 => 43,  42 => 25,  94 => 33,  91 => 37,  185 => 54,  176 => 64,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 26,  68 => 25,  79 => 27,  161 => 44,  141 => 49,  128 => 44,  103 => 139,  86 => 25,  83 => 33,  74 => 19,  234 => 57,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 75,  167 => 48,  153 => 41,  148 => 47,  145 => 53,  135 => 40,  82 => 29,  23 => 13,  54 => 17,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 84,  437 => 120,  434 => 107,  429 => 116,  423 => 82,  420 => 81,  416 => 139,  413 => 131,  408 => 105,  394 => 105,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 89,  348 => 115,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 77,  239 => 69,  231 => 72,  219 => 68,  201 => 66,  143 => 35,  138 => 52,  134 => 45,  131 => 33,  122 => 37,  117 => 37,  108 => 54,  102 => 33,  92 => 18,  84 => 35,  72 => 29,  69 => 25,  51 => 21,  48 => 21,  35 => 15,  29 => 14,  312 => 100,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 68,  274 => 86,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 63,  198 => 72,  194 => 45,  150 => 45,  147 => 45,  127 => 31,  112 => 42,  96 => 38,  76 => 30,  71 => 27,  110 => 142,  89 => 32,  65 => 24,  63 => 23,  58 => 22,  34 => 16,  114 => 36,  109 => 37,  106 => 140,  101 => 36,  85 => 29,  77 => 24,  67 => 27,  28 => 14,  55 => 22,  43 => 16,  26 => 13,  24 => 11,  39 => 18,  57 => 23,  50 => 20,  47 => 18,  38 => 23,  25 => 13,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 51,  189 => 50,  186 => 66,  181 => 55,  178 => 63,  173 => 47,  162 => 56,  158 => 43,  155 => 42,  152 => 58,  142 => 55,  136 => 34,  133 => 47,  130 => 46,  120 => 38,  105 => 34,  100 => 138,  75 => 30,  60 => 25,  53 => 20,  19 => 11,  98 => 75,  88 => 30,  80 => 32,  78 => 29,  46 => 21,  44 => 26,  40 => 15,  36 => 17,  32 => 15,  27 => 16,  22 => 11,  232 => 95,  226 => 71,  222 => 55,  215 => 68,  211 => 47,  208 => 66,  202 => 64,  196 => 61,  193 => 60,  187 => 100,  183 => 49,  180 => 64,  171 => 92,  166 => 59,  163 => 59,  160 => 46,  157 => 48,  149 => 39,  146 => 57,  140 => 43,  137 => 48,  129 => 40,  124 => 30,  121 => 77,  118 => 36,  115 => 42,  111 => 22,  107 => 39,  104 => 34,  97 => 30,  93 => 65,  90 => 64,  81 => 21,  70 => 25,  66 => 17,  62 => 16,  59 => 15,  56 => 21,  52 => 14,  49 => 19,  45 => 17,  41 => 18,  37 => 14,  33 => 14,  30 => 16,);
    }
}
