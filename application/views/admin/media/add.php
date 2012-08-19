<?php $this->load->view("_template/header"); ?>

<?php $this->load->view("admin/media/menu"); ?>

<?php if(isset($success)) : ?>
        <?php if ($success == TRUE) : ?>
                <div class="span8 alert alert-success">Success!</div>
        <?php else: ?>
                <div class="span8 alert alert-error">Not successfull</div>
        <?php endif; ?>
<?php endif; ?>
  
<div class="span9">
        <form method="POST" action="<?= BASE_URL ?>/admin_media/d_add" class="form-vertical" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required /><br />
            <input type="text" name="desc" placeholder="Desc" required /><br />
            <input type="file" name="media-picture" placeholder="Title" required /><br />
            <input type="submit" value="Add media" class="btn">
        </form>
</div>

<?php $this->load->view("_template/footer"); ?>