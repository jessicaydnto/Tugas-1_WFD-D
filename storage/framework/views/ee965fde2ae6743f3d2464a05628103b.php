

<?php $__env->startSection('title', 'List Promotions'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">🔥 Latest Promotions 🔥</h1>

    <div class="flex justify-end">
        <a href="<?php echo e(route('promotions.create')); ?>" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-5 py-3 rounded-lg shadow-md hover:opacity-80 transition duration-300">
            ➕ Add Promotion
        </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300"> //card
            <img src="<?php echo e(asset($promotion->image)); ?>" class="w-full h-52 object-cover rounded-lg" alt="<?php echo e($promotion->title); ?>">
            
            <div class="mt-4">
                <h2 class="text-xl font-semibold text-gray-800"><?php echo e($promotion->title); ?></h2>
                <p class="text-gray-600 mt-2 line-clamp-2"><?php echo e($promotion->description); ?></p>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <a href="<?php echo e(route('promotions.show', $promotion->id)); ?>" class="text-blue-600 font-semibold hover:text-blue-800 transition duration-300">
                    🔍 View Details
                </a>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yudia\OneDrive\Documents\UNIVERSITY\4TH SEMESTER\WFD D\CRUD_Tugas\crud\resources\views/promotions/index.blade.php ENDPATH**/ ?>