<?php $__env->startSection('content'); ?>
<div class="container">
     <div class="row">
                    <div class="col-12">
                        <div class="text-center">

                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="<?php echo e(asset('frontend/images/maintenance-bg.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-5">Site is Under Maintenance</h3>
                            <p>Please check back in sometime.</p>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-access-point-network font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            
                                            <h5 class="font-size-15 text-uppercase mt-4">Why is the Site Down?</h5>
                                            <p class="text-muted mb-0">There are many variations of passages of
                                                Lorem Ipsum available, but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-clock-outline font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15 text-uppercase mt-4">
                                                What is the Downtime?</h5>
                                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                                                simply random text. It has roots in a piece of classical.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-email-outline font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15 text-uppercase mt-4">
                                                Do you need Support?</h5>
                                            <p class="text-muted mb-0">If you are going to use a passage of Lorem
                                                Ipsum, you need to be sure there isn't anything embar.. <a
                                                        href="mailto:no-reply@domain.com"
                                                        class="text-decoration-underline">no-reply@domain.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/home.blade.php ENDPATH**/ ?>