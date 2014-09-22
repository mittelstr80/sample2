<h1>サンプル２</h1>
<h2>お問い合わせ管理</h2>
<h3>お問い合わせ詳細</h3>

<table>

<tr>
<th>ID</th>
<td><?php echo h($contactData['Contact']['id']); ?></td>
</tr>

<tr>
<th>お名前</th>
<td><?php echo h($contactData['Contact']['name']); ?></td>
</tr>

<tr>
<th>メールアドレス名</th>
<td><?php echo h($contactData['Contact']['email']); ?></td>
</tr>

<tr>
<th>性別</th>
<td><?php echo $sexList[$contactData['Contact']['mtr_sex_id']]; ?></td>
</tr>

<tr>
<th>年齢</th>
<td><?php echo $ageList[$contactData['Contact']['mtr_age_id']]; ?></td>
</tr>

<tr>
<th>題名</th>
<td><?php echo h($contactData['Contact']['title']); ?></td>
</tr>

<tr>
<th>本文</th>
<td><?php echo nl2br(h($contactData['Contact']['content'])); ?></td>
</tr>

<tr>
<th>関心事</th>
<td>
<?php foreach($contactData['MtrFavorite'] as $favorite): ?>
<div class="favoriteItem"><?php echo $favoriteList[$favorite['id']]; ?></div>
<?php endforeach; ?>
</td>
</tr>

</table>

<div class="pageLinks">
<p><?php echo $this->Html->link('戻る', array('action' => 'index')); ?></p>
</div>
