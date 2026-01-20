@extends('layouts.app')

@section('content')
<div class="container" style="padding: 2rem 0; max-width: 800px;">
    
    <!-- 1. Page Header -->
    <header style="margin-bottom: 2rem;">
        <div style="font-size: 0.875rem; color: var(--color-text-muted); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em;">
            @yield('category', 'Condition')
        </div>
        <h1 style="font-size: 2.25rem; font-weight: 700; color: var(--color-text-primary); margin-bottom: 0.5rem;">
            @yield('title')
        </h1>
        <p style="font-size: 1.25rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            @yield('definition')
        </p>
        
        <!-- 3. Evidence Level (Moved up for visibility) -->
        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1.5rem;">
            <span style="font-size: 0.875rem; font-weight: 500;">Evidence Level:</span>
            @yield('evidence_badge')
        </div>
    </header>

    <!-- 2. Summary Panel -->
    <div style="background: var(--color-bg-subtle); border-left: 4px solid var(--color-accent-blue); padding: 1.5rem; margin-bottom: 3rem; border-radius: 0 var(--radius-md) var(--radius-md) 0;">
        <h3 style="margin-top: 0; font-size: 1.125rem; margin-bottom: 1rem;">Clinical Summary</h3>
        <div class="grid" style="gap: 1.5rem; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
            <div>
                <strong style="display: block; font-size: 0.875rem; color: var(--color-text-muted); margin-bottom: 0.25rem;">What is it?</strong>
                <span style="font-size: 0.95rem;">@yield('summary_what')</span>
            </div>
            <div>
                <strong style="display: block; font-size: 0.875rem; color: var(--color-text-muted); margin-bottom: 0.25rem;">Key Facts</strong>
                <span style="font-size: 0.95rem;">@yield('summary_facts')</span>
            </div>
        </div>
    </div>

    <!-- 4. Detailed Sections -->
    <article style="line-height: 1.7; font-size: 1rem; color: var(--color-text-primary);">
        @yield('article_content')
        <!-- Note: Inline citations should be like [1], [2] handled in content -->
    </article>

    <hr style="margin: 3rem 0; border: 0; border-top: 1px solid var(--color-border);">

    <!-- 6. References -->
    <section>
        <h3 style="font-size: 1.25rem; margin-bottom: 1rem;">References & Methodology</h3>
        <div style="font-size: 0.875rem; color: var(--color-text-secondary);">
            @yield('references')
        </div>
    </section>

    <!-- 7. Metadata -->
    <footer style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid var(--color-border); font-size: 0.875rem; color: var(--color-text-muted); display: flex; justify-content: space-between;">
        <div>
            Last Reviewed: @yield('last_reviewed', date('F Y'))
        </div>
        <div>
           Editorial Responsibility: HairCare.ai Medical Standards
        </div>
    </footer>

</div>
@endsection
