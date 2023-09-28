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
                {{ $i->socialMediaType->name }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content">
                {{ $i->link }}
            </div>
        </td>
        <td>
            <div class="userDatatable-content d-flex">
                <x-edit href="{{ route('social-media-site_edit_view', $i->id) }}" />
                <x-delete onclick="deleteData('{{ $i->id }}')" />
            </div>
        </td>
    </tr>
@endforeach
