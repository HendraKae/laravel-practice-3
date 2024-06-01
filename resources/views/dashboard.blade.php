<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    {{-- swiperjs --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/sass/dashboard.scss'])
</head>
    <body>
        <section class="navbar">
            <div class="brand">
                <a href="#"><img src="{{ url('/assets/images/dashboard/brand.png') }}" ></a>
            </div>
            <div class="nav">
                <p class="title">Main Menu</p>
                <ul>
                    <li>
                        <a href="#" id="dashboard">
                            <div>
                                <img src="{{ url('/assets/images/dashboard/icon-beranda.png') }}" >
                            </div>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <img src="{{ url('/assets/images/dashboard/status-up.png') }}" >
                            </div>
                            <p>Insight</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <img src="{{ url('/assets/images/dashboard/document-text.png') }}" >
                            </div>
                            <p>Invoices</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <img src="{{ url('/assets/images/dashboard/box.png') }}" >
                            </div>
                            <p>Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <img src="{{ url('/assets/images/dashboard/empty-wallet-change.png') }}" >
                            </div>
                            <p>Reimburse</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div >
                                <img src="{{ url('/assets/images/dashboard/message.png') }}" >
                            </div>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div >
                                <img src="{{ url('/assets/images/dashboard/message.png') }}" >
                            </div>
                            <p>People & Teams</p>
                        </a>
                    </li>
                </ul>
                <p class="title">Preferences</p>
                <ul>
                    <li>
                        <a href="#">
                            <div >
                                <img src="{{ url('/assets/images/dashboard/setting.png') }}" >
                            </div>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div >
                                <img src="{{ url('/assets/images/dashboard/info-circle.png') }}" >
                            </div>
                            <p>Help & Center</p>
                        </a>
                    </li>
                    <li>
                        <a>
                            <div>
                                <img src="{{ url('/assets/images/dashboard/briefcase.png') }}" >
                            </div>
                            <p>Dark Mode</p>
                            <div class="toggle">
                                <input type="checkbox" />
                                <div class="img-sun">
                                    <img class="sun" src="{{ url('/assets/images/dashboard/sun.png') }}" >
                                </div>
                                <div class="img-month">
                                    <img class="month" src="{{ url('/assets/images/dashboard/month.png') }}" >
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="#">
                            <div >
                                <img src="{{ url('/assets/images/dashboard/logout.png') }}" >
                            </div>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="dashboard">
            <div class="header">
                <div class="search">
                    <label for="search">
                        <div>
                            <img src="{{ url('/assets/images/dashboard/search.png') }}" />
                        </div>
                    </label>
                    <input type="text" placeholder="Search something here" id="search" />
                </div>
                <div class="grup-right">
                    <button class="notification">
                        <img src="{{ url('/assets/images/dashboard/notification.png') }}" />
                        <img class="notif-red" src="{{ url('/assets/images/dashboard/notif-circle.png') }}" />
                    </button>
                    <div class="profile">
                        <div><img src="{{ url('/assets/images/dashboard/profile.png') }}" /></div>
                        <p>John Cornors</p>
                        <a href="#"><img src="{{ url('/assets/images/dashboard/arrow-down.png') }}" /></a>
                    </div>
                </div>
            </div>
            <div class="statistic">
                <div class="container">
                    <div class="slider-container">
                        <div class="swiper card_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="text">
                                           <h1>Spending Statistics</h1>
                                           <h2>2024</h2>
                                        </div>
                                        <img src="{{ url('/assets/images/dashboard/statistik.png') }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="text">
                                           <h1>Spending Statistics</h1>
                                           <h2>2025</h2>
                                        </div>
                                        <img src="{{ url('/assets/images/dashboard/statistik.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next btn-next">
                            <img src="{{ url('/assets/images/dashboard/Vector.png') }}" />
                        </div>
                        <div class="swiper-button-prev btn-prev">
                            <img src="{{ url('/assets/images/dashboard/Vector-1.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="balance">
                <div class="title">
                    <h2>Your balance</h2>
                    <div>
                        <img src="{{ url('/assets/images/dashboard/more.png') }}" />
                    </div>
                </div>
                <div class="nominal">
                    <h1>$120,435.00</h1>
                    <p>( USD )</p>
                </div>
                <p class="date">From Jan 01, 2022 to Jan 31, 2022</p>
                <div class="btn-wrapper">
                    <div class="btn">
                         <div>
                            <img src="{{ url('/assets/images/dashboard/money-recive.png') }}" />
                        </div>
                        <p>Top Up</p>
                    </div>
                    <div class="btn transfer">
                        <div>
                           <img src="{{ url('/assets/images/dashboard/money-send.png') }}" />
                       </div>
                       <p>Transfer</p>
                    </div>
                </div>
            </div>
            <div class="total">
                <div class="box">
                    <div class="income">
                        <h2>Your balance</h2>
                        <div>
                            <h1>$120,435.00</h1>
                            <p>( USD )</p>
                        </div>
                        <p class="desc"><span>20%</span> increase compared to last week</p>
                        <div class="tanda up">
                           <img src="{{ url('/assets/images/dashboard/arrowup.png') }}" />
                        </div>
                    </div>
                    <div class="expense">
                        <h2>Your balance</h2>
                        <div>
                            <h1>$120,435.00</h1>
                            <p>( USD )</p>
                        </div>
                        <p class="desc"><span>10%</span> decrease compared to last week</p>
                        <div class="tanda ">
                           <img src="{{ url('/assets/images/dashboard/arrowturn.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="history">
                <div class="container">
                    <div class="top">
                        <h1>Transaction History</h1>
                        <button>
                            <div>
                               <img src="{{ url('/assets/images/dashboard/calendar.png') }}" />
                            </div>
                            <p>1 Jan - 1 Feb 2022</p>
                        </button>
                    </div>
                    <div class="content">
                        <div class="transaksi">
                            <p>Transactions</p>
                            <div class="border-top"></div>
                            <div class="daftar">
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/bank.png') }}" />
                                </div>
                                <h1>Bank Transfer</h1>
                            </div>
                            <div class="border"></div>
                            <div class="daftar pay">
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/logos_paypal.png') }}" />
                                </div>
                                <h1>Paypal Account</h1>
                            </div>
                            <div class="border"></div>
                            <div class="daftar figma">
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/logos_figma.png') }}" />
                                </div>
                                <h1>Bank Transfer</h1>
                            </div>
                            <div class="border"></div>
                        </div>
                        <div class="date">
                            <div class="top-date">
                                <a>Date</a>
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/arrowbawah.png') }}" />
                                </div>
                            </div>
                            <ul>
                                <li><h1>Jan 01,2022</h1></li>
                                <li><h1>Jan 04,2022</h1></li>
                                <li><h1>Jan 06,2022</h1></li>
                            </ul>
                        </div>
                        <div class="amount">
                            <div class="top-amount">
                                <a>Amount</a>
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/arrowbawah.png') }}" />
                                </div>
                            </div>
                            <ul>
                                <li><h1>$2,000.00</h1></li>
                                <li><h1>$2,000.00</h1></li>
                                <li><h1>$2,000.00</h1></li>
                            </ul>
                        </div>
                        <div class="status">
                            <div class="top-amount">
                                <a>Status</a>
                                <div>
                                    <img src="{{ url('/assets/images/dashboard/arrowbawah.png') }}" />
                                </div>
                            </div>
                            <ul class="wrapper-list-status">
                                <li>
                                    <div class="circle">
                                        <div></div>
                                    </div>
                                    <h1>Completed</h1></li>
                                <li>
                                    <div class="circle circle-dua">
                                        <div></div>
                                    </div>
                                    <h1>Pending</h1></li>
                                <li>
                                    <div class="circle circle-tiga">
                                        <div></div>
                                    </div>
                                    <h1>On Hold</h1></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="title">
                    <h2>Spend by category</h2>
                    <div>
                        <img src="{{ url('/assets/images/dashboard/more.png') }}" />
                    </div>
                </div>
                <div class="content">
                    <div class="circle-statistik">
                        <img src="{{ url('/assets/images/dashboard/category.png') }}" />
                    </div>
                    <div class="detail satu">
                        <div>
                            <div class="color"></div>
                            <p>Employees Salary</p>
                        </div>
                        <h1>$8.000.00</h1>
                    </div>
                    <div class="detail dua">
                        <div>
                            <div class="color"></div>
                            <p>Material Supplies</p>
                        </div>
                        <h1>$2.130.00</h1>
                    </div>
                    <div class="detail tiga">
                        <div>
                            <div class="color"></div>
                            <p>Company tax</p>
                        </div>
                        <h1>$1.510.00</h1>
                    </div>
                    <div class="detail empat">
                        <div>
                            <div class="color"></div>
                            <p>Maintenance system</p>
                        </div>
                        <h1>$2.245.00</h1>
                    </div>
                    <div class="detail lima">
                        <div>
                            <div class="color"></div>
                            <p>Development System</p>
                        </div>
                        <h1>$4.385.00</h1>
                    </div>
                    <div class="detail enam">
                        <div>
                            <div class="color"></div>
                            <p>Production Tools </p>
                        </div>
                        <h1>$1.000.00</h1>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
        const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
        </script>
    </body>
</html>