<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/media/menu"); ?>

<div class="well span8">
<?php if(isset($categories)) :?>
    <?php foreach($categories->result() as $c) : ?>
        <ul class="unstyled">
            <li><?= $c->name ?></li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>
</div>
        
<?php $this->load->view("_template/footer"); ?>