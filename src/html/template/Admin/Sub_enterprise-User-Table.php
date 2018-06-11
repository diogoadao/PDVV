
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
        <table id="custom-filter-length-datatable" class="bordered highlight">
        <thead>
                <tr>
                  <th>ID Empresa</th>
                  <th>Nome Empresa</th>
                  <th>User Page</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $results = mysqli_query($connection, "SELECT tt_enterprise_name as enterprise, tt_enterprise_id as contracor_id ,tt_subcontrator_id  as sub_id from tt_enterprise , tt_sub_enterprise  where tt_contractor_id = tt_enterprise_id AND tt_enterprise_id = '$_SESSION[enterprise]'");
                        
                        
                        
                        while ($row = mysqli_fetch_array($results)) {
                            $results2 = mysqli_query($connection, "SELECT tt_enterprise_name as sub_enterprise from tt_enterprise where tt_enterprise_id = '$row[sub_id]'");
                            $row2 = mysqli_fetch_array($results2);
                            echo("<tr>");
                            echo '<td>'.$row['sub_id'].'</td>';
                            echo '<td>'.$row2['sub_enterprise'].'</td>';
                            echo '<td><button data-target="modal" class="btn modal-trigger indigo darken-2" value='.$row['sub_id'].' onclick="localtemp(this);"><i class="far fa-edit fa-2x"></i></button></td>';
                            echo("</tr>");
                       }
                    ?>   
            </tbody>
            <tfoot>
                <tr>
                <th>ID Empresa</th>
                  <th>Nome Empresa</th>
                  <th>User Page</th>
                </tr>
            </tfoot>
        </table>
    </div>
