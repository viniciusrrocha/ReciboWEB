<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Geração de Recibo</div>

                <div class="panel-body">
                  <form action="<?php echo e(route('recibo.create')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                      <div class="form-group">
                          <label for="cPessoa">Pessoa</label>
                          <input class="form-control" type="text" id="cPessoa" name="tPessoa">
                      </div>
                      <div class="form-group">
                        <label for="cDescricao">Descrição</label>
                        <input class="form-control" type="text" id="cDescricao" name="tDescricao">
                    </div>
                    <div class="form-group">
                        <label for="cValor">Valor</label>
                        <input class="form-control" type="text" id="cValor" name="tValor" onKeyPress="return(moeda(this,'.',',',event))" value="1,00">
                    </div>
                    <div class="form-group">
                        <label for="cData">Data</label>
                        <input class="form-control" type="date" id="cData" name="tData" value="<?php echo e(date('Y-m-d')); ?>">
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-success">Gerar Recibo</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>