<?php $__env->startSection('content'); ?>
<style>
    body 
    {
        background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
                color: black;
                font-weight: 200;
                height: 125vh;
                margin: 0;
    }
    hr 
    {
        background-color: blue;
    }

    .a:hover
    {
        text-decoration: none;
        font-size: 20px;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Log in successfull!
                    <br> <hr>
                    <ul class="list-group">
                        Continue to :
                        <li class="list-group-item a"> <a href="vacations">Main site </a> </li>
                        <li class="list-group-item a"> <a href="create">Create new vacation</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Putovanja\resources\views/home.blade.php ENDPATH**/ ?>