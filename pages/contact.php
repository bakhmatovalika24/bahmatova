<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $successMessage = "Спасибо, $name! Мы получили ваше сообщение.";
}
?>

<?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>

    <?php if (!empty($successMessage)): ?>
        <p style="color: green;"><?= $successMessage ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>

