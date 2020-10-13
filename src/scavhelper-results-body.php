<!-- nested collapse -->
<div class="panel-group col-md-6 col-lg-4" id="accordion1<?php echo $location_id; ?>">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn bg-info" data-toggle="collapse" data-parent="#accordion1<?php echo $location_id; ?>" href="#collapseThree<?php echo $location_id; ?>">
                <?php echo $result['name'] . " (" . count($result['items_count']) . ")"; ?>
            </a>
        </div>
        <div id="collapseThree<?php echo $location_id; ?>" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="panel-group" id="accordion2<?php echo $location_id; ?>">
                    <?php foreach ($result['stages'] as $stage_id => $stage_result) { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="btn btn-default" data-toggle="collapse" data-parent="#accordion2<?php echo $location_id; ?>" href="#collapseThreeOne<?php echo $location_id . $stage_id; ?>">
                                  <?php echo $stage_result['name'] . " (" . count($stage_result['items']) . ")"; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThreeOne<?php echo $location_id . $stage_id; ?>" class="panel-collapse collapse <?php if (count($result['stages']) == 1) { echo "in"; } ?>">
                            <div class="table-responsive">
                            <table class="table table-bordered" style="margin:0;">
                            <?php foreach ($stage_result['items'] as $item_id => $item_result) { ?>
                                <tr>
                                    <td>
                                        <?php echo $item_result['name']; ?>
                                    </td>
                                    <td style="padding:0;">
                                        <table class="table table-bordered table-condensed table-striped" style="margin:0;">
                                          <th>
                                              <td>Drop rate</td><td>Total Catches</td><td>Total Hunts</td>
                                          </th>
                                          <?php foreach ($item_result['cheese'] as $cheese_result) { ?>
                                            <tr>
                                                <td>
                                                   <?php echo $cheese_result['name']; ?>
                                                </td>
                                                <td>
                                                   <?php echo $cheese_result['drop_rate']; ?>&#37;
                                                 </td>
                                                 <td>
                                                   <?php echo $cheese_result['total_catches']; ?>
                                                 </td>
                                                 <td>
                                                   <?php echo $cheese_result['total_hunts']; ?>
                                                </td>
                                             </tr>
                                        <?php } ?>
                                        </table>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>