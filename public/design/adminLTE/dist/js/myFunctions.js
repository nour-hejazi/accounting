
function checkAll()
{
    $('input[class="item-checkbox"]:checkbox').each(function(){
        if($('input[class="check-all"]:checkbox:checked').length == 0){
            $(this).prop('checked', false);
        }else{
            $(this).prop('checked', true);
        }
    });
}

function deleteAll()
{
    $(document).on("click", ".deleteBtn", function () {
        var item_checked = $('input[class="item-checkbox"]:checkbox').length;
        if(item_checked > 0){
            $('.record_count').text(item_checked);
            $('.not_empty_record').removeClass('hidden');
        }
       $('#multipleDelete').modal('show');
    });
}