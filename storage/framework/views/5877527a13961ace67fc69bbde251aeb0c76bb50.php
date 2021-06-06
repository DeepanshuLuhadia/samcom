<?php $__env->startSection('content'); ?>
 <style type="text/css">
  .inputfromfield{
         background-color: #ffffff !important;
    }
    .iti.iti--allow-dropdown.iti--separate-dial-code{
      width:100% !important;
    }
</style>

  <div class="card-deck">
     <div class="col-xl-12">
        <div class="dash-table-cover">
          <form action="<?php echo e(route('profile_update')); ?>" method="post" enctype="multipart/form-data" id="profile_validate">
            <?php echo csrf_field(); ?>
            <div class="manage-bk-text">
              <h4>PROFILE</h4>
              <div class="go-bk">
                  <div class="d-flex">

                      <button class="btn un-btn" type="submit" href="javascritp:;"> Submit </button>
                  </div>
              </div>
            </div>

            <div class="property-opt p-5">
              <div class="profile-dash">
                  <div class="form-box">
                      <div class="profile-opt">
                        <figcaption>
                          <h5><?php echo e(strtoupper(Auth::user()->name)); ?></h5>
                          <p><?php echo e(Auth::user()->email); ?></p>
                        </figcaption>
                      </div>
                      <div class="input-box-ui profilelabels">
                        <div class="form-group">
                          <label name="name"> Name </label>
                          <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control input-full" required placeholder="Name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                          <label name="email"> Email </label>
                          <input type="email" name="email" readonly value="<?php echo e(Auth::user()->email); ?>" class="form-control input-full" placeholder="Email">
                        </div>
                        <div class="form-group mt-4">
                          <label name="gender" class=""> Gender </label>
                        </div>
                        <div class="form-group ">

                          <input type="radio" name="gender" <?php echo e(Auth::user()->gender == 1 ? 'checked' : ''); ?> value="1">Male
                          <input type="radio" name="gender" <?php echo e(Auth::user()->gender == 2 ? 'checked' : ''); ?> value="2">Female
                          <input type="radio" name="gender" <?php echo e(Auth::user()->gender == 3 ? 'checked' : ''); ?> value="3">Other
                        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                          <label name="gender"> DOB </label>
                          <input type="date" class="form-control input-full" required name="dob" value="<?php echo e(Auth::user()->dob); ?>">
                        <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                          <label name="gender"> Country </label>
                          <input type="text" class="form-control input-full" required name="country" value="<?php echo e(Auth::user()->country); ?>">
                        <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                          <label name="hobbies"> Hobbies </label>
                          <textarea name="hobbies" required placeholder="PLease enter hobbies with comma seperated" class="form-control input-full"><?php echo e(Auth::user()->hobbies); ?></textarea>
                        <?php $__errorArgs = ['hobbies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                      <div class="form-box-content mt-3">
                      </div>
                  </div>
                </div>
            </div>
          </form>
        </div>
     </div>
  </div>
<script type="text/javascript">
  if($('#profile_validate').length > 0){
    $('#profile_validate').validate({
      rules:{
        name:{
         normalizer: function(value) {
          return $.trim(value);
        },
          required:true,
          minlength:3,
        },
        gender:{
          required:true,
        },
        dob:{
          required:true,
        },
        country:{
         normalizer: function(value) {
          return $.trim(value);
          },
          required:true,
        },
        hobbies:{
         normalizer: function(value) {
          return $.trim(value);
          },
          required:true,
        },
      },
    submitHandler: function(form) {
      $('.subbtn').prop('disabled', true);
      form.submit();
    }
  });
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/profile.blade.php ENDPATH**/ ?>