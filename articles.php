<?php
include 'includes/db.php';

$result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");

echo "<h2>Список статей</h2>";

while ($row = pg_fetch_assoc($result)) {
    echo "<div class='article' style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>
            <h3>{$row['title']}</h3>
            <p>{$row['content']}</p>
            <small>Добавлено: {$row['created_at']}</small>
          </div>";
}
?>
