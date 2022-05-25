<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap core JavaScript-->
@include('admin/pages/head')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Film</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="nama bioskop">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id=""
                                            placeholder="ruangan">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id=""
                                            placeholder="jumlah kursi">
                                    </div>
                                </div>

                                <a href="#" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/dasboard">Kembali ke dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    @include('admin/pages/script')

</body>

</html>
