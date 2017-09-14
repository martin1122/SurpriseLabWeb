<!DOCTYPE html>
<head>
    <title>
        Table For One
    </title>
    @include('TFO.front._head')
</head>
<body>
    <div class="wrapper" id="red-theme" key="1">    
        @include('TFO.front._logo')
        
        <div class="main-box">
            @include('TFO.front._nav')
            <div class="content-box align-left">
                <div>
                    <h1>
                        聯絡我們
                    </h1>
                    <div class="contact-box">
                        <div class="left-block">
                            <h3>
                                營業時間 | Opening Hours
                            </h3>
                            <p>                            
                                週一至週日 Monday - Sunday <br>    
                                午餐時段 12:00-14:30 | Lunch 12:00-14:30 <br>
                                晚餐時段 17:30-22:30 | Dinner 17:30-22:30
                            </p>
                        </div>
                        <div class="right-block">
                            <h3>
                                聯絡信箱｜E-mail
                            </h3>
                            <p>
                                <a href="mailto:service@surpriselab.com.tw">service@surpriselab.com.tw</a>
                            </p>
                            <h3>
                                地址 | Address
                            </h3>
                            <p>
                                台北市松山區健康路九號一樓 (小巨蛋五號出口) <br>
                                1F., No.9, Jiankang Rd., Songshan Dist., Taipei City 105, Taiwan (Taipei Arena Station Exit 5)
                            </p>
                        </div>
                    </div>
                    <iframe style="margin: 25px auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.4406402568975!2d121.5502796150332!3d25.053050083963473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abe90a7c0da7%3A0xb07ad0523bf6a9ca!2zMTA15Y-w5YyX5biC5p2-5bGx5Y2A5YGl5bq36LevOeiZnw!5e0!3m2!1szh-TW!2stw!4v1504925248137" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <h3>
                        停車資訊 | Parking Info
                    </h3>
                    <p>
                        A: 敦北停車場 | 台北市松山區南京東路四段53巷3弄12號 <br>
                        B: NaviPark小巨蛋停車場 | 台北市松山區南京東路四段13巷 <br>
                        C: 龍城市場停車場 | 台北市松山區光復北路190巷39號 <br>
                        D: 臺北小巨蛋 | 台北市松山區南京東路四段2號
                    </p>
                    <hr>
                    <h1>
                        有話想說？
                    </h1>
                    <form action="/TableForOne/frontcontactstore" method="post" id="contentForm">
                    {!! csrf_field() !!}
                    <table class="reservation-table contact-table">
                        <tr>
                            <td>
                                ＊你的名字
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="name" required>
                                <span class="alerter"><i class="fa fa-exclamation-triangle "></i> 請填入姓名</span>
                            </td>
                        </tr>
                        <tr>
                            <td>＊電子信箱</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="email" required>
                                <span class="alerter"><i class="fa fa-exclamation-triangle "></i> 請填入E-mail</span>
                            </td>
                        </tr>
                        <tr>
                            <td>聯絡電話</td>
                        </tr>
                        <tr>
                            <td class="">
                                <input type="text" name="tel">
                            </td>
                        </tr>
                        <tr>
                            <td>*你的問題</td>
                        </tr>
                        <tr>
                            <td> 
                                <textarea name="notes" cols="30" rows="10" placeholder="" required></textarea>
                                <span class="alerter"><i class="fa fa-exclamation-triangle "></i> 請填入問題</span>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <div class="btn-box mg-b-md align-left">
                        <a href="javascript:;" id="contentBtn">
                            <div style="margin-top: 15px" class="standard-btn btn">
                                送出
                            </div>    
                        </a>
                    </div>
                </div>
           
                <span class="copyright align-center">
                    copyright © 2017 驚喜製造
                </span>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
$(function(){
    $('#contentBtn').bind('click',function(){
        var isSend = true;
        if($('input[name="name"]').val() == ''){
            $('input[name="name"]').parent().addClass('error');
            isSend = false;
        } else{
            $('input[name="name"]').parent().removeClass('error');            
        }

        if(!validateEmail($('input[name="email"]').val())){
            $('input[name="email"]').parent().addClass('error');
            isSend = false;
        } else{
            $('input[name="email"]').parent().removeClass('error');            
        }

        if($('textarea[name="notes"]').val() == ''){
            $('textarea[name="notes"]').parent().addClass('error');
            isSend = false;
        } else{
            $('textarea[name="notes"]').parent().removeClass('error');            
        }

        if(isSend){
            $('#contentForm').submit();
        }
    });
});
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
</script>
</html>