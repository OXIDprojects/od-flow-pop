( function ($) {
    odFlowPop = {
        options: {
            closeButton : ".btn"
        },
        _create: function() {
            var self = this;
            $(self.options.closeButton).on('click', function() {
                self.element.modal('hide');
                $.cookie('odFlowPopped', 'false', {
                    path: '/',
                    expires: 1
                });
            });
        }
    };
    $.widget("ui.odFlowPop", odFlowPop);
})( jQuery );
