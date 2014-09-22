<h1>サンプル２</h1>
<h2>お問い合わせ管理</h2>
<h3>お問い合わせ一覧</h3>

<table>

<tr>
<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
<th><?php echo $this->Paginator->sort('name', 'お名前'); ?></th>
<th><?php echo $this->Paginator->sort('email', 'メールアドレス'); ?></th>
<th><?php echo $this->Paginator->sort('mtr_sex_id', '性別'); ?></th>
<th><?php echo $this->Paginator->sort('mtr_age_id', '年齢'); ?></th>
<th><?php echo $this->Paginator->sort('title', '題名'); ?></th>
<th>操作</th>
</tr>

<?php foreach($contactData as $data): ?>

<tr>
<td><?php echo h($data['Contact']['id']); ?></td>
<td><?php echo h($data['Contact']['name']); ?></td>
<td><?php echo h($data['Contact']['email']); ?></td>
<td><?php echo $sexList[$data['Contact']['mtr_sex_id']]; ?></td>
<td><?php echo $ageList[$data['Contact']['mtr_age_id']]; ?></td>
<td><?php echo h($data['Contact']['title']); ?></td>
<td>
<?php echo $this->Html->link('詳細', array('action' => 'view', $data['Contact']['id'])); ?>　
<?php echo $this->Html->link('編集', array('action' => 'edit', $data['Contact']['id'])); ?>　
<?php echo $this->Html->link('削除', array('action' => 'delete', $data['Contact']['id'])); ?>
</td>
</tr>

<?php endforeach; ?>

</table>

<div class="paginateLinks">
<?php echo $this->Paginator->prev(); ?>&nbsp;
<?php echo $this->Paginator->numbers(); ?>&nbsp;
<?php echo $this->Paginator->next(); ?>
</div>

<div class="pageLinks">
<p><?php echo $this->Html->link('戻る', array('controller' => 'users', 'action' => 'index')); ?></p>
</div>
