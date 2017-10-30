<?php
$tempColumns = array (
  'tx_wsbootstrapcomponents_accordion' =>
  array (
    'config' =>
    array (
      'type' => 'inline',
      'foreign_table' => 'tx_wsbootstrapcomponents_accordion',
      'foreign_field' => 'parentid',
      'foreign_table_field' => 'parenttable',
      'foreign_sortby' => 'sorting',
      'appearance' =>
      array (
        'enabledControls' =>
        array (
          'dragdrop' => '1',
        ),
        'expandSingle' => '1',
        'newRecordLinkTitle' => 'New Accordion Element',
        'levelLinksPosition' => 'bottom',
        'useSortable' => '1',
        'showSynchronizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showAllLocalizationLink' => '1',
        'showRemovedLocalizationRecords' => '1',
      ),
      'behaviour' =>
      array (
        'localizeChildrenAtParentLocalization' => '1',
      ),
    ),
    'exclude' => '1',
    'l10n_mode' => 'copy',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_accordion',
  ),
  'tx_wsbootstrapcomponents_cardbuttonlink' =>
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
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardbuttonlink',
  ),
  'tx_wsbootstrapcomponents_cardbuttontext' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardbuttontext',
  ),
  'tx_wsbootstrapcomponents_carddeck' =>
  array (
    'config' =>
    array (
      'type' => 'inline',
      'foreign_table' => 'tx_wsbootstrapcomponents_carddeck',
      'foreign_field' => 'parentid',
      'foreign_table_field' => 'parenttable',
      'foreign_sortby' => 'sorting',
      'appearance' =>
      array (
        'enabledControls' =>
        array (
          'dragdrop' => '1',
        ),
        'expandSingle' => '1',
        'newRecordLinkTitle' => 'New Card',
        'levelLinksPosition' => 'bottom',
        'useSortable' => '1',
        'showSynchronizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showAllLocalizationLink' => '1',
        'showRemovedLocalizationRecords' => '1',
      ),
      'behaviour' =>
      array (
        'localizeChildrenAtParentLocalization' => '1',
      ),
    ),
    'exclude' => '1',
    'l10n_mode' => 'copy',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carddeck',
  ),
  'tx_wsbootstrapcomponents_cardfax' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardfax',
  ),
  'tx_wsbootstrapcomponents_cardfooter' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardfooter',
  ),
  'tx_wsbootstrapcomponents_cardheader' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardheader',
  ),
  'tx_wsbootstrapcomponents_cardimage' =>
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
        'fieldname' => 'tx_wsbootstrapcomponents_cardimage',
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
          'info' => 'tx_wsbootstrapcomponents_cardimage',
          'dragdrop' => 'tx_wsbootstrapcomponents_cardimage',
          'hide' => 'tx_wsbootstrapcomponents_cardimage',
          'delete' => 'tx_wsbootstrapcomponents_cardimage',
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
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardimage',
  ),
  'tx_wsbootstrapcomponents_cardimagebottom' =>
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
        'fieldname' => 'tx_wsbootstrapcomponents_cardimagebottom',
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
          'info' => 'tx_wsbootstrapcomponents_cardimagebottom',
          'dragdrop' => 'tx_wsbootstrapcomponents_cardimagebottom',
          'hide' => 'tx_wsbootstrapcomponents_cardimagebottom',
          'delete' => 'tx_wsbootstrapcomponents_cardimagebottom',
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
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardimagebottom',
  ),
  'tx_wsbootstrapcomponents_cardmail' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'email',
      'placeholder' => 'mail@mail.com',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardmail',
  ),
  'tx_wsbootstrapcomponents_cardphone' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardphone',
  ),
  'tx_wsbootstrapcomponents_cardsubtitle' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardsubtitle',
  ),
  'tx_wsbootstrapcomponents_cardtitle' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_cardtitle',
  ),
  'tx_wsbootstrapcomponents_carousel' =>
  array (
    'config' =>
    array (
      'type' => 'inline',
      'foreign_table' => 'tx_wsbootstrapcomponents_carousel',
      'foreign_field' => 'parentid',
      'foreign_table_field' => 'parenttable',
      'foreign_sortby' => 'sorting',
      'appearance' =>
      array (
        'enabledControls' =>
        array (
          'dragdrop' => '1',
        ),
        'expandSingle' => '1',
        'newRecordLinkTitle' => 'New Carousel / Slide',
        'levelLinksPosition' => 'bottom',
        'useSortable' => '1',
        'showSynchronizationLink' => '1',
        'showPossibleLocalizationRecords' => '1',
        'showAllLocalizationLink' => '1',
        'showRemovedLocalizationRecords' => '1',
      ),
      'behaviour' =>
      array (
        'localizeChildrenAtParentLocalization' => '1',
      ),
    ),
    'exclude' => '1',
    'l10n_mode' => 'copy',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carousel',
  ),
  'tx_wsbootstrapcomponents_carouselcontrols' =>
  array (
    'config' =>
    array (
      'type' => 'check',
      'items' =>
      array (
        0 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselcontrols.I.0',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselcontrols',
  ),
  'tx_wsbootstrapcomponents_carouselindicators' =>
  array (
    'config' =>
    array (
      'type' => 'check',
      'items' =>
      array (
        0 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselindicators.I.0',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselindicators',
  ),
  'tx_wsbootstrapcomponents_carouselintervall' =>
  array (
    'config' =>
    array (
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' =>
      array (
        0 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.0',
          1 => '1',
        ),
        1 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.1',
          1 => '2',
        ),
        2 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.2',
          1 => '3',
        ),
        3 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.3',
          1 => '4',
        ),
        4 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.4',
          1 => '5',
        ),
        5 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.5',
          1 => '6',
        ),
        6 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.6',
          1 => '7',
        ),
        7 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall.I.7',
          1 => '8',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselintervall',
  ),
  'tx_wsbootstrapcomponents_carouselpause' =>
  array (
    'config' =>
    array (
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' =>
      array (
        0 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselpause.I.0',
          1 => '1',
        ),
        1 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselpause.I.1',
          1 => '2',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_carouselpause',
  ),
  'tx_wsbootstrapcomponents_jumbotronfull' =>
  array (
    'config' =>
    array (
      'type' => 'check',
      'items' =>
      array (
        0 =>
        array (
          0 => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotronfull.I.0',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotronfull',
  ),
  'tx_wsbootstrapcomponents_jumbotronlink' =>
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
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotronlink',
  ),
  'tx_wsbootstrapcomponents_jumbotronlinktext' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotronlinktext',
  ),
  'tx_wsbootstrapcomponents_jumbotrontext' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotrontext',
  ),
  'tx_wsbootstrapcomponents_jumbotrontexttwo' =>
  array (
    'config' =>
    array (
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_jumbotrontexttwo',
  ),
  'tx_wsbootstrapcomponents_modal' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_modal',
  ),
  'tx_wsbootstrapcomponents_modalaction' =>
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
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_modalaction',
  ),
  'tx_wsbootstrapcomponents_modalactiontext' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_modalactiontext',
  ),
  'tx_wsbootstrapcomponents_modalclose' =>
  array (
    'config' =>
    array (
      'type' => 'input',
      'eval' => 'trim',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_modalclose',
  ),
  'tx_wsbootstrapcomponents_modalcontent' =>
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
      'foreign_field' => 'tx_wsbootstrapcomponents_modalcontent_parent',
    ),
    'exclude' => '1',
    'l10n_mode' => 'copy',
    'label' => 'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsbootstrapcomponents_modalcontent',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._wsbootstrapcomponents_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_accordion',
    'wsbootstrapcomponents_accordion',
    'tx_wsbootstrapcomponents_accordion',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_carddeck',
    'wsbootstrapcomponents_carddeck',
    'tx_wsbootstrapcomponents_carddeck',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_cards',
    'wsbootstrapcomponents_cards',
    'tx_wsbootstrapcomponents_cards',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_carousel',
    'wsbootstrapcomponents_carousel',
    'tx_wsbootstrapcomponents_carousel',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_jumbotron',
    'wsbootstrapcomponents_jumbotron',
    'tx_wsbootstrapcomponents_jumbotron',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsbootstrapcomponents_modal',
    'wsbootstrapcomponents_modal',
    'tx_wsbootstrapcomponents_modal',
];
$tempTypes = array (
  'wsbootstrapcomponents_accordion' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsbootstrapcomponents_accordion,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'wsbootstrapcomponents_carddeck' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsbootstrapcomponents_carddeck,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'wsbootstrapcomponents_cards' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsbootstrapcomponents_cardimage,tx_wsbootstrapcomponents_cardheader,tx_wsbootstrapcomponents_cardtitle,tx_wsbootstrapcomponents_cardsubtitle,bodytext,tx_wsbootstrapcomponents_cardphone,tx_wsbootstrapcomponents_cardfax,tx_wsbootstrapcomponents_cardmail,tx_wsbootstrapcomponents_cardbuttonlink,tx_wsbootstrapcomponents_cardbuttontext,tx_wsbootstrapcomponents_cardimagebottom,tx_wsbootstrapcomponents_cardfooter,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'wsbootstrapcomponents_carousel' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsbootstrapcomponents_carousel,tx_wsbootstrapcomponents_carouselintervall,tx_wsbootstrapcomponents_carouselpause,tx_wsbootstrapcomponents_carouselindicators,tx_wsbootstrapcomponents_carouselcontrols,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'wsbootstrapcomponents_jumbotron' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsbootstrapcomponents_jumbotrontext,tx_wsbootstrapcomponents_jumbotrontexttwo,tx_wsbootstrapcomponents_jumbotronlink,tx_wsbootstrapcomponents_jumbotronlinktext,tx_wsbootstrapcomponents_jumbotronfull,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
  'wsbootstrapcomponents_modal' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_wsbootstrapcomponents_modal,header,tx_wsbootstrapcomponents_modalcontent,tx_wsbootstrapcomponents_modalclose,tx_wsbootstrapcomponents_modalaction,tx_wsbootstrapcomponents_modalactiontext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ws_bootstrapcomponents',
    'Configuration/TypoScript/',
    'ws_bootstrapcomponents'
);
