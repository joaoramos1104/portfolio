<h2>Você recebeu uma nova mensagem</h2>
<p><strong>Nome:</strong> <?php echo e($data[0]['name']); ?></p>
<p><strong>Telefone:</strong> <?php echo e($data[0]['tel']); ?></p>
<p><strong>E-mail:</strong> <?php echo e($data[0]['email']); ?></p>
<p><strong>Mensagem:</strong></p>
<p><?php echo e($data[0]['message']); ?></p>
<?php /**PATH E:\xampp\htdocs\portfolio\resources\views/mail/message.blade.php ENDPATH**/ ?>