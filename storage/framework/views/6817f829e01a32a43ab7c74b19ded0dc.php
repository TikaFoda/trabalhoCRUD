<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <a href="<?php echo e(route('pessoas.index')); ?>">
        <button type="button">Voltar</button>
    </a>
    <br>
    <h1>Cadastrar Nova Pessoa</h1>

    <?php if(session('success')): ?>
        <p style="color: green"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <form action="<?php echo e(route('pessoas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo e(old('nome')); ?>" required>
        <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <label for="fone">Telefone:</label>
        <input type="text" name="fone" id="fone" value="<?php echo e(old('fone')); ?>" required>
        <?php $__errorArgs = ['fone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\Victor\Desktop\crudClientes\resources\views/pessoas/create.blade.php ENDPATH**/ ?>