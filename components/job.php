<?php
function generate_job_card($name = "Dev", $location = "Lyon", $type = "CDI", $time = "Temps plein", $salary = "33k/an", $techs = ['REACT', 'PYTHON', 'SQL'])
{
    $part1 = "
    <div class='card-body bg-white mb-3 mt-3 border-start border-4 border-secondary job'>
            <div class='section'>
                <h4>$name</h4>
                <ul class='d-lg-flex flex-wrap'>
                    <li class='me-4'><i class='fa-solid fa-location-dot'></i> <span class='ms-1'>$location</span> </li>
                    <li class='me-4'><i class='fa-solid fa-file-contract'></i><span class='ms-1'>$type</span></li>
                    <li class='me-4'><i class='fa-solid fa-clock-rotate-left'></i><span class='ms-1'>$time</span></li>
                    <li class='me-4'><i class='fa-solid fa-euro-sign'></i><span class='ms-1'>$salary</span></li>
                </ul>
            </div>
            ";
    $part2 = "<div class='section'>";
    foreach ($techs as $tech) {
        $part2 .= generate_tech($tech);
    }
    $part2 .= "</div>";
    $part3 = "
    <div class='section'>
    <button class='btn btn-secondary px-5 m-3' style='height: 40px'>
        Postuler
    </button>
</div>
</div>
    ";
    return $part1 . $part2 . $part3;
}

function generate_tech($name = 'REACT')
{
    return "<span class='badge bg-grey mx-1'>$name</span>";
}


function dummy_card()
{

    echo `<h1>TEST</h1>
<p>Test content</p>
`;
}
