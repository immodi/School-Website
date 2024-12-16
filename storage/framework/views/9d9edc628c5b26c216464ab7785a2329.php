
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('hr.payroll_report'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php
        $setting = generalSetting();
        if (!empty($setting->currency_symbol)) {
            $currency = $setting->currency_symbol;
        } else {
            $currency = '$';
        }
    ?>

    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo app('translator')->get('hr.payroll_report'); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                    <a href="#"><?php echo app('translator')->get('hr.human_resource'); ?></a>
                    <a href="#"><?php echo app('translator')->get('hr.payroll_report'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">

                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="main-title">
                                    <h3 class="mb-15"><?php echo app('translator')->get('common.select_criteria'); ?> </h3>
                                </div>
                            </div>
                        </div>
                        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'searchPayrollReport', 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                        <div class="row">
                            <div class="col-lg-4">
                                <select
                                    class="primary_select  form-control <?php echo e($errors->has('role_id') ? ' is-invalid' : ''); ?>"
                                    name="role_id" id="role_id">
                                    <option data-display="<?php echo app('translator')->get('hr.role'); ?> *" value=""><?php echo app('translator')->get('common.select'); ?> *</option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->id); ?>"
                                            <?php echo e(isset($role_id) ? ($role_id == $value->id ? 'selected' : '') : ''); ?>>
                                            <?php echo e($value->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('role_id')): ?>
                                    <span class="text-danger invalid-select" role="alert">
                                        <?php echo e($errors->first('role_id')); ?>

                                    </span>
                                <?php endif; ?>
                            </div>

                            <?php $month = date('F'); ?>
                            <div class="col-lg-4 mt-30-lg">
                                <select
                                    class="primary_select  form-control <?php echo e($errors->has('payroll_month') ? 'is-invalid' : ''); ?>"
                                    name="payroll_month" id="payroll_month">
                                    <option data-display="<?php echo app('translator')->get('student.select_month'); ?> *" value=""><?php echo app('translator')->get('student.select_month'); ?> *</option>
                                    <option value="January"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'January' ? 'selected' : '') : ($month == 'January' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.january'); ?></option>
                                    <option value="February"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'February' ? 'selected' : '') : ($month == 'February' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.february'); ?></option>
                                    <option value="March"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'March' ? 'selected' : '') : ($month == 'March' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.march'); ?></option>
                                    <option value="April"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'April' ? 'selected' : '') : ($month == 'April' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.april'); ?></option>
                                    <option value="May"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'May' ? 'selected' : '') : ($month == 'May' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.may'); ?></option>
                                    <option value="June"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'June' ? 'selected' : '') : ($month == 'June' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.june'); ?></option>
                                    <option value="July"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'July' ? 'selected' : '') : ($month == 'July' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.july'); ?></option>
                                    <option value="August"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'August' ? 'selected' : '') : ($month == 'August' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.august'); ?></option>
                                    <option value="September"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'September' ? 'selected' : '') : ($month == 'September' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.september'); ?></option>
                                    <option value="October"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'October' ? 'selected' : '') : ($month == 'October' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.october'); ?></option>
                                    <option value="November"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'November' ? 'selected' : '') : ($month == 'November' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.november'); ?></option>
                                    <option value="December"
                                        <?php echo e(isset($payroll_month) ? ($payroll_month == 'December' ? 'selected' : '') : ($month == 'December' ? 'selected' : '')); ?>>
                                        <?php echo app('translator')->get('student.december'); ?></option>
                                </select>
                                <?php if($errors->has('payroll_month')): ?>
                                    <span class="text-danger invalid-select" role="alert">
                                        <?php echo e($errors->first('payroll_month')); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-4 mt-30-lg">
                                <select
                                    class="primary_select  form-control <?php echo e($errors->has('payroll_year') ? 'is-invalid' : ''); ?>"
                                    name="payroll_year" id="payroll_year">
                                    <option data-display="<?php echo app('translator')->get('hr.select_year'); ?>*" value=""><?php echo app('translator')->get('hr.select_year'); ?> *</option>

                                    <?php
                                        $year = date('Y');
                                        $ini = date('y');
                                        $limit = $ini + 30;

                                    ?>

                                    <?php for($i = $ini; $i <= $limit; $i++): ?>
                                        <option value="<?php echo e($year); ?>"
                                            <?php echo e(isset($payroll_year) ? ($payroll_year == $year ? 'selected' : '') : (date('Y') == $year ? 'selected' : '')); ?>>
                                            <?php echo e($year--); ?></option>
                                    <?php endfor; ?>
                                </select>
                                <?php if($errors->has('payroll_year')): ?>
                                    <span class="text-danger invalid-select" role="alert">
                                        <?php echo e($errors->first('payroll_year')); ?>

                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12 mt-20 text-right">
                                <button type="submit" class="primary-btn small fix-gr-bg">
                                    <span class="ti-search pr-2"></span>
                                    <?php echo app('translator')->get('common.search'); ?>
                                </button>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
            <?php if(isset($staffsPayroll)): ?>
                <div class="row mt-40">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-lg-4 no-gutters">
                                    <div class="main-title">
                                        <h3 class="mb-15"><?php echo app('translator')->get('hr.staff_list'); ?></h3>
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
                                        <table id="table_id" class="table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><?php echo app('translator')->get('hr.staff_name'); ?></th>
                                                    <th><?php echo app('translator')->get('hr.role'); ?></th>
                                                    <th><?php echo app('translator')->get('common.description'); ?></th>
                                                    <th><?php echo app('translator')->get('hr.month_year'); ?></th>
                                                    <th><?php echo app('translator')->get('hr.payslip'); ?> #</th>
                                                    <th><?php echo app('translator')->get('hr.basic_salary'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('hr.earnings'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('hr.deductions'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('leave.leave_deductions'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('hr.gross_salary'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('hr.tax'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                    <th><?php echo app('translator')->get('hr.net_salary'); ?>(<?php echo e(generalSetting()->currency_symbol); ?>)</th>
                                                </tr>
                                            </thead>
    
                                            <tbody>
                                                <?php
                                                    $basic_salary = 0;
                                                    $earnings = 0;
                                                    $deductions = 0;
                                                    $gross_salary = 0;
                                                    $tax = 0;
                                                    $net_salary = 0;
                                                ?>
                                                <?php $__currentLoopData = $staffsPayroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($value->full_name); ?></td>
                                                        <td><?php echo e($value->name); ?></td>
                                                        <td><?php echo e($value->title); ?></td>
                                                        <td><?php echo e($value->payroll_month); ?> - <?php echo e($value->payroll_year); ?></td>
                                                        <td><?php echo e($value->id); ?></td>
                                                        <td><?php echo e($value->basic_salary); ?></td>
                                                        <td>
                                                            <?php
                                                                $totalEarnings = App\SmHrPayrollEarnDeduc::getTotalEarnings($value->id);
                                                            ?>
                                                            <?php if($totalEarnings > 0): ?>
                                                                <?php echo e($totalEarnings); ?>

                                                                <?php $earnings +=$totalEarnings; ?>
                                                            <?php else: ?>
                                                                <?php echo e(0); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $totalDeductions = App\SmHrPayrollEarnDeduc::getTotalDeductions($value->id);
                                                            ?>
                                                            <?php if($totalDeductions > 0): ?>
                                                                <?php echo e($totalDeductions); ?>

                                                                <?php $deductions +=$totalDeductions; ?>
                                                            <?php else: ?>
                                                                <?php echo e(0); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $leaveDeductions = App\SmLeaveDeductionInfo::select('salary_deduct')
                                                                    ->where('payroll_id', $value->id)
                                                                    ->first();
                                                            ?>
                                                            <?php if(@$leaveDeductions->salary_deduct > 0): ?>
                                                                <?php echo e(@$leaveDeductions->salary_deduct); ?>

                                                            <?php else: ?>
                                                                <?php echo e(0); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($value->gross_salary); ?></td>
                                                        <td><?php echo e($value->tax); ?></td>
                                                        <td><?php echo e($value->net_salary); ?></td>
                                                        <?php
                                                            $basic_salary += $value->basic_salary;
                                                            $gross_salary += $value->gross_salary;
                                                            $tax += $value->tax;
                                                            $net_salary += $value->net_salary;
                                                        ?>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><?php echo app('translator')->get('fees.grand_total'); ?></th>
                                                    <th><?php echo e(currency_format($basic_salary)); ?></th>
                                                    <th><?php echo e(currency_format($earnings)); ?></th>
                                                    <th><?php echo e(currency_format($deductions)); ?></th>
                                                    <th><?php echo e(currency_format(@$leaveDeductions->salary_deduct)); ?></th>
                                                    <th><?php echo e(currency_format($gross_salary)); ?></th>
                                                    <th><?php echo e(currency_format($tax)); ?></th>
                                                    <th><?php echo e(currency_format($net_salary)); ?></th>
                                                </tr>
                                            </tfoot>
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
            <?php endif; ?>
        </div>
        </div>
        </div>
        </div>
        
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.partials.data_table_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/backEnd/reports/payroll.blade.php ENDPATH**/ ?>