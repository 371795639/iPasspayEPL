<?php

class SysConfig{
	//商户号
	const PARTNER = '130';//EC180226YL001
	//商户密钥
	const KEY = '857e6g8y51b5k365f7v954s50u24h14w';
	//支付请求网关访问地址
	const PAY_URL = 'http://14.23.90.101:180/paycenter/v2.0/getoi.do';//https://www.epaylinks.cn/paycenter/v2.0/getoi.do
	//订单请求类网关访问地址
	const ORDER_URL = 'https://14.23.90.100:443/paycenter/gateways.do';//https://www.epaylinks.cn/paycenter/gateways.do
	//本地字符编码
	const ENCODING = 'UTF-8';
	//版本号
	const VERSION = "4.0";
	//加密类型
	const SIGN_TYPE = "SHA256withRSA";
	//密钥地址
	//const PFX_PATH = "/Applications/MAMP/htdocs/coding/iPasspayEPL/certs/yzt.pfx";
    const PFX_PATH = "/home/janhao3/ipasspay.xyz/iPasspayEPL/certs/yzt.pfx";
    //keystore密码
	const KEYSTORE_PASSWORD="yzt20160728";// afonso123
	//私钥密码
	const PRIVATEKEY_PASSWORD="yzt20160728";// afonso123
	//公钥地址
	//const CER_PATH = "/Applications/MAMP/htdocs/coding/iPasspayEPL/certs/epaylinks_pfx.cer";
    const CER_PATH = "/home/janhao3/ipasspay.xyz/iPasspayEPL/certs/epaylinks_pfx.cer";
    //页面跳转即时通知地址
    const RETURN_URL = "http://www.ipasspay.xyz/iPasspayEPL/response/pay_response.php"; //需要修改
    //异步通知地址（notify_url）
    const NOTIFY_URL = "http://www.ipasspay.xyz/iPasspayEPL/response/notify_pay_response.php"; //需要修改


    const CURL_PROXY_HOST = "0.0.0.0";//"10.152.18.220";
	const CURL_PROXY_PORT = 0;//8080;
	
}

?>
