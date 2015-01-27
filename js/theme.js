(function($, UI) {

    $(function() {
        $('#thegrid').on('beforeupdate.uk.grid', function(e, elements) {
            elements.each(function(i) {
                $(this).height($(this).width());
            })
        });
    });

})(jQuery, UIkit);