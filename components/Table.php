<?php
class Table
{
    public array $th_names;
    public array $actions;

    function __construct(array $th_names, array $actions = [])
    {
        $this->th_names = $th_names;
        $this->actions = $actions;
    }
    public function generate(array $rows): string
    {
        $table = "<table class='table table-striped'>";
        $table_end = "</table>";
        $thead = self::generate_thead();
        $table .= $thead;
        $tbody_start = "<tbody>";
        $table .= $tbody_start;
        $trs = "";
        foreach ($rows as $row) {
            $tr = self::generate_tr($row);
            $trs .= $tr;
        }
        $table .= $trs;
        $tbody_end = "</tbody>";
        $table .= $tbody_end;
        $table .= $table_end;
        return $table;
    }

    private function generate_thead(): string
    {
        $thead = "";
        $thead_start = "<thead><tr>";
        $thead_end = "</tr></thead>";
        $thead .= $thead_start;
        $th_names = $this->th_names;
        foreach ($th_names as $th_name) {
            $thead .= "<th scope='col'>$th_name</th>";
        }
        $actions = $this->actions;
        if (!empty($actions)) {
            $thead .= "<th scope='col'>Actions</th>";
        }
        $thead .= $thead_end;
        return $thead;
    }


    private function generate_tr(array $tds): string
    {
        $row_data = "";
        foreach ($tds as $td) {
            $row_data .= "<td>$td</td>";
        }
        $actions = $this->actions;
        if (!empty($actions)) {
            $action_buttons = "";
            foreach ($actions as $id => $name) {
                $action_buttons .= "<button type='button' id='$id' class='btn btn-outline-success'>$name</button>";
            }
            $actions_conainer = "<div class='btn-group' role='group' aria-label='Basic outlined example'>$action_buttons</div>";
            $td_actions = "<td>$actions_conainer</td>";
            $row_data .= $td_actions;
        }
        return "<tr>$row_data</tr>";
    }
}
