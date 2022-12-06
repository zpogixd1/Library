

<?php $__env->startSection('title'); ?>Admin - Monitoring | Library
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('app.components.admin_breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>Monitoring</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item active">Monitoring</li>
<?php if (isset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a)): ?>
<?php $component = $__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a; ?>
<?php unset($__componentOriginal88b3e7ab490f963e93c8f755b4c614e90771a74a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Monitoring</h5>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Book Title</th>
                                    <th>Status</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    function borrowerData($borrowerId){
                                        return App\Models\Borrow::borrowerData($borrowerId);
                                    }
                                ?>
                                <?php $__currentLoopData = $monitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(borrowerData($item->borrower_id)->stud_id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->status); ?></td>
                                        <td width="15%">
                                            <a href="<?php echo e(route('monitor.show', $item->id)); ?>" class="btn btn-info">View</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/sweet-alert2/sweetalert.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>

<script>
    $('#myTable').DataTable({
        "paging":   true,
        "ordering": true,
        "info":     true
    });
</script>

<script>
    document.querySelector('.deleteBtn').onclick = function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
                )
            }
        })
    }
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\librarySystem\resources\views/app/admin/monitor/index.blade.php ENDPATH**/ ?>