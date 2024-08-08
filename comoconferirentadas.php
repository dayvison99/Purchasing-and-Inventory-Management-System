<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>Ajuda</h4>
                    </div>

                        <p/>

            <!-- Estilo dos botoes-->
            <style>
                .pequeno {
                   width: 20%;
                 }

               .medio {
                   width: 100%;
               }
             </style>

             <section class="row">
               <!-- 21:9 aspect ratio -->
               <table class="table_painel">
                 <tr class="tr_icone_painel">
                   <td class="td_icone_painel" subId="5">

                           <h4><center>Como Puxar O Relatorio de Notas de Entradas No SIG.</h4>

                </td>
              </tr>
              <tr class="tr_icone_painel">
               <td class="td_icone_painel" subId="5">

                 <div class="embed-responsive embed-responsive-16by9">
                   <iframe class="embed-responsive-item" src="/videos/relatorionotaentrada.mp4"></iframe>
                 </div>
               </td>
             </tr>
             <tr class="tr_icone_painel">
              <td class="td_icone_painel" subId="5">

                       <h4><center>Como Importar o Relatorio No SGE.</center></h4>

              </td>
               </tr>
               <tr class="tr_icone_painel">
                <td class="td_icone_painel" subId="5">
         <!-- 16:9 aspect ratio -->
                   <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="/videos/importarnotaentrada.mp4"></iframe>
                   </div>
                  </td>
                  </tr>
        </table>

             </section>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                      </div>
                    <!-- Content Row -->



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Cantinho  2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja Realmente Sair do Sistema?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
                    <a class="btn btn-primary" href="logout.php">Sim</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
