<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/posts/menu"); ?>

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