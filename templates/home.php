<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>Acesso Rápido </h4>
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


                   <?php
                     if ($_SESSION['permissao'] == "administrador" or $_SESSION['permissao'] == "root"){?>
                   <tr class="tr_icone_painel">

                     <td class="td_icone_painel" subId="5">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="usuario.php" title="Cadastrar Usuários">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/user.png" alt=""/>
                           <figcaption>
                           <div class="texto_icones_painel">
                             <div class="texto_icones_painel text">
                             Cadastro de Usuários
                             </div>
                           </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
                             <feFlood flood-color="rgba(0,0,0,0.5)"/>
                             <feComposite in2="offsetblur" operator="in"/>
                             <feMerge>
                               <feMergeNode/>
                               <feMergeNode in="SourceGraphic"/>
                             </feMerge>
                             </filter>
                             </svg>
             </a>
                       </div>
                     </td>
                   <td class="td_icone_painel" subId="3">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="marcasjn.php" title="Alínea, Associado, Atividade Empresarial, Categoria, Endereço, Entidade, Operador, Parâmetro Específico, Pessoa Física, Pessoa Jurídica...">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/compras.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                 Compras Januária
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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

                   <td class="td_icone_painel" subId="2">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="marcassf.php" title="Controle de IP, Perfil, Política de Troca de Senha...">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/compras.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                  Compras São Francisco
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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

           <td class="td_icone_painel" subId="6">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="marcasbm.php" title="Parâmetro Boleto, Parâmetro Faturamento, Retorno Bancário...">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/compras.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                  Compras Brasília de Minas
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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




                      </tr><tr class = "tr_icone_painel">			<script> // console.log ( "0"); </script>
                     <td class="td_icone_painel" subId="4">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="importar.php" title="Alerta, Bloqueio Consulta Realizada, Cheque Lojista, Consulta Realizada, Contra Ordem, Exclusão CCF, Exclusão Registro, Ordem Judicial, SPC, Tranferencia de Registro...">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/icons_inclusao_exclusao_nl.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                Importar Dados
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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





                     <td class="td_icone_painel" subId="2388">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="sugestao.php" title="Novo sistema de relatórios.">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/estoque.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                 Balanceamento Januária
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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





                     <td class="td_icone_painel" subId="9">
                       <div class = "div_painel">
                         <a class = "icone_painel" href="/spc/menu.action?idSubsistema=9" title="Relatórios">
                           <div class = "div_icone">
                           <figure class = "figure_painel">
                           <img class = "icone_img" src="/img/estoque.png"alt=""/>
                           <figcaption>
                             <div class="texto_icones_painel">
                               <div class="texto_icones_painel text">
                                Balanceamento São Francisco
                               </div>
                             </div>
                           </figcaption>
                           </figure>
                             <svg height="0" xmlns="http://www.w3.org/2000/svg">
                             <filter id="drop-shadow">
                             <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
                             <feOffset dx="0.2" dy="0.4" result="offsetblur"/>
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

                   <td class="td_icone_painel" subId="6068">
                   <div class = "div_painel">
                     <a class = "icone_painel" href="/spc/controleacesso/minhasinformacoes/detail.action?__idFuncionalidade=6068" title="Minhas Informações">
                     <div class = "div_icone">
                       <figure class = "figure_painel">
                       <img class = "icone_img" src="/img/estoque.png" alt=""/>
                       <figcaption>

                         <div class="texto_icones_painel">
                         <div class="texto_icones_painel text">
                         Balanceamento Brasília de Minas
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
                  </tr><tr class = "tr_icone_painel">			<script> // console.log ( "4"); </script>
                 <td class="td_icone_painel" subId="280">
                   <div class = "div_painel">
                     <a class = "icone_painel" href="/spc/controleacesso/alterarsenha/detail.action?__idFuncionalidade=280" title="Alterar senha do operador de acesso ao Sistema">
                     <div class = "div_icone">
                       <figure class = "figure_painel">
                       <img class = "icone_img" src="/img/icons_alterar_senha_2.png" alt=""/>
                       <figcaption>

                         <div class="texto_icones_painel">
                         <div class="texto_icones_painel text">
                         Alterar Senha
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
                         Como Fazer Balanceamento ?
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
                     <a class = "icone_painel" href="comoconferir.php" title="Alterar senha do operador de acesso ao Sistema">
                     <div class = "div_icone">
                       <figure class = "figure_painel">
                       <img class = "icone_img" src="/img/inter.png" alt=""/>
                       <figcaption>

                         <div class="texto_icones_painel">
                         <div class="texto_icones_painel text">
                         Como Fazer Confêrencias ?
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
                         Como Fazer Compras ?
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
              <?php
            }
            ?>

            <?php
              if ($_SESSION['permissao'] == "estoque"){?>

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

            <?php
          }
          ?>
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
