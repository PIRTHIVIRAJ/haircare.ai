@extends('layouts.app')

@section('title', 'HairCare.ai | Neutral Evidence-Based Design')

@section('content')
<section style="padding: 4rem 0; background: linear-gradient(to bottom, #ffffff, #f4f6f8);">
    <div class="container text-center">
        <h1 style="font-size: 2.5rem; color: var(--color-text-primary); margin-bottom: 1rem;">Evidence-based knowledge on hair and scalp health</h1>
        <p style="font-size: 1.25rem; color: var(--color-text-secondary); max-width: 600px; margin: 0 auto 2rem;">
            A neutral, non-commercial resource identifying the consensus on hair disorders, treatments, and biology.
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem;">
            <div style="background: white; padding: 0.5rem 1rem; border: 1px solid var(--color-border); border-radius: 20px; font-size: 0.875rem; color: var(--color-text-muted);">
                <span style="color: var(--color-accent-blue); font-weight: bold;">✓</span> 100% Evidence Based
            </div>
            <div style="background: white; padding: 0.5rem 1rem; border: 1px solid var(--color-border); border-radius: 20px; font-size: 0.875rem; color: var(--color-text-muted);">
                <span style="color: var(--color-accent-blue); font-weight: bold;">✓</span> No Product Sales
            </div>
            <div style="background: white; padding: 0.5rem 1rem; border: 1px solid var(--color-border); border-radius: 20px; font-size: 0.875rem; color: var(--color-text-muted);">
                <span style="color: var(--color-text-secondary); font-weight: bold;">Dr.</span> Reviewed
            </div>
        </div>
    </div>
</section>

<section class="container" style="padding: 4rem 0;">
    <h2 style="font-size: 1.5rem; margin-bottom: 2rem; border-bottom: 2px solid var(--color-bg-subtle); padding-bottom: 0.5rem;">Core Knowledge Pillars</h2>
    
    <div class="grid grid-cols-3">
        <!-- Card 1 -->
        <div style="border: 1px solid var(--color-border); padding: 2rem; border-radius: var(--radius-md); background: white;">
            <h3 style="margin-top: 0;">Conditions</h3>
            <p class="text-muted">Structured analysis of alopecia types and scalp disorders.</p>
            <ul style="padding-left: 1.2rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
                <li>Androgenetic Alopecia</li>
                <li>Telogen Effluvium</li>
                <li>Seborrheic Dermatitis</li>
            </ul>
            <a href="{{ url('/conditions') }}" class="btn btn-outline" style="font-size: 0.875rem;">Browse Conditions &rarr;</a>
        </div>

        <!-- Card 2 -->
        <div style="border: 1px solid var(--color-border); padding: 2rem; border-radius: var(--radius-md); background: white;">
            <h3 style="margin-top: 0;">Treatments</h3>
            <p class="text-muted">Mechanisms of action and efficacy data for interventions.</p>
            <ul style="padding-left: 1.2rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
                <li>Pharmacological</li>
                <li>Procedural</li>
                <li>Lifestyle & Nutrition</li>
            </ul>
            <a href="{{ url('/treatments') }}" class="btn btn-outline" style="font-size: 0.875rem;">Explore Treatments &rarr;</a>
        </div>

        <!-- Card 3 -->
        <div style="border: 1px solid var(--color-border); padding: 2rem; border-radius: var(--radius-md); background: white;">
            <h3 style="margin-top: 0;">Hair Science</h3>
            <p class="text-muted">Foundational biology of the follicle and growth cycles.</p>
            <ul style="padding-left: 1.2rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
                <li>Anatomy</li>
                <li>Growth Cycles</li>
                <li>Genetics</li>
            </ul>
            <a href="{{ url('/science') }}" class="btn btn-outline" style="font-size: 0.875rem;">Learn Biology &rarr;</a>
        </div>
    </div>
</section>

<section style="background: var(--color-bg-subtle); padding: 4rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="font-size: 1.5rem; margin-bottom: 1.5rem;">How we grade evidence</h2>
            <p style="margin-bottom: 2rem; color: var(--color-text-secondary);">
                Every claim on HairCare.ai is backed by a specific level of evidence. We do not use marketing terms.
            </p>
            
            <div style="display: flex; gap: 1rem; flex-direction: column;">
                <div style="display: flex; align-items: baseline; gap: 1rem;">
                    <span style="background: #e0f2fe; color: #0369a1; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; width: 80px; text-align: center;">HIGH</span>
                    <span style="color: var(--color-text-secondary);">Supported by randomized controlled trials (RCTs) or systematic reviews.</span>
                </div>
                <div style="display: flex; align-items: baseline; gap: 1rem;">
                    <span style="background: #f1f5f9; color: #475569; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; width: 80px; text-align: center;">MODERATE</span>
                    <span style="color: var(--color-text-secondary);">Supported by smaller studies, in-vitro data with strong mechanistic grounding.</span>
                </div>
                <div style="display: flex; align-items: baseline; gap: 1rem;">
                    <span style="background: #fff1f2; color: #be123c; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; width: 80px; text-align: center;">LIMITED</span>
                    <span style="color: var(--color-text-secondary);">Anecdotal, theoretical, or mixed usage without robust clinical confirmation.</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
