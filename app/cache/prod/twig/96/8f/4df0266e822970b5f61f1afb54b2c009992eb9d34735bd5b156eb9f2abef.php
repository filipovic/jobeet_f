<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_968f4df0266e822970b5f61f1afb54b2c009992eb9d34735bd5b156eb9f2abef extends Twig_Template
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
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($_value_, $this->getAttribute($_sonata_admin_, "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($_sonata_admin_, "edit") == "inline")) {
            // line 15
            echo "    ";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["field_description"])) { $_field_description_ = $context["field_description"]; } else { $_field_description_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "children"), $this->getAttribute($_field_description_, "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (($this->getAttribute($_sonata_admin_, "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method")) {
                    // line 23
                    echo "                    ";
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 28
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"))) {
                    // line 29
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 30
                    if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 33
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 35
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
            </span>
        ";
            } else {
                // line 38
                echo "            <span id=\"field_widget_";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" >
                ";
                // line 39
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
                echo "
            </span>
        ";
            }
            // line 42
            echo "
        <span id=\"field_actions_";
            // line 43
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 45
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
            if ((((($this->getAttribute($_sonata_admin_, "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $_btn_list_)) {
                // line 46
                echo "
                    <a  href=\"";
                // line 47
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 48
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 50
                if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 53
                if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
            if ((((($this->getAttribute($_sonata_admin_, "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
                // line 58
                echo "                    <a  href=\"";
                if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 59
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 61
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 64
                if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 67
            echo "            </span>

            ";
            // line 69
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
            if ((((($this->getAttribute($_sonata_admin_, "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $_btn_delete_)) {
                // line 70
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 71
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "(this);\"
                    class=\"btn btn-small sonata-ba-action\"
                    title=\"";
                // line 73
                if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
                // line 76
                if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
                if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 79
            echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 81
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 86
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 76,  188 => 67,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 93,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 208,  780 => 205,  767 => 204,  761 => 202,  746 => 200,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 185,  676 => 184,  670 => 180,  666 => 178,  663 => 177,  657 => 176,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 130,  540 => 128,  533 => 149,  523 => 146,  520 => 145,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 128,  471 => 127,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 77,  309 => 76,  300 => 71,  290 => 68,  270 => 63,  228 => 55,  203 => 45,  353 => 89,  347 => 142,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 123,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 99,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 66,  164 => 58,  151 => 55,  132 => 50,  73 => 28,  139 => 41,  64 => 23,  61 => 13,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 93,  244 => 100,  238 => 84,  230 => 80,  225 => 81,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 98,  267 => 62,  262 => 59,  248 => 56,  243 => 86,  229 => 80,  218 => 77,  210 => 87,  205 => 73,  199 => 71,  191 => 69,  123 => 46,  42 => 13,  94 => 30,  91 => 12,  185 => 54,  176 => 41,  172 => 61,  165 => 74,  159 => 63,  144 => 25,  87 => 43,  68 => 17,  79 => 30,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 7,  234 => 86,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 58,  153 => 56,  148 => 51,  145 => 53,  135 => 49,  82 => 9,  23 => 3,  54 => 153,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 101,  365 => 91,  362 => 90,  359 => 90,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 86,  307 => 73,  302 => 72,  295 => 70,  287 => 68,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 52,  201 => 66,  143 => 52,  138 => 38,  134 => 45,  131 => 48,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 10,  72 => 198,  69 => 23,  51 => 19,  48 => 18,  35 => 16,  29 => 15,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 60,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 73,  198 => 71,  194 => 45,  150 => 67,  147 => 66,  127 => 21,  112 => 29,  96 => 21,  76 => 29,  71 => 16,  110 => 42,  89 => 17,  65 => 5,  63 => 4,  58 => 12,  34 => 16,  114 => 24,  109 => 27,  106 => 20,  101 => 38,  85 => 16,  77 => 17,  67 => 24,  28 => 13,  55 => 23,  43 => 18,  26 => 14,  24 => 12,  39 => 16,  57 => 20,  50 => 78,  47 => 75,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 79,  207 => 70,  197 => 84,  195 => 70,  192 => 69,  189 => 81,  186 => 66,  181 => 78,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 31,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 21,  53 => 80,  19 => 11,  98 => 29,  88 => 25,  80 => 22,  78 => 40,  46 => 18,  44 => 74,  40 => 44,  36 => 16,  32 => 35,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 76,  215 => 73,  211 => 47,  208 => 49,  202 => 68,  196 => 70,  193 => 63,  187 => 65,  183 => 62,  180 => 64,  171 => 36,  166 => 59,  163 => 80,  160 => 58,  157 => 48,  149 => 51,  146 => 60,  140 => 24,  137 => 50,  129 => 47,  124 => 27,  121 => 56,  118 => 30,  115 => 26,  111 => 23,  107 => 17,  104 => 39,  97 => 38,  93 => 45,  90 => 35,  81 => 15,  70 => 33,  66 => 22,  62 => 165,  59 => 22,  56 => 81,  52 => 113,  49 => 19,  45 => 66,  41 => 4,  37 => 17,  33 => 15,  30 => 3,);
    }
}
