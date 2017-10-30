<?php
// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_accordion',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'stack-overflow',
    ]
);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_carddeck',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'columns',
    ]
);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_cards',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'square-o',
    ]
);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_carousel',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'sliders',
    ]
);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_jumbotron',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'minus-square-o',
    ]
);
$iconRegistry->registerIcon(
    'tx_wsbootstrapcomponents_modal',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'lightbulb-o',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ws_bootstrapcomponents/Configuration/PageTSconfig/NewContentElementWizard.ts">'
);
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\WSBOOTSTRAPCOMPONENTS\WsBootstrapcomponents\Form\FormDataProvider\TcaColPosItem::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowDefaultValues::class,
    ],
    'before' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems::class,
    ],
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\WSBOOTSTRAPCOMPONENTS\WsBootstrapcomponents\Form\FormDataProvider\TcaCTypeItem::class] = [
    'depends' => [
        \TYPO3\CMS\Backend\Form\FormDataProvider\TcaSelectItems::class,
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ws_bootstrapcomponents/Configuration/PageTSconfig/BackendPreview.ts">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['ws_bootstrapcomponents'] = 
    WSBOOTSTRAPCOMPONENTS\WsBootstrapcomponents\Hooks\PageLayoutViewDrawItem::class;
