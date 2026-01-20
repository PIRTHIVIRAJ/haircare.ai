@extends('layouts.article')

@section('title', 'Hair Loss Medications')
@section('category', 'Treatment > Pharmacological')
@section('definition', 'Pharmaceutical agents designed to arrest hair loss or stimulate regrowth through specific biological mechanisms.')

@section('evidence_badge')
    <span style="background: #e0f2fe; color: #0369a1; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px;">VARIES</span>
    <span style="font-size: 0.75rem; color: var(--color-text-muted); margin-left: 0.5rem;">(Compound Dependent)</span>
@endsection

@section('summary_what')
    Chemical substances applied topically or taken orally to modify the hair growth cycle or androgenic activity at the follicle level.
@endsection

@section('summary_facts')
    <ul style="padding-left: 1rem; margin: 0;">
        <li>Minoxidil and Finasteride are the only FDA-approved drugs for AGA.</li>
        <li>Treatments must be continued indefinitely to maintain results.</li>
        <li>Systemic absorption varies by delivery method.</li>
    </ul>
@endsection

@section('article_content')
    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Overview</h2>
    <p>Pharmacological treatments for hair loss primarily target the hormonal pathways involved in miniaturization or mechanisms that stimulate the anagen phase of the hair cycle. Efficacy and safety profiles are well-established for regulatory-approved drugs, while off-label treatments carry different levels of evidence.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Minoxidil</h2>
    <p><strong>Mechanism:</strong> A potassium channel opener that causes hyperpolarization of cell membranes, leading to vasodilation and increased blood flow to follicles. It is thought to prolong the anagen phase and increase follicle size [1].</p>
    <p><strong>Usage:</strong> Topical solution or foam (2% - 5%). Oral minoxidil (off-label) is increasingly prescribed but carries a higher risk of systemic side effects.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Finasteride</h2>
    <p><strong>Mechanism:</strong> A type II 5-alpha-reductase inhibitor that reduces the conversion of testosterone to dihydrotestosterone (DHT) [2]. Lowering scalp DHT levels can arrest follicular miniaturization.</p>
    <p><strong>Usage:</strong> Oral tablet (1mg daily). Topical formulations are studied to reduce systemic exposure.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Dutasteride</h2>
    <p><strong>Mechanism:</strong> Inhibits both Type I and Type II 5-alpha-reductase isoenzymes. It is more potent than finasteride in reducing serum DHT but has a longer half-life.</p>
    <p><strong>Status:</strong> Approved for hair loss in some countries (e.g., South Korea, Japan) but off-label in the US/EU.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Safety Considerations</h2>
    <p>All medications carry potential risks. Finasteride is associated with sexual side effects in a small percentage of users. Minoxidil may cause hypertrichosis (unwanted hair growth) or cardiovascular changes. Consultation with a specialist is mandatory.</p>
@endsection

@section('references')
    <ol style="padding-left: 1.2rem;">
        <li>Messenger, A. G., & Rundegren, J. (2004). Minoxidil: mechanisms of action on hair growth. <em>British Journal of Dermatology</em>.</li>
        <li>Kaufman, K. D., et al. (1998). Finasteride in the treatment of men with androgenetic alopecia. <em>Journal of the American Academy of Dermatology</em>.</li>
    </ol>
@endsection

@section('last_reviewed', 'January 2026')
