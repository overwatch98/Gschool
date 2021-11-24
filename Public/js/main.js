$('#hide').on('click', function(e){
    e.preventDefault();
    var btn = $(this);
    var div = btn.parent();
    div.addClass('hide-alert');
});
$('#btn-account-edit').on('click', function(e){
    e.preventDefault();
    var btnedit = $(this);
    //console.log(this);
    var box = btnedit.parent();
    console.log(box)
    box.addClass('.display-edit');

})