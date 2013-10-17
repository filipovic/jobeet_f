<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_9a0c11b8ce1ca6e3379ecf342cb1a5f99fbd42dbe036de5e8e1708364f949baf extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "code"), "elementId" => $_id_, "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = jQuery(\"#field_widget_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 158,  464 => 157,  454 => 152,  442 => 147,  410 => 138,  406 => 136,  403 => 135,  400 => 133,  392 => 129,  342 => 111,  336 => 109,  329 => 106,  318 => 101,  314 => 100,  294 => 91,  283 => 88,  269 => 84,  254 => 78,  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 156,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 169,  303 => 156,  235 => 73,  213 => 76,  188 => 57,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 125,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 142,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 126,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 98,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 71,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 149,  288 => 89,  272 => 85,  266 => 83,  258 => 105,  250 => 102,  241 => 74,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 53,  164 => 49,  151 => 55,  132 => 50,  73 => 25,  139 => 41,  64 => 23,  61 => 21,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 86,  268 => 94,  263 => 136,  244 => 100,  238 => 84,  230 => 80,  225 => 70,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 64,  205 => 73,  199 => 62,  191 => 69,  123 => 46,  42 => 13,  94 => 30,  91 => 30,  185 => 54,  176 => 93,  172 => 61,  165 => 90,  159 => 63,  144 => 25,  87 => 29,  68 => 17,  79 => 27,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 50,  234 => 86,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 50,  153 => 46,  148 => 51,  145 => 53,  135 => 75,  82 => 57,  23 => 18,  54 => 38,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 150,  444 => 122,  441 => 116,  437 => 120,  434 => 144,  429 => 116,  423 => 141,  420 => 140,  416 => 139,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 124,  365 => 91,  362 => 90,  359 => 118,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 102,  307 => 73,  302 => 94,  295 => 70,  287 => 148,  279 => 115,  256 => 58,  251 => 77,  239 => 69,  231 => 56,  219 => 68,  201 => 66,  143 => 76,  138 => 38,  134 => 45,  131 => 48,  122 => 40,  117 => 39,  108 => 54,  102 => 23,  92 => 18,  84 => 28,  72 => 198,  69 => 23,  51 => 40,  48 => 18,  35 => 16,  29 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 80,  257 => 134,  253 => 77,  249 => 87,  247 => 75,  237 => 57,  204 => 63,  198 => 71,  194 => 45,  150 => 45,  147 => 44,  127 => 71,  112 => 29,  96 => 60,  76 => 29,  71 => 16,  110 => 73,  89 => 17,  65 => 22,  63 => 4,  58 => 12,  34 => 26,  114 => 38,  109 => 37,  106 => 20,  101 => 68,  85 => 29,  77 => 56,  67 => 50,  28 => 13,  55 => 23,  43 => 17,  26 => 20,  24 => 12,  39 => 17,  57 => 20,  50 => 78,  47 => 35,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 79,  207 => 70,  197 => 84,  195 => 70,  192 => 69,  189 => 81,  186 => 66,  181 => 55,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 81,  142 => 38,  136 => 41,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 26,  60 => 40,  53 => 19,  19 => 11,  98 => 33,  88 => 25,  80 => 52,  78 => 40,  46 => 19,  44 => 74,  40 => 16,  36 => 16,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 69,  215 => 65,  211 => 47,  208 => 49,  202 => 107,  196 => 61,  193 => 60,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 80,  160 => 48,  157 => 48,  149 => 51,  146 => 60,  140 => 42,  137 => 50,  129 => 47,  124 => 27,  121 => 77,  118 => 30,  115 => 67,  111 => 23,  107 => 63,  104 => 34,  97 => 38,  93 => 64,  90 => 35,  81 => 15,  70 => 25,  66 => 22,  62 => 49,  59 => 21,  56 => 20,  52 => 113,  49 => 19,  45 => 33,  41 => 4,  37 => 17,  33 => 15,  30 => 3,);
    }
}
