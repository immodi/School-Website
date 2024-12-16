<div class="text-center">
    <h4><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?>?</h4>
</div>

<div class="mt-40 d-flex justify-content-between">
    <button type="button" class="primary-btn tr-bg" data-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
    <a href="<?php echo e(route('delete-homework-content',$homework_id)); ?>" class="text-light">
    <button class="primary-btn fix-gr-bg" type="submit"><?php echo app('translator')->get('common.delete'); ?></button>

     </a>
</div>

<?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/backEnd/studentPanel/deleteHomeworkContent.blade.php ENDPATH**/ ?>