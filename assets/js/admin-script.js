(function($) {

    "use strict";

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

(function($){

    "use strict";

    acf.add_action('ready', function($el) {
        // add button event for ical list
        acf.fields.repeater._add_layout_event(
            'click a[data-event="add-ical-events"]', 
            '_add_ical_events', 
            'calendar-list', 
            'events'
        );

        // add button event for removing rows
        acf.fields.repeater._add_layout_event(
            'click a[data-event="remove-all-rows"]', 
            '_remove_all_rows', 
            'calendar-list', 
            'events'
        );

        // add button event for checking all rows
        acf.fields.repeater._add_layout_event(
            'change input[data-event="check-all-rows"]', 
            '_toggle_all_rows', 
            'calendar-list', 
            'events'
        );
    });

    acf.fields.repeater._add_ical_events = function(e) {
        var self = this,
            subfields = ['id', 'title', 'location', 'start', 'end', 'permalink'],

            data = {
                'action': 'get_ical_events',
                'url': e.$layout.find('.acf-field[data-name="ical"]').find('input[type="url"]').val(),
                'start': e.$layout.find('.acf-field[data-name="start_date"]').find('.input-alt').val(),
                'end': e.$layout.find('.acf-field[data-name="end_date"]').find('.input-alt').val()
            };

        $.getJSON(ajaxurl, data, function(json) {
            self.add_rows(json.events, subfields);
        });
    };

    acf.fields.repeater._remove_all_rows = function() {
        var self = this;

        this.$tbody.children().not('.acf-clone').each(function() {
            var $tr = $(this);

            self.remove($tr);
        });
    };

    acf.fields.repeater._toggle_all_rows = function(e) {
        var $checkboxes = this.$tbody.find('.event-inc').find('input[type="checkbox"]');

        $checkboxes.prop("checked", e.$el.prop("checked") );
    };

    acf.fields.repeater._add_layout_event = function(name, callback, layout, field) {
        var model = this,
            event = name.substr(0,name.indexOf(' ')),
            selector = name.substr(name.indexOf(' ')+1),
            context = '.layout[data-layout="'+layout+'"]',
            target = '.acf-field[data-name="'+field+'"]';
        
        // add event
        $(document).on(event, context + ' ' + selector, function( e ){
            // append $el to event object
            e.$el = $(this);
            
            // my modification: use defined field instead of parent field
            e.$layout = e.$el.closest(context);
            e.$field = e.$layout.find(target);
            // e.$field = acf.get_closest_field(e.$el, model.type);

            // focus
            model.set('$field', e.$field);
            
            // callback
            model[ callback ].apply(model, [e]);
        });
    };

    acf.fields.repeater.add_rows = function(data_array, subfields) {   
        // defaults
        data_array = data_array || [];
        subfields = subfields || [];

        var $tr = this.$clone,
            $el,
            self = this,
            rows = [];
        
        // reference
        var $field = this.$field;
            
        data_array.forEach(function(data) {
            // duplicate
            $el = acf.duplicate( self.$clone );
                        
            // remove clone class
            $el.removeClass('acf-clone');
            
            // add event data
            self.add_row_data($el, data, subfields);
            
            // enable inputs (ignore inputs disabled for life)
            $el.find('input, textarea, select').not('.acf-disabled').removeAttr('disabled');

            rows.push($el);
        });
        
        // add rows to DOM
        $tr.before(rows);
        
        // focus (may have added sub repeater)
        this.doFocus($field);
        
        // update order
        this.render();
        
        // validation
        acf.validation.remove_error( this.$field );
        
        // sync collapsed order
        this.sync();
        
        // return
        return $el;
    };

    acf.fields.repeater.add_row_data = function($el, data, subfields) {
        subfields = subfields || [];

        subfields.forEach(function(field) {
            if (!data.hasOwnProperty(field)) {
                return;
            }

            var $field = $el.find('.acf-field[data-name="'+field+'"]').first(),
                $input = $field.find('input, textarea, select').first(),
                type = $field.data('type'),
                interval, date;

            if (type === 'date_time_picker') {
                $input = $input.siblings('input[type="text"]');

                setTimeout(function() {
                    $input.datepicker('setDate', new Date(data[field] * 1000));
                }, 1);
            } else {
                $input.val(data[field]);
            }
        });
    };

})(jQuery);
