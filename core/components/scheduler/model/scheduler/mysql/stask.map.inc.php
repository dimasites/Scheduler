<?php
$xpdo_meta_map['sTask']= array (
  'package' => 'scheduler',
  'version' => '1.1',
  'table' => 'scheduler_task',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'class_key' => 'sSnippetTask',
    'content' => '',
    'namespace' => 'core',
    'reference' => 'Untitled Task',
    'description' => NULL,
  ),
  'fieldMeta' => 
  array (
    'class_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '128',
      'phptype' => 'string',
      'null' => false,
      'default' => 'sSnippetTask',
    ),
    'content' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '256',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'namespace' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '128',
      'phptype' => 'string',
      'null' => false,
      'default' => 'core',
    ),
    'reference' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '128',
      'phptype' => 'string',
      'null' => false,
      'default' => 'Untitled Task',
    ),
    'description' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'namespace' => 
    array (
      'alias' => 'namespace',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'namespace' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'reference' => 
    array (
      'alias' => 'reference',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'reference' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'Runs' => 
    array (
      'class' => 'sTaskRun',
      'local' => 'id',
      'foreign' => 'task',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
