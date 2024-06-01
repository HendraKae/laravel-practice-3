<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- font --}}
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        {{-- swiperjs --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        @vite(['resources/sass/app.scss'])

        <title>testORDO</title>
    </head>
    <body>
        {{-- navbar --}}
        <nav class="navbar" id="navbar">
            <div class="brand">
                <a href="#"><img src="{{ url('/assets/images/landing/Logo with Company Name.png') }}" /></a>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a class="nav-dropdown" href="#">Products <img src="{{ url('/assets/images/landing/arrow-down.png') }}" /></a>
                        <ul class="dropdown">
                            <li><a href="#">Product 1</a></li>
                            <li><a href="#">Product 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#benefit">Benefit</a></li>
                    <li><a href="#work">How it Work</a></li>
                    <li><a href="#">pricing</a></li>
                    <li>
                        <a class="nav-dropdown" href="#" >Company <img src="{{ url('/assets/images/landing/arrow-down.png') }}" /></a>
                        <ul class="dropdown">
                            <li><a href="#">Company 1</a></li>
                            <li><a href="#">Comapny 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn-login">Login</button>
                <button class="btn-demo">Get Demo</button>
            </div>
        </nav>
        
        {{-- hero --}}

        <section class="hero">
            <img class="bg2" src="{{ url('/assets/images/landing/hero-bg-2.png') }}" />
            <img class="bg1" src="{{ url('/assets/images/landing/hero-bg-1.png') }}" />
            <img class="bg3" src="{{ url('/assets/images/landing/hero-bg-3.png') }}" />
            <img class="bg4" src="{{ url('/assets/images/landing/hero-bg-4.png') }}" />
            <div class="main">
               <h1>All your business <br/>expenses in one place.</h1>
                <p>Yourone-stop finance empower platform. <br/> Manage all your business expenses with our supafast app.</p> 
                <div class="cta">
                    <button class="btn-demo">Get a Free Demo</button>
                    <button class="btn-pricing">See Pricing</button>
                </div>
            </div>
            <img class="hero-dashboard" src="{{ url('/assets/images/landing/hero-dashboard.png') }}" />
        </section>

        {{-- benefit --}}
        
        <section class="benefit" id="benefit">
            <div class="header">
                <div class="text">
                    <h2>WHY USE SPEND.IN</h2>
                    <h1>Easy, Simple, <br/>Affordable </h1>
                </div>
                <p>Our platform helps your business in managing <br/> expenses. These are some of the reasons why you <br/> should use our platform in managing business finances.</p>
            </div>
            <div class="content">
                <div class="card">
                    <img src="{{ url('/assets/images/landing/card1.png') }}" />
                    <h1>Automatic Invoice Payment</h1>
                    <p>No need to pay manually, we provide automatic <br/> invoice payment service! Set a payment schedule <br/> and you're done, it's that easy!</p>
                </div>
                <div class="card">
                    <img src="{{ url('/assets/images/landing/card2.png') }}" />
                    <h1>Clear payment history</h1>
                    <p>Still writing manual expenses? Our platform breaks <br/> down every expense you log down to the <br/> millisecond!</p>
                </div>
                <div class="card">
                    <img src="{{ url('/assets/images/landing/card3.png') }}" />
                    <h1>Use of multi-card paymentst</h1>
                    <p>Have more than 1 bank account or credit/debit card? <br/> Our platform is already integrated with many banks <br/> around the world, for easier payments!</p>
                </div>
            </div>
        </section>

        {{-- benefit 2nd --}}

        <section class="benefit2">
            <div class="header">
                <h2>WHY USE SPEND.IN</h2>
                <h1>Easy, Simple, Affordable</h1>
                <p>Our platform helps your business in managing expenses. These are some of the <br/> reasons why you should use our platform in managing business finances.</p>
            </div>
            <div class="content">
                <div class="benefits">
                    <div class="row">
                        <div class="img">
                            <img src="{{ url('/assets/images/landing/icon1-benefit2.png') }}" />
                        </div>
                        <div class="text">
                            <h2>Automatic Invoice Payment</h2>
                            <p>Automatic payments help you to arrange payments on a <br/> certain date without doing it manually again.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="img">
                            <img src="{{ url('/assets/images/landing/icon2-benefit2.png') }}" />
                        </div>
                        <div class="text">
                            <h2>Clear payment history</h2>
                            <p>Clear payment history helps you to track your business <br/> expenses on specific dates.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="img">
                            <img src="{{ url('/assets/images/landing/icon3-benefit2.png') }}" />
                        </div>
                        <div class="text">
                            <h2>Use of multi-card payments</h2>
                            <p>Have more than one debit or credit card? Don't worry, we <br/> support payments using more than one card.</p>
                        </div>
                    </div>
                </div>
                <img class="img-benefit2nd" src="{{ url('/assets/images/landing/benefit-2nd.png') }}" />
            </div>
        </section>

        {{-- work --}}

        <section class="work" id="work">
            <img class="bg1" src="{{ url('/assets/images/landing/hero-bg-1.png') }}" />
            <div class="header">
                <h2>HOW IT WORKS</h2>
                <h1>Few Easy Steps and Done</h1>
                <p>In just few easy step, you are all set to manage your business finances.<br/> Manage all expenses with Spend.In all in one place.</p>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col">
                        <h1 class="h1 hcol1">1</h1>
                        <img src="{{ url('/assets/images/landing/img-work1.png') }}" />
                        <p>Register your <br/> Spend.In account.</p>
                    </div>
                    <div class="col">
                        <h1 class="h1 hcol2">2</h1>
                        <img src="{{ url('/assets/images/landing/img-work2.png') }}" />
                        <p>Fill in the list of your <br/>business expenses.</p>
                    </div>
                    <div class="col">
                        <h1 class="h1 hcol3">3</h1>
                        <img src="{{ url('/assets/images/landing/img-work3.png') }}" />
                        <p>Done, let's <br/> continue the work.</p>
                    </div>
                </div>
                <div class="wrapper-btn">
                    <button class="btn-demo">Get a Free Demo</button>
                    <button class="btn-pricing">See Pricing</button>
                </div>
            </div>
        </section>

        {{-- work2nd --}}

        <section class="works">
            <img class="bg1" src="{{ url('/assets/images/landing/hero-bg-1.png') }}" />
            <div class="container">
                <img src="{{ url('/assets/images/landing/works-img.png') }}" />
                <div class="wrapper">
                    <div class="header">
                        <h2>HOW IT WORKS</h2>
                        <h1>Few Easy Steps and Done</h1>
                        <p>In just few easy step, you are all set to manage your <br/> business finances. Manage all expenses with Spend.In <br/> all in one place.</p>
                    </div>
                    <div class="content">
                        <div class="steps">
                            <img class="line" src="{{ url('/assets/images/landing/line.png') }}" />
                            <h1 class="h1">1</h1>
                            <p class="text">Register your Spend.In account.</p>
                        </div>
                        <div class="steps">
                            <h1 class="h1 number1">2</h1>
                            <p class="text txtwo">Fill in the list of your business expenses.</p>
                        </div> 
                        <div class="steps">
                            <img class="line two" src="{{ url('/assets/images/landing/line2.png') }}" />
                            <h1 class="h1 number2">3</h1>
                            <p class="text txthree">Done, let’s continue the work.</p>
                        </div> 
                    </div>    
                </div> 
            </div>
        </section>

        {{-- stories --}}

        <section class="stories">
            <div class="header">
                <h2>INCREASE PRODUCTIVITY</h2>
                <h1>Reduce Time in Doing Manual Work <br/>Managing Expenses</h1>
            </div>
            <div class="content">
                <div class="wrapper">
                    <div class="btn-box">
                        <div class="btn" id="btn"></div>
                        <button class="toggle-btn b-one" onclick="leftClick()">With Spend.In</button>
                        <button class="toggle-btn b-two" onclick="rightClick()">Without Spend.In</button>
                    </div>
                    <div class="advantages">
                        <h1>Track Business Expenses until its Milisecond</h1>
                        <div class="row">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/tick.png') }}" />
                            </div>
                            <div class="text">
                                <p>Analyze your business cost easily with group transaction <br/> thorugh tagging feature.</p>
                            </div>
                        </div>
                        <div class="row r-two">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/tick.png') }}" />
                            </div>
                            <div class="text">
                                <p>Add more than one card for payment. Integrated with more <br/> than 50+ payment method and support bulk payment.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/tick.png') }}" />
                            </div>
                            <div class="text">
                                <p>Arrange your business expenses by date, name, etc.,  with <br/> just one click.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-stories">
                    <img src="{{ url('/assets/images/landing/Success Stories.png') }}" />
                </div>
            </div>
        </section>

        {{-- stories2nd --}}

        <section class="stories2nd">
            <div class="header">
                <h2>INCREASE PRODUCTIVITY</h2>
                <h1>Reduce Time in Doing Manual Work <br/>Managing Expenses</h1>
            </div>
            <div class="content">
                <div class="wrapper">
                    <div class="btn-box">
                        <div class="btn" id="btn2nd"></div>
                        <button class="toggle-btn b-one2nd" onclick="leftClicked()">With Spend.In</button>
                        <button class="toggle-btn b-two2nd" onclick="rightClicked()">Without Spend.In</button>
                    </div>
                    <div class="advantages">
                        <h1>Taking too long to tidy up administrative files makes <br/>it unproductive</h1>
                        <div class="row">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/close-circle.png') }}" />
                            </div>
                            <div class="text">
                                <p>Complex recording process due to every administrative file <br/> in a different place.</p>
                            </div>
                        </div>
                        <div class="row r-two">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/close-circle.png') }}" />
                            </div>
                            <div class="text">
                                <p>Need more effort to pay manually one by one invoice <br/> because there is no payment accommodation.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="img">
                                <img src="{{ url('/assets/images/landing/close-circle.png') }}" />
                            </div>
                            <div class="text">
                                <p>Manual data arranging needs a long time because the <br/> different months/years are not in the same place.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-stories">
                    <img src="{{ url('/assets/images/landing/notSuccess Stories.png') }}" />
                </div>
            </div>
        </section>

        {{-- testimonial --}}

        <section class="testimonial">
            <img class="bg1" src="{{ url('/assets/images/landing/hero-bg-1.png') }}" />
            <div class="header"> 
                <h2>WHAT THEY SAY</h2>
                <h1>Our User Kind Words</h1>
                <p>Here are some testimonials from our user after using Spend.In <br/> to manage their business  expenses.</p>
            </div>
            <div class="slider-container">
                <div class="container">
                    <div class="swiper card_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card satu">
                                    <div class="text-wrapper">
                                        <h2>It’s just incredible!</h2>
                                        <p>It’s just 1 month since I’m using Spend.In to <br/> manage my business expenses, but the <br/> result is very satisfying! My business finance <br/> now more neat than before, thanks to <br/> Spend.In!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile1.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Jimmy Bartney</h1>
                                                <p>Product Manager at Picko Lab</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card dua">
                                    <div class="text-wrapper">
                                        <h2>Satisfied User Here!</h2>
                                        <p>Never thought that with Spend.In managing <br/> my business expenses is so easy! Been <br/> using this platform for 3 months and still <br/> counting!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile2.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Natasha Romanoff</h1>
                                                <p>Black Widow</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card tiga">
                                    <div class="text-wrapper">
                                        <h2>No doubt, Spend.In is the best!</h2>
                                        <p>“The best”! That’s what I want to say to this <br/> platform, didn’t know that there’s a <br/> platform to help you manage your business <br/> expenses like this! Very recommended to you who have a big business!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile3.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Jimmy Bartney</h1>
                                                <p>Product Manager at Picko Lab</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card satu">
                                    <div class="text-wrapper">
                                        <h2>It’s just incredible!</h2>
                                        <p>It’s just 1 month since I’m using Spend.In to <br/> manage my business expenses, but the <br/> result is very satisfying! My business finance <br/> now more neat than before, thanks to <br/> Spend.In!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile1.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Jimmy Bartney</h1>
                                                <p>Product Manager at Picko Lab</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card dua">
                                    <div class="text-wrapper">
                                        <h2>Satisfied User Here!</h2>
                                        <p>Never thought that with Spend.In managing <br/> my business expenses is so easy! Been <br/> using this platform for 3 months and still <br/> counting!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile2.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Natasha Romanoff</h1>
                                                <p>Black Widow</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card tiga">
                                    <div class="text-wrapper">
                                        <h2>No doubt, Spend.In is the best!</h2>
                                        <p>“The best”! That’s what I want to say to this <br/> platform, didn’t know that there’s a <br/> platform to help you manage your business <br/> expenses like this! Very recommended to you who have a big business!</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="img-content">
                                        <div class="card-image">
                                            <div class="img-profile">
                                                <img src="{{ url('/assets/images/landing/profile3.png') }}" />
                                            </div>
                                            <div class="text-wrapper">
                                                <h1>Jimmy Bartney</h1>
                                                <p>Product Manager at Picko Lab</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next btn-next">
                        <img src="{{ url('/assets/images/landing/arrow-right.png') }}" />
                    </div>
                    <div class="swiper-button-prev btn-prev">
                        <img src="{{ url('/assets/images/landing/arrow-left.png') }}" />
                    </div>
                </div>
            </div>
        </section>

        {{-- pricing --}}

        <section class="pricing">
            <div class="header">
                <h2>Ready to Get Started?</h2>
                <p>Choose a plan that suits your business needs</p>
                <div class="toggle">
                    <h1>Monthly</h1>
                    <input type="checkbox"  />
                    <h1>Yearly</h1>
                </div>
                <img src="{{ url('/assets/images/landing/arrow-abstrak.png') }}" />
                <div class="wrapper-save">
                    <h1 class="save">Save 65%</h1>
                </div>
            </div>
            <div class="content">
                <div class="container-free">
                    <div class="title">
                        <div>
                            <img src="{{ url('/assets/images/landing/lovely.png') }}" />
                        </div>
                        <h1>Free</h1>
                    </div>
                    <p>Perfect plan to get started</p>
                    <div class="price">
                        <h1>$0</h1>
                        <p>/month</p>
                    </div>
                    <p class="description">A free plan grants you access to some cool <br/> features of Spend.In.</p>
                    <div class="benefit-featur">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Sync accross device</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>5 workspace</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Collaborate with 5 user</h1>
                    </div>
                    <div class="benefit-featur benefitnone">
                        <img src="{{ url('/assets/images/landing/close-circle1.png') }}" />
                        <h1>Sharing permission</h1>
                    </div>
                    <div class="benefit-featur benefitnone">
                        <img src="{{ url('/assets/images/landing/close-circle1.png') }}" />
                        <h1>Admin tools</h1>
                    </div>
                    <div class="benefit-featur benefitnone1">
                        <img src="{{ url('/assets/images/landing/close-circle1.png') }}" />
                        <h1>100+ integrations</h1>
                    </div>
                    <button>Get your Free Plan</button>
                </div>
                <div class="container-free">
                    <div class="title">
                        <div>
                            <img src="{{ url('/assets/images/landing/crown.png') }}" />
                        </div>
                        <h1>Pro</h1>
                    </div>
                    <p>Perfect plan for professionals!</p>
                    <div class="price">
                        <h1>$12</h1>
                        <p>/month</p>
                    </div>
                    <p class="description">For professional only! Start arranging your <br/> expenses with our best templates.</p>
                    <div class="benefit-featur">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Everything in Free Plan </h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Unlimited workspace</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Collaborative workspace</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Sharing permission</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Admin tools</h1>
                    </div>
                    <div class="benefit-featur benefitlast">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>100+ integrations</h1>
                    </div>
                    <button>Get Started</button>
                </div>
                <div class="container-free">
                    <div class="title">
                        <div>
                            <img src="{{ url('/assets/images/landing/share.png') }}" />
                        </div>
                        <h1>Ultimate</h1>
                    </div>
                    <p>Best suits for great company!</p>
                    <div class="price">
                        <h1>$33</h1>
                        <p>/month</p>
                    </div>
                    <p class="description">If you a finance manager at big  company,<br/> this plan is a perfect match.</p>
                    <div class="benefit-featur">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Everything in Pro Plan</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Daily performance reports</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Dedicated assistant</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Artificial intelligence</h1>
                    </div>
                    <div class="benefit-featur benefit1">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Marketing tools & automations</h1>
                    </div>
                    <div class="benefit-featur benefitlast">
                        <img src="{{ url('/assets/images/landing/tick.png') }}" />
                        <h1>Advanced security</h1>
                    </div>
                    <button>Get Started</button>
                </div>
            </div>
        </section>

        {{-- call --}}

        <section class="call">
            <img class="bg1" src="{{ url('/assets/images/landing/hero-bg-1.png') }}" />
            <div class="container">
                <div class="title-description">
                    <h2>DOWNLOAD NOW!</h2>
                    <h1>Start Track Your Business<br/>Expenses Today</h1>
                    <p>Are you ready to make your business more organized?<br/> Download Spend.In now!</p>
                    <button>Get a Free Demo</button>
                </div>
                <div class="images">
                    <img src="{{ url('/assets/images/landing/img-call.png') }}" />
                </div>
            </div>
        </section>

        {{-- footer --}}

        <section class="footer">
            <div class="wrapper-top">
                <div class="spending">
                    <div class="logo">
                        <div>
                            <img src="{{ url('/assets/images/landing/logo-footer.png') }}" >
                        </div>
                        <h1>Spend.In</h1>
                    </div>
                    <p>Data visualization, and <br/> expense management <br/>for your business.</p>
                </div>
                <div class="product">
                    <h1>Product</h1>
                    <ul>
                        <li class="li-satu"><a href="#">Digital Invoice</a></li>
                        <li><a href="#">Insights</a></li>
                        <li><a href="#">Reimbursements</a></li>
                        <li><a href="#">Virtual Assistant</a></li>
                        <li><a href="#">Artificial Intelligence</a></li>
                    </ul>
                </div>
                <div class="company">
                    <h1>Company</h1>
                    <ul>
                        <li class="li-satu"><a href="#">About Us</a></li>
                        <li><a href="#">Newsletters</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="resources">
                    <h1>Resources</h1>
                    <ul>
                        <li class="li-satu"><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Ebook & Guide</a></li>
                    </ul>
                </div>
                <div class="follow">
                    <h1>Follow Us</h1>
                    <ul>
                        <li class="li-satu"><a href="#">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="prifacy">
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms & Conditions</a> |
                    <a href="#">Cookie Policy</a>
                </div>
                <div class="copyright">
                    <a href="#">&copy; Picko Lab 2022</a>
                </div>
            </div>
        </section>

        {{-- js --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        <script>
            let navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (document.documentElement.scrollTop > 20 ) {
                    navbar.classList.add('sticky');
                } else {
                    navbar.classList.remove('sticky');
                }
            });

        // stories1nd
            let btnToggle = document.getElementById('btn');
            let btnOne = document.querySelector('.b-one');
            let btnTwo = document.querySelector('.b-two');
                function leftClick() {
                    btnToggle.style.left = '0'
                    btnToggle.style.width = '169px'
                    btnOne.style.color = '#fff'
                    btnTwo.style.color = '#90a3bf'
                }
                function rightClick() {
                    btnToggle.style.left = '175px'
                    btnToggle.style.width = '192px'
                    btnOne.style.color = '#90a3bf'
                    btnTwo.style.color = '#fff'
                }

        // stores2nd
            let btnToggle2nd = document.getElementById('btn2nd');
            let btnOne2nd = document.querySelector('.b-one2nd');
            let btnTwo2nd = document.querySelector('.b-two2nd');
            function leftClicked() {
                    btnToggle2nd.style.left = '0'
                    btnToggle2nd.style.width = '169px'
                    btnOne2nd.style.color = '#fff'
                    btnTwo2nd.style.color = '#90a3bf'
                }
                function rightClicked() {
                    btnToggle2nd.style.left = '175px'
                    btnToggle2nd.style.width = '192px'
                    btnOne2nd.style.color = '#90a3bf'
                    btnTwo2nd.style.color = '#fff'
                }

        // swiperjs
        var swiper = new Swiper(".card_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
      });
        </script>
    </body>
</html>
