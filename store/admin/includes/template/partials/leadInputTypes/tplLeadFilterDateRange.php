<?php
/**
 * Admin Lead Template  - dateRange partial
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:   New in v1.6.0 $
 */
?>
    <div class="input-group col-sm-6">
        <button type="button" class="btn btn-default pull-right <?php echo $tplVars['pageDefinition']['action']; ?>LeadFilterInput" id="<?php echo $tplVars['pageDefinition']['fields'][$field]['field'] . '_daterangepicker'; ?>">
                    <span>
                      <i class="fa fa-calendar"></i><?php echo TEXT_SELECT_DATE_RANGE; ?>
                    </span>
            <i class="fa fa-caret-down"></i>
        </button>
        <input type="hidden" name="<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>" id="<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>">
        <?php require('includes/template/partials/' . $tplVars['pageDefinition']['errorTemplate']); ?>
    </div>
<script>
    $('#<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>_daterangepicker').daterangepicker(
        {
            ranges: {
                <?php //foreach ($foo) { ?>
                <?php //} ?>
                '<?php echo TEXT_DATE_RANGE_TODAY; ?>': [moment(), moment()],
                '<?php echo TEXT_DATE_RANGE_YESTERDAY; ?>': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '<?php echo TEXT_DATE_RANGE_LAST_7_DAYS; ?>': [moment().subtract(6, 'days'), moment()],
                '<?php echo TEXT_DATE_RANGE_LAST_30_DAYS; ?>': [moment().subtract(29, 'days'), moment()],
                '<?php echo TEXT_DATE_RANGE_THIS_MONTH; ?>': [moment().startOf('month'), moment().endOf('month')],
                '<?php echo TEXT_DATE_RANGE_LAST_MONTH; ?>': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function (start, end) {
            $('#<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>_daterangepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    $('#<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>_daterangepicker').on('apply.daterangepicker', function(ev, picker) {
        var daterange = picker.startDate.format('YYYY-MM-DD') + ':' + picker.endDate.format('YYYY-MM-DD');
        $('#<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>').val(daterange);
        $('#<?php echo $tplVars['pageDefinition']['fields'][$field]['field']; ?>_daterangepicker').trigger('mouseup');
    });
</script>
