
@extends('layout.login')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 col-sm-12 p-3 m-auto">
            <h2>Login Administrador</h2>
            <form method="POST" action="{{ route('admin_login_submit') }}">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Senha:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite sua senha">
                </div>
                @if(Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <strong>{{ Session::get('error') }} </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="form-check mb-3">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembre-me</label>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">{{ __('Login') }}</button>
            </form>
        </div>
        <div class="col-md-6 col-sm-12 text-center m-auto">
            <h3>Entre para atualizar seu Portfólio</h3>
            <p>Matenha-se sempre atualizado.</p>
        </div>
    </div>
</div>
@endsection
