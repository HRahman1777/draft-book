<input type="text" value="" class='numid' />
<input type="text" value="" class='numid' />
<input type="text" value="" class='numid' />
<input type="text" value="" class='numid' />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.numid').on('change', function() {
            let inputValue = $(this).val();
            let isDuplicate = false;

            $('.numid').not(this).each(function() {
                if ($(this).val() === inputValue) {
                    isDuplicate = true;
                }
            });

            if (isDuplicate) {
                alert('Duplicate!!');
                $(this).val('');
            }
        });
    });
</script>
