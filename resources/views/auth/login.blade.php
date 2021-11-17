
@extends('layout.login')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 col-sm-12 p-3 m-auto">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pwd">Senha:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite sua senha">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembre-me</label>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-sm btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </form>
        </div>
        <div class="col-md-6 col-sm-12 text-center m-auto">
            <h3>Faça seu Login</h3>
            <p>Matenha-se sempre atualizado e divirta-se.</p>
            <!--<img src="assets/img/article8.png" class="img-fluid" alt="header_login.png">-->
        </div>
    </div>
</div>
@endsection
