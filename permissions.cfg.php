<?php

const PERMISSION_SMS_BANK_VIEW_LIST = 'SMS_BANK_VIEW';

const PERMISSION_USER_VIEW_DETAIL = 'USER_VIEW';
const PERMISSION_USER_VIEW_LIST = 'USER_VIEW_LIST';
const PERMISSION_USER_CREATE_NEW = 'USER_CREATE';
const PERMISSION_USER_INFO_EDIT = 'USER_INFO_EDIT';
const PERMISSION_USER_DELETE = 'USER_DELETE';
const PERMISSION_USER_REQUIRE_CHANGE_PWD = 'USER_REQUIRE_CHANGE_PASSWORD';
const PERMISSION_USER_PERMISSION_MANAGE = 'USER_PERMISSION_MANAGE';

#region ACCOUNT
const PERMISSION_ACCOUNT_VIEW_LIST = 'ACCOUNT_VIEW_LIST';
const PERMISSION_ACCOUNT_VIEW_DETAIL = 'ACCOUNT_VIEW_DETAIL';

const PERMISSION_ACCOUNT_GRANT_PERMISSION = 'ACCOUNT_PERMISSION';
const PERMISSION_ACCOUNT_CHANGE_STATUS = 'ACCOUNT_CHANGE_STATUS';
const PERMISSION_ACCOUNT_ADD_NEW = 'ACCOUNT_ADD_NEW';
const PERMISSION_ACCOUNT_EDIT = 'ACCOUNT_EDIT';
const PERMISSION_ACCOUNT_DELETE = 'ACCOUNT_DELETE';

const PERMISSION_ACCOUNT_GROUP_ADD_NEW = 'ACCOUNT_GROUP_ADD_NEW';
const PERMISSION_ACCOUNT_GROUP_VIEW_DETAIL = 'ACCOUNT_GROUP_VIEW';
const PERMISSION_ACCOUNT_GROUP_VIEW_LIST = 'ACCOUNT_GROUP_VIEW_LIST';
const PERMISSION_ACCOUNT_GROUP_EDIT = 'ACCOUNT_GROUP_EDIT';
const PERMISSION_ACCOUNT_GROUP_DELETE = 'ACCOUNT_GROUP_DELETE';

const PERMISSION_ACCOUNT_VIEW_STATISTICS_TRANSACTION = 'ACCOUNT_VIEW_STATISTICS_TRANSACTION';
#endregion

#region TRANSACTION
const PERMISSION_TRANSACTION_LIST_EXPORT = 'TRANSACTION_LIST_EXPORT';

const PERMISSION_TRANSACTION_VIEW = 'TRANSACTION_VIEW';
const PERMISSION_TRANSACTION_EDIT = 'TRANSACTION_EDIT';

const PERMISSION_TRANSACTION_ADD_NEW = 'TRANSACTION_ADD_NEW';
const PERMISSION_TRANSACTION_APPROVE = 'TRANSACTION_APPROVE';
const PERMISSION_TRANSACTION_CANCEL = 'TRANSACTION_CANCEL';
const PERMISSION_TRANSACTION_SUSPEND = 'TRANSACTION_SUSPEND';
const PERMISSION_TRANSACTION_VIEW_STATISTICS_TRANSACTION = 'TRANSACTION_VIEW_STATISTICS_TRANSACTION';
#endregion


#region Voucher
const PERMISSION_VOUCHER_VIEW_DETAIL = 'VOUCHER_VIEW';
const PERMISSION_VOUCHER_VIEW_LIST = 'VOUCHER_VIEW_LIST';
const PERMISSION_VOUCHER_EXPORT = 'VOUCHER_EXPORT';
const PERMISSION_VOUCHER_PRINT = 'VOUCHER_PRINT';
const PERMISSION_VOUCHER_CHAT = 'VOUCHER_CHAT';
#endregion

#region Batch Voucher
const PERMISSION_BATCH_VOUCHER_DETAIL_VIEW = 'BATCH_VOUCHER_DETAIL_VIEW';
const PERMISSION_BATCH_VOUCHER_LIST_VIEW = 'BATCH_VOUCHER_LIST_VIEW';
const PERMISSION_BATCH_VOUCHER_INACTIVE = 'BATCH_VOUCHER_INACTIVE';
const PERMISSION_BATCH_VOUCHER_ACTIVE = 'BATCH_VOUCHER_ACTIVE';
const PERMISSION_BATCH_VOUCHER_CREATE = 'BATCH_VOUCHER_CREATE';
#endregion

