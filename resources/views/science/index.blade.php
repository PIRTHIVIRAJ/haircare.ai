@extends('layouts.app')

@section('title', 'Hair Science & Biology | HairCare.ai')

@section('content')
<div class="container" style="padding: 4rem 0;">
    <h1 style="margin-bottom: 2rem;">Hair Science & Biology</h1>
    <p style="max-width: 800px; color: var(--color-text-secondary); margin-bottom: 3rem;">
        Understanding the biological foundations of hair health. These articles cover the anatomy of the follicle, 
        the physiology of growth cycles, and the genetic factors determining hair characteristics.
    </p>

    <div class="grid grid-cols-3">
        <!-- Anatomy -->
        <a href="{{ url('/science/anatomy') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">Follicular Anatomy</h3>
                <p class="text-sm text-muted">Structure of the hair shaft, bulb, and dermal papilla.</p>
            </div>
        </a>

        <!-- Growth Cycles -->
        <a href="{{ url('/science/growth-cycle') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">The Growth Cycle</h3>
                <p class="text-sm text-muted">Anagen, Catagen, Telogen, and Exogen phases.</p>
            </div>
        </a>

        <!-- Genetics -->
        <a href="{{ url('/science/genetics') }}" style="text-decoration: none; color: inherit;">
            <div style="border: 1px solid var(--color-border); padding: 1.5rem; border-radius: var(--radius-md); background: white; height: 100%;">
                <h3 style="margin-top: 0; color: var(--color-link);">Genetics & Hormones</h3>
                <p class="text-sm text-muted">Role of DNA, androgens, and other signaling molecules.</p>
            </div>
        </a>
    </div>
</div>
@endsection
