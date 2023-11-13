@extends('templates.base_template')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="main__container">
        <div id="app">
            <div style="display: block;">
                <div class="sign-in-page">
                    <div class="sign-in-page__wrap">
                        <form id="spaAuthForm" action="{{ route('user.register') }}" method="post">
                            @csrf
                            <h2 class="sign-in-page__title">
                                Войти в аккаунт
                            </h2>
                            <div class="sign-in-page__login login">
                                <div class="login__phone form-block form-block--phone-dropdown">
                                    <input type="text" class="input-item" name="login" placeholder="Логин"/>
                                    @error('login')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="login__phone form-block form-block--phone-dropdown">
                                    <input type="text" class="input-item" name="password" placeholder="Пароль"/>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="login__phone form-block form-block--phone-dropdown">
                                    <input type="text" class="input-item" name="confirmPassword"
                                           placeholder="Подтверждение пароля"/>
                                    @error('confirmPassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="login__phone form-block form-block--phone-dropdown">
                                    <button type="button" class="login__btn btn-main-lg">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
