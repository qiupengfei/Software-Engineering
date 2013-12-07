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
		height: 500px;
		border-radius: 5px;
		margin-top: 0;
		margin-right: 5%;
		margin-bottom: 1px;
		margin-left: 5%;
		background-color: #39F;     
	}
	.first
	{
		width: 60%;
		height:250px;
		border-radius: 0;
		margin-top: 15%;
		margin-right: 20%;
		margin-bottom: 20%;
		margin-left: 15%;
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
        position: absolute;
        background-image: url(http://1.seekatruth.sinaapp.com/application/views/image/0b55b319ebc4b74552e36e24cffc1e178a821588.jpg);
	}
	
	.form1
	{
        width: 70%;
        border-radius: 5px;
		margin-top: 10%;
		margin-right: 15%;
		margin-bottom: 20%;
        margin-left: 15%;
        position: absolute;
        height:60%;
        background-color: #0CF;
	}
</style>
</head>
<body>
<div class="main">
		<div class="first">
            	<div class = "form1">
                	<div align="center">
                        <?php if($user[0]->truthdaren==0)
                        { ?>
                            <form id="form1" name="form1" method="post" action="">
                                <input type="button"  name="1" id="1" value="您还不是真相达人哦！" />
                            </form>
                        <?php } ?>    
                    
                        <?php if($user[0]->truthdaren!=0)
                        { ?>
                            <form id="form1" name="form1" method="post" action="">
                                <input type="button" name="1" id="1" value="恭您您成为真相达人！" />
                            </form>
                        <?php } ?>  
                        
                        <?php if($user[0]->zydaren==0)
                        { ?>
                        	 <form id="form1" name="form1" method="post" action="">
                                <input type="button" name="1" id="1" value="您还不是造谣达人哦！" />
                            </form>
                        <?php } ?>    
                        
                        <?php if($user[0]->zydaren!=0)
                        { ?>
                            <form id="form1" name="form1" method="post" action="">
                                <input type="button" name="1" id="1" value="恭喜您成为造谣达人！" />
                            </form>
                        <?php } ?>   
                            
                        <?php if($user[0]->bldaren==0)
                        { ?>
                        	 <form id="form1" name="form1" method="post" action="">
                                <input type="button" name="1" id="1" value="您还不是爆料达人哦！" />
                            </form>
                        <?php } ?>   
                        
                        <?php if($user[0]->bldaren!=0)
                        { ?>
                         	 <form id="form1" name="form1" method="post" action="">
                                <input type="button" name="1" id="1" value="恭喜您成为爆料达人！" />
                            </form>
                        <?php } ?>   
					</div>     
    			</div>
          	
		</div>
  
</div>

</body>
</html>