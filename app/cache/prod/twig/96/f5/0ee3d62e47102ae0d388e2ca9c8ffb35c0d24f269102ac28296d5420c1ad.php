<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_96f50ee3d62e47102ae0d388e2ca9c8ffb35c0d24f269102ac28296d5420c1ad extends Twig_Template
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
";
        // line 21
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($_sonata_admin_, "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {
        initialize_popup_";
        // line 33
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "').trigger('change');

        field_dialog_";
        // line 63
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "  =  function() {

        Admin.log('[";
        // line 69
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('click', field_dialog_form_list_link_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        initialize_popup_";
        // line 102
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
        echo $this->env->getExtension('translator')->trans($this->getAttribute($_associationadmin_, "label"), array(), $this->getAttribute($_associationadmin_, "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {
        initialize_popup_";
        // line 149
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html('');

        Admin.log('[";
        // line 158
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('click', field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").on('submit', field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
        echo $this->env->getExtension('translator')->trans($this->getAttribute($_associationadmin_, "label"), array(), $this->getAttribute($_associationadmin_, "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 208
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 224
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".dialog('close');

                    ";
        // line 249
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($_sonata_admin_, "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $_id_, "subclass" => $this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($_sonata_admin_, "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 285
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 290
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ").submit(field_dialog_form_action_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = false;

    function initialize_popup_";
        // line 304
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ") {
            field_dialog_";
        // line 307
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo " = jQuery(\"#field_dialog_";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");

            Admin.log('[";
        // line 312
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 337
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");


    ";
        // line 340
        if (isset($context["sonata_admin"])) { $_sonata_admin_ = $context["sonata_admin"]; } else { $_sonata_admin_ = null; }
        if (($this->getAttribute($_sonata_admin_, "edit") == "list")) {
            // line 341
            echo "        ";
            // line 344
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 346
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 350
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 354
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 361
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 366
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 373
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 376
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo " option').get(0)) {
                jQuery('#";
            // line 377
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 380
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').val('');
            jQuery('#";
            // line 381
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').trigger('change');

            return false;
        }
        ";
            // line 388
            echo "
        // update the label
        jQuery('#";
            // line 390
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 392
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "] update the label');

            jQuery('#field_widget_";
            // line 394
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 397
            if (isset($context["associationadmin"])) { $_associationadmin_ = $context["associationadmin"]; } else { $_associationadmin_ = null; }
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($_associationadmin_, "uniqid"), "code" => $this->getAttribute($_associationadmin_, "code")));
            // line 401
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 404
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $_id_;
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 410
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  777 => 404,  772 => 401,  769 => 397,  758 => 394,  752 => 392,  742 => 388,  734 => 381,  729 => 380,  722 => 377,  717 => 376,  710 => 373,  699 => 366,  690 => 361,  671 => 350,  659 => 344,  654 => 340,  647 => 337,  636 => 330,  628 => 326,  619 => 321,  615 => 319,  607 => 312,  601 => 310,  591 => 307,  586 => 306,  580 => 304,  574 => 302,  560 => 295,  553 => 292,  531 => 280,  515 => 272,  508 => 267,  504 => 261,  499 => 260,  495 => 258,  480 => 250,  477 => 249,  462 => 242,  436 => 224,  418 => 210,  412 => 208,  396 => 196,  384 => 188,  379 => 187,  373 => 185,  367 => 183,  357 => 177,  339 => 173,  331 => 169,  303 => 156,  235 => 124,  213 => 76,  188 => 67,  156 => 57,  21 => 11,  220 => 79,  170 => 60,  386 => 95,  383 => 94,  380 => 93,  366 => 92,  326 => 84,  322 => 83,  289 => 69,  284 => 67,  242 => 54,  223 => 53,  212 => 76,  800 => 213,  793 => 210,  790 => 209,  787 => 410,  780 => 205,  767 => 204,  761 => 202,  746 => 390,  743 => 199,  740 => 198,  731 => 193,  728 => 192,  711 => 190,  693 => 189,  687 => 187,  682 => 186,  679 => 354,  676 => 184,  670 => 180,  666 => 178,  663 => 346,  657 => 341,  640 => 174,  622 => 173,  617 => 172,  612 => 171,  609 => 170,  604 => 169,  600 => 168,  597 => 167,  595 => 166,  592 => 165,  582 => 160,  578 => 158,  575 => 157,  572 => 156,  570 => 155,  567 => 154,  563 => 134,  555 => 132,  547 => 290,  540 => 285,  533 => 149,  523 => 146,  520 => 273,  513 => 142,  510 => 141,  507 => 140,  501 => 138,  487 => 136,  484 => 135,  482 => 254,  471 => 247,  459 => 121,  456 => 120,  453 => 119,  448 => 118,  433 => 115,  428 => 114,  425 => 113,  415 => 107,  411 => 106,  401 => 103,  398 => 102,  393 => 101,  389 => 100,  385 => 99,  381 => 97,  376 => 95,  371 => 93,  368 => 92,  349 => 87,  328 => 81,  320 => 82,  315 => 78,  311 => 77,  309 => 158,  300 => 71,  290 => 68,  270 => 139,  228 => 55,  203 => 45,  353 => 89,  347 => 174,  341 => 140,  337 => 88,  334 => 87,  325 => 80,  319 => 132,  313 => 130,  297 => 125,  292 => 149,  288 => 120,  272 => 64,  266 => 108,  258 => 105,  250 => 102,  241 => 126,  216 => 51,  175 => 76,  113 => 43,  20 => 11,  179 => 67,  174 => 66,  164 => 58,  151 => 55,  132 => 50,  73 => 25,  139 => 41,  64 => 23,  61 => 22,  99 => 47,  317 => 81,  296 => 106,  282 => 66,  276 => 98,  268 => 94,  263 => 136,  244 => 100,  238 => 84,  230 => 80,  225 => 81,  200 => 47,  168 => 35,  154 => 56,  116 => 18,  126 => 47,  119 => 45,  95 => 19,  316 => 115,  306 => 75,  301 => 126,  286 => 101,  275 => 140,  267 => 62,  262 => 59,  248 => 129,  243 => 86,  229 => 122,  218 => 77,  210 => 111,  205 => 73,  199 => 71,  191 => 69,  123 => 46,  42 => 13,  94 => 30,  91 => 12,  185 => 54,  176 => 93,  172 => 61,  165 => 90,  159 => 63,  144 => 25,  87 => 29,  68 => 17,  79 => 30,  161 => 34,  141 => 49,  128 => 44,  103 => 39,  86 => 33,  83 => 28,  74 => 50,  234 => 86,  217 => 11,  214 => 10,  209 => 6,  206 => 72,  190 => 97,  182 => 53,  177 => 38,  169 => 75,  167 => 58,  153 => 56,  148 => 51,  145 => 53,  135 => 75,  82 => 9,  23 => 18,  54 => 38,  31 => 15,  549 => 162,  543 => 129,  538 => 158,  530 => 155,  526 => 147,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 255,  483 => 142,  473 => 134,  469 => 132,  466 => 124,  460 => 130,  455 => 129,  450 => 234,  444 => 122,  441 => 116,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 105,  394 => 105,  390 => 97,  375 => 101,  365 => 91,  362 => 90,  359 => 90,  355 => 89,  348 => 91,  344 => 90,  330 => 85,  327 => 88,  321 => 166,  307 => 73,  302 => 72,  295 => 70,  287 => 148,  279 => 115,  256 => 58,  251 => 71,  239 => 69,  231 => 56,  219 => 52,  201 => 66,  143 => 76,  138 => 38,  134 => 45,  131 => 48,  122 => 42,  117 => 25,  108 => 54,  102 => 23,  92 => 18,  84 => 28,  72 => 198,  69 => 23,  51 => 19,  48 => 18,  35 => 16,  29 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 67,  281 => 100,  277 => 65,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 134,  253 => 77,  249 => 87,  247 => 70,  237 => 57,  204 => 73,  198 => 71,  194 => 45,  150 => 67,  147 => 66,  127 => 71,  112 => 29,  96 => 60,  76 => 29,  71 => 16,  110 => 42,  89 => 17,  65 => 5,  63 => 4,  58 => 12,  34 => 16,  114 => 24,  109 => 27,  106 => 20,  101 => 61,  85 => 53,  77 => 17,  67 => 24,  28 => 14,  55 => 23,  43 => 18,  26 => 20,  24 => 12,  39 => 32,  57 => 20,  50 => 78,  47 => 75,  38 => 17,  25 => 13,  227 => 14,  224 => 92,  221 => 79,  207 => 70,  197 => 84,  195 => 70,  192 => 69,  189 => 81,  186 => 66,  181 => 78,  178 => 63,  173 => 37,  162 => 56,  158 => 57,  155 => 55,  152 => 81,  142 => 38,  136 => 37,  133 => 30,  130 => 29,  120 => 26,  105 => 49,  100 => 20,  75 => 39,  60 => 40,  53 => 80,  19 => 11,  98 => 29,  88 => 25,  80 => 52,  78 => 40,  46 => 19,  44 => 74,  40 => 44,  36 => 16,  32 => 22,  27 => 3,  22 => 12,  232 => 95,  226 => 71,  222 => 119,  215 => 73,  211 => 47,  208 => 49,  202 => 107,  196 => 70,  193 => 102,  187 => 100,  183 => 62,  180 => 64,  171 => 92,  166 => 59,  163 => 80,  160 => 58,  157 => 48,  149 => 51,  146 => 60,  140 => 24,  137 => 50,  129 => 47,  124 => 27,  121 => 69,  118 => 30,  115 => 67,  111 => 23,  107 => 63,  104 => 39,  97 => 38,  93 => 45,  90 => 35,  81 => 15,  70 => 24,  66 => 22,  62 => 165,  59 => 22,  56 => 81,  52 => 113,  49 => 19,  45 => 33,  41 => 4,  37 => 17,  33 => 15,  30 => 3,);
    }
}
