<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_6b92fa74bfa488b26eaa1d53cd3a05c1ac7088042db603c815f554112bdddbd8 extends Twig_Template
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
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getAttribute($this->getContext($context, "field_description"), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 28
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "placeholder"))) {
                    // line 29
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 33
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 38
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 42
            echo "
        <span id=\"field_actions_";
            // line 43
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 45
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_list"))) {
                // line 46
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 47
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $this->getContext($context, "btn_add"))) {
                // line 57
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 58
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 66
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 69
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_delete"))) {
                // line 70
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 71
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 79
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 82
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 87
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 87,  127 => 55,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  315 => 90,  295 => 88,  288 => 85,  259 => 70,  249 => 67,  190 => 50,  161 => 70,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  578 => 177,  573 => 176,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  513 => 165,  504 => 160,  500 => 158,  498 => 157,  495 => 156,  493 => 155,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  441 => 141,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  395 => 120,  389 => 118,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  321 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 83,  277 => 81,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  191 => 50,  178 => 46,  175 => 76,  76 => 13,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  256 => 120,  242 => 112,  192 => 87,  185 => 85,  170 => 78,  165 => 76,  20 => 11,  53 => 80,  137 => 58,  97 => 39,  34 => 41,  126 => 51,  118 => 21,  114 => 34,  70 => 33,  90 => 18,  110 => 47,  84 => 38,  65 => 29,  265 => 125,  260 => 123,  248 => 115,  236 => 63,  232 => 93,  216 => 99,  211 => 84,  195 => 77,  188 => 73,  184 => 48,  152 => 38,  100 => 40,  81 => 15,  172 => 66,  153 => 35,  146 => 34,  113 => 35,  148 => 63,  104 => 23,  77 => 27,  225 => 83,  222 => 82,  218 => 14,  215 => 54,  205 => 10,  200 => 55,  197 => 54,  186 => 82,  181 => 79,  160 => 75,  129 => 24,  124 => 23,  23 => 3,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 153,  453 => 146,  444 => 142,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 136,  413 => 134,  409 => 127,  407 => 131,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 115,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 65,  169 => 73,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 18,  273 => 96,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 80,  179 => 70,  159 => 69,  143 => 29,  135 => 53,  119 => 37,  102 => 17,  71 => 19,  67 => 184,  63 => 4,  59 => 23,  87 => 17,  94 => 38,  89 => 39,  85 => 30,  75 => 39,  68 => 30,  56 => 81,  28 => 13,  38 => 17,  24 => 13,  26 => 13,  21 => 2,  31 => 14,  25 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 61,  166 => 71,  163 => 63,  158 => 37,  156 => 36,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 47,  105 => 46,  91 => 31,  62 => 28,  49 => 112,  19 => 11,  93 => 26,  88 => 12,  78 => 35,  46 => 21,  44 => 74,  27 => 3,  79 => 14,  72 => 198,  69 => 197,  47 => 75,  40 => 44,  37 => 43,  22 => 12,  246 => 90,  157 => 41,  145 => 78,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 49,  111 => 45,  108 => 38,  101 => 22,  98 => 43,  96 => 29,  83 => 22,  74 => 33,  66 => 18,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  35 => 16,  32 => 35,  29 => 34,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 84,  176 => 45,  173 => 44,  168 => 65,  164 => 71,  162 => 53,  154 => 66,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 56,  125 => 38,  122 => 29,  116 => 41,  112 => 19,  109 => 44,  106 => 26,  103 => 45,  99 => 35,  95 => 42,  92 => 19,  86 => 43,  82 => 10,  80 => 9,  73 => 7,  64 => 183,  60 => 3,  57 => 22,  54 => 153,  51 => 24,  48 => 67,  45 => 19,  42 => 18,  39 => 61,  36 => 17,  33 => 4,  30 => 15,);
    }
}
