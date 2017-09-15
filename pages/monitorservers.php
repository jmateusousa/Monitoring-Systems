<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MonSys 1.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MonSys 1.0</a>
            </div>


            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                   
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>

                </li>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    
                </li>
                
            </ul>


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Acess <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pt.php">Aplicacao</a>
                                </li>
                            </ul>
                           
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-ban-circle"></i> Firewall <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="firewall1.php">Log Firewall</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-screenshot"></i> Monitor <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="monitorservers.php">Equipamentos/Sevidores</a>
                                </li>
                            </ul>           
                        </li>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Monitoramento de equipamentos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

							<?php
							
							# inclui o arquivo com o vetor de servidores
							include 'servidores.php';

							if(isset($servidor)){

								# inicio as variáveis
								$l = 0;
								$server_out = "";
								$f = 0;
								$alerta = "";

								for($i = 0; $i < count($servidor); $i++){

									$linha = explode(':',$servidor[$i]);
									$l++;

									# executo o ping e verifico se retornou algum byte
									$ping = 'ping -n 1 ';
									$ping .= $linha[0];
									$stream = shell_exec($ping);
									

									# se não retornou eu adiciono um contador, exibo na tela em vermelho os dados do servidor, impressoa ou roteador
									if(!ereg('bytes=',$stream)){
										$a = "I";
										$f++;
										echo "<div  style=\"margin-left:10px; background-color:#e30000; vertical-align:middle; float:left; font-family:Verdana, Geneva, sans-serif; font-size:10px; color:#fff; height:60px; width:250px; border:solid 1px #999;\">
											<div style=\"width:60px; float:left;height:60px;\"><img src='".$linha[2].".png'></div>
											<div style=\"margin-left:10px; vertical-align:middle; float:left\"><br><strong>".$linha[1]."</strong><br />".$linha[0]."<br>"."Status:";   

										$server_out .= "Nome: ".$linha[1]." IP: ".$linha[0]."";

										# Adiciono mais uma tentativa ao meu contador, um arquivo texto desse servidor
										if(!file_exists("./".$linha[0].".txt")) shell_exec('touch '.$linha[0].".txt");

										$fp = fopen("./".$linha[0].".txt", "r+");
										$t = fread($fp,2);
										fclose($fp);

										# se já houve mais de 35 tentativas, envio um e-mail e zero o contador, lembrando que cada tentativa, tem um intervalo de 1 minuto
										if($t >= 35){
											$t = 3;
											$alerta = "ATENÇÃO, OUTROS ALERTAS JÁ FORAM EMITIDOS PARA ESSE(S) SERVIDOR(S)! ";
										}else
											$t++;

										# Caso seja o primeiro alerta (depois da 3ª tentativa ele envia um e-mail)
										if($t == 4 && !$alerta)
											$alerta = "PRIMEIRO ALERTA! (3ª tentativa) ";

										$fp = fopen("./".$linha[0].".txt", "w");
											fwrite($fp, $t);

										fclose($fp);

										# Gravar Log Erro       
										$fp2 = fopen("./ERR_".date("d-m-Y").".txt", "a+");
										$txt = "\n".date("d/m/Y - H:i:s")."  \t\t".$linha[0]." \t\t".$linha[1];
										fwrite($fp2, $txt);

										fclose($fp2);        

									}

									# se não houve erro, ele exclui o arquivo de texto (contador) caso esteja criado pois o servidor voltou a responder, então exibo a tela com as informações normais como nome, ip, status e o desenho.
									else{
										echo "<div  style=\"margin-left:10px; vertical-align:middle; float:left; font-family:Verdana, Geneva, sans-serif; font-size:10px; color:#666; height:60px; width:250px; border:solid 1px #999;\">
										<div style=\"width:60px; float:left;height:60px;\"><img src='".$linha[2].".png'></div>
										<div style=\"margin-left:10px; vertical-align:middle; float:left\"><br><strong>".$linha[1]."</strong><br />".$linha[0]."<br>"."Status:";

										# Apaga o arquivo caso esteja pingando
										if(file_exists("./".$linha[0].".txt")) unlink("./".$linha[0].".txt");

										$a = "A";

										# gravo o acerto - só para ter um log
										# Gravar Log Acerto            
										$fp2 = fopen("./OK_".date("d-m-Y").".txt", "a+");
										$lin = explode(" ",$stream);
										$txt = "\n".date("d/m/Y - H:i:s").";".$lin[10].";".str_replace("time=","",$lin[11]).";".$linha[0].";".$linha[1];
										fwrite($fp2, $txt);

										fclose($fp2);        
									}
									echo (ereg('bytes=',$stream))?" <strong>Ativo</strong>":" <font color='#fff008'><strong>Não responde ao ping</strong></font></font>";

									echo "</div></div>";   

									if($l == 4){
										echo "<br style=\"clear:both\"><br />";
										$l = 0;
									}

								}
								if(isset($server_out) && $server_out && isset($alerta) && $alerta){
									
									if($f = 1) $server_out = $alerta." O Servidor/Equipamento abaixo encontra-se indisponivel: ".$server_out;
									
									if($f > 1) $server_out = $alerta." Os Servidores/Equipamentos abaixo encontram-se indisponiveis: ".$server_out;
									
									$to      = 'destinatario@exemplo.com.br';
									$headers = 'From: remetente@exemplo.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
									$assunto = "ALERTA - Servidor is down " . date("d/m/Y - H:i:s");
									$msg = $server_out;
									
										echo "<br style='clear:both'><div align='center'  style=\"margin-top:15px; background-color:#e30000; vertical-align:middle; float:left; font-family:Verdana; font-size:10px; color:#fff; height:20px; width:500px; border:solid 1px #999;\"><div style=\"margin-top:4px;\">";

										//enviando e retornando o status de envio
										if(mail($to,$assunto,$msg,$headers))
											 echo "<b>Alerta Enviado para (Seu email)</b>";
										else
											 echo "<b>Houve um erro ao  enviar o email! </b>";

										echo "</div></div>";
								}

							}

							?>
                 
                    <!-- /.panel -->
                </div>
                
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	<!-- Inicia o contador assim que a página for carrega totalmente  -->
</body>

</html>
