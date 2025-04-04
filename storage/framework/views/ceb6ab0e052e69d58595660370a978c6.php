
    <?php $__env->startSection('title'); ?> 
        <?php echo app('translator')->get('wallet::wallet.my_wallet'); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('css'); ?>
    <style>
        .input-right-icon button {
            top: 8px !important;
            right: 12px !important;
        }
    </style>
    <?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>
<section class="sms-breadcrumb mb-20">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1><?php echo app('translator')->get('wallet::wallet.wallet_details'); ?></h1>
            <div class="bc-pages">
                <a href="<?php echo e(route('parent-dashboard')); ?>"><?php echo app('translator')->get('common.dashboard'); ?></a>
                <a href="#"><?php echo app('translator')->get('wallet::wallet.my_wallet'); ?></a>
                <a href="#"><?php echo app('translator')->get('wallet::wallet.wallet_details'); ?></a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_st_admin_visitor mt-20">
    <div class="container-fluid p-0">
        <?php echo $__env->make('wallet::_addWallet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
        <?php if(moduleStatusCheck('RazorPay') == TRUE): ?>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

            <script>
                var payment = false;
                function demoSuccessHandler(transaction) {
                    payment = true;
                    $('form#addWalletAmount').submit();
                    $('#addWalletPayment').modal('hide');
                }
            </script>

        <?php endif; ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    var paymentValue= '';
    $("#addWalletPaymentMethod").on("change", function() {
        paymentValue = $(this).val();
    });
$(function() {
        var $form = $("form#addWalletAmount");
        var publisherKey = '<?php echo @$stripe_info->gateway_publisher_key; ?>';
        var ccFalse= false;
        $(document).on('submit', 'form#addWalletAmount', function(e) {

            if(paymentValue == "Stripe"){
                if (!ccFalse){
                    e.preventDefault();
                    Stripe.setPublishableKey(publisherKey);
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            }
            <?php if(moduleStatusCheck('RazorPay')): ?>
            if (paymentValue == 'RazorPay') {
                if (!payment) {
                    e.preventDefault();
                    let value = parseFloat($('#walletAmount').val());
                    if (isNaN(value)) {
                        value = 0;
                    }
                    value = value * 100;
                    if (value > 0) {
                        var options = {
                            key: "<?php echo e(@$razorpay_info->gateway_secret_key); ?>",
                            amount: value,
                            name: 'Add Wallet Balance',
                            image: 'https://i.imgur.com/n5tjHFD.png',
                            handler: demoSuccessHandler
                        }

                        window.r = new Razorpay(options);
                        r.open();
                    } else {
                        toastr.error('Please make some payment');
                    }
                }
            }
            <?php endif; ?>
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();

                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u556817164/domains/hanaschool.com/public_html/Modules/Wallet/Resources/views/myWallet.blade.php ENDPATH**/ ?>