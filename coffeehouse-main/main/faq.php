<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Pertanyaan yang Sering Diajukan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #394034 !important;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        /* Ubah warna navbar */
        .navbar {
            background-color: #394034 !important;
            color: white;
        }

        /* Ubah warna teks navbar */
        .navbar-brand,
        .navbar-nav .nav-link {
            color: white !important;
        }

        /* Ubah teks pada footer */
        footer {
            background-color: #394034 !important;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Patri Coffeehouse</a>
        </div>
    </nav>

    <!-- Konten FAQ -->
    <main>
        <div class="container mt-5">
            <h1 class="mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h1>

            <!-- Daftar Pertanyaan -->
            <div class="accordion" id="accordionExample">
                <!-- Pertanyaan 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara memesan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dapat langsung beli atau menambahkannya ke keranjang
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara melakukan pembayaran?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dapat melakukan pembayaran melalui Dana, ShopeePay, GoPay.
                        </div>
                    </div>
                </div>

                <!-- Pertanyaan 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseFour">
                            Wilayah mana saja yang di-cover oleh layanan kami?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Wilayah pengantaran layanan kami berada untuk Daerah Istimewa Yogyakarta.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Bagaimana saya dapat menghubungi Admin?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Whatsapp Admin 08xxxx.
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Akhir Daftar Pertanyaan -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-white py-3">
        <div>
            All Rights Reserved &copy; 2025
        </div>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>