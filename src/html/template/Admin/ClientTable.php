
    <div class="material-table z-depth-3">
        <div class="table-header">
            <span class="table-title">Clientes</span>
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
                  <th>Client ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>UUID</th>
                  <th>Estado</th>
                  <th>Client Page</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $results = mysqli_query($connection, "SELECT tt_state_text as state, tt_id as id ,tt_first_name as fname , tt_last_name as lname ,tt_email as email , tt_uuid as uuid FROM tt_user, tt_state where tt_client ='1' and  tt_state_id=tt_fk_status  ORDER BY tt_id");
                        $items = array();
                        $count = mysqli_num_rows($results);
                        
                        while ($row = mysqli_fetch_array($results)) {
                        echo("<tr>");
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['fname'].' '.$row['lname'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['uuid'].'</td>';
                        echo '<td>'.$row['state'].'</td>';
                        echo '<td><button data-target="modal" class="btn modal-trigger indigo darken-2" value='.$row['id'].' onclick="localtemp(this);"><i class="far fa-edit fa-2x"></i></button></td>';
                        echo("</tr>");
                       }
                    ?>   
            </tbody>
            <tfoot>
                <tr>
                  <th>Client ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>UUID</th>
                  <th>Estado</th>
                  <th>Client Page</th>
                </tr>
            </tfoot>
        </table>
    </div>
