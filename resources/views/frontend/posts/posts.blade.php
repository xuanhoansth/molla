@extends('frontend.templates.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="page-header text-center" style="background-image: url('{{asset('layouts/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">Blog </h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="page-content">
            <div class="container">
                <nav class="blog-nav">
                    <ul class="menu-cat entry-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All Blog Posts<span>9</span></a></li>
                        <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                        <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                        <li><a href="#" data-filter=".fashion">Fashion<span>2</span></a></li>
                        <li><a href="#" data-filter=".travel">Travel<span>4</span></a></li>
                        <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                    </ul><!-- End .blog-menu -->
                </nav><!-- End .blog-nav -->

                <div class="entry-container" data-layout="fitRows">
                    @foreach($posts as $row)
                    <div class="entry-item lifestyle shopping col-sm-6 col-lg-4">
                        <article class="entry entry-mask">
                            <figure class="entry-media">
                                <a href="/posts-detail/{{{$row->id}}}">
                                    <img src="{{asset('layouts/images/blog/post-4.jpg')}}">
{{--                                    <img  src="{{asset('storage/' . $row->images)}}" alt="">--}}
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    {{date('d-m-Y', strtotime($row->created_at))}}
                                    <span class="meta-separator">|</span>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="/posts-detail/{{$row->id}}">{{$row->posts_title}}</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in @if($row->posts_category_id === 1) {{'Review'}}
                                    @elseif($row->posts_category_id === 2) {{'Làm đẹp'}}
                                    @else {{'Chăm sóc sức khỏe'}}
                                    @endif
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                    @endforeach
                </div><!-- End .entry-container -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{$posts->links()}}
                    </ul>
                </nav>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
@endsection
