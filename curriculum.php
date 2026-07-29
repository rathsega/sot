<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;



// Excel file path
$excelFilePath = './curriculums/'. $current_slug . '.xlsx';

// Load the Excel file
$spreadsheet = IOFactory::load($excelFilePath);
$sheet = $spreadsheet->getActiveSheet();

// Iterate through rows and insert data into the database
$dates = [];
$curriculum = [];
foreach ($sheet->getRowIterator() as $rkey => $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    
    $rowData = [];
    foreach ($cellIterator as $cellKey => $cell) {
        $rowData[] = $cell->getValue();
    }
    
    if($rkey > 1){
        if(!isset($curriculum[$rowData[0]])){
            $curriculum[$rowData[0]] = [];
        }
        $curriculum[$rowData[0]][] = array('topic_name'=>$rowData[1]);
    }

    
    $sheetData[] = $rowData;


    // Assuming your table has columns: column1, column2, column3
    /*$sql = "INSERT INTO your_table (column1, column2, column3) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($rowData);*/
}

$ind = 0;
$modules_html = '';
foreach($curriculum as $module_name => $topics){
    $ind++;
    $id = "module_" . $ind;
    $data_bs_target = "#collapse_module_" . $ind;
    $aria_controls = "collapse_module_" . $ind;
    $expnad_topics = $ind == 1 ? 'show' : '';
    $topics_html = getTopicsHtml($aria_controls, $id, $topics, $expnad_topics);
    $module_duration = 0;//getModulesDuration($topics);
    $aria_expanded = $ind == 1 ? 'true' : 'false';
    $module_button = $ind == 1 ? '' : 'collapsed';
    $modules_html .= getModuleHtml($module_name, $module_duration, $id, $data_bs_target, $aria_controls, $topics_html, $aria_expanded, $module_button);
}

echo '<div class="course-content rbt-border-with-box coursecontent-wrapper mt--30" id="coursecontent">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h2 class="rbt-title-style-3">Course Content</h2>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                <div class="course-timeline">
                                    <div class="accordion" id="accordionExampleb2">'. $modules_html .' </div> </div> </div> </div> </div>';

function getModuleHtml($module_name, $module_duration, $id, $data_bs_target, $aria_controls, $topics_html, $aria_expanded, $module_button){
    return '<div class="accordion-item card">
                                            <h3 class="accordion-header card-header" id="headingTwo1">
                                                <button class="accordion-button '. $module_button .'" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="'. $data_bs_target .'" aria-expanded="'. $aria_expanded .'"
                                                    aria-controls="'. $aria_controls .'">
                                                    '. $module_name .' 
                                                </button>
                                            </h3>'. $topics_html .'</div>';
}

function getTopicsHtml($id, $aria_labelledby, $topics, $expnad_topics){
    $topics_html = generateTopicsHtml($topics);

    return '<div id="'.$id.'" class="accordion-collapse collapse '. $expnad_topics .'"
                                                aria-labelledby="'.$aria_labelledby.'" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        '. $topics_html .'

                                                    </ul>
                                                </div>
                                            </div>';
}

function generateTopicsHtml($topics){
    $topic_list = '';
    foreach($topics as $tkey => $topic){
        //$duration = getHoursFromMinutes($topic['topic_duration']);
        //$icon = $topic['topic_type'] == 'video' ? '<i class="feather-play-circle"></i>' : '<i class="feather-file-text"></i>';
        $topic_list .= '<li>
                            <a href="javascript:void(0);">
                                <div class="course-content-left">
                                    <i class="feather-book"></i> <span
                                        class="text">'. $topic['topic_name'] .'</span>
                                </div>
                                <div class="course-content-right">
                                </div>
                            </a>
                        </li>';
    }
    return $topic_list;
}

function getModulesDuration($topics){
    $total_topics_duration = 0;
    foreach($topics as $tkey => $topic){
        $total_topics_duration += (int)$topic['topic_duration'];
    }
    return getHoursFromMinutes($total_topics_duration);
}

function getHoursFromMinutes($mins){
    $mins = (int)$mins;
    if($mins < 60){
        return $mins . " min";
    }else{
        $hours = $mins/60;
        $minutes = $mins%60;
        if($minutes < 10){
            $minutes = "0".$minutes;
        }
        return floor($hours) . 'Hr:' . $minutes . 'Min'; 
    }
}

//var_dump($curriculum);


//echo "Data inserted successfully.";

?>
