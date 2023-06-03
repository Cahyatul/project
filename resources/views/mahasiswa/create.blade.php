<h1>Create Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="nim" placeholder="nim"><br>
    <select name="jenis_kelamin">
    <option value="">Pilih Jenis Kelamin</option>
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10"></textarea><br>
    <input type="submit" name="submit" value="save">
</form>