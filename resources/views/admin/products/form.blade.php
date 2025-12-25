<style>
    .form-control,
    .form-select {
        border-radius: 10px;
    }

    label {
        font-weight: 500;
        margin-bottom: 5px;
    }
</style>

<div class="row g-3">

    <!-- NAMA -->
    <div class="col-md-6">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control"
            placeholder="Contoh: Cincin Emas 24K"
            value="{{ old('nama', $product->nama ?? '') }}">
    </div>

    <!-- KATEGORI -->
    <div class="col-md-6">
        <label>Kategori</label>
        <select name="kategori" class="form-select">
            <option value="">-- Pilih Kategori --</option>
            @foreach(['cincin','gelang','anting'] as $k)
                <option value="{{ $k }}"
                    @selected(old('kategori', $product->kategori ?? '') == $k)>
                    {{ ucfirst($k) }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- BERAT -->
    <div class="col-md-4">
        <label>Berat (gram)</label>
        <input type="number" step="0.01" name="berat" class="form-control"
            placeholder="Contoh: 2.5"
            value="{{ old('berat', $product->berat ?? '') }}">
    </div>

    <!-- KADAR -->
    <div class="col-md-4">
        <label>Kadar</label>
        <input type="text" name="kadar" class="form-control"
            placeholder="Contoh: 24K"
            value="{{ old('kadar', $product->kadar ?? '') }}">
    </div>

    <!-- STOK -->
    <div class="col-md-4">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control"
            placeholder="Jumlah stok"
            value="{{ old('stok', $product->stok ?? '') }}">
    </div>

    <!-- HARGA -->
    <div class="col-md-6">
        <label>Harga (IDR)</label>
        <input type="number" name="harga" class="form-control"
            placeholder="Contoh: 2500000"
            value="{{ old('harga', $product->harga ?? '') }}">
    </div>

    <!-- GAMBAR -->
    <div class="col-md-6">
        <label>Gambar Produk</label>
        <input type="file" name="gambar" class="form-control">
        @isset($product->gambar)
            <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
        @endisset
    </div>

</div>
