
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6" style="margin-left: 300px;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Input Project</h3>
                                        </div>
                                        <hr>
                                        <form method="post" action="project/simpan.php" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama Project</label>
                                                <input id="nama_project" name="nama_project" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Jenis</label>
                                                <select name="jenis_project" id="jenis_project" class="form-control">
                                                        <option value="0">--- Pilih ---</option>
                                                        <option value="RTRW Provinsi">RTRW Provinsi</option>
                                                        <option value="RTRW Kota">RTRW Kota</option>
                                                        <option value="RTRW Kabupaten">RTRW Kabupaten</option>
                                                        <option value="Kawasan Budidaya">Kawasan Budidaya</option>
                                                        <option value="Kawasan Reklamasi">Kawasan Reklamasi</option>
                                                    </select>
                                                <!-- <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Tanggal Rencana</label>
                                                <input id="tanggal_rencana" name="tanggal_rencana" type="date" class="form-control cc-number identified visa">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button class="btn btn-danger"><a href="#" style="color: white;">Batal</a></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div