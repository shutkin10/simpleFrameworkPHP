<p><b><font style="color: red">Main page</font></b></p>

<?php foreach ($news as $val): ?>
    <h3><?php echo $val['title']; ?></h3>
    <p><?php echo $val['description']; ?></p>
    <hr>
<?php endforeach; ?>