<div>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">تصویر</th>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">شماره تلفن</th>
                <th scope="col">اعمال</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <div class="image">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                        </div>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <button class="btn-outline-secondary m-3">نمایش</button>
                        <button class="btn-outline-success m-3">تغییر</button>
                        <button class="btn-outline-danger m-3">حذف</button>
                    </td>
                </tr>
            @endforeach
{{--                @empty($users)--}}
{{--                    <tr>--}}
{{--                        <th هیچ موردی یافت نشد</th>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>
    </div>
</div>
