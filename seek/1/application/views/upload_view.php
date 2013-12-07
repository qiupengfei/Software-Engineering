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
		background-color: #0099FF;
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
<div class="main">
    <div class="first">
 	  	<div align="center">
            <div class = "form2">

            </div>
            <div class="form3">
             	<form action="" method="get" enctype="multipart/form-data" name="要提交证据的微博显示框" id="form1">
					<div align="center">  
                		<textarea name="要提交证据的微博信息" cols="64" rows="12" readonly="readonly" id="weiboinfofortruth"></textarea>
              		</div>
       	  		</form>
  			</div>
  		</div>
    </div>
  	<div align="center">
   	  <p>你的理由    	</p>
   	  <form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
   	      <label for="文字证据">
   	        <div align="center">文字证据：
            </div>
          </label>
          <div align="center">
            <textarea name="文字证据" id="文字证据" cols="45" rows="5"></textarea>
          </div>
   	    <p align="center">
   	      <label for="图片">图片证据：</label>
   	      <input type="file" name="图片" id="图片" />
   	    </p>
   	    <p align="center">
   	      <label for="视频">视频证据：</label>
   	      <input type="file" name="视频" id="视频" />
   	    </p>
   	  </form>
       <div align="center"></div>
           <p align="center">
               <?=form_open('evidence_controller/end')?>
               <input type="submit" name="提交" id="tijiao" value="提交" />
           </p>
       </div>
    </div>

</body>
</html>
