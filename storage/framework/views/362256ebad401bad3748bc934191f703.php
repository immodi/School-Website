
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('leave.leave_define'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php if(isset($leave_define)): ?>
        <?php if(is_null($staff)): ?>
            <style>
                #selectStaffsDiv {
                    display: none;
                }

                .forStudentWrapper {
                    display: block;
                }
            </style>
        <?php endif; ?>
        <?php if(is_null($student)): ?>
            <style>
                #selectStaffsDiv {
                    display: block;
                }

                .forStudentWrapper {
                    display: none;
                }
            </style>
        <?php endif; ?>
    <?php else: ?>
        <style type="text/css">
            #selectStaffsDiv,
            .forStudentWrapper {
                display: none;
            }
        </style>
    <?php endif; ?>
    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('leave.leave_define'); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('leave.leave'); ?></a>
                    <a href="#"><?php echo app('translator')->get('leave.leave_define'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_admin_visitor">
        <div class="container-fluid p-0">
            <?php if(isset($leave_define)): ?>
                <?php if(userPermission('leave-define-store')): ?>
                    <div class="row">
                        <div class="offset-lg-10 col-lg-2 text-right col-md-12 mb-20">
                            <a href="<?php echo e(route('leave-define')); ?>" class="primary-btn small fix-gr-bg">
                                <span class="ti-plus pr-2"></span>
                                <?php echo app('translator')->get('common.add'); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(isset($leave_define)): ?>
                                <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => ['leave-define-update', $leave_define->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data'])); ?>

                            <?php else: ?>
                                <?php if(userPermission('leave-define-store')): ?>
                                    <?php echo e(Form::open([
                                        'class' => 'form-horizontal',
                                        'files' => true,
                                        'route' => 'leave-define-store',
                                        'method' => 'POST',
                                        'enctype' => 'multipart/form-data',
                                    ])); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                            <input type="hidden" name="id" value="<?php echo e(isset($leave_define) ? $leave_define->id : ''); ?>">
                            <div class="white-box">
                                <div class="main-title">
                                    <h3 class="mb-15">
                                        <?php if(isset($leave_define)): ?>
                                            <?php echo app('translator')->get('leave.edit_leave_define'); ?>
                                        <?php else: ?>
                                            <?php echo app('translator')->get('leave.add_leave_define'); ?>
                                        <?php endif; ?>
    
                                    </h3>
                                </div>
                                <div class="add-visitor">
                                    <div class="row">
                                        <div class="col-lg-12 mb-15">
                                            <label class="primary_input_label" for=""><?php echo app('translator')->get('hr.role'); ?> <span
                                                    class="text-danger"> *</span> </label>
                                            <select
                                                class="primary_select  form-control<?php echo e($errors->has('member_type') ? ' is-invalid' : ''); ?>"
                                                name="member_type" id="member_type">
                                                <option data-display=" <?php echo app('translator')->get('leave.select_role'); ?> *" value="">
                                                    <?php echo app('translator')->get('leave.select_role'); ?> *</option>
                                                <?php if(isset($leave_define)): ?>
                                                    <?php if(!is_null($student)): ?>
                                                        <option value="<?php echo e(@$student->student->role_id); ?>" selected>
                                                            <?php echo e(@$student->student->roles->name); ?></option>
                                                    <?php endif; ?>

                                                    <?php if(!is_null($staff)): ?>
                                                        <option value="<?php echo e(@$staff->role_id); ?>" selected>
                                                            <?php echo e(@$staff->roles->name); ?></option>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                            <?php if($errors->has('member_type')): ?>
                                                <span class="text-danger">
                                                    <?php echo e($errors->first('member_type')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="forStudentWrapper col-lg-12">
                                            <?php if(moduleStatusCheck('University')): ?>
                                                <?php if ($__env->exists(
                                                    'university::common.session_faculty_depart_academic_semester_level',
                                                    [
                                                        'required' => ['USN', 'UF', 'UD', 'UA', 'US', 'USL'],
                                                        'hide' => ['USUB'],
                                                        'row' => 1,
                                                        'div' => 'col-lg-12',
                                                        'mt' => 'mt-0',
                                                    ]
                                                )) echo $__env->make(
                                                    'university::common.session_faculty_depart_academic_semester_level',
                                                    [
                                                        'required' => ['USN', 'UF', 'UD', 'UA', 'US', 'USL'],
                                                        'hide' => ['USUB'],
                                                        'row' => 1,
                                                        'div' => 'col-lg-12',
                                                        'mt' => 'mt-0',
                                                    ]
                                                , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php else: ?>
                                                <div class="row">
                                                    <div class="col-lg-12 mb-15">
                                                        <select
                                                            class="primary_select form-control <?php echo e($errors->has('class') ? ' is-invalid' : ''); ?>"
                                                            id="class_library_member" name="class">
                                                            <option data-display="<?php echo app('translator')->get('common.select_class'); ?>" value="">
                                                                <?php echo app('translator')->get('common.select_class'); ?></option>
                                                            <?php if(!isset($leave_define)): ?>
                                                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($class->id); ?>"
                                                                        <?php echo e(old('class') == $class->id ? 'selected' : ''); ?>>
                                                                        <?php echo e($class->class_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <option value="<?php echo e(@$student->class_id); ?>" selected>
                                                                    <?php echo e(@$student->class->class_name); ?></option>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-15" id="select_section__member_div">
                                                        <select
                                                            class="primary_select form-control<?php echo e($errors->has('section') ? ' is-invalid' : ''); ?>"
                                                            id="select_section_member" name="section">
                                                            <option data-display="<?php echo app('translator')->get('common.select_section'); ?>" value="">
                                                                <?php echo app('translator')->get('common.select_section'); ?></option>
                                                            <?php if(isset($leave_define)): ?>
                                                                <option value="<?php echo e(@$student->user_id); ?>" selected>
                                                                    <?php echo e(@$student->section->section_name); ?></option>
                                                            <?php endif; ?>
                                                        </select>
                                                        <div class="pull-right loader loader_style"
                                                            id="select_section_loader">
                                                            <img class="loader_img_style"
                                                                src="<?php echo e(asset('public/backEnd/img/demo_wait.gif')); ?>"
                                                                alt="loader">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-15" id="select_student_div">
                                                        <select
                                                            class="primary_select form-control<?php echo e($errors->has('student') ? ' is-invalid' : ''); ?>"
                                                            id="select_student" name="student">
                                                            <option data-display="<?php echo app('translator')->get('common.select_student'); ?> " value="">
                                                                <?php echo app('translator')->get('common.select_student'); ?></option>
                                                            <?php if(isset($leave_define)): ?>
                                                                <option value="<?php echo e(@$student->student->user_id); ?>" selected>
                                                                    <?php echo e(@$student->student->full_name); ?></option>
                                                            <?php endif; ?>
                                                        </select>
                                                        <div class="pull-right loader loader_style"
                                                            id="select_student_loader">
                                                            <img class="loader_img_style"
                                                                src="<?php echo e(asset('public/backEnd/img/demo_wait.gif')); ?>"
                                                                alt="loader">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-lg-12 mb-15" id="selectStaffsDiv">
                                            <label class="primary_input_label" for=""><?php echo app('translator')->get('hr.staff'); ?>
                                                <span></span> </label>
                                            <select
                                                class="primary_select  form-control<?php echo e($errors->has('staff_id') ? ' is-invalid' : ''); ?>"
                                                name="staff" id="selectStaffs">
                                                <option data-display="<?php echo app('translator')->get('common.name'); ?> " value=""><?php echo app('translator')->get('common.name'); ?>
                                                </option>
                                                <?php if(!isset($leave_define)): ?>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->full_name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <option value="<?php echo e(@$staff->user_id); ?>" selected>
                                                        <?php echo e(@$staff->full_name); ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="primary_input_label" for=""><?php echo app('translator')->get('leave.leave_type'); ?> <span
                                                    class="text-danger"> *</span> </label>
                                            <select
                                                class="primary_select  form-control<?php echo e($errors->has('leave_type') ? ' is-invalid' : ''); ?>"
                                                name="leave_type">
                                                <option data-display="<?php echo app('translator')->get('leave.leave_type'); ?>  *" value="">
                                                    <?php echo app('translator')->get('leave.leave_type'); ?> *</option>
                                                <?php $__currentLoopData = $leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($leave_type->id); ?>"
                                                        <?php echo e(isset($leave_define) ? ($leave_define->type_id == $leave_type->id ? 'selected' : '') : ''); ?>>
                                                        <?php echo e($leave_type->type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('leave_type')): ?>
                                                <span class="text-danger invalid-select" role="alert">
                                                    <?php echo e($errors->first('leave_type')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-lg-12">
                                            <div class="primary_input">
                                                <label class="primary_input_label" for=""><?php echo app('translator')->get('leave.days'); ?> <span
                                                        class="text-danger"> *</span> </label>
                                                <input
                                                    class="primary_input_field form-control<?php echo e($errors->has('days') ? ' is-invalid' : ''); ?>"
                                                    type="text" name="days" autocomplete="off"
                                                    value="<?php echo e(isset($leave_define) ? $leave_define->days : ''); ?>">


                                                <?php if($errors->has('days')): ?>
                                                    <span class="text-danger">
                                                        <?php echo e($errors->first('days')); ?>

                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $tooltip = '';
                                        if (userPermission('leave-define-store') || userPermission('leave-define-edit')) {
                                            $tooltip = '';
                                        } else {
                                            $tooltip = 'You have no permission to add';
                                        }
                                    ?>
                                    <div class="row mt-40">
                                        <div class="col-lg-12 text-center">
                                            <button class="primary-btn fix-gr-bg submit" data-toggle="tooltip"
                                                title="<?php echo e($tooltip); ?>">
                                                <span class="ti-check"></span>
                                                <?php if(isset($editData)): ?>
                                                    <?php echo app('translator')->get('common.update'); ?>
                                                <?php else: ?>
                                                    <?php echo app('translator')->get('common.save'); ?>
                                                <?php endif; ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-4 no-gutters">
                                <div class="main-title">
                                    <h3 class="mb-15"><?php echo app('translator')->get('leave.leave_define_list'); ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
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
                                    <table id="table_id" class="table data-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><?php echo app('translator')->get('leave.user'); ?></th>
                                                <th><?php echo app('translator')->get('leave.role'); ?></th>
                                                <th><?php echo app('translator')->get('leave.leave_type'); ?></th>
                                                <th><?php echo app('translator')->get('leave.days'); ?></th>
                                                <th><?php echo app('translator')->get('common.action'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
    
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
        </div>
    </section>


    <!-- MOdal Here  -->
    <div class="modal fade admin-query" id="deleteLeaveDefineModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('leave.delete_leave_define'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h2><?php echo app('translator')->get('common.are_you_sure_to_delete'); ?></h2>
                    </div>
                    <div class="mt-40 d-flex justify-content-between">
                        <button type="button" class="primary-btn tr-bg" data-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
                        <?php echo e(Form::open(['route' => ['leave-define-delete'], 'method' => 'DELETE', 'enctype' => 'multipart/form-data'])); ?>

                        <input type="hidden" name="id" id="showId">
                        <button class="primary-btn fix-gr-bg" type="submit"><?php echo app('translator')->get('common.delete'); ?></button>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- add Days Modal  -->
    <div class="modal fade admin-query" id="addLeaveDayModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('leave.add_days'); ?> </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php echo e(Form::open(['route' => 'leave-define-updateLeave', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                    <div class="form-group">
                        <input type="hidden" name="id" id="showId">
                        <div class="row mt-15">
                            <div class="col-lg-12">
                                <div class="primary_input">
                                    <label class="primary_input_label" for=""><?php echo app('translator')->get('leave.days'); ?> <span
                                            class="text-danger"> *</span> </label>
                                    <input class="primary_input_field form-control has-content" type="text"
                                        name="days" autocomplete="off" id="showDays">

                                    <?php if($errors->has('days')): ?>
                                        <span class="text-danger">
                                            <?php echo e($errors->first('days')); ?>

                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-40 d-flex justify-content-between">
                        <button type="button" class="primary-btn tr-bg" data-dismiss="modal"><?php echo app('translator')->get('common.close'); ?></button>
                        <button class="primary-btn fix-gr-bg" type="submit"><?php echo app('translator')->get('common.add'); ?></button>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        function deleteLeaveDefine(id) {
            var modal = $('#deleteLeaveDefineModal');
            modal.find('#showId').val(id)
            modal.modal('show');

        }

        function addLeaveDay(id) {
            var modal = $('#addLeaveDayModal');
            var total_days = $('.reason' + id).data('total_days');
            modal.find('#showId').val(id);
            modal.find('#showDays').val(total_days);
            modal.modal('show');
        }
    </script>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('backEnd.partials.server_side_datatable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        //
        // DataTables initialisation
        //
        $(document).ready(function() {
            $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                "ajax": $.fn.dataTable.pipeline({
                    url: "<?php echo e(url('leave-define-ajax')); ?>",
                    data: {},
                    pages: "<?php echo e(generalSetting()->ss_page_load); ?>" // number of pages to cache

                }),
                columns: [{
                        data: 'user.full_name',
                        name: 'user.full_name'
                    },
                    {
                        data: 'role.name',
                        name: 'role.name'
                    },
                    {
                        data: 'leave_type',
                        name: 'leaveType.type'
                    },
                    {
                        data: 'days',
                        name: 'days'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
                bLengthChange: false,
                bDestroy: true,
                language: {
                    search: "<i class='ti-search'></i>",
                    searchPlaceholder: window.jsLang('quick_search'),
                    paginate: {
                        next: "<i class='ti-arrow-right'></i>",
                        previous: "<i class='ti-arrow-left'></i>",
                    },
                },
                dom: "Bfrtip",
                buttons: [{
                        extend: "copyHtml5",
                        text: '<i class="fa fa-files-o"></i>',
                        title: $("#logo_title").val(),
                        titleAttr: window.jsLang('copy_table'),
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        },
                    },
                    {
                        extend: "excelHtml5",
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: window.jsLang('export_to_excel'),
                        title: $("#logo_title").val(),
                        margin: [10, 10, 10, 0],
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        },
                    },
                    {
                        extend: "csvHtml5",
                        text: '<i class="fa fa-file-text-o"></i>',
                        titleAttr: window.jsLang('export_to_csv'),
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        },
                    },
                    {
                        extend: "pdfHtml5",
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        title: $("#logo_title").val(),
                        titleAttr: window.jsLang('export_to_pdf'),
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        },
                        orientation: "landscape",
                        pageSize: "A4",
                        margin: [0, 0, 0, 12],
                        alignment: "center",
                        header: true,
                        customize: function(doc) {
                            doc.content[1].margin = [100, 0, 100, 0]; //left, top, right, bottom
                            doc.content.splice(1, 0, {
                                margin: [0, 0, 0, 12],
                                alignment: "center",
                                image: "data:image/png;base64," + $("#logo_img").val(),
                            });
                            doc.defaultStyle = {
                                font: "DejaVuSans",
                            };
                        },
                    },
                    {
                        extend: "print",
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: window.jsLang('print'),
                        title: $("#logo_title").val(),
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        },
                    },
                    {
                        extend: "colvis",
                        text: '<i class="fa fa-columns"></i>',
                        postfixButtons: ["colvisRestore"],
                    },
                ],
                columnDefs: [{
                    visible: false,
                }, ],
                responsive: true,
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/backEnd/humanResource/leave_define.blade.php ENDPATH**/ ?>