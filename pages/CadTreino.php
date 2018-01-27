<?php 
require 'controller/Cliente.php';
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <div class="page-content" style="min-height: 529px;margin-left: initial;">
            <div class="container" style="width: 100%;">
                <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">
                    <div class="portlet light" style="margin-right: 102px;">
                        <!--TÍTULO-->
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="fa fa-user font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> Treino</span>
                            </div>
                        </div>
                        <!--/TÍTULO-->

                        <!--FORMULÁRIO-->
                        <!--PLANOS-->
                        <div class="form-group form-md-line-input has-info">
                            <label class="col-md-2 control-label" for="cliente">Nome</label>
                            <div class="col-md-10">
                                <select class="form-control" id="cliente" name="cliente">
                                    <?php
                                    if (isset($consultaNome) && $consultaNome->rowCount() > 0) {
                                        while ($linha = $consultaNome->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option>" . $linha ["nome"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <!--TABELA-->
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <?php
                                    if (isset($comando) && $comando->rowCount() > 0) {
                                        echo "<thead>";
                                        echo "  <tr>";
                                        echo "      <th>#</th><th>Cód.</th><th>Exercício</th><th>Repetição</th>";
                                        echo "  </tr>";
                                        echo "</thead>";

                                        echo "<tbody>";
                                        while ($linha = $comando->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "  <td>
                                            <div class='input-group'>
                                            <input type='checkbox' class='form-control' maxlength='80' 
                                            required='required' id='select' name='select'>
                                            <div class='form-control-focus'> </div>
                                            <span class='input-group-addon'>
                                            <i class='fa fa-pencil'></i>
                                            </span>
                                            </div></td><td>" . $linha ["#"] . "</td><td>" . $linha ["nome"] . "</td><td>" . $linha ["Repetição"] . "</td><td>
                                            <div class='input-group'>
                                            <input type='text' class='form-control' maxlength='80' 
                                            required='required' id='nome' name='nome'>
                                            <div class='form-control-focus'> </div>
                                            <span class='input-group-addon'>
                                            <i class='fa fa-pencil'></i>
                                            </span>
                                            </div>
                                            </td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                        <!--/TABELA-->
                        <div class="form-actions margin-top-10">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="reset" class="btn default" name="btnLimpar">Limpar</button>
                                    <button type="submit" class="btn blue" name="btnInserir">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/FORMULÁRIO-->
            </div>
        </div>
    </div>
</div> 
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

