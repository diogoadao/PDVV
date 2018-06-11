
    <div class="material-table z-depth-3">
        <div class="table-header">
            
            <div class="actions">
                <a href="Javascript:void(0)" class="export-in-csv waves-effect tooltipped   btn-flat" data-position="bottom" data-delay="50"
                    data-tooltip="Export in CSV">
                    <i class="material-icons">content_copy</i>
                </a>
                <a href="Javascript:void(0)" class="search-toggle waves-effect btn-flat">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
        <table id="custom-filter-length-datatable2" class="bordered highlight">
        <thead>
                <tr>
                  <th>ID Trabalhador</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>UUID</th>
                  <th>Estado</th>
                  <th>Empresa</th>
                  <th>Client Page</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $results = mysqli_query($connection, "SELECT tt_enterprise_name as enterprise, tt_enterprise_id as contracor_id ,tt_subcontrator_id  as sub_id from tt_enterprise , tt_sub_enterprise  where tt_contractor_id = tt_enterprise_id AND tt_enterprise_id = '$_SESSION[enterprise]'");
                        while ($row = mysqli_fetch_array($results)) {
                            $results = mysqli_query($connection, "SELECT tt_state_text as state, tt_enterprise_name as enterprise, tt_id as id ,tt_first_name as fname , tt_last_name as lname ,tt_email as email , tt_uuid as uuid FROM tt_user, tt_state , tt_enterprise where (tt_worker ='1' and  tt_state_id=tt_fk_status) AND (tt_fk_Enterprise = tt_enterprise_id) AND (tt_enterprise_id = '$row[sub_id]')  ORDER BY tt_id ");
                            $row2 = mysqli_fetch_array($results);
                        echo("<tr>");
                        echo '<td>'.$row2['id'].'</td>';
                        echo '<td>'.$row2['fname'].' '.$row2['lname'].'</td>';
                        echo '<td>'.$row2['email'].'</td>';
                        echo '<td>'.$row2['uuid'].'</td>';
                        echo '<td>'.$row2['state'].'</td>';
                        echo '<td>'.$row2['enterprise'].'</td>';
                        echo '<td><button data-target="modal" class="btn modal-trigger indigo darken-2" value='.$row2['id'].' onclick="localtemp(this);"><i class="far fa-edit fa-2x"></i></button></td>';
                        echo("</tr>");
                       }
                    ?>   
            </tbody>
            <tfoot>
                <tr>
                  <th>ID Trabalhador</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>UUID</th>
                  <th>Estado</th>
                  <th>Empresa</th>
                  <th>Client Page</th>
                </tr>
            </tfoot>
        </table>
    </div>
