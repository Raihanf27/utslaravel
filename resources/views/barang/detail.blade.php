<h2>Detail Barang</h2>
<p>Kode Barang: {{ $barang->kode_barang }}</p>
<p>Nama Barang: {{ $barang->nama_barang }}</p>
<p>Jenis Varian: {{ $barang->jenis_varian }}</p>
<p>Qty: {{ $barang->qty }}</p>
<p>Harga Jual per Item: {{ $barang->harga_jual }}</p>

<hr>

<p>Total Harga: {{ $totalHarga }}</p>
<p>Diskon: {{ $diskon }}%</p>
<p>Harga Setelah Diskon: {{ $hargaSetelahDiskon }}</p>
