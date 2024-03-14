<!-- BEGIN: Content -->
<div class="content">
   <div class="intro-y flex items-center mt-3">
      <div class="text-primary font-semibold text-3xl mr-auto">
         Tambah Pengguna
      </div>
   </div>
   <div class="grid grid-cols-16 gap-6 mt-5">
      <div class="intro-y col-span-12 lg:col-span-6">
         <!-- BEGIN: Form Layout -->
         <form class="" action="<?php echo site_url('User/save') ?>" method="post">
            <div class="intro-y box p-5">
               <div>
                  <label for="crud-form-1" class="form-label">Kode User</label>
                  <input id="crud-form-1" type="text" name="id_user" class="form-control w-full" placeholder="123xxx"
                     autocomplete="off">
                  <?php if (isset($kode_error) && $kode_error): ?>
                     <div class="text-danger mt-2">
                        Kode User sudah digunakan, harap pilih Kode User lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">Username</label>
                  <input id="crud-form-1" type="text" name="username" class="form-control w-full"
                     placeholder="Kiyowo123" autocomplete="off">
                  <?php if (isset($username_error) && $username_error): ?>
                     <div class="text-danger mt-2">
                        Username sudah digunakan, harap pilih username lain.
                     </div>
                  <?php endif; ?>
               </div>
               <div class="mt-3">
                  <label for="crud-form-1" class="form-label">Password</label>
                  <input id="crud-form-1" type="text" name="password" class="form-control w-full"
                     placeholder="P@ssw0rd!" autocomplete="off">
               </div class="mt-3">
               <div class="mt-3">
                  <label for="crud-form-2" class="form-label">Level</label>
                  <select data-placeholder="Pilih level pengguna" name="level" class="tom-select w-full"
                     id="crud-form-2">
                     <option value="admin">Admin</option>
                     <option value="member">Member</option>
                  </select>
               </div>
               <div class="text-right mt-5">
                  <a href="<?php echo site_url('User') ?>"><button type="button"
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