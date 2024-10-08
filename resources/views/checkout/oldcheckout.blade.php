@include('layouts.app')
@include('layouts.header')
<div class="siddhi-checkout">
    <div class="container position-relative">
        <div class="py-5 row">
            <div class="col-md-8 mb-3 checkout-left">
                <div class="checkout-left-inner">
                    <div class="siddhi-cart-item mb-4 rounded shadow-sm bg-white checkout-left-box border">
                        <div class="siddhi-cart-item-profile p-3">
                            <div class="d-flex flex-column">
                                <div class="chec-out-header d-flex mb-3">
                                    <div class="chec-out-title">
                                        <h6 class="mb-0 font-weight-bold pb-1">{{trans('lang.delivery_address')}}</h6>
                                        <span>{{trans('lang.you_have_saved_address_in_this_loaction')}}</span>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalAddress"
                                       class="ml-auto font-weight-bold">{{trans('lang.change')}}</a>
                                </div>
                                <div class="row">
                                    <div class="custom-control col-lg-12 mb-3 position-relative" id="address_box"
                                         style="display: none;">
                                        <div class="addres-innerbox">
                                            <div class="p-3 w-100">
                                                <div class="d-flex align-items-center mb-2">
                                                    <h6 class="mb-0 pb-1">{{trans('lang.user_address')}}</h6>
                                                </div>
                                                <p class="text-dark m-0" id="line_1"></p>
                                                <p class="text-dark m-0" id="line_2">{{trans('lang.redwood_city')}}</p>
                                            </div>
                                        </div>
                                        </label>
                                    </div>
                                </div>
                                <a id="add_address" class="btn btn-primary" href="#" data-toggle="modal"
                                   data-target="#exampleModalAddress" style="display: none;">
                                    {{trans('lang.add_new_address')}} </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-3 rounded shadow-sm bg-white checkout-left-box border"
                         id="accordionExample">
                        <!-- Net Banking -->
                        <div class="siddhi-card border-bottom overflow-hidden">
                            <div class="siddhi-card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <i class="feather-globe mr-3"></i> {{trans('lang.net_banking')}}
                                        <i class="feather-chevron-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="siddhi-card-body border-top p-3">
                                    <form>
                                        <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                            <label class="btn btn-outline-secondary active">
                                                <input type="radio" name="options" id="option1" checked>
                                                {{trans('lang.hdfc')}}
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option2"> {{trans('lang.icici')}}
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option3"> {{trans('lang.axis')}}
                                            </label>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col-md-12 form-group mb-0">
                                                <label class="form-label small font-weight-bold">{{trans('lang.select_bank')}}</label><br>
                                                <select class="custom-select form-control">
                                                    <option>{{trans('lang.bank')}}</option>
                                                    <option>{{trans('lang.kotak')}}</option>
                                                    <option>{{trans('lang.sbi')}}</option>
                                                    <option>{{trans('lang.uco')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END Net Banking -->
                        <div class="siddhi-card overflow-hidden checkout-payment-options">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" name="payment_method" id="cod" value="cod"
                                       class="custom-control-input" checked>
                                <label class="custom-control-label" for="cod">{{trans('lang.cod')}}</label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="razorpay_box">
                                <input type="radio" name="payment_method" id="razorpay" value="razorpay"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="razorpay">{{trans('lang.razor_pay')}}</label>
                                <input type="hidden" id="isEnabled">
                                <input type="hidden" id="isSandboxEnabled">
                                <input type="hidden" id="razorpayKey">
                                <input type="hidden" id="razorpaySecret">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="stripe_box">
                                <input type="radio" name="payment_method" id="stripe" value="stripe"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="stripe">{{trans('lang.stripe')}}</label>
                                <input type="hidden" id="isStripeSandboxEnabled">
                                <input type="hidden" id="stripeKey">
                                <input type="hidden" id="stripeSecret">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="paypal_box">
                                <input type="radio" name="payment_method" id="paypal" value="paypal"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="paypal">{{trans('lang.pay_pal')}}</label>
                                <input type="hidden" id="ispaypalSandboxEnabled">
                                <input type="hidden" id="paypalKey">
                                <input type="hidden" id="paypalSecret">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="payfast_box">
                                <input type="radio" name="payment_method" id="payfast" value="payfast"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="payfast">{{trans('lang.pay_fast')}}</label>
                                <input type="hidden" id="payfast_isEnabled">
                                <input type="hidden" id="payfast_isSandbox">
                                <input type="hidden" id="payfast_merchant_key">
                                <input type="hidden" id="payfast_merchant_id">
                                <input type="hidden" id="payfast_notify_url">
                                <input type="hidden" id="payfast_return_url">
                                <input type="hidden" id="payfast_cancel_url">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="paystack_box">
                                <input type="radio" name="payment_method" id="paystack" value="paystack"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="paystack">{{trans('lang.pay_stack')}}</label>
                                <input type="hidden" id="paystack_isEnabled">
                                <input type="hidden" id="paystack_isSandbox">
                                <input type="hidden" id="paystack_public_key">
                                <input type="hidden" id="paystack_secret_key">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="flutterWave_box">
                                <input type="radio" name="payment_method" id="flutterwave" value="flutterwave"
                                       class="custom-control-input">
                                <label class="custom-control-label"
                                       for="flutterwave">{{trans('lang.flutter_wave')}}</label>
                                <input type="hidden" id="flutterWave_isEnabled">
                                <input type="hidden" id="flutterWave_isSandbox">
                                <input type="hidden" id="flutterWave_encryption_key">
                                <input type="hidden" id="flutterWave_public_key">
                                <input type="hidden" id="flutterWave_secret_key">
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2" style="display:none;"
                                 id="wallet_box">
                                <input type="radio" name="payment_method" disabled id="wallet" value="wallet"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="wallet">{{trans('lang.wallet')}} ( You have
                                    <span id="wallet_amount"></span> )</label>
                                <input type="hidden" id="user_wallet_amount">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="siddhi-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar"
                     id="cart_list">
                    @include('vendor.cart_item')
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@include('layouts.nav')
<div class="modal fade" id="exampleModalAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{trans('lang.delivery_address')}}</h5>
                <button type="button" id="close_button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <label class="form-label">{{trans('lang.street')}} 1</label>
                            <div class="input-group">
                                <input placeholder="Delivery Area" type="text" id="address_line1" class="form-control">
                                <div class="input-group-append">
                                    <button onclick="getCurrentLocationAddress1()" type="button"
                                            class="btn btn-outline-secondary"><i class="feather-map-pin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group"><label
                                    class="form-label">{{trans('lang.landmark')}}</label><input
                                    placeholder="Complete Address e.g. house number, street name, landmark" value=""
                                    id="address_line2" type="text" class="form-control"></div>
                        <div class="col-md-12 form-group"><label
                                    class="form-label">{{trans('lang.zip_code')}}</label><input placeholder="Zip Code"
                                                                                                id="address_zipcode"
                                                                                                type="text"
                                                                                                class="form-control">
                        </div>
                        <div class="col-md-12 form-group"><label class="form-label">{{trans('lang.city')}}</label><input
                                    placeholder="City" id="address_city" type="text" class="form-control"></div>
                        <div class="col-md-12 form-group"><label
                                    class="form-label">{{trans('lang.country')}}</label><input placeholder="Country"
                                                                                               id="address_country"
                                                                                               type="text"
                                                                                               class="form-control">
                        </div>
                </form>
            </div>
            <div class="modal-footer p-0 border-0">
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">
                        {{trans('lang.close')}}
                    </button>
                </div>
                <div class="col-6 m-0 p-0">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="saveShippingAddress()">
                        {{trans('lang.save_changes')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="siddhi-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
        <div class="col selected">
            <a href="home.html" class="text-danger small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
                {{trans('lang.home')}}
            </a>
        </div>
        <div class="col">
            <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                {{trans('lang.trending')}}
            </a>
        </div>
        <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
            <div class="bg-danger rounded-circle mt-n0 shadow">
                <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                    <i class="feather-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-heart"></i></p>
                {{trans('lang.favorites')}}
            </a>
        </div>
        <div class="col">
            <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
                <p class="h4 m-0"><i class="feather-user"></i></p>
                {{trans('lang.user_profile')}}
            </a>
        </div>
    </div>
</div>
<script src="https://unpkg.com/geofirestore/dist/geofirestore.js"></script>
<script type="text/javascript">
    var wallet_amount = 0;
    var fcmToken = '';
    var id_order = "<?php echo uniqid(); ?>";
    var userId = "<?php echo $id; ?>";
    var userDetailsRef = database.collection('users').where('id', "==", userId);
    var uservendorDetailsRef = database.collection('users');
    var vendorDetailsRef = database.collection('vendors');
    var AdminCommission = database.collection('settings').doc('AdminCommission');
    var razorpaySettings = database.collection('settings').doc('razorpaySettings');
    var stripeSettings = database.collection('settings').doc('stripeSettings');
    var paypalSettings = database.collection('settings').doc('paypalSettings');
    var walletSettings = database.collection('settings').doc('walletSettings');
    <?php if (isset($_COOKIE['section_id'])){ ?>
    var section_id = "<?php echo $_COOKIE['section_id'] ?>";
    <?php } ?>
    var reftaxSetting = database.collection('sections').doc(section_id);
    var payFastSettings = database.collection('settings').doc('payFastSettings');
    var payStackSettings = database.collection('settings').doc('payStack');
    var flutterWaveSettings = database.collection('settings').doc('flutterWave');
    var geoFirestore = new GeoFirestore(firestore);
    var currentCurrency = '';
    var currencyAtRight = false;
    var refCurrency = database.collection('currencies').where('isActive', '==', true);
    var currencyData = '';
    refCurrency.get().then(async function (snapshots) {
        var currencyData = snapshots.docs[0].data();
        currentCurrency = currencyData.symbol;
        currencyAtRight = currencyData.symbolAtRight;
        loadcurrencynew();
    });

    function loadcurrencynew() {
        if (currencyAtRight) {
            jQuery('.currency-symbol-left').hide();
            jQuery('.currency-symbol-right').show();
            jQuery('.currency-symbol-right').text(currentCurrency);
        } else {
            jQuery('.currency-symbol-left').show();
            jQuery('.currency-symbol-right').hide();
            jQuery('.currency-symbol-left').text(currentCurrency);
        }
    }

    $(document).ready(function () {
        getUserDetails();
        $(document).on("click", '.remove_item', function (event) {
            var id = $(this).attr('data-id');
            var vendor_id = $(this).attr('data-vendor');
            $.ajax({
                type: 'POST',
                url: "<?php echo route('remove-from-cart'); ?>",
                data: {_token: '<?php echo csrf_token() ?>', vendor_id: vendor_id, id: id, is_checkout: 1},
                success: function (data) {
                    data = JSON.parse(data);
                    $('#cart_list').html(data.html);
                    loadcurrencynew();
                }
            });
        });
        $(document).on("click", '.count-number-input-cart', function (event) {
            var id = $(this).attr('data-id');
            var vendor_id = $(this).attr('data-vendor');
            var quantity = $('.count_number_' + id).val();
            $.ajax({
                type: 'POST',
                url: "<?php echo route('change-quantity-cart'); ?>",
                data: {
                    _token: '<?php echo csrf_token() ?>',
                    vendor_id: vendor_id,
                    id: id,
                    quantity: quantity,
                    is_checkout: 1
                },
                success: function (data) {
                    data = JSON.parse(data);
                    $('#cart_list').html(data.html);
                    loadcurrencynew();
                }
            });
        });
        $(document).on("click", '#apply-coupon-code', function (event) {
            var coupon_code = $("#coupon_code").val();
            var vendor_id = $(this).attr('data-vendor');
            var couponCodeRef = database.collection('coupons').where('code', "==", coupon_code);
            couponCodeRef.get().then(async function (couponSnapshots) {
                if (couponSnapshots.docs && couponSnapshots.docs.length) {
                    var coupondata = couponSnapshots.docs[0].data();
                    if (coupondata.vendorID != undefined) {
                        if (coupondata.vendorID == vendor_id) {
                            discount = coupondata.discount;
                            discountType = coupondata.discountType;
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo route('apply-coupon'); ?>",
                                data: {
                                    _token: '<?php echo csrf_token() ?>',
                                    coupon_code: coupon_code,
                                    discount: discount,
                                    discountType: discountType,
                                    is_checkout: 1,
                                    coupon_id: coupondata.id
                                },
                                success: function (data) {
                                    data = JSON.parse(data);
                                    $('#cart_list').html(data.html);
                                    loadcurrencynew();
                                }
                            });
                        } else {
                            alert("Coupon code is not valid.");
                            $("#coupon_code").val('');
                        }
                    } else {
                        discount = coupondata.discount;
                        discountType = coupondata.discountType;
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('apply-coupon'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                coupon_code: coupon_code,
                                discount: discount,
                                discountType: discountType,
                                is_checkout: 1,
                                coupon_id: coupondata.id
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                            }
                        });
                    }
                } else {
                    alert("Coupon code is not valid.");
                    $("#coupon_code").val('');
                }
            });
        });
    });

    async function getUserDetails() {
        AdminCommission.get().then(async function (AdminCommissionSnapshots) {
            AdminCommissionRes = AdminCommissionSnapshots.data();
            if (AdminCommissionRes.isEnabled) {
                AdminCommission = AdminCommissionRes.fix_commission;
                commissionType = AdminCommissionRes.commissionType;
                $("#adminCommission").val(AdminCommission);
                $("#adminCommissionType").val(commissionType);
            } else {
                $("#adminCommission").val(0);
                $("#adminCommissionType").val('Fix Price');
            }
        });
        razorpaySettings.get().then(async function (razorpaySettingsSnapshots) {
            razorpaySetting = razorpaySettingsSnapshots.data();
            if (razorpaySetting.isEnabled) {
                var isEnabled = razorpaySetting.isEnabled;
                $("#isEnabled").val(isEnabled);
                var isSandboxEnabled = razorpaySetting.isSandboxEnabled;
                $("#isSandboxEnabled").val(isSandboxEnabled);
                var razorpayKey = razorpaySetting.razorpayKey;
                $("#razorpayKey").val(razorpayKey);
                var razorpaySecret = razorpaySetting.razorpaySecret;
                $("#razorpaySecret").val(razorpaySecret);
                $("#razorpay_box").show();
            }
        });
        stripeSettings.get().then(async function (stripeSettingsSnapshots) {
            stripeSetting = stripeSettingsSnapshots.data();
            if (stripeSetting.isEnabled) {
                var isEnabled = stripeSetting.isEnabled;
                var isSandboxEnabled = stripeSetting.isSandboxEnabled;
                $("#isStripeSandboxEnabled").val(isSandboxEnabled);
                var stripeKey = stripeSetting.stripeKey;
                $("#stripeKey").val(stripeKey);
                var stripeSecret = stripeSetting.stripeSecret;
                $("#stripeSecret").val(stripeSecret);
                $("#stripe_box").show();
            }
        });
        paypalSettings.get().then(async function (paypalSettingsSnapshots) {
            paypalSetting = paypalSettingsSnapshots.data();
            if (paypalSetting.isEnabled) {
                var isEnabled = paypalSetting.isEnabled;
                var isLive = paypalSetting.isLive;
                if (isLive) {
                    $("#ispaypalSandboxEnabled").val(false);
                } else {
                    $("#ispaypalSandboxEnabled").val(true);
                }
                var paypalAppId = paypalSetting.paypalAppId;
                $("#paypalKey").val(paypalAppId);
                var paypalSecret = paypalSetting.paypalSecret;
                $("#paypalSecret").val(paypalSecret);
                $("#paypal_box").show();
            }
        });
        walletSettings.get().then(async function (walletSettingsSnapshots) {
            walletSetting = walletSettingsSnapshots.data();
            if (walletSetting.isEnabled) {
                var isEnabled = walletSetting.isEnabled;
                if (isEnabled) {
                    $("#walletenabled").val(true);
                } else {
                    $("#walletenabled").val(false);
                }
                $("#wallet_box").show();
            }
        });
        payFastSettings.get().then(async function (payfastSettingsSnapshots) {
            payFastSetting = payfastSettingsSnapshots.data();
            if (payFastSetting.isEnable) {
                var isEnable = payFastSetting.isEnable;
                $("#payfast_isEnabled").val(isEnable);
                var isSandboxEnabled = payFastSetting.isSandbox;
                $("#payfast_isSandbox").val(isSandboxEnabled);
                var merchant_id = payFastSetting.merchant_id;
                $("#payfast_merchant_id").val(merchant_id);
                var merchant_key = payFastSetting.merchant_key;
                $("#payfast_merchant_key").val(merchant_key);
                var return_url = payFastSetting.return_url;
                $("#payfast_return_url").val(return_url);
                var cancel_url = payFastSetting.cancel_url;
                $("#payfast_cancel_url").val(cancel_url);
                var notify_url = payFastSetting.notify_url;
                $("#payfast_notify_url").val(notify_url);
                $("#payfast_box").show();
            }
        });
        payStackSettings.get().then(async function (payStackSettingsSnapshots) {
            payStackSetting = payStackSettingsSnapshots.data();
            if (payStackSetting.isEnable) {
                var isEnable = payStackSetting.isEnable;
                $("#paystack_isEnabled").val(isEnable);
                var isSandboxEnabled = payStackSetting.isSandbox;
                $("#paystack_isSandbox").val(isSandboxEnabled);
                var publicKey = payStackSetting.publicKey;
                $("#paystack_public_key").val(publicKey);
                var secretKey = payStackSetting.secretKey;
                $("#paystack_secret_key").val(secretKey);
                $("#paystack_box").show();
            }
        });
        flutterWaveSettings.get().then(async function (flutterWaveSettingsSnapshots) {
            flutterWaveSetting = flutterWaveSettingsSnapshots.data();
            if (flutterWaveSetting.isEnable) {
                var isEnable = flutterWaveSetting.isEnable;
                $("#flutterWave_isEnabled").val(isEnable);
                var isSandboxEnabled = flutterWaveSetting.isSandbox;
                $("#flutterWave_isSandbox").val(isSandboxEnabled);
                var encryptionKey = flutterWaveSetting.encryptionKey;
                $("#flutterWave_encryption_key").val(encryptionKey);
                var secretKey = flutterWaveSetting.secretKey;
                $("#flutterWave_secret_key").val(secretKey);
                var publicKey = flutterWaveSetting.publicKey;
                $("#flutterWave_public_key").val(publicKey);
                $("#flutterWave_box").show();
            }
        });
        userDetailsRef.get().then(async function (userSnapshots) {
            var userDetails = userSnapshots.docs[0].data();
            var full_address = '';
            if (userDetails.hasOwnProperty('shippingAddress') && userDetails.shippingAddress != undefined) {
                if (userDetails.shippingAddress.line1 != undefined) {
                    $("#line_1").html(userDetails.shippingAddress.line1);
                    $("#address_line1").val(userDetails.shippingAddress.line1);
                }
                if (userDetails.shippingAddress.line2 != undefined) {
                    $("#address_line2").val(userDetails.shippingAddress.line2);
                    if (full_address != '') {
                        full_address = full_address + ',' + userDetails.shippingAddress.line2;
                    } else {
                        full_address = userDetails.shippingAddress.line2;
                    }
                }
                if (userDetails.shippingAddress.city != undefined) {
                    $("#address_city").val(userDetails.shippingAddress.city);
                    if (full_address != '') {
                        full_address = full_address + ',' + userDetails.shippingAddress.city;
                    } else {
                        full_address = userDetails.shippingAddress.city;
                    }
                }
                if (userDetails.shippingAddress.postalCode != undefined) {
                    $("#address_zipcode").val(userDetails.shippingAddress.postalCode);
                    if (full_address != '') {
                        full_address = full_address + ',' + userDetails.shippingAddress.postalCode;
                    } else {
                        full_address = userDetails.shippingAddress.postalCode;
                    }
                }
                if (userDetails.shippingAddress.country != undefined) {
                    $("#address_country").val(userDetails.shippingAddress.country);
                    if (full_address != '') {
                        full_address = full_address + ',' + userDetails.shippingAddress.country;
                    } else {
                        full_address = userDetails.shippingAddress.country;
                    }
                }
                if (userDetails.wallet_amount != undefined && userDetails.wallet_amount != '') {
                    $("#user_wallet_amount").val(userDetails.wallet_amount);
                    $("#wallet_amount").html('$' + userDetails.wallet_amount);
                    wallet_amount = userDetails.wallet_amount;
                    $("#wallet").attr('disabled', false);
                } else {
                    $("#user_wallet_amount").val(0);
                    $("#wallet_amount").html('$' + 0);
                }
                $("#line_2").html(full_address);
                $("#add_address").hide();
                $("#address_box").show();
            } else {
                $("#address_box").hide();
                $("#add_address").show();
            }
        });
        main_vendor_id = $("#main_vendor_id").val();
        uservendorDetailsRef.where('vendorID', "==", main_vendor_id).get().then(async function (uservendorSnapshots) {
            var userVendorDetails = uservendorSnapshots.docs[0].data();
            if (userVendorDetails && userVendorDetails.fcmToken) {
                fcmToken = userVendorDetails.fcmToken;
            }
        });
    }

    function saveShippingAddress() {
        userDetailsRef.get().then(async function (userSnapshots) {
            var userDetails = userSnapshots.docs[0].data();
            var line1 = $("#address_line1").val();
            var line2 = $("#address_line2").val();
            var city = $("#address_city").val();
            var country = $("#address_country").val();
            var postalCode = $("#address_zipcode").val();
            if (userDetails.hasOwnProperty('shippingAddress')) {
                var shippingAddress = userDetails.shippingAddress;
                shippingAddress.line1 = $("#address_line1").val();
                shippingAddress.line2 = $("#address_line2").val();
                shippingAddress.city = $("#address_city").val();
                shippingAddress.country = $("#address_country").val();
                shippingAddress.postalCode = $("#address_zipcode").val();
            } else {
                var shippingAddress = [];
                var shippingAddress = {
                    "line1": line1,
                    "line2": line2,
                    "city": city,
                    "country": country,
                    "postalCode": postalCode
                };
            }
            database.collection('users').doc(userId).update({'shippingAddress': shippingAddress}).then(function (result) {
                $('#close_button').trigger("click");
                location.reload();
            });
        });
    }

    function finalCheckout() {
        userDetailsRef.get().then(async function (userSnapshots) {
            var vendorID = $("#main_vendor_id").val();
            var userDetails = userSnapshots.docs[0].data();
            vendorDetailsRef.where('id', "==", vendorID).get().then(async function (vendorSnapshots) {
                var vendorDetails = vendorSnapshots.docs[0].data();
                if (vendorDetails) {
                    var products = [];
                    $(".product-item").each(function (index) {
                        product_id = $(this).attr("data-id");
                        price = $("#price_" + product_id).val();
                        item_price = $("#item_price_" + product_id).val();
                        photo = $("#photo_" + product_id).val();
                        total_pay = $("#total_pay").val();
                        extras_price = $("#extras_price_" + product_id).val();
                        size = $("#size_" + product_id).val();
                        name = $("#name_" + product_id).val();
                        quantity = $("#quantity_" + product_id).val();
                        extras = [];
                        $(".extras_" + product_id).each(function (index) {
                            val = $(this).val();
                            if (val) {
                                extras.push(val);
                            }
                        })
                        products.push({
                            'id': product_id,
                            'name': name,
                            'photo': photo,
                            'price': item_price,
                            'quantity': parseInt(quantity),
                            'vendorID': vendorDetails.id,
                            'extras_price': extras_price,
                            'extras': extras,
                            'size': size
                        })
                    });
                    var address = userDetails.shippingAddress;
                    var author = userDetails;
                    var authorID = userId;
                    var authorName = userDetails.firstName;
                    var couponCode = $("#coupon_code_main").val();
                    var couponId = $("#coupon_id").val();
                    var createdAt = firebase.firestore.FieldValue.serverTimestamp();
                    var discount = $("#discount_amount").val();
                    var driver = [];
                    var vendor = vendorDetails;
                    var status = 'Order Placed';
                    var deliveryCharge = $("#deliveryCharge").val();
                    var tip_amount = $("#tip_amount").val();
                    var adminCommission = $("#adminCommission").val();
                    var adminCommissionType = $("#adminCommissionType").val();
                    var tax_label = $("#tax_label").val();
                    var tax = $("#tax").val();
                    var payment_method = $('input[name="payment_method"]:checked').val();
                    var delivery_option = $('input[name="delivery_option"]').val();
                    var take_away = false;
                    if (delivery_option == "takeaway") {
                        take_away = true;
                    }
                    if (payment_method == "razorpay") {
                        var razorpayKey = $("#razorpayKey").val();
                        var razorpaySecret = $("#razorpaySecret").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommissionType: adminCommissionType,
                            adminCommission: adminCommission,
                            take_away: take_away
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                razorpaySecret: razorpaySecret,
                                razorpayKey: razorpayKey,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    }
                    if (payment_method == "stripe") {
                        var stripeKey = $("#stripeKey").val();
                        var stripeSecret = $("#stripeSecret").val();
                        var isStripeSandboxEnabled = $("#isStripeSandboxEnabled").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommission: adminCommission,
                            adminCommissionType: adminCommissionType,
                            take_away: take_away
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                stripeKey: stripeKey,
                                stripeSecret: stripeSecret,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay,
                                isStripeSandboxEnabled: isStripeSandboxEnabled,
                                address_line1: $("#address_line1").val(),
                                address_line2: $("#address_line2").val(),
                                address_zipcode: $("#address_zipcode").val(),
                                address_city: $("#address_city").val(),
                                address_country: $("#address_country").val()
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    } else if (payment_method == "paypal") {
                        var paypalKey = $("#paypalKey").val();
                        var paypalSecret = $("#paypalSecret").val();
                        var ispaypalSandboxEnabled = $("#ispaypalSandboxEnabled").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommission: adminCommission,
                            adminCommissionType: adminCommissionType,
                            take_away: take_away
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                paypalKey: paypalKey,
                                paypalSecret: paypalSecret,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay,
                                ispaypalSandboxEnabled: ispaypalSandboxEnabled,
                                address_line1: $("#address_line1").val(),
                                address_line2: $("#address_line2").val(),
                                address_zipcode: $("#address_zipcode").val(),
                                address_city: $("#address_city").val(),
                                address_country: $("#address_country").val()
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    } else if (payment_method == "payfast") {
                        var payfast_merchant_key = $("#payfast_merchant_key").val();
                        var payfast_merchant_id = $("#payfast_merchant_id").val();
                        var payfast_return_url = $("#payfast_return_url").val();
                        var payfast_notify_url = $("#payfast_notify_url").val();
                        var payfast_cancel_url = $("#payfast_cancel_url").val();
                        var payfast_isSandbox = $("#payfast_isSandbox").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommission: adminCommission,
                            adminCommissionType: adminCommissionType,
                            take_away: take_away,
                            tax_label: tax_label,
                            tax: tax
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                payfast_merchant_key: payfast_merchant_key,
                                payfast_merchant_id: payfast_merchant_id,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay,
                                payfast_isSandbox: payfast_isSandbox,
                                payfast_return_url: payfast_return_url,
                                payfast_notify_url: payfast_notify_url,
                                payfast_cancel_url: payfast_cancel_url,
                                address_line1: $("#address_line1").val(),
                                address_line2: $("#address_line2").val(),
                                address_zipcode: $("#address_zipcode").val(),
                                address_city: $("#address_city").val(),
                                address_country: $("#address_country").val()
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    } else if (payment_method == "paystack") {
                        var paystack_public_key = $("#paystack_public_key").val();
                        var paystack_secret_key = $("#paystack_secret_key").val();
                        var paystack_isSandbox = $("#paystack_isSandbox").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommission: adminCommission,
                            adminCommissionType: adminCommissionType,
                            take_away: take_away,
                            tax_label: tax_label,
                            tax: tax
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay,
                                paystack_isSandbox: paystack_isSandbox,
                                paystack_public_key: paystack_public_key,
                                paystack_secret_key: paystack_secret_key,
                                address_line1: $("#address_line1").val(),
                                address_line2: $("#address_line2").val(),
                                address_zipcode: $("#address_zipcode").val(),
                                address_city: $("#address_city").val(),
                                address_country: $("#address_country").val()
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    } else if (payment_method == "flutterwave") {
                        var flutterwave_isenabled = $("#flutterWave_isEnabled").val();
                        var flutterWave_encryption_key = $("#flutterWave_encryption_key").val();
                        var flutterWave_public_key = $("#flutterWave_public_key").val();
                        var flutterWave_secret_key = $("#flutterWave_secret_key").val();
                        var flutterWave_isSandbox = $("#flutterWave_isSandbox").val();
                        var order_json = {
                            authorID: authorID,
                            couponCode: couponCode,
                            couponId: couponId,
                            discount: discount,
                            id: id_order,
                            products: products,
                            status: status,
                            vendorID: vendorDetails.id,
                            deliveryCharge: deliveryCharge,
                            tip_amount: tip_amount,
                            adminCommission: adminCommission,
                            adminCommissionType: adminCommissionType,
                            take_away: take_away,
                            tax_label: tax_label,
                            tax: tax
                        };
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo route('order-proccessing'); ?>",
                            data: {
                                _token: '<?php echo csrf_token() ?>',
                                order_json: order_json,
                                payment_method: payment_method,
                                authorName: authorName,
                                total_pay: total_pay,
                                flutterWave_isSandbox: flutterWave_isSandbox,
                                flutterWave_public_key: flutterWave_public_key,
                                flutterWave_secret_key: flutterWave_secret_key,
                                flutterwave_isenabled: flutterwave_isenabled,
                                flutterWave_encryption_key: flutterWave_encryption_key,
                                address_line1: $("#address_line1").val(),
                                address_line2: $("#address_line2").val(),
                                address_zipcode: $("#address_zipcode").val(),
                                address_city: $("#address_city").val(),
                                address_country: $("#address_country").val(),
                                currencyData: currencyData
                            },
                            success: function (data) {
                                data = JSON.parse(data);
                                $('#cart_list').html(data.html);
                                loadcurrencynew();
                                window.location.href = "<?php echo route('pay'); ?>";
                            }
                        });
                    } else {
                        if (payment_method == "wallet") {
                            payment_method = "wallet";
                            if (wallet_amount < total_pay) {
                                alert("you don't have sufficient balance to place this order!");
                                return false;
                            }
                        } else {
                            payment_method = "cod";
                        }
                        if (take_away == 'true') {
                            take_away = true;
                        }
                        if (take_away == 'false') {
                            take_away = false;
                        }
                        for (var n = 0; n < products.length; n++) {
                            if (products[n].photo == null) {
                                products[n].photo = "";
                            }
                            if (products[n].size == null) {
                                products[n].size = "";
                            }
                            products[n].quantity = parseInt(products[n].quantity);
                        }
                        database.collection('vendor_orders').doc(id_order).set({
                            'address': address,
                            'author': author,
                            'authorID': authorID,
                            'couponCode': couponCode,
                            'couponId': couponId,
                            'couponId': couponId,
                            'discount': discount,
                            "createdAt": createdAt,
                            'id': id_order,
                            'products': products,
                            'status': status,
                            'vendor': vendorDetails,
                            'vendorID': vendorDetails.id,
                            'deliveryCharge': deliveryCharge,
                            'tip_amount': tip_amount,
                            'adminCommission': adminCommission,
                            adminCommissionType: adminCommissionType,
                            'payment_method': payment_method,
                            'takeAway': take_away
                        }).then(function (result) {
                            var sendnotification = "<?php echo url('/'); ?>";
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo route('order-complete'); ?>",
                                data: {_token: '<?php echo csrf_token() ?>', 'fcm': fcmToken, 'authorName': authorName},
                                success: function (data) {
                                    data = JSON.parse(data);
                                    if (payment_method == "wallet") {
                                        wallet_amount = wallet_amount - total_pay;
                                        database.collection('users').doc(userId).update({'wallet_amount': wallet_amount}).then(function (result) {
                                            $('#cart_list').html(data.html);
                                            loadcurrencynew();
                                            window.location.href = "<?php echo url('success'); ?>";
                                            <?php ?>
                                        });
                                    } else {
                                        $('#cart_list').html(data.html);
                                        window.location.href = "<?php echo url('success'); ?>";
                                    }
                                }
                            });
                        });
                    }
                }
            });
        });
    }

    $(document).on("click", '#Other_tip', function (event) {
        $("#add_tip_box").show();
    });
    $(document).on("click", '.this_tip', function (event) {
        var this_tip = $(this).val();
        $("#tip_amount").val(this_tip);
        $("#add_tip_box").hide();
        tipAmountChange();
    });
    $(document).on("onchange", '#tip_amount', function (event) {
        tipAmountChange();
    });

    function tipAmountChange() {
        var this_tip = $("#tip_amount").val();
        $.ajax({
            type: 'POST',
            url: "<?php echo route('order-tip-add'); ?>",
            data: {_token: '<?php echo csrf_token() ?>', is_checkout: 1, tip: this_tip},
            success: function (data) {
                data = JSON.parse(data);
                $('#cart_list').html(data.html);
                loadcurrencynew();
            }
        });
    }

    async function getCurrentLocationAddress1() {
        var geocoder = new google.maps.Geocoder();
        navigator.geolocation.getCurrentPosition(async function (position) {
            var address_city = "";
            var address_country = "";
            var address_state = "";
            var address_street = "";
            var address_street2 = "";
            var address_street3 = "";
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var geolocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            var location = new google.maps.LatLng(pos['lat'], pos['lng']);
            geocoder.geocode({'latLng': location}, async function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results.length > 0) {
                        document.getElementById('user_locationnew').value = results[0].formatted_address;
                        address_name1 = '';
                        $.each(results[0].address_components, async function (i, address_component) {
                            address_name1 = '';
                            if (address_component.types[0] == "premise") {
                                if (address_name1 == '') {
                                    address_name1 = address_component.long_name;
                                } else {
                                    address_name2 = address_component.long_name;
                                }
                            } else if (address_component.types[0] == "postal_code") {
                                address_zip = address_component.long_name;
                            } else if (address_component.types[0] == "locality") {
                                address_city = address_component.long_name;
                            } else if (address_component.types[0] == "administrative_area_level_1") {
                                address_state = address_component.long_name;
                            } else if (address_component.types[0] == "country") {
                                address_country = address_component.long_name;
                            } else if (address_component.types[0] == "street_number") {
                                address_street = address_component.long_name;
                            } else if (address_component.types[0] == "route") {
                                address_street2 = address_component.long_name;
                            } else if (address_component.types[0] == "political") {
                                address_street3 = address_component.long_name;
                            }
                        });
                        $("#address_line1").val(address_street + ", " + address_street2);
                        $("#address_line2").val(address_street3);
                        $("#address_city").val(address_city);
                        $("#address_country").val(address_country);
                        $("#address_zipcode").val(address_zip);
                    }
                }
            });
            try {
            } catch (err) {
            }
        }, function () {
        });
    }
</script>