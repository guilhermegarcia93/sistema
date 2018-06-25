<?php $this->load->view('admin/commons/menu'); ?>
    <div class="loader"></div>
    <div class="content-wrapper" id="content-body" style="min-height: 960px;">
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?=count($empresas); ?></h3>
                            <p>Empresa(s) cadastrada(s)</p>
                        </div>
                        <div class="icon">
                            <h1><i class="fa fa-university"></i></h1>
                        </div>
                        <a href="<?=base_url('admin/empresas')?>" class="small-box-footer">Ver detalhes <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?=count($usuarios); ?></h3>
                            <p>Usuario(s) cadastrado(s)</p>
                            </div>
                            <div class="icon">
                                <h1><i class="fa fa-users"></i></h1>
                            </div>
                            <a href="<?=base_url('admin/usuarios')?>" class="small-box-footer">Ver detalhes <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('admin/commons/footer'); ?>
<script>
    $( document ).ready(function() {
        function closeLoader(callback) {
            setTimeout(function() {
                $(".loader").hide();
                $(".content").removeClass("opacidade");
                callback();
            }, 3000);
        }

        closeLoader(function(){});
    });
</script>