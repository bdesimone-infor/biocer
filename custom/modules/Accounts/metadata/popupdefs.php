<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'industry' => 'accounts.industry',
  'email' => 'accounts.email',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'rut_c' => 'accounts_cstm.rut_c',
  'area_c' => 'accounts_cstm.area_c',
  'subarea_c' => 'accounts_cstm.subarea_c',
  'phone_alternate' => 'accounts.phone_alternate',
),
    'searchInputs' => array (
  0 => 'name',
  4 => 'industry',
  7 => 'email',
  8 => 'assigned_user_id',
  9 => 'rut_c',
  10 => 'area_c',
  11 => 'subarea_c',
  12 => 'phone_alternate',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'name' => 'industry',
  ),
  'rut_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RUT',
    'width' => '10%',
    'name' => 'rut_c',
  ),
  'area_c' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_AREA',
    'width' => '10%',
    'name' => 'area_c',
  ),
  'subarea_c' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_SUBAREA',
    'width' => '10%',
    'name' => 'subarea_c',
  ),
  'phone_alternate' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_ALT',
    'width' => '10%',
    'name' => 'phone_alternate',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'PHONE_OFFICE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => true,
  ),
  'RUT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RUT',
    'width' => '10%',
    'name' => 'rut_c',
  ),
  'AREA_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AREA',
    'width' => '10%',
    'name' => 'area_c',
  ),
  'SUBAREA_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SUBAREA',
    'width' => '10%',
    'name' => 'subarea_c',
  ),
  'INDUSTRY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'default' => true,
    'name' => 'industry',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
