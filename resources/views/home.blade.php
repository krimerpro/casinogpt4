@extends('layouts.default')
@section('content')

<!-- Banner Section Starts Here -->
<section class="banner-section bg_img overflow-hidden" style="background:url({{ asset('images/banner/bg.png') }}) center">
    <div class="container">
        <div class="banner-wrapper d-flex flex-wrap align-items-center">
            <div class="banner-content">
                <h1 class="banner-content__title">Play <span class="text--base">CASINO GPT4</span> & Win Money Unlimited</h1>
                <p class="banner-content__subtitle">ONLINE CASINO GAME SUPPORTED BY GPT-4 - OPEN AI</p>
                <div class="button-wrapper">
                    <a href="https://pancakeswap.finance/swap" class="cmn--btn active btn--lg"><i class="las la-play"></i> BUY NOW</a>
                    <a href="https://t.me/" class="cmn--btn btn--lg">TELEGRAM GROUP</a>
                </div>
                <img src="{{ asset('images/banner/card.png') }}" alt="" class="shape1">
            </div>
            <div class="banner-thumb">
                <img src="{{ asset('images/banner/thumb.png') }}" alt="banner">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends Here -->


<!-- About Section Starts Here -->
<section id="about" class="about-section padding-top padding-bottom overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <h2 class="section-header__title">About The Casino</h2>
                        <p>A casino is a facility for certain types of gambling. Casinos are often built near or combined with hotels, resorts, restaurants, retail shopping, cruise ships, and other tourist attractions. Some casinos are also known for hosting live entertainment, such as stand-up comedy, concerts, and sports.</p>
                    </div>
                    <a href="#" class="cmn--btn active">Know More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="aobut-thumb section-thumb">
                    <img src="{{ asset('images/about/thumb.png') }}" alt="about" class="ms-lg-5">
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <img src="{{ asset('images/about/shape.png') }}" alt="about" class="shape shape1">
    </div>
</section>
<!-- About Section Ends Here -->


<section class="padding-top padding-bottom" id="game">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-header__title">UPCOMING GAME</h2>
                </div>
            </div>
        </div>

        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="game-details-left">
                    <div id="coin-flip-cont">
                        <div class="coins-wrapper">
                            <div class="front"><img src="{{ asset('images/game/head.png') }}" alt="game"></div>
                            <div class="back"><img src="{{ asset('images/game/tail.png') }}" alt="game"></div>
                        </div>
                    </div>
                    <div class="cd-ft"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="game-details-right">
                    <form id="game" novalidate="novalidate">
                        <h3 class="mb-4 text-center">Current Balance : <span class="base--color"><span class="bal">0</span> $CASINO</span></h3>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" name="invest" class="form-control form--control amount-field" placeholder="Enter amount">
                                <span class="input-group-text text-white bg--base" id="basic-addon2">CASINO</span>
                            </div>
                            <small class="form-text text-muted"><i class="fas fa-info-circle mr-2"></i>Minimum: 1 $CASINO | <span class="text-warning">Win Amount  1  %</span></small>
                        </div>
                        <div class="form-group mt-4 mt-sm-5 justify-content-center d-flex flex-wrap justify-content-between">
                            <div class="single-select head gmimg active">
                                <img src="{{ asset('images/game/head.png') }}" alt="game-image">
                            </div>
                            <div class="single-select tail gmimg">
                                <img src="{{ asset('images/game/tail.png') }}" alt="game-image">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button type="submit" class="cmn--btn active w-100 text-center" disabled>Play Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Us Section Starts Here -->
