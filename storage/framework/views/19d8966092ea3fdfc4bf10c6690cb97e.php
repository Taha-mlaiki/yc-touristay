<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="bg-gray-100 min-h-screen p-4 md:p-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Real Estate Dashboard</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Active Listings Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Active Listings</h2>
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-home text-blue-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">1,235</p>
                    <p class="text-sm text-green-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>5.3% from last month</span>
                    </p>
                </div>

                <!-- Total Users Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
                        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                            <i class="fas fa-users text-purple-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">24,718</p>
                    <p class="text-sm text-green-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>12.7% from last month</span>
                    </p>
                </div>

                <!-- Properties Sold Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Properties Sold</h2>
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">876</p>
                    <p class="text-sm text-green-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>3.2% from last month</span>
                    </p>
                </div>

                <!-- Average Price Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Average Price</h2>
                        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                            <i class="fas fa-tag text-yellow-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">$425,950</p>
                    <p class="text-sm text-red-500 mt-2">
                        <i class="fas fa-arrow-down mr-1"></i>
                        <span>1.5% from last month</span>
                    </p>
                </div>
            </div>

            <!-- Additional Metrics Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <!-- Time on Market Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Avg. Time on Market</h2>
                        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                            <i class="fas fa-clock text-red-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">42 days</p>
                    <p class="text-sm text-red-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>5 days from last month</span>
                    </p>
                </div>

                <!-- New Listings Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">New Listings</h2>
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center">
                            <i class="fas fa-plus-circle text-indigo-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">329</p>
                    <p class="text-sm text-green-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>8.1% from last month</span>
                    </p>
                </div>

                <!-- Customer Satisfaction Card -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Satisfaction</h2>
                        <div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fas fa-star text-teal-500 text-xl"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-gray-800">4.8/5</p>
                    <p class="text-sm text-green-500 mt-2">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <span>0.2 from last month</span>
                    </p>
                </div>
            </div>
        </div>
    </d>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hp\Desktop\TA\touristay\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>