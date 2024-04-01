<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Maintenance mode - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
    </title>
    <!-- CSS files -->
    <link href="{{ asset('template') }}/dist/css/tabler.min.css?1668287865" rel="stylesheet" />
    <link href="{{ asset('template') }}/dist/css/tabler-flags.min.css?1668287865" rel="stylesheet" />
    <link href="{{ asset('template') }}/dist/css/tabler-payments.min.css?1668287865" rel="stylesheet" />
    <link href="{{ asset('template') }}/dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet" />
    <link href="{{ asset('template') }}/dist/css/demo.min.css?1668287865" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
    </style>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('plugin') }}/fontawesome-6.5.1/css/all.min.css">
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <script src="{{ asset('template') }}/dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-img">
                    <i class="fa-solid fa-person-circle-question fa-8x"></i>
                </div>
                <p class="empty-title">
                    {{ Auth::user()->name . ', anda harus memiliki Role terlebih dahulu untuk melanjutkan.' }}</p>
                <p class="empty-subtitle text-muted">
                    Hubungi Super User untuk menentukan Role pada akun anda.
                </p>
                <div class="empty-action">
                    <a href="/auths-logout" class="btn btn-primary">
                        <i class="fa-solid fa-arrow-left me-2"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('template') }}/dist/js/tabler.min.js?1668287865" defer></script>
    <script src="{{ asset('template') }}/dist/js/demo.min.js?1668287865" defer></script>
</body>

</html>
