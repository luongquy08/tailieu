$(document).ready(function(){
    $('#login').validate({
        rules: {
            username: { required: true },
            password: { required: true }
        },
        messages: {
            username: {
                required: "Bạn chưa điền tên đăng nhập"
            },
            password: {
                required: "Bạn chưa điền mật khẩu"
            }
        },
        submitHandler: function(form) {
            var thisForm = $(form);
            if (thisForm.valid()) {
                $.ajax({
                    url: '/loginv2/index-ajax.php',
                    type: 'POST',
                    data: thisForm.serialize(),
                    dataType: 'JSON',
                    success: function(response) {
                        switch (response.status) {
                            case 'success':
                                window.location.href = response.url;
                                break;
                            case 'error':
                                if (response.message) {
                                    thisForm.find('.alertMsg').html('<div class="alert alert-danger">' + response.message.replace(/\\/g, "") + '</div>');
                                }

                                if (response.url) {
                                    setTimeout(function(){
                                        window.location.href = response.url;
                                    }, 400);
                                }

                                break;
                        }
                    }
                });
            }
        }
    });

    function checkCurrentUrl(response) {
        var pathname = window.location.pathname;
        var origin = window.location.protocol + '//' + window.location.hostname;

        /*var params = {};
        if (location.search) {
            var parts = location.search.substring(1).split('&');

            for (var i = 0; i < parts.length; i++) {
                var nv = parts[i].split('=');
                if (!nv[0]) continue;
                params[nv[0]] = nv[1] || true;
            }
        }*/

        if (response.url && (pathname == '/loginv2/index.php' || pathname == '/loginv2/')) {
            window.location.href = response.url;
        } else {
            if ((pathname == '/loginv2/signup.php' || pathname == '/loginv2/forgot_password.php')) {
                window.location.href = origin;
            } else {
                window.location.href = origin + pathname + location.search + window.location.hash;
            }
        }
    }

    function loginSocialFail() {
        $('#loginModal').modal('hide');
        $('#loginSocialModal').find('.loaderv2-text').html('<p class="text-center">Đăng nhập xảy ra lỗi. Xin vui lòng liên hệ với chúng tôi để được trợ giúp.</p>');
        $('#loginSocialModal').modal('show');
    }

    $('.fb-social').Oath2Client('facebook', function (response) {
        switch (response.status) {
            case 'fail':
                loginSocialFail();
                break;
            case 'success':
                checkCurrentUrl(response);
                break;
        }
    });

    $('.google-social').Oath2Client('google', function (response) {
        switch (response.status) {
            case 'fail':
                loginSocialFail();
                break;
            case 'success':
                checkCurrentUrl(response);
                break;
        }
    });

    $('.yahoo-social').Oath2Client('yahoo', function (response) {
        switch (response.status) {
            case 'fail':
                loginSocialFail();
                break;
            case 'success':
                checkCurrentUrl(response);
                break;
        }
    });
});
