@extends('layouts.base')

@section('title', 'Список популярных групп')

@section('content')

    <div class="main-content right-chat-active">

        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3">
                            <div class="card-body d-flex align-items-center p-0">
                                <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Список всех групп</h2>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight theme-dark-bg border-0" placeholder="Поиск..">
                                </div>
                                <a href="#" class="btn-round-md ms-2 bg-greylight theme-dark-bg rounded-3"><i class="feather-filter font-xss text-grey-500"></i></a>
                            </div>
                        </div>

                        <div class="row ps-2 pe-1">

                            @foreach($groups as $group)
                                <div class="col-md-6 col-sm-6 pe-2 ps-2">
                                    <div class="card d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3">
                                        <div class="card-body position-relative h100 bg-image-cover bg-image-center" style="background-image: url({{ asset('base/images/bb-16.png') }});"></div>
                                        <div class="card-body d-block w-100 pl-10 pe-4 pb-4 pt-0 text-left position-relative">
                                            <figure class="avatar position-absolute z-index-1" style="top:-40px; left: 15px; width: 80px; height: 80px; overflow: hidden"><img src="{{ asset($group->file) }}" alt="image" class="float-right p-1 bg-white rounded-circle" style="width: 100%; height: 100%; object-fit: cover"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xsss mt-3 mb-1">{{ Str::limit($group->name, 25, '...') }}</h4>
                                            <p class="fw-500 font-xsssss text-grey-500 mt-0 mb-3">{{ Str::limit($group->slug, 25, '...') }}</p>
                                            <span class="position-absolute right-15 top-0 d-flex align-items-center">
                                                <form action="{{ route('groups.subscribe', $group->id) }}" method="post">
                                                    @csrf
                                                    <button class="btn text-center p-2 @if(Auth::check() && Auth::user()->groupsIn->contains($group->id)) bg-greylight text-black @else bg-current text-white @endif font-xsss">@if(Auth::check() && Auth::user()->groupsIn->contains($group->id)) Вы подписаны @else Подписаться@endif</button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="col-md-12 pe-2 ps-2">
                                <div class="card w-100 text-center shadow-xss rounded-xxl border-0 p-4 mb-3 mt-0">
                                    <div class="snippet mt-2 ms-auto me-auto" data-title=".dot-typing">
                                        <div class="stage">
                                            <div class="dot-typing"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
