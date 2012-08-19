<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/tags/menu"); ?>

<?php if(isset($success)) : ?>
        <?php if ($success == TRUE) : ?>
                <div class="span8 alert alert-success">Success!</div>
        <?php else: ?>
                <div class="span8 alert alert-error">Not successfull</div>
        <?php endif; ?>
<?php endif; ?>
        
<div class="span9">
        <form method="POST" action="<?= BASE_URL ?>/admin_tags/d_add" class="form-vertical">
            <input type="text" name="name" placeholder="Title" required /><br />
            <input type="submit" value="Add Tag" class="btn">
        </form>
</div>

<?php $this->load->view("_template/footer"); ?>