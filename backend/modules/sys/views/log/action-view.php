<?php
use yii\helpers\Url;

?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
    <h4 class="modal-title">基本信息</h4>
</div>
<div class="modal-body">
    <table class="table">
        <tbody>
        <tr>
            <td>行为</td>
            <td><?= $model['behavior']?></td>
        </tr>
        <tr>
            <td>提交方法</td>
            <td><?= $model['method']?></td>
        </tr>
        <tr>
            <td>用户</td>
            <td><?= isset($model->manager->username) ? $model->manager->username : '游客' ?></td>
        </tr>
        <tr>
            <td>模块</td>
            <td><?= $model['module']?></td>
        </tr>
        <tr>
            <td>控制器方法</td>
            <td><?= $model['controller']; ?>/<?= $model['action']; ?></td>
        </tr>
        <tr>
            <td>Url</td>
            <td><?= $model['url']?></td>
        </tr>
        <tr>
            <td>IP</td>
            <td><?= long2ip($model['ip'])?></td>
        </tr>
        <tr>
            <td>地区</td>
            <td><?= $model['country']; ?>·<?= $model['provinces']; ?>·<?= $model['city']; ?></td>
        </tr>
        <tr>
            <td style="min-width: 100px">Get数据</td>
            <td style="max-width: 700px">
                <?php
                echo "<pre>";
                print_r(json_decode($model['get_data'], true))
                ?>
            </>
        </tr>
        <tr>
            <td style="min-width: 100px">Post数据</td>
            <td style="max-width: 700px">
                <?php
                echo "<pre>";
                print_r(json_decode($model['post_data'], true))
                ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
</div>