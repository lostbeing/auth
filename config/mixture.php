<?php
//-----------------------------------服务器配置-------------------------------------------------
define('SERVER_HOST', '');
//-----------------------------------服务器配置-------------------------------------------------

//-----------------------------------UniFi----------------------------------------------------
/* wifi有效时间 */
define('WIFI_EXPIRED_TIME', 60);//分钟
//-----------------------------------UniFi----------------------------------------------------

/* 默认跳转页面 */
define('DEFAULT_URL', 'http://www.ubnt.com.cn');

/* 组合方式 */
define('WEIBO_ENABLE', false);
define('WEIXIN_ENABLE', false);
define('VERIFY_CODE_ENABLE', false);

//-----------------------------------微博------------------------------------------------------
define('WEIBO_AKEY', '');
define('WEIBO_SKEY', '');
define('WEIBO_CALLBACK_URL', '');
define('WEIBO_NAME', '');
define('WEIBO_MESSAGE', '');
define('WEIBO_SEND_ERROR_MESSAGE', '');
define('WEIBO_FOLLOW_ERROR_MESSAGE', '');
//-----------------------------------微博------------------------------------------------------

//-----------------------------------微信------------------------------------------------------
/* 微信 开发者中心->服务器配置 Token值 */
define('WECHAT_TOKEN', '');
/* 是否加密 */
define('WECHAT_ENCODING_ENABLE', false);
/* 加密用的EncodingAESKey */
define('WECHAT_ENCODING_AES_KEY', '');
/* 高级调用功能的app id */
define('WECHAR_APP_ID', '');
/* 高级调用功能的app secret */
define('WECHAT_APP_SECRET', 'eae2b0571bb29aef55691023b7c32df4');

/* 微信消息和欢迎内容 */
define('WEIXIN_AUTH_MESSAGE', '');//当用户发送此内容才能获取返回
define('WEIXIN_WELCOME_MESSAGE', '');//关注后的欢迎内容
//-----------------------------------微信------------------------------------------------------

//-----------------------------------MySQL----------------------------------------------------
/* 配置mysql */
define('DB_HOST', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');//数据库密码
define('DB_DBNAME', '');//数据库库名
define('DB_PORT', '3306');

define('WEIXIN_TABLE', '');//微信表名
//-----------------------------------MySQL----------------------------------------------------

$config = array(
    'host' => DB_HOST,
    'user' => DB_USERNAME,
    'pass' => DB_PASSWORD,
    'name' => DB_DBNAME,
    'port' => DB_PORT,
);
$mysql = new UbntMysql($config);