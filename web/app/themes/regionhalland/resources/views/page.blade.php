@extends('layouts.app')

@section('content')
    
        <div class="rh-xpad-A pt3 pb3 clearfix center" style="max-width: 1440px;background: #FBFAF9">
        <div class="rh-xpad-B pt3 pb3" style="max-width: 1152px;background: white;">
            <main>
                <div class="clearfix">
                    <div class="pl4 col col-12 md-col-1 hidden-sm">
                        &nbsp;
                    </div>
                    <div class="col col-12 md-col-9 rh-article">
                        @while(have_posts()) @php(the_post())
                        <h1>{{ $post->post_title }}</h1><br><br>
                        {{ the_content() }}
                        @endwhile
                    </div>
                    <div class="pl4 col col-12 md-col-2 hidden-sm">
                        &nbsp;
                    </div>
                </div>
            </main>
        </div>
    </div>


@endsection
