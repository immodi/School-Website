
<?php $__env->startSection('title'); ?>
    <?php echo e(__('whatsappsupport::whatsappsupport.agents')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('whatsappsupport::whatsappsupport.agents')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo e(__('whatsappsupport::whatsappsupport.whatsapp_support')); ?></a>
                    <a
                        href="<?php echo e(route('whatsapp-support.agents')); ?>"><?php echo e(__('whatsappsupport::whatsappsupport.agents')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex justify-content-between" style="width:100%;">
                                <h3 class="mb-0 mr-30"><?php echo e(__('whatsappsupport::whatsappsupport.agents')); ?></h3>
                                <ul>
                                    <li><a href="<?php echo e(route('whatsapp-support.agents.create')); ?>"
                                            class="primary-btn radius_30px fix-gr-bg text-white mb-15"><i
                                                class="ti-plus"></i>
                                            <?php echo e(__('whatsappsupport::whatsappsupport.add_agent')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-20">
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
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.name')); ?></th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.number')); ?></th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.designation')); ?>

                                            </th>
                                            <th scope="col"><?php echo e(__('whatsappsupport::whatsappsupport.action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <th><a><?php echo e($index + 1); ?></a></th>
                                                <td><a href=""><?php echo e($agent->name); ?></a> </td>
                                                <td><?php echo e($agent->number); ?></td>
                                                <td><?php echo e($agent->designation); ?></td>
                                                <td>
                                                    <div class="dropdown CRM_dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenu2" data-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <?php echo e(__('whatsappsupport::whatsappsupport.select')); ?>

                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenu2">
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('whatsapp-support.agents.show', $agent->id)); ?>"
                                                                type="button"><?php echo e(__('whatsappsupport::whatsappsupport.edit')); ?></a>
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#deleteWhatsAppModal<?php echo e($index); ?>"
                                                                class="dropdown-item"
                                                                type="button"><?php echo e(__('whatsappsupport::whatsappsupport.delete')); ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade admin-query"
                                                id="deleteWhatsAppModal<?php echo e($index); ?>">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">
                                                                <?php echo e(__('whatsappsupport::whatsappsupport.delete_file')); ?>

                                                            </h4>
                                                            <button type="button" class="close text-success"
                                                                data-dismiss="modal">&times;
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <h4><?php echo e(__('whatsappsupport::whatsappsupport.are_you_sure_to_delete')); ?>

                                                                </h4>
                                                            </div>
                                                            <div class="mt-40 d-flex justify-content-between">
                                                                <button type="button" class="primary-btn tr-bg"
                                                                    data-dismiss="modal"><?php echo e(__('whatsappsupport::whatsappsupport.cancel')); ?></button>
                                                                <a href="<?php echo e(route('whatsapp-support.agents.delete', $agent->id)); ?>"
                                                                    class="primary-btn fix-gr-bg"
                                                                    type="submit">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/Modules/WhatsappSupport/Resources/views/agents/index.blade.php ENDPATH**/ ?>