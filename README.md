# MonSys - Monitoring-Systems 1.0
systems monitoring equipment in network development in PHP.

Adicione os equipamento/servidor no arquivo ./pages/servidores.php

// ----------- IP : nome do servidor : Tipo de icone
$servidor[] = "192.168.254.X:Nome do equipamento:tipo de icone";
$servidor[] = "192.168.254.10:Servidor Aplicacao:S";

Tipo de icones, adcione apenas as letras abaixo:

// S -> servidor
// R -> roteador
// SW -> Switch
// P -> impressora
// DV -> DVR

No arquivo monitorservers.php voce configurar a quantidade de pings que a aplicacao vai disparar para cada equipamento e tambem customizar as mensagem de alerta que serao enviadas por email conforme abaixo?

// executo o ping e verifico se retornou algum byte
$ping = 'ping -n 1 ';
$ping .= $linha[0];
$stream = shell_exec($ping);

----------------------------------------------------=-----------------------------------------------------------------

if(isset($server_out) && $server_out && isset($alerta) && $alerta){								
    if($f = 1) $server_out = $alerta." O Servidor/Equipamento abaixo encontra-se indisponivel: ".$server_out;
        if($f > 1) $server_out = $alerta." Os Servidores/Equipamentos abaixo encontram-se indisponiveis: ".$server_out;
									// Destinatario do email
									$to      = 'exemplo@xemplo.com,exemplo@xemplo.com,exemplo@xemplo.com';
                  //remetente do email
									$headers = 'From: exemplo@xemplo.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
									$assunto = "ALERTA - Servidor is down - Cadersil " . date("d/m/Y - H:i:s");
									$msg = $server_out;
									
                   echo "<br style='clear:both'><div align='center'  style=\"margin-top:15px; background-color:#e30000;                           vertical-align:middle; float:left; font-family:Verdana; font-size:10px; color:#fff; height:20px;          width:500px; border:solid 1px #999;\"><div style=\"margin-top:4px;\">";
                    //enviando e retornando o status de envio
										if(mail($to,$assunto,$msg,$headers))
											 echo "<b>Alerta Enviado para (Seu email)</b>";
										else
											 echo "<b>Houve um erro ao  enviar o email! </b>";
                  	echo "</div></div>";
								}
                
----------------------------------------------------=-----------------------------------------------------------------

Temos muito o que aprimorar esta aplicacao contribua com este projeto.
