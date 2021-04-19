    <?php
require_once("../../common/common.php");
require_once("../../config/db-config.php");
/**
 * section-questions.js
 */
// store $_POST data
// $sec_id = $_POST['sec_id'];
// * unique file storage location
$fileFolder = "../../admin/uploads/";
$unique_save_name = time() . uniqid(rand());
$target_file = $fileFolder . $unique_save_name . '.csv';
// ! delete any file with same name, if exists
if (file_exists($target_file)) {
    unlink($target_file);
}
if (!move_uploaded_file($_FILES["csv_file"]["tmp_name"], $target_file)) {
    die("Sorry, there was an error uploading file, try to Upload it Later.");
}
// open file in read mode
$file = fopen($target_file, "r");
// read csv contents
// $getData = fgetcsv($file, 5000, ",");t_r($getData);
// construct query with data from the file

 ///   $query .= " ($getData[0], '$getData[2]', '$getData[3]', '$getData[4]', '$getData[5]', '$getData[6]', $getData[7], $getData[8], $getData[1], 1),";

$query="";

while (($getData = fgetcsv($file, 5000, ",")) !== FALSE) {
   

$query.="  INSERT  IGNORE INTO class (name)
     VALUES ('$getData[0]');

     INSERT  IGNORE INTO subjects (class_id, name)
     VALUES ((SELECT id FROM class WHERE name='$getData[0]'), '$getData[1]');

    
     INSERT  IGNORE INTO topics (subject_id, name)
     VALUES ((SELECT subject_id FROM subjects WHERE name='$getData[1]' AND class_id=(SELECT id FROM class WHERE name='$getData[0]')),'$getData[2]');


     INSERT  IGNORE INTO sub_topics (topic_id, name)
     VALUES ((SELECT topic_id FROM topics WHERE name='$getData[2]' AND subject_id=(SELECT subject_id FROM subjects WHERE name='$getData[1]'  AND class_id=(SELECT id FROM class WHERE name='$getData[0]'))),'$getData[3]')
     ;";

///$query = rtrim($query, ',');



///example
//getdata[0]=class
 ///  getdata[1]=subject
 //  getdata[2]=topic
    // getdata[3]=subtopic


    //    INSERT  IGNORE INTO class (name)
    //  VALUES ('32');

    //  INSERT  IGNORE INTO subjects (class_id, name)
    //  VALUES ((SELECT id FROM class WHERE name='32'), "new_subject");

    
    //  INSERT  IGNORE INTO topics (subject_id, name)
    //  VALUES ((SELECT subject_id FROM subjects WHERE name='new_subject' AND class_id=(SELECT id FROM class WHERE name='32')), "new_topic");


    // INSERT  IGNORE INTO sub_topics (topic_id, name)
    //  VALUES ((SELECT topic_id FROM topics WHERE name='new_topic' AND subject_id=(SELECT subject_id FROM subjects WHERE name='new_subject' AND class_id=(SELECT id FROM class WHERE name='32'))),'sub_topic');


}
  echo $query."<br>";
fclose($file); // close file
///$query = rtrim($query, ',');
 ///echo $query;
  //  multi_query(($conn, $query) or die( mysqli_error($conn));

if(!$conn-> multi_query($query))
    echo "error";
else
    echo "success";
unlink($target_file); // remove file
// send response to AJAX function

?>