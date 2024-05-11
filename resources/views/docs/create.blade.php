<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form action="/docs/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 contents ">
            <div class="row justify-content-center col-md-7 offset-md-8">
                <div class="col-md-20 mt-3 ">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Tipe file: jpg, png, pdf</label>
                        <img class="img-preview img-fluid">
                        <input class="form-control" type="file" id="formFile" name="file"
                            onchange="previewImage()">
                    </div>
                    <div class="mb-3">
                        <label for="nama_file" class="form-label">Nama File</label>
                        <input type="text" class="form-control" id="nama_file" name="nama_file" >
                    </div>
                    {{-- <input type="hidden" name="nim" value="{{ auth()->user()->nim }}"> --}}
                    <input type="submit" value="Submit" class="btn btn-primary rounded-3 mx-2">
                    <a href="/docs/index" class="btn btn-primary rounded-3 mx-2">Lihat Dokumen</a>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        function previewImage() {
            const image = document.querySelector('#formFile');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script><br>
</body>

</html>
