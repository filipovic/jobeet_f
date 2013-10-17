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
        if ((!twig_test_empty($this->getContext($context, "_title")))) {
            // line 84
            echo "                ";
            echo $this->getContext($context, "_title");
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
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        // line 90
                        echo "                            &gt;
                        ";
                    }
                    // line 92
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
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
        if (twig_test_empty($this->getContext($context, "_side_menu"))) {
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
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin_pool"), "getTemplate", array(0 => "user_block"), "method"));
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
        if (((!twig_test_empty($this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 191
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 193
            if (twig_test_empty($this->getContext($context, "_breadcrumb"))) {
                // line 194
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 195
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array(0 => $this->getContext($context, "action")), "method"));
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
                        if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                            // line 197
                            echo "                                            <li>
                                                ";
                            // line 198
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "uri")))) {
                                // line 199
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 201
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
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
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "label"), "html", null, true);
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
                echo $this->getContext($context, "_breadcrumb");
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
        if ((!twig_test_empty($this->getContext($context, "_actions")))) {
            // line 218
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 219
            echo $this->getContext($context, "_actions");
            echo "
                    </div>
                ";
        }
        // line 222
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 225
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 226
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 227
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                    </div>
                ";
        }
        // line 230
        echo "
                <div class=\"content ";
        // line 231
        echo (((!twig_test_empty($this->getContext($context, "_side_menu")))) ? (" span10") : ("span12"));
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 59
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "use_select2"), "method"))) {
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
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "confirm_exit"), "method"))) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "admin_pool"), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin_pool"), "title"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 126
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin_pool"), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 127
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 128
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!$this->getContext($context, "display"))) {
                        // line 129
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
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
                if ($this->getContext($context, "display")) {
                    // line 135
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (($this->getContext($context, "item_count") == 0)) {
                            // line 136
                            echo "                                                        ";
                            if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 137
                                echo "                                                            ";
                                $context["item_count"] = ($this->getContext($context, "item_count") + 1);
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
                if (($this->getContext($context, "display") && ($this->getContext($context, "item_count") > 0))) {
                    // line 143
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 146
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 147
                        echo "                                                            ";
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 148
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 162
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                            <div class=\"input-append\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "q"), "method"), "html", null, true);
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
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 181
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => $this->getContext($context, "session_var")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 182
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $this->getContext($context, "notice_level")), "html", null, true);
                echo "\">
                            ";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flash"), array(), "SonataAdminBundle"), "html", null, true);
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
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 235
            echo "                            <div class=\"sonata-ba-preview\">";
            echo $this->getContext($context, "_preview");
            echo "</div>
                        ";
        }
        // line 237
        echo "
                        ";
        // line 238
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 239
            echo "                            <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                        ";
        }
        // line 241
        echo "
                        ";
        // line 242
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 243
            echo "                            <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                        ";
        }
        // line 245
        echo "
                        ";
        // line 246
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 247
            echo "                            <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                        ";
        }
        // line 249
        echo "
                        ";
        // line 250
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 251
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 253
            echo $this->getContext($context, "_list_table");
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 256
            echo $this->getContext($context, "_list_filters");
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
        return array (  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  547 => 128,  544 => 127,  536 => 125,  533 => 124,  519 => 160,  515 => 158,  512 => 157,  503 => 121,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  462 => 75,  459 => 74,  451 => 71,  433 => 65,  417 => 59,  405 => 56,  391 => 50,  372 => 37,  317 => 230,  301 => 222,  290 => 217,  231 => 199,  370 => 36,  343 => 91,  330 => 87,  327 => 86,  320 => 231,  313 => 82,  310 => 81,  287 => 216,  271 => 66,  262 => 63,  180 => 104,  12 => 34,  568 => 179,  553 => 129,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  517 => 161,  507 => 123,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 69,  426 => 102,  419 => 98,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  369 => 136,  367 => 99,  333 => 272,  302 => 78,  296 => 76,  226 => 197,  316 => 121,  299 => 112,  293 => 75,  284 => 106,  281 => 105,  279 => 104,  275 => 77,  210 => 75,  174 => 60,  399 => 158,  394 => 156,  359 => 140,  357 => 32,  352 => 30,  348 => 136,  345 => 135,  325 => 125,  308 => 226,  276 => 211,  270 => 209,  245 => 203,  239 => 201,  237 => 86,  234 => 84,  202 => 194,  167 => 60,  155 => 55,  681 => 404,  676 => 168,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  605 => 144,  595 => 354,  588 => 350,  581 => 137,  577 => 344,  575 => 341,  567 => 337,  557 => 177,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 164,  514 => 306,  509 => 124,  492 => 295,  481 => 290,  466 => 76,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  415 => 97,  396 => 157,  383 => 150,  366 => 142,  346 => 28,  331 => 265,  304 => 79,  267 => 98,  257 => 61,  253 => 95,  213 => 126,  58 => 19,  150 => 100,  134 => 94,  194 => 190,  127 => 34,  344 => 97,  340 => 22,  338 => 94,  335 => 129,  315 => 83,  295 => 219,  288 => 108,  259 => 70,  249 => 55,  190 => 188,  161 => 70,  701 => 183,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 138,  580 => 178,  578 => 136,  573 => 340,  556 => 130,  539 => 126,  535 => 172,  530 => 171,  527 => 123,  524 => 169,  521 => 169,  518 => 307,  516 => 166,  513 => 160,  504 => 158,  500 => 120,  498 => 157,  495 => 155,  493 => 116,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 67,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  395 => 51,  389 => 118,  377 => 82,  371 => 144,  361 => 33,  358 => 106,  349 => 29,  347 => 118,  342 => 133,  339 => 100,  336 => 99,  332 => 88,  329 => 126,  326 => 262,  324 => 232,  321 => 123,  319 => 90,  311 => 227,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  282 => 213,  277 => 68,  272 => 76,  250 => 206,  233 => 62,  228 => 83,  223 => 196,  191 => 69,  178 => 172,  175 => 76,  76 => 35,  318 => 122,  306 => 225,  303 => 139,  300 => 113,  292 => 218,  286 => 80,  280 => 69,  274 => 77,  263 => 71,  256 => 208,  242 => 140,  192 => 23,  185 => 20,  170 => 61,  165 => 59,  20 => 11,  53 => 24,  137 => 95,  97 => 37,  34 => 18,  126 => 55,  118 => 46,  114 => 50,  70 => 79,  90 => 87,  110 => 89,  84 => 36,  65 => 54,  265 => 64,  260 => 62,  248 => 115,  236 => 63,  232 => 84,  216 => 25,  211 => 84,  195 => 77,  188 => 178,  184 => 48,  152 => 63,  100 => 43,  81 => 84,  172 => 52,  153 => 48,  146 => 34,  113 => 90,  148 => 44,  104 => 42,  77 => 20,  225 => 83,  222 => 81,  218 => 77,  215 => 78,  205 => 195,  200 => 193,  197 => 56,  186 => 54,  181 => 173,  160 => 52,  129 => 56,  124 => 43,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 149,  457 => 131,  453 => 72,  444 => 142,  440 => 148,  437 => 66,  435 => 258,  430 => 103,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 48,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 198,  220 => 65,  214 => 61,  177 => 63,  169 => 58,  140 => 96,  132 => 57,  128 => 44,  107 => 48,  61 => 27,  273 => 210,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 60,  204 => 73,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 39,  71 => 32,  67 => 33,  63 => 28,  59 => 29,  87 => 86,  94 => 40,  89 => 42,  85 => 37,  75 => 32,  68 => 55,  56 => 27,  28 => 14,  38 => 18,  24 => 13,  26 => 14,  21 => 11,  31 => 11,  25 => 13,  201 => 57,  196 => 191,  183 => 82,  171 => 113,  166 => 57,  163 => 60,  158 => 37,  156 => 57,  151 => 45,  142 => 42,  138 => 50,  136 => 39,  121 => 52,  117 => 92,  105 => 45,  91 => 39,  62 => 30,  49 => 20,  19 => 11,  93 => 88,  88 => 37,  78 => 36,  46 => 9,  44 => 21,  27 => 14,  79 => 83,  72 => 31,  69 => 33,  47 => 19,  40 => 6,  37 => 14,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 45,  123 => 52,  120 => 48,  115 => 40,  111 => 41,  108 => 144,  101 => 46,  98 => 38,  96 => 44,  83 => 35,  74 => 81,  66 => 32,  55 => 24,  52 => 20,  50 => 23,  43 => 17,  41 => 16,  35 => 13,  32 => 16,  29 => 13,  209 => 24,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 120,  173 => 119,  168 => 60,  164 => 111,  162 => 110,  154 => 46,  149 => 62,  147 => 46,  144 => 98,  141 => 66,  133 => 51,  130 => 35,  125 => 40,  122 => 44,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 44,  99 => 45,  95 => 37,  92 => 43,  86 => 25,  82 => 38,  80 => 28,  73 => 34,  64 => 31,  60 => 13,  57 => 14,  54 => 22,  51 => 21,  48 => 15,  45 => 18,  42 => 20,  39 => 15,  36 => 17,  33 => 12,  30 => 15,);
    }
}
