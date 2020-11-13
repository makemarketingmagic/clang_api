<?php

namespace ClangSdk;

class ClangAPI extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Array' => 'ClangSdk\\ArrayCustom',
      'Struct' => 'ClangSdk\\Struct',
      'duration' => 'ClangSdk\\duration',
      'dateTime' => 'ClangSdk\\dateTime',
      'NOTATION' => 'ClangSdk\\NOTATION',
      'time' => 'ClangSdk\\time',
      'date' => 'ClangSdk\\date',
      'gYearMonth' => 'ClangSdk\\gYearMonth',
      'gYear' => 'ClangSdk\\gYear',
      'gMonthDay' => 'ClangSdk\\gMonthDay',
      'gDay' => 'ClangSdk\\gDay',
      'gMonth' => 'ClangSdk\\gMonth',
      'boolean' => 'ClangSdk\\boolean',
      'base64Binary' => 'ClangSdk\\base64Binary',
      'hexBinary' => 'ClangSdk\\hexBinary',
      'float' => 'ClangSdk\\floatCustom',
      'double' => 'ClangSdk\\double',
      'anyURI' => 'ClangSdk\\anyURI',
      'QName' => 'ClangSdk\\QName',
      'string' => 'ClangSdk\\stringCustom',
      'normalizedString' => 'ClangSdk\\normalizedString',
      'token' => 'ClangSdk\\token',
      'language' => 'ClangSdk\\language',
      'Name' => 'ClangSdk\\Name',
      'NMTOKEN' => 'ClangSdk\\NMTOKEN',
      'NCName' => 'ClangSdk\\NCName',
      'NMTOKENS' => 'ClangSdk\\NMTOKENS',
      'ID' => 'ClangSdk\\ID',
      'IDREF' => 'ClangSdk\\IDREF',
      'ENTITY' => 'ClangSdk\\ENTITY',
      'IDREFS' => 'ClangSdk\\IDREFS',
      'ENTITIES' => 'ClangSdk\\ENTITIES',
      'decimal' => 'ClangSdk\\decimal',
      'integer' => 'ClangSdk\\integer',
      'nonPositiveInteger' => 'ClangSdk\\nonPositiveInteger',
      'negativeInteger' => 'ClangSdk\\negativeInteger',
      'long' => 'ClangSdk\\long',
      'int' => 'ClangSdk\\intCustom',
      'short' => 'ClangSdk\\short',
      'byte' => 'ClangSdk\\byte',
      'nonNegativeInteger' => 'ClangSdk\\nonNegativeInteger',
      'unsignedLong' => 'ClangSdk\\unsignedLong',
      'unsignedInt' => 'ClangSdk\\unsignedInt',
      'unsignedShort' => 'ClangSdk\\unsignedShort',
      'unsignedByte' => 'ClangSdk\\unsignedByte',
      'positiveInteger' => 'ClangSdk\\positiveInteger',
      'ArrayOfString' => 'ClangSdk\\ArrayOfString',
      'ArrayOfInt' => 'ClangSdk\\ArrayOfInt',
      'Tag' => 'ClangSdk\\Tag',
      'ArrayOfTag' => 'ClangSdk\\ArrayOfTag',
      'MailingLink' => 'ClangSdk\\MailingLink',
      'ArrayOfMailingLink' => 'ClangSdk\\ArrayOfMailingLink',
      'Mailing' => 'ClangSdk\\Mailing',
      'mailing_getComplaintSet' => 'ClangSdk\\mailing_getComplaintSet',
      'mailing_getComplaintSetResponse' => 'ClangSdk\\mailing_getComplaintSetResponse',
      'mailing_getDeliverySet' => 'ClangSdk\\mailing_getDeliverySet',
      'mailing_getDeliverySetResponse' => 'ClangSdk\\mailing_getDeliverySetResponse',
      'mailing_getByCampaignObjectId' => 'ClangSdk\\mailing_getByCampaignObjectId',
      'mailing_getByCampaignObjectIdResponse' => 'ClangSdk\\mailing_getByCampaignObjectIdResponse',
      'mailing_getByDate' => 'ClangSdk\\mailing_getByDate',
      'mailing_getByDateResponse' => 'ClangSdk\\mailing_getByDateResponse',
      'mailing_getAll' => 'ClangSdk\\mailing_getAll',
      'mailing_getAllResponse' => 'ClangSdk\\mailing_getAllResponse',
      'mailing_getById' => 'ClangSdk\\mailing_getById',
      'mailing_getByIdResponse' => 'ClangSdk\\mailing_getByIdResponse',
      'mailing_getQuickmails' => 'ClangSdk\\mailing_getQuickmails',
      'mailing_getQuickmailsResponse' => 'ClangSdk\\mailing_getQuickmailsResponse',
      'mailing_getQuickmailsByDate' => 'ClangSdk\\mailing_getQuickmailsByDate',
      'mailing_getQuickmailsByDateResponse' => 'ClangSdk\\mailing_getQuickmailsByDateResponse',
      'mailing_getOpenSet' => 'ClangSdk\\mailing_getOpenSet',
      'mailing_getOpenSetResponse' => 'ClangSdk\\mailing_getOpenSetResponse',
      'mailing_getBounceSet' => 'ClangSdk\\mailing_getBounceSet',
      'mailing_getBounceSetResponse' => 'ClangSdk\\mailing_getBounceSetResponse',
      'MagentoCategory' => 'ClangSdk\\MagentoCategory',
      'ArrayOfMagentoCategory' => 'ClangSdk\\ArrayOfMagentoCategory',
      'Option' => 'ClangSdk\\Option',
      'ArrayOfOption' => 'ClangSdk\\ArrayOfOption',
      'MagentoProduct' => 'ClangSdk\\MagentoProduct',
      'ArrayOfMagentoProduct' => 'ClangSdk\\ArrayOfMagentoProduct',
      'MagentoAbandonedOrder' => 'ClangSdk\\MagentoAbandonedOrder',
      'magentoAbandonedOrder_create' => 'ClangSdk\\magentoAbandonedOrder_create',
      'magentoAbandonedOrder_createResponse' => 'ClangSdk\\magentoAbandonedOrder_createResponse',
      'magentoAbandonedOrder_insert' => 'ClangSdk\\magentoAbandonedOrder_insert',
      'magentoAbandonedOrder_insertResponse' => 'ClangSdk\\magentoAbandonedOrder_insertResponse',
      'account_addToCustomer' => 'ClangSdk\\account_addToCustomer',
      'account_addToCustomerResponse' => 'ClangSdk\\account_addToCustomerResponse',
      'account_deleteFromCustomer' => 'ClangSdk\\account_deleteFromCustomer',
      'account_deleteFromCustomerResponse' => 'ClangSdk\\account_deleteFromCustomerResponse',
      'BrowserInformation' => 'ClangSdk\\BrowserInformation',
      'Open' => 'ClangSdk\\Open',
      'openSet_getOpen' => 'ClangSdk\\openSet_getOpen',
      'openSet_getOpenResponse' => 'ClangSdk\\openSet_getOpenResponse',
      'ArrayOfOpen' => 'ClangSdk\\ArrayOfOpen',
      'openSet_getOpens' => 'ClangSdk\\openSet_getOpens',
      'openSet_getOpensResponse' => 'ClangSdk\\openSet_getOpensResponse',
      'openSet_getOpenIds' => 'ClangSdk\\openSet_getOpenIds',
      'openSet_getOpenIdsResponse' => 'ClangSdk\\openSet_getOpenIdsResponse',
      'MagentoShipment' => 'ClangSdk\\MagentoShipment',
      'magentoShipment_insert' => 'ClangSdk\\magentoShipment_insert',
      'magentoShipment_insertResponse' => 'ClangSdk\\magentoShipment_insertResponse',
      'magentoShipment_create' => 'ClangSdk\\magentoShipment_create',
      'magentoShipment_createResponse' => 'ClangSdk\\magentoShipment_createResponse',
      'Bounce' => 'ClangSdk\\Bounce',
      'bounceSet_getBounce' => 'ClangSdk\\bounceSet_getBounce',
      'bounceSet_getBounceResponse' => 'ClangSdk\\bounceSet_getBounceResponse',
      'ArrayOfBounce' => 'ClangSdk\\ArrayOfBounce',
      'bounceSet_getBounces' => 'ClangSdk\\bounceSet_getBounces',
      'bounceSet_getBouncesResponse' => 'ClangSdk\\bounceSet_getBouncesResponse',
      'bounceSet_getBounceIds' => 'ClangSdk\\bounceSet_getBounceIds',
      'bounceSet_getBounceIdsResponse' => 'ClangSdk\\bounceSet_getBounceIdsResponse',
      'campaign_getAllExecutable' => 'ClangSdk\\campaign_getAllExecutable',
      'campaign_getAllExecutableResponse' => 'ClangSdk\\campaign_getAllExecutableResponse',
      'campaign_execute' => 'ClangSdk\\campaign_execute',
      'campaign_executeResponse' => 'ClangSdk\\campaign_executeResponse',
      'campaign_executeAsync' => 'ClangSdk\\campaign_executeAsync',
      'campaign_executeAsyncResponse' => 'ClangSdk\\campaign_executeAsyncResponse',
      'campaign_getMembers' => 'ClangSdk\\campaign_getMembers',
      'campaign_getMembersResponse' => 'ClangSdk\\campaign_getMembersResponse',
      'campaign_hasMember' => 'ClangSdk\\campaign_hasMember',
      'campaign_hasMemberResponse' => 'ClangSdk\\campaign_hasMemberResponse',
      'campaign_addMember' => 'ClangSdk\\campaign_addMember',
      'campaign_addMemberResponse' => 'ClangSdk\\campaign_addMemberResponse',
      'campaign_removeMember' => 'ClangSdk\\campaign_removeMember',
      'campaign_removeMemberResponse' => 'ClangSdk\\campaign_removeMemberResponse',
      'MethodOptions' => 'ClangSdk\\MethodOptions',
      'ArrayOfMethodOptions' => 'ClangSdk\\ArrayOfMethodOptions',
      'sms_listOptions' => 'ClangSdk\\sms_listOptions',
      'sms_listOptionsResponse' => 'ClangSdk\\sms_listOptionsResponse',
      'SmsBlock' => 'ClangSdk\\SmsBlock',
      'ArrayOfSmsBlock' => 'ClangSdk\\ArrayOfSmsBlock',
      'SmsBlockContainer' => 'ClangSdk\\SmsBlockContainer',
      'ArrayOfSmsBlockContainer' => 'ClangSdk\\ArrayOfSmsBlockContainer',
      'Sms' => 'ClangSdk\\Sms',
      'sms_create' => 'ClangSdk\\sms_create',
      'sms_createResponse' => 'ClangSdk\\sms_createResponse',
      'sms_delete' => 'ClangSdk\\sms_delete',
      'sms_deleteResponse' => 'ClangSdk\\sms_deleteResponse',
      'sms_sendToCustomer' => 'ClangSdk\\sms_sendToCustomer',
      'sms_sendToCustomerResponse' => 'ClangSdk\\sms_sendToCustomerResponse',
      'sms_sendToCustomers' => 'ClangSdk\\sms_sendToCustomers',
      'sms_sendToCustomersResponse' => 'ClangSdk\\sms_sendToCustomersResponse',
      'ArrayOfSms' => 'ClangSdk\\ArrayOfSms',
      'sms_getAll' => 'ClangSdk\\sms_getAll',
      'sms_getAllResponse' => 'ClangSdk\\sms_getAllResponse',
      'sms_getById' => 'ClangSdk\\sms_getById',
      'sms_getByIdResponse' => 'ClangSdk\\sms_getByIdResponse',
      'sms_insert' => 'ClangSdk\\sms_insert',
      'sms_insertResponse' => 'ClangSdk\\sms_insertResponse',
      'sms_getByObject' => 'ClangSdk\\sms_getByObject',
      'sms_getByObjectResponse' => 'ClangSdk\\sms_getByObjectResponse',
      'sms_sendToProfile' => 'ClangSdk\\sms_sendToProfile',
      'sms_sendToProfileResponse' => 'ClangSdk\\sms_sendToProfileResponse',
      'sms_hasChanged' => 'ClangSdk\\sms_hasChanged',
      'sms_hasChangedResponse' => 'ClangSdk\\sms_hasChangedResponse',
      'sms_update' => 'ClangSdk\\sms_update',
      'sms_updateResponse' => 'ClangSdk\\sms_updateResponse',
      'sms_upsert' => 'ClangSdk\\sms_upsert',
      'sms_upsertResponse' => 'ClangSdk\\sms_upsertResponse',
      'sms_sendToGroup' => 'ClangSdk\\sms_sendToGroup',
      'sms_sendToGroupResponse' => 'ClangSdk\\sms_sendToGroupResponse',
      'CampaignStatistics' => 'ClangSdk\\CampaignStatistics',
      'campaignStatistics_getByCampaignId' => 'ClangSdk\\campaignStatistics_getByCampaignId',
      'campaignStatistics_getByCampaignIdResponse' => 'ClangSdk\\campaignStatistics_getByCampaignIdResponse',
      'campaignStatistics_getCustomerSet' => 'ClangSdk\\campaignStatistics_getCustomerSet',
      'campaignStatistics_getCustomerSetResponse' => 'ClangSdk\\campaignStatistics_getCustomerSetResponse',
      'CustomerOption' => 'ClangSdk\\CustomerOption',
      'ArrayOfCustomerOption' => 'ClangSdk\\ArrayOfCustomerOption',
      'Account' => 'ClangSdk\\Account',
      'ArrayOfAccount' => 'ClangSdk\\ArrayOfAccount',
      'Customer' => 'ClangSdk\\Customer',
      'ArrayOfCustomer' => 'ClangSdk\\ArrayOfCustomer',
      'magento_customerInsertBulkUnique' => 'ClangSdk\\magento_customerInsertBulkUnique',
      'magento_customerInsertBulkUniqueResponse' => 'ClangSdk\\magento_customerInsertBulkUniqueResponse',
      'magento_customerInsertUnique' => 'ClangSdk\\magento_customerInsertUnique',
      'magento_customerInsertUniqueResponse' => 'ClangSdk\\magento_customerInsertUniqueResponse',
      'magento_getCampaigns' => 'ClangSdk\\magento_getCampaigns',
      'magento_getCampaignsResponse' => 'ClangSdk\\magento_getCampaignsResponse',
      'magento_getAvailableCustomerFields' => 'ClangSdk\\magento_getAvailableCustomerFields',
      'magento_getAvailableCustomerFieldsResponse' => 'ClangSdk\\magento_getAvailableCustomerFieldsResponse',
      'magento_testConnection' => 'ClangSdk\\magento_testConnection',
      'magento_testConnectionResponse' => 'ClangSdk\\magento_testConnectionResponse',
      'magento_executeAbandonedCart' => 'ClangSdk\\magento_executeAbandonedCart',
      'magento_executeAbandonedCartResponse' => 'ClangSdk\\magento_executeAbandonedCartResponse',
      'magentoProduct_upsert' => 'ClangSdk\\magentoProduct_upsert',
      'magentoProduct_upsertResponse' => 'ClangSdk\\magentoProduct_upsertResponse',
      'magentoProduct_create' => 'ClangSdk\\magentoProduct_create',
      'magentoProduct_createResponse' => 'ClangSdk\\magentoProduct_createResponse',
      'bounce_getById' => 'ClangSdk\\bounce_getById',
      'bounce_getByIdResponse' => 'ClangSdk\\bounce_getByIdResponse',
      'EmailBlock' => 'ClangSdk\\EmailBlock',
      'ArrayOfEmailBlock' => 'ClangSdk\\ArrayOfEmailBlock',
      'EmailBlockContainer' => 'ClangSdk\\EmailBlockContainer',
      'ArrayOfEmailBlockContainer' => 'ClangSdk\\ArrayOfEmailBlockContainer',
      'MagentoEmail' => 'ClangSdk\\MagentoEmail',
      'magentoEmail_insert' => 'ClangSdk\\magentoEmail_insert',
      'magentoEmail_insertResponse' => 'ClangSdk\\magentoEmail_insertResponse',
      'mailingLink_getClickSet' => 'ClangSdk\\mailingLink_getClickSet',
      'mailingLink_getClickSetResponse' => 'ClangSdk\\mailingLink_getClickSetResponse',
      'MagentoCreditMemoItem' => 'ClangSdk\\MagentoCreditMemoItem',
      'ArrayOfMagentoCreditMemoItem' => 'ClangSdk\\ArrayOfMagentoCreditMemoItem',
      'MagentoCreditMemo' => 'ClangSdk\\MagentoCreditMemo',
      'magentoCreditMemo_insert' => 'ClangSdk\\magentoCreditMemo_insert',
      'magentoCreditMemo_insertResponse' => 'ClangSdk\\magentoCreditMemo_insertResponse',
      'MagentoOrder' => 'ClangSdk\\MagentoOrder',
      'magentoOrder_update' => 'ClangSdk\\magentoOrder_update',
      'magentoOrder_updateResponse' => 'ClangSdk\\magentoOrder_updateResponse',
      'magentoOrder_create' => 'ClangSdk\\magentoOrder_create',
      'magentoOrder_createResponse' => 'ClangSdk\\magentoOrder_createResponse',
      'magentoOrder_insert' => 'ClangSdk\\magentoOrder_insert',
      'magentoOrder_insertResponse' => 'ClangSdk\\magentoOrder_insertResponse',
      'ArrayOfMagentoOrder' => 'ClangSdk\\ArrayOfMagentoOrder',
      'magentoOrder_insertBulk' => 'ClangSdk\\magentoOrder_insertBulk',
      'magentoOrder_insertBulkResponse' => 'ClangSdk\\magentoOrder_insertBulkResponse',
      'campaignObjectStatisticsOption_getCustomerSet' => 'ClangSdk\\campaignObjectStatisticsOption_getCustomerSet',
      'campaignObjectStatisticsOption_getCustomerSetResponse' => 'ClangSdk\\campaignObjectStatisticsOption_getCustomerSetResponse',
      'magentoCategory_create' => 'ClangSdk\\magentoCategory_create',
      'magentoCategory_createResponse' => 'ClangSdk\\magentoCategory_createResponse',
      'magentoCategory_upsert' => 'ClangSdk\\magentoCategory_upsert',
      'magentoCategory_upsertResponse' => 'ClangSdk\\magentoCategory_upsertResponse',
      'conversionTracking_track' => 'ClangSdk\\conversionTracking_track',
      'conversionTracking_trackResponse' => 'ClangSdk\\conversionTracking_trackResponse',
      'Click' => 'ClangSdk\\Click',
      'clickSet_getClick' => 'ClangSdk\\clickSet_getClick',
      'clickSet_getClickResponse' => 'ClangSdk\\clickSet_getClickResponse',
      'ArrayOfClick' => 'ClangSdk\\ArrayOfClick',
      'clickSet_getClicks' => 'ClangSdk\\clickSet_getClicks',
      'clickSet_getClicksResponse' => 'ClangSdk\\clickSet_getClicksResponse',
      'clickSet_getClickIds' => 'ClangSdk\\clickSet_getClickIds',
      'clickSet_getClickIdsResponse' => 'ClangSdk\\clickSet_getClickIdsResponse',
      'customerSet_getCustomer' => 'ClangSdk\\customerSet_getCustomer',
      'customerSet_getCustomerResponse' => 'ClangSdk\\customerSet_getCustomerResponse',
      'customerSet_getCustomers' => 'ClangSdk\\customerSet_getCustomers',
      'customerSet_getCustomersResponse' => 'ClangSdk\\customerSet_getCustomersResponse',
      'customerSet_getCustomerIds' => 'ClangSdk\\customerSet_getCustomerIds',
      'customerSet_getCustomerIdsResponse' => 'ClangSdk\\customerSet_getCustomerIdsResponse',
      'Complaint' => 'ClangSdk\\Complaint',
      'Delivery' => 'ClangSdk\\Delivery',
      'deliverySet_getDelivery' => 'ClangSdk\\deliverySet_getDelivery',
      'deliverySet_getDeliveryResponse' => 'ClangSdk\\deliverySet_getDeliveryResponse',
      'ArrayOfDelivery' => 'ClangSdk\\ArrayOfDelivery',
      'deliverySet_getDeliveries' => 'ClangSdk\\deliverySet_getDeliveries',
      'deliverySet_getDeliveriesResponse' => 'ClangSdk\\deliverySet_getDeliveriesResponse',
      'Group' => 'ClangSdk\\Group',
      'group_addMembersInBulk' => 'ClangSdk\\group_addMembersInBulk',
      'group_addMembersInBulkResponse' => 'ClangSdk\\group_addMembersInBulkResponse',
      'GroupMembership' => 'ClangSdk\\GroupMembership',
      'group_hasMember' => 'ClangSdk\\group_hasMember',
      'group_hasMemberResponse' => 'ClangSdk\\group_hasMemberResponse',
      'group_getById' => 'ClangSdk\\group_getById',
      'group_getByIdResponse' => 'ClangSdk\\group_getByIdResponse',
      'group_delete' => 'ClangSdk\\group_delete',
      'group_deleteResponse' => 'ClangSdk\\group_deleteResponse',
      'group_getMembers' => 'ClangSdk\\group_getMembers',
      'group_getMembersResponse' => 'ClangSdk\\group_getMembersResponse',
      'group_update' => 'ClangSdk\\group_update',
      'group_updateResponse' => 'ClangSdk\\group_updateResponse',
      'group_move' => 'ClangSdk\\group_move',
      'group_moveResponse' => 'ClangSdk\\group_moveResponse',
      'group_getParent' => 'ClangSdk\\group_getParent',
      'group_getParentResponse' => 'ClangSdk\\group_getParentResponse',
      'group_create' => 'ClangSdk\\group_create',
      'group_createResponse' => 'ClangSdk\\group_createResponse',
      'group_insert' => 'ClangSdk\\group_insert',
      'group_insertResponse' => 'ClangSdk\\group_insertResponse',
      'group_upsert' => 'ClangSdk\\group_upsert',
      'group_upsertResponse' => 'ClangSdk\\group_upsertResponse',
      'ArrayOfGroup' => 'ClangSdk\\ArrayOfGroup',
      'group_getByObject' => 'ClangSdk\\group_getByObject',
      'group_getByObjectResponse' => 'ClangSdk\\group_getByObjectResponse',
      'group_getAll' => 'ClangSdk\\group_getAll',
      'group_getAllResponse' => 'ClangSdk\\group_getAllResponse',
      'group_getChildren' => 'ClangSdk\\group_getChildren',
      'group_getChildrenResponse' => 'ClangSdk\\group_getChildrenResponse',
      'group_addMember' => 'ClangSdk\\group_addMember',
      'group_addMemberResponse' => 'ClangSdk\\group_addMemberResponse',
      'group_removeMember' => 'ClangSdk\\group_removeMember',
      'group_removeMemberResponse' => 'ClangSdk\\group_removeMemberResponse',
      'group_calculate' => 'ClangSdk\\group_calculate',
      'group_calculateResponse' => 'ClangSdk\\group_calculateResponse',
      'Resource' => 'ClangSdk\\Resource',
      'resource_getById' => 'ClangSdk\\resource_getById',
      'resource_getByIdResponse' => 'ClangSdk\\resource_getByIdResponse',
      'resource_free' => 'ClangSdk\\resource_free',
      'resource_freeResponse' => 'ClangSdk\\resource_freeResponse',
      'mailingSet_getMailing' => 'ClangSdk\\mailingSet_getMailing',
      'mailingSet_getMailingResponse' => 'ClangSdk\\mailingSet_getMailingResponse',
      'ArrayOfMailing' => 'ClangSdk\\ArrayOfMailing',
      'mailingSet_getMailings' => 'ClangSdk\\mailingSet_getMailings',
      'mailingSet_getMailingsResponse' => 'ClangSdk\\mailingSet_getMailingsResponse',
      'mailingSet_getMailingIds' => 'ClangSdk\\mailingSet_getMailingIds',
      'mailingSet_getMailingIdsResponse' => 'ClangSdk\\mailingSet_getMailingIdsResponse',
      'click_getById' => 'ClangSdk\\click_getById',
      'click_getByIdResponse' => 'ClangSdk\\click_getByIdResponse',
      'Email' => 'ClangSdk\\Email',
      'email_insert' => 'ClangSdk\\email_insert',
      'email_insertResponse' => 'ClangSdk\\email_insertResponse',
      'email_update' => 'ClangSdk\\email_update',
      'email_updateResponse' => 'ClangSdk\\email_updateResponse',
      'email_upsert' => 'ClangSdk\\email_upsert',
      'email_upsertResponse' => 'ClangSdk\\email_upsertResponse',
      'email_getById' => 'ClangSdk\\email_getById',
      'email_getByIdResponse' => 'ClangSdk\\email_getByIdResponse',
      'email_listOptions' => 'ClangSdk\\email_listOptions',
      'email_listOptionsResponse' => 'ClangSdk\\email_listOptionsResponse',
      'email_sendToGroup' => 'ClangSdk\\email_sendToGroup',
      'email_sendToGroupResponse' => 'ClangSdk\\email_sendToGroupResponse',
      'email_sendToProfile' => 'ClangSdk\\email_sendToProfile',
      'email_sendToProfileResponse' => 'ClangSdk\\email_sendToProfileResponse',
      'email_sendToCustomer' => 'ClangSdk\\email_sendToCustomer',
      'email_sendToCustomerResponse' => 'ClangSdk\\email_sendToCustomerResponse',
      'email_sendToCustomers' => 'ClangSdk\\email_sendToCustomers',
      'email_sendToCustomersResponse' => 'ClangSdk\\email_sendToCustomersResponse',
      'ArrayOfEmail' => 'ClangSdk\\ArrayOfEmail',
      'email_getByObject' => 'ClangSdk\\email_getByObject',
      'email_getByObjectResponse' => 'ClangSdk\\email_getByObjectResponse',
      'email_delete' => 'ClangSdk\\email_delete',
      'email_deleteResponse' => 'ClangSdk\\email_deleteResponse',
      'email_getAll' => 'ClangSdk\\email_getAll',
      'email_getAllResponse' => 'ClangSdk\\email_getAllResponse',
      'email_hasChanged' => 'ClangSdk\\email_hasChanged',
      'email_hasChangedResponse' => 'ClangSdk\\email_hasChangedResponse',
      'email_create' => 'ClangSdk\\email_create',
      'email_createResponse' => 'ClangSdk\\email_createResponse',
      'CampaignObjectStatisticsOption' => 'ClangSdk\\CampaignObjectStatisticsOption',
      'ArrayOfCampaignObjectStatisticsOption' => 'ClangSdk\\ArrayOfCampaignObjectStatisticsOption',
      'CampaignObjectStatistics' => 'ClangSdk\\CampaignObjectStatistics',
      'campaignObjectStatistics_getByCampaignObjectId' => 'ClangSdk\\campaignObjectStatistics_getByCampaignObjectId',
      'campaignObjectStatistics_getByCampaignObjectIdResponse' => 'ClangSdk\\campaignObjectStatistics_getByCampaignObjectIdResponse',
      'filemanager_makeDir' => 'ClangSdk\\filemanager_makeDir',
      'filemanager_makeDirResponse' => 'ClangSdk\\filemanager_makeDirResponse',
      'open_getById' => 'ClangSdk\\open_getById',
      'open_getByIdResponse' => 'ClangSdk\\open_getByIdResponse',
      'customer_insertBulkUnique' => 'ClangSdk\\customer_insertBulkUnique',
      'customer_insertBulkUniqueResponse' => 'ClangSdk\\customer_insertBulkUniqueResponse',
      'customer_create' => 'ClangSdk\\customer_create',
      'customer_createResponse' => 'ClangSdk\\customer_createResponse',
      'customer_insert' => 'ClangSdk\\customer_insert',
      'customer_insertResponse' => 'ClangSdk\\customer_insertResponse',
      'customer_update' => 'ClangSdk\\customer_update',
      'customer_updateResponse' => 'ClangSdk\\customer_updateResponse',
      'customer_insertUnique' => 'ClangSdk\\customer_insertUnique',
      'customer_insertUniqueResponse' => 'ClangSdk\\customer_insertUniqueResponse',
      'customer_getById' => 'ClangSdk\\customer_getById',
      'customer_getByIdResponse' => 'ClangSdk\\customer_getByIdResponse',
      'customer_getByAccountId' => 'ClangSdk\\customer_getByAccountId',
      'customer_getByAccountIdResponse' => 'ClangSdk\\customer_getByAccountIdResponse',
      'customer_getGroups' => 'ClangSdk\\customer_getGroups',
      'customer_getGroupsResponse' => 'ClangSdk\\customer_getGroupsResponse',
      'customer_getAll' => 'ClangSdk\\customer_getAll',
      'customer_getAllResponse' => 'ClangSdk\\customer_getAllResponse',
      'customer_getByObject' => 'ClangSdk\\customer_getByObject',
      'customer_getByObjectResponse' => 'ClangSdk\\customer_getByObjectResponse',
      'customer_getByEmailAddress' => 'ClangSdk\\customer_getByEmailAddress',
      'customer_getByEmailAddressResponse' => 'ClangSdk\\customer_getByEmailAddressResponse',
      'customer_getByMobilePhone' => 'ClangSdk\\customer_getByMobilePhone',
      'customer_getByMobilePhoneResponse' => 'ClangSdk\\customer_getByMobilePhoneResponse',
      'customer_getByExternalId' => 'ClangSdk\\customer_getByExternalId',
      'customer_getByExternalIdResponse' => 'ClangSdk\\customer_getByExternalIdResponse',
      'customer_getByUserNameAndPassword' => 'ClangSdk\\customer_getByUserNameAndPassword',
      'customer_getByUserNameAndPasswordResponse' => 'ClangSdk\\customer_getByUserNameAndPasswordResponse',
      'customer_delete' => 'ClangSdk\\customer_delete',
      'customer_deleteResponse' => 'ClangSdk\\customer_deleteResponse',
      'customer_getTotalNumberOfCustomers' => 'ClangSdk\\customer_getTotalNumberOfCustomers',
      'customer_getTotalNumberOfCustomersResponse' => 'ClangSdk\\customer_getTotalNumberOfCustomersResponse',
      'customer_upsert' => 'ClangSdk\\customer_upsert',
      'customer_upsertResponse' => 'ClangSdk\\customer_upsertResponse',
      'complaintSet_getComplaint' => 'ClangSdk\\complaintSet_getComplaint',
      'complaintSet_getComplaintResponse' => 'ClangSdk\\complaintSet_getComplaintResponse',
      'ArrayOfComplaint' => 'ClangSdk\\ArrayOfComplaint',
      'complaintSet_getComplaints' => 'ClangSdk\\complaintSet_getComplaints',
      'complaintSet_getComplaintsResponse' => 'ClangSdk\\complaintSet_getComplaintsResponse',
      'complaintSet_getComplaintIds' => 'ClangSdk\\complaintSet_getComplaintIds',
      'complaintSet_getComplaintIdsResponse' => 'ClangSdk\\complaintSet_getComplaintIdsResponse',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://secure.myclang.com/app/api/soap/public/index.php?wsdl&version=1.24';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param mailing_getComplaintSet $parameters
     * @return mailing_getComplaintSetResponse
     */
    public function mailing_getComplaintSet(mailing_getComplaintSet $parameters)
    {
      return $this->__soapCall('mailing_getComplaintSet', array($parameters));
    }

    /**
     * @param mailing_getDeliverySet $parameters
     * @return mailing_getDeliverySetResponse
     */
    public function mailing_getDeliverySet(mailing_getDeliverySet $parameters)
    {
      return $this->__soapCall('mailing_getDeliverySet', array($parameters));
    }

    /**
     * @param mailing_getByCampaignObjectId $parameters
     * @return mailing_getByCampaignObjectIdResponse
     */
    public function mailing_getByCampaignObjectId(mailing_getByCampaignObjectId $parameters)
    {
      return $this->__soapCall('mailing_getByCampaignObjectId', array($parameters));
    }

    /**
     * @param mailing_getByDate $parameters
     * @return mailing_getByDateResponse
     */
    public function mailing_getByDate(mailing_getByDate $parameters)
    {
      return $this->__soapCall('mailing_getByDate', array($parameters));
    }

    /**
     * @param mailing_getAll $parameters
     * @return mailing_getAllResponse
     */
    public function mailing_getAll(mailing_getAll $parameters)
    {
      return $this->__soapCall('mailing_getAll', array($parameters));
    }

    /**
     * @param mailing_getById $parameters
     * @return mailing_getByIdResponse
     */
    public function mailing_getById(mailing_getById $parameters)
    {
      return $this->__soapCall('mailing_getById', array($parameters));
    }

    /**
     * @param mailing_getQuickmails $parameters
     * @return mailing_getQuickmailsResponse
     */
    public function mailing_getQuickmails(mailing_getQuickmails $parameters)
    {
      return $this->__soapCall('mailing_getQuickmails', array($parameters));
    }

    /**
     * @param mailing_getQuickmailsByDate $parameters
     * @return mailing_getQuickmailsByDateResponse
     */
    public function mailing_getQuickmailsByDate(mailing_getQuickmailsByDate $parameters)
    {
      return $this->__soapCall('mailing_getQuickmailsByDate', array($parameters));
    }

    /**
     * @param mailing_getOpenSet $parameters
     * @return mailing_getOpenSetResponse
     */
    public function mailing_getOpenSet(mailing_getOpenSet $parameters)
    {
      return $this->__soapCall('mailing_getOpenSet', array($parameters));
    }

    /**
     * @param mailing_getBounceSet $parameters
     * @return mailing_getBounceSetResponse
     */
    public function mailing_getBounceSet(mailing_getBounceSet $parameters)
    {
      return $this->__soapCall('mailing_getBounceSet', array($parameters));
    }

    /**
     * @param magentoAbandonedOrder_create $parameters
     * @return magentoAbandonedOrder_createResponse
     */
    public function magentoAbandonedOrder_create(magentoAbandonedOrder_create $parameters)
    {
      return $this->__soapCall('magentoAbandonedOrder_create', array($parameters));
    }

    /**
     * @param magentoAbandonedOrder_insert $parameters
     * @return magentoAbandonedOrder_insertResponse
     */
    public function magentoAbandonedOrder_insert(magentoAbandonedOrder_insert $parameters)
    {
      return $this->__soapCall('magentoAbandonedOrder_insert', array($parameters));
    }

    /**
     * @param account_addToCustomer $parameters
     * @return account_addToCustomerResponse
     */
    public function account_addToCustomer(account_addToCustomer $parameters)
    {
      return $this->__soapCall('account_addToCustomer', array($parameters));
    }

    /**
     * @param account_deleteFromCustomer $parameters
     * @return account_deleteFromCustomerResponse
     */
    public function account_deleteFromCustomer(account_deleteFromCustomer $parameters)
    {
      return $this->__soapCall('account_deleteFromCustomer', array($parameters));
    }

    /**
     * @param openSet_getOpen $parameters
     * @return openSet_getOpenResponse
     */
    public function openSet_getOpen(openSet_getOpen $parameters)
    {
      return $this->__soapCall('openSet_getOpen', array($parameters));
    }

    /**
     * @param openSet_getOpens $parameters
     * @return openSet_getOpensResponse
     */
    public function openSet_getOpens(openSet_getOpens $parameters)
    {
      return $this->__soapCall('openSet_getOpens', array($parameters));
    }

    /**
     * @param openSet_getOpenIds $parameters
     * @return openSet_getOpenIdsResponse
     */
    public function openSet_getOpenIds(openSet_getOpenIds $parameters)
    {
      return $this->__soapCall('openSet_getOpenIds', array($parameters));
    }

    /**
     * @param magentoShipment_insert $parameters
     * @return magentoShipment_insertResponse
     */
    public function magentoShipment_insert(magentoShipment_insert $parameters)
    {
      return $this->__soapCall('magentoShipment_insert', array($parameters));
    }

    /**
     * @param magentoShipment_create $parameters
     * @return magentoShipment_createResponse
     */
    public function magentoShipment_create(magentoShipment_create $parameters)
    {
      return $this->__soapCall('magentoShipment_create', array($parameters));
    }

    /**
     * @param bounceSet_getBounce $parameters
     * @return bounceSet_getBounceResponse
     */
    public function bounceSet_getBounce(bounceSet_getBounce $parameters)
    {
      return $this->__soapCall('bounceSet_getBounce', array($parameters));
    }

    /**
     * @param bounceSet_getBounces $parameters
     * @return bounceSet_getBouncesResponse
     */
    public function bounceSet_getBounces(bounceSet_getBounces $parameters)
    {
      return $this->__soapCall('bounceSet_getBounces', array($parameters));
    }

    /**
     * @param bounceSet_getBounceIds $parameters
     * @return bounceSet_getBounceIdsResponse
     */
    public function bounceSet_getBounceIds(bounceSet_getBounceIds $parameters)
    {
      return $this->__soapCall('bounceSet_getBounceIds', array($parameters));
    }

    /**
     * @param campaign_getAllExecutable $parameters
     * @return campaign_getAllExecutableResponse
     */
    public function campaign_getAllExecutable(campaign_getAllExecutable $parameters)
    {
      return $this->__soapCall('campaign_getAllExecutable', array($parameters));
    }

    /**
     * @param campaign_execute $parameters
     * @return campaign_executeResponse
     */
    public function campaign_execute(campaign_execute $parameters)
    {
      return $this->__soapCall('campaign_execute', array($parameters));
    }

    /**
     * @param campaign_executeAsync $parameters
     * @return campaign_executeAsyncResponse
     */
    public function campaign_executeAsync(campaign_executeAsync $parameters)
    {
      return $this->__soapCall('campaign_executeAsync', array($parameters));
    }

    /**
     * @param campaign_getMembers $parameters
     * @return campaign_getMembersResponse
     */
    public function campaign_getMembers(campaign_getMembers $parameters)
    {
      return $this->__soapCall('campaign_getMembers', array($parameters));
    }

    /**
     * @param campaign_hasMember $parameters
     * @return campaign_hasMemberResponse
     */
    public function campaign_hasMember(campaign_hasMember $parameters)
    {
      return $this->__soapCall('campaign_hasMember', array($parameters));
    }

    /**
     * @param campaign_addMember $parameters
     * @return campaign_addMemberResponse
     */
    public function campaign_addMember(campaign_addMember $parameters)
    {
      return $this->__soapCall('campaign_addMember', array($parameters));
    }

    /**
     * @param campaign_removeMember $parameters
     * @return campaign_removeMemberResponse
     */
    public function campaign_removeMember(campaign_removeMember $parameters)
    {
      return $this->__soapCall('campaign_removeMember', array($parameters));
    }

    /**
     * @param sms_listOptions $parameters
     * @return sms_listOptionsResponse
     */
    public function sms_listOptions(sms_listOptions $parameters)
    {
      return $this->__soapCall('sms_listOptions', array($parameters));
    }

    /**
     * @param sms_create $parameters
     * @return sms_createResponse
     */
    public function sms_create(sms_create $parameters)
    {
      return $this->__soapCall('sms_create', array($parameters));
    }

    /**
     * @param sms_delete $parameters
     * @return sms_deleteResponse
     */
    public function sms_delete(sms_delete $parameters)
    {
      return $this->__soapCall('sms_delete', array($parameters));
    }

    /**
     * @param sms_sendToCustomer $parameters
     * @return sms_sendToCustomerResponse
     */
    public function sms_sendToCustomer(sms_sendToCustomer $parameters)
    {
      return $this->__soapCall('sms_sendToCustomer', array($parameters));
    }

    /**
     * @param sms_sendToCustomers $parameters
     * @return sms_sendToCustomersResponse
     */
    public function sms_sendToCustomers(sms_sendToCustomers $parameters)
    {
      return $this->__soapCall('sms_sendToCustomers', array($parameters));
    }

    /**
     * @param sms_getAll $parameters
     * @return sms_getAllResponse
     */
    public function sms_getAll(sms_getAll $parameters)
    {
      return $this->__soapCall('sms_getAll', array($parameters));
    }

    /**
     * @param sms_getById $parameters
     * @return sms_getByIdResponse
     */
    public function sms_getById(sms_getById $parameters)
    {
      return $this->__soapCall('sms_getById', array($parameters));
    }

    /**
     * @param sms_insert $parameters
     * @return sms_insertResponse
     */
    public function sms_insert(sms_insert $parameters)
    {
      return $this->__soapCall('sms_insert', array($parameters));
    }

    /**
     * @param sms_getByObject $parameters
     * @return sms_getByObjectResponse
     */
    public function sms_getByObject(sms_getByObject $parameters)
    {
      return $this->__soapCall('sms_getByObject', array($parameters));
    }

    /**
     * @param sms_sendToProfile $parameters
     * @return sms_sendToProfileResponse
     */
    public function sms_sendToProfile(sms_sendToProfile $parameters)
    {
      return $this->__soapCall('sms_sendToProfile', array($parameters));
    }

    /**
     * @param sms_hasChanged $parameters
     * @return sms_hasChangedResponse
     */
    public function sms_hasChanged(sms_hasChanged $parameters)
    {
      return $this->__soapCall('sms_hasChanged', array($parameters));
    }

    /**
     * @param sms_update $parameters
     * @return sms_updateResponse
     */
    public function sms_update(sms_update $parameters)
    {
      return $this->__soapCall('sms_update', array($parameters));
    }

    /**
     * @param sms_upsert $parameters
     * @return sms_upsertResponse
     */
    public function sms_upsert(sms_upsert $parameters)
    {
      return $this->__soapCall('sms_upsert', array($parameters));
    }

    /**
     * @param sms_sendToGroup $parameters
     * @return sms_sendToGroupResponse
     */
    public function sms_sendToGroup(sms_sendToGroup $parameters)
    {
      return $this->__soapCall('sms_sendToGroup', array($parameters));
    }

    /**
     * @param campaignStatistics_getByCampaignId $parameters
     * @return campaignStatistics_getByCampaignIdResponse
     */
    public function campaignStatistics_getByCampaignId(campaignStatistics_getByCampaignId $parameters)
    {
      return $this->__soapCall('campaignStatistics_getByCampaignId', array($parameters));
    }

    /**
     * @param campaignStatistics_getCustomerSet $parameters
     * @return campaignStatistics_getCustomerSetResponse
     */
    public function campaignStatistics_getCustomerSet(campaignStatistics_getCustomerSet $parameters)
    {
      return $this->__soapCall('campaignStatistics_getCustomerSet', array($parameters));
    }

    /**
     * @param magento_customerInsertBulkUnique $parameters
     * @return magento_customerInsertBulkUniqueResponse
     */
    public function magento_customerInsertBulkUnique(magento_customerInsertBulkUnique $parameters)
    {
      return $this->__soapCall('magento_customerInsertBulkUnique', array($parameters));
    }

    /**
     * @param magento_customerInsertUnique $parameters
     * @return magento_customerInsertUniqueResponse
     */
    public function magento_customerInsertUnique(magento_customerInsertUnique $parameters)
    {
      return $this->__soapCall('magento_customerInsertUnique', array($parameters));
    }

    /**
     * @param magento_getCampaigns $parameters
     * @return magento_getCampaignsResponse
     */
    public function magento_getCampaigns(magento_getCampaigns $parameters)
    {
      return $this->__soapCall('magento_getCampaigns', array($parameters));
    }

    /**
     * @param magento_getAvailableCustomerFields $parameters
     * @return magento_getAvailableCustomerFieldsResponse
     */
    public function magento_getAvailableCustomerFields(magento_getAvailableCustomerFields $parameters)
    {
      return $this->__soapCall('magento_getAvailableCustomerFields', array($parameters));
    }

    /**
     * @param magento_testConnection $parameters
     * @return magento_testConnectionResponse
     */
    public function magento_testConnection(magento_testConnection $parameters)
    {
      return $this->__soapCall('magento_testConnection', array($parameters));
    }

    /**
     * @param magento_executeAbandonedCart $parameters
     * @return magento_executeAbandonedCartResponse
     */
    public function magento_executeAbandonedCart(magento_executeAbandonedCart $parameters)
    {
      return $this->__soapCall('magento_executeAbandonedCart', array($parameters));
    }

    /**
     * @param magentoProduct_upsert $parameters
     * @return magentoProduct_upsertResponse
     */
    public function magentoProduct_upsert(magentoProduct_upsert $parameters)
    {
      return $this->__soapCall('magentoProduct_upsert', array($parameters));
    }

    /**
     * @param magentoProduct_create $parameters
     * @return magentoProduct_createResponse
     */
    public function magentoProduct_create(magentoProduct_create $parameters)
    {
      return $this->__soapCall('magentoProduct_create', array($parameters));
    }

    /**
     * @param bounce_getById $parameters
     * @return bounce_getByIdResponse
     */
    public function bounce_getById(bounce_getById $parameters)
    {
      return $this->__soapCall('bounce_getById', array($parameters));
    }

    /**
     * @param magentoEmail_insert $parameters
     * @return magentoEmail_insertResponse
     */
    public function magentoEmail_insert(magentoEmail_insert $parameters)
    {
      return $this->__soapCall('magentoEmail_insert', array($parameters));
    }

    /**
     * @param mailingLink_getClickSet $parameters
     * @return mailingLink_getClickSetResponse
     */
    public function mailingLink_getClickSet(mailingLink_getClickSet $parameters)
    {
      return $this->__soapCall('mailingLink_getClickSet', array($parameters));
    }

    /**
     * @param magentoCreditMemo_insert $parameters
     * @return magentoCreditMemo_insertResponse
     */
    public function magentoCreditMemo_insert(magentoCreditMemo_insert $parameters)
    {
      return $this->__soapCall('magentoCreditMemo_insert', array($parameters));
    }

    /**
     * @param magentoOrder_update $parameters
     * @return magentoOrder_updateResponse
     */
    public function magentoOrder_update(magentoOrder_update $parameters)
    {
      return $this->__soapCall('magentoOrder_update', array($parameters));
    }

    /**
     * @param magentoOrder_create $parameters
     * @return magentoOrder_createResponse
     */
    public function magentoOrder_create(magentoOrder_create $parameters)
    {
      return $this->__soapCall('magentoOrder_create', array($parameters));
    }

    /**
     * @param magentoOrder_insert $parameters
     * @return magentoOrder_insertResponse
     */
    public function magentoOrder_insert(magentoOrder_insert $parameters)
    {
      return $this->__soapCall('magentoOrder_insert', array($parameters));
    }

    /**
     * @param magentoOrder_insertBulk $parameters
     * @return magentoOrder_insertBulkResponse
     */
    public function magentoOrder_insertBulk(magentoOrder_insertBulk $parameters)
    {
      return $this->__soapCall('magentoOrder_insertBulk', array($parameters));
    }

    /**
     * @param campaignObjectStatisticsOption_getCustomerSet $parameters
     * @return campaignObjectStatisticsOption_getCustomerSetResponse
     */
    public function campaignObjectStatisticsOption_getCustomerSet(campaignObjectStatisticsOption_getCustomerSet $parameters)
    {
      return $this->__soapCall('campaignObjectStatisticsOption_getCustomerSet', array($parameters));
    }

    /**
     * @param magentoCategory_create $parameters
     * @return magentoCategory_createResponse
     */
    public function magentoCategory_create(magentoCategory_create $parameters)
    {
      return $this->__soapCall('magentoCategory_create', array($parameters));
    }

    /**
     * @param magentoCategory_upsert $parameters
     * @return magentoCategory_upsertResponse
     */
    public function magentoCategory_upsert(magentoCategory_upsert $parameters)
    {
      return $this->__soapCall('magentoCategory_upsert', array($parameters));
    }

    /**
     * @param conversionTracking_track $parameters
     * @return conversionTracking_trackResponse
     */
    public function conversionTracking_track(conversionTracking_track $parameters)
    {
      return $this->__soapCall('conversionTracking_track', array($parameters));
    }

    /**
     * @param clickSet_getClick $parameters
     * @return clickSet_getClickResponse
     */
    public function clickSet_getClick(clickSet_getClick $parameters)
    {
      return $this->__soapCall('clickSet_getClick', array($parameters));
    }

    /**
     * @param clickSet_getClicks $parameters
     * @return clickSet_getClicksResponse
     */
    public function clickSet_getClicks(clickSet_getClicks $parameters)
    {
      return $this->__soapCall('clickSet_getClicks', array($parameters));
    }

    /**
     * @param clickSet_getClickIds $parameters
     * @return clickSet_getClickIdsResponse
     */
    public function clickSet_getClickIds(clickSet_getClickIds $parameters)
    {
      return $this->__soapCall('clickSet_getClickIds', array($parameters));
    }

    /**
     * @param customerSet_getCustomer $parameters
     * @return customerSet_getCustomerResponse
     */
    public function customerSet_getCustomer(customerSet_getCustomer $parameters)
    {
      return $this->__soapCall('customerSet_getCustomer', array($parameters));
    }

    /**
     * @param customerSet_getCustomers $parameters
     * @return customerSet_getCustomersResponse
     */
    public function customerSet_getCustomers(customerSet_getCustomers $parameters)
    {
      return $this->__soapCall('customerSet_getCustomers', array($parameters));
    }

    /**
     * @param customerSet_getCustomerIds $parameters
     * @return customerSet_getCustomerIdsResponse
     */
    public function customerSet_getCustomerIds(customerSet_getCustomerIds $parameters)
    {
      return $this->__soapCall('customerSet_getCustomerIds', array($parameters));
    }

    /**
     * @param deliverySet_getDelivery $parameters
     * @return deliverySet_getDeliveryResponse
     */
    public function deliverySet_getDelivery(deliverySet_getDelivery $parameters)
    {
      return $this->__soapCall('deliverySet_getDelivery', array($parameters));
    }

    /**
     * @param deliverySet_getDeliveries $parameters
     * @return deliverySet_getDeliveriesResponse
     */
    public function deliverySet_getDeliveries(deliverySet_getDeliveries $parameters)
    {
      return $this->__soapCall('deliverySet_getDeliveries', array($parameters));
    }

    /**
     * @param group_addMembersInBulk $parameters
     * @return group_addMembersInBulkResponse
     */
    public function group_addMembersInBulk(group_addMembersInBulk $parameters)
    {
      return $this->__soapCall('group_addMembersInBulk', array($parameters));
    }

    /**
     * @param group_hasMember $parameters
     * @return group_hasMemberResponse
     */
    public function group_hasMember(group_hasMember $parameters)
    {
      return $this->__soapCall('group_hasMember', array($parameters));
    }

    /**
     * @param group_getById $parameters
     * @return group_getByIdResponse
     */
    public function group_getById(group_getById $parameters)
    {
      return $this->__soapCall('group_getById', array($parameters));
    }

    /**
     * @param group_delete $parameters
     * @return group_deleteResponse
     */
    public function group_delete(group_delete $parameters)
    {
      return $this->__soapCall('group_delete', array($parameters));
    }

    /**
     * @param group_getMembers $parameters
     * @return group_getMembersResponse
     */
    public function group_getMembers(group_getMembers $parameters)
    {
      return $this->__soapCall('group_getMembers', array($parameters));
    }

    /**
     * @param group_update $parameters
     * @return group_updateResponse
     */
    public function group_update(group_update $parameters)
    {
      return $this->__soapCall('group_update', array($parameters));
    }

    /**
     * @param group_move $parameters
     * @return group_moveResponse
     */
    public function group_move(group_move $parameters)
    {
      return $this->__soapCall('group_move', array($parameters));
    }

    /**
     * @param group_getParent $parameters
     * @return group_getParentResponse
     */
    public function group_getParent(group_getParent $parameters)
    {
      return $this->__soapCall('group_getParent', array($parameters));
    }

    /**
     * @param group_create $parameters
     * @return group_createResponse
     */
    public function group_create(group_create $parameters)
    {
      return $this->__soapCall('group_create', array($parameters));
    }

    /**
     * @param group_insert $parameters
     * @return group_insertResponse
     */
    public function group_insert(group_insert $parameters)
    {
      return $this->__soapCall('group_insert', array($parameters));
    }

    /**
     * @param group_upsert $parameters
     * @return group_upsertResponse
     */
    public function group_upsert(group_upsert $parameters)
    {
      return $this->__soapCall('group_upsert', array($parameters));
    }

    /**
     * @param group_getByObject $parameters
     * @return group_getByObjectResponse
     */
    public function group_getByObject(group_getByObject $parameters)
    {
      return $this->__soapCall('group_getByObject', array($parameters));
    }

    /**
     * @param group_getAll $parameters
     * @return group_getAllResponse
     */
    public function group_getAll(group_getAll $parameters)
    {
      return $this->__soapCall('group_getAll', array($parameters));
    }

    /**
     * @param group_getChildren $parameters
     * @return group_getChildrenResponse
     */
    public function group_getChildren(group_getChildren $parameters)
    {
      return $this->__soapCall('group_getChildren', array($parameters));
    }

    /**
     * @param group_addMember $parameters
     * @return group_addMemberResponse
     */
    public function group_addMember(group_addMember $parameters)
    {
      return $this->__soapCall('group_addMember', array($parameters));
    }

    /**
     * @param group_removeMember $parameters
     * @return group_removeMemberResponse
     */
    public function group_removeMember(group_removeMember $parameters)
    {
      return $this->__soapCall('group_removeMember', array($parameters));
    }

    /**
     * @param group_calculate $parameters
     * @return group_calculateResponse
     */
    public function group_calculate(group_calculate $parameters)
    {
      return $this->__soapCall('group_calculate', array($parameters));
    }

    /**
     * @param resource_getById $parameters
     * @return resource_getByIdResponse
     */
    public function resource_getById(resource_getById $parameters)
    {
      return $this->__soapCall('resource_getById', array($parameters));
    }

    /**
     * @param resource_free $parameters
     * @return resource_freeResponse
     */
    public function resource_free(resource_free $parameters)
    {
      return $this->__soapCall('resource_free', array($parameters));
    }

    /**
     * @param mailingSet_getMailing $parameters
     * @return mailingSet_getMailingResponse
     */
    public function mailingSet_getMailing(mailingSet_getMailing $parameters)
    {
      return $this->__soapCall('mailingSet_getMailing', array($parameters));
    }

    /**
     * @param mailingSet_getMailings $parameters
     * @return mailingSet_getMailingsResponse
     */
    public function mailingSet_getMailings(mailingSet_getMailings $parameters)
    {
      return $this->__soapCall('mailingSet_getMailings', array($parameters));
    }

    /**
     * @param mailingSet_getMailingIds $parameters
     * @return mailingSet_getMailingIdsResponse
     */
    public function mailingSet_getMailingIds(mailingSet_getMailingIds $parameters)
    {
      return $this->__soapCall('mailingSet_getMailingIds', array($parameters));
    }

    /**
     * @param click_getById $parameters
     * @return click_getByIdResponse
     */
    public function click_getById(click_getById $parameters)
    {
      return $this->__soapCall('click_getById', array($parameters));
    }

    /**
     * @param email_insert $parameters
     * @return email_insertResponse
     */
    public function email_insert(email_insert $parameters)
    {
      return $this->__soapCall('email_insert', array($parameters));
    }

    /**
     * @param email_update $parameters
     * @return email_updateResponse
     */
    public function email_update(email_update $parameters)
    {
      return $this->__soapCall('email_update', array($parameters));
    }

    /**
     * @param email_upsert $parameters
     * @return email_upsertResponse
     */
    public function email_upsert(email_upsert $parameters)
    {
      return $this->__soapCall('email_upsert', array($parameters));
    }

    /**
     * @param email_getById $parameters
     * @return email_getByIdResponse
     */
    public function email_getById(email_getById $parameters)
    {
      return $this->__soapCall('email_getById', array($parameters));
    }

    /**
     * @param email_listOptions $parameters
     * @return email_listOptionsResponse
     */
    public function email_listOptions(email_listOptions $parameters)
    {
      return $this->__soapCall('email_listOptions', array($parameters));
    }

    /**
     * @param email_sendToGroup $parameters
     * @return email_sendToGroupResponse
     */
    public function email_sendToGroup(email_sendToGroup $parameters)
    {
      return $this->__soapCall('email_sendToGroup', array($parameters));
    }

    /**
     * @param email_sendToProfile $parameters
     * @return email_sendToProfileResponse
     */
    public function email_sendToProfile(email_sendToProfile $parameters)
    {
      return $this->__soapCall('email_sendToProfile', array($parameters));
    }

    /**
     * @param email_sendToCustomer $parameters
     * @return email_sendToCustomerResponse
     */
    public function email_sendToCustomer(email_sendToCustomer $parameters)
    {
      return $this->__soapCall('email_sendToCustomer', array($parameters));
    }

    /**
     * @param email_sendToCustomers $parameters
     * @return email_sendToCustomersResponse
     */
    public function email_sendToCustomers(email_sendToCustomers $parameters)
    {
      return $this->__soapCall('email_sendToCustomers', array($parameters));
    }

    /**
     * @param email_getByObject $parameters
     * @return email_getByObjectResponse
     */
    public function email_getByObject(email_getByObject $parameters)
    {
      return $this->__soapCall('email_getByObject', array($parameters));
    }

    /**
     * @param email_delete $parameters
     * @return email_deleteResponse
     */
    public function email_delete(email_delete $parameters)
    {
      return $this->__soapCall('email_delete', array($parameters));
    }

    /**
     * @param email_getAll $parameters
     * @return email_getAllResponse
     */
    public function email_getAll(email_getAll $parameters)
    {
      return $this->__soapCall('email_getAll', array($parameters));
    }

    /**
     * @param email_hasChanged $parameters
     * @return email_hasChangedResponse
     */
    public function email_hasChanged(email_hasChanged $parameters)
    {
      return $this->__soapCall('email_hasChanged', array($parameters));
    }

    /**
     * @param email_create $parameters
     * @return email_createResponse
     */
    public function email_create(email_create $parameters)
    {
      return $this->__soapCall('email_create', array($parameters));
    }

    /**
     * @param campaignObjectStatistics_getByCampaignObjectId $parameters
     * @return campaignObjectStatistics_getByCampaignObjectIdResponse
     */
    public function campaignObjectStatistics_getByCampaignObjectId(campaignObjectStatistics_getByCampaignObjectId $parameters)
    {
      return $this->__soapCall('campaignObjectStatistics_getByCampaignObjectId', array($parameters));
    }

    /**
     * @param filemanager_makeDir $parameters
     * @return filemanager_makeDirResponse
     */
    public function filemanager_makeDir(filemanager_makeDir $parameters)
    {
      return $this->__soapCall('filemanager_makeDir', array($parameters));
    }

    /**
     * @param open_getById $parameters
     * @return open_getByIdResponse
     */
    public function open_getById(open_getById $parameters)
    {
      return $this->__soapCall('open_getById', array($parameters));
    }

    /**
     * @param customer_insertBulkUnique $parameters
     * @return customer_insertBulkUniqueResponse
     */
    public function customer_insertBulkUnique(customer_insertBulkUnique $parameters)
    {
      return $this->__soapCall('customer_insertBulkUnique', array($parameters));
    }

    /**
     * @param customer_create $parameters
     * @return customer_createResponse
     */
    public function customer_create(customer_create $parameters)
    {
      return $this->__soapCall('customer_create', array($parameters));
    }

    /**
     * @param customer_insert $parameters
     * @return customer_insertResponse
     */
    public function customer_insert(customer_insert $parameters)
    {
      return $this->__soapCall('customer_insert', array($parameters));
    }

    /**
     * @param customer_update $parameters
     * @return customer_updateResponse
     */
    public function customer_update(customer_update $parameters)
    {
      return $this->__soapCall('customer_update', array($parameters));
    }

    /**
     * @param customer_insertUnique $parameters
     * @return customer_insertUniqueResponse
     */
    public function customer_insertUnique(customer_insertUnique $parameters)
    {
      return $this->__soapCall('customer_insertUnique', array($parameters));
    }

    /**
     * @param customer_getById $parameters
     * @return customer_getByIdResponse
     */
    public function customer_getById(customer_getById $parameters)
    {
      return $this->__soapCall('customer_getById', array($parameters));
    }

    /**
     * @param customer_getByAccountId $parameters
     * @return customer_getByAccountIdResponse
     */
    public function customer_getByAccountId(customer_getByAccountId $parameters)
    {
      return $this->__soapCall('customer_getByAccountId', array($parameters));
    }

    /**
     * @param customer_getGroups $parameters
     * @return customer_getGroupsResponse
     */
    public function customer_getGroups(customer_getGroups $parameters)
    {
      return $this->__soapCall('customer_getGroups', array($parameters));
    }

    /**
     * @param customer_getAll $parameters
     * @return customer_getAllResponse
     */
    public function customer_getAll(customer_getAll $parameters)
    {
      return $this->__soapCall('customer_getAll', array($parameters));
    }

    /**
     * @param customer_getByObject $parameters
     * @return customer_getByObjectResponse
     */
    public function customer_getByObject(customer_getByObject $parameters)
    {
      return $this->__soapCall('customer_getByObject', array($parameters));
    }

    /**
     * @param customer_getByEmailAddress $parameters
     * @return customer_getByEmailAddressResponse
     */
    public function customer_getByEmailAddress(customer_getByEmailAddress $parameters)
    {
      return $this->__soapCall('customer_getByEmailAddress', array($parameters));
    }

    /**
     * @param customer_getByMobilePhone $parameters
     * @return customer_getByMobilePhoneResponse
     */
    public function customer_getByMobilePhone(customer_getByMobilePhone $parameters)
    {
      return $this->__soapCall('customer_getByMobilePhone', array($parameters));
    }

    /**
     * @param customer_getByExternalId $parameters
     * @return customer_getByExternalIdResponse
     */
    public function customer_getByExternalId(customer_getByExternalId $parameters)
    {
      return $this->__soapCall('customer_getByExternalId', array($parameters));
    }

    /**
     * @param customer_getByUserNameAndPassword $parameters
     * @return customer_getByUserNameAndPasswordResponse
     */
    public function customer_getByUserNameAndPassword(customer_getByUserNameAndPassword $parameters)
    {
      return $this->__soapCall('customer_getByUserNameAndPassword', array($parameters));
    }

    /**
     * @param customer_delete $parameters
     * @return customer_deleteResponse
     */
    public function customer_delete(customer_delete $parameters)
    {
      return $this->__soapCall('customer_delete', array($parameters));
    }

    /**
     * @param customer_getTotalNumberOfCustomers $parameters
     * @return customer_getTotalNumberOfCustomersResponse
     */
    public function customer_getTotalNumberOfCustomers(customer_getTotalNumberOfCustomers $parameters)
    {
      return $this->__soapCall('customer_getTotalNumberOfCustomers', array($parameters));
    }

    /**
     * @param customer_upsert $parameters
     * @return customer_upsertResponse
     */
    public function customer_upsert(customer_upsert $parameters)
    {
      return $this->__soapCall('customer_upsert', array($parameters));
    }

    /**
     * @param complaintSet_getComplaint $parameters
     * @return complaintSet_getComplaintResponse
     */
    public function complaintSet_getComplaint(complaintSet_getComplaint $parameters)
    {
      return $this->__soapCall('complaintSet_getComplaint', array($parameters));
    }

    /**
     * @param complaintSet_getComplaints $parameters
     * @return complaintSet_getComplaintsResponse
     */
    public function complaintSet_getComplaints(complaintSet_getComplaints $parameters)
    {
      return $this->__soapCall('complaintSet_getComplaints', array($parameters));
    }

    /**
     * @param complaintSet_getComplaintIds $parameters
     * @return complaintSet_getComplaintIdsResponse
     */
    public function complaintSet_getComplaintIds(complaintSet_getComplaintIds $parameters)
    {
      return $this->__soapCall('complaintSet_getComplaintIds', array($parameters));
    }

}
