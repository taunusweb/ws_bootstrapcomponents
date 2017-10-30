<?php
return array (
  'ctrl' => 
  array (
    'title' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_accordion',
    'label' => 'tx_wsbootstrapcomponents_accordionheader',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'dividers2tabs' => true,
    'versioningWS' => true,
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'delete' => 'deleted',
    'enablecolumns' => 
    array (
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
    ),
    'searchFields' => 'tx_wsbootstrapcomponents_accordionheader,tx_wsbootstrapcomponents_accordioncontent',
    'dynamicConfigFile' => '',
    'iconfile' => 'EXT:ws_bootstrapcomponents/ext_icon.png',
    'hideTable' => true,
  ),
  'interface' => 
  array (
    'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tx_wsbootstrapcomponents_accordionheader, tx_wsbootstrapcomponents_accordioncontent',
  ),
  'types' => 
  array (
    1 => 
    array (
      'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,tx_wsbootstrapcomponents_accordionheader,tx_wsbootstrapcomponents_accordioncontent,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
    ),
  ),
  'palettes' => 
  array (
    1 => 
    array (
      'showitem' => '',
    ),
  ),
  'columns' => 
  array (
    'sys_language_uid' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'sys_language',
        'foreign_table_where' => 'ORDER BY sys_language.title',
        'items' => 
        array (
          0 => 
          array (
            0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
            1 => -1,
          ),
          1 => 
          array (
            0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
            1 => 0,
          ),
        ),
        'default' => 0,
      ),
    ),
    'l10n_parent' => 
    array (
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tx_wsbootstrapcomponents_accordion',
        'foreign_table_where' => 'AND tx_wsbootstrapcomponents_accordion.pid=###CURRENT_PID### AND tx_wsbootstrapcomponents_accordion.sys_language_uid IN (-1,0)',
      ),
    ),
    'l10n_diffsource' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    't3ver_label' => 
    array (
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
      'config' => 
      array (
        'type' => 'input',
        'size' => 30,
        'max' => 255,
      ),
    ),
    'hidden' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
      'config' => 
      array (
        'type' => 'check',
      ),
    ),
    'starttime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => 
        array (
          'lower' => 1509141600,
        ),
      ),
    ),
    'endtime' => 
    array (
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
      'config' => 
      array (
        'behaviour' => 
        array (
          'allowLanguageSynchronization' => true,
        ),
        'renderType' => 'inputDateTime',
        'type' => 'input',
        'size' => 13,
        'eval' => 'datetime',
        'checkbox' => 0,
        'default' => 0,
        'range' => 
        array (
          'lower' => 1509141600,
        ),
      ),
    ),
    'parentid' => 
    array (
      'config' => 
      array (
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => 
        array (
          0 => 
          array (
            0 => '',
            1 => 0,
          ),
        ),
        'foreign_table' => 'tt_content',
        'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
      ),
    ),
    'parenttable' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    'sorting' => 
    array (
      'config' => 
      array (
        'type' => 'passthrough',
      ),
    ),
    'tx_wsbootstrapcomponents_accordionheader' => 
    array (
      'config' => 
      array (
        'type' => 'input',
        'eval' => 'required,trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_accordion.tx_wsbootstrapcomponents_accordionheader',
    ),
    'tx_wsbootstrapcomponents_accordioncontent' => 
    array (
      'config' => 
      array (
        'type' => 'inline',
        'foreign_table' => 'tt_content',
        'overrideChildTca' => 
        array (
          'columns' => 
          array (
            'colPos' => 
            array (
              'config' => 
              array (
                'default' => '999',
              ),
            ),
            'CType' => 
            array (
              'config' => 
              array (
                'default' => 'textmedia',
              ),
            ),
          ),
        ),
        'foreign_sortby' => 'sorting',
        'appearance' => 
        array (
          'collapseAll' => '1',
          'levelLinksPosition' => 'top',
          'showSynchronizationLink' => '1',
          'showPossibleLocalizationRecords' => '1',
          'showAllLocalizationLink' => '1',
          'useSortable' => '1',
          'enabledControls' => 
          array (
            'dragdrop' => '1',
          ),
        ),
        'foreign_field' => 'tx_wsbootstrapcomponents_accordioncontent_parent',
      ),
      'exclude' => '1',
      'l10n_mode' => 'copy',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_accordion.tx_wsbootstrapcomponents_accordioncontent',
    ),
  ),
);