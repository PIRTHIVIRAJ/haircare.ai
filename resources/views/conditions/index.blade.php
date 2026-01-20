@extends('layouts.app')

@section('title', 'Hair Conditions | HairCare.ai')

@section('content')
<div class="container" style="padding: 4rem 0;">
    <h1 style="margin-bottom: 2rem;">Hair & Scalp Conditions</h1>
    <p style="max-width: 800px; color: var(--color-text-secondary); margin-bottom: 3rem;">
        Comprehensive, evidence-based summaries of common and rare hair disorders. 
        Each entry covers pathophysiology, diagnosis, and standard-of-care treatments.
    </p>

    <h2 style="font-size: 1.5rem; border-bottom: 1px solid var(--color-border); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Hair Loss (Alopecias)</h2>
    
    <div class="grid grid-cols-3">
        <!-- Example Entry -->
        <a href="{{ url('/conditions/hair-loss/androgenetic-alopecia') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; transition: 0.2s; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">Androgenetic Alopecia</h3>
                <p class="text-sm text-muted">Male and Female Pattern Hair Loss</p>
                <div style="margin-top: 1rem;">
                    <span style="background: #e0f2fe; color: #0369a1; font-size: 0.70rem; font-weight: bold; padding: 2px 6px; border-radius: 4px;">HIGH EVIDENCE</span>
                </div>
            </div>
        </a>

        <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: #fafafa; color: var(--color-text-muted);">
            <h3 style="margin-top: 0;">Telogen Effluvium</h3>
            <p class="text-sm">Stress-related shedding (Coming Soon)</p>
        </div>

        <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: #fafafa; color: var(--color-text-muted);">
            <h3 style="margin-top: 0;">Alopecia Areata</h3>
            <p class="text-sm">Autoimmune condition (Coming Soon)</p>
        </div>
    </div>
</div>
@endsection
