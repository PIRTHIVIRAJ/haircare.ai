@extends('layouts.app')

@section('title', 'Treatments & Interventions | HairCare.ai')

@section('content')
<div class="container" style="padding: 4rem 0;">
    <h1 style="margin-bottom: 2rem;">Treatments & Interventions</h1>
    <p style="max-width: 800px; color: var(--color-text-secondary); margin-bottom: 3rem;">
        An index of established medical, procedural, and lifestyle interventions for hair disorders. 
        Each entry describes the mechanism of action, efficacy data, and safety profile based on clinical consensus.
    </p>

    <div class="grid grid-cols-3">
        <!-- Medications -->
        <a href="{{ url('/treatments/medications') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%; transition: all 0.2s;">
                <h3 style="margin-top: 0; color: var(--color-link);">Medications</h3>
                <p class="text-sm text-muted">Pharmacological interventions including Minoxidil, Finasteride, and Corticosteroids.</p>
                <div style="margin-top: 1rem;">
                    <span style="background: #fdfdfd; border: 1px solid var(--color-border); color: var(--color-text-secondary); font-size: 0.70rem; padding: 2px 6px; border-radius: 4px;">FDA APPROVED</span>
                    <span style="background: #fdfdfd; border: 1px solid var(--color-border); color: var(--color-text-secondary); font-size: 0.70rem; padding: 2px 6px; border-radius: 4px;">OFF-LABEL</span>
                </div>
            </div>
        </a>

        <!-- Procedures -->
        <a href="{{ url('/treatments/procedures') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">Procedures</h3>
                <p class="text-sm text-muted">Surgical and clinical procedures including Hair Transplantation, PRP, and LLLT.</p>
            </div>
        </a>

        <!-- Lifestyle -->
        <a href="{{ url('/treatments/lifestyle') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">Lifestyle & Nutrition</h3>
                <p class="text-sm text-muted">Dietary supplements, stress management, and scalp hygiene protocols.</p>
            </div>
        </a>
    </div>
</div>
@endsection
