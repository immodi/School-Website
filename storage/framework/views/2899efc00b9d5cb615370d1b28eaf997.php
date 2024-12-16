<?php if (isset($component)) { $__componentOriginal5828d9175fa53510a68ffc290f67c972 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5828d9175fa53510a68ffc290f67c972 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.drop-down','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('drop-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php
        $is_set_online_exam_questions = DB::table('sm_online_exam_question_assigns')
            ->where('online_exam_id', $row->id)
            ->first();
        $startTime = strtotime($row->date . ' ' . $row->start_time);
        $endTime = strtotime($row->date . ' ' . $row->end_time);
        $now = date('h:i:s');
        $now = strtotime('now');
    ?>
    <?php if($startTime < $now && $row->status == 1): ?>
    <?php else: ?>
        <?php if(!empty($is_set_online_exam_questions)): ?>
            <?php if(userPermission('manage_online_exam_question')): ?>
                <a class="dropdown-item"
                    href="<?php echo e(route('manage_online_exam_question', [$row->id])); ?>"><?php echo app('translator')->get('exam.manage_question'); ?></a>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($startTime < $now && $row->status == 1): ?>
        <?php if(userPermission('online_exam_marks_register')): ?>
            <a class="dropdown-item"
                href="<?php echo e(route('online_exam_marks_register', [$row->id])); ?>"><?php echo app('translator')->get('exam.marks_register'); ?></a>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($startTime < $now && $row->status == 1): ?>
    <?php else: ?>
        <?php if(userPermission('online-exam-edit')): ?>
            <a class="dropdown-item"
                href="<?php echo e(route('online-exam-edit', $row->id)); ?>"><?php echo app('translator')->get('common.edit'); ?></a>
        <?php endif; ?>
        <?php if(userPermission(241)): ?>
            <a onclick="examDelete(<?php echo e($row->id); ?>)"
                href="javascript:void(0)"
                class="dropdown-item "><?php echo app('translator')->get('common.delete'); ?></a>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(!empty($is_set_online_exam_questions)): ?>
        <?php if(userPermission('online-exam-question-view')): ?>
            <a class="dropdown-item"
                href="<?php echo e(route('online-exam-question-view', [$row->id])); ?>"><?php echo app('translator')->get('common.view_question'); ?></a>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($row->end_date_time < date('Y-m-d H:i:s') && $row->status == 1): ?>
        <?php if(userPermission('online_exam_result')): ?>
            <a class="dropdown-item"
                href="<?php echo e(route('online_exam_result', [$row->id])); ?>"><?php echo app('translator')->get('exam.result'); ?></a>
        <?php endif; ?>
    <?php endif; ?>
    <!-- </div> -->
    <?php if(empty($is_set_online_exam_questions)): ?>
        <?php if(userPermission('manage_online_exam_question')): ?>
            <a href="<?php echo e(route('manage_online_exam_question', [$row->id])); ?>" class="dropdown-item">
                <?php echo app('translator')->get('exam.set_question'); ?>
            </a>
        <?php endif; ?>
    <?php else: ?>
        <?php if($row->status == 0): ?>
            <a href="<?php echo e(route('online_exam_publish', [$row->id])); ?>" class="dropdown-item">
               <?php echo app('translator')->get('exam.published_now'); ?>
            </a>
        <?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5828d9175fa53510a68ffc290f67c972)): ?>
<?php $attributes = $__attributesOriginal5828d9175fa53510a68ffc290f67c972; ?>
<?php unset($__attributesOriginal5828d9175fa53510a68ffc290f67c972); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5828d9175fa53510a68ffc290f67c972)): ?>
<?php $component = $__componentOriginal5828d9175fa53510a68ffc290f67c972; ?>
<?php unset($__componentOriginal5828d9175fa53510a68ffc290f67c972); ?>
<?php endif; ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/backEnd/examination/online_exam_action.blade.php ENDPATH**/ ?>