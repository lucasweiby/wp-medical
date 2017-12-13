
<html lang="pt-BR">
    <head> <meta charset="utf-8"></head>
    <?php 
    session_start();
    
    $nome = $_POST["nome"];  
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $assunto = $_POST["assunto"];
    $msg = $_POST["msg"];   
    
    require_once("PHPMailerAutoload.php");

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
    ));
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "vendas@completta.com.br";
    $mail->Password = "1381@AJmy";
    
    $mail->setFrom("vendas@completta.com.br","Requisitando atendimento");
    $mail->addAddress("vendas@completta.com.br");
    $mail->Subject = "Email de contato";
    $mail->msgHTML("<html><br>De: {$nome}<br>Email: {$email}<br>Telefone: {$telefone}<br>Assunto: {$assunto}<br>Mensagem: {$msg}</html>");
    $mail->AltBody = "De: {$nome}\nEmail: {$email}\nTelefone: {$telefone}\nAssunto: {$assunto}\nMensagem: {$msg}";
        
        
    if($mail->send()){
        $_SESSION["success"] = "Obrigado, Logo entraremos em contato!";
        header("Location: ../../index#contact");
        
    } else{
        $_SESSION["danger"] = "Erro ao enviar, por favor tente novamente!";        
        header("Location: ../../index#contact");
    }
    die();
    ?>
    
    </html>
   
