@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="wrap hero-grid">

        {{-- LEFT: copy --}}
        <div class="hero-copy">
            <div class="hero-badge"><i class="bi bi-lightning-charge-fill"></i> Quick Commerce · Puducherry</div>
            
            <h1>Your neighbourhood stores, <em>delivered fast.</em></h1>

            <p class="lead">Sprithi Digital Mart brings local vendors, self&nbsp;help groups and families together on one platform. Order from shops you know — delivered in as little as 30&nbsp;minutes.</p>

            <div class="cta-row">
                <a href="{{ route('contact') }}" class="btn">Become a vendor <i class="bi bi-arrow-right"></i></a>
                <a href="{{ route('about') }}" class="btn btn-ghost">How we work</a>
            </div>

            {{-- Social proof row --}}
            <div class="hero-proof">
                <div class="proof-avatars">
                    <span class="av av1"></span>
                    <span class="av av2"></span>
                    <span class="av av3"></span>
                    <span class="av av4"></span>
                </div>
                <div class="proof-text">
                    <strong>500+ vendors</strong> already onboarded<br>
                    <span class="proof-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span> loved by the community
                </div>
            </div>

            <div class="trust">
                <span><i class="bi bi-lightning-charge-fill"></i>30 min delivery</span>
                <span><i class="bi bi-shield-check"></i>Pay shop directly</span>
                <span><i class="bi bi-gift-fill"></i>Rewards every order</span>
            </div>
        </div>

        {{-- RIGHT: image stage --}}
        <div class="stage">
            <div class="stage-box">
                {{-- Background blob --}}
                <div class="hero-blob"></div>

                {{-- Main photo card --}}
                <div class="hero-img-wrap">
                    <img src="{{ asset('images/hero-photo.jpg') }}" alt="Sprithi — fresh local groceries delivered fast">
                    {{-- Overlay gradient fade at bottom --}}
                    <div class="hero-img-fade"></div>
                </div>

                {{-- Floating cards snugly positioned around the photo --}}
                <div class="tag a"><i class="bi bi-bicycle"></i>Out for delivery</div>
                <div class="tag b">
                    <div class="tag-inner">
                        <i class="bi bi-clock-fill"></i>
                        <div><strong>30 min</strong><small>avg delivery</small></div>
                    </div>
                </div>
                <div class="tag c"><i class="bi bi-shop"></i>Shop local</div>

                {{-- Order notification pop --}}
                <div class="hero-notif">
                    <div class="notif-ico"><i class="bi bi-bag-check-fill"></i></div>
                    <div>
                        <strong>New order placed!</strong>
                        <small>Fresh vegetables · ₹320</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="marq" aria-hidden="true"><div>
    @for($i = 0; $i < 2; $i++)
        <span><i class="bi bi-lightning-charge-fill"></i>Quick commerce</span>
        <span><i class="bi bi-lightning-charge-fill"></i>Local vendors</span>
        <span><i class="bi bi-lightning-charge-fill"></i>Women entrepreneurs</span>
        <span><i class="bi bi-lightning-charge-fill"></i>Self help groups</span>
        <span><i class="bi bi-lightning-charge-fill"></i>Shop local, grow local</span>
        <span><i class="bi bi-lightning-charge-fill"></i>Earn together</span>
    @endfor
</div></div>

<section class="stats"><div class="wrap stat-grid">
    <div class="stat"><b data-count="30" data-suffix=" min">0</b><span>Fastest delivery</span></div>
    <div class="stat"><b data-count="3" data-suffix="%">0</b><span>Grocery commission</span></div>
    <div class="stat"><b data-count="100" data-suffix="%">0</b><span>Payments go to the vendor</span></div>
    <div class="stat"><b data-count="30" data-suffix=" days">0</b><span>Notice to leave, no lock-in</span></div>
</div></section>

<section>
    <div class="wrap">
        <div class="center rv">
            <h2>Everything a local shop needs to sell online</h2>
            <p class="lead">We handle the platform, the promotion and the support, so you can focus on your products and your customers.</p>
        </div>
        <div class="grid3">
            @foreach([
                ['bi-shop-window','Online marketplace','Get your store in front of customers in your area, with your own catalogue and prices.'],
                ['bi-lightning-charge','Quick delivery','Orders reach customers between 30 minutes and 4 hours, with delivery coordination on our side.'],
                ['bi-megaphone','Digital marketing','Facebook, WhatsApp and Instagram campaigns that bring new shoppers to your door.'],
                ['bi-clipboard-check','Order management','Simple help with receiving, confirming and fulfilling every order.'],
                ['bi-headset','Customer support','Our team answers customer questions so you do not have to.'],
                ['bi-mortarboard','Vendor training','Hands-on guidance to get comfortable with selling digitally.'],
            ] as [$icon,$title,$text])
                <div class="card rv"><div class="ico"><i class="bi {{ $icon }}"></i></div><h3>{{ $title }}</h3><p>{{ $text }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<section class="steps">
    <div class="wrap">
        <div class="center rv"><h2>From shelf to doorstep in three steps</h2><p class="lead">Simple for vendors. Easy for customers.</p></div>
        <div class="step-row">
            <div class="step rv"><div class="n">1</div><h3>Customer orders</h3><p>Shoppers browse nearby stores and place an order in a few taps.</p></div>
            <div class="step rv"><div class="n">2</div><h3>Vendor confirms</h3><p>The shop accepts the order and packs it, with our team coordinating delivery.</p></div>
            <div class="step rv"><div class="n">3</div><h3>Paid directly</h3><p>Cash or online, the money goes straight to the vendor. It never passes through us.</p></div>
        </div>
    </div>
</section>

<section>
    <div class="wrap split">
        <div class="rv">
            <h2>Keep what you earn. Pay only when you sell.</h2>
            <p class="lead">Our platform commission on groceries is just 3%, charged only on successful sales. Customers pay your bank account, UPI ID or QR code directly.</p>
            <ul class="ticks">
                <li><i class="bi bi-check-circle-fill"></i>No customer money held by Sprithi</li>
                <li><i class="bi bi-check-circle-fill"></i>No commission on cancelled orders</li>
                <li><i class="bi bi-check-circle-fill"></i>Your business stays fully independent</li>
            </ul>
        </div>
        <div class="bill rv">
            <h3>A ₹1,000 grocery order</h3>
            <div class="row"><span>Order value</span><span>₹1,000</span></div>
            <div class="row"><span>Platform commission (3%)</span><span>₹30</span></div>
            <div class="row big"><span>You receive</span><span>₹970</span></div>
            <small>Commission applies only on successful sales.</small>
        </div>
    </div>
</section>

<section class="band">
    <div class="wrap center rv">
        <h2>Customers love rewards. Vendors love repeat orders.</h2>
        <p class="lead">Sprithi runs customer programmes from its own platform revenue, and vendors can offer Digital Reward Points in their own promotions.</p>
        <div class="pills" style="justify-content:center">
            <span>Loyalty cashback</span><span>Referral benefits</span><span>Shopping rewards</span><span>Lucky draws</span><span>Festival offers</span><span>Digital reward points</span>
        </div>
    </div>
</section>

<section class="cta">
    <div class="wrap"><div class="cta-box rv">
        <h2>Ready to take your store online?</h2>
        <p>Join Sprithi Digital Mart and let your neighbourhood shop with you every day.</p>
        <a href="{{ route('contact') }}" class="btn">Talk to our team <i class="bi bi-arrow-right"></i></a>
    </div></div>
</section>
@endsection
