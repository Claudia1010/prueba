@php $num_pages = session()->get('num_pages') @endphp
<div class="row">
    <div class="col-5"></div>
    <div class="col-2 d-flex justify-content-center">
        <select name="num_pages" class="form-control text-center w-25" id="num_pages"
        data-cosas="{{ $num_pages }}">
            @foreach(\App\Helpers\Configuration::PAGINATION_ARRAY as $number)
            <option value="{{ $number }}"
                @if (isset($num_pages) && $num_pages == $number) selected="selected" @endif>
                {{ $number }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="col-5 d-flex justify-content-end">
        {{ $items->links() }}
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#num_pages").on('change', function () {
            var value = $(this).val();
            $.post("{{ route('pagination.set') }}", { _token: '{{ csrf_token() }}', value: value }, function( data ) {
                location.reload();
            });
        });
    });
</script>
