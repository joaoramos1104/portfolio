@extends('layout.login')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3 p-3">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite o e-mail cadastrado">
                    <div id="emailHelp" class="form-text">Entre cmo e-mail para recuperação de senha.</div>
                    <button type="submit" class="btn btn-sm btn-warning mt-3">{{ __('Send Password Reset Link') }}</button>
                    <a class="btn btn-sm btn-secondary mt-3" href="{{ route('login') }}">Login</a>
                </form>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Aviso! </strong>  {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-md-6 col-sm-12 text-center m-auto">
                <h3>Recupere sua senha</h3>
                <p>Com um click você recupera seu acesso, você receberá um email.</p>
                <p> Siga os passos e matenha-se sempre atualizado.</p>
            </div>
        </div>
    </div>
@endsection
