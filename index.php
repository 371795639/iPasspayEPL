<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>支付接口测试页</title>
</head>
<body>
	 <form action="pay_submit.php" method="post">
	 	<input type="hidden" value="pay" name="temp">
	 	<table>
	 		<caption>普通支付</caption>
	 		<tr>
	 			<td>报送类型</td>
	 			<td><input type="text" name="submissionType" value="00"></td>
	 		</tr>
	 		<tr>
	 			<td>支付币种</td>
	 			<td><input type="text" name="currencyType" value="RMB"></td>
	 		</tr>
	 		<tr>
	 			<td>支付金额</td>
	 			<td><input type="text" name="amount" value="0.05"></td>
	 		</tr>
	 		<tr>
	 			<td>商品备注</td>
	 			<td><input type="text" name="remark" value="测试商品" /></td>
	 		</tr>
	 		<tr>
	 			<td>&nbsp;</td>
	 			<td><input type="submit" value="提交" /></td>
	 		</tr>
	 	</table>
	 </form>
	 <hr>
	 <form action="pay_submit.php" method="post">
	 	<table>
	 		<caption>海关电子支付</caption>
	 		<tr>
	 			<td>报送类型</td>
	 			<td><input type="text" name="submissionType" value="01"></td>
	 		</tr>
	 		<tr>
	 			<td>支付币种</td>
	 			<td><input type="text" name="currencyType" value="RMB"></td>
	 		</tr>
	 		<tr>
	 			<td>支付金额</td>
	 			<td><input type="text" name="amount" value="0.05"></td>
	 		</tr>
	 		<tr>
	 			<td>商品备注</td>
	 			<td><input type="text" name="remark" value="测试商品" /></td>
	 		</tr>
	 		<tr>
	 			<td>支付货款</td>
	 			<td><input type="text" name="goodsAmount" value="0.01"></td>
	 		</tr>
	 		<tr>
	 			<td>支付货款货币代码</td>
	 			<td><input type="text" name="goodsAmountCurr" value="RMB"></td>
	 		</tr>
	 		<tr>
	 			<td>支付税款</td>
	 			<td><input type="text" name="taxAmount" value="0.01"></td>
	 		</tr>
	 		<tr>
	 			<td>支付税款货币代码</td>
	 			<td><input type="text" name="taxAmountCurr" value="RMB"></td>
	 		</tr>
	 		<tr>
	 			<td>支付运费</td>
	 			<td><input type="text" name="freight" value="0.01"></td>
	 		</tr>
	 		<tr>
	 			<td>支付运费货币代码</td>
	 			<td><input type="text" name="freightCurr" value="RMB"></td>
	 		</tr>
	 		<tr>
	 			<td colspan="2">用户信息</td>
	 		</tr>
	 		<tr>
	 			<td>银行账号</td>
	 			<td><input type="text" name="bankAccount" value="6223236500025445"></td>
	 		</tr>
	 		<tr>
	 			<td>银行账号类型</td>
	 			<td><input type="text" name="bankAccType" value="00"></td>
	 		</tr>
	 		<tr>
	 			<td>用户ID或会员ID</td>
	 			<td><input type="text" name="userId" value="36090"></td>
	 		</tr>
	 		<tr>
	 			<td>用户姓名</td>
	 			<td><input type="text" name="userName" value="测试"></td>
	 		</tr>
	 		<tr>
	 			<td>用户证件类型</td>
	 			<td><input type="text" name="userCertType" value="00"></td>
	 		</tr>
	 		<tr>
	 			<td>用户证件号码</td>
	 			<td><input type="text" name="userCertNo" value="413029197210284229"></td>
	 		</tr>
	 		<tr>
	 			<td>用户手机号码</td>
	 			<td><input type="text" name="userMobile" value="15089654256"></td>
	 		</tr>
	 		<tr>
	 			<td>&nbsp;</td>
	 			<td><input type="submit" value="提交" /></td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>