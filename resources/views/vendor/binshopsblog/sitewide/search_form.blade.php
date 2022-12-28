<div class='search-form-outer'>
    <form class="search_form" method='get' action='{{route("binshopsblog.search", app('request')->get('locale'))}}' class='text-center'>
        {{-- <h4>Поиск по блогу:</h4> --}}
        <input class="search_input" type='text' name='s' placeholder='Поиск по блогу' class='form-control' value='{{\Request::get("s")}}'>
        {{-- <input class="search_submit" type='submit' value='Найти' class='btn btn-primary m-2'> --}}
        <button id="search-submit" type="submit" class="search_submit" title="Поиск">
            <img alt="Поиск" class="search" src="/content/search.svg" width="18" height="18">
        </button>
    </form>
</div>