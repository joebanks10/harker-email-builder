(function($) {

    'use strict';

    acf.add_action('ready', function( $el ){
        var $columns = $('.columns'),
            $rows;

        $columns.each(function() {
            $rows = $(this)
                .children('.acf-input')
                .children('.acf-repeater')
                .children('.acf-table')
                .children('tbody')
                .children();
            label_rows($rows.eq(0));
        });
    });
    acf.add_action('append', function($el) {
        label_rows($el);
    });
    acf.add_action('sortstop', function($el) {
        label_rows($el);
    });

    function label_rows($el) {
        var layout = $el.closest('.layout').data('layout'),
            $rows = $el.parent().children();

        if ($el.hasClass('acf-row') && $el.closest('.acf-field-repeater').hasClass('columns')) {
            // columns repeater field

            if (layout === 'content-sidebar') {
                $rows.eq(0).find('.elements > .acf-label > label').text('Content');
                $rows.eq(1).find('.elements > .acf-label > label').text('Sidebar');
            } 
        }
    }

    function number_columns($rows) {
        $rows.each(function(index) {
            $(this).find('.elements > .acf-label > label').text('Column ' + (index+1));
        });
    }
})(jQuery);