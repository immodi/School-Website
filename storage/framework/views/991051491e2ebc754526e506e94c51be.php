
<?php $__env->startSection('title'); ?>
    <?php echo e(__('whatsappsupport::whatsappsupport.settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .radio-btn-flex label::before,
        .radio-btn-flex label::after {
            top: 0% !important;
            transform: translateY(0%) scale(1) rotate(8deg) !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('whatsappsupport::whatsappsupport.settings')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo e(__('whatsappsupport::whatsappsupport.whatsapp_support')); ?></a>
                    <a
                        href="<?php echo e(route('whatsapp-support.settings')); ?>"><?php echo e(__('whatsappsupport::whatsappsupport.settings')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex justify-content-between" style="width:100%;">
                                        <h3 class="mb-0 mr-30"><?php echo e(__('whatsappsupport::whatsappsupport.settings')); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <form action="<?php echo e(route('whatsapp-support.settings.update')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($whatappSupportSettings->id); ?>" name="id">
                                        <div class="row" id="pusher">
                                            <div class="col-xl-12">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('whatsappsupport::whatsappsupport.color')); ?></label>
                                                    <input class="primary_input_field" type="color" name="color"
                                                        value="<?php echo e($whatappSupportSettings->color ?? ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('whatsappsupport::whatsappsupport.intro_text')); ?></label>
                                                    <input class="primary_input_field" name="intro_text" type="text"
                                                        value="<?php echo e($whatappSupportSettings->intro_text ?? ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('whatsappsupport::whatsappsupport.welcome_message')); ?></label>
                                                    <input class="primary_input_field" name="welcome_message" type="text"
                                                        value="<?php echo e($whatappSupportSettings->welcome_message ?? ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="primary-btn radius_30px  fix-gr-bg"><i
                                                class="ti-check"></i><?php echo e(__('whatsappsupport::whatsappsupport.update')); ?></button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-4">
                                <div class="white_box_30px">
                                    <div class="main-title mb-25">
                                        <h3 class="mb-3"><?php echo e(__('whatsappsupport::whatsappsupport.functional_settings')); ?>

                                        </h3>
                                    </div>
                                    <form action="<?php echo e(route('whatsapp-support.settings.update')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($whatappSupportSettings->id); ?>" name="id">
                                        <div class="row" id="pusher">
                                            <div class="col-xl-6">
                                                <p class="primary_input_label">
                                                    <?php echo e(__('whatsappsupport::whatsappsupport.agent_type')); ?></p>
                                                <div class="d-flex radio-btn-flex">
                                                    <div class="mr-20">
                                                        <input type="radio" name="agent_type"
                                                            <?php echo e($whatappSupportSettings->agent_type == 'multi' ? 'checked' : ''); ?>

                                                            id="relationFather3" value="multi"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationFather3"><?php echo e(__('whatsappsupport::whatsappsupport.multi_agent')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="agent_type"
                                                            <?php echo e($whatappSupportSettings->agent_type == 'single' ? 'checked' : ''); ?>

                                                            id="relationMother4" value="single"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother4"><?php echo e(__('whatsappsupport::whatsappsupport.single_agent')); ?></label>
                                                    </div>
                                                    <?php $__errorArgs = ['agent_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <p class="primary_input_label">
                                                    <?php echo e(__('whatsappsupport::whatsappsupport.availability')); ?></p>
                                                <div class="d-flex radio-btn-flex">
                                                    <div class="mr-20">
                                                        <input type="radio" name="availability"
                                                            <?php echo e($whatappSupportSettings->availability == 'mobile' ? 'checked' : ''); ?>

                                                            id="relationFather33333" value="mobile"
                                                            class="common-radio relationButton" checked>
                                                        <label
                                                            for="relationFather33333"><?php echo e(__('whatsappsupport::whatsappsupport.only_mobile')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="availability"
                                                            <?php echo e($whatappSupportSettings->availability == 'desktop' ? 'checked' : ''); ?>

                                                            id="relationMother4433" value="desktop"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother4433"><?php echo e(__('whatsappsupport::whatsappsupport.only_desktop')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="availability"
                                                            <?php echo e($whatappSupportSettings->availability == 'both' ? 'checked' : ''); ?>

                                                            id="relationMother4222" value="both"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother4222"><?php echo e(__('whatsappsupport::whatsappsupport.both')); ?></label>
                                                    </div>
                                                    <?php $__errorArgs = ['availability'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 mt-4">
                                                <p class="primary_input_label">
                                                    <?php echo e(__('whatsappsupport::whatsappsupport.showing_page')); ?></p>
                                                <div class="d-flex radio-btn-flex">
                                                    <div class="mr-20">
                                                        <input type="radio" name="showing_page"
                                                            <?php echo e($whatappSupportSettings->showing_page == 'homepage' ? 'checked' : ''); ?>

                                                            id="relationFather311" value="homepage"
                                                            class="common-radio relationButton" checked>
                                                        <label
                                                            for="relationFather311"><?php echo e(__('whatsappsupport::whatsappsupport.only_homepage')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="showing_page"
                                                            <?php echo e($whatappSupportSettings->showing_page == 'all' ? 'checked' : ''); ?>

                                                            id="relationMother411" value="all"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother411"><?php echo e(__('whatsappsupport::whatsappsupport.all_page')); ?></label>
                                                    </div>
                                                    <?php $__errorArgs = ['showing_page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 mt-4">
                                                <p class="primary_input_label">
                                                    <?php echo e(__('whatsappsupport::whatsappsupport.popup_open_initially')); ?></p>
                                                <div class="d-flex radio-btn-flex">
                                                    <div class="mr-20">
                                                        <input type="radio" name="open_popup"
                                                            <?php echo e($whatappSupportSettings->open_popup == 1 ? 'checked' : ''); ?>

                                                            id="relationFather3119" value="1"
                                                            class="common-radio relationButton" checked>
                                                        <label
                                                            for="relationFather3119"><?php echo e(__('whatsappsupport::whatsappsupport.yes')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="open_popup"
                                                            <?php echo e($whatappSupportSettings->open_popup == 0 ? 'checked' : ''); ?>

                                                            id="relationMother4119" value="0"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother4119"><?php echo e(__('whatsappsupport::whatsappsupport.no')); ?></label>
                                                    </div>
                                                    <?php $__errorArgs = ['open_popup'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-4">
                                                <p class="primary_input_label">
                                                    <?php echo e(__('whatsappsupport::whatsappsupport.show_unavailable_agent_in_popup')); ?>

                                                </p>
                                                <div class="d-flex radio-btn-flex">
                                                    <div class="mr-20">
                                                        <input type="radio" name="show_unavailable_agent"
                                                            <?php echo e($whatappSupportSettings->show_unavailable_agent == 1 ? 'checked' : ''); ?>

                                                            id="relationFather33333v" value="1"
                                                            class="common-radio relationButton" checked>
                                                        <label
                                                            for="relationFather33333v"><?php echo e(__('whatsappsupport::whatsappsupport.yes')); ?></label>
                                                    </div>
                                                    <div class="mr-20">
                                                        <input type="radio" name="show_unavailable_agent"
                                                            <?php echo e($whatappSupportSettings->show_unavailable_agent == 0 ? 'checked' : ''); ?>

                                                            id="relationMother4433v" value="0"
                                                            class="common-radio relationButton">
                                                        <label
                                                            for="relationMother4433v"><?php echo e(__('whatsappsupport::whatsappsupport.no')); ?></label>
                                                    </div>
                                                    <?php $__errorArgs = ['show_unavailable_agent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            

                                            <div class="col-xl-6 mt-4">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('whatsappsupport::whatsappsupport.homepage_url')); ?></label>
                                                    <input class="primary_input_field" name="homepage_url" type="text"
                                                        value="<?php echo e($whatappSupportSettings->homepage_url ?? ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 mt-4">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                        for=""><?php echo e(__('whatsappsupport::whatsappsupport.primary_number')); ?>

                                                        (<small
                                                            class="text-danger"><?php echo e(__('whatsappsupport::whatsappsupport.with_country_code')); ?></small>)</label>
                                                    <input class="primary_input_field" name="primary_number"
                                                        type="text"
                                                        value="<?php echo e($whatappSupportSettings->primary_number ?? ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-4">
                                                <div class="primary_input">
                                                    <label class="primary_input_label" for="">
                                                        <?php echo e(__('whatsappsupport::whatsappsupport.whatsapp bubble logo')); ?>

                                                    </label>
                                                    <div class="primary_file_uploader">
                                                        <input class="primary_input_field form-control" type="text"
                                                            id="placeholderInput" name="bubble_logo"
                                                            placeholder="<?php echo e(isset($whatappSupportSettings) ? (@$whatappSupportSettings->bubble_logo != '' ? getFilePath3(@$whatappSupportSettings->bubble_logo) : trans('common.image')) : trans('common.image')); ?>"
                                                            readonly>
                                                        <button class="" type="button">
                                                            <label class="primary-btn small fix-gr-bg" for="browseFile">
                                                                <?php echo e(__('whatsappsupport::whatsappsupport.Browse')); ?>

                                                            </label>
                                                            <input type="file" class="d-none"
                                                                name="bubble_logo" id="browseFile">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="primary-btn radius_30px fix-gr-bg mt-4"><i
                                                class="ti-check"></i><?php echo e(__('whatsappsupport::whatsappsupport.update')); ?></button>
                                    </form>

                                </div>
                            </div>

                            <div class="col-lg-12 mt-4">
                                <div class="white_box_30px">
                                    <div class="main-title mb-25">
                                        <h3 class="mb-0"><?php echo e(__('whatsappsupport::whatsappsupport.layout_settings')); ?>

                                        </h3>
                                    </div>
                                    <form action="<?php echo e(route('whatsapp-support.settings.update')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" value="<?php echo e($whatappSupportSettings->id); ?>" name="id">
                                        <div class="col-xl-12">
                                            <p class="primary_input_label mb-3">
                                                <?php echo e(__('whatsappsupport::whatsappsupport.choose_layout')); ?></p>
                                            <div class="d-flex radio-btn-flex flex-wrap row-gap-24">
                                                <div class="mr-20">
                                                    <input type="radio" name="layout"
                                                        <?php echo e($whatappSupportSettings->layout == 1 ? 'checked' : ''); ?>

                                                        id="relationFather113" value="1"
                                                        class="common-radio relationButton">
                                                    <label for="relationFather113"><img style="border-radius: 10px"
                                                            src="<?php echo e(asset('public\whatsapp-support\preview-1.png')); ?>"
                                                            alt=""></label>
                                                </div>
                                                <div class="mr-20">
                                                    <input type="radio" name="layout"
                                                        <?php echo e($whatappSupportSettings->layout == 2 ? 'checked' : ''); ?>

                                                        id="relationMother1114" value="2"
                                                        class="common-radio relationButton">
                                                    <label for="relationMother1114"><img style="border-radius: 10px"
                                                            src="<?php echo e(asset('public\whatsapp-support\preview-2.png')); ?>"
                                                            alt=""></label>
                                                </div>
                                                <?php $__errorArgs = ['layout'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <small class="text-danger font-italic">*<?php echo e($message); ?></small>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <button class="primary-btn radius_30px mt-4 fix-gr-bg"><i
                                                class="ti-check"></i><?php echo e(__('whatsappsupport::whatsappsupport.update')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/Modules/WhatsappSupport/Resources/views/settings/index.blade.php ENDPATH**/ ?>