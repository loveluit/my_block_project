@extends('font_end.master')

@section('content')

 <!--section-heading-->
 <div class="section-heading " >
    <div class="container-fluid">
        <div class="section-heading-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading-2-title ">
                        <h1>All Authors</h1>
                        <p class="links"><a href="index.html">Home <i class="las la-angle-right"></i></a> pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--blog-layout-1-->
<div class="authors ">
    <div class="container-fluid">
        <div class="authors-area">
            <div class="row">
                <!--author-1-->
                @foreach ($list as $author_list )


                <div class="col-md-6 ">
                    <div class="authors-single">
                        <div class="authors-single-image">
                            <a href="author.html">
                                @if ($author_list->image!=null)
                            <img src="{{ asset('uploads/author') }}/{{ $author_list->image }}" alt="">
                            @else
                            <img src="{{ asset('Font_end') }}/assets/img/author/1.jpg" alt="">
                            @endif
                            </a>
                        </div>
                        <div class="authors-single-content ">
                            <div class="left">
                                <h6> <a href="author.html">{{$author_list->name  }}</a></h6>
                                <p >{{ $author_list->rel_to_post->count() }}</p>
                            </div>
                            <div class="right">
                                <div class="more-icon">
                                    <i class="las la-angle-double-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


                <!--/-->
            </div>
        </div>
    </div>
</div>


<!--pagination-->
<div class="pagination">
    <div class="container-fluid">
        <div class="pagination-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-list">
                        <ul class="list-inline">
                            <li><a href="#" ><i class="las la-arrow-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" ><i class="las la-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
