<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata -->
    @include('clubtomorrow.frontend._metadata')
    <meta property="og:url" content="https://www.surpriselab.com.tw/clubtomorrow/index.html"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>明日俱樂部 Club Tomorrow</title>

    <!-- Style -->
    <link rel="icon" href="/clubT/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/clubT/css/plugins/bootstrap.css"/>
    <link rel="stylesheet" href="/clubT/css/plugins/aos.min.css"/>
    <link rel="stylesheet" href="/clubT/css/plugins/jquery-glitch.css" >

    <!-- Loading Style -->
    <link rel="stylesheet" type="text/css" href="/clubT/css/plugins/loading.css"/>
    <script>
        document.documentElement.className = 'js';

        // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
        let vh = window.innerHeight * 0.01;

        // Then we set the value in the --vh custom property to the root of the document
        document.documentElement.style.setProperty('--vh', `${vh}px`);

        // We listen to the resize event
        window.addEventListener('resize', () => {

            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/clubT/css/style.css?v=0.1"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('clubtomorrow.frontend._gtm')
    @include('clubtomorrow.frontend._fbpixel')
</head>
<body class="home loading">

<div class="homepage">
    <!-- Anchor menu -->
    <nav class="anchor-wrapper">
        <ul>
            <li class="d-none">
                <a class="smoothScroll" href="#Home">_Home</a>
            </li>
            <li class="active">
                <a class="smoothScroll" href="#Entrance">_Entrance</a>
            </li>
            <li>
                <a class="smoothScroll" href="#About">_About</a>
            </li>
            <li>
                <a class="smoothScroll fbpx" data-event="sitetoradio" href="radio.html">_Radio</a>
            </li>
            <li>
                <a class="smoothScroll" href="#Ticket">_Ticket</a>
            </li>
            <li>
                <a class="smoothScroll" href="#Rules">_Rules</a>
            </li>
            <li>
                <a class="smoothScroll" href="#Contact">_Contact</a>
            </li>
        </ul>
    </nav>
    <!-- End anchor menu -->

    <!-- Social Links -->
    <aside class="social-wrapper">
        <ul>
            <li class="social-link">
                <a href="https://www.facebook.com/surpriselabtw" target="_blank">
                    <img class="img-fluid" src="/clubT/img/icon/icon_FB.svg" alt="facebook">
                </a>
            </li>
            <li class="social-link">
                <a href="https://www.instagram.com/surpriselabtw/" target="_blank">
                    <img class="img-fluid" src="/clubT/img/icon/icon_IG.svg" alt="instagram">
                </a>
            </li>
        </ul>
    </aside>

    <header>
        <div class="container">
            <!-- Header LOGO -->
            <div class="logo-wrapper">
                <div class="logo">
                    <a class="smoothScroll" href="index.html">
                        <img src="/clubT/img/header_logo.png" alt="明日俱樂部 Club Tomorrow">
                    </a>
                    <button class="hamburger">
                        <span class="current-page">_Entrance</span>
                        <span class="current-menu">_Menu</span>
                        <span class="menu-button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu">
        <ul class="menu-wrapper">
            <li class="menu-item d-none">
                <a class="smoothScroll" href="#Home">Home</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll" href="#Entrance">Entrance</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll" href="#About">About</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll fbpx" data-event="sitetoradio" href="radio.html">Radio</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll" href="#Ticket">Ticket</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll" href="#Rules">Rules</a>
            </li>
            <li class="menu-item">
                <a class="smoothScroll" href="#Contact">Contact</a>
            </li>
        </ul>
        <ul class="social-wrapper">
            <li class="social-link">
                <a href="https://www.facebook.com/surpriselabtw" target="_blank">
                    <img class="img-fluid" src="/clubT/img/icon/icon_FB.svg" alt="facebook">
                </a>
            </li>
            <li class="social-link">
                <a href="https://www.instagram.com/surpriselabtw/" target="_blank">
                    <img class="img-fluid" src="/clubT/img/icon/icon_IG.svg" alt="instagram">
                </a>
            </li>
        </ul>
    </div>

    <main>
        <!-- Landing -->
        <section class="fullpage anchor-section fixed-scroll-anchor" data-section-name="Home" id="Home" data-aos="fade">
            <div class="intro-wrapper">
                <div class="intro-inner">
                    <div class="intro-header">
                        <img class="intro-img" src="/clubT/img/landing/1.1_logo.png" alt="Club Tomorrow">
                    </div>
                    <div class="intro-content">
                        <div class="intro-content-item">
                            <div class="glitch">
                                <p class="section-paragraph intro-text">
                                    混亂正在發生<br/>你，能成為最後贏家嗎？
                                </p>
                            </div>
                        </div>
                        <div class="intro-content-item">
                            <a class="smoothScroll btn-bright-blue intro-btn" href="#Entrance">進入明日俱樂部</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section1 Entrance -->
        <section class="fullpage anchor-section fixed-scroll-anchor" data-section-name="Entrance" id="Entrance" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>明日俱樂部</h1>
                        <p class="section-paragraph">
                            你好，我是 Emily<br/>
                            歡迎來到明日俱樂部<br/>
                            <br/>
                            這世界正邁入前所未有的混亂<br/>
                            <br/>
                            我很好奇<br/>
                            你們，人類們，能終止這場混亂嗎？
                        </p>
                        <div class="entrance-wrapper">
                            <a class="smoothScroll entrance-link fbpx" href="#About" data-event="viewcontent1">
                                <img src="/clubT/img/icon/icon_about.png" srcset="/clubT/img/icon/icon_about@2x.png 2x" alt="探索世界">
                                <div class="entrance-link-text">探索世界</div>
                            </a>
                            <a class="smoothScroll entrance-link fbpx" href="#Ticket" data-event="viewcontent2">
                                <img src="/clubT/img/icon/icon_ticket.png" srcset="/clubT/img/icon/icon_ticket@2x.png 2x" alt="成為玩家">
                                <div class="entrance-link-text">成為玩家</div>
                            </a>
                            <a class="smoothScroll entrance-link" href="#Rules">
                                <img src="/clubT/img/icon/icon_rules.png" srcset="/clubT/img/icon/icon_rules@2x.png 2x" alt="重要規則">
                                <div class="entrance-link-text">重要規則</div>
                            </a>
                            <a class="smoothScroll entrance-link" href="#Contact">
                                <img src="/clubT/img/icon/icon_contact.png" srcset="/clubT/img/icon/icon_contact@2x.png 2x" alt="聯絡管道">
                                <div class="entrance-link-text">聯絡管道</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section2 About -->
        <section class="anchor-section" id="About" data-aos="fade">
            <section id="aboutSec" class="fullpage fixed-scroll-anchor about-sec about-sec-1" data-section-name="About" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">瘋狂世界</h2>
                            <div class="section-subtitle">the crazy world</div>
                            <div class="d-flex justify-content-center">
                                <p class="section-paragraph v2-styling">
                                    你好，我是 Emily<br/>
                                    歡迎來到我打造的世界<br/>
                                    <span class="v2-visible v2-highlight">這世界</span><br/>
                                    這裡混亂、瘋狂、對立<br/>
                                    大家所要的都不盡相同<br/>
                                    <br/>
                                    但，只要成為贏家，就能終結一切<br/>
                                    <span class="v2-visible v2-highlight">正在分裂</span><br/>
                                    只要成為贏家<br/>
                                    就能打造出你想要的明天
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullpage fixed-scroll-anchor about-sec about-sec-2" data-section-name="About" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">五大陣營</h3>
                            <div class="section-subtitle">five camps</div>
                            <div class="d-flex justify-content-center">
                                <p class="section-paragraph v2-styling">
                                    在這有著相互角力的五大陣營<br/>
                                    <span class="v2-visible v2-highlight">我們</span><br/>
                                    有人崇尚團結、有人追求自由<br/>
                                    有人效忠正義、有人在乎生存<br/>
                                    也有些人質疑並試著推翻一切<br/>
                                    <span class="v2-visible v2-highlight">被迫選邊</span><br/>
                                    你將加入其中一方<br/>
                                    屆時，請稱職扮演好你的角色
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullpage fixed-scroll-anchor about-sec about-sec-3" data-section-name="About" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">六十位玩家</h3>
                            <div class="section-subtitle">sixty players</div>
                            <div class="d-flex justify-content-center">
                                <p class="section-paragraph v2-styling">
                                    每晚，將有六十位玩家進入這世界<br/>
                                    <span class="v2-visible v2-highlight">阻止</span><br/>
                                    身旁的陌生人<br/>
                                    可能成為戰友<br/>
                                    <span class="v2-visible v2-highlight">這場分裂</span><br/>
                                    而你的朋友<br/>
                                    則可能成為敵人
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullpage fixed-scroll-anchor about-sec about-sec-4" data-section-name="About" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">成為贏家</h3>
                            <div class="section-subtitle">one winner</div>
                            <div class="d-flex justify-content-center">
                                <p class="section-paragraph v2-styling">
                                    在角力競爭之中<br/>
                                    在不同信念之間<br/>
                                    <span class="v2-visible v2-highlight">一起</span><br/>
                                    一場大戰即將開打<br/>
                                    <span class="v2-visible v2-highlight">活著離開</span><br/>
                                    在五大陣營、六十位玩家中<br/>
                                    你，能成為最終贏家嗎？
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fullpage fixed-scroll-anchor about-sec about-sec-5" data-section-name="About" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="section-title">進入世界</h3>
                            <div class="section-subtitle">Enter the world</div>
                            <div class="d-flex justify-content-center">
                                <p class="section-paragraph v2-styling">
                                    最後，請記住<br/>
                                    <span class="v2-visible v2-highlight">想要的</span><br/>
                                    這世界的結局<br/>
                                    由你們 ─ 也就是人類 ─ 共同決定<br/>
                                    <span class="v2-visible v2-highlight">不盡相同</span><br/>
                                    不管最終所迎來的是明日還是末日<br/>
                                    都沒有人能夠置身事外<br/>
                                    <span class="v2-visible v2-highlight">就一定會</span><br/>
                                    你，準備好進入明日俱樂部了嗎？<br/>
                                    <span class="v2-visible v2-highlight">對立嗎</span>
                                </p>
                            </div>
                            <a class="smoothScroll btn-bright-blue fbpx" href="#Ticket" data-event="ViewContent">成為玩家</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Section3 Ticket -->
        <section class="anchor-section" id="Ticket" data-aos="fade">

            <!-- 體驗內容 -->
            <section class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-experience" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">體驗內容</h2>
                            <div class="section-subtitle">EXPERIENCE</div>
                            <div class="exp-wrapper">
                                <div class="exp-item">
                                    <div class="exp-img">
                                        <img class="img-fluid" src="/clubT/img/landing/1.3_exp_1.png" alt="120分鐘沈浸式體驗">
                                    </div>
                                    <div class="exp-title">
                                        探索 Discover<br/>
                                        7位表演者<br/>
                                        120分鐘沈浸式體驗
                                    </div>
                                </div>
                                <div class="exp-item">
                                    <div class="exp-img">
                                        <img class="img-fluid" src="/clubT/img/landing/1.3_exp_2.png" alt="7位表演者 60位玩家">
                                    </div>
                                    <div class="exp-title">
                                        扮演 Play<br/>
                                        化身玩家，加入5大陣營<br/>
                                        扮演關鍵角色
                                    </div>
                                </div>
                                <div class="exp-item">
                                    <div class="exp-img">
                                        <img class="img-fluid" src="/clubT/img/landing/1.3_exp_3.png" alt="兩大陣營 五種角色">
                                    </div>
                                    <div class="exp-title">
                                        抉擇 Action<br/>
                                        60位玩家，角逐1場大戰<br/>
                                        結局由你決定
                                    </div>
                                </div>
                            </div>
                            <!-- <p class="section-paragraph">
                                體驗中會因玩家的選擇<br/>獲得調飲與小點，或進入特殊空間的權限
                            </p> -->
                            <a class="link-bright-green fbpx" data-event="experience" href="javascript://" data-toggle="modal" data-target="#expDetail">體驗內含</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 選擇票券 -->
            <section id="ticketSec" class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-type" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">成為玩家</h2>
                            <div class="section-subtitle">TICKET</div>

                            <p class="section-paragraph">
                                點入下方票卷，選擇數量付費後完成購票<br/>現在預購，將可選擇 02/26-03/15 之場次
                            </p>

                            <div class="ticket-type">
                                <div class="type-item type-single-player">
                                    <a href="https://surpriselab.backme.tw/checkout/1200/7946?locale=zh-TW" class="ticket-frame fbpx" data-event="AddToCart" target="_blank">
                                        <div class="type-img">
                                            <img class="img-fluid d-none d-sm-block" src="/clubT/img/landing/1.3_ticket_1.png" alt="單人票">
                                            <img class="img-fluid d-block d-sm-none" src="/clubT/img/landing/1.3_ticket_1_mobile@2x.png" alt="單人票">
                                        </div>
                                    </a>
                                </div>
                                <div class="type-item type-multiplayer-for-4">
                                    <a href="https://surpriselab.backme.tw/checkout/1200/7947?locale=zh-TW" class="ticket-frame fbpx" data-event="AddToCart" target="_blank">
                                        <div class="type-img">
                                            <img class="img-fluid d-none d-sm-block" src="/clubT/img/landing/1.3_ticket_2.png" alt="四人票">
                                            <img class="img-fluid d-block d-sm-none" src="/clubT/img/landing/1.3_ticket_2_mobile@2x.png" alt="四人票">
                                        </div>
                                        <p class="ticket-state timeLimit">
                                            不可分開劃位<span class="d-sm-none d-inline">，</span><br class="d-sm-inline d-none"/>限量 <span class="total-ticket">300</span> 組 | 剩餘 <span class="rest-ticket">XXX</span> 組
                                        </p>
                                    </a>
                                </div>
                                <div class="type-item type-multiplayer-for-10">
                                    <a href="https://surpriselab.backme.tw/checkout/1200/7948?locale=zh-TW" class="ticket-frame fbpx" data-event="AddToCart" target="_blank">
                                        <div class="type-img">
                                            <img class="img-fluid d-none d-sm-block" src="/clubT/img/landing/1.3_ticket_3.png" alt="十人票">
                                            <img class="img-fluid d-block d-sm-none" src="/clubT/img/landing/1.3_ticket_3_mobile@2x.png" alt="十人票">
                                        </div>
                                        <p class="ticket-state timeLimit">
                                            不可分開劃位<span class="d-sm-none d-inline">，</span><br class="d-sm-inline d-none"/>限量 <span class="total-ticket">50</span> 組 | 剩餘 <span class="rest-ticket">XXX</span> 組
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <p class="section-paragraph d-sm-block d-none">
                                訂位採先預購、後劃位之機制<br/>若有包場需求，歡迎來信詢問<br/><br/>詳細劃位時間軸，請見下方「劃位時程」
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 購票步驟 -->
            <section class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-step" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">購票步驟</h2>
                            <div class="section-subtitle">STEP</div>
                            <p class="section-paragraph">
                                採先預購、後劃位機制<br/>依照購買日期，分梯次寄送劃位信
                            </p>
                            <div class="step-wrapper">
                                <div class="step-inner">
                                    <div class="step-item">
                                        <div class="row-title">
                                            Step 1
                                        </div>
                                        <div class="row-content">
                                            <div class="step-title">
                                                先預購
                                            </div>
                                            <div class="step-intro">
                                                確定夥伴人數，線上預付完成購票
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="row-title">
                                            Step 2
                                        </div>
                                        <div class="row-content">
                                            <div class="step-title">
                                                後劃位
                                            </div>
                                            <div class="step-intro">
                                                將於指定時間收到劃位信件，並透過線上劃位，選擇日期、場次
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="row-title">
                                            Step 3
                                        </div>
                                        <div class="row-content">
                                            <div class="step-title">
                                                來體驗
                                            </div>
                                            <div class="step-intro">
                                                依開放劃位後自行選定的日期、場次前來體驗
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 劃位時程 -->
            <section class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-schedule" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 offset-sm-0 col-10 offset-1">
                            <h2 class="section-title">劃位時程</h2>
                            <div class="section-subtitle">SCHEDULE</div>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-10 offset-1">
                            <div class="schedule-wrapper">
                                <div class="schedule-inner">
                                    <div class="schedule-item">
                                        <div class="schedule-title">
                                            02/04
                                        </div>
                                        <div class="schedule-content">
                                            寄送劃位信— 01/20到02/03晚上18:00前購票者
                                        </div>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-title">
                                            02/11
                                        </div>
                                        <div class="schedule-content">
                                            寄送劃位信— 02/03到02/10晚上18:00前購票者
                                        </div>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-title">
                                            02/18
                                        </div>
                                        <div class="schedule-content">
                                            寄送劃位信— 02/10到02/17晚上18:00前購票者
                                        </div>
                                    </div>
                                    <div class="schedule-item">
                                        <div class="schedule-title">
                                            02/25
                                        </div>
                                        <div class="schedule-content">
                                            寄送劃位信— 02/17到02/24晚上18:00前購票者
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="section-paragraph">
                                更詳細的劃位須知，將於劃位日前透過電子郵件告知，為提供最好的體驗品質，上述日期會依實際狀況彈性調整
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 體驗場次 -->
            <section class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-time-slots" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 offset-sm-0 col-10 offset-1">
                            <h2 class="section-title">體驗場次</h2>
                            <div class="section-subtitle">TIME SLOTS</div>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-10 offset-1">
                            <div class="time-slots-wrapper">
                                <div class="time-slots-inner">
                                    <div class="time-slots-row">
                                        <div class="time-slots-item">
                                            <div class="time-slots-title">
                                                週三
                                            </div>
                                            <div class="time-slots-content">
                                                18:30 | 20:30
                                            </div>
                                        </div>
                                        <div class="time-slots-item">
                                            <div class="time-slots-title">
                                                週四
                                            </div>
                                            <div class="time-slots-content">
                                                18:30 | 20:30
                                            </div>
                                        </div>
                                        <div class="time-slots-item">
                                            <div class="time-slots-title">
                                                週五
                                            </div>
                                            <div class="time-slots-content">
                                                18:30 | 20:30
                                            </div>
                                        </div>
                                    </div>
                                    <div class="time-slots-row">
                                        <div class="time-slots-item">
                                            <div class="time-slots-title">
                                                週六
                                            </div>
                                            <div class="time-slots-content">
                                                19:00 | 21:00
                                            </div>
                                        </div>
                                        <div class="time-slots-item">
                                            <div class="time-slots-title">
                                                週日
                                            </div>
                                            <div class="time-slots-content">
                                                13:00 | 15:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="section-paragraph text-center">每場次約120分鐘<br/><br/></p>
                            <p class="section-paragraph">
                                為提供最好的體驗品質，上述場次時段會依實際狀況彈性調整
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 售票狀況 -->
            <section class="fullpage fixed-scroll-anchor ticket-sec ticket-sec-status" data-section-name="Ticket" data-aos="fade">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 offset-sm-0 col-10 offset-1">
                            <h2 class="section-title">售票狀況</h2>
                            <div class="section-subtitle">TICKET STATUS</div>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-12">
                            <!-- 倒數計時器 -->
                            <div class="time-counter">
                                <p class="section-paragraph">
                                    玩家招募中<br />登入倒數
                                </p>
                                <div class="time-rest d-flex align-items-center justify-content-center">
                                    <span class="days">00</span>天
                                    <span class="hours">00</span>時
                                    <span class="minutes">00</span>分
                                    <span class="seconds">00</span>秒
                                </div>
                            </div>

                            <!-- 售票進度 -->
                            <div class="sale-progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuemax="100"></div>
                                </div>
                                <div class="sale-progress-info">
                                    <div class="d-inline-block d-sm-flex">
                                        <p class="section-paragraph">
                                            已招募 <span class="total-sale">1600</span> 位<span class="over-sale">，待招募 <span class="total-rest">400</span> 位</span>
                                        </p>
                                        <p class="section-paragraph ml-auto text-right progress-percent-area">
                                            已完成 <span class="progress-percent">80</span> %
                                        </p>
                                    </div>
                                    <p class="sale-remark section-paragraph">
                                        * 現正預售 02/26-03/15 票券<br/>* 可劃位區間將依實際預售情況加開或縮短
                                    </p>
                                    <a class="smoothScroll btn-bright-blue" href="#Rules">俱樂部手冊</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Section4 Rules -->
        <section class="fullpage anchor-section fixed-scroll-anchor" data-section-name="Rules" id="Rules" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">俱樂部手冊</h2>
                        <div class="section-subtitle">CLUB RULES</div>
                        <p class="section-paragraph">
                            若有其他問題，請按下方按鈕
                        </p>
                        <a class="smoothScroll btn-bright-blue" href="rules.html">查看手冊</a>
                        <p class="section-paragraph">
                            問與答 / 預售規則 / 更改、退費事項
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section5 Contact -->
        <section class="fullpage anchor-section fixed-scroll-anchor" data-section-name="Contact" id="Contact" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">聯絡</h2>
                        <div class="section-subtitle">Contact</div>
                        <p class="section-paragraph">
                            有任何問題，請先至 <a class="smoothScroll link-bright-green" href="#Rules">俱樂部手冊</a> 頁面<br class="d-sm-none d-inline"/><br class="d-sm-none d-inline"/>查看<br class="d-sm-inline d-none"/><br class="d-sm-inline d-none"/>手冊外的其他問題<br class="d-sm-none d-inline"/>（疑難雜症、企業合作、包場需求、媒體公關）<br/>歡迎來信詢問
                        </p>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-title">
                                    聯絡⽅式
                                </div>
                                <div class="contact-content">
                                    <a href="mailto:clubtomorrow@surpriselab.com.tw" target="_blank">clubtomorrow@surpriselab.com.tw</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-title">
                                    聯絡時間
                                </div>
                                <div class="contact-content">
                                    週一至週五 11:00am-18:00pm
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-title">
                                    明日俱樂部地址
                                </div>
                                <div class="contact-content">
                                    台北市中心，捷運站附近<br/>實際地址，只有俱樂部成員知道
                                </div>
                            </div>
                        </div>
                        <a class="smoothScroll btn-bright-blue" href="#Ticket">成為玩家</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Modal -->
<div class="modal fade" id="expDetail" tabindex="-1" role="dialog" aria-labelledby="expDetailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    體驗內含
                </div>
                <div class="modal-text">
                    <!-- <div class="exp-wrapper">
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_1-1.png" alt="舞蹈">
                            </div>
                            <div class="exp-content">
                                表演
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_1-2.png" alt="音樂">
                            </div>
                            <div class="exp-content">
                                音樂
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_1-3.png" alt="小點">
                            </div>
                            <div class="exp-content">
                                舞蹈
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_2-1.png" alt="陣營">
                            </div>
                            <div class="exp-content">
                                陣營
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_2-2.png" alt="派別">
                            </div>
                            <div class="exp-content">
                                選擇
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_2-3.png" alt="選擇">
                            </div>
                            <div class="exp-content">
                                倒數
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_3-1.png" alt="格鬥">
                            </div>
                            <div class="exp-content">
                                格鬥
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_3-2.png" alt="投票">
                            </div>
                            <div class="exp-content">
                                調飲
                            </div>
                        </div>
                        <div class="exp-item">
                            <div class="exp-icon">
                                <img src="/clubT/img/icon/ticket/icon_ticket_3-3.png" alt="倒數">
                            </div>
                            <div class="exp-content">
                                派對
                            </div>
                        </div>
                    </div> -->
                    <p class="section-paragraph">
                        唯有人類能夠進入<br/>現場將進行人類檢測及分類<br/><br/>請大膽在這世界穿梭<br/>你將遇見五大陣營的領導者<br/><br/>你將加入一場秘密集會<br/>請積極參與，它會是你獲勝的關鍵<br/><br/>請觀察藏在身旁的訊息<br/>獲勝的提示，就藏在你身邊<br/><br/>最後，請用盡一切方法<br/>成為贏家 － 決定這世界的明天<br/><br/>祝你勝利。<br/><br/>註：現場提供少量酒水與小點
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        關閉
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Screen Rotate Hint -->
<div class="hint-wrapper">
    <div class="hint-inner">
        <div class="hint-img">
            <img src="/clubT/img/icon/rotate_turn-h.gif" alt="screen-rotate">
        </div>
        <div class="hint-text">
            請使用橫式觀看，以獲得最佳體驗
        </div>
    </div>
</div>

<!-- Plugins -->
<script src="/clubT/js/plugins/jquery-3.3.1.min.js"></script>
<script src="/clubT/js/plugins/popper.min.js"></script>
<script src="/clubT/js/plugins/bootstrap.min.js"></script>
<script src="/clubT/js/plugins/jquery.scrollify.js"></script>
<script src="/clubT/js/plugins/jquery-glitch.js"></script>

<!-- Loading Animation Js -->
<script src="/clubT/js/plugins/imagesloaded.pkgd.min.js"></script>

<!-- Aos -->
<script src="/clubT/js/plugins/aos.min.js"></script>

<!-- isMobile -->
<script src="/clubT/js/plugins/isMobile.min.js"></script>

<!-- Custom Js -->
<script src="/clubT/js/main.js"></script>
<script src="/clubT/js/smooth-scroll.js"></script>
<script src="/clubT/js/home.js"></script>
<script src="/clubT/js/rotate-device-hint.js"></script>
</body>
</html>
