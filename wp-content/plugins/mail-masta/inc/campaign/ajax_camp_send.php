<?php





global $wpdb;



date_default_timezone_set(get_option('timezone_string'));



if(!empty($_POST)) {



 $camp_id  = trim($_POST['camp_id']);







 $list_id  = trim($_POST['list_id']);



//mail('akil.badshah@luutaa.com','test', $list_id);



 $offset   = $_POST['offset'];



 if(empty($offset)){



	$offset = 0; 



  }



 $limit = 1;



 



 $masta_subscribers = $wpdb->prefix . "masta_subscribers";



 $masta_reports = $wpdb->prefix . "masta_reports";



 $masta_campaign = $wpdb->prefix . "masta_campaign";



 $masta_settings = $wpdb->prefix."masta_settings";



 



 $app_details = $wpdb->get_results("SELECT * FROM $masta_settings");



 $rows_data = $app_details[0];



 $api_send_type = $rows_data->send_type;

 

 

 

 	













 //$sql = "SELECT * FROM $mail_reports where camp_id = $camp_id and list_id = $list_id order by id asc limit $offset,$limit";















 $where_array = array('camp_id' => $camp_id);



		$update_data  = array('status'=>4);



		$wpdb->update($masta_campaign,$update_data,$where_array);







// update  wp_mail_reports set status=2 where camp_id=454	







 $listdata = $wpdb->get_results("SELECT * FROM $masta_reports where camp_id = $camp_id and list_id = $list_id and status=2 order by id asc");







 if(count($listdata) > 0) {







	for($ti=0;$ti<count($listdata);$ti++){







		



		sleep(0.2);







	



		 	$rs_data2 = $wpdb->get_results( "SELECT * FROM $masta_campaign WHERE camp_id = $camp_id");



			if($rs_data2[0]->status=='2'){



				die();



			}



			

			







		$row_data =  $listdata[$ti];



		$sent_date = date("Y-m-d H:i:s");



		$req_id = '';



		$msg_id = '';



		$status = $row_data->status;



		$sub_status = $row_data->sub_status;



		$sub_email = $row_data->subscriber_email;



		$subscriber_id = $row_data->subscriber_id;



		$report_id = $row_data->id;

		

			

			

		if($status == 2 && $sub_status == 1){



			



			$rs_data = $wpdb->get_results( "SELECT * FROM $masta_campaign WHERE camp_id = $camp_id");

				

			



			$campaing_data = $rs_data[0];	

			

			



			$open_url = home_url().'?openid='.urlencode(mmasta_encrypt($report_id));



			$encrypt_url = home_url().'?uid='.urlencode(mmasta_encrypt($subscriber_id));



			$reportides=urlencode(mmasta_encrypt($report_id));



			$arrr = array("id=mailmastadata" => "id=".$reportides);



			$contentbody=strtr($campaing_data->cammail,$arrr);



			$arrr = array("[unsubscribe]" => '<a href="'.$encrypt_url.'">', "[/unsubscribe]" => '</a>');



			$contentbody=strtr($contentbody,$arrr);



			$contentbody=strtr($contentbody,$arrr);



		



			$wp_maillist=$wpdb->prefix.'masta_list';



			$wp_mailsubs=$wpdb->prefix.'masta_subscribers';







			$list_id_o=$wpdb->get_results( "SELECT * FROM $wp_maillist WHERE  list_id = $list_id");



			$subscriber_id_o=$wpdb->get_results( "SELECT * FROM  $wp_mailsubs WHERE  id = $subscriber_id");







			$da=(array)json_decode($list_id_o[0]->edit_form);



			$ed=(array)json_decode($subscriber_id_o[0]->subscriber_data);







			$da_keys=array_keys($da);



			$ed_keys=array_values($ed);



			//remove placeholder  [email]

			$value_by_r=$subscriber_id_o[0]->email;

			$value_to_r='[email]';

			$arrv=array($value_to_r=>$value_by_r);

			$contentbody=strtr($contentbody,$arrv);

			//end placeholder [email]



			foreach($da_keys as $key=>$values)



			{



				$value_to_r='['.$values.']';



				$arrv=array($value_to_r=>$ed_keys[$key]);	



				$contentbody=strtr($contentbody,$arrv);



			}



					



			$checkstr='<a href="'.$encrypt_url.'">';



			//if (strpos($contentbody,$checkstr) !== false)



			//{



				$link_msg = $contentbody.'<br><img src="'.$open_url.'" height="1" width="1">';



				$plainTextBody = $contentbody.'<br><img src="'.$open_url.'" height="1" width="1">';



			//}



			//else{



			//	$link_msg = $contentbody.'<br><a href="'.$encrypt_url.'">Click here to unsubscribe</a><br><img src="'.$open_url.'" height="1" width="1">';



			//	$plainTextBody = $contentbody.'<br><a href="'.$encrypt_url.'">Click here to unsubscribe</a><br><img src="'.$open_url.'" height="1" width="1">';	



			//}	 

			

			if(get_option('Secret')==''){



			$plainTextBody=$plainTextBody."<div style='text-align: center; margin-top: 25px;'><a href='http://getmailmasta.com'><img src='".plugins_url()."/mail-masta/lib/css/images/mailmasta-finalmail.png'></a></div>";

			

				$link_msg=$plainTextBody;

			

			

			}

			

			

			if($api_send_type == '2') {



			   $msg_body_header = '<html><body>';	



			   $msg_body_footer = '</body></html>';



			   $headers  = 'MIME-Version: 1.0' . "\r\n";



			   $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";



			   $headers .= 'From: '.ucfirst($campaing_data->from_name).' <'.$campaing_data->from_email.'>' . "\r\n";



			   $send_subject = $campaing_data->subject;



			}



			if($api_send_type == 1) {



				//array_push($mail_array,$emails->email);



				 $ses = new SimpleEmailService($rows_data->accesskey, $rows_data->secretkey);



				$m = new SimpleEmailServiceMessage();



				$m->addTo($sub_email);



				$m->setFrom($campaing_data->from_email);



				$m->setSubject($campaing_data->subject);



				$m->setMessageFromString($plainTextBody,$link_msg); 



				$rt =  $ses->sendEmail($m);



				if(!empty($rt['MessageId'])){



				  $msg_id = $rt['MessageId']; 	



				}



				



				if(!empty($rt['RequestId'])){



				  $req_id = $rt['RequestId']; 	



				}







			} else {

			

				$send_message = $msg_body_header.$plainTextBody.$msg_body_footer;



				mail($sub_email, $send_subject, $send_message, $headers);



			}



			



		} 



		$where_array = array('id' => $report_id);



		$update_data  = array('status'=>1,'request_id'=>$req_id,'message_id'=>$msg_id,'sent_date'=>$sent_date);



		$rows_affected_one = $wpdb->update($masta_reports,$update_data,$where_array);



		$error = $wpdb->print_error();



		$insert_id = '212';



		//$insert_id = $wpdb->insert_id;



		if(!empty($insert_id)) {



		  echo 'the last insert id is '.$insert_id;	



		} else {



		  echo '';exit;	



		}   



	  } 



	} 







  else {



    //echo '';exit;	  



  }















			 $countall=$wpdb->get_results("SELECT count(*) co from  $masta_reports where camp_id=$camp_id and status=2");



 	//mail('akil.badshah@luutaa.com',$countall[0]->co, $countall[0]->co);



 		if($countall[0]->co==0){







		 $where_array = array('camp_id' => $camp_id);



		$update_data  = array('status'=>1);



		$wpdb->update($masta_campaign,$update_data,$where_array);



		die();



		 }











}









    



?>



