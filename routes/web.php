<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// --- Conditions ---
Route::get('/conditions', function () {
    return view('conditions.index');
});
Route::get('/conditions/hair-loss/androgenetic-alopecia', function () {
    return view('conditions.hair-loss.androgenetic-alopecia');
});
// Placeholders for other conditions to avoid 404s
Route::get('/conditions/hair-loss/telogen-effluvium', function () { return view('layouts.article', ['title' => 'Telogen Effluvium', 'definition' => 'Available Soon', 'summary_what' => 'Coming soon', 'summary_facts' => 'Coming soon']); });
Route::get('/conditions/hair-loss/alopecia-areata', function () { return view('layouts.article', ['title' => 'Alopecia Areata', 'definition' => 'Available Soon', 'summary_what' => 'Coming soon', 'summary_facts' => 'Coming soon']); });


// --- Treatments ---
Route::get('/treatments', function () {
    return view('treatments.index');
});
Route::get('/treatments/medications', function () {
    return view('treatments.medications');
});
Route::get('/treatments/procedures', function () {
    return view('layouts.article', [
        'title' => 'Hair Restoration Procedures', 
        'definition' => 'Clinical interventions for hair restoration.',
        'summary_what' => 'Surgical and non-surgical procedures.',
        'summary_facts' => 'Includes Hair Transplants, PRP, etc.'
    ]); 
});
Route::get('/treatments/lifestyle', function () {
    return view('layouts.article', [
        'title' => 'Lifestyle & Nutrition', 
        'definition' => 'Non-medical interventions.',
        'summary_what' => 'Diet, stress management, and hygiene.',
        'summary_facts' => 'Supportive care for hair health.'
    ]); 
});


// --- Science ---
Route::get('/science', function () {
    return view('science.index');
});
Route::get('/science/growth-cycle', function () {
    return view('science.growth-cycle');
});
Route::get('/science/anatomy', function () {
    return view('layouts.article', [
        'title' => 'Follicular Anatomy', 
        'definition' => 'Structure of the hair unit.',
        'summary_what' => 'Microscopic structure.',
        'summary_facts' => 'Bulb, shaft, papilla.'
    ]); 
});
Route::get('/science/genetics', function () {
    return view('layouts.article', [
        'title' => 'Genetics & Hormones', 
        'definition' => 'Hereditary factors.',
        'summary_what' => 'DNA influence on hair.',
        'summary_facts' => 'Polygenic inheritance.'
    ]); 
});


// --- About ---
Route::get('/about', function () {
    return view('pages.about');
});

// --- FIX ROUTE (One-time use) ---
Route::get('/install-fix', function () {
    $dbPath = database_path('database.sqlite');
    
    // 1. Create SQLite File
    if (!file_exists($dbPath)) {
        touch($dbPath);
        chmod($dbPath, 0777); // Permissive for initial setup
        $msg = "Created database.sqlite.<br>";
    } else {
        $msg = "Database file already exists.<br>";
    }

    // 2. Fix Database Directory Permissions
    if (is_dir(database_path())) {
        chmod(database_path(), 0775);
    }

    // 3. Fix Storage Permissions
    $folders = [
        storage_path(),
        storage_path('app'),
        storage_path('framework'),
        storage_path('framework/views'),
        storage_path('framework/cache'),
        storage_path('framework/sessions'),
        storage_path('logs'),
        base_path('bootstrap/cache')
    ];

    foreach ($folders as $folder) {
        if (!is_dir($folder)) {
            mkdir($folder, 0775, true);
        }
        chmod($folder, 0775);
    }
    $msg .= "Fixed permissions.<br>";

    // 4. Run Migrations
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        $msg .= "Migrations run successfully: " . \Illuminate\Support\Facades\Artisan::output() . "<br>";
    } catch (\Exception $e) {
        $msg .= "Migration Failed: " . $e->getMessage() . "<br>";
    }

    return $msg . "<strong>DONE. Go back to Home.</strong>";
});
