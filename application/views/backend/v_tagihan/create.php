<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex items-center mt-3">
        <div class="text-primary font-semibold text-3xl mr-auto">
            Tambah Tagihan Pengguna Wajib Pajak
        </div>
    </div>
    <div class="grid grid-cols-16 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="" action="<?php echo site_url('Tagihan/save') ?>" method="post">
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Kode Tagihan</label>
                        <input id="crud-form-1" type="text" name="id_kwitansi" class="form-control w-full"
                            placeholder="324564xxxxxx" required autocomplete="off">
                        <?php if (isset($kode_error) && $kode_error): ?>
                            <div class="text-danger mt-2">
                                Kode Tagihan sudah digunakan, harap pilih Kode Tagihan lain.
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Kode User</label>
                        <select name="id_user" class="form-control" required>
                            <option value=0 selected>- Pilih User -</option>
                            <?php
                            foreach ($getuser->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_user'], ' | ', $r['username'] ?>"><?php echo
                                         $r['id_user'], ' | ', $r['username']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Kode Kendaraan</label>
                        <select name="id_kendaraan" class="form-control" required>
                            <option value=0 selected>- Pilih Kendaraan -</option>
                            <?php
                            foreach ($getkendaraan->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_kendaraan'], ' | ', $r['merk'] ?>"><?php echo
                                         $r['id_kendaraan'], ' | ', $r['merk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">NPWP</label>
                        <select name="id_wp" class="form-control" required>
                            <option value=0 selected>- Pilih NPWP -</option>
                            <?php
                            foreach ($wajib_pajak->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_wp'], ' | ', $r['nama'] ?>"><?php echo
                                         $r['id_wp'], ' | ', $r['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Uraian Tagihan</label>
                        <input id="crud-form-1" type="text" name="ket_uraian" class="form-control w-full"
                            placeholder="Pajak Tahunan" required autocomplete="off">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Virtual Account</label>
                        <input id="crud-form-1" type="number" name="kd_va" class="form-control w-full"
                            placeholder="231672481" required autocomplete="off">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Jumlah Pembayaran</label>
                        <input id="crud-form-1" type="number" name="nominal" class="form-control w-full"
                            placeholder="12000000" required autocomplete="off">
                    </div>
                    <div class="text-right mt-5">
                        <a href="<?php echo site_url('Tagihan') ?>"><button type="button"
                                class="btn btn-danger w-24 mr-1">Cancel</button></a>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->