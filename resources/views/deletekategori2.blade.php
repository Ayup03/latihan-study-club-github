<table border="1" cellspacing="0" width="100%">
    <tr>

    </tr>
@foreach($kategori as $data)

<tr>
    <td>{{ $data->id}}</td>
    <td>{{ $data->nama_kategori}}</td>
    <td>{{ $data->deskripsi}}</td>
    <td>
        <form action="{{route('kategori.destroy',$data->id)}}" method="post">
            @csrf @method('delete')
            <button type="submit">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>