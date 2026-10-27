@extends('layouts.app')
@section('title', 'About us')

@section('content')

{{-- ── PAGE HERO: split layout with image ────────────────── --}}
<section class="about-hero">
    <div class="wrap about-hero-grid">
        <div class="about-hero-copy rv">
            <div class="about-badge"><i class="bi bi-geo-alt-fill"></i> Puducherry · Est. 2024</div>
            <h1>One digital marketplace for the whole neighbourhood</h1>
            <p class="lead" style="margin-top:18px">Sprithi Digital Mart is a local commerce and quick commerce platform that connects vendors, retailers, self help groups, manufacturers, service providers and customers.</p>
            <div class="about-stats-row">
                <div class="astat"><b>30 min</b><span>Fastest delivery</span></div>
                <div class="astat"><b>3%</b><span>Commission only</span></div>
                <div class="astat"><b>100%</b><span>Direct payments</span></div>
            </div>
        </div>
        <div class="about-hero-img rv">
            <div class="about-img-card">
                <img src="{{ asset('images/about-realistic.jpg') }}" alt="Sprithi — local vendors and community commerce">
            </div>
            <div class="about-float-tag"><i class="bi bi-shop-window"></i> Local shops, online</div>
        </div>
    </div>
</section>

{{-- ── MISSION / BELIEF / MONEY cards ─────────────────────── --}}
<section class="about-cards-section">
    <div class="wrap">
        <div class="about-cards-grid">

            <div class="about-card rv">
                <div class="about-card-num">01</div>
                <div class="about-card-body">
                    <div class="about-card-icon"><i class="bi bi-bullseye"></i></div>
                    <h3>What we do</h3>
                    <p>We bring local businesses online as vendor partners, so their products and services can be sold digitally and delivered quickly.</p>
                </div>
            </div>

            <div class="about-card rv">
                <div class="about-card-num">02</div>
                <div class="about-card-body">
                    <div class="about-card-icon"><i class="bi bi-eye"></i></div>
                    <h3>What we believe</h3>
                    <p>Local businesses grow when they have the same digital reach as big brands, without giving up their independence.</p>
                </div>
            </div>

            <div class="about-card rv">
                <div class="about-card-num">03</div>
                <div class="about-card-body">
                    <div class="about-card-icon"><i class="bi bi-credit-card-2-front"></i></div>
                    <h3>How money flows</h3>
                    <p>Customers pay the vendor directly. Sprithi never collects or settles customer purchase payments.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ── BUILT FOR PEOPLE grid ──────────────────────────────── --}}
<section class="band">
    <div class="wrap">
        <div class="center rv"><h2>Built for people, not just platforms</h2><p class="lead">Our goal is to make community commerce stronger on every street.</p></div>
        <div class="grid3">
            @foreach([
                ['bi-shop','Promote local commerce','Keep spending and earning inside the community.'],
                ['bi-gender-female','Support women entrepreneurs','Give women-led businesses a ready digital storefront.'],
                ['bi-people','Strengthen self help groups','Open a wider market for SHG products and services.'],
                ['bi-briefcase','Create local jobs','Delivery, support and operations roles close to home.'],
                ['bi-phone','Encourage digital adoption','Training and support for first-time online sellers.'],
                ['bi-heart','Grow community commerce','A marketplace where neighbours help each other earn.'],
            ] as [$icon,$title,$text])
                <div class="card rv"><div class="ico"><i class="bi {{ $icon }}"></i></div><h3>{{ $title }}</h3><p>{{ $text }}</p></div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── QUOTE ───────────────────────────────────────────────── --}}
<section>
    <div class="wrap">
        <div class="quote rv">"Let local businesses grow. Let communities prosper. Let digital commerce reach <b>every street, every village, every family.</b>"</div>
    </div>
</section>

{{-- ── CTA ─────────────────────────────────────────────────── --}}
<section class="cta">
    <div class="wrap"><div class="cta-box rv">
        <h2>Shop local. Grow local. Earn together.</h2>
        <p>Partner with us or ask us anything. We reply fast.</p>
        <a href="{{ route('contact') }}" class="btn">Contact us <i class="bi bi-arrow-right"></i></a>
    </div></div>
</section>

@endsection
