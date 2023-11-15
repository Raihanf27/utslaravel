<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" id="kode_barang"><br>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" id="nama_barang"><br>

    <label for="jenis_varian">Jenis Varian:</label>
    <input type="text" name="jenis_varian" id="jenis_varian"><br>

    <label for="qty">Qty:</label>
    <input type="number" name="qty" id="qty"><br>

    <label for="harga_jual">Harga Jual:</label>
    <input type="text" name="harga_jual" id="harga_jual"><br>

    <input type="submit" value="Simpan">
</form>
