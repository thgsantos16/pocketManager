<?php

// control the Application States

//print_r($_SESSION);

if(isset($_SESSION['user'])) { ?>

<script>

$(function() {
	navigate('dashboard');
    innerPages('<?=$_SESSION['user']?>');
});

</script>

<?php } ?>