<?php require_once('function.php') ?>
<?php
if(!isset($_GET['msg'])){
    echo "<script> alert('No message to set.'); location.href='./'</script>";
}

$msg  = $_GET['msg'];

switch ($msg){
    case 'info';
        set_flashdata('info',"<i class='fa fa-info-circle'></i> This is a Sample Info Message.");
    break;
    case 'success';
        set_flashdata('success',"<i class='fa fa-check'></i> This is a Sample Success Message.");
    break;
    case 'error';
        set_flashdata('danger',"<i class='fa fa-exclamation-triangle'></i> This is a Sample Error Message.");
    break;
    case 'multiple';
        set_flashdata('info',"<i class='fa fa-info-circle'></i> This is a Sample Info Message.");
        set_flashdata('success',"<i class='fa fa-check'></i> This is a Sample Success Message.");
        set_flashdata('danger',"<i class='fa fa-exclamation-triangle'></i> This is a Sample Error Message.");
    break;
    default:
        set_flashdata('danger',"Undefined Flash Message.");
    break;
}
header('location:./');