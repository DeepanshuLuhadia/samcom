<?php $__env->startSection('content'); ?>
<div class="card-deck">
   <div class="col-xl-12">
      <div class="dash-table-cover">
            <form action="<?php echo e(route('admin.user.store')); ?>" method="Post" id="add_user"  class="padding-for-label">
                  <?php echo csrf_field(); ?>
          <div class="manage-bk-text">
            <h4>Add User</h4>
            <div class="go-bk">
                <div class="d-flex">
                  <a class="btn un-btn" href="<?php echo e(route('admin.user.index')); ?>">
                     Cancel 
                    </a>

                  <button class="btn un-btn" type="submit" href="javascritp:;"> Submit </button>
                </div>
            </div>
          </div>

          <div class="property-opt">
            <div class="pdd-opt">
              <div class="row">
                <div class="col-md-6">
                    <div class="land-lord">
                      <div class="form-group">
                        <label>Full Name</label>
                          <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" >
                         <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error "><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group">
                        <label>Personal Email</label>
                          <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" >
                      </div>
                          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="error "><?php echo e($message); ?> </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <div class="form-group">
                        <label>Password</label>
                          <input type="password" name="password" id="password"  class="form-control" >
                      </div>
                          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="error "><?php echo e($message); ?> </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <div class="form-group">
                        <label>Confirm Password</label>
                          <input type="password" name="password_confirmation"  class="form-control" >
                      </div>
                          <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="error "><?php echo e($message); ?> </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <div class="form-group">
                        <label>Date of Birth</label>
                          <input type="date" name="dob" id="txtDate" value="<?php echo e(old('dob')); ?>" onkeydown="return false" class="form-control" >
                              <span class="error dateerror"> </span>
                     
                      </div>
                          <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="error "><?php echo e($message); ?> </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     
                      <div class="form-group">
                        <label>Gender</label>
                          <input type="radio" name="gender" value="1" <?php echo e(old('gender')==1 ? 'checked' : ''); ?>  >Male 
                          <input type="radio" name="gender" value="2" <?php echo e(old('gender')==2 ? 'checked' : ''); ?>  >Female 
                          <input type="radio" name="gender" value="3" <?php echo e(old('gender')==3 ? 'checked' : ''); ?>  >Other 
                          <p class="error genderError"></p>
                         <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error "><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group">
                        <label>Country</label>
                          <input type="text" name="country" value="<?php echo e(old('country')); ?>" class="form-control" >
                         <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error "><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group">
                        <label>Hobbies</label>
                          <textarea name="hobbies" placeholder="Enter comma seperated hobbies" class="form-control"><?php echo e(old('hobbies')); ?></textarea>
                         <?php $__errorArgs = ['hobbies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error "><?php echo e($message); ?> </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                </div>
               
              </div>
            </div>
          </div>
      </div>
   </div>
</div>
       
<script type="text/javascript">

if ($("#add_user").length > 0) {
  $("#add_user").validate({
     errorPlacement: function(error, element) {
            if (element.attr("name") == "gender" ){

                error.appendTo('.genderError');
              }  else {
            error.insertAfter(element);
          }
        },
    rules: {
      name: {
         normalizer: function(value) {
          return $.trim(value);
        },
      required: true,
      maxlength: 50,
      minlength:3,
      },
      password : {
        minlength : 8,
        required:true,
      },
      password_confirmation : {
        required:true,
        minlength : 8,
        equalTo : "#password"
      },
      dob: {
        required: true,
      },
      email: {
        required: true,
        maxlength: 250,
        email: true,
      },
      gender:"required",
      country:"required",
      hobbies:"required",
    },
    messages: {
      name: {
      required: "Please enter name",
      }, date_of_birth: {
        required: "Please enter you date of birth.",
        minAge: "You must be at least 16 years old!"
      } ,
      email: {
      required: "Please enter valid email",
      email: "Please enter valid email",
      maxlength: "The email name should less than or equal to 50 characters",
      },
      'files[]':{
         extension:"Only jpg,png,jpeg file is allowed!"
      },
    },
    submitHandler: function(form) {
      $('.subbtn').prop('disabled', true);
      form.submit();
    }
  })
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin/layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/Admin/users/add.blade.php ENDPATH**/ ?>