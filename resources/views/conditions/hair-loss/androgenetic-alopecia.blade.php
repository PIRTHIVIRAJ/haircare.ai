@extends('layouts.article')

@section('title', 'Androgenetic Alopecia')
@section('category', 'Condition > Hair Loss')
@section('definition', 'A genetically determined, progressive form of hair loss characterized by follicular miniaturization and a shortening of the anagen phase.')

@section('evidence_badge')
    <span style="background: #e0f2fe; color: #0369a1; font-weight: bold; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px;">HIGH</span>
    <span style="font-size: 0.75rem; color: var(--color-text-muted); margin-left: 0.5rem;">(Consensus Established)</span>
@endsection

@section('summary_what')
    Also known as pattern hair loss, this is the most common cause of hair loss in adults, affecting both men and women.
@endsection

@section('summary_facts')
    <ul style="padding-left: 1rem; margin: 0;">
        <li>Affects up to 50% of men by age 50.</li>
        <li>Mediated by dihydrotestosterone (DHT) in genetically susceptible follicles.</li>
        <li>Progressive without intervention.</li>
    </ul>
@endsection

@section('article_content')
    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Background</h2>
    <p>Androgenetic alopecia (AGA) is a distinct clinical entity characterized by the progressive transformation of terminal hair follicles into vellus hair follicles. This process, known as follicular miniaturization, results in shorter, finer, and less pigmented hair shafts [1].</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Pathophysiology</h2>
    <p>The condition is androgen-dependent. In susceptible individuals, the enzyme 5-alpha-reductase converts testosterone into dihydrotestosterone (DHT). DHT binds to androgen receptors in the dermal papilla of hair follicles, triggering a shortening of the anagen (growth) phase and a prolongation of the latent phase [2]. Unlike other forms of alopecia, the total number of follicles remains relatively constant, but their quality and hair production capability diminish.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Clinical Presentation</h2>
    <ul>
        <li><strong>Male Pattern:</strong> Typically involves recession of the frontal hairline and thinning of the vertex/crown. Classified using the Norwood-Hamilton scale.</li>
        <li><strong>Female Pattern:</strong> Often presents as diffuse thinning over the mid-frontal scalp with preservation of the frontal hairline. Classified using the Ludwig scale.</li>
    </ul>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Diagnosis</h2>
    <p>Diagnosis is primarily clinical, based on the pattern of hair loss and family history. Dermoscopy (trichoscopy) is frequently used to identify hair diameter diversity (anisotrichosis), which is a hallmark of the condition [3]. Blood tests may be indicated in women to rule out hormonal imbalances such as PCOS.</p>

    <h2 style="font-size: 1.5rem; margin-top: 2rem;">Treatment Overview</h2>
    <p>Treatments aim to arrest progression and induce regrowth. Efficacy varies by individual.</p>
    <ul>
        <li><strong>Topical Minoxidil:</strong> A potassium channel opener that prolongs anagen. Available over-the-counter.</li>
        <li><strong>5-Alpha-Reductase Inhibitors:</strong> Oral medications (e.g., finasteride) that reduce systemic or tissue-level DHT. Requires prescription.</li>
        <li><strong>Low-Level Laser Therapy (LLLT):</strong> Light-based therapy that may stimulate cellular activity.</li>
        <li><strong>Surgical Restoration:</strong> Follicular unit transplantation or extraction for permanent redistribution of follicles.</li>
    </ul>
    <p style="font-style: italic; color: var(--color-text-muted);">Note: All treatments have potential side effects and should be discussed with a medical professional.</p>
@endsection

@section('references')
    <ol style="padding-left: 1.2rem;">
        <li>Lolli, F., et al. (2017). Androgenetic alopecia: a review. <em>Endocrine</em>, 57(1), 9-17.</li>
        <li>Adil, A., & Godwin, M. (2017). The effectiveness of treatments for androgenetic alopecia: A systematic review and meta-analysis. <em>Journal of the American Academy of Dermatology</em>, 77(1), 136-141.</li>
        <li>Rudnicka, L., et al. (2012). Trichoscopy: A new method for diagnosing hair loss. <em>Journal of Drugs in Dermatology</em>.</li>
    </ol>
@endsection

@section('last_reviewed', 'October 2025')
