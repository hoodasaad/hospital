<div class="row">
    <div class="col-md-1">
        <ul class="menu">
            <?php
            foreach ($menu as $ul) {
                $main = $ul;
                echo '<li class="' . $main['active'] . '">
                <a class="linkLoad" href = "' . $main['url'] . '"><span class = "hover glyphicon glyphicon-' . $main['icon'] . '"></span> ' . $main['title'] . '</a><i class="arrow"></i></li>';
            }
            ?>
        </ul>
    </div>