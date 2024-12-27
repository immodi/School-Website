<?php if (! $__env->hasRenderedOnce('649335bd-4884-46e3-a816-228e6e0551be')): $__env->markAsRenderedOnce('649335bd-4884-46e3-a816-228e6e0551be');
$__env->startPush(config('pagebuilder.site_style_var')); ?>
    <style>
        .nice-select:after {
            display: none !important;
        }
    </style>
<?php $__env->stopPush(); endif; ?>
<div class="container section_padding px-3 px-sm-0">
    <div class="user_list_container">
        <div class="common_data_table profile_list">
            <?php if (isset($component)) { $__componentOriginal03c15e8d4b8f730ef51f5115f970ec50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03c15e8d4b8f730ef51f5115f970ec50 = $attributes; } ?>
<?php $component = App\View\Components\FrontendTeacherList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-teacher-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontendTeacherList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03c15e8d4b8f730ef51f5115f970ec50)): ?>
<?php $attributes = $__attributesOriginal03c15e8d4b8f730ef51f5115f970ec50; ?>
<?php unset($__attributesOriginal03c15e8d4b8f730ef51f5115f970ec50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03c15e8d4b8f730ef51f5115f970ec50)): ?>
<?php $component = $__componentOriginal03c15e8d4b8f730ef51f5115f970ec50; ?>
<?php unset($__componentOriginal03c15e8d4b8f730ef51f5115f970ec50); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php if (! $__env->hasRenderedOnce('d1035b84-4f75-4438-8072-609ef30547c1')): $__env->markAsRenderedOnce('d1035b84-4f75-4438-8072-609ef30547c1');
$__env->startPush(config('pagebuilder.site_script_var')); ?>
    <script>
        if($('.common_data_table .dataTables_length label select').length > 0){
            $('.common_data_table .dataTables_length label select').niceSelect('destroy');
            $(".common_data_table .dataTables_length label select").select2({
                minimumResultsForSearch: Infinity
            });
        }
    </script>
<?php $__env->stopPush(); endif; ?>

<?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/themes/edulia/pagebuilder/teacher-list-page/view.blade.php ENDPATH**/ ?>