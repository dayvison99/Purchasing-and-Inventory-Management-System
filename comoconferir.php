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
               <div class="col-xl-12">
                 <table class="table_painel">
                <td class="td_icone_painel" subId="280">
                  <div class = "div_painel">
                    <a class = "icone_painel" href="comoconferirtransferencias.php" title="Alterar senha do operador de acesso ao Sistema">
                    <div class = "div_icone">
                      <figure class = "figure_painel">
                      <img class = "icone_img" src="/img/inter.png" alt=""/>
                      <figcaption>

                        <div class="texto_icones_painel">
                        <div class="texto_icones_painel text">
                        Como Conferir Transferência ?
                        </div>
                        </div>

                      </figcaption>
                      </figure>
                        <svg height="0" xmlns="http://www.w3.org/2000/svg">
                        <filter id="drop-shadow">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                        <feOffset dx="0.4" dy="0.6" result="offsetblur"/>
                        <feFlood flood-color="rgba(0,0,0,0.5)"/>
                        <feComposite in2="offsetblur" operator="in"/>
                        <feMerge>
                          <feMergeNode/>
                          <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                        </filter>
                        </svg>

                        </div>
                    </a>
                  </div>
                </td>
                <td class="td_icone_painel" subId="280">
                  <div class = "div_painel">
                    <a class = "icone_painel" href="comoconferirentadas.php" title="Alterar senha do operador de acesso ao Sistema">
                    <div class = "div_icone">
                      <figure class = "figure_painel">
                      <img class = "icone_img" src="/img/inter.png" alt=""/>
                      <figcaption>

                        <div class="texto_icones_painel">
                        <div class="texto_icones_painel text">
                        Como Conferir Entradas ?
                        </div>
                        </div>

                      </figcaption>
                      </figure>
                        <svg height="0" xmlns="http://www.w3.org/2000/svg">
                        <filter id="drop-shadow">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                        <feOffset dx="0.4" dy="0.6" result="offsetblur"/>
                        <feFlood flood-color="rgba(0,0,0,0.5)"/>
                        <feComposite in2="offsetblur" operator="in"/>
                        <feMerge>
                          <feMergeNode/>
                          <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                        </filter>
                        </svg>

                        </div>
                    </a>
                  </div>
                </td>
                <td class="td_icone_painel" subId="280">
                  <div class = "div_painel">
                    <a class = "icone_painel" href="#" title="Alterar senha do operador de acesso ao Sistema">
                    <div class = "div_icone">
                      <figure class = "figure_painel">
                      <img class = "icone_img" src="/img/inter.png" alt=""/>
                      <figcaption>

                        <div class="texto_icones_painel">
                        <div class="texto_icones_painel text">
                        Como Conferir Estoque ?
                        </div>
                        </div>

                      </figcaption>
                      </figure>
                        <svg height="0" xmlns="http://www.w3.org/2000/svg">
                        <filter id="drop-shadow">
                        <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                        <feOffset dx="0.4" dy="0.6" result="offsetblur"/>
                        <feFlood flood-color="rgba(0,0,0,0.5)"/>
                        <feComposite in2="offsetblur" operator="in"/>
                        <feMerge>
                          <feMergeNode/>
                          <feMergeNode in="SourceGraphic"/>
                        </feMerge>
                        </filter>
                        </svg>

                        </div>
                    </a>
                  </div>
                </td>
              <script>
              //console.log ("7");
              </script>

                </tr>


             </table>




                     </td>
                   </tr>
                 </table>
             </div>
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
                        <span>Copyright &copy; Cantinho  2021</span>
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
