<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 13.07.2016
 * Time: 16:01
 */


$accessAllow = false;

if(Security::GetStatus()) {
    $accessAllow = true;
}
$allPosts = Database::GetAllPosts();
?>
<div class="page_title">Новости</div>
<?php if($accessAllow): ?>
    <?php if(isset($_REQUEST['message'])): ?>
        <div class="alert fade in alert-danger" id="add_post_message">
            <?=$_REQUEST['message']?>
        </div>
    <?php endif; ?>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                        Добавить новость
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0;">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="/addPost">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Заголовок</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">Содержание</label>
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Добавить</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php foreach($allPosts as $post): ?>
<div class="post">
    <div class="post_title_entry"><a href="/post/<?=$post['post_id']?>"><?=$post['post_title']?></a></div>
    <div class="post_content"><?=substr($post['post_title'], 300)?></div>
    <div class="post_date"><?=$post['post_date']?></div>
    <?php if($accessAllow): ?>
        <?php
            if(isset($_REQUEST['message'])) {
                echo('<div class="alert fade in alert-danger">'.$_REQUEST['message'].'</div>');
            }
        ?>
        <div class="post_edit_panel">
            <a href="/removePost/<?=$post['post_id']?>">Удалить</a> | <a href="/editPost/<?=$post['post_id']?>">Редактровать</a>
        </div>
    <?php endif; ?>
</div>
<?php endforeach; ?>
