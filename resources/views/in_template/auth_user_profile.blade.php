@extends('layouts.base')

@section('title', 'Login')


@section('content')
    <!-- main content -->
    <div class="main-content right-chat-active">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="card w-100 border-0 p-0 bg-white shadow-xss rounded-xxl">
                            <div class="card-body h250 p-0 rounded-xxl overflow-hidden m-3"><img
                                    src="{{asset('base/images/u-bg.jpg')}}" alt="image"></div>
                            <div class="card-body p-0 position-relative">
                                <figure class="avatar position-absolute z-index-1" style="top:-40px; left: 30px; width: 100px; height: 100px; overflow: hidden;">
                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="{{asset($user->image)}}" alt="image"
                                         class="float-right p-1 bg-white rounded-circle w-100">
                                </figure>
                                @if($user->is_online)
                                    <div class="online-circle"></div>
                                @endif
                                <h4 class="fw-700 font-sm mt-2 mb-lg-5 mb-4 pl-15">{{$user->firstname}} {{$user->surname}}
                                    <span
                                        class="fw-500 font-xssss text-grey-500 mt-1 mb-3 d-block">{{$user->status}}</span>
                                </h4>
                                <div
                                    class="d-flex align-items-center justify-content-center position-absolute-md right-15 top-0 me-2">
                                    <a href="#"
                                       class="d-none d-lg-block bg-secondary p-3 z-index-1 rounded-3 text-white font-xsssss text-uppercase fw-700 ls-3">
                                        Редактировать</a>
                                    <a href="#"
                                       class="d-none d-lg-block bg-greylight btn-round-lg ms-2 rounded-3 text-grey-700"><i
                                            class="feather-mail font-md"></i></a>
                                    <a href="#" id="dropdownMenu4"
                                       class="d-none d-lg-block bg-greylight btn-round-lg ms-2 rounded-3 text-grey-700"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i
                                            class="ti-more font-md tetx-dark"></i></a>

                                </div>
                            </div>

                            <div class="card-body d-block w-100 shadow-none mb-0 p-0 border-top-xs">
                                <ul class="nav nav-tabs h55 d-flex product-info-tab border-bottom-0 ps-4" id="pills-tab"
                                    role="tablist">
                                    <li class="active list-inline-item me-5">
                                        <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block active"
                                           id="nav-1-tab" data-bs-toggle="tab"
                                           data-bs-target="#navtabs1" type="button" role="tab" aria-controls="navtabs1"
                                           aria-selected="true">Posts</a></li>
                                    <li class="list-inline-item me-5">
                                        <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                           id="nav-home-tab" data-bs-toggle="tab"
                                           data-bs-target="#navtabs2" type="button" role="tab" aria-controls="navtabs2"
                                           aria-selected="true">Create post</a></li>
                                    <li class="list-inline-item me-5">
                                        <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                           id="nav-home-tab" data-bs-toggle="tab"
                                           data-bs-target="#navtabs3" type="button" role="tab" aria-controls="navtabs2"
                                           aria-selected="true">Home</a></li>
                                    <li class="list-inline-item me-5">
                                        <a class="fw-700 font-xssss text-grey-500 pt-3 pb-3 ls-1 d-inline-block"
                                           id="nav-home-tab" data-bs-toggle="tab"
                                           data-bs-target="#navtabs4" type="button" role="tab" aria-controls="navtabs2"
                                           aria-selected="true">Home</a></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="tab-content row justify-content-center" id="nav-tabContent">
                        <div id="navtabs1" role="tabpanel" aria-labelledby="nav-profile-tab"
                             class="tab-pane fade show active col-xl-10 col-xxl-12 col-lg-8">
                            @if(count($user->posts)>0)
                                @foreach($user->posts as $post)
                                    <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                                        <div class="card-body p-0 d-flex">
                                            <figure class="avatar me-3" style="width: 45px; height: 45px; overflow: hidden;"><img style="width: 100%; height: 100%; object-fit: cover;" src="{{$user->image}}" alt="image"
                                                                             class="shadow-sm rounded-circle">
                                            </figure>
                                            <h4 class="fw-700 text-grey-900 font-xssss mt-1"><span
                                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{$post->created_at->diffForHumans()}}</span>
                                            </h4>
                                        </div>
                                        <div class="card-body p-0 mb-3 rounded-3 overflow-hidden">
                                            <a href="#" class="video-btn">
                                                <div class="float-right w-100">
                                                    <img src="{{asset($post->file)}}" alt="...">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-body p-0 me-lg-5">
                                            <p class="fw-500 text-grey-500 lh-26 font-xssss w-100 mb-2">{{$post->content}}</p>
                                        </div>
                                        <div class="card-body d-flex p-0">
                                            <a href="#"
                                               class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-3"><i
                                                    class="feather-thumbs-up text-white bg-primary-gradiant me-1 btn-round-xs font-xss"></i>
                                                <i class="feather-heart text-white bg-red-gradiant me-2 btn-round-xs font-xss"></i>2.8K
                                                Like</a>
                                            <a href="#"
                                               class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                                    class="feather-message-circle text-dark text-grey-900 btn-round-sm font-lg"></i>22
                                                Comment</a>
                                            <a href="#"
                                               class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                                    class="feather-share-2 text-grey-900 text-dark btn-round-sm font-lg"></i><span
                                                    class="d-none-xs">Share</span></a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div>
                                    <h3 class="text-center mt-3">No Posts Yet</h3>
                                </div>
                            @endif
                        </div>
                        {{--         create post --}}
                        <div id="navtabs2" role="tabpanel" aria-labelledby="nav-home2-tab"
                             class="tab-pane fade  col-xl-10  col-xxl-12 col-lg-8">
                            <form method="post" action="{{route('profile.create.post')}}" class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3 mt-3" >
                                @csrf
                                <div class="card-body p-0">
                                    <a href="#"
                                       class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i
                                       class="btn-round-sm font-xs text-primary feather-edit-3 me-2 bg-greylight">CP</i>Create Post</a>
                                </div>
                                <div class="card-body p-0 mt-3 position-relative">
                                    <input name="title" type="text" placeholder="title" class="h20 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg">
                                    <figure class="avatar position-absolute ms-2 mt-1 top-5"><img
                                            src="{{asset($user->image)}}"
                                            alt="image"
                                            class="shadow-sm rounded-circle w30">
                                    </figure>
                                    <textarea name="content"
                                              class="mt-2 h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                                              cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                                    <input class="h20 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg" type="file" name="file">
                                    <div class="card-body d-flex p-0 mt-0">
{{--                                        <span>is published <input class="form-check-input" value="true" type="checkbox" name="is_published" checked></span>--}}

                                        <button type="submit" style="border: none"  class="ms-auto mt-2">
                                            <i class="ti-more-alt text-grey-900 btn-round-md bg-greylight font-xss">go</i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="navtabs3" role="tabpanel" aria-labelledby="nav-contact-tab">
                            .3..
                        </div>
                        <div class="tab-pane fade" id="navtabs4" role="tabpanel" aria-labelledby="nav-contact-tab">
                            .4..
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- main content -->

    <!-- right chat -->
    <script>
        $('.chart').easyPieChart({
            easing: 'easeOutElastic',
            delay: 3000,
            barColor: '#3498db',
            trackColor: '#aaa',
            scaleColor: false,
            lineWidth: 5,
            trackWidth: 5,
            size: 50,
            lineCap: 'round',
            onStep: function (from, to, percent) {
                this.el.children[0].innerHTML = Math.round(percent);
            }
        });
    </script>
@endsection
