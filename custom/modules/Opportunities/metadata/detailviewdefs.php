<?php
// created: 2020-03-09 12:25:23
$viewdefs['Opportunities']['DetailView'] = array (
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
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 'account_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'comment' => 'Currency used for display purposes',
          'label' => 'LBL_CURRENCY',
        ),
        1 => 'date_closed',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'amount',
          'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
        ),
        1 => 'sales_stage',
      ),
      3 => 
      array (
        0 => 'opportunity_type',
        1 => 
        array (
          'name' => 'estado_c',
          'studio' => 'visible',
          'label' => 'LBL_ESTADO',
        ),
      ),
      4 => 
      array (
        0 => 'probability',
        1 => 'lead_source',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'nl2br' => true,
        ),
        1 => '',
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
      ),
      1 => 
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
      2 => 
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
  ),
);