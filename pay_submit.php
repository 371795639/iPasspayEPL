<?php 
ini_set('date.timezone','Asia/Shanghai');
include_once 'request/pay_request.php';
include_once 'common/Tool.php';
include_once 'common/config.php';
require_once 'common/log.php';
require_once 'paycenter_service.php';

//初始化日志
$logHandler= new CLogFileHandler("log/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

Log::INFO("====进入支付====\r\n");
//1、获取商品信息参数----------------------
$currencyType = $_POST["currencyType"];
$totalFee = $_POST["amount"];
$remark = $_POST["remark"];
$temp = $_POST["temp"];
Log::INFO($remark."\r\n");
$remark = iconv(SysConfig::ENCODING,"GBK",$remark);  

//2、生成订单流水号------------------------
//$outTradeNo = getMillisecond();
$outTradeNo = getOrderId();
Log::INFO($outTradeNo."\r\n");
$input = new PayRequest();
$input->setOutTradeNo($outTradeNo);
$input->setTotalFee($totalFee);
$input->setCurrencyType($currencyType);
$input->setReturnUrl("http://www.ipasspay.xyz/iPasspayEPL/response/pay_response.php");
$input->setNotifyUrl("http://www.ipasspay.xyz/iPasspayEPL/response/notify_pay_response.php");
//中文base64编码
$input->setBase64Memo(base64_encode($remark));
Log::INFO($input->getBase64Memo()."\r\n");
//3、封装请求参数
$submissionType = $_POST["submissionType"];
$input->setSubmissionType($submissionType);
if($submissionType == "01"){//网关支付
	$input->setGoodsAmount($_POST["goodsAmount"]);
	$input->setGoodsAmountCurr($_POST["goodsAmountCurr"]);
	$input->setTaxAmount($_POST["taxAmount"]);
	$input->setTaxAmountCurr($_POST["taxAmountCurr"]);
	$input->setFreight($_POST["freight"]);
	$input->setFreightCurr($_POST["freightCurr"]);
	$bank_account = $_POST["bankAccount"];
	$bank_acc_type = $_POST["bankAccType"];
	$user_id = $_POST["userId"];
	$user_name = $_POST["userName"];
	$user_cert_type = $_POST["userCertType"];
	$user_cert_no = $_POST["userCertNo"];
	$user_mobile = $_POST["userMobile"];
	$userInfo = "bank_account=".$bank_account."&bank_acc_type=".$bank_acc_type."&user_id=".$user_id
		."&user_name=".$user_name."&user_cert_type=".$user_cert_type."&user_cert_no=".$user_cert_no."&user_mobile=".$user_mobile;//这里根据接口文档拼接参数base64_user_info
	$input->setBase64UserInfo(base64_encode($userInfo));
}
Log::INFO($input->getBase64Memo()."\r\n");
$pcs = new PayCenterService();
$pcs->sendPayRequest($input);

?>

