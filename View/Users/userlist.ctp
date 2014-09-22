<h1>サンプル２</h1>
<h2>ユーザ管理</h2>
<h3>ユーザ一覧 
    <span>
<?php echo $this->Html->link('新規追加', array('action'=>'add')); ?>
    </span>
</h3>

<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
        <th><?php echo $this->Paginator->sort('username', 'ユーザ名'); ?></th>
        <th>操作</th>
                                              

    
<?php foreach($userData as $data): ?>
    <tr>
        <td><?php echo h($data['User']['id']) ?></td>
        <td><?php echo h($data['User']['username']) ?></td>
        <td>
            <?php echo $this->Html->link('詳細', array('action'=> 'view', $data['User']['id'])) ?>
            <?php echo $this->Html->link('編集', array('action'=> 'edit', $data['User']['id'])) ?>
            <?php echo $this->Html->link('削除', array('action'=> 'delete', $data['User']['id'])) ?>
        </td>
     </tr>   
    
<?php endforeach; ?>
    
</table>

<div class="paginateLinks">
    <?php echo $this->Paginator->prev(); ?>&nbsp;
    <?php echo $this->Paginator->numbers(); ?>&nbsp;
    <?php echo $this->Paginator->next(); ?>&nbsp;
</div>

<div class="pageLinks">
    <p><?php echo $this->Html->link('戻る', array('action'=>'index')); ?></p>
</div>

