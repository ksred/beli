<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/categories/menu"); ?>
        
<div class="span9">
        <form method="POST" action="<?= BASE_URL ?>/admin_categories/d_add" class="form-vertical">
            <input type="text" name="name" placeholder="Title" required /><br />
            <input type="submit" value="Add category" class="btn">
        </form>
</div>

<?php $this->load->view("_template/footer"); ?>