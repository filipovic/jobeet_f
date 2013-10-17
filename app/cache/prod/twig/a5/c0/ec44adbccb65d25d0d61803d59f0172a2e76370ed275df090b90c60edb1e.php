<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a5c0ec44adbccb65d25d0d61803d59f0172a2e76370ed275df090b90c60edb1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "
        <title>
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 83
        if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
        if ((!twig_test_empty($__title_))) {
            // line 84
            echo "                ";
            if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
            echo $__title_;
            echo "
            ";
        } else {
            // line 86
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 87
                echo "                    -
                    ";
                // line 88
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 89
                    echo "                        ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "first"))) {
                        // line 90
                        echo "                            &gt;
                        ";
                    }
                    // line 92
                    echo "                        ";
                    if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                ";
            }
            // line 95
            echo "            ";
        }
        // line 96
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 98
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if (twig_test_empty($__side_menu_)) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 100
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 110
        if (array_key_exists("admin_pool", $context)) {
            // line 111
            echo "                        <div class=\"navbar-text pull-right\">";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_pool_, "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 113
            $this->displayBlock('logo', $context, $blocks);
            // line 119
            echo "
                        ";
            // line 120
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 172
            echo "                    ";
        }
        // line 173
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 178
        $this->displayBlock('notice', $context, $blocks);
        // line 188
        echo "
            <div class=\"row-fluid\">
                ";
        // line 190
        if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
        if (((!twig_test_empty($__breadcrumb_)) || array_key_exists("action", $context))) {
            // line 191
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 193
            if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
            if (twig_test_empty($__breadcrumb_)) {
                // line 194
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 195
                    echo "                                    ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 196
                        echo "                                        ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if ((!$this->getAttribute($_loop_, "last"))) {
                            // line 197
                            echo "                                            <li>
                                                ";
                            // line 198
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            if ((!twig_test_empty($this->getAttribute($_menu_, "uri")))) {
                                // line 199
                                echo "                                                    <a href=\"";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "uri"), "html", null, true);
                                echo "\">";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 201
                                echo "                                                    ";
                                if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 203
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 206
                            echo "                                            <li class=\"active\">";
                            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 208
                        echo "                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "                                ";
                }
                // line 210
                echo "                            ";
            } else {
                // line 211
                echo "                                ";
                if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
                echo $__breadcrumb_;
                echo "
                            ";
            }
            // line 213
            echo "                        </ul>
                    </div>
                ";
        }
        // line 216
        echo "
                ";
        // line 217
        if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
        if ((!twig_test_empty($__actions_))) {
            // line 218
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 219
            if (isset($context["_actions"])) { $__actions_ = $context["_actions"]; } else { $__actions_ = null; }
            echo $__actions_;
            echo "
                    </div>
                ";
        }
        // line 222
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 225
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if ((!twig_test_empty($__side_menu_))) {
            // line 226
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 227
            if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
            echo $__side_menu_;
            echo "</div>
                    </div>
                ";
        }
        // line 230
        echo "
                <div class=\"content ";
        // line 231
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        echo (((!twig_test_empty($__side_menu_))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 232
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 262
        echo "                </div>
            </div>

            ";
        // line 265
        $this->displayBlock('footer', $context, $blocks);
        // line 272
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            ";
        // line 36
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            // line 37
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 48
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 58
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 59
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 60
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 62
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            ";
        // line 71
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "use_select2"), "method"))) {
            // line 72
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        // line 74
        echo "
            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 76
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($_admin_pool_, "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 113
    public function block_logo($context, array $blocks = array())
    {
        // line 114
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 115
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_admin_pool_, "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "\" />
                                ";
        // line 116
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 120
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 121
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 123
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 124
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 157
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 158
        echo "                                </ul>

                                ";
        // line 160
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 169
        echo "
                            </div>
                        ";
    }

    // line 123
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 124
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 125
        echo "                                        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 126
            echo "                                            ";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 127
                echo "                                                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["display"] = (twig_test_empty($this->getAttribute($_group_, "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 128
                echo "                                                ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                    if ((!$_display_)) {
                        // line 129
                        echo "                                                    ";
                        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
                        $context["display"] = $this->env->getExtension('security')->isGranted($_role_);
                        // line 130
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "
                                                ";
                // line 133
                echo "                                                ";
                $context["item_count"] = 0;
                // line 134
                echo "                                                ";
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if ($_display_) {
                    // line 135
                    echo "                                                    ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                        if (($_item_count_ == 0)) {
                            // line 136
                            echo "                                                        ";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                                // line 137
                                echo "                                                            ";
                                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                                $context["item_count"] = ($_item_count_ + 1);
                                // line 138
                                echo "                                                        ";
                            }
                            // line 139
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                                                ";
                }
                // line 141
                echo "
                                                ";
                // line 142
                if (isset($context["display"])) { $_display_ = $context["display"]; } else { $_display_ = null; }
                if (isset($context["item_count"])) { $_item_count_ = $context["item_count"]; } else { $_item_count_ = null; }
                if (($_display_ && ($_item_count_ > 0))) {
                    // line 143
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 144
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 146
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 147
                        echo "                                                            ";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                            // line 148
                            echo "                                                                <li><a href=\"";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 150
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 154
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                        ";
        }
        // line 156
        echo "                                    ";
    }

    // line 157
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 160
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 161
        echo "                                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 162
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 164
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"/>
                                            </div>
                                        </form>
                                    ";
        }
        // line 168
        echo "                                ";
    }

    // line 178
    public function block_notice($context, array $blocks = array())
    {
        // line 179
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 180
            echo "                    ";
            if (isset($context["notice_level"])) { $_notice_level_ = $context["notice_level"]; } else { $_notice_level_ = null; }
            $context["session_var"] = ("sonata_flash_" . $_notice_level_);
            // line 181
            echo "                    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["session_var"])) { $_session_var_ = $context["session_var"]; } else { $_session_var_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => $_session_var_), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 182
                echo "                        <div class=\"alert ";
                if (isset($context["notice_level"])) { $_notice_level_ = $context["notice_level"]; } else { $_notice_level_ = null; }
                echo twig_escape_filter($this->env, ("alert-" . $_notice_level_), "html", null, true);
                echo "\">
                            ";
                // line 183
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flash_, array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "            ";
    }

    // line 232
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 233
        echo "
                        ";
        // line 234
        if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
        if ((!twig_test_empty($__preview_))) {
            // line 235
            echo "                            <div class=\"sonata-ba-preview\">";
            if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
            echo $__preview_;
            echo "</div>
                        ";
        }
        // line 237
        echo "
                        ";
        // line 238
        if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
        if ((!twig_test_empty($__content_))) {
            // line 239
            echo "                            <div class=\"sonata-ba-content\">";
            if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
            echo $__content_;
            echo "</div>
                        ";
        }
        // line 241
        echo "
                        ";
        // line 242
        if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
        if ((!twig_test_empty($__show_))) {
            // line 243
            echo "                            <div class=\"sonata-ba-show\">";
            if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
            echo $__show_;
            echo "</div>
                        ";
        }
        // line 245
        echo "
                        ";
        // line 246
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if ((!twig_test_empty($__form_))) {
            // line 247
            echo "                            <div class=\"sonata-ba-form\">";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            echo $__form_;
            echo "</div>
                        ";
        }
        // line 249
        echo "
                        ";
        // line 250
        if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
        if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
        if (((!twig_test_empty($__list_table_)) || (!twig_test_empty($__list_filters_)))) {
            // line 251
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 253
            if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
            echo $__list_table_;
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 256
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            echo $__list_filters_;
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 260
        echo "
                    ";
    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        // line 266
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 266,  863 => 265,  858 => 260,  850 => 256,  843 => 253,  839 => 251,  835 => 250,  832 => 249,  825 => 247,  822 => 246,  819 => 245,  812 => 243,  809 => 242,  806 => 241,  799 => 239,  796 => 238,  786 => 235,  783 => 234,  773 => 187,  757 => 183,  751 => 182,  744 => 181,  735 => 179,  732 => 178,  718 => 164,  712 => 162,  708 => 161,  705 => 160,  695 => 156,  692 => 155,  686 => 154,  681 => 151,  675 => 150,  665 => 148,  661 => 147,  656 => 146,  650 => 144,  643 => 142,  637 => 140,  630 => 139,  627 => 138,  623 => 137,  611 => 135,  590 => 129,  568 => 125,  565 => 124,  551 => 160,  544 => 157,  541 => 124,  539 => 123,  532 => 120,  511 => 114,  494 => 76,  490 => 75,  481 => 72,  478 => 71,  468 => 67,  443 => 59,  430 => 56,  427 => 55,  397 => 37,  364 => 22,  255 => 201,  245 => 199,  409 => 97,  399 => 94,  369 => 86,  360 => 84,  351 => 82,  333 => 227,  305 => 66,  12 => 34,  642 => 179,  629 => 177,  624 => 176,  610 => 171,  603 => 169,  594 => 130,  583 => 161,  577 => 160,  564 => 158,  559 => 123,  545 => 153,  535 => 121,  528 => 149,  524 => 116,  521 => 134,  516 => 115,  509 => 131,  500 => 123,  492 => 105,  479 => 103,  474 => 102,  438 => 83,  432 => 95,  426 => 83,  407 => 127,  343 => 231,  340 => 230,  310 => 77,  304 => 75,  299 => 64,  280 => 55,  259 => 67,  125 => 47,  372 => 87,  370 => 28,  358 => 115,  350 => 262,  324 => 104,  291 => 210,  252 => 80,  246 => 78,  184 => 120,  467 => 98,  464 => 66,  454 => 62,  442 => 147,  410 => 138,  406 => 136,  403 => 95,  400 => 133,  392 => 129,  342 => 79,  336 => 111,  329 => 106,  318 => 70,  314 => 69,  294 => 211,  283 => 88,  269 => 84,  254 => 78,  777 => 232,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 157,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 143,  636 => 330,  628 => 326,  619 => 136,  615 => 173,  607 => 134,  601 => 131,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 169,  531 => 150,  515 => 272,  508 => 113,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 97,  436 => 224,  418 => 100,  412 => 48,  396 => 196,  384 => 188,  379 => 117,  373 => 29,  367 => 183,  357 => 272,  339 => 78,  331 => 109,  303 => 156,  235 => 196,  213 => 54,  188 => 69,  156 => 45,  21 => 11,  220 => 79,  170 => 61,  386 => 90,  383 => 94,  380 => 125,  366 => 116,  326 => 84,  322 => 222,  289 => 69,  284 => 70,  242 => 198,  223 => 53,  212 => 194,  800 => 213,  793 => 237,  790 => 209,  787 => 410,  780 => 233,  767 => 186,  761 => 202,  746 => 390,  743 => 199,  740 => 180,  731 => 193,  728 => 168,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 141,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 133,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 128,  578 => 127,  575 => 157,  572 => 126,  570 => 155,  567 => 159,  563 => 134,  555 => 132,  547 => 158,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 77,  487 => 74,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 96,  453 => 95,  448 => 118,  433 => 115,  428 => 93,  425 => 113,  415 => 99,  411 => 106,  401 => 122,  398 => 121,  393 => 92,  389 => 34,  385 => 33,  381 => 32,  376 => 30,  371 => 93,  368 => 92,  349 => 87,  328 => 75,  320 => 80,  315 => 219,  311 => 68,  309 => 217,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 81,  319 => 103,  313 => 130,  297 => 96,  292 => 149,  288 => 209,  272 => 31,  266 => 83,  258 => 105,  250 => 102,  241 => 60,  216 => 23,  175 => 76,  113 => 45,  20 => 11,  179 => 113,  174 => 53,  164 => 49,  151 => 44,  132 => 40,  73 => 30,  139 => 56,  64 => 26,  61 => 20,  99 => 38,  317 => 79,  296 => 106,  282 => 89,  276 => 86,  268 => 84,  263 => 83,  244 => 100,  238 => 59,  230 => 80,  225 => 70,  200 => 102,  168 => 63,  154 => 48,  116 => 46,  126 => 47,  119 => 44,  95 => 88,  316 => 115,  306 => 216,  301 => 213,  286 => 101,  275 => 140,  267 => 206,  262 => 203,  248 => 129,  243 => 86,  229 => 56,  218 => 77,  210 => 64,  205 => 191,  199 => 63,  191 => 69,  123 => 46,  42 => 20,  94 => 37,  91 => 33,  185 => 54,  176 => 59,  172 => 62,  165 => 45,  159 => 58,  144 => 44,  87 => 29,  68 => 55,  79 => 83,  161 => 44,  141 => 49,  128 => 44,  103 => 37,  86 => 19,  83 => 34,  74 => 81,  234 => 24,  217 => 11,  214 => 10,  209 => 193,  206 => 72,  190 => 59,  182 => 68,  177 => 38,  169 => 110,  167 => 48,  153 => 41,  148 => 51,  145 => 53,  135 => 40,  82 => 84,  23 => 12,  54 => 22,  31 => 11,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 132,  505 => 124,  502 => 147,  497 => 122,  491 => 144,  488 => 255,  483 => 142,  473 => 69,  469 => 132,  466 => 124,  460 => 65,  455 => 129,  450 => 60,  444 => 122,  441 => 84,  437 => 120,  434 => 58,  429 => 116,  423 => 82,  420 => 51,  416 => 50,  413 => 131,  408 => 105,  394 => 36,  390 => 97,  375 => 123,  365 => 91,  362 => 117,  359 => 118,  355 => 265,  348 => 232,  344 => 90,  330 => 226,  327 => 225,  321 => 102,  307 => 76,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 66,  251 => 27,  239 => 197,  231 => 72,  219 => 68,  201 => 66,  143 => 95,  138 => 52,  134 => 45,  131 => 52,  122 => 92,  117 => 48,  108 => 46,  102 => 28,  92 => 87,  84 => 38,  72 => 30,  69 => 33,  51 => 21,  48 => 20,  35 => 13,  29 => 15,  312 => 218,  308 => 94,  293 => 92,  285 => 60,  281 => 100,  277 => 54,  274 => 208,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 65,  249 => 79,  247 => 61,  237 => 57,  204 => 104,  198 => 188,  194 => 45,  150 => 98,  147 => 44,  127 => 49,  112 => 42,  96 => 43,  76 => 31,  71 => 32,  110 => 40,  89 => 86,  65 => 54,  63 => 28,  58 => 25,  34 => 15,  114 => 89,  109 => 23,  106 => 140,  101 => 44,  85 => 29,  77 => 35,  67 => 31,  28 => 14,  55 => 24,  43 => 17,  26 => 14,  24 => 11,  39 => 15,  57 => 24,  50 => 23,  47 => 19,  38 => 18,  25 => 12,  227 => 70,  224 => 92,  221 => 69,  207 => 70,  197 => 53,  195 => 52,  192 => 58,  189 => 173,  186 => 172,  181 => 119,  178 => 63,  173 => 58,  162 => 56,  158 => 43,  155 => 53,  152 => 45,  142 => 57,  136 => 55,  133 => 52,  130 => 46,  120 => 38,  105 => 19,  100 => 36,  75 => 31,  60 => 25,  53 => 10,  19 => 11,  98 => 39,  88 => 34,  80 => 36,  78 => 33,  46 => 21,  44 => 20,  40 => 18,  36 => 17,  32 => 13,  27 => 13,  22 => 12,  232 => 95,  226 => 71,  222 => 55,  215 => 195,  211 => 47,  208 => 66,  202 => 190,  196 => 178,  193 => 60,  187 => 54,  183 => 52,  180 => 64,  171 => 111,  166 => 48,  163 => 59,  160 => 47,  157 => 100,  149 => 39,  146 => 96,  140 => 94,  137 => 48,  129 => 39,  124 => 50,  121 => 77,  118 => 90,  115 => 41,  111 => 22,  107 => 39,  104 => 45,  97 => 30,  93 => 42,  90 => 15,  81 => 27,  70 => 79,  66 => 32,  62 => 25,  59 => 29,  56 => 25,  52 => 23,  49 => 20,  45 => 18,  41 => 16,  37 => 14,  33 => 12,  30 => 15,);
    }
}
