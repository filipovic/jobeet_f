<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_04b19df007ebe2ed6375385bfe8aad962d8b2126813d481d03ef526ce5dd4b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (twig_test_empty($this->getAttribute($_sonata_admin_, "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method")) {
            // line 61
            echo "                    ";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($_sonata_admin_, "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "uniqid"))), array());
            // line 66
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"))) {
            // line 67
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 68
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 71
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 74
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && $_btn_list_)) {
            // line 75
            echo "                    <a  href=\"";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 78
            if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-list\"></i>
                        ";
            // line 81
            if (isset($context["btn_list"])) { $_btn_list_ = $context["btn_list"]; } else { $_btn_list_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_list_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && $_btn_add_)) {
            // line 86
            echo "                    <a  href=\"";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 89
            if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-plus\"></i>
                        ";
            // line 92
            if (isset($context["btn_add"])) { $_btn_add_ = $context["btn_add"]; } else { $_btn_add_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_add_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 98
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method")) && $_btn_delete_)) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
            // line 102
            if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
            echo "\"
                            >
                        <i class=\"icon-off\"></i>
                        ";
            // line 105
            if (isset($context["btn_delete"])) { $_btn_delete_ = $context["btn_delete"]; } else { $_btn_delete_ = null; }
            if (isset($context["btn_catalogue"])) { $_btn_catalogue_ = $context["btn_catalogue"]; } else { $_btn_catalogue_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_btn_delete_, array(), $_btn_catalogue_), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 112
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 115
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 120
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 123
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        // line 125
        echo "    ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 126
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 128
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 130
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 132
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 134
            echo "        INVALID MODE : ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "
    ";
        }
    }

    // line 138
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype") == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 144
            echo "        INVALID MODE : ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 144,  347 => 142,  341 => 140,  337 => 139,  334 => 138,  325 => 134,  319 => 132,  313 => 130,  297 => 125,  292 => 123,  288 => 120,  272 => 112,  266 => 108,  258 => 105,  250 => 102,  241 => 99,  216 => 89,  175 => 76,  113 => 52,  20 => 11,  179 => 67,  174 => 66,  164 => 64,  151 => 61,  132 => 50,  73 => 25,  139 => 41,  64 => 14,  61 => 13,  99 => 47,  317 => 115,  296 => 106,  282 => 100,  276 => 98,  268 => 94,  263 => 93,  244 => 100,  238 => 84,  230 => 80,  225 => 79,  200 => 85,  168 => 58,  154 => 62,  116 => 38,  126 => 47,  119 => 31,  95 => 23,  316 => 115,  306 => 109,  301 => 126,  286 => 101,  275 => 98,  267 => 94,  262 => 93,  248 => 87,  243 => 86,  229 => 80,  218 => 77,  210 => 87,  205 => 72,  199 => 70,  191 => 66,  123 => 42,  42 => 19,  94 => 23,  91 => 26,  185 => 54,  176 => 51,  172 => 59,  165 => 74,  159 => 63,  144 => 39,  87 => 43,  68 => 17,  79 => 18,  161 => 56,  141 => 49,  128 => 44,  103 => 35,  86 => 29,  83 => 28,  74 => 17,  234 => 83,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 90,  169 => 75,  167 => 58,  153 => 68,  148 => 51,  145 => 76,  135 => 59,  82 => 16,  23 => 3,  54 => 25,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 128,  302 => 108,  295 => 124,  287 => 101,  279 => 115,  256 => 91,  251 => 71,  239 => 69,  231 => 82,  219 => 77,  201 => 66,  143 => 61,  138 => 38,  134 => 45,  131 => 29,  122 => 42,  117 => 44,  108 => 54,  102 => 23,  92 => 33,  84 => 23,  72 => 37,  69 => 11,  51 => 24,  48 => 13,  35 => 16,  29 => 14,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 100,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 91,  253 => 77,  249 => 87,  247 => 70,  237 => 98,  204 => 86,  198 => 65,  194 => 64,  150 => 67,  147 => 66,  127 => 36,  112 => 29,  96 => 21,  76 => 14,  71 => 16,  110 => 41,  89 => 22,  65 => 18,  63 => 18,  58 => 12,  34 => 4,  114 => 29,  109 => 27,  106 => 20,  101 => 38,  85 => 20,  77 => 17,  67 => 32,  28 => 13,  55 => 23,  43 => 20,  26 => 13,  24 => 2,  39 => 6,  57 => 20,  50 => 10,  47 => 20,  38 => 17,  25 => 5,  227 => 14,  224 => 92,  221 => 90,  207 => 70,  197 => 84,  195 => 56,  192 => 66,  189 => 81,  186 => 65,  181 => 78,  178 => 61,  173 => 59,  162 => 56,  158 => 56,  155 => 55,  152 => 52,  142 => 38,  136 => 37,  133 => 45,  130 => 58,  120 => 45,  105 => 49,  100 => 52,  75 => 39,  60 => 12,  53 => 7,  19 => 1,  98 => 29,  88 => 25,  80 => 22,  78 => 40,  46 => 21,  44 => 7,  40 => 8,  36 => 6,  32 => 16,  27 => 3,  22 => 2,  232 => 95,  226 => 71,  222 => 76,  215 => 73,  211 => 73,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 65,  183 => 62,  180 => 63,  171 => 54,  166 => 51,  163 => 80,  160 => 71,  157 => 48,  149 => 51,  146 => 60,  140 => 60,  137 => 37,  129 => 44,  124 => 57,  121 => 56,  118 => 30,  115 => 26,  111 => 51,  107 => 40,  104 => 39,  97 => 24,  93 => 45,  90 => 22,  81 => 41,  70 => 33,  66 => 23,  62 => 29,  59 => 28,  56 => 13,  52 => 22,  49 => 10,  45 => 9,  41 => 4,  37 => 17,  33 => 12,  30 => 3,);
    }
}
