mod.wizards.newContentElement.wizardItems.wsbc{
    header = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.tab_title
    after = common
    elements {
            accordion {
                iconIdentifier = tx_wsbootstrapcomponents_accordion
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.accordion_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.accordion_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_accordion
                }
            }
            carddeck {
                iconIdentifier = tx_wsbootstrapcomponents_carddeck
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.carddeck_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.carddeck_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_carddeck
                }
            }
            cards {
                iconIdentifier = tx_wsbootstrapcomponents_cards
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.cards_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.cards_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_cards
                }
            }
            carousel {
                iconIdentifier = tx_wsbootstrapcomponents_carousel
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.carousel_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.carousel_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_carousel
                }
            }
            jumbotron {
                iconIdentifier = tx_wsbootstrapcomponents_jumbotron
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.jumbotron_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.jumbotron_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_jumbotron
                }
            }
            modal {
                iconIdentifier = tx_wsbootstrapcomponents_modal
                title = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.modal_title
                description = LLL:EXT:ws_bootstrapcomponents/Resources/Private/Language/locallang_db_new_content_el.xlf:wizards.newContentElement.modal_description
                tt_content_defValues {
                    CType = wsbootstrapcomponents_modal
                }
            }
    }
    show := addToList(accordion, carddeck, cards, carousel, jumbotron, modal)
}
