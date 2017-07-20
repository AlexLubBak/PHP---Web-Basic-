<!Doctype html>
<head>
    <title>My Page</title>

</head>
<body>

<?php for ($i = 1; $i <= 10; $i++): ?>
    <?php if ($i % 3 == 0): ?>
        <h1 style="color: red"><?= $i; ?></h1>
    <?php else: ?>
        <h1><?= $i; ?></h1>
    <?php endif; ?>
<?php endfor; ?>
</body>
