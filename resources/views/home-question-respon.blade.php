<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .response-card {
            max-width: 650px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .quote-box {
            background-color: #f8f9fa;
            border-left: 5px solid #0d6efd;
            border-radius: 8px;
        }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100 py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card response-card mx-auto p-4 p-md-5 text-center">
                    <div class="card-body">
                        <!-- Nama (diubah jadi huruf kapital) -->
                        <h2 class="fw-bold text-primary mb-2">
                            Terima Kasih, {{ strtoupper($nama) }}! 🎉
                        </h2>
                        
                        <p class="text-secondary fs-5 mb-4">
                            Pertanyaan Anda telah berhasil dikirim.
                        </p>

                        <!-- Box Pertanyaan -->
                        <div class="quote-box p-4 mb-4">
                            <p class="fw-bold mb-1">Pertanyaan Anda:</p>
                            <p class="fs-5 mb-0 text-dark">
                                "{{ $pertanyaan }}"
                            </p>
                        </div>

                        <!-- Info Email -->
                        <p class="fst-italic text-secondary mb-1">
                            Pertanyaan Anda akan segera kami tanggapi dan balas melalui email <strong>{{ $email }}</strong>.
                        </p>
                        <p class="fst-italic text-secondary small mb-4">
                            Mohon cek kotak masuk atau folder spam Anda secara berkala.
                        </p>

                        <!-- Tombol Kembali -->
                        <a href="/home" class="btn btn-primary px-4 py-2 fw-semibold">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>