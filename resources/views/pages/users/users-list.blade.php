<x-table-action :params="config('articles')" />

@if ($users->count() > 0)

    <x-table :params="config('users')" :records="$users" />
    {{ $articles->links('pagination.bulma') }}

@else
    {{-- <x-notification type="is-warning is-light" message="{!! config('articles.list.noitem') !!}" /> --}}


    <div class="notification is-warning is-light" >
        <p>{!! config('articles.list.noitem') !!}</p>
    </div>
@endif