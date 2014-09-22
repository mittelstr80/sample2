<h1>サンプル２</h1>
<h2>ダッシュボード</h2>

<ul>
    <li><?php echo $this->Html->link('問い合わせ処理', array('controller'=>'contacts', 'action' => 'index')); ?></li>
    <br />
    <li><?php echo $this->Html->link('ユーザ管理', array('action'=>'userlist')); ?></li>
    <br />
    <li><?php echo $this->Html->link('ログアウト', array('action'=>'logout')); ?></li>
</ul>