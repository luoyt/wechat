<?php
/**
 * User: luoyt
 * Date: 2016/10/28
 * Time: 9:12
 */
namespace luoyt\wechat;

class Wechat{
    /* 获取ACCESS_TOKEN URL */
    const AUTH_URL                = 'https://api.weixin.qq.com/cgi-bin/token';
    /* 菜单相关URL */
    const MENU_CREATE_URL         = 'https://api.weixin.qq.com/cgi-bin/menu/create';
    const MENU_GET_URL            = 'https://api.weixin.qq.com/cgi-bin/menu/get';
    const MENU_DELETE_URL         = 'https://api.weixin.qq.com/cgi-bin/menu/delete';
    /* 用户及用户分组URL */
    const USER_GET_URL            = 'https://api.weixin.qq.com/cgi-bin/user/get';
    const USER_INFO_URL           = 'https://api.weixin.qq.com/cgi-bin/user/info';
    const USER_IN_GROUP           = 'https://api.weixin.qq.com/cgi-bin/groups/getid';
    const GROUP_GET_URL           = 'https://api.weixin.qq.com/cgi-bin/groups/get';
    const GROUP_CREATE_URL        = 'https://api.weixin.qq.com/cgi-bin/groups/create';
    const GROUP_UPDATE_URL        = 'https://api.weixin.qq.com/cgi-bin/groups/update';
    const GROUP_MEMBER_UPDATE_URL = 'https://api.weixin.qq.com/cgi-bin/groups/members/update';
    /* 发送客服消息URL */
    const CUSTOM_SEND_URL         = 'https://api.weixin.qq.com/cgi-bin/message/custom/send';
    /* 二维码生成 URL*/
    const QRCODE_URL              = 'https://api.weixin.qq.com/cgi-bin/qrcode/create';
    const QRCODE_SHOW_URL         = 'https://mp.weixin.qq.com/cgi-bin/showqrcode';
    /* OAuth2.0授权地址 */
    const OAUTH_AUTHORIZE_URL     = 'https://open.weixin.qq.com/connect/oauth2/authorize';
    const OAUTH_USER_TOKEN_URL    = 'https://api.weixin.qq.com/sns/oauth2/access_token';
    const OAUTH_GET_USERINFO	  = 'https://api.weixin.qq.com/sns/userinfo';
    /* 消息模板 */
    const TEMPLATE_SEND			  = 'https://api.weixin.qq.com/cgi-bin/message/template/send';
    /* JSAPI_TICKET获取地址 */
    const JSAPI_TICKET_URL        = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket';
    /* 素材管理 */
    const SYNC_NEWS				  = 'https://api.weixin.qq.com/cgi-bin/material/add_news';
    const SYNC_LIST				  = 'https://api.weixin.qq.com/cgi-bin/material/batchget_material';
    /* 统一下单地址 */
    const UNIFIED_ORDER_URL       = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
    /* 订单状态查询 */
    const ORDER_QUERY_URL         = 'https://api.mch.weixin.qq.com/pay/orderquery';
    /* 关闭订单 */
    const CLOSE_ORDER_URL         = 'https://api.mch.weixin.qq.com/pay/closeorder';
    /* 退款地址 需要证书*/
    const PAY_REFUND_ORDER	      = 'https://api.mch.weixin.qq.com/secapi/pay/refund';
    /* 退款查询地址 */
    const REFUND_QUERY_URL        = 'https://api.mch.weixin.qq.com/pay/refundquery';
    /* 下载对账单 */
    const DOWNLOAD_BILL_URL       = 'https://api.mch.weixin.qq.com/pay/downloadbill';
    /* 转换短链接 */
    const GET_SHORT_URL           = 'https://api.mch.weixin.qq.com/tools/shorturl';
    /* 发送红包地址 */
    const SEND_RED = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack';
    const SEND_GROUP_RED = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/sendgroupredpack';
    /* 企业付款  */
    const SEND_MMPAY = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';






}