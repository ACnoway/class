<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
    五班专用公告栏
</title>
<!--icon-->
<link rel="icon" href="/img/myicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
<!--player-->
<link href="./static/KPlayer.css" rel="stylesheet" type="text/css"/>
<script src="./static/KPlayer.js"></script>
<!--jquery-->
<script src="/js/jquery-3.6.0.min.js"></script>
<!--sweetalert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    h1{
        margin-top: 0;
        margin-bottom: 0;
    }
    .bo{
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
        min-height: 100vh;
        background-image: url("https://api.vvhan.com/api/bing?type=sj");
        background-attachment: fixed;
        background-repeat: no-repeat;
        /**/
        background-size: cover;
    }
    .main{
        flex: 0 0 50%;
        padding-right: 10px;
    }
    .side{
        flex: 0 0 13%;
    }
    #ti_title,#no_title{
        border-radius: 10px 10px 0 0;
    }
    #ti_main,#no_main{
        border-radius: 0 0 10px 10px;
    }
    .yiyan-w,.ti-w,.file-w,.notice-w,.player-1-w{
        padding-bottom: 10px;
    }
    .yiyan,.ti,.file,.notice,#player-1{
        box-shadow: 0 5px 10px;
        border-radius: 10px 10px 10px 10px;
    }
    .file{
        background-color: burlywood;
    }
    @media (max-width: 800px) {
        .bo{
            display: list-item;
            min-height: 100vh;
            flex-direction: column;
        }
        .main,.side{
            padding: 0 0 10px 10px;
        }
        .ti-w,
        .file-w,
        .notice-w,
        .player-1-w,
        .hk-w,
        .yiyan-w {
            padding-bottom: 10px;
            padding-right: 10px;
            padding-left: 10px;
            flex: auto;
        }
    }
</style>
<script language="javascript" type="text/javascript">
    function randomNum(minNum,maxNum){ 
        switch(arguments.length){ 
            case 1: 
                return parseInt(Math.random()*minNum+1,10); 
                break; 
            case 2: 
                return parseInt(Math.random()*(maxNum-minNum+1)+minNum,10); 
                break; 
            default: 
                return 0; 
                break; 
        } 
    }
    var x1 = <?php echo "\"" . explode(" ",file_get_contents("ti.txt"))[1] . "\""; ?>;
    var x2 = <?php echo "\"" . explode(" ",file_get_contents("ti.txt"))[2] . "\""; ?>;
    $(function(){
        /*var timu=document.getElementById("ti_ti");
        x1=randomNum(-10,10);
        x2=randomNum(-10,10);
        while(x1==x2){
            x2=randomNum(-10,10);
        }
        var xt1=-1*x1;
        var xt2=-1*x2;
        var b=String(xt1+xt2);
        var c=String(xt1*xt2);
        var all="\$x^2";
        if(b!="0"&&b!="1"&&b!="-1"){
            if(b[0]!='-') b='+'+b;
            all=all+b+'x';
        }
        if(b=="1") all=all+'+'+b+'x';
        if(b=="-1") all=all+b+'x';
        if(c[0]!='-') c='+'+c;
        if(c!="+0") all+=c;
        all+="=0\$";
        timu.innerHTML=all;*/
        let player = new KPlayer({
            container: document.getElementById("player-1"),
            autoplay: true,
            playlist: [
                <?php echo file_get_contents("./static/playlist.txt") ?>
            ],
        });
    });
    function get() {
        var one=jQuery("#xone").val();
        var two=jQuery("#xtwo").val();
        console.info(x1);
        console.info(x2);
        if((one==x1&&two==x2)||(one==x2&&two==x1)){
            swal("恭喜你，答对了！","","success");
        }
        else if((isNaN(parseFloat(one))||isNaN(parseFloat(two)))){
            swal("🙂","别乱搞谢谢","warning");
        }
        else{
            swal("答错了。","再好好算一算吧","error");
        }
    }
    var interval = 1000;
    function ShowCountDown(year,month,day,divname,eve){
        var now = new Date();
        var endDate = new Date(year, month-1, day);
        var leftTime=endDate.getTime()-now.getTime();
        var leftsecond = parseInt(leftTime/1000);
        //var day1=parseInt(leftsecond/(24*60*60*6));
        var day1=Math.floor(leftsecond/(60*60*24));
        var hour=Math.floor((leftsecond-day1*24*60*60)/3600);
        var minute=Math.floor((leftsecond-day1*24*60*60-hour*3600)/60);
        var second=Math.floor(leftsecond-day1*24*60*60-hour*3600-minute*60);
        var cc = document.getElementById(divname);
        cc.innerHTML = "距离"+eve+"还有："+day1+"天"+hour+"小时"+minute+"分"+second+"秒";
    }
    //window.setInterval(function(){ShowCountDown(2022,6,15,'co_hk','会考');}, interval);
    //window.setInterval(function(){ShowCountDown(2022,6,20,'co_qm','期末');}, interval);
