<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">BPBJ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-light p-5 text-center">
        <h1 class="display-4">Selamat Datang Di</h1>
        <p class="lead">Survei Kepuasan Masyarakat Terhadap Layanan Pengadaan Barang/Jasa</p>
        <p>Kepada Yth.
            Bapak/Ibu Responden Survei Kepuasan Masyarakat (SKM) Biro Pengadaan Barang dan Jasa Sekretariat Daerah Aceh
            di
            Tempat
            Sebagai upaya untuk mengukur tingkat kepuasan masyarakat terhadap pelayanan yang diselenggarakan Biro
            pengadaan Barang dan Jasa Sekretariat Daerah Aceh, kami bermaksud untuk menyelenggarakan survei kepada para
            pengguna layanan Biro Pengadaan Barang dan Jasa Sekretariat Daerah Aceh.
            Survei dilakukan terhadap total 10 (Sepuluh) standarb pelayanan yang telah dilakukan dan diterapkan pada
            Biro Pengadaan Barang dan Jasa Sekretariat Daerah Aceh.
            Selanjutnya hasil survei akan kami gunakan sebagai bahan monitoring dan evaluasi serta sebagai bahan untuk
            menyusun kebijakan dalam rangka peningkatan kualitas penyelenggaraan pelayanan di Biro Pengadaan Barang dan
            Jasa Sekretariat Daerah Aceh.
            Sehubungan dengan hal tersebut, mohon kesediaan Bapak/Ibu sebagai responden untuk berpartisipasi dalam SKM
            ini. Identitas dan jawaban responden akan terjaga kerahasiaannya sehingga kami berharap pengisian kuesioner
            ini dapat dilakukan dengan sebenar-benarnya.
            Jika diperlukan Saudara dapat mengisi kembali Survei Kepuasan Masyarakat sesuai dengan layanan yang
            diterima.
            Terima kasih.

            Hormat Kami,
            Tim SKM Biro PBJ Setda. Aceh</p>

        <div class="container my-5">
            <h5 class="text-center mb-4">Pilih Jenis Pelayanan Publik:</h5>

            <form>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="data"
                        value="Pelayanan Data dan Informasi">
                    <label class="form-check-label" for="data">
                        Pelayanan Data dan Informasi
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="konsultasi"
                        value="Pelayanan Konsultasi/Audiensi">
                    <label class="form-check-label" for="konsultasi">
                        Pelayanan Konsultasi/Audiensi
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="narasumber"
                        value="Pelayanan Penyediaan Narasumber/Fasilitator">
                    <label class="form-check-label" for="narasumber">
                        Pelayanan Penyediaan Narasumber/Fasilitator
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="userid"
                        value="Pelayanan Pembuatan User Id Auditor">
                    <label class="form-check-label" for="userid">
                        Pelayanan Pembuatan User Id Auditor
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="lpse"
                        value="Pelayanan Admin Agency LPSE Provinsi Aceh">
                    <label class="form-check-label" for="lpse">
                        Pelayanan Admin Agency LPSE Provinsi Aceh
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="helpdesk"
                        value="Pelayanan Helpdesk pada LPSE Provinsi Aceh">
                    <label class="form-check-label" for="helpdesk">
                        Pelayanan Helpdesk pada LPSE Provinsi Aceh
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="verifikator"
                        value="Pelayanan Verifikator LPSE Provinsi Aceh">
                    <label class="form-check-label" for="verifikator">
                        Pelayanan Verifikator LPSE Provinsi Aceh
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="advokasi"
                        value="Pelayanan Advokasi dan Permasalahan Pengadaan Barang/Jasa">
                    <label class="form-check-label" for="advokasi">
                        Pelayanan Advokasi dan Permasalahan Pengadaan Barang/Jasa
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="nota"
                        value="Pelayanan Nota Kesepahaman Bantuan Pelaksanaan Pengadaan Barang/Jasa Kegiatan APBN">
                    <label class="form-check-label" for="nota">
                        Pelayanan Nota Kesepahaman Bantuan Pelaksanaan Pengadaan Barang/Jasa Kegiatan APBN
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pelayanan" id="pemilihan"
                        value="Pelayanan Pemilihan Penyedia Barang/Jasa">
                    <label class="form-check-label" for="pemilihan">
                        Pelayanan Pemilihan Penyedia Barang/Jasa (Transparansi, Integritas SDM, Manfaat dan Kualitas
                        Barang/Jasa)
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Kirim</button>
            </form>
        </div>


        <!-- Bootstrap JS via CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>