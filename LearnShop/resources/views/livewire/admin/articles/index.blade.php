<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">مدیریت مقالات</h1>
    </x-slot>
    <div class="container">

        <div class="col-sm-12 mb-2">
            <button wire:click="addArticleRedirect" class="btn btn-info " target="__blank">افزودن مقاله</button>
        </div>
        <hr>
        <x-input-text  wire:model.debounce.500ms="search" name="search" value="{{old('search')}}"
                       class="w-1/2 mb-2" placeholder="جستجو..."/>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">عنوان</th>
                <th scope="col">منتشرکننده</th>
                <th scope="col">تاریخ انتشار</th>
                <th scope="col">تعداد بازدید</th>
                <th scope="col">تعداد لایک</th>
                <th scope="col">تعداد کامنت</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>
                        <div class="image">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $article->image_path }}" alt="{{ $article->name }}" />
                        </div>
                    </td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->view_count }}</td>
                    <td>{{ $article->like_count }}</td>
                    <td>{{ $article->commentCount }}</td>
                    <td>
                        <button wire:click="" class="btn-outline-success m-3">ویرایش</button>
                        <button wire:click="" class="btn-outline-danger m-3">حذف</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td> هیچ موردی یافت نشد</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="d-flex">
            {!! $articles->links() !!}
        </div>
    </div>
</div>
