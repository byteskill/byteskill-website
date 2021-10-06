<?php $this->view('includes/header', ['_title'=>$title, '__css'=>$_css]) ?>
<?php $this->view('includes/navbar') ?>

<div class="grid-container">
  <div class="item1">Header</div>
  <div class="item2">
    
  </div>
  <div class="item3">Main</div>  
  <div class="item4">Footer</div>
</div>

<?php $this->view('includes/footer', ['__js'=>$_js]) ?>
