<?php
use app\components\BoxCollapse;

/* @var $this yii\web\View */

$this->title = 'Painel';
?>

<?php
BoxCollapse::begin([
    'title' => '<i class="fa fa-dashboard"></i> Dashboard',
    'type' => BoxCollapse::TYPE_DANGER,
]);
?>

<div class="site-index">

    
   
    
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $totalEmprestimos ?> </font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empréstimos</font></font></p>
            </div>
            <div class="icon">
              <i class="fa fa-random"></i>
            </div>
            <a href="emprestimo" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Mais informações </font></font><i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    
     <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $totalClientes ?> </font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Clientes    </font></font></p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="cliente" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Mais informações </font></font><i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $totalProdutos ?> </font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produtos</font></font></p>
            </div>
            <div class="icon">
              <i class="fa fa-suitcase"></i>
            </div>
            <a href="produtos" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Mais informações </font></font><i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $totalParceiros ?> </font></font></h3>

              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parceiros</font></font></p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="parceiro" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Mais informações </font></font><i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
   
</div>
<?php BoxCollapse::end() ?>