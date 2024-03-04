<?php
echo "test file";
?>
<script>
runit()
async function runit() {
        var myURL = "http://localhost:8000/api/tables";
        let myConvObject = await fetch(myURL);
        let myToValue = await myConvObject.text();    
}
</script>