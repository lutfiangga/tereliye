<!-- BEGIN: Content -->
<div class="content">
  <div class="intro-y flex items-center mt-3">
    <div class="text-primary font-semibold text-3xl mr-auto">
      Edit Pengguna
    </div>
  </div>
  <div class="grid grid-cols-16 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
      <!-- BEGIN: Form Layout -->
      <form class="" action="<?php echo site_url('User/update/' . $edit['id_user'])
        ?>" method="post">
        <div class="intro-y box p-5">
          <div>
            <label for="crud-form-1" class="form-label">Kode User</label>
            <input id="crud-form-1" type="text" name="id_user" class="form-control w-full" placeholder="<?php echo
              $edit['id_user'] ?>" value="<?php echo $edit['id_user'] ?>" disabled>
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Username</label>
            <input id="crud-form-1" type="text" name="username" class="form-control w-full" placeholder="<?php echo
              $edit['username'] ?>" value="<?php echo $edit['username'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-1" class="form-label">Password</label>
            <input id="crud-form-1" type="text" name="password" class="form-control w-full" placeholder="<?php echo
              $edit['password'] ?>" value="<?php echo $edit['password'] ?>" autocomplete="off">
          </div>
          <div class="mt-3">
            <label for="crud-form-2" class="form-label">Level</label>
            <select data-placeholder="Pilih level pengguna" name="level" class="tom-select w-full capitalize"
              id="crud-form-2">
              <option value="<?php echo $edit['level'] ?>"><?php echo $edit['level'] ?></option>
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