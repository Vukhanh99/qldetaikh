jQuery(document).ready(function($) {
    $('.phanquyen-edit').click(function(e) {
        e.preventDefault();
       
        var _parent = $(this).parents('tr').first();
        var _id = $(_parent).attr('data-id');
        var _name = $(_parent).attr('data-name');
        console.log(_id, _name);
        $('#phanquyen').toggleClass('active');
    });
});