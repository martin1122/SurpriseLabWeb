<!DOCTYPE html>
<head>
    <title>
        Table For One
    </title>
    @include('TFO.m._head')

</head>

<body>
    <div class="wrapper" id="red-theme" key="1">    
        @include('TFO.front._logo')

        <!--  mobile menu  -->
        <div class="hamburger-box">
            <i class="fa fa-bars"></i>
        </div>

        @include('TFO.front._nav')
            
        <div class="content-box align-left">
            <div>
                <h1>
                    訂位服務
                </h1>
                <h4>
                    營業時間：
                </h4>
                <p>
                    午餐時段 1200-1430 <br>
                    晚餐時段 1730-2230
                </p>
                <p class="little-things mg-b-md">
                    *提供葷食與素食兩種套餐<br>
                    *午餐、晚餐供應相同料理
                </p>
                <h4>
                    價位 & 訂位：
                </h4>
                <p class="mg-b-md">
                    線上訂位 pre-book & 線上預付 pre-pay <br>
                    A: 880元   五道料理：開胃飲、第一前菜、第二前菜、主菜、甜點 <br>
                    B: 1050元 五道料理 (含飲品)：開胃飲、第一前菜、第二前菜、主菜、甜點、佐餐飲
                </p>
                <h4>
                    現場自來客 walk-in customer
                </h4>
                <p>
                    C: 1200元 五道料理 (含飲品)：開胃飲、第一前菜、第二前菜、主菜、甜點、佐餐飲 
                </p>
                <p class="little-things mg-b-md">
                    *B、C套餐之佐餐飲，可任選酒水單上任何飲品乙杯<br>
                    *以上價格均已含服務費<br>
                    *每人用餐時間為90分鐘<br>
                    *為避免臨時到店時無座位，建議線上訂位&線上預付預留座位
                </p>
                <hr>
                <h1>
                    訂位規則 
                </h1>
                <ul class="list">
                    <li>
                        table for ONE 為一人飲食體驗，每次訂位僅供單人訂位。
                    </li>
                    <li>
                        訂位系統上不提供超過一人訂位的選項，但不限定每人在同時段可以訂位的次數與人數上限。
                    </li>
                    <li>
                        座位依現場服務人員指示安排。所有座位將各自獨立，並不提供併桌、多人共桌等服務，敬請見諒。
                    </li>
                    <li>
                        沒有用餐服裝的需求，西裝、套裝、吊嘎、睡衣，以自己最舒服的姿態出現都好。
                    </li>
                    <li>
                        用餐過程中，請開啟飛航模式，限制使用網路與通訊程式。拍照、錄影則不加以限制。
                    </li>
                    <li>
                        為確保最佳的一人體驗，希望來賓以不負面打擾其他客人為用餐原則。
                    </li>
                    <li>
                        現場服務人員有權力柔性勸導、適度制止過於影響他人之來賓。
                    </li>
                    <li>
                        若來賓影響他人情形嚴重，現場服務人員有權力請該來賓離場，且不另外退費。
                    </li>
                    <li>
                        若有活動包場需求、任何特殊訂位服務、天馬行空的奇想，請來信詢問 <a href="mailto:service@surpriselab.com.tw">service@surpriselab.com.tw</a>
                    </li>
                </ul>
                <hr>
                <h1>
                    線上預付、退費、轉讓機制 
                </h1>
                <h3>
                    取消訂位與退費機制
                </h3>
                <ul class="list">
                    <li>
                        在用餐當日三天前，來信或來電取消訂位，扣除金流系統手續費 5% 後，將獲全額退費。 如：若預訂 9/04 的座位，於 9/01 (含) 前寄信或來電取消訂位，可獲全額退費
                    </li>
                    <li>
                        在用餐當日兩天前，來信或來電取消訂位，因廚房已完成備料，扣除金流系統手續費 5% 與廚房備料成本，僅將退回 50% 之費用。建議來賓可以將訂位轉讓給朋友、家人。 如：若預訂 9/04 的座位，於 09/02、09/03 寄信或來電取消訂位，可退回50%之費用
                    </li>
                    <li>
                        用餐當日未出席、也未事先來信或來電取消，將不進行退費。
                    </li>
                    <li>
                        若會遲到請先來電告知，視當日訂位狀況我們會盡力為您調整時間。
                    </li>
                </ul>
                <h3>
                    更改訂位日期
                </h3>
                <ul class="list">
                    <li>
                        若需更改訂位日期，請於用餐日三天前 ，來信或來電告知。 如：欲更改 9/04 的訂位，請於 9/01 (含) 前來信或來電告知，我們將為您調整
                    </li>
                    <li>
                        用餐日兩天前與當日恕不提供日期更改，建議來賓可將訂位轉讓給朋友、家人。
                    </li>
                </ul>
                <table class="rules-table">
                    <tr>
                        <th style="width: 80px">天數</th>
                        <th>…</th>
                        <th>前三日</th>
                        <th>前兩日</th>
                        <th>前一日</th>
                        <th class="theme-alert-bg">訂位日</th>
                    </tr>
                    <tr>
                        <td>日期舉例</td>
                        <td>...</td>
                        <td>9/1</td>
                        <td>9/2</td>
                        <td>9/3</td>
                        <td>9/4</td>
                    </tr>
                    <tr>
                        <th>退費機制</th>
                        <td colspan="2">扣除金流系統手續費5%後，可獲全額退費</td>
                        <td colspan="2">因廚房已完成備料，扣除金流系統手續費5%與備料成本，將退回 50%之費用</td>
                        <td class="theme-alert-bg">Ｘ</td>
                    </tr>
                    <tr>
                        <th>更改定位</th>
                        <td colspan="2">可來信或來電更改日期</td>
                        <td colspan="3">不提供日期更改，建議來賓可將訂位轉讓給朋友、家人</td>
                    </tr>
                </table>
                <h3>
                    座位轉讓
                </h3>
                <p>
                    可自行轉讓座位。若轉讓座位而需更改葷素或有其他飲食習慣，請於用餐日三天前 ，來信或來電告知。
                </p>
                <h3>
                    退費流程
                </h3>
                <p>
                    確認將予以退費後，table for ONE 將於7個工作天內向金融機構提出申請，惟實際退費日期仍須依發卡銀行之規定與合約內容而定。
                </p>
                <h3>
                    不可抗力因素之更改訂位及退費辦法
                </h3>
                <p>
                    若因天災等不可抗拒力之因素，由主管機關發布停止上班上課，table for ONE 為了員工及您的安全，將會暫停營業乙日。當然，我們會協助您更改訂位日期，或是辦理退費。
                </p>
                <h3>
                    線上金流系統
                </h3>
                <p>
                    table for ONE 線上付款透過智付寶第三方平台支付。
                </p>
                <div class="btn-box mg-b-lg">
                    <a href="reservation-4.html">
                        <div class="standard-btn btn">
                            立即訂位
                        </div>    
                    </a>
                </div>
            </div>
            <span class="copyright align-center mg-b-md">
                copyright © 2017 驚喜製造
            </span>
        </div>
    </div>
</body>
</html>