<h2>Daftar Kategori</h2>
<table border="1" cellspacing="0" width="10%">
        <td>tambahkan data</td>
        <input onclik type="text">
<table border="1" cellspacing="0" width="100%">
    
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Detail</th>
        <th>Delete</th>
    </tr>

    @foreach ($kategori as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama_kategori}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>
        <form action="{{route('kategori.show',$data->id)}}" method="get">
            @csrf
            <button type="submit">Detail</button>
        </form>
    </td>
        </td>
        <td>
        <form action="{{route('kategori.destroy',$data->id)}}" method="post">
            @csrf @method('delete')
            <button type="submit">Hapus</button>
        </form>
    </td>
    </tr>
    @endforeach
</table>
