
<?php $__env->startSection('title'); ?>
    <?php echo e(__('aicontent::aicontent.settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('aicontent::aicontent.settings')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo e(__('aicontent::aicontent.ai_content')); ?></a>
                    <a href="<?php echo e(route('ai-content.settings')); ?>"><?php echo e(__('aicontent::aicontent.settings')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="box_header">
                        <div class="main-title d-flex">
                            <h3 class="mb-0 mr-30"><?php echo e(__('aicontent::aicontent.settings')); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content " id="myTabContent">
                                <div class="tab-pane fade show active" id="Activation" role="tabpanel"
                                    aria-labelledby="Activation-tab">
                                    <div class="main-title mb-25">
                                        <div class="main-title mb-25">
                                            <h3 class="mb-0"><?php echo e(__('aicontent::aicontent.open_ai_setup')); ?></h3>
                                        </div>
                                        <?php if(userPermission('ai-content.update_settings')): ?>
                                            <form action="<?php echo e(route('ai-content.settings-update')); ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <input type="hidden" value="<?php echo e($data['settings']->id); ?>" name="id">
                                        <?php endif; ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('aicontent::aicontent.open_ai_model')); ?></label>
                                                    <select class="primary_select mb-25" name="ai_default_model"
                                                        id="ai_default_model">
                                                        <?php $__currentLoopData = $data['ai_models']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ai_model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($key); ?>"
                                                                <?php echo e($data['settings']->ai_default_model == $key ? 'selected' : ''); ?>>
                                                                <?php echo e($ai_model); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('aicontent::aicontent.ai_default_language')); ?></label>
                                                    <select class="primary_select mb-25"
                                                        name="ai_default_language"
                                                        id="ai_default_language">
                                                        <?php $__currentLoopData = $data['languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($key); ?>"
                                                                <?php echo e($data['settings']->ai_default_language == $key ? 'selected' : ''); ?>>
                                                                <?php echo e($language); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('aicontent::aicontent.ai_tones')); ?></label>
                                                    <select class="primary_select mb-25" name="ai_default_tone"
                                                        id="ai_default_tone">
                                                        <?php $__currentLoopData = $data['ai_tones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ai_model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($key); ?>"
                                                                <?php echo e($data['settings']->ai_default_tone == $key ? 'selected' : ''); ?>>
                                                                <?php echo e($ai_model); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('aicontent::aicontent.max_result_length')); ?></label>
                                                    <input class="primary_input_field" placeholder="200"
                                                        type="number"
                                                        id="ai_max_result_length" name="ai_max_result_length"
                                                        value="<?php echo e($data['settings']->ai_max_result_length ?? 200); ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('aicontent::aicontent.ai_creativity')); ?></label>
                                                    <select class="primary_select mb-25"
                                                        name="ai_default_creativity"
                                                        id="ai_default_creativity">
                                                        <?php $__currentLoopData = $data['ai_creativity']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ai_creativity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($key); ?>"
                                                                <?php echo e($data['settings']->ai_default_creativity == $key ? 'selected' : ''); ?>>
                                                                <?php echo e($ai_creativity); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label" for="">
                                                        <?php echo e(__('aicontent::aicontent.open_ai_secrete_key')); ?>

                                                        (<a href="https://platform.openai.com/account/api-keys" target="_blank">
                                                            <?php echo e(__('aicontent::aicontent.click_here')); ?>

                                                        </a>
                                                        <span>
                                                            <?php echo e(__('aicontent::aicontent.for_your_api_key')); ?>

                                                        </span>)
                                                    </label>
                                                    <input class="primary_input_field" placeholder="sk-"
                                                        type="text"
                                                        id="open_ai_secrete_key" name="open_ai_secrete_key"
                                                        value="<?php echo e($data['settings']->open_ai_secret_key); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $tooltip = '';
                                            if (userPermission('settings.general_setting_update')) {
                                                $tooltip = '';
                                            } else {
                                                $tooltip = 'You have no permission to add';
                                            }
                                        ?>
                                        <div class="submit_btn text-center mt-4">
                                            <button class="primary_btn_large" type="submit"
                                                data-toggle="tooltip"
                                                title="<?php echo e($tooltip); ?>"><i class="ti-check"></i>
                                                <?php echo e(__('aicontent::aicontent.save')); ?></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/Modules/AiContent/Resources/views/setting/index.blade.php ENDPATH**/ ?>