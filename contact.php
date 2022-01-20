$html='<table align="center" border="0" cellpadding="0" cellspacing="0" width="500px"><tbody>
      <tr>
         <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border:10px solid#117bc0" width="400">
               <tbody>
                  <tr>
                     <td colspan="2">
                        <div>
                           <span>
                              <b style="color:black;font-size: 20px;text-align:right">
                                 <center>Tradr</center>
                              </b>
                              <br/>
                           </span>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2" style="padding:10px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px;background-color: #fff;" valign="top">
                        <br/>
                        Dear <b>'.$usr_exits->customer_name.'</b>,<br />
                        <br />
                        Please click on below link to reset your password <br />
                        <b>Link: </b>'.$link.'<br />
                        <br /> 
                        Thanks &amp; Regards<br />
                        <strong>Team - <a style="color:black;text-decoration:none">Tradr</a></strong><br />
                        &nbsp;
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>';
    $to = $usr_exits->customer_email;
$subject = "Reset your Tradr Password";
$txt = $html;
$headers = "From: tradr@gmail.com" . "\r\n" ."CC: kurvekomal9@gmail.com";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$txt,$headers);