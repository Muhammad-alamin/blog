@extends('layouts.front.master')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 single-content">
                    <p class="mb-5">
                        <img src="{{ asset($post->image) }}" alt="Image" class="img-fluid">
                    </p>
                    <h1 class="mb-4">
                        {{ $post->title }}
                    </h1>
                    <div class="post-meta d-flex mb-5">
                        <div class="bio-pic mr-3">
                            <img src="{{ asset($post->author->photo) }}" alt="Image" class="img-fluidid">
                        </div>
                        <div class="vcard">
                            <span class="d-block"><a href="#">{{ $post->author->name }}</a> in <a href="#">{{ $post->category->name }}</a></span>
                            <span class="date-read">{{ date('M d',strtotime($post->created_at)) }} <span class="mx-1">&bullet;</span> {{ $post->total_read }} <span class="icon-star2"></span></span>
                        </div>
                    </div>
                    <p>{{ $post->details }}</p>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="section-title">
                        <h2>Popular Posts</h2>
                    </div>
                    @foreach($popular_posts as $id=>$post)
                        @include('front._withOutImageWithSerial')
                    @endforeach

                    <p>
                        <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
