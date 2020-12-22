<?php
$this->load->view('mail/header');
?>

<tr>
 <td cellpadding="0" cellspacing="0" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#ffffff;border-bottom:1px solid #edeff2;border-top:1px solid #edeff2;margin:0;padding:0;width:100%" width="100%">
    <table  style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#ffffff;margin:0 auto;padding:0;width:570px" width="570" cellspacing="0" cellpadding="0" align="center">
       <tbody>
          <tr>
             <td style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;padding:35px;font-size: 16px;">
                <p>Hi <?php print_r($name);?>,</p>
        				<p>VISF For Study has received a request to reset the password for your account.</p>
        				<p>Password : <?=$password?></p>

        				<p>Kind Regards</p>
                <p>VISF For Study Admin</p>

             </td>
          </tr>
       </tbody>
    </table>
 </td>
</tr>

<?php
$this->load->view('mail/footer');
?>
