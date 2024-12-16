<?php if (! $__env->hasRenderedOnce('1b97c620-9f09-47cb-b2ba-c3648524c679')): $__env->markAsRenderedOnce('1b97c620-9f09-47cb-b2ba-c3648524c679');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        iframe {
            width: 100% !important;
            height: 100% !important;
        }
        .google_map{
            height: 200px;
        }
    </style>
<?php $__env->stopPush(); endif; ?>
<div class="contacts_info mt-5">
    <p><?php echo pagesetting('google_map_editor'); ?></p>
    <div class="google_map w-100">
        <?php echo pagesetting('google_map_key'); ?>

    </div>
</div>
<?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/themes/edulia/pagebuilder/google-map/view.blade.php ENDPATH**/ ?>