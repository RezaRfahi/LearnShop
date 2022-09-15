<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">افزودن کاربر</h1>
    </x-slot>

    <form wire:submit.prevent="createUser">
    <div class="card mb-3">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">نام</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input wire:model="name" type="text" class="form-control" name="name" value={{ old('name') }}>
                </div>
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">ایمیل</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input wire:model="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">تلفن</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input wire:model="phone" type="tel" class="form-control" name="phone" value={{ old('phone') }}>
                </div>
                @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">رمز عبور</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input wire:model="password" type="password" name="password" class="form-control">
                </div>
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="Save">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
