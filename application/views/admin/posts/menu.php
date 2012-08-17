<?php if(!isset($subsection)) $subsection = "" ?>
<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
        <li class="<?= ($subsection == "overview") ? "active" : ""?>" >
            <a href="/admin_posts/">Overview</a>
        </li>
        <li class="<?= ($subsection == "add") ? "active" : ""?>" >
            <a href="/admin_posts/add">Add</a>
        </li>
        <li class="<?= ($subsection == "list") ? "active" : ""?>" >
            <a href="/admin_posts/list_all">List</a>
        </li>
    </ul>
</div>