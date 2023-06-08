@extends('layouts.base')

@section('title', 'Редактировать профиль')

@section('content')

    <div class="main-content bg-lightblue theme-dark-bg right-chat-active">

        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="middle-wrap">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                            <a href="default-settings.html" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Редактировать профиль</h4>
                        </div>
                        <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 text-center">
                                    <figure class="avatar ms-auto me-auto mb-0 mt-2 w100">
                                        <div class="image-container">
                                            <img src="{{ asset($user->image) }}" alt="image" id="user-profile" class="rounded-3 w-100">
                                            <div class="image-caption">
                                                Изменить фото
                                            </div>
                                        </div>
                                    </figure>

                                    <h2 class="fw-700 font-sm text-grey-900 mt-3">{{ $user->firstname . " " . $user->surname }}</h2>
                                    <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4">{{ $user->username }}</h4>
                                </div>
                            </div>

                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Имя *</label>
                                            <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" placeholder="Имя (обязательно)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Фамилия</label>
                                            <input type="text" class="form-control" name="surname" placeholder="Фамилия (необязательно)" value="{{ $user->surname }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Имя пользователя *</label>
                                        <input type="text" class="form-control" placeholder="Имя пользователя*" name="status" value="{{ $user->username }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Электронный адрес *</label>
                                            <input type="text" class="form-control" placeholder="Эл. адрес" name="email" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">День рождение</label>
                                            <input type="date" value="{{ $user->birthday }}" class="form-control" placeholder="День рождение" name="birthday">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Биография</label>
                                        <textarea name="bio" class="form-control mb-0 p-3 h100 lh-16" rows="5">{{ $user->bio }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Краткая информация</label>
                                        <input type="text" class="form-control" placeholder="Расскажите о себе" name="status" value="{{ $user->status }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Пол</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="" @if($user->gender == null) selected @endif>Выберите пол</option>
                                                <option value="Мужской" @if($user->gender == 'Мужской') selected @endif>Мужской</option>
                                                <option value="Женский" @if($user->gender == 'Женский') selected @endif>Женский</option>
                                                <option value="Другой" @if($user->gender == 'Другой') selected @endif">Другой</option>
                                                <option value="Предпочитаю не указывать" @if($user->gender == 'Предпочитаю не указывать') selected @endif">Предпочитаю не указывать</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Произношение</label>
                                            <input type="text" class="form-control" name="pronounce" placeholder="Произношение" value="{{ $user->pronounce }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Save</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- <div class="card w-100 border-0 p-2"></div> -->
                </div>
            </div>

        </div>
    </div>

@endsection
