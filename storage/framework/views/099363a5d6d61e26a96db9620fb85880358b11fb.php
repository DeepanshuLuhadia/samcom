<?php $__env->startSection('content'); ?>
 <style type="text/css">
  .error{
    color: red!important;
}
</style>
<div class="site-container">
      <div class="mt-5 mb-5">
        <div class="container">
          <div class="form-container">
            <h4 class="mb-4">Please fill out the fields below</h4>
            <div class="form-box">
                <form method="POST" action="<?php echo e(route('register')); ?>" class="formsubmit">
                <?php echo csrf_field(); ?>   
              <h4 class="mb-4">Sign Up</h4>
              <div class="input-box-ui">
                <div class="form-group">
                <input id="name" type="text" class="form-control input-full <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Full Name">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger ml-4" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control input-full <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control input-full <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="" required placeholder="password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <input id="password_confirmation" type="password" class="form-control input-full <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation" value="" required placeholder="confirm password">
                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <input id="dob" type="date" class="form-control input-full <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dob" value="" required placeholder="Date of birth">
                    <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group mt-3">
                  <div class="form-control input-full">
                  <label class="" style="width: 20%; float: left;">Male</label>
                    <input type="radio" name="gender" style="width: 80% !important" value="1" <?php echo e(old('gender')==1 ? 'checked' : ''); ?>  > 
                  </div>
                  <div class="form-control input-full">
                  <label class="" style="width: 20%; float: left;">Female</label>
                    <input type="radio" name="gender" style="width: 80% !important" value="2" <?php echo e(old('gender')==2 ? 'checked' : ''); ?>  > 
                  </div>
                  <div class="form-control input-full">
                  <label class="" style="width: 20%; float: left;">Other</label>
                    <input type="radio" name="gender" style="width: 80% !important" value="3" <?php echo e(old('gender')==3 ? 'checked' : ''); ?>  > 
                  </div>
                    <p class="genderError"></p>
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
                    <input id="country" type="text" class="form-control input-full <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="country" value="" required placeholder="Enter country name">
                    <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <textarea id="hobbies" class="form-control input-full <?php $__errorArgs = ['hobbies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="hobbies" value="" required placeholder="Enter comma seperated hobbies"></textarea>
                    <?php $__errorArgs = ['hobbies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger ml-4" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <div class="check-here">
                    <input type="checkbox" class="form-control" required  id="term_condition" name="term_condition" value="<?php echo e(old('term_condition')); ?>" placeholder="">
                    <p><a target="_blank" href="#">Term & Condition Applied</a></p>
                  </div>
                </div>
              </div>
              <div class="form-box-content mt-3">
                <div class="sigup-text text-center mt-4 mb-4">
                  <p class="font-rs">By selecting "Sign up," I agree that Samcom will process my personal information in accordance with the Samcom Privacy Policy</p>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-blue w-25 subbtn">Signup</button>
                </div>
              <div class="form-box-content mt-3">
                <div class="sigup-text text-center mt-4 mb-4">
                    <p class="font-rs" style="color: black;">Sign In to your account 
                    <a href="<?php echo e(route('login')); ?>" class="">Sign In</a></p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

            <script type="text/javascript">
            $('#phoneno').bind('keyup paste ', function(){
                this.value = this.value.replace(/[^0-9]/g, '');
            });
            </script>

<script type="text/javascript">
  if ($(".formsubmit").length > 0) {
      $(".formsubmit").validate({
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
      email: {
      required: "Please enter email ",
      },
      name: {
      required: "Please enter your name ",
      maxlength:"Name length should not be more than 25 characters",
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

<?php echo $__env->make('layouts.loginapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/auth/register.blade.php ENDPATH**/ ?>