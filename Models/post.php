<?php
/**
 * Created by PhpStorm.
 * User: Эрлан
 * Date: 15.07.2016
 * Time: 23:09
 */

$post = Database::GetPostById($_REQUEST['id']);
if($_REQUEST['action'] == 'editPost') {
    ?>
    <form>
        <div class="form-group">
            <label for="title">Заголовок:</label>
            <input type="text" name="title" value="<?=$post['post_title']?>" />
        </div>
        <div class="form-group">
            <label for="content">Заголовок:</label>
            <textarea id="content" name="content"><?=$post['post_content']?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Редактировать</button>
        </div>
    </form>
<?php
} else {
?>

<div class="post_title">
    <?=$post['post_title']?>
</div>
<div class="post_content">
    <?=$post['post_content']?>
</div>
<div class="post_date">
    <?=$post['post_date']?>
</div>

<?php } ?>