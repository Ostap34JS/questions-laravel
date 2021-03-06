@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row flex-column pt-5 align-items-center">
        <div class="col-md-8">
            <div class="card card-block">
                <div class="card-header">
                    Скинути пароль
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="form-control-label" for="email">Емейл-адреса</label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}"
                                   placeholder="Введіть свій емейл " required autofocus>
                            @if ($errors->has('email'))
                                <small class="form-control-feedback invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary btn-block">Надіслати посилання для відновлення паролю</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
