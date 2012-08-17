<?php $this->load->view("_template/header"); ?>

        <form method="POST" action="<?= BASE_URL ?>/admin/login" class="form form-inline">
            <input type="text" name="name" placeholder="Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log in" class="btn">
        </form>
        
<?php $this->load->view("_template/footer"); ?>