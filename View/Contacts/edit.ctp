<h1>サンプル２</h1>
<h2>お問い合わせ管理</h2>
<h3>お問い合わせ編集</h3>

<?php echo $this->Form->create('Contact'); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>

<div class="input">
<p>ID</p>
<p><?php echo h($this->data['Contact']['id']); ?></p>
</div>

<?php echo $this->Form->input('name'); ?>

<?php echo $this->Form->input('email'); ?>

<?php echo $this->Form->input('mtr_sex_id', array('type' => 'radio', 'options' => $sexList)); ?>

<?php echo $this->Form->input('mtr_age_id', array('type' => 'select', 'options' => $ageList)); ?>

<?php echo $this->Form->input('title'); ?>

<?php echo $this->Form->input('content', array('type' => 'textarea')); ?>

<?php echo $this->Form->input('MtrFavorite.MtrFavorite', array('multiple' => 'checkbox', 'options' => $favoriteList)); ?>

<?php echo $this->Form->end('　編集　'); ?>
