<?php
return array (
  'ctrl' =>
  array (
    'title' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck',
    'label' => 'tx_wsbootstrapcomponents_carddeckheader',
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
    'searchFields' => 'tx_wsbootstrapcomponents_carddeckimage,tx_wsbootstrapcomponents_carddeckheader,tx_wsbootstrapcomponents_carddecktitle,tx_wsbootstrapcomponents_carddecksubtitle,tx_wsbootstrapcomponents_carddeckbodytext,tx_wsbootstrapcomponents_carddeckphone,tx_wsbootstrapcomponents_carddeckfax,tx_wsbootstrapcomponents_carddeckmail,tx_wsbootstrapcomponents_carddeckbuttonlink,tx_wsbootstrapcomponents_carddeckbuttontext,tx_wsbootstrapcomponents_carddeckimagebottom,tx_wsbootstrapcomponents_carddeckfooter',
    'dynamicConfigFile' => '',
    'iconfile' => 'EXT:ws_bootstrapcomponents/ext_icon.png',
    'hideTable' => true,
  ),
  'interface' =>
  array (
    'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tx_wsbootstrapcomponents_carddeckimage, tx_wsbootstrapcomponents_carddeckheader, tx_wsbootstrapcomponents_carddecktitle, tx_wsbootstrapcomponents_carddecksubtitle, tx_wsbootstrapcomponents_carddeckbodytext, tx_wsbootstrapcomponents_carddeckphone, tx_wsbootstrapcomponents_carddeckfax, tx_wsbootstrapcomponents_carddeckmail, tx_wsbootstrapcomponents_carddeckbuttonlink, tx_wsbootstrapcomponents_carddeckbuttontext, tx_wsbootstrapcomponents_carddeckimagebottom, tx_wsbootstrapcomponents_carddeckfooter',
  ),
  'types' =>
  array (
    1 =>
    array (
      'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,tx_wsbootstrapcomponents_carddeckimage,tx_wsbootstrapcomponents_carddeckheader,tx_wsbootstrapcomponents_carddecktitle,tx_wsbootstrapcomponents_carddecksubtitle,tx_wsbootstrapcomponents_carddeckbodytext,tx_wsbootstrapcomponents_carddeckphone,tx_wsbootstrapcomponents_carddeckfax,tx_wsbootstrapcomponents_carddeckmail,tx_wsbootstrapcomponents_carddeckbuttonlink,tx_wsbootstrapcomponents_carddeckbuttontext,tx_wsbootstrapcomponents_carddeckimagebottom,tx_wsbootstrapcomponents_carddeckfooter,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
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
        'foreign_table' => 'tx_wsbootstrapcomponents_carddeck',
        'foreign_table_where' => 'AND tx_wsbootstrapcomponents_carddeck.pid=###CURRENT_PID### AND tx_wsbootstrapcomponents_carddeck.sys_language_uid IN (-1,0)',
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
    'tx_wsbootstrapcomponents_carddeckimage' =>
    array (
      'config' =>
      array (
        'type' => 'inline',
        'foreign_table' => 'sys_file_reference',
        'foreign_field' => 'uid_foreign',
        'foreign_sortby' => 'sorting_foreign',
        'foreign_table_field' => 'tablenames',
        'foreign_match_fields' =>
        array (
          'fieldname' => 'tx_wsbootstrapcomponents_carddeckimage',
        ),
        'foreign_label' => 'uid_local',
        'foreign_selector' => 'uid_local',
        'overrideChildTca' =>
        array (
          'columns' =>
          array (
            'uid_local' =>
            array (
              'config' =>
              array (
                'appearance' =>
                array (
                  'elementBrowserType' => 'file',
                  'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                ),
              ),
            ),
          ),
          'types' =>
          array (
            0 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            1 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            2 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            3 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            4 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            5 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
          ),
        ),
        'filter' =>
        array (
          0 =>
          array (
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
          ),
        ),
        'appearance' =>
        array (
          'headerThumbnail' =>
          array (
            'field' => 'uid_local',
            'width' => '45',
            'height' => '45c',
          ),
          'enabledControls' =>
          array (
            'info' => 'tx_wsbootstrapcomponents_carddeckimage',
            'dragdrop' => 'tx_wsbootstrapcomponents_carddeckimage',
            'hide' => 'tx_wsbootstrapcomponents_carddeckimage',
            'delete' => 'tx_wsbootstrapcomponents_carddeckimage',
          ),
          'showSynchronizationLink' => '1',
          'showPossibleLocalizationRecords' => '1',
          'showAllLocalizationLink' => '1',
          'showRemovedLocalizationRecords' => '1',
          'fileUploadAllowed' => 'false',
        ),
        'behaviour' =>
        array (
          'localizeChildrenAtParentLocalization' => '1',
        ),
        'maxitems' => '1',
      ),
      'exclude' => '1',
      'l10n_mode' => 'copy',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckimage',
    ),
    'tx_wsbootstrapcomponents_carddeckheader' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckheader',
    ),
    'tx_wsbootstrapcomponents_carddecktitle' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddecktitle',
    ),
    'tx_wsbootstrapcomponents_carddecksubtitle' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddecksubtitle',
    ),
    'tx_wsbootstrapcomponents_carddeckbodytext' =>
    array (
      'config' =>
      array (
        'type' => 'text',
        'richtextConfiguration' => 'default',
        'enableRichtext' => '1',
        'cols' => '5',
        'rows' => '4',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckbodytext',
    ),
    'tx_wsbootstrapcomponents_carddeckphone' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckphone',
    ),
    'tx_wsbootstrapcomponents_carddeckfax' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckfax',
    ),
    'tx_wsbootstrapcomponents_carddeckmail' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim,email',
        'placeholder' => 'mail@mail.com',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckmail',
    ),
    'tx_wsbootstrapcomponents_carddeckbuttonlink' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'renderType' => 'inputLink',
        'softref' => 'typolink',
        'fieldControl' =>
        array (
          'linkPopup' =>
          array (
            'options' =>
            array (
              'title' => 'Link',
              'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
              'blindLinkOptions' => 'folder',
            ),
          ),
        ),
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckbuttonlink',
    ),
    'tx_wsbootstrapcomponents_carddeckbuttontext' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckbuttontext',
    ),
    'tx_wsbootstrapcomponents_carddeckimagebottom' =>
    array (
      'config' =>
      array (
        'type' => 'inline',
        'foreign_table' => 'sys_file_reference',
        'foreign_field' => 'uid_foreign',
        'foreign_sortby' => 'sorting_foreign',
        'foreign_table_field' => 'tablenames',
        'foreign_match_fields' =>
        array (
          'fieldname' => 'tx_wsbootstrapcomponents_carddeckimagebottom',
        ),
        'foreign_label' => 'uid_local',
        'foreign_selector' => 'uid_local',
        'overrideChildTca' =>
        array (
          'columns' =>
          array (
            'uid_local' =>
            array (
              'config' =>
              array (
                'appearance' =>
                array (
                  'elementBrowserType' => 'file',
                  'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                ),
              ),
            ),
          ),
          'types' =>
          array (
            0 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            1 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            2 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            3 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            4 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
            5 =>
            array (
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
            ),
          ),
        ),
        'filter' =>
        array (
          0 =>
          array (
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
          ),
        ),
        'appearance' =>
        array (
          'headerThumbnail' =>
          array (
            'field' => 'uid_local',
            'width' => '45',
            'height' => '45c',
          ),
          'enabledControls' =>
          array (
            'info' => 'tx_wsbootstrapcomponents_carddeckimagebottom',
            'dragdrop' => 'tx_wsbootstrapcomponents_carddeckimagebottom',
            'hide' => 'tx_wsbootstrapcomponents_carddeckimagebottom',
            'delete' => 'tx_wsbootstrapcomponents_carddeckimagebottom',
          ),
          'showSynchronizationLink' => '1',
          'showPossibleLocalizationRecords' => '1',
          'showAllLocalizationLink' => '1',
          'showRemovedLocalizationRecords' => '1',
          'fileUploadAllowed' => 'false',
        ),
        'behaviour' =>
        array (
          'localizeChildrenAtParentLocalization' => '1',
        ),
        'maxitems' => '1',
      ),
      'exclude' => '1',
      'l10n_mode' => 'copy',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckimagebottom',
    ),
    'tx_wsbootstrapcomponents_carddeckfooter' =>
    array (
      'config' =>
      array (
        'type' => 'input',
        'eval' => 'trim',
      ),
      'exclude' => '1',
      'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tx_wsbootstrapcomponents_carddeck.tx_wsbootstrapcomponents_carddeckfooter',
    ),
  ),
);
