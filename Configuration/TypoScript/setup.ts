tt_content.wsbootstrapcomponents_accordion = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_accordion {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Accordion
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_accordion
        table = tx_wsbootstrapcomponents_accordion
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_wsbootstrapcomponents_accordion
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_accordioncontent
        table = tt_content
        pidInList.field = pid
        where = tx_wsbootstrapcomponents_accordioncontent_parent=###uid### AND deleted=0 AND hidden=0 AND colPos='999' AND CType IN ('textmedia', 'uploads', 'menu_abstract', 'menu_categorized_content', 'menu_categorized_pages', 'menu_pages', 'menu_subpages', 'menu_recently_updated', 'menu_related_pages', 'menu_section', 'menu_section_pages', 'menu_sitemap', 'menu_sitemap_pages', 'shortcut', 'list', 'div', 'html', 'login', 'form_formframework')
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_wsbootstrapcomponents_accordioncontent
    }

}
}
tt_content.wsbootstrapcomponents_carddeck = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_carddeck {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Carddeck
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_carddeck
        table = tx_wsbootstrapcomponents_carddeck
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_wsbootstrapcomponents_carddeck
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_carddeckimage
        references {
            fieldName = tx_wsbootstrapcomponents_carddeckimage
            table = tx_wsbootstrapcomponents_carddeck
        }
        as = data_tx_wsbootstrapcomponents_carddeckimage
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = tx_wsbootstrapcomponents_carddeckimagebottom
        references {
            fieldName = tx_wsbootstrapcomponents_carddeckimagebottom
            table = tx_wsbootstrapcomponents_carddeck
        }
        as = data_tx_wsbootstrapcomponents_carddeckimagebottom
    }

}
}
tt_content.wsbootstrapcomponents_cards = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_cards {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Cards
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_cardimage
        references {
            fieldName = tx_wsbootstrapcomponents_cardimage
            table = tt_content
        }
        as = data_tx_wsbootstrapcomponents_cardimage
    }
    dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.20 {
        if.isTrue.field = tx_wsbootstrapcomponents_cardimagebottom
        references {
            fieldName = tx_wsbootstrapcomponents_cardimagebottom
            table = tt_content
        }
        as = data_tx_wsbootstrapcomponents_cardimagebottom
    }
}
tt_content.wsbootstrapcomponents_carousel = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_carousel {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Carousel
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_carousel
        table = tx_wsbootstrapcomponents_carousel
        pidInList.field = pid
        where = parentid=###uid### AND deleted=0 AND hidden=0
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_wsbootstrapcomponents_carousel
    }
dataProcessing.10 {
        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_carouselimage
        references {
            fieldName = tx_wsbootstrapcomponents_carouselimage
            table = tx_wsbootstrapcomponents_carousel
        }
        as = data_tx_wsbootstrapcomponents_carouselimage
    }

}
}
tt_content.wsbootstrapcomponents_jumbotron = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_jumbotron {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Jumbotron
}
tt_content.wsbootstrapcomponents_modal = FLUIDTEMPLATE
tt_content.wsbootstrapcomponents_modal {
    layoutRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Layouts/
    layoutRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.layoutRootPath}
    partialRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Partials/
    partialRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.partialRootPath}
    templateRootPaths.0 = EXT:ws_bootstrapcomponents/Resources/Private/Templates/Content/
    templateRootPaths.10 = {$plugin.tx_wsbootstrapcomponents.view.templateRootPath}
    templateName = Modal
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        if.isTrue.field = tx_wsbootstrapcomponents_modalcontent
        table = tt_content
        pidInList.field = pid
        where = tx_wsbootstrapcomponents_modalcontent_parent=###uid### AND deleted=0 AND hidden=0 AND colPos='999' AND CType IN ('textmedia', 'uploads', 'shortcut', 'list', 'html', 'login', 'form_formframework')
        orderBy = sorting
        markers {
            uid.field = uid
        }
        as = data_tx_wsbootstrapcomponents_modalcontent
    }
}
