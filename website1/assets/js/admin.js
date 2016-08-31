/**
 * Created by dhamez on 8/30/16.
 */
$(function(){
    $('body').on('click','.delete-user',function(){
        var row = $(this).closest('tr');
        var user_id = row.data('user-id');

        $.ajax({
            url: base_url+'admin/ajax_delete_user',
            data : { user_id :  user_id },
            type : 'post',
            dataType : 'json',
            success:  function(response){
                if(response.success){
                    row.remove();
                }
            }
        });
    });

    $('body').on('click','.change-status',function(){
        var button = $(this);
        var row = button.closest('tr');
        var user_id = row.data('user-id');
        var status_id = button.data('status') == 1 ? 0 : 1;

        $.ajax({
            url: base_url+'admin/ajax_change_status',
            data : { user_id :  user_id, status_id : status_id },
            type : 'post',
            dataType : 'json',
            success:  function(response){
                if(response.success){
                    button.data('status', status_id);
                    if(status_id){
                        button.html('<i class="fa fa-ban"></i>');
                        row.find('.status').text('Yes');
                    } else {
                        button.html('<i class="fa fa-check"></i>');
                        row.find('.status').text('No');
                    }
                }
            }
        });
    });
});