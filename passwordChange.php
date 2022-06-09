<html lang="zh-TW">
<head>
<title>FinalReport</title>
<style type="text/css">
html{
    height:100%;
}
* html body{
    height:100%;
}
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    min-height:100%;
    position:relative;
}
div a{
    text-decoration:none;
    color:#000000;
}

div.topNav{
    color:#fff;
    padding:5px 0px 5px 20px;
    background-color:#4d5363;
}
div.topNav span{
    padding:0px 20px;
    #e3e6e9
}
div.topNav span.home{
    font-size:11px;
    color:#c3c6c9;
    float:right;
}
div.header{
    color:#fff;
    font-size:24px;
    text-align:center;
    padding:5px 0px 0px 0px;
    background-color:#a6a9b1;
    background-image:url('image/首頁.jfif');
    height:160px;
}
/* --Wrapper-- */
/*div.wrapper{
    padding-bottom:80px;
    margin-bottom: 0 5px; 
}*/
div.content{
    margin:15px 0px 0px 60px;
    padding:5px 10px;
    border:1px solid #c8cfe1;
    overflow:hidden;
}
/* --Content 元素-- */
div.content h1{
    font-size:20px;
    /* color:#4d5363; */
    /* font-weight:normal; */
    letter-spacing:1px;
    margin:10px 0px 0px 0px;
    padding:3px 10px;
    background-color:#e4e5e7;
    text-shadow:0px 0px 0px #e4e5e7;
}
div.content h1 strong{
    font-size:12px;
    color:#fff;
    background-color:#4d5363;
    margin:-10px 0px 0px 0px;
    padding:4px 10px;
    float:right;
    border-radius:5px;
}
div.box-c{
    font-size:20px;
    line-height:60px;
    color:#4aa83b;
    background-color:#cacbd0;
    width:90px;
    height:90%;
    margin:0 auto;padding:0px 0px 0px 0px;
    text-align:center;
    border-radius:3px;
}

/* --Navigation-- */
div.leftNav{
    width:200px;
    max-width:36%;
    height: 900px;
    margin:-40px 20px 0px 10px;
    padding:20px 30px;
    border:1px solid #c8cfe1;
    background-color:#fff;
    float:left;
}
/* --Footer-- */
div.footer{
    clear:both;
    width:100%;
    position:absolute;
    bottom:0;
    height:80px;
    color:#fff;
    padding:20px 0px 0px 0px;
    text-align:center;
    background-color:#4d5363;

}
div.wrapper {
  min-height: 100%; /*外層高度100%*/
  margin-bottom: -50px; /*隨footer高度需做調整*/
}
div.footer b{font-weight:normal;font-size:13px;color:#a3a6a9;}
</style>
</head>
<body>
<div class="topNav">
	<span><img src='images.png' height="30px" width="30px" ></span>
    <?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        // 網頁編碼宣告
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
        echo '<a href="index.php" style=color:#fff><span>甜資資飲料</span></a>';
        echo "<div align='right'>";
        echo "<a href='checkout.php' style=color:#fff><img src='checkout.png' height='15px' width='15px'></a>";
                echo "<a href='checkout.php' style=color:#fff>購物車</a>";
	    echo "<span>歡迎用戶 $cookieID</span>";
        
        echo "<a href='userManage.php' style=color:#fff>用戶管理 </a>";
        echo '<a href="logout.php"><font color="white">登出</font></a>';
        echo "</div>";
    }else{
        // 網頁編碼宣告
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
        echo '<a href="index.php" style=color:#fff><span>甜資資飲料</span></a>';
	    echo '<a href="login.php"><span class="home">登入</span></a>';
        echo '<a href="register.php"><span class="home">註冊</span></a>';
    }
    ?>
</div>
<div class="header">
	 </div>
<div class="wrapper">
	<div class="leftNav">
    <a href='userManage.php'>修改密碼</a> <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
	</div>
	<!--[Element Center Layout]-->
	<div class="content">
    <span><h1><a href='userManage.php'>編輯用戶資訊 </a></h1></span>
		<br />
		<div class=>
        <form action="updateconfirm.php" method="post" enctype="multipart/form-data">
            電話:<input type="text" name="userphone" required></br>
            新密碼：<input type="password" name="upsw" placeholder="" required></br>
            <input type="submit" value="修改">
        </form>
      
        
</div>
		<!--[Element Center Layout]--><br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	</div>
</div>
<div class="wrapper">
    <div class="footer" style = bottom: 0>
    甜資資飲料<br />
	    <a href='index.php'><b>回到首頁
        </b></a><br />
        <a href="#top">回頂端</a>
    </div>
</div>
</body>
</html>