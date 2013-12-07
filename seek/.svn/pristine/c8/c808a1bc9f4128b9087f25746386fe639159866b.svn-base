<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		session_start();

		include_once( 'config.php' );
		include_once( 'saetv2.ex.class.php' );

//从POST过来的signed_request中提取oauth2信息
		if(!empty($_REQUEST["signed_request"]))
		{
			$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY  );
			$data=$o->parseSignedRequest($_REQUEST["signed_request"]);
			if($data=='-2')
			{
				die('签名错误!');
			}
			else
			{
				$_SESSION['oauth2']=$data;
			}
		}
//判断用户是否授权
		if (empty($_SESSION['oauth2']["user_id"])) 
		{
			include "auth.php";
			exit;
		} 
		else 
		{
			$c = new SaeTClientV2( WB_AKEY , WB_SKEY ,$_SESSION['oauth2']['oauth_token'] ,'' );
		}		 

		$ms  = $c->home_timeline();
		
		$fq=$c->get_uid();
		$uid= $fq['uid'];
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎到哈工大读研读博，困难不怕，哈工大是家-邱朋飞</title>
<style text="text/css">
	.main
	{
		width: 90%;
		
		border-radius: 5px;
		margin-top: 0;
		margin-right: 5%;
		margin-bottom: 1;
		margin-left: 5%;
		background-color: #CC9900;
        background-image: url(application/views/image/c995d143ad4bd113a96e907b5bafa40f4afb05d3.jpg);
	}
	.first
	{
	width: 98%;
	height:420px;
	border-radius: 0;
	margin-top: 0;
	margin-right: 1%;
	margin-bottom: 0;
	margin-left: 1%;
	background-color: #CCCC99;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #CCC;
	border-left-color: #FFF;
	}

	#form1
	{
		width:98%;
        background-color: #090;
        margin-top: 0;
        margin-right: 1%;
        margin-bottom: 0;
        margin-left: 1%;
	}
	
	.form2
	{
	width: 30%;
	float: left;
	height: 50%;
	background-color: #0CF;
        background-image: url(application/views/image/c995d143ad4bd113a96e907b5bafa40f4afb05d3.jpg);
	}
	.form3
	{
	width: 70%;
	float: right;
	height: 98%;
	background-color: #F9C;
        
	}
	.form4
	{
	width: 98%;
	height: 70px;
	background-color: #09C;
	padding-right: 5%;
	padding-left: 5%;
	border: 1px 1 #F9C;
        background-image: url(application/views/image/c995d143ad4bd113a96e907b5bafa40f4afb05d3.jpg);
	}
</style>

</head>
<body>
<div class="main">
    <div class="first">
	  <div align="center">
			<div class = "form2">
				
			</div>
			<div class="form3">
				<div align="center">  								                           
					<div class="form4">
                        <div align="left">
                            <?=form_open('Dealing_controller/seek')?>
                            <kbd><strong>查看好友的最新微博：</strong></kbd>
							<?=form_submit('submit', '查看')?></form>
                        </div>
                    </div>
                   	<div class="form4">
                       	<div align="left">
                          	<?=form_open('Dealing_controller/prove')?>
                         
                            <kbd><strong>查看寻求证实的微博： </strong></kbd><strong></strong>
                            <select name="type">
                               <option value="joy">娱乐</option>
                               <option value="electric">电子科技</option>
                               <option value="food">美食</option>
                               <option value="clothes">服装</option>
                               <option value="book">图书</option>
                               <option value="pe">体育</option>
                               <option value="study">教育</option>
                               <option value="international">国际</option>
                                    
                            </select><?=form_submit('submit', '提交')?></form>
                       	</div>
              		</div>
                   	<div class="form4">
                     	<div align="left">
                        	<?=form_open('Dealing_controller/prove2')?>
                            <kbd><strong>查看系统推荐的微博：</strong></kbd>
							<?=form_submit('submit', '查看')?></form>
                        </div>
                  </div>
                     <div class="form4">
                        <div align="left">
                          	<?=form_open('Dealing_controller/check')?>
                           	<strong><kbd>查看已经证实的问题：</kbd></strong>
							<?=form_submit('submit', '查看')?></form>
                        </div>
                     </div>
                     	<?php $user1=array('id'=>$uid);?>
                     <div class="form4">
                        <div align="left">
                           	<?=form_open('Dealing_controller/userchenghao','',$user1)?>
                           	<kbd><strong>                           	查看我已获得的称号：</strong></kbd>
							<?=form_submit('submit', '查看')?></form>
                       	</div>
                   	</div>
                   	<div class="form4">
                      	<div align="left">
                         	<?=form_open('Dealing_controller/userxingqu','',$user1)?>
                          	<kbd><strong>我是哪方面的微博控：</strong></kbd>
							<?=form_submit('submit', '查看')?></form>
                        </div>
					</div>
				 </div>
			  </div>	
		</div>
    </div>
</div>
<script src="http://static.acfun.tv/dotnet/20130418/script/json2.js"></script>
</body>
</html>