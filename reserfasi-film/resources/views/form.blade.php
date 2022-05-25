<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/index">Nonton Gan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                    <a class="nav-link" href="/index">Film</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <main>
            <div class="py-5 text-left">
                <h2>Reserve your seat Here</h2>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                    required="">
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    required="">
                            </div>

                            <div class="col-12">
                                <label for="number" class="form-label">No contact </label>
                                <input type="number" class="form-control" id="email" placeholder="your number">
                            </div>

                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Theater</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>2D</option>
                                    <option>3D</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Choose Seat Group</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>Box 1</option>
                                    <option>Box 2</option>
                                </select>
                            </div>

                            <div class="col-md-5">
                                <label for="date" class="form-label">Date</label>
                                <select class="form-select" id="date" required="">
                                    <option value="">Choose...</option>
                                    <option>24 Mei 2022</option>
                                    <option>25 Mei 2022</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="time" class="form-label">Time</label>
                                <select class="form-select" id="time" required="">
                                    <option value="">Choose...</option>
                                    <option value="09:00 AM">09:00 AM</option>
                                    <option value="10:38 AM">10:38 AM</option>
                                    <option value="12:16 PM">12:16 PM</option>
                                    <option value="01:54 PM">01:54 PM</option>
                                    <option value="03:32 PM">03:32 PM</option>
                                    <option value="05:10 PM">05:10 PM</option>
                                    <option value="06:48 PM">06:48 PM</option>
                                    <option value="08:26 PM">08:26 PM</option>
                                    <option value="10:04 PM">10:04 PM</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" id="qty" required="">
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg my-4" type="submit">Continue</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 1945-2022 nonton gan</p>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
