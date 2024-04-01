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
    <title>SASANDO | akun - login</title>
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
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login</h2>
                    <form action="/auths-authenticate" method="post" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Username</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan Username" autocomplete="off" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                                <span class="form-label-description">
                                    <a href="#" id="show_password">Tampilkan Password</a>
                                </span>
                            </label>

                            <input type="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Masukkan Password" autocomplete="off" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Belum memiliki akun? <a href="/auths-create" tabindex="-1">Buat Akun</a>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('template') }}/dist/js/tabler.min.js?1668287865" defer></script>
    <script src="{{ asset('template') }}/dist/js/demo.min.js?1668287865" defer></script>

    <!-- Jquery JS -->
    <script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugin') }}/sweetAlert2/sweetalert2.all.min.js"></script>

    <script>
        @if (Session::has('errMessage'))
            Swal.fire({
                icon: 'error',
                title: '{{ Session::get('errMessage') }}'
                // timer: 3000
            })
        @elseif (Session::has('succMessage'))
            Swal.fire({
                icon: 'success',
                title: '{{ Session::get('succMessage') }}'
                // timer: 3000
            })
        @endif

        $('#show_password').click(function() {
            var passwordInput = $('#password');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        });
    </script>
</body>

</html>
