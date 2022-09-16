<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">مشخصات کاربر</h1>
    </x-slot>
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src={{ $user->getProfilePhotoUrlAttribute() }} alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
{{--                                    <p class="text-secondary mb-1">Full Stack Developer</p>--}}
{{--                                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>--}}
{{--                                    <button class="btn btn-primary">Follow</button>--}}
{{--                                    <button class="btn btn-outline-primary">Message</button>--}}
                                    <button wire:click="deletePhoto()" class="btn btn-outline-primary" @disabled($user->image_path=='')>
                                        حذف تصویر
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                        <h6 class="d-flex align-items-center">دوره های ثبت نام شده</h6>
                        {{$user_purchase=$user->userCourses()->paginate(5)}}
                        <ul class="list-group list-group-flush">
                            @forelse($user_purchase as $purchase)
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a class="list-group-item list-group-item-action list-group-item-light">
                                <img src={{ $purchase->image_path }} width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></img>
                                <h6 class="mt-1.5" href="/"><span class="text-secondary">{{$purchase->title}}</span></h6>
                                </a>
                            </li>
                                <hr>
                            @empty
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6>
                                        <span class="text-secondary">دوره ای موجود نیست</span>
                                    </h6>
                                </li>
                            @endforelse
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">نام</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value='{{ $user->name }}'>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ایمیل</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" name="email" class="form-control" value={{ $user->email }}>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">تلفن</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="tel" class="form-control" name="phone" value={{ $user->phone_number }}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="button" class="btn btn-primary px-4" value="ذخیره">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                    <livewire:admin.user.reset-password :user="$user" />
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3">مقاله های منتشر شده</h6>
                                    {!! $user_aticles = $user->articles()->paginate(2) !!}
                                    <ul class="list-group list-group-flush">
                                    @forelse($user_aticles as $article)
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <a class="list-group-item list-group-item-action list-group-item-light">
                                                    <img src={{ $article->image_path }} width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></img>
                                                    <h6 class="mt-1.5" href="/"><span class="text-secondary">{{$article->title}}</span></h6>
                                                </a>
                                            </li>
                                            <hr>
                                        @empty
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6>
                                                    <span class="text-secondary">مقاله ای موجود نیست</span>
                                                </h6>
                                            </li>
                                    @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3">دوره های منتشر شده</h6>
                                    {!! $user_courses = $user->courses()->paginate(2) !!}
                                    <ul class="list-group list-group-flush">
                                        @forelse($user_courses as $course)
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <a class="list-group-item list-group-item-action list-group-item-light">
                                                    <img src={{ $course->image_path }} width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></img>
                                                    <h6 class="mt-1.5" href="/"><span class="text-secondary">{{$course->title}}</span></h6>
                                                </a>
                                            </li>
                                            <hr>
                                        @empty
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6>
                                                    <span class="text-secondary">دوره ای موجود نیست</span>
                                                </h6>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
