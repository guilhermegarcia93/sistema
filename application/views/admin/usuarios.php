<?php $this->load->view('admin/commons/menu'); ?>
    <div class="loader"></div>
    <div class="content-wrapper" id="content-body" style="min-height: 960px;">
        <section class="content-header">
            <h1>
                Usuários
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url('admin/dashboard')?>"><i class="fa fa-dashboard"></i> Admin</a></li>
                <li class="active">Usuários</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="usuarios-grid" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Login</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($usuarios == FALSE): ?>
                                        <tr><td colspan="3">Nenhuma empresa encontrada</td></tr>
                                    <?php else: ?>
                                        <?php foreach ($usuarios as $row): ?>
                                            <tr>
                                                <td><?= $row['nome'] ?></td>
                                                <td><?= $row['login'] ?></td>
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

        $('#usuarios-grid').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        });
    });
</script>