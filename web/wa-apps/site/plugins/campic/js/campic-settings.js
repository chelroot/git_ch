(function ($) {
    $.Campic = {
        local: null,
        init: function() {

        },
        getcams: function () {
            $.post('?plugin=campic&action=getcams', {
//                'product_id': product_id
            }, function (d) {
                if (d.status === 'ok') {
                    $('#campic_cams').html(d.data);
                }
            }, 'json');
        },
        addcam: function() {
            $.post('?plugin=campic&action=addcam', function (d) {
                if (d.status === 'ok') {
                    $('#campic_cams').html(d.data);
                }
            }, 'json');
        },
        deletecam: function(id) {
            if (confirm($.Campic.local.shure)) {
                $.post('?plugin=campic&action=deletecam&id=' + id, function (d) {
                    if (d.status === 'ok') {
                        $('#campic_cams').html(d.data);
                    }
                }, 'json');
            }
        }
    }
})(jQuery);