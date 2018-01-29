<?php

return [

    /*
     * List of folders to be analyzed.
     */
    'paths' => [
        base_path('app'),
        base_path('database'),
        base_path('tests'),
    ],

    /*
     * List of files/folders to be excluded from analysis.
     */
    'exclude' => [
        // base_path('app/helpers.php'),
        // base_path('app/Services'),
    ],

    /**
     * List of custom Component Classifiers.
     *
     * Your application may contain classes which follow a certain pattern.
     * With custom Component Classifier you can classifiy those
     * classes and treat them as first-class citizens
     * in the project analysis.
     */
    'custom_component_classifier' => [
        // \App\Classifiers\CustomerExportClassifier::class
    ],

    /*
     * The Strategy used to reject Classes from the project statistics.
     *
     * By default all Classes located in
     * the vendor directory are being rejected and don't
     * count to the statistics.
     *
     * The package ships with 2 strategies:
     * - \Wnx\LaravelStats\RejectionStrategies\RejectVendorClasses::class
     * - \Wnx\LaravelStats\RejectionStrategies\RejectInternalClasses::class
     *
     * If none of the default strategies fit for your usecase, you can
     * write your own class which implements the RejectionStrategy Contract.
     */
    'rejection_strategy' => \Wnx\LaravelStats\RejectionStrategies\RejectVendorClasses::class,

    /*
     * Namespaces which should be ignored.
     * Laravel Stats uses the `starts_with`-string helper, to
     * check if a Namespace should be ignored.
     *
     * You can use `Illuminate` to ignore the entire `Illuminate`-namespace
     * or `Illuminate\Support` to ignore a subset of the namespace.
     */
    'ignored_namespaces' => [
        'Wnx\LaravelStats',
        'Illuminate',
        'Symfony',
    ],

];
