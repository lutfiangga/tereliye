<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex items-center mt-3">
        <div class="text-primary font-semibold text-3xl mr-auto">
            Edit Tagihan Pengguna Wajib Pajak
        </div>
    </div>
    <div class="grid grid-cols-16 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="" action="<?php echo site_url('Tagihan/update/' . $edit['id_kwitansi'])
                ?>" method="post">
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Kode Tagihan</label>
                        <input id="crud-form-1" type="text" name="id_kwitansi" class="form-control w-full" placeholder="<?php echo
                            $edit['id_kwitansi'] ?>" value="<?php echo $edit['id_kwitansi'] ?>" disabled>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">User</label>
                        <select data-placeholder="Pilih User" name="id_user" class="tom-select w-full capitalize"
                            id="crud-form-2">
                            <option value="<?php echo $edit['id_user'] ?>"><?php echo $edit['id_user'] ?>
                            </option>
                            <?php
                            foreach ($user->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_user'], $r['username'] ?>"><?php echo
                                        $r['id_user'], ' | ', $r['username']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Kendaraan</label>
                        <select data-placeholder="Pilih Kendaraan" name="id_kendaraan"
                            class="tom-select w-full capitalize" id="crud-form-2">
                            <option value="<?php echo $edit['id_kendaraan'] ?>"><?php echo $edit['id_kendaraan'] ?>
                            </option>
                            <?php
                            foreach ($kendaraan->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_kendaraan'], $r['merk'] ?>"><?php echo
                                        $r['id_kendaraan'], ' | ', $r['merk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">NPWP</label>
                        <select data-placeholder="Pilih NPWP" name="id_wp" class="tom-select w-full capitalize"
                            id="crud-form-2">
                            <option value="<?php echo $edit['id_wp'] ?>"><?php echo $edit['id_wp'] ?>
                            </option>
                            <?php
                            foreach ($wajib_pajak->result_array() as $r) {
                                ?>
                                <option value="<?php echo $r['id_wp'], $r['nama'] ?>"><?php echo
                                        $r['id_wp'], ' | ', $r['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Uraian Tagihan</label>
                        <input id="crud-form-1" type="text" name="ket_uraian" class="form-control w-full" placeholder="<?php echo
                            $edit['ket_uraian'] ?>" value="<?php echo $edit['ket_uraian'] ?>" autocomplete="off">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Virtual Account</label>
                        <input id="crud-form-1" type="text" name="kd_va" class="form-control w-full" placeholder="<?php echo
                            $edit['kd_va'] ?>" value="<?php echo $edit['kd_va'] ?>" autocomplete="off">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Jumlah Pembayaran</label>
                        <input id="crud-form-1" type="text" name="nominal" class="form-control w-full" placeholder="<?php echo
                            $edit['nominal'] ?>" value="<?php echo $edit['nominal'] ?>" autocomplete="off">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Status</label>
                        <select data-placeholder="Status" name="status" class="tom-select w-full capitalize"
                            id="crud-form-2">
                            <option value="<?php echo $edit['status'] ?>"><?php echo $edit['status'] ?></option>
                            <option value="lunas">Lunas</option>
                            <option value="belum bayar">Belum Bayar</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Tanggal Pembayaran</label>
                        <input id="crud-form-1" type="date" name="tgl_bayar" class="form-control w-full" placeholder="<?php echo
                            $edit['tgl_bayar'] ?>" value="<?php echo $edit['tgl_bayar'] ?>" autocomplete="off">
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