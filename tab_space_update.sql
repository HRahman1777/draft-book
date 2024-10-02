UPDATE `capilary_tube_suction_tube_tracking_copy`
SET capilary_barcode = TRIM(REPLACE(capilary_barcode, '\t', '')),
    suction_barcode = TRIM(REPLACE(suction_barcode, '\t', ''))
WHERE capilary_barcode LIKE '%\t%'
   OR suction_barcode LIKE '%\t%';



