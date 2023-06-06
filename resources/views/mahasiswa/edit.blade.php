<h1>Edit Data</h1>

<form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="nama" value="{{$mahasiswa->nama}}"><br>
    <input type="text" name="nim" placeholder="nim" value="{{$mahasiswa->nim}}"><br>
    <select name="jenis_kelamin">
    <option value="">Pilih Jenis Kelamin</option>
    <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
    <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10">{{$mahasiswa->alamat}}</textarea><br>
    <input type="submit" name="submit" value="save">
</form>