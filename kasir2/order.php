<!--content-->
<div class="col-lg-9 mt-2">
    <div class="card card-expand">
        <div class="card-header">
            Order
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Buat Order</button>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="proses/proses_input_order.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatinginput" placeholder="No">
                                    <label for="floatinginput">No</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Pelanggan">
                                    <label for="floatingInput">Nama Pelanggan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatinginput" placeholder="Pesanan">
                                    <label for="floatinginput">Pesanan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatinginput" placeholder="Total">
                                    <label for="floatinginput">Total</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_order_validate" value="1234">Buat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-expand table-">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Pesanan</th>
                        <th scope="col">Total</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!--end content-->