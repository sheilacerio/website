<div>
    <h3><strong>User List</strong></h3>
    <table class="table table-striped">
        <thead>
            <th>Email</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Role</th>
            <th>Active</th>
            <th>Last Login</th>
            <th>Action</th>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr data-user-id="<?=issetor($user['id'])?>">
                <td><?=issetor($user['email'])?></td>
                <td><?=issetor($user['first_name'])?></td>
                <td><?=issetor($user['last_name'])?></td>
                <td><?=$user['role'] ? 'Carrier' : 'User'?></td>
                <td class="status"><?=$user['is_active'] ? 'Yes' : 'No'?></td>
                <td><?=issetor($user['last_login'])?></td>
                <td>
                    <button type="button" class="btn btn-default change-status" data-status="<?=$user['is_active']?>">
                    <?php if($user['is_active']): ?>
                        <i class="fa fa-ban"></i>
                    <?php else: ?>
                        <i class="fa fa-check"></i>
                    <?php endif; ?>
                    </button>
                    <button type="button" class="btn btn-default delete-user"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>