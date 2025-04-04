


<?php $__env->startSection('title', $promotion->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="<?php echo e(asset('storage/' . $promotion->image)); ?>" alt="<?php echo e($promotion->title); ?>" class="w-full h-64 md:h-96 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4"><?php echo e($promotion->title); ?></h1>
            <div class="prose max-w-none">
                <p class="text-gray-700"><?php echo e($promotion->description); ?></p>
            </div>
            <div class="mt-6 flex space-x-4">
                <a href="<?php echo e(route('promotions.edit', $promotion->id)); ?>" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300">
                    Edit
                </a>
                <form action="<?php echo e(route('promotions.destroy', $promotion->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus promosi ini?')">
                        Hapus
                    </button>
                </form>
                <a href="<?php echo e(route('promotions.index')); ?>" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    Kembali
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yudia\OneDrive\Documents\UNIVERSITY\4TH SEMESTER\WFD D\CRUD_Tugas\crud\resources\views/promotions/detail.blade.php ENDPATH**/ ?>