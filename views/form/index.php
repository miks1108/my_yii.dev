<h1>Users</h1>

<table class="table table-bordered table-striped" id="users_list">

    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td></td>
        </tr>
    </thead>

    <? if(empty($users)) { ?>

        <tr>
            <td><i><small>пусто</small></i></td>
            <td><i><small>пусто</small></i></td>
            <td><i><small>пусто</small></i></td>
            <td><i><small>пусто</small></i></td>
        </tr>

    <? }
    else {

    foreach($users as $user) { ?>

        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name?></td>
            <td><?=$user->email?></td>
            <td style="width:20px;">
                <a class="delete-item" href="/form/delete?id=<?=$user->id?>" style="font-size:20px;font-weight:bold;color:#f00;">
                    X
                </a>
            </td>
        </tr>

    <? }
    } ?>

</table>

<!--<a href="/form/new" class="btn btn-primary pull-right">Add new user</a>-->


<?

use yii\bootstrap\Modal;

Modal::begin([
    'header' => '<h2>Create new user</h2>',
    'toggleButton' => ['label' => 'Add new user', 'class' => 'btn btn-primary pull-right', 'id' => 'create_btn'],
    'options' => ['id' => 'create_modal'],
]);
?>

<!--echo 'Say hello...';-->


<?
Modal::end();
?>