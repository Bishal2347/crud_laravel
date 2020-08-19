
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Blogs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('blogs.create')); ?>"> Create new blogs</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($blog->title); ?></td>
            <td><?php echo e($blog->description); ?></td>
            <td>
                <form action="<?php echo e(route('blogs.destroy',$blog->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('blogs.show',$blog->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('blogs.edit',$blog->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $blogs->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blogs.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\All Semister Study\8th Semister-2020\Software Engineering Web Application\Class Task\Make crud application using laravel framework\CrudApplication\resources\views/blogs/index.blade.php ENDPATH**/ ?>