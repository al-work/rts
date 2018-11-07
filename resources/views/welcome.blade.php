<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    @if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endif
    @if(isset($success))
        <div class="alert alert-success" role="alert">
            {{$success}}
        </div>
    @endif
    <div class="formWraper">
        <h1>Job offer</h1>
        <p>If u want to join our team please send your CV.</p>
        <hr>
        <form method="post" class="needs-validation" novalidate id="cvForm"  enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="example:  John Doe"
                           required>
                    <div class="invalid-feedback">
                        Please enter Your name.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label class="" for="file">Your CV</label>
                    <input type="file" name="cv" class="form-control" id="file" required>

                    <div class="invalid-feedback">
                        Pleas inclide your CV
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="email">Your Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="example:  office@example.com" required>
                    <div class="invalid-feedback">
                        Please enter Your email.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="text">Your Message</label>
                    <textarea class="form-control" id="text" rows="3" name="text"
                              placeholder="example:  I’d like to say “Hello world!”"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit your CV</button>
        </form>
    </div>


</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
