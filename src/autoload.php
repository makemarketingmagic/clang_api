<?php


function autoload_6e8ad381f58aa941161f5d95e6e723f0($class)
{
    $classes = array(
        'ClangSdk\ClangAPI' => __DIR__ . '/ClangAPI.php',
        'ClangSdk\ArrayCustom' => __DIR__ . '/ArrayCustom.php',
        'ClangSdk\Struct' => __DIR__ . '/Struct.php',
        'ClangSdk\duration' => __DIR__ . '/duration.php',
        'ClangSdk\dateTime' => __DIR__ . '/dateTime.php',
        'ClangSdk\NOTATION' => __DIR__ . '/NOTATION.php',
        'ClangSdk\time' => __DIR__ . '/time.php',
        'ClangSdk\date' => __DIR__ . '/date.php',
        'ClangSdk\gYearMonth' => __DIR__ . '/gYearMonth.php',
        'ClangSdk\gYear' => __DIR__ . '/gYear.php',
        'ClangSdk\gMonthDay' => __DIR__ . '/gMonthDay.php',
        'ClangSdk\gDay' => __DIR__ . '/gDay.php',
        'ClangSdk\gMonth' => __DIR__ . '/gMonth.php',
        'ClangSdk\boolean' => __DIR__ . '/boolean.php',
        'ClangSdk\base64Binary' => __DIR__ . '/base64Binary.php',
        'ClangSdk\hexBinary' => __DIR__ . '/hexBinary.php',
        'ClangSdk\floatCustom' => __DIR__ . '/floatCustom.php',
        'ClangSdk\double' => __DIR__ . '/double.php',
        'ClangSdk\anyURI' => __DIR__ . '/anyURI.php',
        'ClangSdk\QName' => __DIR__ . '/QName.php',
        'ClangSdk\stringCustom' => __DIR__ . '/stringCustom.php',
        'ClangSdk\normalizedString' => __DIR__ . '/normalizedString.php',
        'ClangSdk\token' => __DIR__ . '/token.php',
        'ClangSdk\language' => __DIR__ . '/language.php',
        'ClangSdk\Name' => __DIR__ . '/Name.php',
        'ClangSdk\NMTOKEN' => __DIR__ . '/NMTOKEN.php',
        'ClangSdk\NCName' => __DIR__ . '/NCName.php',
        'ClangSdk\NMTOKENS' => __DIR__ . '/NMTOKENS.php',
        'ClangSdk\ID' => __DIR__ . '/ID.php',
        'ClangSdk\IDREF' => __DIR__ . '/IDREF.php',
        'ClangSdk\ENTITY' => __DIR__ . '/ENTITY.php',
        'ClangSdk\IDREFS' => __DIR__ . '/IDREFS.php',
        'ClangSdk\ENTITIES' => __DIR__ . '/ENTITIES.php',
        'ClangSdk\decimal' => __DIR__ . '/decimal.php',
        'ClangSdk\integer' => __DIR__ . '/integer.php',
        'ClangSdk\nonPositiveInteger' => __DIR__ . '/nonPositiveInteger.php',
        'ClangSdk\negativeInteger' => __DIR__ . '/negativeInteger.php',
        'ClangSdk\long' => __DIR__ . '/long.php',
        'ClangSdk\intCustom' => __DIR__ . '/intCustom.php',
        'ClangSdk\short' => __DIR__ . '/short.php',
        'ClangSdk\byte' => __DIR__ . '/byte.php',
        'ClangSdk\nonNegativeInteger' => __DIR__ . '/nonNegativeInteger.php',
        'ClangSdk\unsignedLong' => __DIR__ . '/unsignedLong.php',
        'ClangSdk\unsignedInt' => __DIR__ . '/unsignedInt.php',
        'ClangSdk\unsignedShort' => __DIR__ . '/unsignedShort.php',
        'ClangSdk\unsignedByte' => __DIR__ . '/unsignedByte.php',
        'ClangSdk\positiveInteger' => __DIR__ . '/positiveInteger.php',
        'ClangSdk\ArrayOfString' => __DIR__ . '/ArrayOfString.php',
        'ClangSdk\ArrayOfInt' => __DIR__ . '/ArrayOfInt.php',
        'ClangSdk\Tag' => __DIR__ . '/Tag.php',
        'ClangSdk\ArrayOfTag' => __DIR__ . '/ArrayOfTag.php',
        'ClangSdk\MailingLink' => __DIR__ . '/MailingLink.php',
        'ClangSdk\ArrayOfMailingLink' => __DIR__ . '/ArrayOfMailingLink.php',
        'ClangSdk\Mailing' => __DIR__ . '/Mailing.php',
        'ClangSdk\mailing_getComplaintSet' => __DIR__ . '/mailing_getComplaintSet.php',
        'ClangSdk\mailing_getComplaintSetResponse' => __DIR__ . '/mailing_getComplaintSetResponse.php',
        'ClangSdk\mailing_getDeliverySet' => __DIR__ . '/mailing_getDeliverySet.php',
        'ClangSdk\mailing_getDeliverySetResponse' => __DIR__ . '/mailing_getDeliverySetResponse.php',
        'ClangSdk\mailing_getByCampaignObjectId' => __DIR__ . '/mailing_getByCampaignObjectId.php',
        'ClangSdk\mailing_getByCampaignObjectIdResponse' => __DIR__ . '/mailing_getByCampaignObjectIdResponse.php',
        'ClangSdk\mailing_getByDate' => __DIR__ . '/mailing_getByDate.php',
        'ClangSdk\mailing_getByDateResponse' => __DIR__ . '/mailing_getByDateResponse.php',
        'ClangSdk\mailing_getAll' => __DIR__ . '/mailing_getAll.php',
        'ClangSdk\mailing_getAllResponse' => __DIR__ . '/mailing_getAllResponse.php',
        'ClangSdk\mailing_getById' => __DIR__ . '/mailing_getById.php',
        'ClangSdk\mailing_getByIdResponse' => __DIR__ . '/mailing_getByIdResponse.php',
        'ClangSdk\mailing_getQuickmails' => __DIR__ . '/mailing_getQuickmails.php',
        'ClangSdk\mailing_getQuickmailsResponse' => __DIR__ . '/mailing_getQuickmailsResponse.php',
        'ClangSdk\mailing_getQuickmailsByDate' => __DIR__ . '/mailing_getQuickmailsByDate.php',
        'ClangSdk\mailing_getQuickmailsByDateResponse' => __DIR__ . '/mailing_getQuickmailsByDateResponse.php',
        'ClangSdk\mailing_getOpenSet' => __DIR__ . '/mailing_getOpenSet.php',
        'ClangSdk\mailing_getOpenSetResponse' => __DIR__ . '/mailing_getOpenSetResponse.php',
        'ClangSdk\mailing_getBounceSet' => __DIR__ . '/mailing_getBounceSet.php',
        'ClangSdk\mailing_getBounceSetResponse' => __DIR__ . '/mailing_getBounceSetResponse.php',
        'ClangSdk\MagentoCategory' => __DIR__ . '/MagentoCategory.php',
        'ClangSdk\ArrayOfMagentoCategory' => __DIR__ . '/ArrayOfMagentoCategory.php',
        'ClangSdk\Option' => __DIR__ . '/Option.php',
        'ClangSdk\ArrayOfOption' => __DIR__ . '/ArrayOfOption.php',
        'ClangSdk\MagentoProduct' => __DIR__ . '/MagentoProduct.php',
        'ClangSdk\ArrayOfMagentoProduct' => __DIR__ . '/ArrayOfMagentoProduct.php',
        'ClangSdk\MagentoAbandonedOrder' => __DIR__ . '/MagentoAbandonedOrder.php',
        'ClangSdk\magentoAbandonedOrder_create' => __DIR__ . '/magentoAbandonedOrder_create.php',
        'ClangSdk\magentoAbandonedOrder_createResponse' => __DIR__ . '/magentoAbandonedOrder_createResponse.php',
        'ClangSdk\magentoAbandonedOrder_insert' => __DIR__ . '/magentoAbandonedOrder_insert.php',
        'ClangSdk\magentoAbandonedOrder_insertResponse' => __DIR__ . '/magentoAbandonedOrder_insertResponse.php',
        'ClangSdk\account_addToCustomer' => __DIR__ . '/account_addToCustomer.php',
        'ClangSdk\account_addToCustomerResponse' => __DIR__ . '/account_addToCustomerResponse.php',
        'ClangSdk\account_deleteFromCustomer' => __DIR__ . '/account_deleteFromCustomer.php',
        'ClangSdk\account_deleteFromCustomerResponse' => __DIR__ . '/account_deleteFromCustomerResponse.php',
        'ClangSdk\BrowserInformation' => __DIR__ . '/BrowserInformation.php',
        'ClangSdk\Open' => __DIR__ . '/Open.php',
        'ClangSdk\openSet_getOpen' => __DIR__ . '/openSet_getOpen.php',
        'ClangSdk\openSet_getOpenResponse' => __DIR__ . '/openSet_getOpenResponse.php',
        'ClangSdk\ArrayOfOpen' => __DIR__ . '/ArrayOfOpen.php',
        'ClangSdk\openSet_getOpens' => __DIR__ . '/openSet_getOpens.php',
        'ClangSdk\openSet_getOpensResponse' => __DIR__ . '/openSet_getOpensResponse.php',
        'ClangSdk\openSet_getOpenIds' => __DIR__ . '/openSet_getOpenIds.php',
        'ClangSdk\openSet_getOpenIdsResponse' => __DIR__ . '/openSet_getOpenIdsResponse.php',
        'ClangSdk\MagentoShipment' => __DIR__ . '/MagentoShipment.php',
        'ClangSdk\magentoShipment_insert' => __DIR__ . '/magentoShipment_insert.php',
        'ClangSdk\magentoShipment_insertResponse' => __DIR__ . '/magentoShipment_insertResponse.php',
        'ClangSdk\magentoShipment_create' => __DIR__ . '/magentoShipment_create.php',
        'ClangSdk\magentoShipment_createResponse' => __DIR__ . '/magentoShipment_createResponse.php',
        'ClangSdk\Bounce' => __DIR__ . '/Bounce.php',
        'ClangSdk\bounceSet_getBounce' => __DIR__ . '/bounceSet_getBounce.php',
        'ClangSdk\bounceSet_getBounceResponse' => __DIR__ . '/bounceSet_getBounceResponse.php',
        'ClangSdk\ArrayOfBounce' => __DIR__ . '/ArrayOfBounce.php',
        'ClangSdk\bounceSet_getBounces' => __DIR__ . '/bounceSet_getBounces.php',
        'ClangSdk\bounceSet_getBouncesResponse' => __DIR__ . '/bounceSet_getBouncesResponse.php',
        'ClangSdk\bounceSet_getBounceIds' => __DIR__ . '/bounceSet_getBounceIds.php',
        'ClangSdk\bounceSet_getBounceIdsResponse' => __DIR__ . '/bounceSet_getBounceIdsResponse.php',
        'ClangSdk\campaign_getAllExecutable' => __DIR__ . '/campaign_getAllExecutable.php',
        'ClangSdk\campaign_getAllExecutableResponse' => __DIR__ . '/campaign_getAllExecutableResponse.php',
        'ClangSdk\campaign_execute' => __DIR__ . '/campaign_execute.php',
        'ClangSdk\campaign_executeResponse' => __DIR__ . '/campaign_executeResponse.php',
        'ClangSdk\campaign_executeAsync' => __DIR__ . '/campaign_executeAsync.php',
        'ClangSdk\campaign_executeAsyncResponse' => __DIR__ . '/campaign_executeAsyncResponse.php',
        'ClangSdk\campaign_getMembers' => __DIR__ . '/campaign_getMembers.php',
        'ClangSdk\campaign_getMembersResponse' => __DIR__ . '/campaign_getMembersResponse.php',
        'ClangSdk\campaign_hasMember' => __DIR__ . '/campaign_hasMember.php',
        'ClangSdk\campaign_hasMemberResponse' => __DIR__ . '/campaign_hasMemberResponse.php',
        'ClangSdk\campaign_addMember' => __DIR__ . '/campaign_addMember.php',
        'ClangSdk\campaign_addMemberResponse' => __DIR__ . '/campaign_addMemberResponse.php',
        'ClangSdk\campaign_removeMember' => __DIR__ . '/campaign_removeMember.php',
        'ClangSdk\campaign_removeMemberResponse' => __DIR__ . '/campaign_removeMemberResponse.php',
        'ClangSdk\MethodOptions' => __DIR__ . '/MethodOptions.php',
        'ClangSdk\ArrayOfMethodOptions' => __DIR__ . '/ArrayOfMethodOptions.php',
        'ClangSdk\sms_listOptions' => __DIR__ . '/sms_listOptions.php',
        'ClangSdk\sms_listOptionsResponse' => __DIR__ . '/sms_listOptionsResponse.php',
        'ClangSdk\SmsBlock' => __DIR__ . '/SmsBlock.php',
        'ClangSdk\ArrayOfSmsBlock' => __DIR__ . '/ArrayOfSmsBlock.php',
        'ClangSdk\SmsBlockContainer' => __DIR__ . '/SmsBlockContainer.php',
        'ClangSdk\ArrayOfSmsBlockContainer' => __DIR__ . '/ArrayOfSmsBlockContainer.php',
        'ClangSdk\Sms' => __DIR__ . '/Sms.php',
        'ClangSdk\sms_create' => __DIR__ . '/sms_create.php',
        'ClangSdk\sms_createResponse' => __DIR__ . '/sms_createResponse.php',
        'ClangSdk\sms_delete' => __DIR__ . '/sms_delete.php',
        'ClangSdk\sms_deleteResponse' => __DIR__ . '/sms_deleteResponse.php',
        'ClangSdk\sms_sendToCustomer' => __DIR__ . '/sms_sendToCustomer.php',
        'ClangSdk\sms_sendToCustomerResponse' => __DIR__ . '/sms_sendToCustomerResponse.php',
        'ClangSdk\sms_sendToCustomers' => __DIR__ . '/sms_sendToCustomers.php',
        'ClangSdk\sms_sendToCustomersResponse' => __DIR__ . '/sms_sendToCustomersResponse.php',
        'ClangSdk\ArrayOfSms' => __DIR__ . '/ArrayOfSms.php',
        'ClangSdk\sms_getAll' => __DIR__ . '/sms_getAll.php',
        'ClangSdk\sms_getAllResponse' => __DIR__ . '/sms_getAllResponse.php',
        'ClangSdk\sms_getById' => __DIR__ . '/sms_getById.php',
        'ClangSdk\sms_getByIdResponse' => __DIR__ . '/sms_getByIdResponse.php',
        'ClangSdk\sms_insert' => __DIR__ . '/sms_insert.php',
        'ClangSdk\sms_insertResponse' => __DIR__ . '/sms_insertResponse.php',
        'ClangSdk\sms_getByObject' => __DIR__ . '/sms_getByObject.php',
        'ClangSdk\sms_getByObjectResponse' => __DIR__ . '/sms_getByObjectResponse.php',
        'ClangSdk\sms_sendToProfile' => __DIR__ . '/sms_sendToProfile.php',
        'ClangSdk\sms_sendToProfileResponse' => __DIR__ . '/sms_sendToProfileResponse.php',
        'ClangSdk\sms_hasChanged' => __DIR__ . '/sms_hasChanged.php',
        'ClangSdk\sms_hasChangedResponse' => __DIR__ . '/sms_hasChangedResponse.php',
        'ClangSdk\sms_update' => __DIR__ . '/sms_update.php',
        'ClangSdk\sms_updateResponse' => __DIR__ . '/sms_updateResponse.php',
        'ClangSdk\sms_upsert' => __DIR__ . '/sms_upsert.php',
        'ClangSdk\sms_upsertResponse' => __DIR__ . '/sms_upsertResponse.php',
        'ClangSdk\sms_sendToGroup' => __DIR__ . '/sms_sendToGroup.php',
        'ClangSdk\sms_sendToGroupResponse' => __DIR__ . '/sms_sendToGroupResponse.php',
        'ClangSdk\CampaignStatistics' => __DIR__ . '/CampaignStatistics.php',
        'ClangSdk\campaignStatistics_getByCampaignId' => __DIR__ . '/campaignStatistics_getByCampaignId.php',
        'ClangSdk\campaignStatistics_getByCampaignIdResponse' => __DIR__ . '/campaignStatistics_getByCampaignIdResponse.php',
        'ClangSdk\campaignStatistics_getCustomerSet' => __DIR__ . '/campaignStatistics_getCustomerSet.php',
        'ClangSdk\campaignStatistics_getCustomerSetResponse' => __DIR__ . '/campaignStatistics_getCustomerSetResponse.php',
        'ClangSdk\CustomerOption' => __DIR__ . '/CustomerOption.php',
        'ClangSdk\ArrayOfCustomerOption' => __DIR__ . '/ArrayOfCustomerOption.php',
        'ClangSdk\Account' => __DIR__ . '/Account.php',
        'ClangSdk\ArrayOfAccount' => __DIR__ . '/ArrayOfAccount.php',
        'ClangSdk\Customer' => __DIR__ . '/Customer.php',
        'ClangSdk\ArrayOfCustomer' => __DIR__ . '/ArrayOfCustomer.php',
        'ClangSdk\magento_customerInsertBulkUnique' => __DIR__ . '/magento_customerInsertBulkUnique.php',
        'ClangSdk\magento_customerInsertBulkUniqueResponse' => __DIR__ . '/magento_customerInsertBulkUniqueResponse.php',
        'ClangSdk\magento_customerInsertUnique' => __DIR__ . '/magento_customerInsertUnique.php',
        'ClangSdk\magento_customerInsertUniqueResponse' => __DIR__ . '/magento_customerInsertUniqueResponse.php',
        'ClangSdk\magento_getCampaigns' => __DIR__ . '/magento_getCampaigns.php',
        'ClangSdk\magento_getCampaignsResponse' => __DIR__ . '/magento_getCampaignsResponse.php',
        'ClangSdk\magento_getAvailableCustomerFields' => __DIR__ . '/magento_getAvailableCustomerFields.php',
        'ClangSdk\magento_getAvailableCustomerFieldsResponse' => __DIR__ . '/magento_getAvailableCustomerFieldsResponse.php',
        'ClangSdk\magento_testConnection' => __DIR__ . '/magento_testConnection.php',
        'ClangSdk\magento_testConnectionResponse' => __DIR__ . '/magento_testConnectionResponse.php',
        'ClangSdk\magento_executeAbandonedCart' => __DIR__ . '/magento_executeAbandonedCart.php',
        'ClangSdk\magento_executeAbandonedCartResponse' => __DIR__ . '/magento_executeAbandonedCartResponse.php',
        'ClangSdk\magentoProduct_upsert' => __DIR__ . '/magentoProduct_upsert.php',
        'ClangSdk\magentoProduct_upsertResponse' => __DIR__ . '/magentoProduct_upsertResponse.php',
        'ClangSdk\magentoProduct_create' => __DIR__ . '/magentoProduct_create.php',
        'ClangSdk\magentoProduct_createResponse' => __DIR__ . '/magentoProduct_createResponse.php',
        'ClangSdk\bounce_getById' => __DIR__ . '/bounce_getById.php',
        'ClangSdk\bounce_getByIdResponse' => __DIR__ . '/bounce_getByIdResponse.php',
        'ClangSdk\EmailBlock' => __DIR__ . '/EmailBlock.php',
        'ClangSdk\ArrayOfEmailBlock' => __DIR__ . '/ArrayOfEmailBlock.php',
        'ClangSdk\EmailBlockContainer' => __DIR__ . '/EmailBlockContainer.php',
        'ClangSdk\ArrayOfEmailBlockContainer' => __DIR__ . '/ArrayOfEmailBlockContainer.php',
        'ClangSdk\MagentoEmail' => __DIR__ . '/MagentoEmail.php',
        'ClangSdk\magentoEmail_insert' => __DIR__ . '/magentoEmail_insert.php',
        'ClangSdk\magentoEmail_insertResponse' => __DIR__ . '/magentoEmail_insertResponse.php',
        'ClangSdk\mailingLink_getClickSet' => __DIR__ . '/mailingLink_getClickSet.php',
        'ClangSdk\mailingLink_getClickSetResponse' => __DIR__ . '/mailingLink_getClickSetResponse.php',
        'ClangSdk\MagentoCreditMemoItem' => __DIR__ . '/MagentoCreditMemoItem.php',
        'ClangSdk\ArrayOfMagentoCreditMemoItem' => __DIR__ . '/ArrayOfMagentoCreditMemoItem.php',
        'ClangSdk\MagentoCreditMemo' => __DIR__ . '/MagentoCreditMemo.php',
        'ClangSdk\magentoCreditMemo_insert' => __DIR__ . '/magentoCreditMemo_insert.php',
        'ClangSdk\magentoCreditMemo_insertResponse' => __DIR__ . '/magentoCreditMemo_insertResponse.php',
        'ClangSdk\MagentoOrder' => __DIR__ . '/MagentoOrder.php',
        'ClangSdk\magentoOrder_update' => __DIR__ . '/magentoOrder_update.php',
        'ClangSdk\magentoOrder_updateResponse' => __DIR__ . '/magentoOrder_updateResponse.php',
        'ClangSdk\magentoOrder_create' => __DIR__ . '/magentoOrder_create.php',
        'ClangSdk\magentoOrder_createResponse' => __DIR__ . '/magentoOrder_createResponse.php',
        'ClangSdk\magentoOrder_insert' => __DIR__ . '/magentoOrder_insert.php',
        'ClangSdk\magentoOrder_insertResponse' => __DIR__ . '/magentoOrder_insertResponse.php',
        'ClangSdk\ArrayOfMagentoOrder' => __DIR__ . '/ArrayOfMagentoOrder.php',
        'ClangSdk\magentoOrder_insertBulk' => __DIR__ . '/magentoOrder_insertBulk.php',
        'ClangSdk\magentoOrder_insertBulkResponse' => __DIR__ . '/magentoOrder_insertBulkResponse.php',
        'ClangSdk\campaignObjectStatisticsOption_getCustomerSet' => __DIR__ . '/campaignObjectStatisticsOption_getCustomerSet.php',
        'ClangSdk\campaignObjectStatisticsOption_getCustomerSetResponse' => __DIR__ . '/campaignObjectStatisticsOption_getCustomerSetResponse.php',
        'ClangSdk\magentoCategory_create' => __DIR__ . '/magentoCategory_create.php',
        'ClangSdk\magentoCategory_createResponse' => __DIR__ . '/magentoCategory_createResponse.php',
        'ClangSdk\magentoCategory_upsert' => __DIR__ . '/magentoCategory_upsert.php',
        'ClangSdk\magentoCategory_upsertResponse' => __DIR__ . '/magentoCategory_upsertResponse.php',
        'ClangSdk\conversionTracking_track' => __DIR__ . '/conversionTracking_track.php',
        'ClangSdk\conversionTracking_trackResponse' => __DIR__ . '/conversionTracking_trackResponse.php',
        'ClangSdk\Click' => __DIR__ . '/Click.php',
        'ClangSdk\clickSet_getClick' => __DIR__ . '/clickSet_getClick.php',
        'ClangSdk\clickSet_getClickResponse' => __DIR__ . '/clickSet_getClickResponse.php',
        'ClangSdk\ArrayOfClick' => __DIR__ . '/ArrayOfClick.php',
        'ClangSdk\clickSet_getClicks' => __DIR__ . '/clickSet_getClicks.php',
        'ClangSdk\clickSet_getClicksResponse' => __DIR__ . '/clickSet_getClicksResponse.php',
        'ClangSdk\clickSet_getClickIds' => __DIR__ . '/clickSet_getClickIds.php',
        'ClangSdk\clickSet_getClickIdsResponse' => __DIR__ . '/clickSet_getClickIdsResponse.php',
        'ClangSdk\customerSet_getCustomer' => __DIR__ . '/customerSet_getCustomer.php',
        'ClangSdk\customerSet_getCustomerResponse' => __DIR__ . '/customerSet_getCustomerResponse.php',
        'ClangSdk\customerSet_getCustomers' => __DIR__ . '/customerSet_getCustomers.php',
        'ClangSdk\customerSet_getCustomersResponse' => __DIR__ . '/customerSet_getCustomersResponse.php',
        'ClangSdk\customerSet_getCustomerIds' => __DIR__ . '/customerSet_getCustomerIds.php',
        'ClangSdk\customerSet_getCustomerIdsResponse' => __DIR__ . '/customerSet_getCustomerIdsResponse.php',
        'ClangSdk\Complaint' => __DIR__ . '/Complaint.php',
        'ClangSdk\Delivery' => __DIR__ . '/Delivery.php',
        'ClangSdk\deliverySet_getDelivery' => __DIR__ . '/deliverySet_getDelivery.php',
        'ClangSdk\deliverySet_getDeliveryResponse' => __DIR__ . '/deliverySet_getDeliveryResponse.php',
        'ClangSdk\ArrayOfDelivery' => __DIR__ . '/ArrayOfDelivery.php',
        'ClangSdk\deliverySet_getDeliveries' => __DIR__ . '/deliverySet_getDeliveries.php',
        'ClangSdk\deliverySet_getDeliveriesResponse' => __DIR__ . '/deliverySet_getDeliveriesResponse.php',
        'ClangSdk\Group' => __DIR__ . '/Group.php',
        'ClangSdk\group_addMembersInBulk' => __DIR__ . '/group_addMembersInBulk.php',
        'ClangSdk\group_addMembersInBulkResponse' => __DIR__ . '/group_addMembersInBulkResponse.php',
        'ClangSdk\GroupMembership' => __DIR__ . '/GroupMembership.php',
        'ClangSdk\group_hasMember' => __DIR__ . '/group_hasMember.php',
        'ClangSdk\group_hasMemberResponse' => __DIR__ . '/group_hasMemberResponse.php',
        'ClangSdk\group_getById' => __DIR__ . '/group_getById.php',
        'ClangSdk\group_getByIdResponse' => __DIR__ . '/group_getByIdResponse.php',
        'ClangSdk\group_delete' => __DIR__ . '/group_delete.php',
        'ClangSdk\group_deleteResponse' => __DIR__ . '/group_deleteResponse.php',
        'ClangSdk\group_getMembers' => __DIR__ . '/group_getMembers.php',
        'ClangSdk\group_getMembersResponse' => __DIR__ . '/group_getMembersResponse.php',
        'ClangSdk\group_update' => __DIR__ . '/group_update.php',
        'ClangSdk\group_updateResponse' => __DIR__ . '/group_updateResponse.php',
        'ClangSdk\group_move' => __DIR__ . '/group_move.php',
        'ClangSdk\group_moveResponse' => __DIR__ . '/group_moveResponse.php',
        'ClangSdk\group_getParent' => __DIR__ . '/group_getParent.php',
        'ClangSdk\group_getParentResponse' => __DIR__ . '/group_getParentResponse.php',
        'ClangSdk\group_create' => __DIR__ . '/group_create.php',
        'ClangSdk\group_createResponse' => __DIR__ . '/group_createResponse.php',
        'ClangSdk\group_insert' => __DIR__ . '/group_insert.php',
        'ClangSdk\group_insertResponse' => __DIR__ . '/group_insertResponse.php',
        'ClangSdk\group_upsert' => __DIR__ . '/group_upsert.php',
        'ClangSdk\group_upsertResponse' => __DIR__ . '/group_upsertResponse.php',
        'ClangSdk\ArrayOfGroup' => __DIR__ . '/ArrayOfGroup.php',
        'ClangSdk\group_getByObject' => __DIR__ . '/group_getByObject.php',
        'ClangSdk\group_getByObjectResponse' => __DIR__ . '/group_getByObjectResponse.php',
        'ClangSdk\group_getAll' => __DIR__ . '/group_getAll.php',
        'ClangSdk\group_getAllResponse' => __DIR__ . '/group_getAllResponse.php',
        'ClangSdk\group_getChildren' => __DIR__ . '/group_getChildren.php',
        'ClangSdk\group_getChildrenResponse' => __DIR__ . '/group_getChildrenResponse.php',
        'ClangSdk\group_addMember' => __DIR__ . '/group_addMember.php',
        'ClangSdk\group_addMemberResponse' => __DIR__ . '/group_addMemberResponse.php',
        'ClangSdk\group_removeMember' => __DIR__ . '/group_removeMember.php',
        'ClangSdk\group_removeMemberResponse' => __DIR__ . '/group_removeMemberResponse.php',
        'ClangSdk\group_calculate' => __DIR__ . '/group_calculate.php',
        'ClangSdk\group_calculateResponse' => __DIR__ . '/group_calculateResponse.php',
        'ClangSdk\Resource' => __DIR__ . '/Resource.php',
        'ClangSdk\resource_getById' => __DIR__ . '/resource_getById.php',
        'ClangSdk\resource_getByIdResponse' => __DIR__ . '/resource_getByIdResponse.php',
        'ClangSdk\resource_free' => __DIR__ . '/resource_free.php',
        'ClangSdk\resource_freeResponse' => __DIR__ . '/resource_freeResponse.php',
        'ClangSdk\mailingSet_getMailing' => __DIR__ . '/mailingSet_getMailing.php',
        'ClangSdk\mailingSet_getMailingResponse' => __DIR__ . '/mailingSet_getMailingResponse.php',
        'ClangSdk\ArrayOfMailing' => __DIR__ . '/ArrayOfMailing.php',
        'ClangSdk\mailingSet_getMailings' => __DIR__ . '/mailingSet_getMailings.php',
        'ClangSdk\mailingSet_getMailingsResponse' => __DIR__ . '/mailingSet_getMailingsResponse.php',
        'ClangSdk\mailingSet_getMailingIds' => __DIR__ . '/mailingSet_getMailingIds.php',
        'ClangSdk\mailingSet_getMailingIdsResponse' => __DIR__ . '/mailingSet_getMailingIdsResponse.php',
        'ClangSdk\click_getById' => __DIR__ . '/click_getById.php',
        'ClangSdk\click_getByIdResponse' => __DIR__ . '/click_getByIdResponse.php',
        'ClangSdk\Email' => __DIR__ . '/Email.php',
        'ClangSdk\email_insert' => __DIR__ . '/email_insert.php',
        'ClangSdk\email_insertResponse' => __DIR__ . '/email_insertResponse.php',
        'ClangSdk\email_update' => __DIR__ . '/email_update.php',
        'ClangSdk\email_updateResponse' => __DIR__ . '/email_updateResponse.php',
        'ClangSdk\email_upsert' => __DIR__ . '/email_upsert.php',
        'ClangSdk\email_upsertResponse' => __DIR__ . '/email_upsertResponse.php',
        'ClangSdk\email_getById' => __DIR__ . '/email_getById.php',
        'ClangSdk\email_getByIdResponse' => __DIR__ . '/email_getByIdResponse.php',
        'ClangSdk\email_listOptions' => __DIR__ . '/email_listOptions.php',
        'ClangSdk\email_listOptionsResponse' => __DIR__ . '/email_listOptionsResponse.php',
        'ClangSdk\email_sendToGroup' => __DIR__ . '/email_sendToGroup.php',
        'ClangSdk\email_sendToGroupResponse' => __DIR__ . '/email_sendToGroupResponse.php',
        'ClangSdk\email_sendToProfile' => __DIR__ . '/email_sendToProfile.php',
        'ClangSdk\email_sendToProfileResponse' => __DIR__ . '/email_sendToProfileResponse.php',
        'ClangSdk\email_sendToCustomer' => __DIR__ . '/email_sendToCustomer.php',
        'ClangSdk\email_sendToCustomerResponse' => __DIR__ . '/email_sendToCustomerResponse.php',
        'ClangSdk\email_sendToCustomers' => __DIR__ . '/email_sendToCustomers.php',
        'ClangSdk\email_sendToCustomersResponse' => __DIR__ . '/email_sendToCustomersResponse.php',
        'ClangSdk\ArrayOfEmail' => __DIR__ . '/ArrayOfEmail.php',
        'ClangSdk\email_getByObject' => __DIR__ . '/email_getByObject.php',
        'ClangSdk\email_getByObjectResponse' => __DIR__ . '/email_getByObjectResponse.php',
        'ClangSdk\email_delete' => __DIR__ . '/email_delete.php',
        'ClangSdk\email_deleteResponse' => __DIR__ . '/email_deleteResponse.php',
        'ClangSdk\email_getAll' => __DIR__ . '/email_getAll.php',
        'ClangSdk\email_getAllResponse' => __DIR__ . '/email_getAllResponse.php',
        'ClangSdk\email_hasChanged' => __DIR__ . '/email_hasChanged.php',
        'ClangSdk\email_hasChangedResponse' => __DIR__ . '/email_hasChangedResponse.php',
        'ClangSdk\email_create' => __DIR__ . '/email_create.php',
        'ClangSdk\email_createResponse' => __DIR__ . '/email_createResponse.php',
        'ClangSdk\CampaignObjectStatisticsOption' => __DIR__ . '/CampaignObjectStatisticsOption.php',
        'ClangSdk\ArrayOfCampaignObjectStatisticsOption' => __DIR__ . '/ArrayOfCampaignObjectStatisticsOption.php',
        'ClangSdk\CampaignObjectStatistics' => __DIR__ . '/CampaignObjectStatistics.php',
        'ClangSdk\campaignObjectStatistics_getByCampaignObjectId' => __DIR__ . '/campaignObjectStatistics_getByCampaignObjectId.php',
        'ClangSdk\campaignObjectStatistics_getByCampaignObjectIdResponse' => __DIR__ . '/campaignObjectStatistics_getByCampaignObjectIdResponse.php',
        'ClangSdk\filemanager_makeDir' => __DIR__ . '/filemanager_makeDir.php',
        'ClangSdk\filemanager_makeDirResponse' => __DIR__ . '/filemanager_makeDirResponse.php',
        'ClangSdk\open_getById' => __DIR__ . '/open_getById.php',
        'ClangSdk\open_getByIdResponse' => __DIR__ . '/open_getByIdResponse.php',
        'ClangSdk\customer_insertBulkUnique' => __DIR__ . '/customer_insertBulkUnique.php',
        'ClangSdk\customer_insertBulkUniqueResponse' => __DIR__ . '/customer_insertBulkUniqueResponse.php',
        'ClangSdk\customer_create' => __DIR__ . '/customer_create.php',
        'ClangSdk\customer_createResponse' => __DIR__ . '/customer_createResponse.php',
        'ClangSdk\customer_insert' => __DIR__ . '/customer_insert.php',
        'ClangSdk\customer_insertResponse' => __DIR__ . '/customer_insertResponse.php',
        'ClangSdk\customer_update' => __DIR__ . '/customer_update.php',
        'ClangSdk\customer_updateResponse' => __DIR__ . '/customer_updateResponse.php',
        'ClangSdk\customer_insertUnique' => __DIR__ . '/customer_insertUnique.php',
        'ClangSdk\customer_insertUniqueResponse' => __DIR__ . '/customer_insertUniqueResponse.php',
        'ClangSdk\customer_getById' => __DIR__ . '/customer_getById.php',
        'ClangSdk\customer_getByIdResponse' => __DIR__ . '/customer_getByIdResponse.php',
        'ClangSdk\customer_getByAccountId' => __DIR__ . '/customer_getByAccountId.php',
        'ClangSdk\customer_getByAccountIdResponse' => __DIR__ . '/customer_getByAccountIdResponse.php',
        'ClangSdk\customer_getGroups' => __DIR__ . '/customer_getGroups.php',
        'ClangSdk\customer_getGroupsResponse' => __DIR__ . '/customer_getGroupsResponse.php',
        'ClangSdk\customer_getAll' => __DIR__ . '/customer_getAll.php',
        'ClangSdk\customer_getAllResponse' => __DIR__ . '/customer_getAllResponse.php',
        'ClangSdk\customer_getByObject' => __DIR__ . '/customer_getByObject.php',
        'ClangSdk\customer_getByObjectResponse' => __DIR__ . '/customer_getByObjectResponse.php',
        'ClangSdk\customer_getByEmailAddress' => __DIR__ . '/customer_getByEmailAddress.php',
        'ClangSdk\customer_getByEmailAddressResponse' => __DIR__ . '/customer_getByEmailAddressResponse.php',
        'ClangSdk\customer_getByMobilePhone' => __DIR__ . '/customer_getByMobilePhone.php',
        'ClangSdk\customer_getByMobilePhoneResponse' => __DIR__ . '/customer_getByMobilePhoneResponse.php',
        'ClangSdk\customer_getByExternalId' => __DIR__ . '/customer_getByExternalId.php',
        'ClangSdk\customer_getByExternalIdResponse' => __DIR__ . '/customer_getByExternalIdResponse.php',
        'ClangSdk\customer_getByUserNameAndPassword' => __DIR__ . '/customer_getByUserNameAndPassword.php',
        'ClangSdk\customer_getByUserNameAndPasswordResponse' => __DIR__ . '/customer_getByUserNameAndPasswordResponse.php',
        'ClangSdk\customer_delete' => __DIR__ . '/customer_delete.php',
        'ClangSdk\customer_deleteResponse' => __DIR__ . '/customer_deleteResponse.php',
        'ClangSdk\customer_getTotalNumberOfCustomers' => __DIR__ . '/customer_getTotalNumberOfCustomers.php',
        'ClangSdk\customer_getTotalNumberOfCustomersResponse' => __DIR__ . '/customer_getTotalNumberOfCustomersResponse.php',
        'ClangSdk\customer_upsert' => __DIR__ . '/customer_upsert.php',
        'ClangSdk\customer_upsertResponse' => __DIR__ . '/customer_upsertResponse.php',
        'ClangSdk\complaintSet_getComplaint' => __DIR__ . '/complaintSet_getComplaint.php',
        'ClangSdk\complaintSet_getComplaintResponse' => __DIR__ . '/complaintSet_getComplaintResponse.php',
        'ClangSdk\ArrayOfComplaint' => __DIR__ . '/ArrayOfComplaint.php',
        'ClangSdk\complaintSet_getComplaints' => __DIR__ . '/complaintSet_getComplaints.php',
        'ClangSdk\complaintSet_getComplaintsResponse' => __DIR__ . '/complaintSet_getComplaintsResponse.php',
        'ClangSdk\complaintSet_getComplaintIds' => __DIR__ . '/complaintSet_getComplaintIds.php',
        'ClangSdk\complaintSet_getComplaintIdsResponse' => __DIR__ . '/complaintSet_getComplaintIdsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6e8ad381f58aa941161f5d95e6e723f0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
