<?php
$module_name = 'AOS_Quotes';
$_module_name = 'aos_quotes';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_BILLING_ACCOUNT',
        'id' => 'BILLING_ACCOUNT_ID',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'billing_account',
      ),
      'term' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TERM',
        'width' => '10%',
        'default' => true,
        'name' => 'term',
      ),
      'fecha_pre_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_PRE',
        'width' => '10%',
        'name' => 'fecha_pre_c',
      ),
      'number' => 
      array (
        'type' => 'int',
        'label' => 'LBL_QUOTE_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'number',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_contact' => 
      array (
        'name' => 'billing_contact',
        'default' => true,
        'width' => '10%',
      ),
      'billing_account' => 
      array (
        'name' => 'billing_account',
        'default' => true,
        'width' => '10%',
      ),
      'number' => 
      array (
        'name' => 'number',
        'default' => true,
        'width' => '10%',
      ),
      'forma_pagp_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_FORMA_PAGP',
        'width' => '10%',
        'name' => 'forma_pagp_c',
      ),
      'total_amount' => 
      array (
        'name' => 'total_amount',
        'default' => true,
        'width' => '10%',
      ),
      'expiration' => 
      array (
        'name' => 'expiration',
        'default' => true,
        'width' => '10%',
      ),
      'stage' => 
      array (
        'name' => 'stage',
        'default' => true,
        'width' => '10%',
      ),
      'term' => 
      array (
        'name' => 'term',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
