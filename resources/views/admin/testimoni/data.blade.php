@if (count($datas) == 0)
    <tr>
        <td colspan="20">
            <div class="userDatatable-content text-center">
                No data
            </div>
        </td>
    </tr>
@endif
@foreach ($datas as $key => $i)
    <tr>
        <td>
            <div class="userDatatable-content">
                {{ $key + $datas->firstitem() }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content">
                {{ $i->client_name }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content">
                {{ strlen($i->message) > 100 ? substr($i->message, 0, 100) . '...' : $i->message }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content d-flex">
                <x-edit href="{{ route('testimoni_edit_view', $i->id) }}" />
                <x-delete onclick="deleteData('{{ $i->id }}')" />
            </div>
        </td>
    </tr>
@endforeach
