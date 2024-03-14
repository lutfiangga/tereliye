<!-- BEGIN: Content -->
<div class="content">
  <div class="intro-y flex items-center mt-3">
    <div class="text-primary font-semibold text-3xl mr-auto">
      Edit Kendaraan
    </div>
  </div>
  <div class="grid grid-cols-16 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
      <!-- BEGIN: Form Layout -->
      <form class="" action="<?php echo site_url('Kendaraan/update/' . $edit['id_kendaraan'])
        ?>" method="post">
        <div class="intro-y box p-5">
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Kode Kendaraan</label>
            <input id="crud-form-1" type="text" name="id_kendaraan" class="form-control w-full" placeholder="<?php echo
              $edit['id_kendaraan'] ?>" value="<?php echo $edit['id_kendaraan'] ?>" disabled>
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No BPKB</label>
            <input id="crud-form-1" type="text" name="no_bpkb" class="form-control w-full" placeholder="<?php echo
              $edit['no_bpkb'] ?>" value="<?php echo $edit['no_bpkb'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No STNK</label>
            <input id="crud-form-1" type="text" name="no_stnk" class="form-control w-full" placeholder="<?php echo
              $edit['no_stnk'] ?>" value="<?php echo $edit['no_stnk'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Pemilik Kendaraan</label>
            <input id="crud-form-1" type="text" name="pemilik" class="form-control w-full" placeholder="<?php echo
              $edit['pemilik'] ?>" value="<?php echo $edit['pemilik'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Merek Kendaraan</label>
            <input id="crud-form-1" type="text" name="merk" class="form-control w-full" placeholder="<?php echo
              $edit['merk'] ?>" value="<?php echo $edit['merk'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-2" class="form-label">Jenis Kendaraan</label>
            <select data-placeholder="Pilih Jenis Kendaraan" name="jenis" class="tom-select w-full capitalize"
              id="crud-form-2">
              <option value="<?php echo $edit['jenis'] ?>"><?php echo $edit['jenis'] ?></option>
              <option value="roda 2">Roda 2</option>
              <option value="roda 3">Roda 3</option>
              <option value="roda 4">Roda 4</option>
            </select>
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No Polisi</label>
            <input id="crud-form-1" type="text" name="no_pol" class="form-control w-full" placeholder="<?php echo
              $edit['no_pol'] ?>" value="<?php echo $edit['no_pol'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No Kerangka</label>
            <input id="crud-form-1" type="text" name="no_kerangka" class="form-control w-full" placeholder="<?php echo
              $edit['no_kerangka'] ?>" value="<?php echo $edit['no_kerangka'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">No Mesin</label>
            <input id="crud-form-1" type="text" name="no_mesin" class="form-control w-full" placeholder="<?php echo
              $edit['no_mesin'] ?>" value="<?php echo $edit['no_mesin'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Masa Berlaku</label>
            <input id="crud-form-1" type="date" name="masa_berlaku" class="form-control w-full" placeholder="<?php echo
              $edit['masa_berlaku'] ?>" value="<?php echo $edit['masa_berlaku'] ?>">
          </div>
          <div class="text-right mt-5">
            <a href="<?php echo site_url('Kendaraan') ?>"><button type="button"
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