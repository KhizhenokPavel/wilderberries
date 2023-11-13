@extends('templates.base_template')

@section('content')
    <div class="main__container">
        <div id="app">
            <div style="display: block"></div>
            <div class="main-page">
                <div class="main-page__content-wrapper">
                    <div class="main-page__content">
                        @for($i = 0; $i < 10; $i++)
                            @include('components.product.publicArticle')
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
