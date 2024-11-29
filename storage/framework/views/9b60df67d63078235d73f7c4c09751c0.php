<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <a href="<?php echo e(route('pessoas.create')); ?>">
        <button type="button">Criar Novo Cadastro</button>
    </a>

    <?php if($pessoas->isEmpty()): ?>
        <p>Não há pessoas cadastradas.</p>
    <?php else: ?>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pessoa->nome); ?></td>
                        <td><?php echo e($pessoa->fone); ?></td>
                        <td><?php echo e($pessoa->email); ?></td>
                        <td>
                        <a href="<?php echo e(route('pessoas.edit', $pessoa->id)); ?>">
                                <button type="button">Editar</button>
                        </a>
                            <form action="<?php echo e(route('pessoas.destroy', $pessoa->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Tem certeza que deseja deletar esta pessoa?')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\Victor\Desktop\trabalhoCRUD\resources\views/pessoas/index.blade.php ENDPATH**/ ?>