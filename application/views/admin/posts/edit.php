<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/posts/menu"); ?>

<?php if(isset($success)) : ?>
        <?php if ($success == TRUE) : ?>
                <div class="span8 alert alert-success">Success!</div>
        <?php else: ?>
                <div class="span8 alert alert-error">Not successfull</div>
        <?php endif; ?>
<?php endif; ?>

<?php if(isset($post_data)) :?>
    <div class="span9">
            <form method="POST" action="<?= BASE_URL ?>/admin_posts/d_edit" class="form-vertical post-add" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title" value="<?= $post_data->title ?>" required /><br />
                <textarea name="summary" placeholder="Summary" value="<?= $post_data->summary ?>"  required></textarea><br />
                <textarea rows=30 name="body" placeholder="Body" value="<?= $post_data->body ?>"  required></textarea><br />
                <label for="categories">Categories</label>
                <select name="categories[]" multiple="multiple">
                    <?php foreach($categories->result() as $c): ?>
                            <option value="<?= $c->id ?>" <?= (in_array($c->id, $post_data->categories)) ? "selected='selected'" : "" ?>><?= $c->name ?></option>
                    <?php endforeach;?>
                </select>
                <label for="tags">Tags</label>
                <select name="tags[]" multiple="multiple">
                    <?php foreach($tags->result() as $t): ?>
                            <option value="<?= $t->id ?>" <?= (in_array($t->id, $post_data->tags)) ? "selected='selected'" : "" ?>><?= $t->tag ?></option>
                    <?php endforeach;?>
                </select>
                <input type="submit" value="Create" class="btn">
            </form>
    </div>
<?php endif; ?>

<?php $this->load->view("_template/footer"); ?>