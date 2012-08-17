<?php if(!isset($subsection)) $subsection = "" ?>
<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
        <li class="<?= ($subsection == "overview") ? "active" : ""?>" >
            <a href="/admin_categories/">Overview</a>
        </li>
        <li class="<?= ($subsection == "add") ? "active" : ""?>" >
            <a href="/admin_categories/add">Add</a>
        </li>
        <li class="<?= ($subsection == "list") ? "active" : ""?>" >
            <a href="/admin_categories/list_all">List</a>
        </li>
    </ul>
</div>