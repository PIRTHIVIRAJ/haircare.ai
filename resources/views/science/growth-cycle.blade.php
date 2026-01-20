@extends('layouts.article')

@section('title', 'Refe: Hair Growth Cycle')
@section('category', 'Science > Physiology')
@section('definition', 'The cyclical process of hair production, regression, and resting that occurs independently in each follicle.')

@section('evidence_badge')
    <span style="background: #e0f2fe; color: #0369a1; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px;">BIOLOGY</span>
    <span style="font-size: 0.75rem; color: var(--color-text-muted); margin-left: 0.5rem;">(Established Physiology)</span>
@endsection

@section('summary_what')
    A continuous sequence of physiological changes that dictate the length, thickness, and presence of hair shafts.
@endsection

@section('summary_facts')
    <ul style="padding-left: 1rem; margin: 0;">
        <li><strong>Anagen:</strong> Growth phase (2-7 years).</li>
        <li><strong>Catagen:</strong> Transition phase (2-3 weeks).</li>
        <li><strong>Telogen:</strong> Resting phase (3-4 months).</li>
        <li>Humans have asynchronous growth cycles (mosaic pattern).</li>
    </ul>
@endsection

@section('article_content')
    <h2 style="font-size: 1.5rem; margin-top: 2rem;">1. Anagen (Growth Phase)</h2>
    <p>The active phase of hair production. Matrix cells in the hair bulb divide rapidly, pushing the hair shaft up and out. In the scalp, this phase lasts 2 to 7 years and determines the maximum length of hair. Approximately 85-90% of scalp hair is in anagen at any given time [1].</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">2. Catagen (Transition Phase)</h2>
    <p>A short regression phase lasting 2-3 weeks. Cell division stops, and the follicle shrinks. The lower part of the follicle is destroyed, and the dermal papilla breaks away to rest below.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">3. Telogen (Resting Phase)</h2>
    <p>A dormant period lasting 3 to 4 months. The hair follicle is completely at rest, and the club hair is fully formed. About 10-15% of hairs are in this phase.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">4. Exogen (Shedding Phase)</h2>
    <p>Sometimes classified as part of telogen, this is when the old hair detach and falls out, typically aided by the new hair growing beneath it. Losing 50-100 hairs per day is considered normal physiological shedding.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Clinical Relevance</h2>
    <p>Disruptions to this cycle lead to hair loss. For example, <em>Telogen Effluvium</em> occurs when a stressor shifts a disproportionate number of follicles into telogen simultaneously. <em>Androgenetic Alopecia</em> involves a progressive shortening of the anagen phase.</p>
@endsection

@section('references')
    <ol style="padding-left: 1.2rem;">
        <li>Stenn, K. S., & Paus, R. (2001). Controls of hair follicle cycling. <em>Physiological Reviews</em>.</li>
        <li>Alonso, L., & Fuchs, E. (2006). The hair cycle. <em>Journal of Cell Science</em>.</li>
    </ol>
@endsection

@section('last_reviewed', 'December 2025')
