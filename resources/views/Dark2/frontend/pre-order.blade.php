<!DOCTYPE html>
<head>
    @include('Dark2.frontend._header')
</head>
<body>
    <div class="wrap">
       
        <!-- mobile menu -->
        @include('Dark2.frontend._menu',['key'=>'pre-order'])
     
      
        <!-- header -->
        
        <div class="header-contaier clearfix">
            @include('Dark2.frontend._m_menu',['key'=>'pre-order'])
        </div>
       
        <!-- landing cut -->
        <!-- first cut -->
        
        <div class="section-02">
            <div class="main-container">
                <div class="main-box">
                    <!--h1>無光晚餐第二季 第二階段預售計畫 於 7/23 啟動</h1>
                    <div class="presale-logo-box">
                        <img src="/dark2/images/Pre-sale/Logo.png" alt="">
                        <img src="/dark2/images/Pre-sale/Seasontwo_small.png" alt="">    
                    </div>
                    <h1>
                        限定快閃 預售套票
                    </h1-->
                    <h1>無光晚餐第二階段預售套票</h1>
                    <p style="margin-top: 25px;" class="strong-words">
                        無光晚餐07/04-09/16之座位，已於第一階段預售全數劃位完畢<br >
第二階段預售將劃 09/22-11/04 之座位
                    </p>
                    <p>
                        【 無光體驗 】<br><br>
                        五道料理<br>
                        +<br>
                        餐後小禮<br>
                        + <br>九十分鐘各式無光驚喜<br><br>
                        【 預售優惠 】<br><br> 1650元 / 每人<br>(原價2200元)<br>以上價格已含一成服務費<br>
                        <!--span class="strong-words">
                            【 預售優惠 】<br><br> 1650元 / 每人
                        </span-->
                    </p>
                    <p style="margin-top: 25px;" class="strong-words">
                        購買預售，享最低75折至最高67折之優惠<br />
前500名預購者，享優先劃位權
                    </p>
                </div>
            </div>
            <div class="season-two-about pre-order-section">
                <p>
                    請點選商品前往付款 ⬇
                </p>
                <div class="pre-order-box">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://surpriselab.backme.tw/checkout/855/4615?locale=zh-TW">
                                <div>
                                    <img src="/dark2/images/Pre-sale/Button_4.png" alt="">    
                                </div>
                            </a>
                            <p></p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://surpriselab.backme.tw/checkout/855/4617?locale=zh-TW">
                                <div>
                                    <img src="/dark2/images/Pre-sale/Button_1.png" alt="">  
                                    <div class="limit">
                                        <img src="/dark2/images/Pre-sale/Limited.png" alt="">
                                    </div>  
                                </div>
                            </a>
                            <p>
                                剩餘 <span id="count_4617"></span> 份
                            </p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://surpriselab.backme.tw/checkout/855/4616?locale=zh-TW">
                                <div>
                                    <img src="/dark2/images/Pre-sale/Button_5.png" alt="">    
                                </div>
                            </a>
                            <p></p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://surpriselab.backme.tw/checkout/855/4618?locale=zh-TW">
                                <div>
                                    <img src="/dark2/images/Pre-sale/Button_2.png" alt="">    
                                    <div class="limit">
                                        <img src="/dark2/images/Pre-sale/Limited.png" alt="">
                                    </div>  
                                </div>
                            </a>

                            <p>
                                剩餘 <span id="count_4618"></span> 份
                            </p>
                        </div>
                        <div class="col-md-6">
                            <a href="https://surpriselab.backme.tw/checkout/855/4619?locale=zh-TW">
                                <div>
                                    <img src="/dark2/images/Pre-sale/Button_3.png" alt="">    
                                    <div class="limit">
                                        <img src="/dark2/images/Pre-sale/Limited.png" alt="">
                                    </div>  
                                </div>
                            </a>
                            <p>
                                剩餘 <span id="count_4619"></span> 份
                            </p>
                        </div>
                        
                        
                    </div>    
                </div>
                <p>
                    *以上套票價格均已含一成服務費<br>
                    <!--span class="strong-words">*預售票價可享75折，最高67折優惠</span><br-->
                    *預計第二階段日期為 09/22-11/04<br>
                </p>
            </div>
        </div>   
        @include('Dark2.frontend._footer')
    </div>
<script type="text/javascript">
    
$(function(){
    $.get('https://surpriselab.backme.tw/api/projects/855.json?token=15171aa66ababafd4464a1c194b66102',function(data){
        var item = data.rewards;
        for(var i=0;item.length>i;i++){
            var count = parseInt(item[i].quantity_limit) - parseInt(item[i].pledged_count) - parseInt(item[i].wait_pledged_count);
            $('#count_'+item[i].id).text(count);
        }

    },'json');
});

</script>
</body>
</html>
