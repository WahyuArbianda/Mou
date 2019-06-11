<div class="container-fluid">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ubah Data User</h1>
   </div>
   <div class="row-mt-3">
      <div class="col-md-6">
         <form action="<?= base_url('user/edit'); ?>" method="post">
            <div class="form-body">

               <input type="hidden" name="id" id="id" value="<?= $admin['id_admin']; ?>">
               
               <div class="form-group">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value=<?= $admin['nip']; ?>>
               </div>
               <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" value=<?= $admin['username']  ?>>
               </div>
               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value=<?= $admin['password']; ?>>
               </div>
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value=<?= $admin['email']; ?>>  
               </div>
               <div class="form-group">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value=<?= $admin['nip']; ?>>
               </div>
               <div class="form-group">
                  <label for="">Jabatan</label>
                  <select class="form-control" id="jabatan" name="jabatan">
                     <?php foreach ($jabatan as $j):?>
                        <?php if($j == $user['jabatan']): ?>
                           <option value="<?= $j; ?>" selected><?= $j; ?></option>
                        <?php else: ?>
                           <option value="<?= $j; ?>" selected><?= $j; ?></option>
                        <?php endif ?>
                     <?php endforeach; ?>
                  </select>
               </div>
               <a  class="btn btn-danger" href="<?= base_url('user'); ?>" role="button">Back</a>
               <button class="btn btn-primary" name="edit" type="submit">Edit Data</button>
            </div>
         </form>
      </div>
   </div>
</div>