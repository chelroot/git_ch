/**
 * Created by snark on 2/24/16.
 */

(function ($) {
    $.Campic = {
        local: null,
        plugin_id: null,
        wa_url: null,
        shop_url: null,
        add: function(e) {
            var self = this;
            var form = $(e).parents('form').serialize();
            $.post(self.shop_url + 'campic/add', form, function(d){

            }, 'json');
            return false;
        },
        getcams: function () {
            var self = this;
            $.post(self.shop_url + 'campic/getcams', {
//                'product_id': product_id
            }, function (d) {
                if (d.status === 'ok') {
                    $('#campic_cams').html(d.data);
                }
            }, 'json');
        },
        addcam: function() {
            var self = this;
            $.post(self.shop_url + 'campic/addcam', function (d) {
                if (d.status === 'ok') {
                    $('#campic_cams').html(d.data);
                }
            }, 'json');
        },
        deletecam: function(id) {
            var self = this;
            if (confirm($.Campic.local.shure)) {
                $.post(self.shop_url + 'campic/deletecam/?id=' + id, function (d) {
                    if (d.status === 'ok') {
                        $('#campic_cams').html(d.data);
                    }
                }, 'json');
            }
        }

    }
})(jQuery);
