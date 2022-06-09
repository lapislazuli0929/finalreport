
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
    background-color:#2d5363;
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
    font-size:22px;
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
    height:2600px;
}
/* --Content 元素-- */
div.content h1{
    font-size:20px;
    /* color:#2d5363; */
    /* font-weight:normal; */
    letter-spacing:1px;
    margin:10px 0px 0px 0px;
    padding:3px 10px;
    background-color:#e2e5e7;
    text-shadow:0px 0px 0px #e2e5e7;
}
div.content h1 strong{
    font-size:12px;
    color:#fff;
    background-color:#2d5363;
    margin:-10px 0px 0px 0px;
    padding:2px 10px;
    float:right;
    border-radius:5px;
}
div.box-c{
    font-size:20px;
    line-height:60px;
    color:#2aa83b;
    background-color:#cacbd0;
    width:90px;
    height:60px;
    margin:0 auto;padding:0px 0px 0px 0px;
    text-align:center;
    border-radius:3px;
}
/* --Navigation-- */
div.leftNav{
    width:200px;
    max-width:36%;
    height: 900px;
    margin:-20px 20px 0px 10px;
    padding:20px 30px;
    border:1px solid #c8cfe1;
    background-color:#fff;
    float:left;
}

/* drinkbox */
div.drinkBox{
    margin:15px 10px;
    border-style:outset;
    border-color:#000;
    border-width:3px;
    padding:5px;
    border-radius:3px;
    width:300px;
    height:350px;
    display: inline-block;
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
    background-color:#2d5363;

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
    setcookie("check",'false');
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        if($cookieID=='0970768325'){
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
            echo '<a href="index.php" style=color:#fff><span>甜資資飲料</span></a>';
            echo "<div align='right'>";
            echo "<span>歡迎管理員 $cookieID</span>";
            echo '<a href="logout.php"><font color="white">登出       </font></a>';
            echo "<a href='adminControl.php'><font color='red'>進入管理員控制室</font></a>";
            echo "</div>";
        }
        else{
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
                echo '<a href="logout.php"><font color="white"> 登出</font></a>';
                echo "</div>";
            }
        }
    }
        else{
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
   
   <a href='tea.php'><b><font size="4">茶類</font></b></a>   <br />
      <a href='buyDrink/blacktea.php'><font size="2">精選紅茶</font></a>   <br />
      <a href='buyDrink/bluetea.php'><font size="2">精選青茶</font></a>   <br />
      <a href='buyDrink/greentea.php'><font size="2">精選綠茶</font></a>   <br />
      <a href='buyDrink/oltea.php'><font size="2">精選高山烏龍茶</font></a>   <br />
      <a href='buyDrink/milktea.php'><font size="2">精選奶茶</font></a>   <br /><br />
   <a href='special.php'><b><font size="4">特調</font></b></a>   <br />
      <a href='buyDrink/aht.php'><font size="2">阿華田脆酷繽紛樂</font></a>   <br />
      <a href='buyDrink/star.php'><font size="2">夜空中最亮的星</font></a>   <br />
      <a href='buyDrink/summer.php'><font size="2">暑假酷心涼</font></a>   <br />
      <a href='buyDrink/pink.php'><font size="2">粉色奇蹟</font></a>   <br />
      <a href='buyDrink/lemon.php'><font size="2">不要以為只是雪碧加檸檬</font></a>   <br /><br />
   <a href='fruit.php'><b><font size="4">水果茶</font></b></a>  <br />
      <a href='buyDrink/nf.php'><font size="2">一般的水果茶</font></a>  <br />
      <a href='buyDrink/nnf.php'><font size="2">不一般的水果茶</font></a>  <br /><br />
   <a href='coffee.php'><b><font size="4">咖啡</font></b></a>    <br />
      <a href='buyDrink/Acoffe.php'><font size="2">美式冰咖啡</font></a>   <br />
      <a href='buyDrink/cb.php'><font size="2">冰DER卡布奇諾</font></a>  <br />
      <a href='buyDrink/nt.php'><font size="2">冰DER拿鐵</font></a>  <br />
      <a href='buyDrink/mjd.php'><font size="2">焦糖瑪奇朵</font></a>  <br /><br />
   <a href='ice.php'><b><font size="4">冰沙</font></b></a>    <br />
      <a href='buyDrink/mango.php'><font size="2">透心涼芒果冰沙</font></a>  <br />
      <a href='buyDrink/fire.php'><font size="2">透心涼火龍果加上芒果冰沙</font></a>  <br />
      <a href='buyDrink/barry.php'><font size="2">透心涼草莓冰沙</font></a>  <br />
      <a href='buyDrink/melon.php'><font size="2">透心涼哈蜜瓜冰沙</font></a>  <br />
      <a href='buyDrink/choco.php'><font size="2">透心涼巧克力佐奶油冰沙</font></a>  <br />
            <br />
            <br />
            <br />
	</div>
	<!--[Element Center Layout]-->
	<div class="content">
    <span><h1><a href='index.php'>瀏覽飲料 </a><a href='makeDrink.php'>客製化製作 </a><a href='QA.php'>常見問題</a></h1></span>
		<div class=>

       </div>

       <div class="drinkBox">
       <a href='buyDrink/milktea.php'><img src='商品圖/茶/milktea.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>精選奶茶 $40</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/oltea.php'><img src='商品圖/茶/800x.png' height="350px" width="300px"></img></a>
       <center>
       <span><h1>精選高山烏龍茶 $40</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/blacktea.php'><img src='商品圖/茶/20211001142841860.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>精選紅茶 $40</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/greentea.php'><img src='商品圖/茶/冰無糖茉莉綠茶(小)-pc.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>精選綠茶 $40</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/bluetea.php'><img src='商品圖/茶/高山揉心青茶-1.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>精選青茶 $40</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/lemon.php'><img src='商品圖/特條/6038b2b23e186364.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>不只是雪碧加檸檬 $80</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/pink.php'><img src='商品圖/特條/BD0400_P_03_02.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>粉色奇蹟 $80</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/aht.php'><img src='商品圖/特條/Hot_UOvaltine-Bubble-Latte_Limbo_500x500H.png' height="350px" width="300px"></img></a>
       <center>
       <span><h1>阿華田脆酷繽紛樂 $80</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/summer.php'><img src='商品圖/特條/蜂蜜檸檬特調酒-食譜成品照片.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>暑假酷心涼 $80</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/star.php'><img src='商品圖/特條/蜂蜜檸檬特調飲品-食譜成品照片.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>夜空中最亮的星 $80</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/nf.php'><img src='商品圖/水果茶/162290451665454_P4578743.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>一般的水果茶 $50</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/nnf.php'><img src='商品圖/水果茶/EF2E2799-8B57-4093-9B01-1DEFE070A8C4.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>不一般的水果茶 $100</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/Acoffee.php'><img src='商品圖/咖啡/w644.jfif' height="350px" width="300px"></img></a>
       <center>
       <span><h1>美式冰咖啡 $70</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/cb.php'><img src='商品圖/咖啡/whk13-046b.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>冰DER卡布奇諾 $90</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/mjd.php'><img src='商品圖/咖啡/下載 (1).jfif' height="350px" width="300px"></img></a>
       <center>
       <span><h1>焦糖瑪奇朵 $120</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/nt.php'><img src='商品圖/咖啡/下載.jfif' height="350px" width="300px"></img></a>
       <center>
       <span><h1>冰DER拿鐵 $90</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/fire.php'><img src='商品圖/冰沙/08 Dragon Fruit Mango Smoothie.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>透心涼火芒果冰沙 $110</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/barry.php'><img src='商品圖/冰沙/bk213-039.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>透心涼草莓冰沙 $110</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/mengo.php'><img src='商品圖/冰沙/hq08-015.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>透心涼芒果冰沙 $110</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/melon.php'><img src='商品圖/冰沙/whk109-081a.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>透心涼哈蜜瓜冰沙 $110</h1></span>
        </center>
        </div>
        <div class="drinkBox">
       <a href='buyDrink/choco.php'><img src='商品圖/冰沙/巧克力碎片冰沙-合成圖.jpg' height="350px" width="300px"></img></a>
       <center>
       <span><h1>透心涼巧克力佐奶油冰沙 $110</h1></span>
        </center>
        </div>
        
		<!--[Element Center Layout]-->
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