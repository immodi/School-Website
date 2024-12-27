<div class="add-visitor">
            <div class="common-fields" id="common-fields">

                <div class="row  mt-25">
                    <div class="col-lg-12">
                        <div class="primary_input">
                            <input oninput="numberCheckWithDot(this)" class="primary_input_field form-control read-only-input"
                                type="text" name="mark" autocomplete="off" value="<?php echo e(@$question_bank->marks); ?>" required>
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.marks'); ?></label>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-25">
                    <div class="col-lg-12">
                        <div class="primary_input">
                            <textarea class="primary_input_field form-control read-only-input" cols="0" rows="5" name="question_title" readonly="true"><?php echo e(@$question_bank->question); ?></textarea>
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.question_title'); ?></label>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php if(@$question_bank->type == "M"): ?>
            <?php
                $multiple_options = $question_bank->questionMu;
                $number_of_option = $question_bank->questionMu->count();
            ?>
            <div class="multiple-choice" id="multiple-choice">
                
                <div class="row  mt-25">
                    <div class="col-lg-10">
                        <div class="primary_input">
                            <input oninput="numberCheckWithDot(this)" class="primary_input_field form-control read-only-input"
                                type="text" name="number_of_option" autocomplete="off" id="number_of_option_edit" value="<?php echo e(@$number_of_option); ?>">
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.number_options'); ?></label>
                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                        
                    </div>
                </div>
            </div>

            <div class="multiple-options" id="multiple-options">
                <?php $i=0; ?>
                <?php $__currentLoopData = $multiple_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class='row  mt-25'>
                    <div class='col-lg-10'>
                        <div class='primary_input'>
                            <input class='primary_input_field form-control read-only-input' type='text' name='option[]' autocomplete='off' required value="<?php echo e(@$multiple_option->title); ?>">
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.option'); ?> <?php echo e($i); ?></label>
                            <span class='focus-border'></span>
                        </div>
                    </div>
                    <div class='col-lg-2'>
                        <input type='checkbox' class="common-checkbox" id="commonCheckbox<?php echo e($i); ?>" name='option_check_<?php echo e($i); ?>' value='1' <?php echo e(@$multiple_option->status == 1? 'checked': ''); ?> disabled="">
                        <label for="commonCheckbox<?php echo e($i); ?>"></label>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <?php elseif(@$question_bank->type == "MI"): ?>
            <?php
                $multiple_options = $question_bank->questionMu;
                $number_of_option = $question_bank->questionMu->count();
            ?>
            <div class="multiple-choice" id="multiple-choice">
                
                <div class="row  mt-25">
                    <div class="col-lg-10">
                        <div class="primary_input">
                            <input class="primary_input_field form-control read-only-input"
                                type="number" name="number_of_option" autocomplete="off" id="number_of_option_edit" value="<?php echo e(@$number_of_option); ?>">
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.number_options'); ?></label>
                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                        
                    </div>
                </div>
            </div>

            <div class="quiestion_group" id="multiple-options">
                <?php $i=0; ?>
                <?php $__currentLoopData = $multiple_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                <div class='single_question' style="background-image: url(<?php echo e(asset($multiple_option->title)); ?>)">
                    <div class="img_ovelay">
                        <input  data-question = "<?php echo e(@$question->question_bank_id); ?>" type="<?php echo e(@$question->questionBank->answer_type); ?>" 
                        data-option="<?php echo e(@$multiple_option->id); ?>" id="answer<?php echo e(@$multiple_option->id); ?>"
                         class="common-checkbox answer_question_mu" name="options_<?php echo e(@$question->question_bank_id); ?>" 
                         value="<?php echo e($multiple_option->id); ?>" <?php echo e(isset($submited_answer)? in_array($multiple_option->id,$submited_answer) ? 'checked' :'' : ''); ?>>
                
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <?php elseif($question_bank->type == "T"): ?>
            <div class="true-false" id="true-false">
                <div class="row  mt-25">
                    <div class="col-lg-12 d-flex">
                        <p class="text-uppercase fw-500 mb-10"></p>
                        <div class="d-flex radio-btn-flex">
                            <div class="mr-30">
                                <input type="radio" name="trueOrFalse" id="relationFatherEdit" value="T" class="common-radio relationButton" <?php echo e(@$question_bank->trueFalse == 'T'? 'checked': ''); ?> disabled="">
                                <label for="relationFatherEdit"><?php echo app('translator')->get('exam.true'); ?></label>
                            </div>
                            <div class="mr-30">
                                <input type="radio" name="trueOrFalse" id="relationMotherEdit" value="F" class="common-radio relationButton" <?php echo e(@$question_bank->trueFalse == 'F'? 'checked': ''); ?> disabled="">
                                <label for="relationMotherEdit"><?php echo app('translator')->get('exam.false'); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="fill-in-the-blanks" id="fill-in-the-blanks">
                <div class="row  mt-25">
                    <div class="col-lg-12">
                        <div class="primary_input">
                            <textarea class="primary_input_field form-control read-only-input" cols="0" rows="5" name="suitable_words" readonly="true"><?php echo e(@$question_bank->suitable_words); ?></textarea>
                            <label class="primary_input_label" for=""><?php echo app('translator')->get('exam.suitable_words'); ?></label>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>


<?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/resources/views/backEnd/examination/online_eaxm_question_view_modal.blade.php ENDPATH**/ ?>