<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?=$this->session->flashdata('message')?>
            <?php if($messages): ?>
            <?php foreach($messages as $message): ?>
                <div class="row well" style="margin: 5px 0;">
                    <div class="col-md-9">
                        <div>From: <strong><?=$message['first_name'].' '.$message['last_name']?></strong></div>
                        <div><?=$message['message']?></div>
                        <div><em><?=date('F d, Y H:i:s',strtotime($message['create_date']))?></em></div>
                        <div><a href="#" data-receiver="<?=$message['user_id']?>" data-parent="<?=$message['id']?>" class="reply">Reply</a></div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info">You don't have any messages yet.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="modal fade" id="reply-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="reply-form" action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Reply Message</h4>
                </div>
                <div class="modal-body">
                    <textarea name="message" class="form-control" placeholder="Type message here"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(function(){
        $('.reply').on('click',function(){
            var receiver_id = $(this).data('receiver');
            var parent_id = $(this).data('parent');
            var path = '<?=base_url()?>message/reply/'+receiver_id+'/'+parent_id;

            $('#reply-form').attr('action', path);
            $('#reply-modal').modal('show');
        });
    });
</script>