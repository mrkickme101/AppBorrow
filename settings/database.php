<?php
/* database.php */
return array (
  'mysql' => 
  array (
    'dbdriver' => 'mysql',
    'username' => 'root',
    'password' => '',
    'dbname' => 'borrow',
    'prefix' => 'brw',
    'hostname' => 'localhost',
    'port' => '3306',
  ),
  'tables' => 
  array (
    'user' => 'user',
    'category' => 'category',
    'language' => 'language',
    'number' => 'number',
    'borrow' => 'borrow',
    'borrow_items' => 'borrow_items',
    'inventory' => 'inventory',
    'inventory_meta' => 'inventory_meta',
    'inventory_items' => 'inventory_items',
  ),
);