#region CURRENCY
const PERMISSION_CURRENCY_ADD_NEW = 'ACCOUNT_CURRENCY_ADD_NEW';
const PERMISSION_CURRENCY_EDIT = 'ACCOUNT_CURRENCY_EDIT';
const PERMISSION_CURRENCY_VIEW_DETAIL = 'ACCOUNT_CURRENCY_VIEW';
const PERMISSION_CURRENCY_VIEW_LIST = 'ACCOUNT_CURRENCY_VIEW_LIST';
#endregion

#region GROUP_USER
const PERMISSION_GROUP_VIEW_DETAIL = 'GROUP_VIEW';
const PERMISSION_GROUP_VIEW_LIST = 'GROUP_VIEW_LIST';
const PERMISSION_GROUP_EDIT = 'GROUP_EDIT';

const PERMISSION_GROUP_PERMISSION_MANAGE = 'GROUP_PERMISSION_MANAGE';
const PERMISSION_GROUP_DELETE = 'GROUP_DELETE';

const PERMISSION_SYSTEM_MANAGE = 'SYSTEM_MANAGE';
const PERMISSION_SYSTEM_CONFIG = 'SYSTEM_CONFIG';
#endregion

const PERMISSION_CONSUMER_VIEW_LIST = 'CONSUMER_VIEW_LIST';
const PERMISSION_CONSUMER_VIEW = 'CONSUMER_VIEW';
const PERMISSION_CONSUMER_EDIT = 'CONSUMER_EDIT';
const PERMISSION_CONSUMER_ADD_NEW = 'CONSUMER_ADD_NEW';

#region Alipay
const PERMISSION_ALIPAY_UPLOAD_FILE = 'ALIPAY_UPLOAD_FILE';
const PERMISSION_ALIPAY_VIEW_FILE_UPLOAD = 'ALIPAY_VIEW_FILE_UPLOAD';
#endregion

