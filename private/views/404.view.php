<?php $this->view('includes/header', ['_title'=>$title, '__css'=>$_css]) ?>
<?php $this->view('includes/navbar') ?>

<div class="container">
	<div class="title"><h1>Uh oh! We couldn't find that page</h1></div>
	<div class="text"><h3>If you think this is a msitake, please contact a website administrator.</3></div>
</div>

<?php $this->view('includes/footer', ['__js'=>$_js]) ?>