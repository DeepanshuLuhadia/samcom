<?php $__env->startSection('content'); ?>
<?php 
$Gender=['1'=>'Male','2'=>'Female','3'=>'Other']; 
?>
        <div class="card-deck">
           <div class="col-xl-12">
              <div class="dash-table-cover">
              	  <div class="manage-bk-text">
                    <h4>MANAGE USER</h4>
                    <div class="go-bk">
                        <div class="d-flex">
                          <a class="btn un-btn" href="<?php echo e(route('admin.user.create')); ?>"> + ADD USER </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                  <table class="table tb-bg userdatatable">
                      <thead>
                        <tr class="head-booking">
                          <th>S.No</th>
                          <th>User Id</th>
                          <th>Full Name</th>
                          <th>Email Address</th>
                          <th>Gender</th>
                          <th>DOB</th>
                          <th>Country</th>
                          <th>Hobbies</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody class="dynamicCustomer AjaxData">
                      	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ckey => $cvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	                        <tr class="books-details">
	                          
	                          <td><?= ($ckey+1) ?></td>
                            <td><?= $cvalue->id ?></td>
                            <td><?= $cvalue->name ?></td>
	                          <td><?= $cvalue->email ?></td>
	                          <td><?= $Gender[$cvalue->gender] ?></td>
                            <td><?= $cvalue->dob ?></td>
                            <td><?= $cvalue->country ?></td>
	                          <td><?= $cvalue->hobbies ?></td>
                            <td><?= date('d/m/Y',strtotime($cvalue->created_at)) ?></td>
                            <td> <?= $cvalue->is_delete == 1 ? 'Delete' : 'Active' ?> </td>
                            <td> <a href="<?php echo e(route('admin.user.edit',base64_encode($cvalue->id))); ?>">Edit </a> </td>
	                          <td>
                              <?php echo e(Form::open(array('url' => 'admin/user/' . base64_encode($cvalue->id), 'class' => 'pull-right' ,'onsubmit'=> "return confirm('Are You SUre')"))); ?>

                                  <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                  <?php echo e(Form::submit('Delete', array('class' => 'btn btn-danger'))); ?>

                              <?php echo e(Form::close()); ?>

                           </td>
	                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                      </tbody>
                  </table>
                </div>
              </div>
           </div>
        </div>
    <script type="text/javascript">
     $('.userdatatable').DataTable();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin/layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/Admin/users/list.blade.php ENDPATH**/ ?>