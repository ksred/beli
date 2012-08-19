<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/tags/menu"); ?>

<div class="well span8">
<?php if(isset($tags)) :?>
    <?php foreach($tags->result() as $t) : ?>
        <ul class="unstyled">
            <li><?= $t->tag ?></li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>
</div>
        
<?php $this->load->view("_template/footer"); ?>