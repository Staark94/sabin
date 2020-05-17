<?php
    global $app, $auth;
?>
<table class="table table-dark mt-5" padding="0" cellpadding="0" border="0" cellspacing="0">
    <thead>
        <tr>
            <th colspan="6" class="top">Lista jucatorilor interzisi</th>
        </tr>
        <tr class="info">
            <td align="center">Jucator</td>
            <td>Steam id</td>
            <td>Admin</td>
            <td>Motiv</td>
            <td>Durata</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($app->render() as $item): ?>
            <tr>
                <td><?=$item->jucator;?></td>
                <td><?=$item->steamid;?></td>
                <td><?=$item->admin;?></td>
                <td><?=$item->motiv;?></td>
                <td><?=$item->durata;?></td>
                <td>
                    <?php if($auth->getAdmin()):?>
                        <a class="btn btn-sm btn-warning text-white" href="index.php?delete=<?=$item->id;?>">Sterge</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tbody class="end">
        <tr>
            <td colspan="6">mix.uxg.ro</td>
        </tr>
    </tbody>
</table>