<section class="why-section padding-top padding-bottom overflow-hidden" id="features">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 col-xl-4">
                <div class="section-header mb-4">
                    <h2 class="section-header__title">Why Play Our Casino</h2>
                    <p>With Smart AI - GPT-4, you will play more efficient and win more money</p>
                </div>
            </div>
            <div class="col-lg-7 col-xl-7">
                <div class="row gy-4 gy-md-5 gy-lg-4 gy-xl-5">
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__thumb">
                                <i class="las la-shield-alt"></i>
                            </div>
                            <div class="why-item__content">
                                <h4 class="title">Secure Casino Games</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__thumb">
                                <i class="las la-dice-six"></i>
                            </div>
                            <div class="why-item__content">
                                <h4 class="title">Awesome Game State</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__thumb">
                                <i class="las la-trophy"></i>
                            </div>
                            <div class="why-item__content">
                                <h4 class="title">Higher Wining Chance</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="why-item">
                            <div class="why-item__thumb">
                                <i class="las la-coins"></i>
                            </div>
                            <div class="why-item__content">
                                <h4 class="title">Invest Win And Earn</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <img src="{{ asset('images/why/shape.png') }}" alt="why" class="shape shape1">
    </div>
</section>
<!-- Why Choose Us Section Ends Here -->


<!-- How Section Starts Here -->
<section class="how-section padding-top padding-bottom bg_img" style="background: url({{ asset('images/how/bg2.jpg') }});" id="howtoplay">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-header__title">How to Play Game</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <i class="las la-user-plus"></i>
                        <div class="badge badge--lg badge--round radius-50">01</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Sign Up First & Login</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <i class="las la-id-card"></i>
                        <div class="badge badge--lg badge--round radius-50">02</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Complete you Profile</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="how-item">
                    <div class="how-item__thumb">
                        <i class="las la-dice"></i>
                        <div class="badge badge--lg badge--round radius-50">03</div>
                    </div>
                    <div class="how-item__content">
                        <h4 class="title">Choose a Game & Play</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How Section Ends Here -->


<!-- Faq Section Starts Here -->
<section class="faq-section padding-top padding-bottom overflow-hidden" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6">
                <div class="section-header text-center">
                    <h2 class="section-header__title">Frequently Asked Questions</h2>
                    <p>A casino is a facility for certain types of gambling. Casinos are often built combined with hotels, resorts.</p>
                </div>
            </div>
        </div>
        <div class="faq-wrapper row justify-content-between">
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-item__title">
                        <h5 class="title">01. What is Cryptocurrency ?</h5>
                    </div>
                    <div class="faq-item__content">
                        <p>Cryptocurrency is a digital payment system that doesn't rely on banks to verify transactions. It’s a peer-to-peer system that can enable anyone anywhere to send and receive payments.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-item__title">
                        <h5 class="title">03. What is Pancakeswap ?</h5>
                    </div>
                    <div class="faq-item__content">
                        <p>PancakeSwap is a decentralized exchange native to BNB Chain. In other words, it shares some similarities with established platforms like UniSwap in that users can swap their coins for other coins without the input of middleman services.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-item__title">
                        <h5 class="title">02. What is BNB Chain ?</h5>
                    </div>
                    <div class="faq-item__content">
                        <p>The Binance Smart Chain (BSC) is now the BNB Chain. BSC, crypto exchange Binance’s layer-1 blockchain, recently announced the merger of the Binance Smart Chain and the Binance Chain to form the BNB Chain. </p>
                    </div>
                </div>
                <div class="faq-item mb-2 mb-lg-0">
                    <div class="faq-item__title">
                        <h5 class="title">04. Any Risk on Gambling ?</h5>
                    </div>
                    <div class="faq-item__content">
                        <p>Mental health issues. People who gamble compulsively often have substance misuse problems, personality disorders, depression or anxiety.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <img src="{{ asset('images/faq/shape.png') }}" alt="faq" class="shape shape1">
    </div>
</section>
<!-- Faq Section Ends Here -->


<!-- Top Investor & Winner Section Starts Here -->
<section class="top-section padding-top padding-bottom bg_img" style="background:url({{ asset('images/top/bg.png') }}) center">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-12">
                <div class="cla-wrapper text-center">
                    <h3 class="title mb-4">WIN !!! & <br> Get million dollars</h3>
                    <a href="#" class="cmn--btn active btn--md radius-0">COMING SOON</a>
                    <div class="thumb">
                        <img src="{{ asset('images/top/bg2.png') }}" alt="top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Investor & Winner Section Ends Here -->

@stop
