<?php if(!isset($section)) $section = "" ?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/admin">
                Beli ::
            </a>
            <ul class="nav">
                <li class="<?php if ($section == 'posts') echo 'active' ?>">
                    <a href="/admin_posts">Posts</a>
                </li>
                <li class="<?php if ($section == 'media') echo 'active' ?>">
                    <a href="/admin_media">Media</a>
                </li>
                <li class="<?php if ($section == 'categories') echo 'active' ?>">
                    <a href="/admin_categories">Categories</a>
                </li>
                <li class="<?php if ($section == 'tags') echo 'active' ?>">
                    <a href="/admin_tags">Tags</a>
                </li>
                <li class="<?php if ($section == 'visitors') echo 'active' ?>">
                    <a href="/admin_visitors">Visitors</a>
                </li>
            </ul>
            <a href="/admin/logout" class="btn btn-success pull-right">Logout</a>
        </div>
    </div>
</div>

<div class="spacer"></div>