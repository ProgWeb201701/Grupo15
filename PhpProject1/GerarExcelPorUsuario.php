
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Avaliação de Propriedade Rural</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'PLANILHA VALIDACAO TESTE RINCÓN DEL SARANDY.xls';
		
		//Selecionar todos os itens da tabela 
		$result_dados_pessoais = "SELECT * FROM usuarios WHERE `id`=1";
		$resultado_dados_pessoais = mysqli_query($conn, $result_dados_pessoais);
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado_dados_pessoais)){
		// Criamos uma tabela HTML com o formato da planilha
		
		$html = '';
		$html .= '<table border="2"  bgcolor="#B0C4DE">';
		$html .= '<tr bgcolor="#CDC9A5">';
		$html .= '<td colspan="18"><center>Caracterização do sistema de produção</center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Nome Propriedade</b></td>';
		$html .= '<td><b>Proprietário</b></td>';
		$html .= '<td><b>Endereco</b></td>';
		$html .= '<td><b>Municipio</b></td>';
		$html .= '<td><b>Telefone / Celular</b></td>';
		$html .= '<td><b>Email</b></td>';
		$html .= '<td><b>Tipo</b></td>';
		$html .= '<td><b>OBservação</b></td>';
		$html .= '<td><b>Total Hectares</b></td>';
		$html .= '</tr>';
		
		
		
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["nome"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["nomep"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["endereco"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["municipio"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["celular"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["email"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["tipo"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["obs"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["total"].'</td>';
			$html .= '</tr>';
		}
		
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="11"><center></center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>Peso</b></td>';
		$html .= '<td><b>4,5</b></td>';
		$html .= '<td colspan="2"><b></b></td>';
		
		$html .= '<td><b>FATORES</b></td>';
		$html .= '<td><b>9</b></td>';
		$html .= '<td><b></b></td>';
		$html .= '<td><b></b></td>';
		$html .= '</tr>';
		
			$html .= '<tr>';
			$html .= '<td>Status</td>';
			$html .= '<td>C</td>';
			$html .= '<td colspan="2"></td>';
			
			$html .= '<td>SUBFATORES</td>';
			$html .= '<td>61</td>';
			$html .= '<td></td>';
			$html .= '<td></td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>Nota</td>';
			$html .= '<td>E15</td>';
			$html .= '<td colspan="2"></td>';
			
			$html .= '<td>RESPOSTAS POSITIVAS</td>';
			$html .= '<td>=SOMA(B25+B38+B49+B56+B81+B86+B97+B103+B115)</td>';
			$html .= '<td>=H5/H4</td>';
			$html .= '<td>=I5*E6</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>TOTAL=</td>';
			$html .= '<td>10,00</td>';
			$html .= '<td colspan="2"></td>';
			
			$html .= '<td>RESPOSTAS NEGATIVAS</td>';
			$html .= '<td>=H4-H5</td>';
			$html .= '<td>=H6/H4</td>';
			$html .= '<td>=I6*E6</td>';
			$html .= '</tr>'; 
			
		
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="11"><center></center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>Fatores</b></td>';
		$html .= '<td><b>Sub-fatores</b></td>';
		$html .= '<td><b>Peso</b></td>';
		$html .= '<td><b>Subtotal</b></td>';
		$html .= '<td><b>Nota</b></td>';
		$html .= '<td><b>Nível de competitividade</b></td>';
		$html .= '</tr>';
		
			$html .= '<tr>';
			$html .= '<td>1.1</td>';
			$html .= '<td>3</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.2</td>';
			$html .= '<td>10</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.3</td>';
			$html .= '<td>8</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.4</td>';
			$html .= '<td>4</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>';
			$html .= '<tr>';
			$html .= '<td>1.5</td>';
			$html .= '<td>4</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.6</td>';
			$html .= '<td>15</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.7</td>';
			$html .= '<td>3</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.8</td>';
			$html .= '<td>8</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.9</td>';
			$html .= '<td>3</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '<td>1.10</td>';
			$html .= '<td>9</td>';
			$html .= '<td>=(4,5/10)/B9</td>';
			$html .= '<td>D8</td>';
			$html .= '<td>=(C9*D8)</td>';
			$html .= '<td>=G90=SE(F23/E6<=0,2;"NC";SE(F23/E6<=0,4;"PC";SE(F23/E6<=0,6;"N";SE(F23/E6<=0,8;"C";"MC"))))</td>';
			$html .= '</tr>'; 
			;
		
		
		
		
		$result1_dados_pessoais = "SELECT * FROM tecnologia WHERE `id`=1";
		$resultado1_dados_pessoais = mysqli_query($conn, $result1_dados_pessoais);
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado1_dados_pessoais)){	
		
		$html .= '<tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#CDC9A5">';
		$html .= '<td colspan="12"><center>  TECNOLOGIA  </center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td colspan="2" bgcolor="#E0EEEE"><center>1.1</center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.1.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r111"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.1.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r112"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.1.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r113"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td> =SOMA(B24:B26)</td>';
		$html .= '</tr>';
			;
		
		
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.2</center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r121"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r122"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r123"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r124"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.5</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r125"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.6</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r126"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.7</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r127"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.8</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r128"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.9</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r129"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.10</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1210"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td> =SOMA(B29:B38) </td>';
		$html .= '</tr>';
			;
		
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.3</center></tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r131"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r132"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r133"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r134"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.5</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r135"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.6</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r136"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.7</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r137"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.3.8</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r138"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td> =SOMA(B29:B38) </td>';
		$html .= '</tr>';
			;
		
			
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.4</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.4.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r141"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.4.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r142"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.4.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r143"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.4.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r144"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td> =SOMA(B29:B38) </td>';
		$html .= '</tr>';
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.5</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.5.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r151"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.5.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r152"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.5.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r153"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.5.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r154"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td> =SOMA(B29:B38) </td>';
		$html .= '</tr>';
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.6</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.6.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r161"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r162"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r163"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r164"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.5</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r165"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.2.6</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r166"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.7</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r167"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.8</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r168"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.9</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r169"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.10</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1610"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.11</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1611"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.12</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1612"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.13</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1613"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.14</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1614"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.6.15</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1615"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td>=SOMA(B63:B77) </td>';
		$html .= '</tr>';
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.7</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.7.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r171"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.7.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r172"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.7.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r173"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td>=SOMA(B80:B82) </td>';
		$html .= '</tr>';
		;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.8</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.8.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r181"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r182"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r183"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r184"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.5</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r185"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.6</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r186"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.7</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r187"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.8.8</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r188"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td>=SOMA(B85:B92) </td>';
		$html .= '</tr>';
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.9</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.9.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r191"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.9.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r192"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.9.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r193"].'</td>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td>=SOMA(B95:B97) </td>';
		$html .= '</tr>';
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="2"><center>1.10</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>1.10.1</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1101"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.2</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1102"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.3</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1103"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.4</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1104"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.5</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1105"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.6</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1106"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.7</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1107"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.8</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1108"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>1.10.9</b></td>';
		$html .= '<td>'.$row_dados_pessoais["r1109"].'</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '<td>=SOMA(B100:B108) </td>';
		$html .= '</tr>';
			;
		}
		$result2_dados_pessoais = "SELECT * FROM gestao WHERE `id`=1";
		$resultado2_dados_pessoais = mysqli_query($conn, $result2_dados_pessoais);
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado2_dados_pessoais)){	
		
		$html .= '<tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#CDC9A5">';
		$html .= '<td colspan="12"><center>  GESTÃO  </center></tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="9"><center>2.1</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.1.1</b></td>';
		$html .= '<td><b>2.1.2</b></td>';
		$html .= '<td><b>2.1.3</b></td>';
		$html .= '<td><b>2.1.4</b></td>';
		$html .= '<td><b>2.1.5</b></td>';
		$html .= '<td><b>2.1.6</b></td>';
		$html .= '<td><b>2.1.7</b></td>';
		$html .= '<td><b>2.1.8</b></td>';
		$html .= '<td><b>2.1.9</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r211"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r212"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r213"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r214"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r215"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r216"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r217"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r218"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r219"].'</td>';
			$html .= '<td> =SOMA(A41:I41) </td>';
			$html .= '</tr>'; 
			;
			
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>2.2</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.2.1</b></td>';
		$html .= '<td><b>2.2.2</b></td>';
		$html .= '<td><b>2.2.3</b></td>';
		$html .= '<td><b>2.2.4</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r221"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r222"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r223"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r224"].'</td>';
			$html .= '<td> =SOMA(A44:D44) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>2.3</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.3.1</b></td>';
		$html .= '<td><b>2.3.2</b></td>';
		$html .= '<td><b>2.3.3</b></td>';
		$html .= '<td><b>2.3.4</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r231"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r232"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r233"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r234"].'</td>';
			$html .= '<td> =SOMA(A47:D47) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="3"><center>2.4</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.4.1</b></td>';
		$html .= '<td><b>2.4.2</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r241"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r242"].'</td>';
			$html .= '<td> =SOMA(A50:B50) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="8"><center>2.5</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.5.1</b></td>';
		$html .= '<td><b>2.5.2</b></td>';
		$html .= '<td><b>2.5.3</b></td>';
		$html .= '<td><b>2.5.4</b></td>';
		$html .= '<td><b>2.5.5</b></td>';
		$html .= '<td><b>2.5.6</b></td>';
		$html .= '<td><b>2.5.7</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr bgcolor="#E0EEEE">';
			$html .= '<td>'.$row_dados_pessoais["r251"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r252"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r253"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r254"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r255"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r256"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r257"].'</td>';
			$html .= '<td> =SOMA(A53:G53) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="4"><center>2.6</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.6.1</b></td>';
		$html .= '<td><b>2.6.2</b></td>';
		$html .= '<td><b>2.6.3</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r261"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r262"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r263"].'</td>';
			$html .= '<td> =SOMA(A56:C56) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>2.7</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.7.1</b></td>';
		$html .= '<td><b>2.7.2</b></td>';
		$html .= '<td><b>2.7.3</b></td>';
		$html .= '<td><b>2.7.4</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r271"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r272"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r273"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r274"].'</td>';
			$html .= '<td> =SOMA(A59:D59) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>2.8</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.8.1</b></td>';
		$html .= '<td><b>2.8.2</b></td>';
		$html .= '<td><b>2.8.3</b></td>';
		$html .= '<td><b>2.8.4</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r281"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r282"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r283"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r284"].'</td>';
			$html .= '<td> =SOMA(A62:D62) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>2.9</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.9.1</b></td>';
		$html .= '<td><b>2.9.2</b></td>';
		$html .= '<td><b>2.9.3</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r291"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r292"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r293"].'</td>';
			$html .= '<td> =SOMA(A65:C65) </td>';
			$html .= '</tr>'; 
			;
			
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="11"><center>2.10</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>2.10.1</b></td>';
		$html .= '<td><b>2.10.2</b></td>';
		$html .= '<td><b>2.10.3</b></td>';
		$html .= '<td><b>2.10.4</b></td>';
		$html .= '<td><b>2.10.5</b></td>';
		$html .= '<td><b>2.10.6</b></td>';
		$html .= '<td><b>2.10.7</b></td>';
		$html .= '<td><b>2.10.8</b></td>';
		$html .= '<td><b>2.10.9</b></td>';
		$html .= '<td><b>2.10.10</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r2101"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2102"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2103"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2104"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2105"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2106"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2107"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2108"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r2109"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r21010"].'</td>';
			$html .= '<td> =SOMA(A68:J68) </td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '</tr>'; 
			;
			
		}
		
		$result3_dados_pessoais = "SELECT * FROM relacao WHERE `id`=1";
		$resultado3_dados_pessoais = mysqli_query($conn, $result3_dados_pessoais);
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado3_dados_pessoais)){	
			
		$html .= '<tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#CDC9A5">';
		$html .= '<td colspan="5"><center>RELAÇÕES DE MERCADO E AMBIENTE EXTERNO</center></tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="5"><center>3.1</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>3.1.1</b></td>';
		$html .= '<td><b>3.1.2</b></td>';
		$html .= '<td><b>3.1.3</b></td>';
		$html .= '<td><b>3.1.4</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r311"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r312"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r313"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r314"].'</td>';
			$html .= '<td> =SOMA(A107:D107) </td>';
			$html .= '</tr>'; 
			;
			
		
		
		$html .= '<tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="4"><center>3.2</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>3.2.1</b></td>';
		$html .= '<td><b>3.2.2</b></td>';
		$html .= '<td><b>3.2.3</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r321"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r322"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r323"].'</td>';
			$html .= '<td> =SOMA(A111:C111) </td>';
			$html .= '</tr>'; 
			;
		
		
		$html .= '<tr>';
		$html .= '</tr>';
		$html .= '<tr bgcolor="#E0EEEE">';
		$html .= '<td colspan="4"><center>3.3</center></tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>3.3.1</b></td>';
		$html .= '<td><b>3.3.2</b></td>';
		$html .= '<td><b>3.3.3</b></td>';
		$html .= '<td><b>Total:</b></td>';
		$html .= '</tr>';
		
		
			
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["r331"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r332"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["r333"].'</td>';
			$html .= '<td> =SOMA(A115:C115) </td>';
			$html .= '</tr>'; 
			$html .= '<tr>';
			$html .= '</tr>'; 
			
			;
			
		}
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>