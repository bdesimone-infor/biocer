<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'account_name' => 'accounts.name',
  'name' => 'contacts.name',
  'email' => 'contacts.email',
  'insitucion_c' => 'contacts_cstm.insitucion_c',
  'areas_c' => 'contacts_cstm.areas_c',
  'subarea_c' => 'contacts_cstm.subarea_c',
  'department' => 'contacts.department',
  'assigned_user_id' => 'contacts.assigned_user_id',
),
    'searchInputs' => array (
  2 => 'account_name',
  3 => 'email',
  4 => 'name',
  5 => 'insitucion_c',
  6 => 'areas_c',
  7 => 'subarea_c',
  8 => 'department',
  9 => 'assigned_user_id',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'type' => 'varchar',
    'width' => '10%',
  ),
  'insitucion_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_INSITUCION',
    'width' => '10%',
    'name' => 'insitucion_c',
  ),
  'areas_c' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_AREAS',
    'width' => '10%',
    'name' => 'areas_c',
  ),
  'subarea_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SUBAREA',
    'width' => '10%',
    'name' => 'subarea_c',
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'name' => 'department',
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
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
    'name' => 'account_name',
  ),
),
);
