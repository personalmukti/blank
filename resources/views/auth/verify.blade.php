@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verifikasi alamat Email anda.</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Link verifikasi sudah dikirim ke email anda.
                            </div>
                        @endif
                        <p>
                            Sebelum melanjutkan, cek email verifikasi yang kami kirimkan. Jika anda belum menerimanya,
                        </p>
                        <a href="{{ route('verification.resend') }}">klik di sini untuk mendapatkannya lagi.</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
