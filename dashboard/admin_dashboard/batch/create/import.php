<?php
session_start();
$connect=mysqli_connect('localhost','root','','rubric');

require '../../../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $project_id = $row['0'];
                $student_name = $row['1'];
                $seat_no = $row['2'];
                $batch = $row['3'];
                $department = $row['4'];
                $fyp_title = $row['5'];
                $supervisor = $row['6'];
                // INSERT INTO `rubric`(`student_name`, `seat_no`, `department`,`batch` )
                $Query = "INSERT INTO `rubric`(`project_id`, `student_name`, `seat_no`,`batch` , `department`,`fyp_title`, `supervisor` ) VALUES ('$project_id','$student_name','$seat_no','$batch','$department', '$fyp_title', '$supervisor')";
                $result = mysqli_query($connect, $Query);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: create.php');
            // exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: create.php');
            // exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: create.php');
        // exit(0);
    }
}
?>