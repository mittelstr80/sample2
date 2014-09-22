<h1>サンプル２</h1>
<h2>お問い合わせ管理</h2>
<h3>お問い合わせ削除</h3>

<?php echo $this->Form->create('Contact', array('type' => 'delete')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>

<table>

<tr>
<th>ID</th>
<td><?php echo h($this->data['Contact']['id']); ?></td>
</tr>

<tr>
<th>お名前</th>
<td><?php echo h($this->data['Contact']['name']); ?></td>
</tr>

<tr>
<th>メールアドレス名</th>
<td><?php echo h($this->data['Contact']['email']); ?></td>
</tr>

<tr>
<th>性別</th>
<td><?php echo $sexList[$this->data['Contact']['mtr_sex_id']]; ?></td>
</tr>

<tr>
<th>年齢</th>
<td><?php echo $ageList[$this->data['Contact']['mtr_age_id']]; ?></td>
</tr>

<tr>
<th>題名</th>
<td><?php echo h($this->data['Contact']['title']); ?></td>
</tr>

<tr>
<th>本文</th>
<td><?php echo nl2br(h($this->data['Contact']['content'])); ?></td>
</tr>

<tr>
<th>関心事</th>
<td>
<?php foreach($this->data['MtrFavolite'] as $favolite): ?>
<div class="favoliteItem"><?php echo $favoliteList[$favolite['id']]; ?></div>
<?php endforeach; ?>
</td>
</tr>

</table>

<p>お問い合わせを削除します。<br />よろしければ「削除」ボタンを押してください</p>

<?php echo $this->Form->end('　削除　'); ?>

<div class="pageLinks">
<p><?php echo $this->Html->link('戻る', array('action' => 'index')); ?></p>
</div>
