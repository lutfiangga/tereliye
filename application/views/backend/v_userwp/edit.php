<!-- BEGIN: Content -->
<div class="content">
  <div class="intro-y flex items-center mt-3">
    <div class="text-primary font-semibold text-3xl mr-auto">
      Edit NPWP
    </div>
  </div>
  <div class="grid grid-cols-16 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
      <!-- BEGIN: Form Layout -->
      <form class="" action="<?php echo site_url('Userwp/update/' . $edit['id_wp'])
        ?>" method="post">
        <div class="intro-y box p-5">
          <div>
            <label for="crud-form-1" class="form-label">NPWP</label>
            <input id="crud-form-1" type="text" name="id_wp" class="form-control w-full" placeholder="<?php echo
              $edit['id_wp'] ?>" value="<?php echo $edit['id_wp'] ?>" disabled>
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No KTP</label>
            <input id="crud-form-1" type="text" name="no_ktp" class="form-control w-full" placeholder="<?php echo
              $edit['no_ktp'] ?>" value="<?php echo $edit['no_ktp'] ?>">
          </div>
          <div class="mt-3">
            <label for="crud-form-2" class="form-label">Pilih Kendaraan</label>
            <select data-placeholder="Pilih Kendaraan" name="id_kendaraan" class="tom-select w-full capitalize"
              id="crud-form-2">
              <option value="<?php echo $edit['id_kendaraan'] ?>"><?php echo $edit['id_kendaraan'] ?></option>
              <?php
              foreach ($kendaraan->result_array() as $r) {
                $selected = '';
                // Memisahkan ID kendaraan dan merk
                $value = $r['id_kendaraan'] . ' | ' . $r['merk'];
                if ($r['id_user'] == $this->session->userdata('id_user')) {
                  if ($r['id_kendaraan'] == $data['id_kendaraan']) {
                    $selected = 'selected';
                  }
                  ?>
                  <option value="<?php echo $value ?>" <?php echo $selected ?>><?php echo $value ?></option>
                  <?php
                }
              }
              ?>
            </select>
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Nama</label>
            <input id="crud-form-1" type="text" name="nama" class="form-control w-full" placeholder="<?php echo
              $edit['nama'] ?>" value="<?php echo $edit['nama'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Pekerjaan</label>
            <input id="crud-form-1" type="text" name="pekerjaan" class="form-control w-full" placeholder="<?php echo
              $edit['pekerjaan'] ?>" value="<?php echo $edit['pekerjaan'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="" placeholder="<?php echo $edit['alamat'] ?>" rows="4"
              cols="4" required autocomplete="off"><?php echo $edit['alamat'] ?></textarea>
          </div>
          <div class="text-right mt-5">
            <a href="<?php echo site_url('Userwp') ?>"><button type="button"
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