<?php $this->load->view('admin/commons/menu'); ?>
    <div class="loader"></div>
    <div class="content-wrapper" id="content-body" style="min-height: 960px;">
        <section class="content-header">
            <h1>
                Empresas
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url('admin/dashboard')?>"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Empresas</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="empresas-grid" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Razão Social</th>
                                        <th>Cnpj</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($empresas == FALSE): ?>
                                        <tr><td colspan="3">Nenhuma empresa encontrada</td></tr>
                                    <?php else: ?>
                                        <?php foreach ($empresas as $row): ?>
                                            <tr>
                                                <td><?= $row['razao_social'] ?></td>
                                                <td><?= $row['cnpj'] ?></td>
                                                <td><a href="<?= $row['editar_url'] ?>">[Editar]</a> <a href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
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

        $('#empresas-grid').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        });
    });
</script>