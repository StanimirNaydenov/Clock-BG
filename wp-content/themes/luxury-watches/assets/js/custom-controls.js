(function(api) {

    api.sectionConstructor['luxury-watches-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });
})(wp.customize);