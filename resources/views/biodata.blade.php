<form action="{{ route('biodata.simpan') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Responden</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Responden</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
    </div>

    <div class="mb-3">
        <label for="nohp" class="form-label">No HP Responden</label>
        <input type="text" class="form-control" id="nohp" name="nohp" required>
    </div>

    <input type="hidden" name="pelayanan" value="{{ $pelayanan }}">

    <button type="submit" class="btn btn-success">Kirim</button>
</form>
