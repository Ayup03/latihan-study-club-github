<h2>Detail Kategori</h2>

 <p><b>Nama Kategori</b> : {{$kategori->nama_kategori}}</p>  
 <p><b>Deskripsi</b> : {{$kategori->deskripsi}}</p>  
<a href="{{route('kategori.index')}}">kembali ke Index</a>
<a href="{{route('kategori.edit', $kategori->id)}}">Edit kategori</a>
    
