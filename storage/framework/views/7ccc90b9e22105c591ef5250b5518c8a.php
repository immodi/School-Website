
<?php $__env->startSection('title'); ?>
    <?php echo e(__('whatsappsupport::whatsappsupport.analytics')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('whatsappsupport::whatsappsupport.analytics')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo e(__('whatsappsupport::whatsappsupport.whatsapp_support')); ?></a>
                    <a
                        href="<?php echo e(route('whatsapp-support.analytics')); ?>"><?php echo e(__('whatsappsupport::whatsappsupport.analytics')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row row-gap-24 mb-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery cyan">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('whatsappsupport::whatsappsupport.total_click')); ?></h3>
                                    <p class="mb-0 invisible"><?php echo e(__('whatsappsupport::whatsappsupport.clicks')); ?></p>
                                </div>
                                <h1 class="gradient-color2">
                                    <?php echo e($messages->count()); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery violet">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('whatsappsupport::whatsappsupport.click_from_mobile')); ?></h3>
                                    <p class="mb-0 invisible"><?php echo e(__('whatsappsupport::whatsappsupport.clicks')); ?></p>
                                </div>
                                <h1 class="gradient-color2">
                                    <?php echo e($messages->where('device_type', 'Mobile')->count()); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery blue">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('whatsappsupport::whatsappsupport.click_from_desktop')); ?></h3>
                                    <p class="mb-0 invisible"><?php echo e(__('whatsappsupport::whatsappsupport.clicks')); ?></p>
                                </div>
                                <h1 class="gradient-color2">
                                    <?php echo e($messages->where('device_type', 'Desktop')->count()); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex">
                                <h3 class="mb-0 mr-30"><?php echo e(__('whatsappsupport::whatsappsupport.analytics')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="">
                            <?php if (isset($component)) { $__componentOriginal163c8ba6efb795223894d5ffef5034f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal163c8ba6efb795223894d5ffef5034f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <table id="table_id" class="table Crm_table_active3" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.id')); ?></th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.ip')); ?></th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.browser')); ?></th>
                                            <th scope="col">
                                                <?php echo e(__('whatsappsupport::whatsappsupport.operating_system')); ?></th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.messages')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <th><a><?php echo e($index + 1); ?></a></th>
                                                <td><?php echo e($message->ip); ?></td>
                                                <td><?php echo e($message->browser); ?></td>
                                                <td><?php echo e($message->os); ?></td>
                                                <td><?php echo e($message->message); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $attributes = $__attributesOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__attributesOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal163c8ba6efb795223894d5ffef5034f5)): ?>
<?php $component = $__componentOriginal163c8ba6efb795223894d5ffef5034f5; ?>
<?php unset($__componentOriginal163c8ba6efb795223894d5ffef5034f5); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/Modules/WhatsappSupport/Resources/views/analytics.blade.php ENDPATH**/ ?>