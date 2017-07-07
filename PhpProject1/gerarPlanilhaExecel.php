<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
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
		$arquivo = 'msgcontatos.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="2">';
		$html .= '<tr>';
		$html .= '<td colspan="3">Caracterização do sistema de produção</tr>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>Nome Propriedade</b></td>';
		$html .= '<td><b>Proprietário</b></td>';
		$html .= '<td><b>Endereco</b></td>';
		$html .= '<td><b>Municipio</b></td>';
		
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_dados_pessoais = "SELECT * FROM usuarios";
		$resultado_dados_pessoais = mysqli_query($conn, $result_dados_pessoais);
		
		while($row_dados_pessoais = mysqli_fetch_assoc($resultado_dados_pessoais)){
			$html .= '<tr>';
			$html .= '<td>'.$row_dados_pessoais["nome"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["nomep"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["endereco"].'</td>';
			$html .= '<td>'.$row_dados_pessoais["municipio"].'</td>';
			
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