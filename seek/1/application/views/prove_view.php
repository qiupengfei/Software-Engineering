﻿<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
<?=anchor('', 'HOME')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		background-image: url(original_jelS_0d0800036c7c1190.jpg);
	}
	.first
	{
		width: 98%;
		height: 200px;
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
	width: 28%;
	float: left;
	height:98%;
	background-color: #0CF;
	}
	.form3
	{
		width: 72%;
		float: right;
		height:98%;
		background-color: #39C;
	}
</style>
</head>
<body>


<?php foreach( $sb as $item ): ?>
    <?php
                                $x= $c->show_status($item->weiboid);
                                $arr=array('uid'=>$uid,'id'=>$item->weiboid);
   ?>
<div class="main">
	<div class="first">
		<div align="center">
            	<div class = "form2">
                    <p><img src="<?=$x['user']['avatar_large'];?>" alt="" name="yonghutouxiang" width="125" height="125" id="yonghutouxiang" />
					</p>
					<p>
						<a  href="<?=$x['user']['url']; ?>"><?=$x['user']['id']; ?><br><?=$x['user']['name']; ?></a>
					</p>
				</div>
				<div class="form3">
            		
                        <div align="center">  
         					<textarea name="显示要提交的微博内容" cols="64" rows="11" readonly="readonly" id="weiboinfo1"><?=$x['text'];?>
                            	</textarea>
                            <?=form_open('evidence_controller/add','',$arr)?>
                            <?=form_submit('submit1', '真')?>
                            <?=form_open('evidence_controller/add2','',$arr)?>
                            <?=form_submit('submit2', '假')?>
						</div>
                    
    			</div>
		</div>
    </div>
    </div>
    
    <?php endforeach; ?>

</body>
</html>