class PermissionsCfg
{
    /**
     * Danh sách các quyền của người dùng/nhóm người dùng
     *
     * @var array
     */
    public static $list = [
        'alipay' => [
            'label' => 'Kiểm soát giao dịch Alipay',
            'permissions' => array(
                PERMISSION_ALIPAY_VIEW_FILE_UPLOAD => array(
                    'label' => 'Xem trang danh sách file alipay đã upload',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách file alipay đã upload'
                ),

                PERMISSION_ALIPAY_UPLOAD_FILE => array(
                    'label' => 'Upload file tài chính alipay',
                    'description' => 'Quyền cho phép quản trị viên Upload file tài chính Alipay',
                ),
            ),
        ],
        'sms' => [
            'label' => 'SMS Bank',
            'permissions' => [
                PERMISSION_SMS_BANK_VIEW_LIST => [
                    'label' => 'Xem danh sách tin nhắn ngân hàng',
                    'description' => 'Quyền cho phép xem danh sách tin nhắn ngân hàng'
                ]
            ]
        ],
        'voucher' => [
            'label' => 'Phiếu thu',
            'permissions' => [
                PERMISSION_VOUCHER_VIEW_LIST => [
                    'label' => 'Xem danh sách phiếu',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách phiếu'
                ],
                PERMISSION_VOUCHER_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết phiếu',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết phiếu'
                ],
                PERMISSION_VOUCHER_EXPORT => [
                    'label' => 'Sinh thêm phiếu',
                    'description' => 'Quyền cho phép quản trị viên sinh thêm phiếu trong lô phiếu'
                ],
                PERMISSION_VOUCHER_PRINT => [
                    'label' => 'In phiếu',
                    'description' => 'Quyền cho phép quản trị viên in phiếu'
                ],
            ]
        ],
        'batch_voucher' => [
            'label' => 'Lô phiếu',
            'permissions' => [
                PERMISSION_BATCH_VOUCHER_LIST_VIEW => [
                    'label' => 'Xem danh sách lô phiếu',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách lô phiếu'
                ],
                PERMISSION_BATCH_VOUCHER_DETAIL_VIEW => [
                    'label' => 'Xem chi tiết lô phiếu',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết lô phiếu'
                ],
                PERMISSION_BATCH_VOUCHER_ACTIVE => [
                    'label' => 'Kích hoạt lô phiếu',
                    'description' => 'Quyền cho phép quản trị viên kích hoạt lô phiếu'
                ],
                PERMISSION_BATCH_VOUCHER_INACTIVE => [
                    'label' => 'Bất hoạt lô phiếu',
                    'description' => 'Quyền cho phép quản trị viên bất hoạt lô phiếu'
                ],
                PERMISSION_BATCH_VOUCHER_CREATE => [
                    'label' => 'Tạo lô phiếu',
                    'description' => 'Quyền cho phép quản trị viên tạo lô phiếu'
                ],
            ]
        ],
        'account_group_permission' => [
            'label' => 'Tài khoản, nhóm tài khoản, phân quyền',
            'permissions' => [
                PERMISSION_ACCOUNT_GROUP_ADD_NEW => [
                    'label' => 'Thêm nhóm tài khoản mới',
                    'description' => 'Quyền cho phép quản trị viên thêm nhóm tài khoản mới'
                ],
                PERMISSION_ACCOUNT_GROUP_EDIT => [
                    'label' => 'Sửa thông tin nhóm tài khoản',
                    'description' => 'Quyền cho phép quản trị viên sửa thông tin về nhóm tài khoản'
                ],
                PERMISSION_ACCOUNT_GROUP_VIEW_LIST => [
                    'label' => 'Xem danh sách nhóm tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách nhóm tài khoản'
                ],
                PERMISSION_ACCOUNT_GROUP_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết nhóm tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết nhóm tài khoản'
                ],
                PERMISSION_ACCOUNT_GROUP_DELETE => [
                    'label' => 'Xóa nhóm tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xóa nhóm tài khoản trống'
                ],

                PERMISSION_ACCOUNT_ADD_NEW => [
                    'label' => 'Thêm tài khoản mới',
                    'description' => 'Quyền cho phép quản trị viên thêm tài khoản'
                ],
                PERMISSION_ACCOUNT_EDIT => [
                    'label' => 'Sửa thông tin tài khoản',
                    'description' => 'Quyền cho phép quản trị viên sửa thông tin của tài khoản'
                ],
                PERMISSION_ACCOUNT_DELETE => [
                    'label' => 'Xóa tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xóa tài khoản trống'
                ],
                PERMISSION_ACCOUNT_VIEW_LIST => [
                    'label' => 'Xem danh sách tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách các tài khoản'
                ],
                PERMISSION_ACCOUNT_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết tài khoản'
                ],
                PERMISSION_ACCOUNT_CHANGE_STATUS => [
                    'label' => 'Thay đổi trạng thái tài khoản',
                    'description' => 'Quyền cho phép quản trị viên thay đổi trạng thái tài khoản'
                ],
                PERMISSION_ACCOUNT_VIEW_STATISTICS_TRANSACTION => [
                    'label' => 'Xem thống kê tăng trưởng thu, chi của tất cả tài khoản',
                    'description' => 'Quyền cho phép quản trị viên xem thống kê tăng trưởng thu, chi của tất cả tài khoản'
                ],
                PERMISSION_ACCOUNT_GRANT_PERMISSION => [
                    'label' => 'Cấp quyền cho tài khoản',
                    'description' => 'Quyền cho phép quản trị viên cấp quyền cho tài khoản'
                ],
            ]
        ],
        'user_role_permission' => [
            'label' => 'Người dùng, nhóm, phân quyền',
            'permissions' => [
                PERMISSION_USER_VIEW_LIST => [
                    'label' => 'Xem danh sách người dùng',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách người dùng',
                ],
                PERMISSION_USER_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết người dùng',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết người dùng',
                ],

                PERMISSION_USER_CREATE_NEW => [
                    'label' => 'Thêm người dùng',
                    'description' => 'Cho phép thêm một user mới',
                ],

                PERMISSION_USER_INFO_EDIT => [
                    'label' => 'Sửa thông tin người dùng',
                    'description' => 'Quyền cho phép quản trị viên thêm, sửa, xóa thông tin người dùng',
                ],

                PERMISSION_USER_DELETE => [
                    'label' => 'Xóa thông tin người dùng',
                    'description' => 'Quyền cho phép nhân viên xóa thông tin người dùng',
                ],

                PERMISSION_USER_REQUIRE_CHANGE_PWD => [
                    'label' => 'Yêu cầu người dùng đổi mật khẩu',
                    'description' => 'Quyền cho phép quản trị viên yêu cầu người dùng đổi mật khẩu'
                ],
                PERMISSION_USER_PERMISSION_MANAGE => [
                    'label' => 'Xem và cấp quyền tài khoản người dùng',
                    'description' => 'Quyền cho phép quản trị viên quản trị quyền tài khoản cá nhân'
                ],

                PERMISSION_GROUP_VIEW_LIST => [
                    'label' => 'Xem danh sách nhóm người dùng',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách nhóm người dùng',
                ],
                PERMISSION_GROUP_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết nhóm',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết nhóm người dùng',
                ],

                PERMISSION_GROUP_EDIT => [
                    'label' => 'Thêm và sửa thông tin nhóm',
                    'description' => 'Quyền cho phép quản trị viên sửa thông tin nhóm',
                ],

                PERMISSION_GROUP_DELETE => [
                    'label' => 'Xóa nhóm',
                    'description' => 'Quyền cho phép quản trị viên xóa bỏ nhóm',
                ],

                PERMISSION_GROUP_PERMISSION_MANAGE => [
                    'label' => 'Xem và cấp quyền cho nhóm người dùng',
                    'description' => 'Quyền cho phép quản trị viên xem và cấp quyền cho nhóm người dùng',
                ],
            ],
        ],

        'currency' => [
            'label' => 'Tiền tệ',
            'permissions' => [
                PERMISSION_CURRENCY_VIEW_LIST => [
                    'label' => 'Xem danh sách tiền tệ',
                    'description' => 'Quyền cho phép quản trị viên xem toàn bộ đơn vị tiền tệ',
                ],
                PERMISSION_CURRENCY_VIEW_DETAIL => [
                    'label' => 'Xem chi tiết tiền tệ',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết đơn vị tiền tệ',
                ],
                PERMISSION_CURRENCY_EDIT => [
                    'label' => 'Sửa đơn vị tiền tệ',
                    'description' => 'Quyền cho phép quản trị viên sửa đơn vị tiền tệ',
                ],
                PERMISSION_CURRENCY_ADD_NEW => [
                    'label' => 'Thêm tiền tệ',
                    'description' => 'Quyền cho phép quản trị viên thêm đơn vị tiền tệ',
                ],
            ]
        ],

        'system' => [
            'label' => 'Hệ thống',
            'permissions' => [
                PERMISSION_SYSTEM_CONFIG => [
                    'label' => 'Thay đổi cấu hình hệ thống',
                    'description' => 'Đường dẫn web, mô tả v.v...',
                ]
            ]
        ],

        'consumer' => [
            'label' => 'Consumer',
            'permissions' => [
                PERMISSION_CONSUMER_VIEW_LIST => [
                    'label' => 'Xem danh sách consumer',
                    'description' => 'Quyền cho phép quản trị viên xem danh sách consumer',
                ],
                PERMISSION_CONSUMER_VIEW => [
                    'label' => 'Xem chi tiết consumer',
                    'description' => 'Quyền cho phép quản trị viên xem chi tiết consumer',
                ],
                PERMISSION_CONSUMER_EDIT => [
                    'label' => 'Thêm, chỉnh sửa consumer',
                    'description' => 'Quyền cho phép quản trị viên chỉnh thêm, chỉnh sửa consumer',
                ],
                PERMISSION_CONSUMER_ADD_NEW => [
                    'label' => 'Thêm consumer mới',
                    'description' => 'Quyền cho phép quản trị viên thêm consumer'
                ]
            ]
        ]
    ];


    /**
     * Danh sách các quyền đối với tài khoản
     *
     * @var array
     */
    public static $account_permission_list = [
        'transaction' => [
            'label' => 'Giao dịch',
            'permissions' => [
                PERMISSION_TRANSACTION_ADD_NEW => [
                    'label' => 'Tạo giao dịch mới',
                    'description' => 'Quyền cho phép quản trị viên tạo mới giao dịch của tài khoản'
                ],
                PERMISSION_TRANSACTION_VIEW => [
                    'label' => 'Xem danh sách giao dịch',
                    'description' => 'Quyền cho phép quản trị viên xem toàn bộ lịch sử giao dịch (danh sách giao dịch) của tài khoản'
                ],
                PERMISSION_TRANSACTION_EDIT => [
                    'label' => 'Sửa giao dịch',
                    'description' => 'Quyền cho phép quản trị viên sửa giao dịch chưa duyệt/hủy của tài khoản'
                ],
                PERMISSION_TRANSACTION_APPROVE => [
                    'label' => 'Duyệt giao dịch',
                    'description' => 'Quyền cho phép quản trị viên duyệt giao dịch của tài khoản'
                ],
                PERMISSION_TRANSACTION_CANCEL => [
                    'label' => 'Hủy giao dịch',
                    'description' => 'Quyền cho phép quản trị viên hủy giao dịch của tài khoản'
                ],
                PERMISSION_TRANSACTION_SUSPEND => [
                    'label' => 'Hoãn giao dịch',
                    'description' => 'Quyền cho phép quản trị viên hoãn giao dịch của tài khoản'
                ],
                PERMISSION_TRANSACTION_LIST_EXPORT => [
                    'label' => 'Xuất excel danh sách giao dịch',
                    'description' => 'Quyền xuất excel danh sách giao dịch'
                ],
                PERMISSION_TRANSACTION_VIEW_STATISTICS_TRANSACTION => [
                    'label' => 'Xem thống kê tăng trưởng thu, chi',
                    'description' => 'Quyền cho phép quản trị viên xem thống kê tăng trưởng thu, chi'
                ]
            ]
        ]
    ];
}