<!-- BEGIN: Content -->
<div class="content">
   <div class="intro-y flex items-center mt-3">
      <div class="text-primary font-semibold text-3xl mr-auto">
         Tambah Kendaraan
      </div>
   </div>
   <div class="grid grid-cols-16 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-6">
         <!-- BEGIN: Form Layout -->
         <form class="" action="<?php echo site_url('Kendaraan/save') ?>" method="post">
            <div class="intro-y box p-5">
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">No BPKB</label>
                  <input id="crud-form-1" type="text" name="no_bpkb" class="form-control w-full" placeholder="AA32138y8"
                     autocomplete="off" required>
                  <?php if (isset($bpkb) && $bpkb): ?>
                     <div class="text-danger mt-2">
                        BPKB sudah digunakan, harap pilih BPKB lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">No STNK</label>
                  <input id="crud-form-1" type="text" name="no_stnk" class="form-control w-full" placeholder="A241y4"
                     autocomplete="off" required>
                  <?php if (isset($stnk) && $stnk): ?>
                     <div class="text-danger mt-2">
                        STNK sudah digunakan, harap pilih STNK lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">Pemilik Kendaraan</label>
                  <input id="crud-form-1" type="text" name="pemilik" class="form-control w-full"
                     placeholder="Budixxxxxxxxx" autocomplete="off" required>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">Merek Kendaraan</label>
                  <input id="crud-form-1" type="text" name="merk" class="form-control w-full" placeholder="Toyota Supra"
                     autocomplete="off" required>
               </div>
               <div class="mt-3">
                  <label for="crud-form-2" class="form-label">Jenis Kendaraan</label>
                  <select data-placeholder="Pilih Jenis Kendaraan" name="jenis" class="tom-select w-full"
                     id="crud-form-2" capitalize>
                     <option value="roda 2">Roda 2</option>
                     <option value="roda 3">Roda 3</option>
                     <option value="roda 4">Roda 4</option>
                  </select>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">No Polisi</label>
                  <input id="crud-form-1" type="text" name="no_pol" class="form-control w-full" placeholder="xx 3267 xx"
                     autocomplete="off" required>
                  <?php if (isset($plat) && $plat): ?>
                     <div class="text-danger mt-2">
                        No Polisi sudah digunakan, harap pilih No Polisi lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">No Kerangka</label>
                  <input id="crud-form-1" type="text" name="no_kerangka" class="form-control w-full"
                     placeholder="2516x12xxx" autocomplete="off" required>
                  <?php if (isset($no_kerangka) && $no_kerangka): ?>
                     <div class="text-danger mt-2">
                        No Kerangka sudah digunakan, harap pilih No Kerangka lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">No Mesin</label>
                  <input id="crud-form-1" type="text" name="no_mesin" class="form-control w-full"
                     placeholder="21x6t7182xx" autocomplete="off" required>
                  <?php if (isset($no_mesin) && $no_mesin): ?>
                     <div class="text-danger mt-2">
                        No Mesin sudah digunakan, harap pilih No Mesin lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">Masa Berlaku</label>
                  <input id="crud-form-1" type="date" name="masa_berlaku" class="form-control w-full" placeholder=""
                     required>
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