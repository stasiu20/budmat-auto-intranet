<?php 
require './vendor/autoload.php';
$apikey = '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 ';
include './pages/layout/head.php';  
include './pages/layout/sidebar-nav.php'; 

$message = '';
if(isset($_POST['forname']) && $_POST['forname'] !== ''  ) {
    if($_POST['forname'] === "" || $_POST['surname'] === "" || $_POST['email-adress'] === "" ||$_POST['subject'] === "" || $_POST['message'] === ""){
        $sent = false;
        $message = 'Wszystki pola formularza muszą być wypełnione';
    } else {
        $model = $_POST;
        $to_email = 'michal.a.zoltowski@gmail.com';
        $email_message =$model['forname'].' '. $model['surname'].'<br />'
                .$model['message']. '<br />'
                .'odpisz na adres: '.$model['email-adress'];
        
        $from = new SendGrid\Email(null, "budmat-auto-intranet@budmatauto.com");
        $subject = $model['subject'];
        $to = new SendGrid\Email(null, $to_email);
        $content = new SendGrid\Content("text/html",$email_message);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $sg = new \SendGrid($apikey);
        $response = $sg->client->mail()->send()->post($mail);
        
        $success = $response->statusCode() == 202 ? true : false ;
        if ($success) {
            $sent = true;
            $message = 'Dziękujemy za wysłanie maila';
            unset($_POST['forname']);
        } else {
            $sent = false;
            $message = 'Przepraszamy, ale mieliśmy problem z wysłaniem Twojego maila, spróbuj ponownie później';
        }
    }
}
?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Wyślij maila
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Strona Główna</a></li>
        <li class="active">wyślij-maila</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content overflow">
      <div class="row">
          <div class="alert alert-danger" style="display: none" role="alert">
            Przed wysłaniem maila popraw wszystki błędy
            </div>
          <?php if(isset($sent)): ?>
          <div class="alert alert-<?= (($sent))? 'success': 'danger' ?>"role="alert">
            <?= $message ?>
          </div>
          <?php endif;?>
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-body">
              <form action="" method="post" id='email-form'>
                  <label for='forname'> <span class='star-valid' >*</span>Imię: </label>
                <div class="form-group">
                  <input type="text" class="form-control" name="forname" placeholder="Imię">
                  <div class='form-error' style='display: none'></div>
                </div>
                  <label for='surname'> <span class='star-valid' >*</span>Nazwisko: </label>
                <div class="form-group">
                  <input type="text" class="form-control" name="surname" placeholder="Nazwisko">
                  <div class='form-error' style='display: none'></div>
                </div>
                  <label for='email-adress'> <span class='star-valid' >*</span>Email: </label>
                <div class="form-group">
                  <input type="email" class="form-control" name="email-adress" placeholder="Email">
                  <div class='form-error' style='display: none'></div>
                </div>
                    <label for='subject'> <span class='star-valid' >*</span>Temat: </label>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Temat">
                  <div class='form-error' style='display: none'></div>
                </div>
                    <label for='message'> <span class='star-valid' >*</span>Wiadomość: </label>
                <div>
                  <textarea name='message'  placeholder="Wiadomość"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <div class='form-error' style='display: none'></div>
                </div>
                    <div class="box-footer clearfix">
                <button type="submit" class="pull-right btn btn-default" id="email-send">Wyślij
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
              </form>
            </div>
              </div>
          </div>

        </section>
      </div>
  <?php include'./pages/layout/footer.php' ?>