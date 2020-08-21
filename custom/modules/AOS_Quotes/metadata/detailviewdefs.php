<?php
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');return false;" value="{$MOD.LBL_EMAIL_QUOTE}">',
          ),
          7 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createOpportunity\';" value="{$MOD.LBL_CREATE_OPPORTUNITY}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_contract_button',
                'title' => '{$MOD.LBL_CREATE_OPPORTUNITY}',
                'onclick' => 'this.form.action.value=\'createOpportunity\';',
                'name' => 'Create Opportunity',
              ),
            ),
          ),
          8 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createContract\';" value="{$MOD.LBL_CREATE_CONTRACT}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_CONTRACT}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_contract_button',
                'title' => '{$MOD.LBL_CREATE_CONTRACT}',
                'onclick' => 'this.form.action.value=\'createContract\';',
                'name' => 'Create Contract',
              ),
            ),
          ),
          9 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'converToInvoice\';" value="{$MOD.LBL_CONVERT_TO_INVOICE}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'convert_to_invoice_button',
                'title' => '{$MOD.LBL_CONVERT_TO_INVOICE}',
                'onclick' => 'this.form.action.value=\'converToInvoice\';',
                'name' => 'Convert to Invoice',
              ),
            ),
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_LINE_ITEMS' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'number',
            'label' => 'LBL_QUOTE_NUMBER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_pre_c',
            'label' => 'LBL_FECHA_PRE',
          ),
          1 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'stage',
            'label' => 'LBL_STAGE',
          ),
          1 => 
          array (
            'name' => 'invoice_status',
            'label' => 'LBL_INVOICE_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cif_c',
            'studio' => 'visible',
            'label' => 'LBL_CIF',
          ),
          1 => 
          array (
            'name' => 'cip_c',
            'studio' => 'visible',
            'label' => 'LBL_CIP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'plaza_c',
            'studio' => 'visible',
            'label' => 'LBL_PLAZA',
          ),
          1 => 
          array (
            'name' => 'otro_c',
            'studio' => 'visible',
            'label' => 'LBL_OTRO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'mant_oferta_c',
            'studio' => 'visible',
            'label' => 'LBL_MANT_OFERTA',
          ),
          1 => 
          array (
            'name' => 'obser_mant_c',
            'label' => 'LBL_OBSER_MANT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'plazo_entrega_c',
            'label' => 'LBL_PLAZO_ENTREGA',
          ),
          1 => 
          array (
            'name' => 'obs_plazo_c',
            'label' => 'LBL_OBS_PLAZO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'forma_pagp_c',
            'label' => 'LBL_FORMA_PAGP',
          ),
          1 => 
          array (
            'name' => 'obs_forma_pago_c',
            'label' => 'LBL_OBS_FORMA_PAGO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'garantia_c',
            'label' => 'LBL_GARANTIA',
          ),
          1 => 
          array (
            'name' => 'obs_garantia_c',
            'label' => 'LBL_OBS_GARANTIA',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'des_esp_c',
            'label' => 'LBL_DES_ESP',
          ),
          1 => 
          array (
            'name' => 'obs_desc_c',
            'label' => 'LBL_OBS_DESC',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'notas_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTAS',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
      'lbl_line_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
        2 => 
        array (
          0 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_amount',
            'label' => 'LBL_SUBTOTAL_AMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'shipping_amount',
            'label' => 'LBL_SHIPPING_AMOUNT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'shipping_tax_amt',
            'label' => 'LBL_SHIPPING_TAX_AMT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tax_amount',
            'label' => 'LBL_TAX_AMOUNT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'banco_c',
            'label' => 'LBL_BANCO',
          ),
          1 => 
          array (
            'name' => 'nro_cta_c',
            'label' => 'LBL_NRO_CTA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'banco_it_c',
            'label' => 'LBL_BANCO_IT',
          ),
          1 => 
          array (
            'name' => 'nro_cuenta_it_c',
            'label' => 'LBL_NRO_CUENTA_IT',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_account',
            'label' => 'LBL_BILLING_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'billing_contact',
            'label' => 'LBL_BILLING_CONTACT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cons_rep_c',
            'studio' => 'visible',
            'label' => 'LBL_CONS_REP',
          ),
          1 => 
          array (
            'name' => 'intalacion_c',
            'studio' => 'visible',
            'label' => 'LBL_INTALACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'entrenamiento_c',
            'studio' => 'visible',
            'label' => 'LBL_ENTRENAMIENTO',
          ),
          1 => 
          array (
            'name' => 'modulares_c',
            'studio' => 'visible',
            'label' => 'LBL_MODULARES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ser_tec_c',
            'studio' => 'visible',
            'label' => 'LBL_SER_TEC',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>