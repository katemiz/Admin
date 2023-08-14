<section class="section container">

    <x-title :title="$title" :subtitle="$subtitle" />

    @if (session()->has('message'))
        <div class="notification">
            {{ session('message') }}
        </div>
    @endif

    {{-- LISTING --}}
    @if ($isList)
        @include('pages.users.users-list')
    @endif

    {{-- FORM --}}
    @if ($isAdd || $isEdit)
        @include('pages.users.users-form')
    @endif

    {{-- VIEW --}}
    @if ($isView)
        @include('pages.users.users-view')
    @endif

</section>



