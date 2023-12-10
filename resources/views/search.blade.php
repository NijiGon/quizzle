
<div class="w-100">
    @if (count($results) > 0)
        <ul class="m-0 p-0 w-100 d-flex flex-column align-items-center ">
            @foreach ($results as $result)
                <li class="list-unstyled py-2 w-100 text-start ps-3"><a class="text-dark" style="font-family: Din" href="{{ route('category.details', ['id' => $result->id]) }}">{{ $result->name }}</a></li>
                @if ($loop->index !== $results->count() - 1)
                    <hr class="m-0" style="width: 90%">
                @endif
            @endforeach
        </ul>
    @else
        <p class="py-2 w-100 text-center m-0" style="font-family: Din">Tidak ditemukan.</p>
    @endif
</div>

