<div>
    <x-slot name="title">
        <h1 class="m-0 text-dark">مدیریت مقالات</h1>
    </x-slot>
    <div class="container">

        <div class="col-sm-12 mb-2">
            <button wire:click="addArticleRedirect" class="btn btn-info " target="__blank">افزودن مقاله</button>
        </div>
        <hr>
        <div class>
            <x-input-text  wire:model.debounce.500ms="search" name="search" value="{{old('search')}}"
                       class="w-1/2 mb-2" placeholder="جستجو..."/>
            <button wire:click="changeFilter" class="btn-light mt-2"></i>جستجوی پیشرفته</button>
        </div>
        @if($filter_enabled)
        <x-filter-box>
            <x-filter-box-item>
                <label for="">مرتب بر اساس</label>
                <select wire:model="order" dir="ltr" style="text-align: center" class="form-control">
                    <option value=""></option>
                    <option value="created_at">تاریخ</option>
                    <option value="title">عنوان</option>
                    <option value="like_count">لایک</option>
                    <option value="view_count">بازدید</option>
                    <option value="commentCount">کامنت</option>
                </select>
            </x-filter-box-item>
            <x-filter-box-item>
            <label for="">لایک</label>
            <input class="form-control" type="number" name="minimumLike" placeholder="حداقل">
            <input class="form-control" type="number" name="maximumLike" placeholder="حداکثر">
            </x-filter-box-item>
            <x-filter-box-item>
                <label for="">کامنت</label>
                <input class="form-control" type="number" name="minimumComment" placeholder="حداقل">
                <input class="form-control" type="number" name="maximumComment" placeholder="حداکثر">
            </x-filter-box-item>
            <x-filter-box-item>
                <label for="">بازدید</label>
                <input class="form-control" type="number" name="minimumView" placeholder="حداقل">
                <input class="form-control" type="number" name="maximumView" placeholder="حداکثر">
            </x-filter-box-item>
        </x-filter-box>
        @endif
        <x-information.table>
            <x-slot name="tableHead">
            <tr>
                <x-information.table-head-cell/>
                @foreach($headers as $header)
                    <x-information.table-head-cell>
                        {{ $header }}
                    </x-information.table-head-cell>
                @endforeach
                <x-information.table-head-cell/>
            </tr>
            </x-slot>
            <tbody>
            @forelse($articles as $article)
                <livewire:admin.articles.article-informations :article="$article"/>
            @empty
                <x-information.table-row>
                    <td> هیچ موردی یافت نشد</td>
                </x-information.table-row>
            @endforelse
            </tbody>
        </x-information.table>
        <div class="d-flex mt-3">
            {!! $articles->links() !!}
        </div>

    </div>
</div>
