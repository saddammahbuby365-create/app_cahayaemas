<div class="row g-3">
    <div class="col-md-6">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control"
            value="{{ old('nama',$product->nama ?? '') }}">
    </div>

    <div class="col-md-6">
        <label>Kategori</label>
        <select name="kategori" class="form-control">
            @foreach(['cincin','gelang','anting'] as $k)
                <option value="{{ $k }}"
                @selected(old('kategori',$product->kategori ?? '')==$k)>
                {{ ucfirst($k) }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4">
        <label>Berat (gr)</label>
        <input type="number" name="berat" class="form-control"
            value="{{ old('berat',$product->berat ?? '') }}">
    </div>

    <div class="col-md-4">
        <label>Kadar</label>
        <input type="text" name="kadar" class="form-control"
            value="{{ old('kadar',$product->kadar ?? '') }}">
    </div>

    <div class="col-md-4">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control"
            value="{{ old('stok',$product->stok ?? '') }}">
    </div>

    <div class="col-md-6">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control"
            value="{{ old('harga',$product->harga ?? '') }}">
    </div>

    <div class="col-md-6">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
</div>
