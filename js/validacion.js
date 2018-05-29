<script type="text/javascript">
    function verificaRadios(form){
        marcado=false;
        for (var i = 0; i < form.dia.length; i++) {
            if (form.dia[i].checked)
                marcado = true;
        }

        if(!marcado){
            alert("Favor de llenar todo el cuestionario");
            return false;
        }
        else{
            return true;
        }
    }
	</script>