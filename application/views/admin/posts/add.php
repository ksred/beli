<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/posts/menu"); ?>

<?php if(isset($success)) : ?>
        <?php if ($success == TRUE) : ?>
                <div class="span8 alert alert-success">Success!</div>
        <?php else: ?>
                <div class="span8 alert alert-error">Not successfull</div>
        <?php endif; ?>
<?php endif; ?>

<div class="span9">
        <form method="POST" action="<?= BASE_URL ?>/admin_posts/d_add" class="form-vertical post-add">
            <input type="text" name="title" placeholder="Title" required /><br />
            <textarea name="summary" placeholder="Summary" required></textarea><br />
            <textarea rows=30 name="body" placeholder="Body" required></textarea><br />
            <span>Multi select for categories</span>
            <span>Multi select for tags</span>
            <input type="submit" value="Create" class="btn">
        </form>
</div>
<?php $this->load->view("_template/footer"); ?>