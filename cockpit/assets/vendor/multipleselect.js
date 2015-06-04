(function($, global){

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    var MultipleSelect = function(container, options){

        var $this = this;

        this.container    = $(container);
        this.options      = $.extend({}, MultipleSelect.defaults, options);
        this.lastselected = null;

        this.container.on('click', this.options.rows, function(e){

            var target = $(e.target), row = $(this), select;

            if(!target.is('a, select, option, input, [data-action], .js-ignore-select') && !target.closest('[data-action]').length) {

                if (e.shiftKey && window.getSelection) {
                    window.getSelection()[window.getSelection().empty ? 'empty':'removeAllRanges']();
                }

                select = row.find($this.options.checkboxes+':first');

                if (select.length) {

                    select.prop('checked', !select.prop('checked'));

                    // shift select
                    if (e.shiftKey && $this.lastselected) {
                        var start = Math.min($this.rows.index(row), $this.rows.index($this.lastselected)), end = Math.max($this.rows.index(row), $this.rows.index($this.lastselected));

                        for(i = start; i <= end; i++) {
                            $this.rows.eq(i).find($this.options.checkboxes+':first').prop('checked', true);
                        }
                    }

                    if (!e.shiftKey && select.prop('checked')) {
                        $this.lastselected = row;
                    } else {
                        $this.lastselected = false;
                    }

                    $this.handleSelected();
                }
            }
        }).on('click', this.options.checkboxes, function() {
            $this.handleSelected();
        }).on('click', this.options.selectall, function(){
            var checkboxes = $this.container.find($this.options.checkboxes).prop('checked', $(this).prop('checked'));
            $this.handleSelected(checkboxes);
        });

        if(!window.MutationObserver) {

            try {

                var observer = new MutationObserver(debounce(function(mutations) {
                    $this.fetchRows();
                }, 50));

                // pass in the target node, as well as the observer options
                observer.observe(this.container[0], { childList: true, subtree: true });

            } catch(e) {}
        }

        this.fetchRows();
    };


    $.extend(MultipleSelect.prototype, {

        fetchRows: function(){
            this.rows = this.container.find(this.options.rows);
            this.handleSelected();
        },

        handleSelected: function(checkboxes) {

            checkboxes = checkboxes || this.container.find(this.options.checkboxes);

            this.rows.removeClass(this.options.selectclass);

            var selected = checkboxes.filter(':checked'),
                rows     = selected.closest(this.options.rows).addClass(this.options.selectclass),
                all      = this.container.find(this.options.selectall);

            if (!rows.length) {
                lastselected = false;
            }

            if(selected.length && (selected.length!=checkboxes.length)) {
                all.prop("indeterminate", true);
            } else {
                all.prop('checked', selected.length && selected.length==checkboxes.length).prop("indeterminate", false);
            }

            this.container.trigger('multiple-select', [rows]);
        }
    });

    MultipleSelect.defaults = {
        'selectall'   : '.js-select-all',
        'checkboxes'  : '.js-select',
        'rows'        : '.js-multiple-select',
        'selectclass' : 'multiple-selected'
    };


    // AMD support
    if (typeof define === 'function' && define.amd) {
        define(function () { return MultipleSelect; });
    } else {
        global.MultipleSelect = MultipleSelect;
    }

})(jQuery, this);