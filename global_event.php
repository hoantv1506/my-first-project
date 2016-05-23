<?php
use TestProject\GlobalEventDispatcher;

const AFTER_UPDATE_CUSTOMER_FEE_CONFIG = 'afterUpdateCustomerFeeConfig';
const AFTER_UPDATE_SYSTEM_FEE_CONFIG = 'afterUpdateSystemFeeConfig';
const AFTER_ADD_NEW_EXCHANGE = 'afterAddNewExchange';
const AFTER_UPDATE_EXCHANGE = 'afterUpdateExchange';

const ON_CREATE_NEW_TRANSACTION = 'onCreatedNewTransaction';
const ON_SAVED_TRANSACTION = 'onSavedTransaction';
const ON_COMPLETED_TRANSACTION = 'onCompletedTransaction';
const ON_ADJUST_AMOUNT_TRANSACTION = 'onAdjustAmountTransaction';
const ON_CANCEL_TRANSACTION = 'onCancelTransaction';
const ON_SUSPEND_TRANSACTION = 'onSuspendTransaction';

const AFTER_CHANGE_ACCOUNT_STATE = 'afterChangeAccountState';

const ON_PRINT_VOUCHER = 'onPrintVoucher';
const ON_UPLOAD_TO_VOUCHER = 'onUploadToVoucher';
const ON_REMOVE_UPLOAD_MEDIA = 'onRemoveUploadMedia';

const ON_CHANGE_VOUCHER_STATUS = 'onChangeVoucherStatus';
//
const LOGIN_SUCCESS_TO_CUSTOMER_CP = 'loginSuccessToCustomerCp';
const LOGIN_FAIL_TO_CUSTOMER_CP = 'loginFailToCustomerCp';
//registry
const CUSTOMER_CP_REGISTRY_SUCCESS = 'registryCustomerCpSuccess';
const CUSTOMER_CP_PROFILE_INFO_UPDATE_SUCCESS = 'updateProfileInfoSuccess';
//warehouse
const AFTER_WAREHOUSE_ADD_SUCCESS = 'afterWarehouseAddSuccess';
const AFTER_WAREHOUSE_UPDATE_SUCCESS = 'afterWarehouseUpdateSuccess';


//GlobalEventDispatcher::addEvents(array(
//    ON_CREATE_NEW_TRANSACTION, ON_SAVED_TRANSACTION, ON_COMPLETED_TRANSACTION, ON_CANCEL_TRANSACTION, ON_SUSPEND_TRANSACTION, ON_ADJUST_AMOUNT_TRANSACTION,
//
//    ON_PRINT_VOUCHER, ON_UPLOAD_TO_VOUCHER, ON_REMOVE_UPLOAD_MEDIA, ON_CHANGE_VOUCHER_STATUS
//));