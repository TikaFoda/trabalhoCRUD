<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
</head>
<body>
    <h1>Editar Pessoa</h1>

    <form action="<?php echo e(route('pessoas.update', $pessoa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo e($pessoa->nome); ?>" required>
        <br>

        <label for="fone">Telefone:</label>
        <input type="text" id="fone" name="fone" value="<?php echo e($pessoa->fone); ?>" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo e($pessoa->email); ?>" required>
        <br>

        <button type="submit">Salvar</button>
    </form>

    <a href="<?php echo e(route('pessoas.index')); ?>">Cancelar</a>
</body>
</html>
<?php /**PATH C:\Users\Victor\Desktop\crudClientes\resources\views/pessoas/edit.blade.php ENDPATH**/ ?>