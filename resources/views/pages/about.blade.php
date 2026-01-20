@extends('layouts.app')

@section('title', 'About & Methodology | HairCare.ai')

@section('content')
<div class="container" style="padding: 4rem 0; max-width: 800px;">
    <h1 style="margin-bottom: 2rem;">About HairCare.ai</h1>
    <p style="font-size: 1.25rem; color: var(--color-text-secondary); margin-bottom: 3rem;">
        We are building a neutral, evidence-first layer of the internet for hair health. 
        Our mission is to replace marketing noise with clinical consensus.
    </p>

    <hr style="border: 0; border-top: 1px solid var(--color-border); margin-bottom: 3rem;">

    <section id="methodology" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.75rem;">Methodology</h2>
        <p>Our content is developed through a rigorous review of peer-reviewed literature, clinical guidelines, and consensus statements from major dermatological associations.</p>
        <p>We prioritize:</p>
        <ul style="line-height: 1.8;">
            <li>Systematic Reviews and Meta-Analyses (Level I Evidence)</li>
            <li>Randomized Controlled Trials (Level II Evidence)</li>
            <li>Established Biological Mechanisms (where clinical data is emerging)</li>
        </ul>
        <p>We explicitly exclude:</p>
        <ul style="line-height: 1.8;">
            <li>Brand-sponsored studies with conflict of interest</li>
            <li>Anecdotal evidence or "influencer" testimonials</li>
            <li>Unverified cosmetic claims</li>
        </ul>
    </section>

    <section id="standards" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.75rem;">Evidence Standards</h2>
        <div style="background: var(--color-bg-subtle); padding: 2rem; border-radius: var(--radius-md);">
            <div style="margin-bottom: 1.5rem;">
                <span style="background: #e0f2fe; color: #0369a1; font-weight: bold; padding: 2px 8px; border-radius: 4px;">HIGH</span>
                <p style="margin-top: 0.5rem; font-size: 0.95rem;">Accepted as standard of care. Backed by multiple robust studies.</p>
            </div>
            <div style="margin-bottom: 1.5rem;">
                <span style="background: #f1f5f9; color: #475569; font-weight: bold; padding: 2px 8px; border-radius: 4px;">MODERATE</span>
                <p style="margin-top: 0.5rem; font-size: 0.95rem;">Likely effective but requires more data or has mixed results.</p>
            </div>
            <div>
                <span style="background: #fff1f2; color: #be123c; font-weight: bold; padding: 2px 8px; border-radius: 4px;">LIMITED</span>
                <p style="margin-top: 0.5rem; font-size: 0.95rem;">Theoretical benefit or weak clinical data. Use with caution.</p>
            </div>
        </div>
    </section>

    <section id="policy" style="margin-bottom: 4rem;">
        <h2 style="font-size: 1.75rem;">Editorial Policy</h2>
        <p>HairCare.ai is completely independent. We do not accept payment for content, do not host advertisements, and do not use affiliate links.</p>
        <p>All medical content is subject to periodic review to ensure it reflects the latest scientific understanding.</p>
    </section>
</div>
@endsection