</script>
</head>
<body class="bo">
<div class="main">
    <div class="notice-w">
    <div class="notice">
        <div id="no_title" style="background-color: rgb(99, 218, 248);"><h1 style="color: rgb(240,248,255);text-shadow:0 2px 4px #ccc;padding-left: 5px;">公告</h1></div>
        <div id="no_main" style="background-color: aliceblue;padding: 5px 0 5px 0;">
            <ol>
                <li>发型</li>
                <li>家校连心，传统文化的精神力量，这次要重点检查</li>
                <li>不要出市，不要出市，出市没法回学校</li>
                <li><a href="https://www.meipian.cn/c/17965761" target="_blank">美篇</a>和青年大学习</li>
            </ol>
        </div>
    </div>
    </div>
</div>
<div class="side">
    <div class="yiyan-w">
    <div class="yiyan" style="background-color: cornflowerblue;">
        <div id="yiyan_title" style="padding-left: 5px;"><h1>一言</h1></div>
        <div id="yiyan_main" style="padding: 5px 5px 5px 5px;">
            <?php
                $url = "https://api.vvhan.com/api/en?type=sj";
                $json=file_get_contents($url);
                $data=json_decode($json,true);
                echo $data["data"]["zh"];
                echo "<br />";
                echo $data["data"]["en"];
            ?>
        </div>
    </div>
    </div>
    <div class="ti-w">
    <div class="ti">
        <div id="ti_title" style="background-color: rgb(233, 192, 139);">
            <h1 style="color: azure;text-shadow:0 2px 4px #ccc;padding-left: 5px;">一题</h1>
        </div>
        <div id="ti_main" style="background-color: cornsilk;text-align: center;">
            <div id="ti_ti">
                <?php
                    $ti_data=explode(" ",file_get_contents("ti.txt"));
                    $ti=$ti_data[0];
                    echo $ti;
                    $x1=$ti_data[1];
                    $x2=$ti_data[2];
                ?>
            </div>
            $x_1=$ <input id="xone" type="text" placeholder="保证有两个不同的解"><br />
            $x_2=$ <input id="xtwo" type="text" placeholder="保证有两个不同的解"><br />
            <button id="sub" type="submit" onclick="get()">提交</button>
        </div>
    </div>
    </div>
    <div class="file-w">
    <div class="file">
        <a href="/class/files/"><h1 style="padding-left: 5px;">学习资源</h1></a><br />
        <a href="http://www.dzkbw.com/"><h1 style="padding-left: 5px;">电子课本</h1></a>
    </div>
    </div>
    <div class="player-1-w">
        <div id="player-1"></div>
    </div>
</div>
</body>
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      extensions: ["tex2jax.js"],
      jax: ["input/TeX", "output/HTML-CSS"],
      tex2jax: {
        inlineMath:  [ ["$", "$"] ],
        displayMath: [ ["$$","$$"] ],
        processEscapes: true
      },
      "HTML-CSS": { availableFonts: ["TeX"] }
    });
</script>
<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
</html>