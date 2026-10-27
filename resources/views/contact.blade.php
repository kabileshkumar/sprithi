@extends('layouts.app')
@section('title', 'Contact us')

@section('content')

{{-- ── CONTACT HERO ─────────────────────────────────────── --}}
<section class="contact-hero">
    <div class="wrap contact-hero-grid">

        <div class="contact-hero-copy rv">
            <div class="about-badge"><i class="bi bi-headset"></i> We reply fast</div>
            <h1>Let's get your business online</h1>
            <p class="lead" style="margin-top:16px">Tell us a little about yourself and our team will call you back. Prefer to talk now? Call us on the numbers below.</p>

            <div class="contact-info-pills">
                <a href="tel:+919442025515" class="contact-pill">
                    <span class="contact-pill-ico"><i class="bi bi-telephone-fill"></i></span>
                    <div><strong>+91 94420 25515</strong><small>Call us directly</small></div>
                </a>
                <a href="tel:+919345133867" class="contact-pill">
                    <span class="contact-pill-ico"><i class="bi bi-telephone-fill"></i></span>
                    <div><strong>+91 93451 33867</strong><small>Alternate number</small></div>
                </a>
                <div class="contact-pill">
                    <span class="contact-pill-ico"><i class="bi bi-geo-alt-fill"></i></span>
                    <div><strong>Villianur, Puducherry</strong><small>605110</small></div>
                </div>
            </div>
        </div>

        <div class="contact-hero-img rv">
            <div class="contact-img-card">
                <img src="{{ asset('images/contact-illustration.jpg') }}" alt="Sprithi team — ready to help you">
            </div>
            <div class="contact-float-tag"><i class="bi bi-lightning-charge-fill"></i> Quick response guaranteed</div>
        </div>

    </div>
</section>

{{-- ── CONTACT FORM + INFO ───────────────────────────────── --}}
<section style="padding-top:30px">
    <div class="wrap contact-grid">
        <div class="info">
            <div class="card rv"><div class="ico"><i class="bi bi-telephone-fill"></i></div><div><h3>Call us</h3><p>+91 94420 25515<br>+91 93451 33867</p></div></div>
            <div class="card rv"><div class="ico"><i class="bi bi-globe2"></i></div><div><h3>Website</h3><p>sprithi.com</p></div></div>
            <div class="card rv"><div class="ico"><i class="bi bi-geo-alt-fill"></i></div><div><h3>Registered office</h3><p>No. 23, 2nd Cross, Sakthi Nagar, Kottaimedu, Villianur, Puducherry 605110</p></div></div>
            <div class="card rv"><div class="ico"><i class="bi bi-building"></i></div><div><h3>Corporate office</h3><p>No. 18, Mangalambal Nagar, Kottaimedu, Villianur, Puducherry 605110</p></div></div>
        </div>

        <form class="card rv" method="POST" action="{{ route('contact.send') }}" novalidate>
            @csrf
            @if(session('success'))<div class="ok"><i class="bi bi-check-circle-fill"></i> {{ session('success') }}</div>@endif
            <div class="f">
                <div><label for="name">Full name</label><input id="name" name="name" value="{{ old('name') }}" required>@error('name')<div class="err">{{ $message }}</div>@enderror</div>
                <div><label for="phone">Phone number</label><input id="phone" name="phone" value="{{ old('phone') }}" required>@error('phone')<div class="err">{{ $message }}</div>@enderror</div>
                <div><label for="email">Email (optional)</label><input id="email" type="email" name="email" value="{{ old('email') }}">@error('email')<div class="err">{{ $message }}</div>@enderror</div>
                <div><label for="type">I am a</label>
                    <select id="type" name="type">
                        @foreach(['Vendor','Customer','SHG','Other'] as $t)<option value="{{ $t }}" @selected(old('type') === $t)>{{ $t === 'SHG' ? 'Self help group' : $t }}</option>@endforeach
                    </select>
                </div>
                <div class="full"><label for="message">How can we help?</label><textarea id="message" name="message" required>{{ old('message') }}</textarea>@error('message')<div class="err">{{ $message }}</div>@enderror</div>
                <div class="full"><button class="btn" type="submit">Send message <i class="bi bi-send-fill"></i></button></div>
            </div>
        </form>
    </div>
</section>

@endsection
