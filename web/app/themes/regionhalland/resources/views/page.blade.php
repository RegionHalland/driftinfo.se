@extends('layouts.app')

@section('content')
    
    <div class="mx-auto" style="max-width: 1440px;">
        <div class="center pt3 pb4" style="max-width:1152px;">
            <main id="main">
                @while(have_posts()) @php(the_post())
                    <h1>{{ the_title() }}</h1>
                    <article class="rh-article pr6">
                        {!! the_content() !!}
                    </article>
                @endwhile
            </main>
        </div>
    </div>

@endsection
