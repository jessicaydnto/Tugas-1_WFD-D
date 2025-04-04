

<?php $__env->startSection('title', 'Tambah Promosi Baru'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-bold mb-6">Tambah Promosi Baru</h1>
        
        <form action="<?php echo e(route('promotions.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Promosi</label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar Promosi</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required accept="image/*">
            </div>
            
            <div class="flex justify-end space-x-4">
                <a href="<?php echo e(route('promotions.index')); ?>" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yudia\OneDrive\Documents\UNIVERSITY\4TH SEMESTER\WFD D\CRUD_Tugas\crud\resources\views/promotions/create.blade.php ENDPATH**/ ?>