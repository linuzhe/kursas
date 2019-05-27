<?php 

if (isset($_POST['submit'])) {
    
    $vardas = trim($_POST['name']);
    $company = trim($_POST['company']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = 'no-reply'; 
            $to = 'linuzhe@gmail.com';
            $subject = 'Nauja žinutė';
            $klientas = 'Nuo: ' . $vardas . ', ' . $company . ', '. $email;
            $zinute = htmlspecialchars($klientas . "\n" . $message);
            mail($to, $subject, $zinute, ['From' => $from]); 
            echo "<script>alert('Dėkojame. Jūsų žinutė gauta.');</script>";
        }
    }
    
    include('db.php');
}

?>