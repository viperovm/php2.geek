<?php if(isset($text)): ?>

<h3><?= $text ?></h3>

<?php else: ?>

<br>
<form method="post">
	<input type="text" name="login" placeholder="Введите логин" required>
	<input type="password" name="password" placeholder="Введите пароль" required>
	<input type="submit" name="button" value="Войти">
</form>

<?php endif; ?>