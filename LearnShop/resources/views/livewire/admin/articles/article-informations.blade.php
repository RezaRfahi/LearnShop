<div>
    <x-information.table-row>
        <td>
            <x-information.table-cell-pic src="{{ $article->image_path }}" alt="{{ $article->name }}" />
        </td>
        <x-information.table-cell>{{ $article->title }}</x-information.table-cell>
        <x-information.table-cell>{{ $article->user->name }}</x-information.table-cell>
        <x-information.table-cell>{{ $article->created_at }}</x-information.table-cell>
        <x-information.table-cell>{{ $article->view_count }}</x-information.table-cell>
        <x-information.table-cell>{{ $article->like_count }}</x-information.table-cell>
        <x-information.table-cell>{{ $article->commentCount }}</x-information.table-cell>
        <x-information.table-cell>
            <button wire:click="" class="btn-outline-success m-3">ویرایش</button>
            <button wire:click="deleteArticle({{ $article }})" class="btn-outline-danger m-3">حذف</button>
        </x-information.table-cell>
    </x-information.table-row>
</div>
